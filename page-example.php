
<?php
    /*
    Template Name: Template Example
    */
?>

<?php get_header()?>

<main>

<!-----------------------------HERO-------------------------------->

<?php get_template_part("./partials/hero"); ?>

<!-----------------------------OFFICE-------------------------------->
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<img
                            src="<?php the_field('office_image'); ?>"
                            alt=""
                            />
						</div>
						<div class="col-xs-6">
							<h2><?php the_field('office_title'); ?></h2>
							<p>
							<?php the_field('office_text'); ?>
							</p>
						</div>
					</div>
				</div>
			</section>

<!-----------------------------TESTIMONIAL2-------------------------------->
			<section class="testimonial red">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-2">
							<h2><?php the_field("testimonial2") ?></h2>
						</div>
						<div class="col-xs-2 text-right">
							<a href="" class="btn btn-default"><?php the_field("button_testimonial2")?></a>
						</div>
					</div>
				</div>
			</section>

<!-----------------------------SLIDESHOW1 (ONE)------------------------------>

			<section class="slideshow">
				<div class="Slideshow owl-carousel" id="one">
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
<!-----------------------------SKILLS (puffar)-------------------------------->
			<section class="columns black text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field("header_skills") ?></h2>
						</div>
					</div>
					<div class="row bottom">
							<?php $skill = get_field( "skills" ); ?>
							<?php foreach($skill as $sub_field): ?>
						<div class="col-xs-3">				
							<?php echo $sub_field["fa_fa_skill"]; ?>
							<h3><?php echo $sub_field["title_skill"]; ?></h3>
							<p><?php echo $sub_field["text_skill"]; ?></p>							
						</div>
							<?php endforeach; ?>
					</div>
				</div>
			</section>

<!-----------------------------TESTIMONIAL-------------------------------->
			<section class="testimonial">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h2><?php the_field("testimonial") ?></h2>
						</div>
					</div>
				</div>
			</section>

<!-----------------------------SLIDESHOW Index ----------------------------->
<section class="slideshow">
	<div class="Slideshow owl-carousel" id="two">
		<?php if( have_rows('slideshow_index') ): ?>
    		<?php while( have_rows('slideshow_index') ): the_row(); ?>
        		<?php if( get_row_layout() == 'flex_image' ): ?>
            		<?php get_template_part('./sections/section-only-image'); ?>
        		<?php elseif( get_row_layout() == 'fafa_left' ): ?>
					   <?php get_template_part('./sections/section-fafa-left'); ?>
				<?php elseif( get_row_layout() == 'background-image' ): ?>
						   <?php get_template_part('./sections/section-background-image'); ?>
				<?php elseif( get_row_layout() == 'fafa_right' ): ?>
					   <?php get_template_part('./sections/section-fafa-right'); ?>
				<?php elseif( get_row_layout() == 'flex_image' ): ?>
            		<?php get_template_part('./sections/section-only-image'); ?>
        		<?php endif; ?>
    		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section> 

<!-----------------------------LIKES (puffar)-------------------------------->
			<section class="columns text-center">
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
		</main>

<?php get_footer()?>