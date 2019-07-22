<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\saveNewPassword;
use App\Mail\PasswordReset;
use Illuminate\Auth\Passwords\PasswordBroker;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Mail;

class MailController extends Controller
{
    use SendsPasswordResetEmails;
    public function index(){


return view('mail.sendMail');
    }
    public function reset(){
$user = Auth::User();

    return view('mail.resetPassword');
    }
    //
    public function sendResetLinkEmail(PasswordResetRequest $request, PasswordBroker $broker)
    {

        //  $response = $this->broker()->sendResetLink(['email' => $request->get('email')]);

        $response = $this->broker()->sendResetLink(
            $request->only(['email'])
        );
        if ($response) {
            return view('mail.sendMail')->with('message', 'We have e-mailed your password reset link!');
        }


        /*$email = $request->email;
               $user = User::where('email', $email)->first();
       if(count($user)) {
           $random = Str::random(8);
           $pass = Hash::make($random);

           $user->password = $pass;
           $user->save();
           Mail::to($email)->send(new  ($random));

           return view('mail.sendMail');
       }
       else {
           return view('mail.sendMail');


       }*/
    }
public function saveNewPassword(saveNewPassword $request){

    $email = $request->email;
                  $user = User::where('email', $email)->first();
          if(count($user)) {
             $pass = Hash::make($request->password);
              $user->password = $pass;
              $user->save();

              return view('auth.login');
          }
          else {
              return view('auth.login');


          }
}
}
