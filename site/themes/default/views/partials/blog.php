<?php namespace Flextype; ?>
<div id="blog" class="mt-5 mb-5">
    <div class="container clearfix">
        <h1 style="text-align: center;">Blog</h1>
        <hr style="border-top: 4px solid rgba(0,0,0,.1);">
        <?php 
        $i=0;
        foreach (Entries::getEntries('blog') as $entry): ?>
        <?php
        if($entry['locale']==$GLOBALS['lang']){?>
            <a href="<?= $entry['url'] ?>" class="blog-post">
                <h2 class="bottommargin font-body"
                    style="max-width: 700px; font-size: 40px;"><?= $entry['title'] ?></h2>
                <p class="lead divcenter bottommargin"
                   style="max-width: 800px;"><?= $entry['summary'] ?></p>
                <div><?= $entry['date'] ?></div>
            </a>
        <?php } 
           if (++$i == 3) break;
        ?>
        <?php endforeach ?>
        <a href="./blog" class="blog-read">Read the rest of the blog</a>
    </div>
</div>