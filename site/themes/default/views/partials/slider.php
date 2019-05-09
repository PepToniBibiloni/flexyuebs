<?php namespace Flextype; ?>
<section id="slider" class="slider-element slider-parallax full-screen force-full-screen">

    <div class="slider-parallax-inner">

        <div class="full-screen force-full-screen dark section nopadding nomargin noborder ohidden"
             style="background-image: url('/site/themes/default/images/slider-1.jpg'); background-size: cover; background-position: center center;">

            <div class="container center">
                <div class="vertical-middle">
                    <div class="emphasis-title">
                        <h1>
									<span class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn"
                                          data-speed="6000">
										<span class="t-rotate t700 font-body opm-large-word">
                                                  <?php foreach (Entries::getEntries('home') as $entry): ?>
                                                          <?php if($entry['locale']==$GLOBALS['lang']){?>
                                                                 <?= $entry['title-slider'] ?>
                                                          <?php } ?>
                                                   <?php endforeach?>
                                        </span>
									</span>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
            </div>

            <a href="#" data-scrollto="#home" data-easing="easeInOutExpo" data-speed="1250" data-offset="65"
               class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

        </div>

    </div>

</section><!-- #slider end -->