<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Userlist;
use App\Models\User;
use Hash;
use Auth;

class AdminLoginController extends Controller
{



    public function registrationForm()
    {
        return view('admin.register');
        //
    }
    



    public function registration(Request $request)
    {

        $userStore =new User();
         $userStore->name = $request->name;
        $userStore->email =$request->email;
        $userStore->role ='2';
        $userStore->password= Hash::make($request->password);
        $userStore->save();
        return redirect()->route('dashboard');

    }

    
    public function logout(Request $request)
    {

        Auth::logout();
    
        return redirect()->route('loginForm');

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 


    public function loginForm(Request $request)
    {
        return view('admin.login');

    }
    



    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

       echo "crediantial not match";

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
