                        <?php $skill = get_field( "skills" ); ?>
							<?php foreach($skill as $sub_field): ?>
						<div class="col-xs-4">				
							<?php echo $sub_field["fa_fa_skill"]; ?>
							<h3><?php echo $sub_field["title_skill"]; ?></h3>
							<p><?php echo $sub_field["text_skill"]; ?></p>							
						</div>
							<?php endforeach; ?>