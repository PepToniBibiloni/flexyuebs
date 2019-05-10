<?php namespace Flextype; ?>

<?php $gallery= Entries::getEntries('gallery'); ?>
<div id="galeria" class="page-section notoppadding">

    <div class="section nomargin">
        <div class="container clearfix">
            <div class="divcenter center" style="max-width: 900px;">
                <h2 class="nobottommargin t300 ls1"><?=  Entries::getEntry('gallery')['title']?></h2>
            </div>
        </div>
    </div>

    <!-- Portfolio Items
    ============================================= -->
    <div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-masonry mixed-masonry clearfix">
        <?php foreach ($gallery as $item) { ?>
            <article class="portfolio-item">
                <div class="portfolio-image">
                    <a href="#">
                        <img src="<?= Images::getImageUrl($item['slug'] .'/'. $item['img'], ['w' => '670', 'dpr' => '2']) ?>" alt="Open Imagination">
                    </a>
                    <div class="portfolio-overlay">
                        <div class="portfolio-desc">
                            <h3><a href="#"><?= $item['title']?></a></h3>
                            <span><?= $item['content']?></span>
                        </div>
                    </div>
                </div>
            </article>
        <?php } ?>
    </div><!-- #portfolio end -->

    <div class="topmargin center"><a href="#" class="button button-border button-circle t600">View More Projects</a></div>

</div>