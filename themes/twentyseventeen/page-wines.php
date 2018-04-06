<?php
/**
 * Template Name: Wines page template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage toothless
 * @since 1.0
 * @version 1.2
 */
get_header(); 
?>
<main id="card-page">
	<h1 class="main__title">Wines</h1>
    <?php
        $wines_args = array(
            'post_type' => 'vine',
            'order' => 'ASC'
        );
        $product_query = new WP_Query($wines_args);
    ?>
	<ul class="card__container">
    <?php 
        if($product_query->have_posts()) : 
            while($product_query->have_posts()) : 
                $product_query->the_post();
                $wine = get_post();
                $post_id = $post->ID;
    ?>
		<li class="card">
            <a class="card__container--link" href="<?php echo esc_url(get_page_link($post_id));?>">Learn More about our <?php the_title();?></a>

            <div class="card__image" style="background-image: url('<?php the_field('image1', $post_id);?>');"></div>

            <div class="card__content">
                <!-- <p class="card__date">2015</p> -->
                <h2 class="card__title"><?php the_title();?></h2>

                <div class="card__excerpt">
                    <?php the_excerpt();?>
                </div>
            </div>
        </li>
    <?php
            endwhile;
        endif;
    ?>
	</ul>
	
	<section class="buy__here">
		<h2 class="main__title">Where To Buy</h2>
		<ul>
			<li><a href="https://liquid-assets-of-nova-scotia.myshopify.com/">Liquid Assets</a></li>
			<li><a href="https://bishopscellar.com/">Bishops Cellar</a></li>
			<li>The Shelf at Halifax Seaport Market</li>
			<li>Halifax Seaport Market</li>
			<li>Wolfville Farmer's Market</li>
			<li>Select NSLC Locations</li>
		</ul>
	</section>
</main>

<?php get_footer();
