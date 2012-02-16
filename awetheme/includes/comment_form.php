<?php if(comments_open()): ?>
<section id="comments">
	<a id="add" href="#comment">Dive into the discussion!</a>
	<h3><?php echo total_comments() . pluralise(total_comments(), ' comment'); ?></h3>
	<?php if(has_comments()) : ?>
		<ul>
			<?php while(comments()): ?>
				<li class="comment">
					<h3><?php echo comment_name(); ?></h3>
					<div>
						<?php echo comment_text(); ?>
						<time><?php echo comment_date(); ?></time>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
	<form id="comment" action="<?php echo current_url(); ?>#comment" method="post">
		<div id="inputs">
			<?php echo comment_form_input_name('placeholder="Your Full Name"'); ?>
			<?php echo comment_form_input_email('placeholder="Your Email Address"'); ?> 
			<?php echo comment_form_input_text('placeholder="Your message right here..."'); ?>
		</div>
		<div id="submit"><?php echo comment_form_button(); ?></div>
	</form>
</section>
<?php endif; ?>