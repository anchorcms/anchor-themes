		<div class="clear">
		</div>

		<footer id="main-footer">
			<div class="left">&copy; <?php echo date('Y'); ?> <a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></div>
			<div class="right">Theme by <a href="http://codera.in/">Chris Veto</a>. Powered by <a href="http://anchorcms.com">Anchor</a></div>
		</footer>

	</div> <!-- wrap -->


	<?php if(PLAIN_GOOGLE_UA !== ""): ?>

	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<?php echo PLAIN_GOOGLE_UA; ?>']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
	
	<?php endif; ?>

</body>
</html>