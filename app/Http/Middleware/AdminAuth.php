<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

       $userdata= Auth::user();
      
        // if (Auth::user()->role == 2) {
        //     return redirect('/dashboard');
        //    } 

        if (Auth::check() && Auth::user()->role == 1) {
            return $next($request);
        }else{
            echo "you are not admin";
            abort(403);
        }
       
    }
}



// $userData = Auth::user();

// $userRole = '';
// if(!empty($userData)){
//    $userRole = $userData->role;
   
// }


// if(Auth::guest()){
//    return Redirect::to('/login');
// }


// if($userRole != ADMIN_ID){
//    return Redirect::to('/login');
// }else if ($userRole != MANAGER_ID){
//    return $next($request);
// }else{
//    return Redirect::to('/login');
// }