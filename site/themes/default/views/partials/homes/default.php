<?php namespace Flextype; ?>
<?php $home = Entries::getEntry('home'); ?>
<section id="content">
    <div class="content-wrap nopadding">
        <div id="section-about" class="center page-section">
            <div class="container clearfix">
                <h2 class="divcenter bottommargin font-body" style="max-width: 700px; font-size: 40px;"><?= $home['title']?></h2>
                <p class="lead divcenter bottommargin" style="max-width: 800px;"><?= $home['content']?></p>
            </div>
        </div>
    </div>
</section>