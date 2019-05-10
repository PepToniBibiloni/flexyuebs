<?php namespace Flextype; ?>

<?php $blogs= Entries::getEntries('blog'); ?>
<div id="section-blog" class="page-section">

    <h2 class="center uppercase t300 ls3 font-body"><?= Entries::getEntry('blog')['title']?></h2>

    <div class="section nobottommargin">
        <div class="container clearfix">

            <div class="row topmargin clearfix">

                <?php foreach ($blogs as $blog) { ?>
                <div class="ipost col-md-6 bottommargin clearfix">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="entry-image nobottommargin">
                                <a href="#"><img src="<?= Images::getImageUrl($blog['slug'] .'/'. $blog['img'], ['w' => '670', 'dpr' => '2']) ?>" alt="uebs"></a>
                            </div>
                        </div>
                        <div class="col-lg-6" style="margin-top: 20px;">
                            <div class="entry-title">
                                <h3 class="t400" style="font-size: 22px;"><a href="#"><?= $blog['title']?></a></h3>
                            </div>
                            <div class="entry-content">
                                <a href="#" class="more-link">Más <i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>

</div>