<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Auth\User;

class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        //dd($name);
    }

    public function build()
    {
        // //tbm posso instanciar model
        // $user = new User();
        // $user->name = 'Alessandro K2.';
        return $this->view('Mail.registerMail', [
            'nome' => $this->name,
        

        // $nome = 'Alessandro K.';
        // return $this->view('Mail.registerMail', [
        //     'nome' => $nome,
        ]);
    }
}
