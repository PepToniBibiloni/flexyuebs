<?php namespace Flextype; ?>
<?php use Flextype\Component\{Http\Http, Registry\Registry, Arr\Arr}; ?>
<?php Themes::view('partials/head')->display() ?>
<?php Themes::view('partials/navigation')->display() ?>

<div class="row m-5"><a href="#" class="previous" onclick="goBack()"><i class="fas fa-arrow-left"></i></a></div>
<div class="mt-5 mb-5">
    <div class="container clearfix">
        <?php foreach (Entries::getEntries('blog') as $entry): ?>
        <?php if($entry['locale']==$GLOBALS['lang']){?>
            <a href="<?= $entry['url'] ?>" class="blog-post">
                <h2 class="bottommargin font-body"
                    style="max-width: 700px; font-size: 40px;"><?= $entry['title'] ?></h2>
                <p class="lead divcenter bottommargin"
                   style="max-width: 800px;"><?= $entry['summary'] ?></p>
                <div><?= $entry['date'] ?></div>
            </a>
        <?php } ?>
        <?php endforeach ?>
    </div>
</div>
<?php Themes::view('partials/footer')->display() ?>

