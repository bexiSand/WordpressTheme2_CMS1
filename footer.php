<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h4><?php the_field('title_footer_area_1', 'options');?></h4>
						<p><?php the_field('text_footer_area_1', 'options');?></p>
					</div>

					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4><?php the_field('title_footer_area_2', 'options');?></h4>
						<p><?php the_field('text_footer_area_2', 'options');?></p>
					</div>

					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4><?php the_field('title_footer_area_3', 'options');?></h4>
						<ul class="social">
                    <?php $links = get_field('social_m_footer', 'option'); 
                        if( !empty($links) ):
                    ?>
                    <?php foreach($links as $sub_field): ?>
                        <li>
							<?php echo $sub_field["social_m_icon"]; ?>                   
                            <a href="<?php echo $sub_field["social_m_link"]; ?>">
								<?php echo $sub_field["social_m_text"]; ?>
							</a>
                         </li>
                    <?php endforeach; ?>
                    <?php
                    endif;
                    ?>
                </ul>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p><?php the_field('footer_area_bottom', 'options');?></p>
					</div>
				</div>
			</div>
	</footer>

</div>


<?php wp_footer(); ?>
</body>
</html>