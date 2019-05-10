<?php namespace Flextype; ?>
<?php $parallax= Entries::getEntry('parallax'); ?>
<div class="section parallax nomargin dark" style="background-image: url('/site/images/page/testimonials.jpg'); padding: 150px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">

        <div class="col_two_fifth nobottommargin">&nbsp;</div>

        <div class="col_three_fifth nobottommargin col_last">

            <div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <?php if (strlen($parallax['frase1'])>0){?>
                        <div class="slide">
                            <div class="testi-content">
                                <p><?= $parallax['frase1']?></p>
                                <?php if (strlen($parallax['Afrase1'])>0){?>
                                <div class="testi-meta"><?= $parallax['Afrase1']?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if (strlen($parallax['frase2'])>0){?>
                        <div class="slide">
                            <div class="testi-content">
                                <p><?= $parallax['frase2']?></p>
                                <?php if (strlen($parallax['Afrase2'])>0){?>
                                <div class="testi-meta"><?= $parallax['Afrase2']?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if (strlen($parallax['frase3'])>0){?>
                        <div class="slide">
                            <div class="testi-content">
                                <p><?= $parallax['frase3']?></p>
                                <?php if (strlen($parallax['Afrase3'])>0){?>
                                <div class="testi-meta"><?= $parallax['Afrase3']?></div>
                                <?php } ?>

                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>