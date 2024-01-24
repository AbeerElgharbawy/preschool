<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Testimonial;
use App\Traits\Common;



use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes=Classroom::get(); 
        return view('admin.classes.classrooms', compact('classes')); 
    }
    public function classList()
    {
        $classes=Classroom::get(); 
        $appointments=Appointment::get(); 
        $testimonials=Testimonial::get(); 
        return view('classes', compact('classes','testimonials','appointments')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers=Teacher::where('published',true)->get(); 
        return view('admin\classes\addClass',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'class'=>'required|string|max:50',
            'name'=>'required|string|max:50',
            'jobTitle'=>'required|string|max:50',
            'age'=>'required|',
            'time'=>'required',
            'capacity'=>'required',
            'cost'=>'required|',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'teacher_id'=>'required',
            'published'=>'required',
        ]);
        
        $fileName=$this->uploadFile($request->image,'assets/images');
        $data['image']=$fileName;
        $data['published']=isset($request->published);
        Classroom::create($data);
        return redirect('addClass');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classrooms=Classroom::findOrFail($id); //load data in cars variable
        return view('admin.classes.showClass', compact('classrooms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers=Teacher::get(); 
        $classes = Classroom::findOrFail($id);
        return view('admin.classes.updateClass',compact('classes','teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'class'=>'required|string|max:50',
            'name'=>'required|string|max:50',
            'jobTitle'=>'required|string|max:50',
            'age'=>'required|',
            'time'=>'required',
            'capacity'=>'required',
            'cost'=>'required|',
            'image'=>'sometimes|mimes:png,jpg,jpeg|max:2048',
            'teacher_id'=>'required',
        ]);
        
        if(isset($request->image)){
            $fileName=$this->uploadFile($request->image,'assets/images');
            $data['image']=$fileName;
        }
        $data['published']=isset($request->published);
        Classroom::where('id',$id)->update($data);
        return redirect('classrooms');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Classroom::where('id',$id)->delete();
        return redirect('classrooms');
    }
}
