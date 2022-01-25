<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
//        dd($request->all());
        $data = [];
        $data['name'] = $request->get('firstName') . ' ' . $request->get('lastName');
        $data['phone'] = $request->get('phone');
        $data['email'] = $request->get('email');
        $data['address'] = $request->get('address');
        $data['company'] = $request->get('companyName');
        $data['message'] = $request->get('message');
        return $this->view('mail.contact-us', compact('data'));
    }
}
