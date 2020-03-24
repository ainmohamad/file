<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;

   /** protected function $redirectTo()
    {
        $type = Auth::user()->type->name;

        switch ($type) {
            case 'admin':
                return '/admin_dashboard';
                break;
            case 'super admin':
                return '/organizer';
                break;
            case 'member':
                return '/welcome';
                break;
            
            default:
                return '/login';
                break;
        }
    } **/

   protected function authenticated ($request, $user){
        if($user->type=='member'){
            return redirect ('/');
        } 
        else if($user->type=="super_admin"){
            return redirect('/organizerdashboard');
        }
        else{
            return redirect('/admindashboard');
        }

       // return $user;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
