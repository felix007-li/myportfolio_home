<?php
/**
 * Template Name: Home Page
 */
// Custom Field
$personality1  = get_post_meta(7, 'personality1', true);
$personality2  = get_post_meta(7, 'personality2', true);
$personality3  = get_post_meta(7, 'personality3', true);
$personality4  = get_post_meta(7, 'personality4', true);

$facebook_url  = get_post_meta(7, 'facebook_url', true);
$linkedin_url  = get_post_meta(7, 'linkedin_url', true);
$facebook_text = get_post_meta(7, 'facebook_text', true);
$linkedin_text = get_post_meta(7, 'linkedin_text', true);

//Advance Custom Field
$person_1_title       = get_field('person_1_title');
$person_1_image       = get_field('person_1_image');
$person_1_description = get_field('person_1_description');
$person_2_title       = get_field('person_2_title');
$person_2_image       = get_field('person_2_image');
$person_2_description = get_field('person_2_description');

$skill_feature_section_image = get_field('skill_feature_section_image');
$skill_feature_section_title = get_field('skill_feature_section_title');

$favorite_sport_section_image = get_field('favorite_sport_section_image');
$favorite_sport_section_title = get_field('favorite_sport_section_title');
$favorite_1_image             = get_field('favorite_1_image');
$favorite_1_title             = get_field('favorite_1_title');
$favorite_2_image             = get_field('favorite_2_image');
$favorite_2_title             = get_field('favorite_2_title');
$favorite_3_image             = get_field('favorite_3_image');
$favorite_3_title             = get_field('favorite_3_title');
$favorite_4_image             = get_field('favorite_4_image');
$favorite_4_title             = get_field('favorite_4_title');

get_header(); 

?>



<!-- person ======================================== -->
<section id="person" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">
                <div class="col-sm-12">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p class="lead"><?php bloginfo('description'); ?></p>

                    <div class="row">
                        <div class="col-sm-3 personality active">

                            <span><?php echo $personality1; ?></span>
                        </div><!-- personality -->

                        <div class="col-sm-3 personality">
                            <span><?php echo $personality2; ?></span>
                        </div><!-- personality -->

                        <div class="col-sm-3 personality">
                            <span><?php echo $personality3; ?></span>
                        </div><!-- personality -->

                        <div class="col-sm-3 personality">
                            <span><?php echo $personality4; ?></span>
                        </div><!-- personality -->

                    </div><!-- row -->
                </div><!-- col -->

            </div><!-- row -->
        </div><!-- container -->
    </article>
</section>

<!-- OPT IN SECTION ============================== -->
<section id="optin">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 subscribe">
                <a href="<?php echo $facebook_url; ?>" class="btn btn-success btn-lg btn-block">
                    <?php echo $facebook_text?>
                </a>
            </div><!-- col -->

            <div class="col-sm-6 subscriber">
                <a href="<?php echo $linkedin_url; ?>" class="btn btn-success btn-lg btn-block">
                    <?php echo $linkedin_text; ?>
                </a>
            </div><!-- col -->
        </div><!-- row -->
    </div>
</section>

<!-- PERSONALITY ============================ -->
<section id="personality-features">

    <div class="container">

        <div class="row">
            <h2 class="section-header"><?php echo $person_1_title; ?></h2>

            <div class="col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-xs-8 col-xs-offset-2">

            	<?php if(!empty($person_1_image)) : ?>
                	<img src="<?php echo $person_1_image['url']; ?>" alt="<?php echo $person_1_image['alt']; ?>">
                <?php endif; ?>
                
            </div>

            <div class="col-sm-9 col-sm-offset-0 col-md-9 col-md-offset-0 col-xs-12">
                <p class="lead"><?php echo $person_1_description; ?><p>
            </div>
        </div>
        <div class="row">
            <h2><?php echo $person_2_title; ?></h2>

            <div class="col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-xs-8 col-xs-offset-2">
            	<?php if(!empty($person_2_image)) : ?>
                	<img src="<?php echo $person_2_image['url']; ?>" alt="<?php echo $person_2_image['alt']; ?>">
                <?php endif; ?>
            </div>

            <div class="col-sm-9 col-sm-offset-0 col-md-9 col-md-offset-0 col-xs-12">

                <p class="lead"><?php echo $person_2_description; ?></p>
            </div>
        </div>
    </div><!-- container -->
</section>

<!-- MY SKILLS ============================= -->
<section id="my_skills">
    <div class="container">
        <div class="section-header">
        	<?php if(!empty($skill_feature_section_image)) : ?>
                <img src="<?php echo $skill_feature_section_image['url']; ?>" alt="<?php echo $skill_feature_section_image['alt']; ?>">
            <?php endif; ?>
            
            <h2>My Skills</h2>
        </div>

        <div class="row">
           
            <?php $loop = new WP_Query( array( 'post_type' => 'skill_features', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
			
			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			
			<div class="col-sm-2">
				<i class="<?php the_field('skill_features_icon'); ?>"></i>
				<h4><?php the_title(); ?></h4>
			</div>
			
			<?php endwhile; ?>

            <!-- <div class="col-sm-2">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Apple-48.png" alt="apple">
                <h4>Know IOS develop &amp; Xcode environment </h4>
            </div> -->
        </div>
    </div><!-- container
</section>

<!-- MY favorite sports ============================= -->
<section id="my_sports">
    <div class="container">
        <div class="section-header">
            <img src="<?php echo $favorite_sport_section_image['url']; ?>" alt="<?php echo $favorite_sport_section_image['alt']; ?>">
            <h2><?php echo $favorite_sport_section_title; ?></h2>
        </div><!-- section-header -->

        <div class="row">
            <div class="col-sm-3">
                <img src="<?php echo $favorite_1_image['url']; ?>" alt="<?php echo $favorite_1_image['alt']; ?>">
                <h4><?php echo $favorite_1_title; ?></h4>
            </div>

            <div class="col-sm-3">
                <img src="<?php echo $favorite_2_image['url']; ?>" alt="<?php echo $favorite_2_image['alt']; ?>">
                <h4><?php echo $favorite_2_title; ?></h4>
            </div>

            <div class="col-sm-3">
                <img src="<?php echo $favorite_3_image['url']; ?>" alt="<?php echo $favorite_3_image['alt']; ?>">
                <h4><?php echo $favorite_3_title; ?></h4>
            </div>

            <div class="col-sm-3">
                <img src="<?php echo $favorite_4_image['url']; ?>" alt="<?php echo $favorite_4_image['alt']; ?>">
                <h4><?php echo $favorite_4_title; ?></h4>
            </div>

        </div><!-- row -->
    </div><!-- container -->
</section>


<?php

get_footer();
