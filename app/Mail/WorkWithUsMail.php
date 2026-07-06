<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class WorkWithUsMail extends Mailable
{
    public $data;

    protected $cvPath;

    protected $cvName;

    public function __construct($data, $cvPath, $cvName)
    {
        $this->data = $data;
        $this->cvPath = $cvPath;
        $this->cvName = $cvName;
    }

    public function build()
    {
        return $this->subject('Nuevo postulante desde la página web')
            ->view('emails.work')
            ->attach($this->cvPath, [
                'as' => $this->cvName,
                'mime' => 'application/pdf'
            ]);
    }
}