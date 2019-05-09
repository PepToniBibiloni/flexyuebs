<?php namespace Flextype;?>
<?php use Flextype\Component\{Http\Http, Registry\Registry, Arr\Arr}; ?>
<?php $gallery = Entries::getEntries()[2];?>
<div id="gallery" class="mt-5">    
    <div class="container clearfix">        
        <h1 style="text-align: center;">
            <?php foreach (Arr::sort(Menus::get('menu-'.$GLOBALS['lang'])['items'], 'order') as $item):
                    if($item['url']=='gallery'){
                       echo $item['title'];
                    }endforeach ?>
        </h1>        
        <hr style="border-top: 4px solid rgba(0,0,0,.1);">     
           <section class="gallery-block compact-gallery">
        <div class="container">
            <div class="row no-gutters">
                <?php foreach(Entries::getEntries('gallery') as $img): ?>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="<?= Images::getImageUrl($img['slug'] . '/' . $img['image'], ['w' => '670', 'dpr' => '2']) ?>">
                        <img class="img-fluid image" src="<?= Images::getImageUrl($img['slug'] . '/' . $img['image'], ['w' => '670', 'dpr' => '2']) ?>">
                         <?php if($img['locale']==$GLOBALS['lang']){?>
                        <span class="description">
                            <span class="description-heading"><?= $img['title']?></span>
                            <span class="description-body"><?= $img['content']?></span>
                            <?php } ?>
                        </span>
                    </a>
                </div>
                <?php endforeach ?>
          
            </div>
        </div>
    </section>
    </div>
</div>
