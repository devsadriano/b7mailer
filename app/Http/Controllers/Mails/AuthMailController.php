<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterEmail;
use App\Models\User;
class AuthMailController extends Controller
{
    public function sendRegisterMail(){

        $user = new User();

        $user->name = 'Alessandro K20.';
        $user->password = '1234';
        $user->email = 'teste20@teste.com';

        $user->save();

        $registerEmail = new RegisterEmail($user);

        //return $registerEmail;
        // a classe RegisterEmail() ela tá de fato criando email montando a view mas ela n e repsondavel por nenhuma funcao de SMTP
        // e o return ta so retornando uma view do visual
        Mail::to('devsadriano@gmail.com')
            ->cc('email@gmail.com')
            ->bcc('email2@gmail.com')
            ->queue($registerEmail);
    }
}
