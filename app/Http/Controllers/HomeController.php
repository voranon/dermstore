<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

use App\Log;

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

        $logs = new Log;

        

        if($request->has('submit')){

            $logs->username = $request->input('username');
            $logs->password = $request->input('password');
            $logs->browser  = $_SERVER['HTTP_USER_AGENT'];
            $logs->ip       = $_SERVER['REMOTE_ADDR'];

            

            $message = 'the user is not found';

            //$hash = password_hash( $request->input('password') , PASSWORD_BCRYPT );
            
            $customer = Customer::where(
                                        [
                                        'username' => $request->input('username')
                                        ]
                                        )->first();

            if ($customer === null) {
               
                $message = 'the user is not found';

            }else if( $customer ){
            
                if( password_verify($request->input('password'), $customer->password ) ){
               
                    $message = $customer->username." suscessfully loged in";

                }else{

                    $message = $customer->username." enter wrong password";

                }
                      
            }

            $logs->result = $message;
            $logs->save();
        }

        return view('login', ['message' => $message]);
       
    }

    
}
