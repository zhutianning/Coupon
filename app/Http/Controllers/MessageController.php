<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
     {
         $messages = Auth::user()->messages()->latest()->paginate(5);
         return view('messages.index',compact('messages'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('messages.create');
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         request()->validate([
             'title' => 'required',
             'content' => 'required',
             
         ]);
         Auth::user()->messages()->create($request->all());
         return redirect()->route('messages.index')
                         ->with('success','Message created successfully');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $message = Auth::user()->messages()->find($id);
         return view('messages.show',compact('message'));
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $message = Auth::user()->messages()->find($id);
         return view('messages.edit',compact('message'));
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
         request()->validate([
             'title' => 'required',
             'content' => 'required',
             
         ]);
         Auth::user()->messages()->find($id)->update($request->all());
         return redirect()->route('messages.index')
                         ->with('success','Message updated successfully');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
        Auth::user()->messages()->find($id)->delete();
         return redirect()->route('messages.index')
                         ->with('success','Message deleted successfully');
     }
 }
 
