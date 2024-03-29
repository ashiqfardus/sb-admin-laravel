<?php

namespace App\Http\Controllers;
use App\Slider;
use Illuminate\Http\Request;
use Session;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=1;
        return view('admin.slider.view_all')->with('sliders', Slider::all())->with('n',$n);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.slider.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'image'=>'required|image'
        ]);

        $image=$request->image;
        $image_new_name=time().$image->getClientOriginalName();
        $image->move('image/slider',$image_new_name);

        $slider=Slider::create([
            'title'=>$request->title,
            'image'=>$image_new_name
        ]);

        Session::flash('success','You Successfully added an Image');

        return redirect()->route('slider.create');         //$slider->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider=Slider::find($id);
        return view('admin.slider.edit')->with('slider',$slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Slider::find($id);
        $this->validate($request,[
           'title'=>'required'
        ]);

        if ($request->hasFile('image'))
        {
            $image=$request->image;
            $image_new_name=time().$image->getClientOriginalName();
            $image->move('image/slider',$image_new_name);
            $post->image=$image_new_name;
        }
        $post->title=$request->title;
        $post->save();


        Session::flash('success','Slider updated successfully');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider=Slider::find($id);
        $slider->delete();
        unlink('image/slider/'.$slider->image);
        Session::flash('success','Slider Deleted successfully');
        return redirect()->back();
    }
}
