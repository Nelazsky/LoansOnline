<?php get_header(); ?>
<main>
    <div class="container">
        <div class="main-content">
            <h2>Main content</h2>
            <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
                <h2> <?php the_title();?></h2>
                <h4> Posted on : <?php the_time('F jS, Y');?></h4>
                <p><?php the_content();?></p>
            <hr> <?php endwhile; else:?>
            <p><?php _e('Sorry, no posts'); endif;?></p>
        </div>
        <div class="sidebar-sticky">
            <div class="inner-wrapper-sticky">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</main>
<div class="delimetr"></div>
<?php get_footer()?>
