<?php
namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{       

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts=Contact::paginate(3); //load data in contacts variable
        // $unreadCount = Contact::where('unread', 0)->count();
        // $contacts = Contact::all();
        return view('admin.contacts', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('contactMail');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contacts=Contact::findOrFail($id);
        $contacts->unread = 1;
        $contacts->save();
        return view('admin.showContact', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::where('id',$id)->delete();
        return redirect('showContacts');
    }
    public function contactMail(Request $request){
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required',
        ]);
        Mail::to('abeer@gmail.com')->send(new ContactMail($request));
        Contact::create($data);
        return redirect('contact');
    }
}
