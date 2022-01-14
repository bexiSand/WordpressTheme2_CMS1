
<?php
    /*
    Template Name: Template Example2
    */
?>

<?php get_header()?>

<main>
<!-----------------------------------HERO SMALL-------------------------------------->
<?php get_template_part("./partials/hero-small"); ?>


<!--------------------------------LIKES (2 PUFFAR)-------------------------------------->
			<section class="columns black text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field("headline_2") ?></h2>
						</div>
					</div>
					<div class="row bottom">
                            <?php $like = get_field( "likes" ); ?>
							<?php foreach($like as $sub_field): ?>
						<div class="col-xs-6">				
							<?php echo $sub_field["fa_fa_like"]; ?>
							<h3><?php echo $sub_field["title_like"]; ?></h3>
							<p><?php echo $sub_field["text_like"]; ?></p>							
						</div>
							<?php endforeach; ?>
					</div>
				</div>
			</section>

<!-----------------------------------SKILLS (3 PUFFAR)-------------------------------------->
			<section class="columns red text-center">
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

<!-----------------------------------SKILLS (4 PUFFAR)-------------------------------------->
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
                        <h2><?php the_field("header_skills2") ?></h2>
						</div>
					</div>
					<div class="row bottom">
                        <?php $skill2 = get_field( "skills2" ); ?>
							<?php foreach($skill2 as $sub_field): ?>
						<div class="col-xs-3">				
							<?php echo $sub_field["fa_fa_skill2"]; ?>
							<h3><?php echo $sub_field["title_skill2"]; ?></h3>
							<p><?php echo $sub_field["text_skill2"]; ?></p>							
						</div>
							<?php endforeach; ?>
					</div>
				</div>

			</section>
			
<!---------------------------------SLIDESHOW INDEX------------------------------------>

<section class="slideshow">
	<div class="Slideshow owl-carousel owl-theme" id="two">
		<?php if( have_rows('slideshow_index') ): ?>
    		<?php while( have_rows('slideshow_index') ): the_row(); ?>
                <?php if( get_row_layout() == 'flex_image' ): ?>
            		<?php get_template_part('./sections/section-only-image'); ?>
        		<?php elseif( get_row_layout() == 'fafa_left' ): ?>
					   <?php get_template_part('./sections/section-fafa-left'); ?>
				<?php elseif( get_row_layout() == 'background-image' ): ?>
						<?php get_template_part('./sections/section-background-image'); ?>
				<?php elseif( get_row_layout() == 'flex_image' ): ?>
            		    <?php get_template_part('./sections/section-only-image'); ?>
        		<?php endif; ?>
    		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section> 

<!-------------------------------SLIDESHOW1 (ONE)----------------------------------->
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
</main>

<?php get_footer()?>		