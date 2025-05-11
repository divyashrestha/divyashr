<?php

/** @var $app Application */

use app\controllers\SiteController;
use divyashrestha\Mvc\Application;

$app->router->get('/', [SiteController::class, 'index']);
$app->router->post('/', [SiteController::class, 'create']);
$app->router->get('/thank-you', [SiteController::class, 'thank_you']);
?>