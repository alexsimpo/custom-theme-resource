<?php get_header();?>

<div class="container">
<?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">    
                <?php endif;?>
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <h1><?php the_title();?></h1>
        <p><?php the_content();?><p>
    <?php endwhile; endif;?>
</div>

<?php get_footer();?>