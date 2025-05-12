<?php
/**
 * @var $this View
 */

use divyashrestha\Mvc\View;

?>

<?php $this->load_partial('layouts/partials','meta')?>
<link rel="icon" href="<?php $this->load_asset('assets/icon/favicon.jpg')?>" type="image/jpg">
<link rel="stylesheet" href="<?php $this->load_asset('assets/css/vendor.css')?>"/>
<link href="<?php $this->load_asset('assets/css/settings.css')?>" rel="stylesheet">
<link href="<?php $this->load_asset('assets/css/custom.css')?>" rel="stylesheet">
<link rel="stylesheet" href="<?php $this->load_asset('assets/css/justin-red.css')?>">
<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W9R8RKH');</script>
<!-- End Google Tag Manager -->

<!--script for hotjar -->
<script>
    (function (c, s, q, u, a, r, e) {
        c.hj=c.hj||function(){(c.hj.q=c.hj.q||[]).push(arguments)};
        c._hjSettings = { hjid: a };
        r = s.getElementsByTagName('head')[0];
        e = s.createElement('script');
        e.async = true;
        e.src = q + c._hjSettings.hjid + u;
        r.appendChild(e);
    })(window, document, 'https://static.hj.contentsquare.net/c/csq-', '.js', 6399823);
</script>
