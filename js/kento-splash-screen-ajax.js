jQuery(document).ready(function(jQuery)
	{	
	

		jQuery("#kento-splash-screen-black").click(function()
			{
				jQuery(this).hide();
				jQuery(".kento-splash-screen").hide();
		});
		
		jQuery('#kento-splash-screen-bg-color, #kento-splash-screen-border-color').wpColorPicker();
	});