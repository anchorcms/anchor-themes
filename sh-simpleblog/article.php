<?php theme_include('header');
has_search_results();
?>

		<section class="content-box" id="article-<?php echo article_id(); ?>">
				<?php
					if($associate=article_custom_field("post-associate"))
					{
				?>
					<div class="box-top">
						<img src="<?php echo $associate; ?>" />
					</div>
				<?php
					}
				?>

			<h1><?php echo article_title(); ?></h1>
			<time><?php echo relative_time(article_date()); ?></time>

			<article>
				<?php echo article_html(); ?>
			</article>

		</section>

		<?php if(comments_open()): ?>
		<section class="content-box comments">
			<h1>Comments</h1>

		    <div id="disqus_thread"></div>
		    <script type="text/javascript">
		        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		        var disqus_shortname = 'samhellawellblog'; // required: replace example with your forum shortname

		        /* * * DON'T EDIT BELOW THIS LINE * * */
		        (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
		    </script>
		    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

		</section>
		<?php endif; ?>

<?php theme_include('footer'); ?>