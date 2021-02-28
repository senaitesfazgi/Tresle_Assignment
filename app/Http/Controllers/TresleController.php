<?php

namespace App\Http\Controllers;

use App\Models\Tresle;
use Illuminate\Http\Request;

class TresleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tresle = Tresle::latest()->paginate(5);
        return view('blogs.index',compact('blogs'))->with('i',(request()->input('page',1)-1)*5);
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
     * @param  \App\Models\Tresle  $tresle
     * @return \Illuminate\Http\Response
     */
    public function show(Tresle $tresle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tresle  $tresle
     * @return \Illuminate\Http\Response
     */
    public function edit(Tresle $tresle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tresle  $tresle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tresle $tresle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tresle  $tresle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tresle $tresle)
    {
        //
    }
}
