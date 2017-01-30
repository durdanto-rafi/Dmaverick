<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;

class ContactUsController extends Controller
{
    public function getPage(Request $request)
    {
        return view('contact-us.index');
    }


    /**
     * Update posisi menu
     *
     * @param  int  $id
     * @return Response
     */
    public function sendemail()
    {
        $data_toview = array();
        $data_toview['bodymessage'] = "Hello send test email";

        $email_sender   = 'anonymous.rulz@gmail.com';
        $email_pass     = '09341534aX';
        $email_to       = 'rafi.aust@live.com';

        // Backup your default mailer
        $backup = \Mail::getSwiftMailer();

        try{
            //https://accounts.google.com/DisplayUnlockCaptcha
            // Setup your gmail mailer
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls');
            $transport->setUsername($email_sender);
            $transport->setPassword($email_pass);

            // Any other mailer configuration stuff needed...
            $gmail = new Swift_Mailer($transport);

            // Set the mailer as gmail
            \Mail::setSwiftMailer($gmail);

            $data['emailto'] = $email_to;
            $data['sender'] = $email_sender;
            //Sender dan Reply harus sama

            Mail::send('emails.html', $data_toview, function($message) use ($data)
            {
                $message->from($data['sender'], 'Laravel Mailer');
                $message->to($data['emailto'])
                ->replyTo($data['sender'], 'Laravel Mailer')
                ->subject('Test Email');

                echo 'The mail has been sent successfully';

            });

        }catch(\Swift_TransportException $e){
            $response = $e->getMessage() ;
            echo $response;
        }


        // Restore your original mailer
        Mail::setSwiftMailer($backup);
    }
}
