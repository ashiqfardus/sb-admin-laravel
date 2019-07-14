<?php

namespace App\Http\Controllers;
use Session;
use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.color.index')->with('color',Color::all());
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
        //
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
        //
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

    public function primary(Request $request, $id)
    {
        $primary=Color::find($id);


        $primary->theme_primary=$request->theme_primary;
        $primary->save();

        Session::flash('success','Primary color updated');
        return redirect()->back();
    }

    public function secondary(Request $request, $id)
    {
        $secondary=Color::find($id);


        $secondary->theme_secondary=$request->theme_secondary;
        $secondary->save();

        Session::flash('success','Secondary color updated');
        return redirect()->back();
    }

    public function header(Request $request, $id)
    {
        $header=Color::find($id);


        $header->header_footer=$request->theme_header;
        $header->save();

        Session::flash('success','Header & Footer color updated');
        return redirect()->back();
    }
}
