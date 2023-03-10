<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    public function __construct(User $qualquerNome)
    {
        $this->user = $qualquerNome;
        // dd($this->user);
    }

    public function build()
    {
        $this->subject('Assunto do Email');
        $this->from('reply@email.com');
        $this->replyTo('devsadriano@gmail.com');


        return $this->view('Mail.registerMail', [
            'nome' => $this->user->name 
        ])->attach(__DIR__.'/../../public/boneco.png',[
            'as' => '404.png'
        ]);
    }
}
// ->attach('C:/Users/adriano.rocha/Documents/Laravel/B7Web-Bonieky/b7mailer/public/boneco.png');