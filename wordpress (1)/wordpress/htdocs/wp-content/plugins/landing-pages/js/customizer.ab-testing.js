jQuery(".variation-lp").on('click', function (event) {	// In thickbox a/b toggles	jQuery(".lp-load-overlay").fadeIn('slow');		var the_id = jQuery(this).attr("id");	var rel_letter = "&letter=" + jQuery(this).attr("rel");	jQuery(".current-variation-view").removeClass("current-variation-view")	jQuery(this).addClass('current-variation-view');		reload_param = "&lp-variation-id=" + jQuery(this).attr("id");		var new_options_reload = "/wp-admin/edit.php?post_type=landing-page&page=lp-frontend-editor&frontend-go=on&lp_id="+ ab_customizer.lp_id + reload_param + rel_letter;	console.log(new_options_reload);	var new_preview_reload = ab_customizer.permalink+"?live-preview-area="+ab_customizer.randomstring+ reload_param;	jQuery("#lp_customizer_options").attr("src", new_options_reload);	jQuery("#lp-live-preview").attr("src", new_preview_reload);	jQuery("#current_variation_id").html(jQuery(this).attr("id"));		console.log(jQuery(this).attr("id"));	console.log(new_preview_reload);		setTimeout(function() {		jQuery(".lp-load-overlay").fadeOut('slow');	}, 1000);	});	