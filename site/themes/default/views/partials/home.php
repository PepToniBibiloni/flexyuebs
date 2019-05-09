<?php namespace Flextype; ?>

<div  id="home" class="center page-section">
    <div class="container clearfix">
     <?php foreach (Entries::getEntries('home') as $entry): ?>
         <?php if($entry['locale']==$GLOBALS['lang']){?>
             <?= $entry['content'] ?>
        <?php } ?>
        <?php endforeach ?>
    </div>
</div>





