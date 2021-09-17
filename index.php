<?php
    get_header();
?>
<div class="landing">
    <img src="<?php echo get_template_directory_uri() ?>/images/landingc.png" alt="image" class="landingimg">
    <img src="<?php echo get_template_directory_uri() ?>/images/mobile.png" alt="image" class="landingimgm">
    <div class="toptext"><?php bloginfo('name')?></div>
    <div class="bottomtext"><?php bloginfo('description')?></div>
</div>
<div class="content">
<?php while(have_posts()): the_post() ?>
    <div class="container">
        <section class="t1">
            <div class="left">
                <h1 class="title"><?php the_title() ?></h1>
                <p class="text1"><?php the_field('text1') ?></p>
            </div>
            <div class="right">
                <img src="<?php the_field('shape') ?>" alt="shape" class="shape">
            </div>
        </section>
        <section class="t2">
            <p class="text2"><?php the_field('text2') ?></p>
        </section>
        <?php if(get_field("text3")): ?>
            <section class="t3">
            <p class="text3"><?php the_field('text3') ?></p>
            </section>
        <?php endif; ?>
        <?php if(get_field("text4")): ?>
            <section class="t4">
            <p class="text4"><?php the_field('text4') ?></p>
            </section>
        <?php endif; ?>
    </div>
<?php endwhile; ?>
<?php
    get_footer();
?>
