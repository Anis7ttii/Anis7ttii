<?php

namespace App\Http\Controllers;

use App\Http\Middleware\FormAuth;
use Illuminate\Http\Request;
use App\Customform;
use Session;
use Hash;

class formController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //   $this->middleware('formauth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
         if($request->isMethod('POST')){
//  dd('login testing');
      
        $request->validate([
            'email' => 'required|email',
            'password' =>'required'
        ]);
       
      
        $checkUser = Customform::where('email', '=',$request->email)->first();
        // dd($checkUser);
          if($checkUser){
            // return back()->with('success','This is valid user');
            if(Hash::check($request->password, $checkUser->password)){
              
                $request->session()->put('loginId', $checkUser->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('failed','Password did not match');
            }

          }
          else{
              return back()->with('failed','This email is not registered');
          }

     }
    
       else{

        return view('custom.clogin');
       }


    }
 /**
     * create a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('POST')){
        // dd($request);
        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:custom_forms',
            'password' =>'required',
            'age' =>'required',
            'designation' =>'required',
            'date_of_birth' =>'required',
        ]);
      
        //Using Object Creation Method Submit and Save the Data in Database
        // $customformuser =new Customform();
        // $customformuser->name = $request->name;
        // $customformuser->email = $request->email;
        // $customformuser->password = $request->password;
        // $customformuser->age = $request->age;
        // $customformuser->designation = $request->designation;
        // $customformuser->date_of_birth = $request->date_of_birth;
        // $customformuser->save();
        // dd('inserted');


      //  Using Query to Create the Data in Table and Save In it.
    //   dd($request->name);
        $customform = Customform::updateorCreate(['id' => $request->id] ,[

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make( $request->password),
            'age' => $request->age,
            'designation' => $request->designation,
            'date_of_birth' => $request->date_of_birth

        ]);
        
    
        // return response()->json(['code'=>200, 'message'=>'User Created successfully','data' => 'inserted'], 200);
       return redirect()->route('loginn')->with('success','User Data inserted Successfully');
        
    }

      
         return view('customforms');

    }


    public function dashboard()
    {
        Session::put('MyUser', true);
        // Session::flush();
            return view('custom.customdashboard');
      
        
            // return redirect("customlogin")->withSuccess('Opps.....! You do not have access');
    
      
    }

    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
         Session::flush();
        // formauth::logout();
        // if(Session::has('loginId')){
        //     Session::pull('loginId');
        //     redirect('loginn');
        // }
  
      return redirect('loginn');
    }
}
