<?php

namespace app\mails;

use divyashrestha\Mvc\mail\BaseMail;

class Mailer
{
    public static function sendContactMail(array $data): string|bool
    {
        $emailBody = "
            Message Details: <br/>
            Name: {$data['name']} <br/>
            Email: {$data['email']} <br/>
            Subject: {$data['subject']} <br/>
            Company: {$data['comments']} <br/>
        ";;
        return BaseMail::sendMail(
            tos: [['email' => 'hello@divyashr.com.np'], ['email' => 'work@divyashrestha.com.np']],
            subject: "Contact Form {$data['subject']}",
            body: $emailBody,
            reply_tos: [['email' => $data['email']]],
            bccs: [['email' => 'work@divyashrestha.com.np']]
        );
    }
}