<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>
<footer class="site-footer container bg-secondary text-white py-20">
	<div class="row">
		<div class="col-12 col-md-3 offset-md-3">
			EpicPress 
			<?php $year = date('Y');
			$copyright_text = str_replace('[year]',$year, '&copy; [year]'); 
			echo $copyright_text; ?>

		</div>
		<div class="col-12 col-md-3">
			Created by Epic Marketing
			<a class="text-white" href="https://twitter.com/epicmarketing"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a class="text-white" href="https://www.facebook.com/epicmarketingutah"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a class="text-white" href="https://www.instagram.com/epic.marketing/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a class="text-white" href="https://www.linkedin.com/company/epic-marketing"><i class="fa fa-linkedin" aria-hidden="true"></i></a>				
		</div>
	</div>
</footer>
</div>

<!-- DO NOT REMOVE  -->
<!-- Used in JS to determine current breakpoint size -->
<div class="device-sm d-md-none"></div><div class="device-md d-none d-md-block d-lg-none"></div><div class="device-lg d-none d-lg-block"></div>
	
</div><!--DO NOT REMOVE end #page -->

<?php unsupported_browser_modal(); ?>
<?php wp_footer(); ?>

</body>
</html>
