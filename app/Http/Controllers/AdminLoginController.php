<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Userlist;
use App\Models\User;
use Hash;
use Auth;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Session;





class AdminLoginController extends Controller
{



    public function registrationForm(Request $request)

    {

        $referral_code = $request->query('ref');


        $affiliate = User::where('referral_code', $referral_code)->first();

        if ($affiliate) {
            session(['affiliate_id' => $affiliate->id]);
        }

        return view('admin.register');
        //
    }
    



    public function registration(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        

        $userStore = new User();
        $userStore->name = $request->name;
        $userStore->email =$request->email;
        $userStore->role ='2';
        $userStore->password= Hash::make($request->password);
        $userStore->affiliate_id = $request->affiliate_id;
        $userStore ->referral_code = Str::random(8);
        $userStore->save(); 
        return redirect()->route('loginForm')->with([
            'success' => 'You have been logged out successfully.',
            'reload' => true,
        ]);


    }

    
    public function logout(Request $request)
    {

        Auth::logout();
        
        $value = Session::pull('affiliate_id');
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
