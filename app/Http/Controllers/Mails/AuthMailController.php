<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterEmail;

class AuthMailController extends Controller
{
    public function sendRegisterMail(){
        $registerEmail = new RegisterEmail();

        return $registerEmail;
        // a classe RegisterEmail() ela tá de fato criando email montando a view mas ela n e repsondavel por nenhuma funcao de SMTP
        // e o return ta so retornando uma view do visual
        //Mail::to('faturadinf@sesau.campogrande.ms.gov.br')->send($registerEmail);
    }
}
