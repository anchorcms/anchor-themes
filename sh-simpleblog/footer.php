
			<div class="content-box" id="footer">

				<div class="left">

					<div class="footer-section">
						<h4><?php echo site_name(); ?></h4>
						<p><?php echo site_description(); ?></p>
					</div>

					<div class="footer-section">
						<h4>Stats</h4>
						<p>
							I have posted <?php echo total_posts(); ?> posts so far!
						</p>
					</div>

				</div>
				<div class="right">

					<div class="footer-section">
						<h4>Categories</h4>
						<p>
							<ul>
							<?php while(categories()): ?>
								<li>
									<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
										<?php echo category_title(); ?>
									</a>
								</li>
							<?php endwhile; ?>
							</ul>
						</p>
					</div>

					<div class="footer-section">
						<h4>Pages</h4>
						<p>
							<ul>
							<?php while(menu_items()): ?>
								<li>
									<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
										<?php echo menu_name(); ?>
									</a>
								</li>
							<?php endwhile; ?>
							</ul>
						</p>
					</div>

				</div>

				<div style="clear:both"></div>

			</div>

		</div>
    </body>
</html>