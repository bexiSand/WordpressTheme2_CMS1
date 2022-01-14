<?php
    /*
    Template Name: Template Contact
    */
?>


<?php get_header()?>

<main>
<!-----------------------------------HERO SMALL------------------------------------->
			<section class="hero small" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1><?php the_title(); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</section>
<!-----------------------------------KONTAKT ------------------------------------->
<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<h2><?php the_field("contact_us_title"); ?> </h2>
						<form>
							<div class="form-group">
									<label for="name">Namn</label>
									<input type="text" id="name" class="form-control" value="<?php echo $name;?>" />
							</div>
							<div class="form-group">
									<label for="email">E-post</label>
									<input type="email" id="email" class="form-control" value="<?php echo $email;?>"/>
							</div>
							<div class="form-group">
									<label for="message">Meddelande</label>
									<textarea id="message" class="form-control"><?php echo $message;?></textarea>
							</div>
							<div class="form-group">
									<input type="submit" value="Skicka" class="btn btn-default" />
							</div>
						</form>
						</div>
						<div class="col-xs-6">
							<h2><?php the_field("adress_title"); ?></h2>
							<p>
							<?php the_field("adress_text"); ?>
							</p>
						</div>
					</div>
				</div>
			</section>
		</main>


<?php get_footer()?>