<?php get_header();?>
<div class="container">
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
    <br>
    <div class="card">
        <div class="card-body">
            <div>
                <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">    
                <?php endif;?>
            </div>
            <h1><?php the_title();?></h1>
            <p><?php the_excerpt();?><p>
            <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
        </div>
    </div>
    <?php endwhile; endif;?>
</div>

<?php get_footer();?>