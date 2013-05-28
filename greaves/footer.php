        
            <footer class="row" id="bottom">
            
            	<article class="offset-by-two ten columns">
                    <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>
                        
                    <ul role="navigation">
                        <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
                        
                        <?php if(twitter_account()): ?>
                        <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
                        <?php endif; ?>
                        
                        <li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li>
                       
                        <li><a href="<?php echo base_url(); ?>" title="Return to my website.">Home</a></li>
                    </ul>
                    
                    <a id="attribution" title="Powered by Anchor CMS" href="//anchorcms.com">Powered by Anchor CMS</a>
                </article>
            </footer>
        </div><!--ends container-->
        
        
    </body>
</html>
