<?php get_header(); ?>

<div class="theContent">
    <div class="container">
         <h1><?php the_title(); ?></h1>
        <div class="theContent__wrapper">
            <div class="theContent__main">
                <div class="theContent__tags">
                    <small> <?php echo get_the_time('M-d-Y');?> </small>
                    <small> <?php the_tags();?> </small>
                </div>
                <?php echo get_the_post_thumbnail() ?>
                <?php the_content(); ?>
            </div>
            <div class="theContent__side">
                <div class="theContent__tags">
                    <small> <?php echo get_the_time('M-d-Y');?> </small>
                    <small> <?php the_tags();?> </small>
                </div>
                <?php echo get_the_post_thumbnail() ?>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>

