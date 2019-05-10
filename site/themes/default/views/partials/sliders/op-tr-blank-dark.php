<?php namespace Flextype; ?>
<?php $slider= Entries::getEntry('slider'); ?>
<section id="slider" class="slider-element">

    <div class="section dark nomargin noborder ohidden" style="padding: 120px 0;">

        <div class="container clearfix">

            <div class="emphasis-title">
                <h1>
							<span class="text-rotater nocolor" data-separator="|" data-rotate="fadeInLeft" data-speed="6000">
								<span class="t-rotate t700 font-body opm-medium-word"><?= $slider['frase']?></span>
							</span>
                </h1>
            </div>
     <?php if( $slider['btn'] !== null && strlen($slider['btn'])>0){ ?>
         <?php if( $slider['btnLink'] !== null){ ?>
            <a href="#<?= $slider['btnLink'] ?>" class="button button-border button-light button-circle t400" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70"><?= $slider['btn']?></a>
         <?php } else{ ?>
             <a href="#" class="button button-border button-light button-circle t400" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70"><?= $slider['btn']?></a>
         <?php } ?>
<?php } ?>
        </div>

    </div>

</section>