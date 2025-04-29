<?php

/** @var $this divyashrestha\Mvc\View */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load_partial('layouts/partials', 'head'); ?>
</head>
<body data-spy="scroll" data-target=".navbar">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9R8RKH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="preloader" class="preloader">
    <div class="spinner-grow text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="page-wrapper">
    <?php $this->load_partial('layouts/partials', 'nav'); ?>
    {{content}}
    <?php $this->load_partial('layouts/partials', 'footer'); ?>
</div>
</body>
</html>