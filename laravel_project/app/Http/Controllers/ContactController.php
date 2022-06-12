<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view('contact');
    }

public function store(Request $request){
 
    // $message = new Message();
    // $message->message_name = $request->name;
    // $message->message_email = $request->email;
    // $message->message = $request->message;
    // $message->save();
    // return redirect()->route('contact.store')
    // ->with('success','Company has been created successfully.');
}
// public function mesaagePost(Request $req)
// {
//     $message = new Message;
//     $message->message_name= $req->message_name;
//     $message->message_email= $req->message_email;
//     $message->message= $req->message;
//     $message->save();
//     return view('contact');
// }
}