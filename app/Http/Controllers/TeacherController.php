<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Classroom;
use App\Traits\Common;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class TeacherController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    //to admin
    public function index()
    {
        $teachers=Teacher::get(); 
        return view('admin.teachers.showTeachers', compact('teachers')); 
    }
    //to team page
    public function teacherList()
    {
        $teachers=Teacher::where('published',true)->latest()->take(3)->get(); 
        return view('team', compact('teachers')); 
    }
    // public function teacherToClass()
    // {
    //     $teachers=Teacher::where('published',true)->latest()->take(3)->get(); 
    //     return view('admin.classes.addClass', compact('teachers')); 
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.addTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $messages=$this->messages();
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'subject'=>'required|string',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'facebook'=>'required|string',
            'twitter'=>'required|string',
            'instagram'=>'required|string',

        ]);
        $fileName=$this->uploadFile($request->image,'assets/images');
        $data['image']=$fileName;
        $data['published']=isset($request->published);
        Teacher::create($data);
        return redirect('addTeacher');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers=Teacher::findOrFail($id); //load data in cars variable
        return view('admin.teachers.showTeacher', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('admin.teachers.updateTeacher',compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'subject'=>'required|string',
            'image'=>'sometimes|mimes:jpg,png,jpeg|max:2048',
            'facebook'=>'string',
            'twitter'=>'string',
            'instagram'=>'string',

        ]);
        $data['published']=isset($request->published);
        if(isset($request->image)){
        $fileName=$this->uploadFile($request->image,'assets/images');
        $data['image']=$fileName;
        }
        Teacher::where('id',$id)->update($data);
        return redirect('teachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $found = Classroom::where('teacher_id', $id)->count();
        if($found){
            return redirect()->back()->with('alert', 'This Teacher Can not be Deleted!');
        }else{
            Teacher::where('id', $id)->delete();    
            return redirect('teachers');
        }
    }
}
