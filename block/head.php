<? if ($menu) $site = array_merge($site, mysqli_fetch_array(db::query("select * from `menu` where name = '$menu'"))); ?>

<!-- const -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?=$site['title_ru']?></title>
<meta name="description" content="<?=$site['disc_ru']?> <?=$site['phone_view']?>">
<meta name="keywords" content="<?=$site['keyw_ru']?>">
<meta name="theme-color" content="<?=$site['color']?>">

<!-- icon -->
<link rel="icon" type="image/x-icon" href="/assets/img/logo/logo1.png">
<link rel="shortcut icon" type="image/icon" href="/assets/img/logo/logo1.png">

<!-- Open Graph -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://<?=$site['site']?>.kz" />
<meta property="og:site_name" content="www.<?=$site['site']?>.kz" />
<meta property="og:title" content="<?=$site['title_ru']?>" />
<meta property="og:description" content="<?=$site['disc_ru']?> <?=$site['phone_view']?>" />
<meta property="og:image" content="/assets/img/logo/logo1.png" />

<!-- apple -->
<meta name="application-name" lang="<?=$lang?>" content="<?=$site['site']?>">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<!-- ms -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="cleartype" content="on">
<meta name="msapplication-tooltip" content="<?=$site['title_ru']?>">
<meta name="msapplication-TileColor" content="<?=$site['color']?>">
<meta name="msapplication-starturl" content="https://<?=$site['name']?>.kz">

<!-- css -->
<link rel="stylesheet" type="text/css" href="/assets/pl/fontawesome/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css"> -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/pl/twentytwenty.css">

<!--  -->
<link rel="stylesheet" type="text/css" href="/assets/css/norm.css?ver=6">
<link rel="stylesheet" type="text/css" href="/assets/css/main.css?ver=6">



<!-- js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="/assets/pl/jquery.event.move.js"></script>
<script src="/assets/pl/jquery.twentytwenty.js"></script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script> -->
<!-- <script src="https://bundle.run/universal-tilt.js"></script> -->
<!-- <script src="/assets/js/scramble.js"></script> -->