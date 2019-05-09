<?php namespace Flextype; ?>
<?php  $about= Entries::getEntries('about');?>
<div class="section parallax nomargin"
     style="background-image: url('/site/themes/default/images/1.jpg'); padding: 150px 0;"
     data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
    <div style="text-align: center">
        <div>
            <?php foreach ($about as $aboutlang):
                if ($aboutlang['lang']==$GLOBALS['lang']){?>
                    <h1><i class="fa fa-phone"></i><?= $aboutlang['tlf']?></h1>
                    <h2><?= $aboutlang['mail']?></h2>
                <?php } endforeach;?>
        </div>
    </div>
</div>


