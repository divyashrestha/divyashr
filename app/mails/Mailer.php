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
            tos: ['hello@divyashr.com.np', 'work@divyashrestha.com.np'],
            subject: "Contact Form {$data['subject']}",
            body: $emailBody,
            reply_tos: [$data['email']],
            bccs:['work@divyashrestha.com.np',]
        );
    }
}