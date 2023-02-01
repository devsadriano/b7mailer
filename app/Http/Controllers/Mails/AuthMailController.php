<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Jobs\SendAuthMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterEmail;
use App\Models\User;
class AuthMailController extends Controller
{
    public function sendRegisterMail(){

        $user = new User();

        $user->name = 'Alessandro K21.';
        $user->password = '1234';
        $user->email = 'teste21@teste.com';

        $user->save();
        SendAuthMail::dispatch($user);
    }
}
