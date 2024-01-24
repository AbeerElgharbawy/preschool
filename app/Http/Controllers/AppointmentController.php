<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments=Appointment::get(); //load data in testimonials variable
        return view('admin.appointments', compact('appointments')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->messages();
        $data=$request->validate([
            'guardianName'=>'required|string|max:50',
            'guardianEmail'=>'required|string',
            'childName'=>'required|string',
            'childAge'=>'required',
            'message'=>'required',
        ],$messages);
        Appointment::create($data);
        return redirect('appointment')->withSuccess('Your Appointment Added Successfully!');;
        // return 'added successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        Appointment::where('id',$id)->delete();
        // return 'deleted';
        return redirect('showAppointments');
    }
    public function messages(){
        return[
            'guardianName.required'=>'please enter the name',
            'guardianEmail.required'=>'please enter an email',
            'childName.required'=> 'enter your child name please',
            'childAge.required'=> 'enter your child name please',
            'message.required'=> 'entet your message',
        ];
    }
}
