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

    public function __construct(User $qualquerNome)
    {
        $this->user = $qualquerNome;
    }

    public function build()
    {
        return $this->view('Mail.registerMail', [
            'nome' => $this->user->name 
        ]);
    }
}
