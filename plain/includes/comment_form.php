<?php if(comments_open()): ?>
    <section id="comments">
    
        <h2><?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> <a href="#comment" title="Contribute to the discussion!"><em>Add your own</em></a></h2>
    
        <?php if(has_comments()): ?>
        <ul class="commentlist">
            <?php while(comments()): ?>
            <li class="comment" id="comment-<?php echo comment_id(); ?>">
                <h3><?php echo comment_name(); ?></h3>
                <time><?php echo relative_time(comment_time()); ?></time> 
                
                <div class="content">
                    <?php echo comment_text(); ?>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        
        <a name="comment"></a>
        <h2>Add Your Comments</h2>
            
        <?php echo comment_form_notifications(); ?>
        <?php echo comment_form_input_name('placeholder="Your Name"'); ?><br>
        <?php echo comment_form_input_email('placeholder="Your Email (Will Never Be Published)"'); ?><br>              
        <?php echo comment_form_input_text('placeholder="Your Comment..."'); ?><br>
        <?php echo comment_form_button(); ?><br>

        </form>
    
    </section>
<?php endif; ?>