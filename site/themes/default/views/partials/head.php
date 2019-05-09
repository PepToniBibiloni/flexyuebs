<?php namespace Flextype; ?>
<?php use Flextype\Component\{Event\Event, Http\Http, Registry\Registry, Assets\Assets, Text\Text, Html\Html}; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?= Registry::get('settings.locale') ?>">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta charset="<?= Text::lowercase(Registry::get('settings.charset')); ?>">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/style.css" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/onepage.css" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/et-line.css" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/custom.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="/site/themes/default/assets/dist/css/compact-gallery.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php Event::dispatch('onThemeMeta') ?>
	<title>Pep Toni</title>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>

    <?php Assets::add('css', Http::getBaseUrl() . '/site/themes/' . Registry::get('settings.theme') . '/assets/dist/css/bootstrap.min.css', 'site', 1) ?>
    <?php Assets::add('css', Http::getBaseUrl() . '/site/themes/' . Registry::get('settings.theme') . '/assets/dist/css/default.min.css', 'site', 2) ?>
    <?php foreach(Assets::get('css', 'site') as $assets_by_priorities): ?>
        <?php foreach($assets_by_priorities as $assets): ?>
            <link href="<?= $assets['asset'] ?>" rel="stylesheet">
        <?php endforeach ?>
    <?php endforeach ?>

    <?php Event::dispatch('onThemeHeader') ?>
<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$acceptLang = ['ca', 'es', 'en'];
$lang = in_array($lang, $acceptLang) ? $lang : 'es';
$GLOBALS['lang']=$lang;
?>
</head>

 <body class="stretched side-push-panel">
   <div id="wrapper" class="clearfix">
