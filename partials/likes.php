<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2>Vi gillar</h2>
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