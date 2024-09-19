<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {

        // dd($xml_data);
       $message = new Message;
        $message->name =  $request->name;
        $message->email = 'test@gmail.com';
        $message->subject = 'subject';
        $message->content = 'contnet';

        $message->save();
      

    }
    public function test(Request $request)
    {
        // $request->validate([
        //     'InputName' => 'max:5'
        // ]);
       
        // $data = explode(',', $request);
        $message = new Message;

        $message->name =  'name';
        $message->email = 'test@gmail.com';
        $message->subject = 'subject';
        $message->content = 'contnet';
    
        $message->save();
        return response()->session(['success'=>'Laravel ajax example is being processed.']);
       
    }

    public function index()
    {
        return view('test/index');
    }
}
