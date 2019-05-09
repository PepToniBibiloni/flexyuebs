<?php namespace Flextype; ?>
<?php Themes::view('partials/head')->display(); ?>
<?php Themes::view('partials/navigation')->display() ?>
   
<div class="row m-5"><a href="#" class="previous" onclick="goBack()"><i class="fas fa-arrow-left"></i></a></div>
<div id="section-about" class="center">
                <div class="container clearfix">
                    <h2 class="divcenter bottommargin font-body" style="max-width: 700px; font-size: 40px;"><?= $entry['title'] ?></h2>
                      <p class="lead divcenter bottommargin" style="max-width: 800px;"><?= $entry['content'] ?></p>
                       <div class="clear"></div>
                </div>
</div>

<?php Themes::view('partials/footer')->display() ?>

