<script src="<?php echo THEME_URI; ?>/assets/js/popper.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/jquery.sticky-sidebar.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/slick.slider/slick.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo2-QJ7RdCkLw3NFZEu71mEKJ_8LczG-c"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/app.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/nav.js"></script>

<script src="<?php echo THEME_URI; ?>/assets/js/jquery-ui.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/tag.suggest/js/tag-it.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/account.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/main.js"></script>

<script type='text/javascript' src='http://localhost/2020/02/socialasset/wp-includes/js/tinymce/tinymce.min.js?ver=4960-20190918'></script>
<script src="http://localhost/2020/02/socialasset/wp-admin/js/editor.min.js?ver=5.3.2"></script>
<?php 
function tag_echo(){
	$camp_tags = get_terms( array(
	    'taxonomy' => 'campaign_tag',
	    'hide_empty' => false
	) );
	$imp_ctags = '';
	if ( !empty( $camp_tags ) && !is_wp_error( $camp_tags ) ) {
		$ctags = array();
		foreach ($camp_tags as $camp_tags) {
			$ctags[] = $camp_tags->name;
		}
		$imp_ctags = implode('", "', $ctags);
	}
	if( isset($imp_ctags) && !empty($imp_ctags) ){
		return $imp_ctags;
	}else{
		return false;
	}
	
}

?>

<?php wp_footer(); ?>
    <script>
        jQuery(function(){
            var sampleTags = ["<?php echo tag_echo();?>"];
            // singleFieldTags2 is an INPUT element, rather than a UL as in the other 
            // examples, so it automatically defaults to singleField.
            jQuery('#singleFieldTags2').tagit({
                availableTags: sampleTags
            });
        });
    </script>
</body>
</html>
