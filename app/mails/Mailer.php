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
        return BaseMail::sendMail(['hello@divyashr.com.np'], "Contact Form {$data['subject']}",$emailBody, [$data['email']], ['work@divyashrestha.com.np',]);
    }
}