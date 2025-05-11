<?php

namespace app\mails;

use divyashrestha\Mvc\mail\BaseMail;

class Mailer
{
    public static function sendContactMail(array $data): string|bool
    {
        $emailBody = "
            Message Details:
            Name: {$data['name']}
            Email: {$data['email']}
            Subject: {$data['subject']}
            Company: {$data['comments']}
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