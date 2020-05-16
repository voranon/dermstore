<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login(Request $request){

        

        if($request->has('submit')){

            $message = 'the user is not found';

            //$hash = password_hash( $request->input('password') , PASSWORD_BCRYPT );
            
            $customer = Customer::where(
                                        [
                                        'username' => $request->input('username')
                                        ]
                                        )->first();

            if ($customer === null) {
               
                $message = 'the user is not found';

            }else if( $customer && password_verify($request->input('password'), $customer->password ) ){
               
                $message = $customer->username." is found";
                      
            }

            
        }

        return view('login', ['message' => $message]);
       
    }

    
}
