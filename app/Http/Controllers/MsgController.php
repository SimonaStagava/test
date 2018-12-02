<?php

namespace App\Http\Controllers;

use App\Msg;
use Illuminate\Http\Request;
use Validator;

class MsgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $getMsgsFromDb = \App\Msg::orderBy('created_at', 'asc')->get();
        // $getMsgsFromDb = Msg::orderBy('created_at', 'asc')->paginate(4);
  
        // return view('blog')->with('msgs', $getMsgsFromDb);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('msg_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'message' => 'required'
        // ]);
        // if ($validator->fails()) {
        //     return redirect('note')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $getMsgsFromDb = Msg::find($id);
        
        // return view('msgView')->with('name', $getMsgsFromDb);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function edit(Msg $msg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Msg $msg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Msg $msg)
    {
        //
    }
}
