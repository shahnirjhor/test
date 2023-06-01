<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();

        return view('contact.index', compact('contacts'));
    }

    public function edit($id)
    {
        $contacts = Contact::find($id);

        return view('contact.edit', compact('contacts'));
    }


    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $contact->status = $request->status;

        $contact->update();

        return redirect()->route('contact.index')->with('info', 'Contact Us Status Updated');
    }

    public function destroy($id)
    {
        Contact::find($id)->delete();

        return redirect()->back()->with('error', 'Contact Request Deleted');
    }


    public function requestCallback(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer|digits:10',
            'subject' => 'required|min:5',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->your_message = $request->your_message;
        $contact->save();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'your_message' => $request->your_message,
        ];

        Mail::to('info@lesgroup.in')->send(new ContactFormMail($data));


        return response()->json(['success' => true]);
    }
}
