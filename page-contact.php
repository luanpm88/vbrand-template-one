<?php 
/**
* Template Name: vBrand Template One Conact
*/?>

<?php include 'header.php'; ?>
         
<div class="container p-4">
    <?php if ($themeData->get('home_articles_block_show')) { ?> 
        <div class="row">
            <?php
                $title = $themeData->get('about_us_title');
                $content = $themeData->get('about_us_content');
            ?>
        </div>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>