<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Contacts;
use App\Models\image;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{
    public function home(){
        $images=image::where('type','=',1)->get();
        return view('frontend.home1',compact('images'));

    }
    public function about(){
        return view('frontend.about');

    }
    public function services(){
        return view('frontend.services');

    }
    public function hotel(){
        $images=image::where('type','=',4)->get();
        return view('frontend.hotel',compact('images'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function faq(){
        return view('frontend.faq');
    }
    public function terms(){
        return view('frontend.terms');
    }
    public function admin(){
        return view('frontend.admin');
    }
    public function welcome(){
        return view('frontend.adminwelcome');
    }
    public function image(){
        
        return view('frontend.image');
    }
    public function display(){
        $contacts=Contacts::all();
        return view('frontend.display',compact('contacts'));
    }
    public function save(){
        $name=request('name');
        $email=request('email');
        $phone=request('phone');
        $hotel=request('hotel');
        $state=request('state');
        $city=request('city');
        $zip=request('zip');
        $booking=request('booking');
        $comments=request('comments');
        
        Contacts::create([
            'name' => $name,
            'email'=> $email,
            'phone'=> $phone,
            'hotel'=>$hotel,
            'state'=>$state,
            'city'=>$city,
            'zip'=>$zip,
            'booking'=>$booking,
            'comments'=>$comments,

        ]);
        return redirect()->route('contact1');
    }
    public function login(){
        $input=['email'=>request('email'),'password'=>request('password')];
        
        if (auth()->attempt($input,true)){
            return redirect()->route('welcome');
        }
        else{
            return redirect()->route('admin')->with('message','Invalid User');
        }
    }
    public function logout(){
        auth()->logout();
        return view('frontend.admin');
    }
    public function delete($id){
        $contact=Contacts::find(decrypt($id));
        $contact->delete();
        return redirect()->route('display')->with('message','Deleted 1 Row...');
    }
    public function imgupload(){

        $input=[
            'text' => request('text'),
            'image'=> request('image'),
            'type'=> request('type'),

        ];
       

        if (request()->hasFile('image')){
            $extension=request('image')->extension();
            $filename='image'.time().'_'.'.'.$extension;
            request('image')->storeAs('images',$filename);
            $input['image']=$filename;
            

            
        }
        $image=image::create($input);
        return redirect()->route('imgshow');



    }
    public function imgshow(){
        $images=image::all();
        
        //return $images;
        return view('frontend.imgshow',compact('images'));
    }
    public function imgdelete($id){
        $image=image::find(decrypt($id));
        $destination=public_path('storage/images/'.$image->image);
        File::delete($destination);
        $image->delete();
        return redirect()->route('imgshow');
        
    }
    public function imgupdate($id){
        $image=image::find(decrypt($id));
        return view('frontend.imgupdate',compact('image'));
    }
    public function imgedit(){
        
        $image=image::find(decrypt(request('id')));
        $input=[
            'text' => request('text'),
            'image'=> request('image'),
            'type'=> request('type'),

        ];

        if (request()->hasFile('image'))
        {        
            $destination=public_path('storage/images/'.$image->image);
            //dd($destination);

           if(File::exists($destination))
            {
                
                File::delete($destination);
            }



                
                
            
            $extension=request('image')->extension();
            $filename='image'.time().'_'.'.'.$extension;
            request('image')->storeAs('images',$filename);
            $input['image']=$filename;
            
            
        }
        $image->update($input);
        return redirect()->route('imgshow');
    }
}
