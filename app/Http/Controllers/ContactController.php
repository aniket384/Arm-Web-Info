<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Project;

class ContactController extends Controller
{
    public function insert(Request $request)
    {
    	//echo "string";
    	if($request->isMethod('post')){
    		$data = $request->all();
    		$contact = new Contact;
    		$contact->name = $data['name'];
            $contact->subject = $data['subject'];
    		$contact->email = $data['email'];
    		$contact->message = $data['message'];
    		$contact->save();
    	}
    	return redirect()->back()->with('flash_message_success','Thank You. We will contact you soon.!!');
    }

    public function message(Request $request)
    {
        //echo "string";
        $contacts = Contact::get();
        return view('admin.client-message')->with(compact('contacts'));
    }

}
