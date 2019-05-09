<?php namespace Flextype; ?>
<?php use Flextype\Component\{Http\Http, Registry\Registry, Arr\Arr}; ?>
  <header id="header" class="full-header border-full-header not-dark static-sticky" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">
        <div id="header-wrap">
            <div class="container clearfix">
                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <div id="logo" style="display: table; height:70px; overflow: hidden;">
                        <div style="display: table-cell; vertical-align: middle;">
                            <div><a href="/">Pep Toni</a></div>
                        </div>
                    </div>
                <nav id="primary-menu">
                    <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
                        <?php foreach (Arr::sort(Menus::get('menu-'.$GLOBALS['lang'])['items'], 'order') as $item): ?>
                        <li><a href="#" data-href="#<?= $item['url'] ?>"><div><?= $item['title'] ?></div></a></li>
                        <?php endforeach ?>
                    </ul>
                </nav>
          </div>
        </div>
    </header>
