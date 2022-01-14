<?php get_header()?>

		<main>
<!-----------------------------------HERO-------------------------------------->
<?php get_template_part("./partials/hero"); ?>			
<!-----------------------------------TESTIMONIAL-------------------------------------->
			<section class="testimonial black">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h2><?php the_field("testimonial") ?></h2>
						</div>
					</div>
				</div>
			</section>
<!-----------------------------------SKILLS-------------------------------------->
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
<!-----------------------------------SLIDESHOW INDEX------------------------------------>
<section class="slideshow">
	<div class="Slideshow owl-carousel" id="two">
		<?php if( have_rows('slideshow_index') ): ?>
    		<?php while( have_rows('slideshow_index') ): the_row(); ?>
        		<?php if( get_row_layout() == 'fafa_left' ): ?>
            		<?php get_template_part('./sections/section-fafa-left'); ?>
        		<?php elseif( get_row_layout() == 'image_right' ): ?>
           			<?php get_template_part('./sections/section-image-right'); ?>
        		<?php endif; ?>
    		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section> 


<!-----------------------------------QUOTES-------------------------------------->

			<section class="columns text-center">
			<?php get_template_part("./partials/quotes"); ?>
			</section>
		</main>

<?php get_footer()?>
