<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\Common;

class TestimonialController extends Controller
{      
    // private $columns =['name','profession','description','published','image'];
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials=Testimonial::get(); //load data in testimonials variable
        return view('admin.testimonial.testimonials', compact('testimonials')); //send data into testimonial blade file
    }
    public function testList()
    {
        $testimonials=Testimonial::get(); //load data in testimonials variable
        return view('testimonial', compact('testimonials')); //send data into testimonial blade file
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin\testimonial\addTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->messages();
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'profession'=>'required|string',
            'description'=>'required|string',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
        ],$messages);
        
        $fileName=$this->uploadFile($request->image,'assets/images');
        $data['image']=$fileName;
        $data['published']=isset($request->published);
        Testimonial::create($data);
        return redirect('addTestimonial');
        // return  'Added Successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonials=Testimonial::findOrFail($id); //load data in cars variable
        return view('admin.testimonial.showTestimonial', compact('testimonials'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.updateTestimonial',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages=$this->messages();
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'profession'=>'required|string',
            'description'=>'required|string',
            'image'=>'sometimes|mimes:jpg,png,jpeg|max:2048',
        ],$messages);
        $data['published']=isset($request->published);
        if(isset($request->image)){
        $fileName=$this->uploadFile($request->image,'assets/images');
        $data['image']=$fileName;
        }
        Testimonial::where('id',$id)->update($data);
        return redirect('testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id',$id)->delete();
        return redirect('testimonials');
    }
    public function messages(){
        return[
            'name.required'=>'please enter your name',
            'profession.required'=>'please enter your profession and should be text',
            'description.required'=> 'should be text',
            'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
        ];
    }
}
