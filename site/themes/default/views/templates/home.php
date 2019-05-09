<?php namespace Flextype; ?>

<?php Themes::view('partials/head')->display(); ?>
<?php Themes::view('partials/navigationDarker')->display() ?>
<?php Themes::view('partials/slider')->display();?>
<section id="content">
    <div class="content-wrap nopadding">
        <?php
        Themes::view('partials/home')->display();
        Themes::view('partials/paralax')->display();
        Themes::view('partials/blog')->display();
        Themes::view('partials/contact')->display();
        Themes::view('partials/gallery')->display(); ?>
    </div>
</section>
<?php Themes::view('partials/footer')->display() ?>