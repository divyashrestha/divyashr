<?php

namespace app\controllers;

use app\mails\Mailer;
use divyashrestha\Mvc\Request;
use divyashrestha\Mvc\Response;

class SiteController extends ApplicationController
{
    public function index(): string
    {
        return $this->render('sites.index');
    }

    public function create(Request $request, Response $response): void
    {

        $data = $request->getBody();
        Mailer::sendContactMail($data);
        $response->redirect('/thank-you');
    }

    public function thank_you(): string
    {
        return $this->render('sites.thank_you');
    }
}