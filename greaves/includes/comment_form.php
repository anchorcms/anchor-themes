<?php if(comments_open()): ?>
    <section class="row comments">
    
    	<article class="two columns">
            <h3><?php echo total_comments() . pluralise(total_comments(), ' comment'); ?></h3> 
            <h3 class="add"><a href="#comment" title="Contribute to the discussion!">Add your own</a></h3>
        </article>
    
        
    
        <?php if(has_comments()): ?>
        <ul class="commentlist ten columns">
            <?php while(comments()): ?>
            <li class="comment" id="comment-<?php echo comment_id(); ?>">
                <p><em><?php echo comment_name(); ?> said&hellip;</em></p>
                
                
                <div class="content">
                    <blockquote><?php echo comment_text(); ?></blockquote>
                     
                </div>
                <time><?php echo relative_time(comment_time()); ?></time>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        
        <form id="comment" class="row commentform" method="post" action="<?php echo current_url(); ?>#comment">
        
        	<article class="two columns">
                    <legend>Add your comments</legend>
      		</article>
            
            <article class="ten columns">
				<?php echo comment_form_notifications(); ?>
                
                <p class="name">
                    <label for="name">Your name:</label>
                    <?php echo comment_form_input_name(); ?>
                </p>
                
                <p class="email">
                    <label for="email">Your email address:</label>
                    <span class="hide-on-phones"><em>Will never be published.</em></span>
                    <?php echo comment_form_input_email(); ?>                
                </p>
                
                <p class="textarea">
                    <label for="text">Your comment:</label>
                    <?php echo comment_form_input_text(); ?>
                </p>
                
                <p class="submit">
                    <?php echo comment_form_button(); ?>
                </p>
             </article>
        </form>
    
    </section>
<?php endif; ?>