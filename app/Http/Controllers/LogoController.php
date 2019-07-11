<?php

namespace App\Http\Controllers;
use App\Logo;
use Session;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.logo.index')->with('logo',Logo::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $logo=Logo::find($id);
        return view('admin.logo.edit')->with('logo',$logo);
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
        $logo=Logo::find($id);
        $this->validate($request,[
           'site_name'=>'required'
        ]);

        if ($request->hasFile('logo'))
        {
            $logo_img=$request->logo;
            $logo_new_name=$logo_img->getClientOriginalName();
            $logo_img->move('image/logo',$logo_new_name);
            $logo->image=$logo_new_name;
        }

        $logo->site_name=$request->site_name;
        $logo->save();
        Session::flash('success','Logo has been updated');
        return redirect()->route('logo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
