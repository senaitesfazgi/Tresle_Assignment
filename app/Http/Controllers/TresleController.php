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
        $tresle = Tresle::latest()->pagination(5);
        return view('tresle.index',compact('tresle'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tresle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'businessName' => 'required',
            'businessPrice' => 'required',
            'businessCity' => 'required',
        ]);
  
        Tresle::create($request->all());
   
        return redirect()->route('tresle.index')
                        ->with('success','Tresle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tresle  $tresle
     * @return \Illuminate\Http\Response
     */
    public function show(Tresle $tresle)
    {
        return view('tresle.show',compact('tresleBusiness'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tresle  $tresle
     * @return \Illuminate\Http\Response
     */
    public function edit(Tresle $tresle)
    {
        return view('tresle.edit',compact('tresleBusiness'));
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
        $request->validate([
            'businessName' => 'required',
            'businessPrice' => 'required',
            'businessCity' => 'required',
        ]);
  
        $tresleBusiness->update($request->all());
  
        return redirect()->route('tresle.index')
                        ->with('success','Business updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tresle  $tresle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tresle $tresle)
    {
        $tresleBusiness->delete();
  
        return redirect()->route('tresle.index')
                        ->with('success','Business deleted successfully');
    }
}
