<?php
    /*
    Template Name: Template About
    */
?>

<?php get_header()?>

<main>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
						<h1><?php the_title(); ?></h1>
						<p><?php echo wpautop(the_content()); ?></p>
						</div>
						<div class="col-xs-6">
							<img
                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                            alt=""
                            >     
						</div>
					</div>
				</div>
			</section>
            <section class="testimonial black">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-2">
                            <h2><?php the_field("testimonial2") ?></h2>
						</div>
						<div class="col-xs-2 text-right">
							<a href="http://localhost:8888/labb_two/?page_id=33" class="btn btn-default"><?php the_field("button_testimonial2")?></a>
						</div>
					</div>
				</div>
			</section>

<!------------------------------Eget flexible content------------------------------------->
<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field("jobba_har_titel") ?></h2>
						</div>
					</div>
				</div>	
</section>
						<?php if( have_rows('jobba_har_flex') ): ?>
    						<?php while( have_rows('jobba_har_flex') ): the_row(); ?>
        						<?php if( get_row_layout() == 'layout1' ): ?>
            					<?php get_template_part('./sections/layout1'); ?>
        							<?php elseif( get_row_layout() == 'layout2' ): ?>
           							<?php get_template_part('./sections/layout2'); ?>
        						<?php endif; ?>
    						<?php endwhile; ?>
						<?php endif; ?>


<!-------------------------------SLIDESHOW--------------------------------------->			
			<section class="slideshow">
				<div class="Slideshow owl-carousel" id="three">
					<?php if(have_rows("slideshow1")): ?>
						<?php while(have_rows("slideshow1")): the_row(); ?>
							<div 
								class="slide" 
								style="background-image: url('<?php the_sub_field("slideshow1_image"); ?>')"
							>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section>

<!---------------------------------TEAM------------------------------------->
			<section class="columns red text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field("team_header") ?></h2>
						</div>
					</div>
					<div class="row bottom">
							<?php $member = get_field( "team_members" ); ?>
							<?php foreach($member as $sub_field): ?>
						<div class="col-xs-3">
							<img src="<?php echo $sub_field["member_image"]; ?>" />
							<h3><?php echo $sub_field["member_name"]; ?></h3>
							<p><?php echo $sub_field["member_text"]; ?></p>
							<a href="" class="btn btn-default">Läs mer</a>
						</div>
							<?php endforeach; ?>
					</div>
				</div>
			</section>
			
<!----------------------------------SKILLS---------------------------------------------->
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field("header_skills") ?></h2>
						</div>
					</div>
					<div class="row bottom">
                    		<?php $skill = get_field( "skills" ); ?>
							<?php foreach($skill as $sub_field): ?>
						<div class="col-xs-4">				
							<?php echo $sub_field["fa_fa_skill"]; ?>
							<h3><?php echo $sub_field["title_skill"]; ?></h3>
							<p><?php echo $sub_field["text_skill"]; ?></p>							
						</div>
							<?php endforeach; ?>
				
					</div>
				</div>
			</section>
<!----------------------------------QUOTES---------------------------------------------->
			<section class="columns red text-center">
			<?php get_template_part("./partials/quotes"); ?>
			</section>
</main>

<?php get_footer()?>

