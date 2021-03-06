<?php get_header('main') ?>
<section class="breadcrumb breadcrumb_bg breadcrumb_bg-contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <img style="position:relative; top:-25px;" src="https://m-rocks.com/wp-content/themes/mrocks/img/services-us.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-12 mb-lg-0">
                <div class="blog_left_sidebar">
                <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
                    <article class="blog_item">
    
                        <div class="blog_details">
                   
                            <?php the_content('')?>
                            <ul class="blog-info-link">

								<li style="color: #666666"><i class="far fa-user"></i> <strong>Name:</strong> <?php  the_author() ?> <strong>Position:</strong> <?= the_field('position')?></li>
                                <li><a href="<?php the_permalink() ?>#comments"><i class="far fa-comments"></i><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'Mrocks' ), number_format_i18n( get_comments_number() ) ); ?> </a></li>
                            </ul>
                        </div>
                    </article>
                <?php endwhile; ?>

                    <?php the_posts_pagination(array(
                        'end_size' => 1,  // количество страниц на концах
                        'mid_size' => 1,  // количество страниц вокруг текущей
                        'type' => 'list',
                        'prev_text'    => __('&lt;'),
                        'next_text'    => __('&gt;'),
                    )) ?>

                <?php else: ?>
                <p>Записей блога нет...</p>
                <?php endif;?>
                </div>
            </div>


        </div>
    </div>
</section>
<?php get_footer() ?>