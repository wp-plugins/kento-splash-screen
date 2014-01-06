<?php
		if($_POST['oscimp_hidden'] == 'Y') {
			//Form data sent
			

			$kento_splash_screen_bg_color = $_POST['kento_splash_screen_bg_color'];
			update_option('kento_splash_screen_bg_color', $kento_splash_screen_bg_color);

			$kento_splash_screen_bg_img = $_POST['kento_splash_screen_bg_img'];
			update_option('kento_splash_screen_bg_img', $kento_splash_screen_bg_img);

			$kento_splash_screen_border_size = sanitize_text_field($_POST['kento_splash_screen_border_size']);
			update_option('kento_splash_screen_border_size', $kento_splash_screen_border_size);

			$kento_splash_screen_border_color = $_POST['kento_splash_screen_border_color'];
			update_option('kento_splash_screen_border_color', $kento_splash_screen_border_color);
			
			$kento_splash_screen_content = $_POST['kento_splash_screen_content'];
			update_option('kento_splash_screen_content', $kento_splash_screen_content);			
			
			
			?>
			<div class="updated"><p><strong><?php _e('Changes Saved.' ); ?></strong></p>
            </div>
            
            
            
            
			<?php
		} else {
			//Normal page display
			$kento_splash_screen_bg_color = get_option( 'kento_splash_screen_bg_color' );
			$kento_splash_screen_bg_img = get_option( 'kento_splash_screen_bg_img' );			
			$kento_splash_screen_border_size = get_option( 'kento_splash_screen_border_size' );
			$kento_splash_screen_border_color = get_option( 'kento_splash_screen_border_color' );
			$kento_splash_screen_content = get_option( 'kento_splash_screen_content' );			
			
			
		}

?>


<div class="wrap skill-bars">
	<div id="icon-tools" class="icon32"><br></div><?php echo "<h2>".__('Kento Splash Screen Settings')."</h2>";?>
		<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="oscimp_hidden" value="Y">
        <?php settings_fields( 'kento_splash_screen_plugin_options' );
				do_settings_sections( 'kento_splash_screen_plugin_options' );
			
		?>

<table class="form-table">
               

   


	<tr valign="top">
		<th scope="row">Background Color:
		</th>
		<td style="vertical-align:middle;">
			<input type="text" name="kento_splash_screen_bg_color" size="7" id="kento-splash-screen-bg-color"  value ="<?php if ( isset( $kento_splash_screen_bg_color ) ) echo $kento_splash_screen_bg_color; ?>">

            
		</td>
	</tr>
    
	<tr valign="top">
		<th scope="row">Background Image URL:
		</th>
		<td style="vertical-align:middle;">
		<input type="text" name="kento_splash_screen_bg_img" size="50"  id="kento-splash-screen-bg-img" value="<?php if ( isset( $kento_splash_screen_bg_img ) ) echo $kento_splash_screen_bg_img; ?>"  /><br />
            <div id="kento-splash-screen-bg-img-preview">
            <img src="" />
            </div>
<script>
var kento_splash_screen_bg_img = jQuery('#kento-splash-screen-bg-img').attr("value");
jQuery('#kento-splash-screen-bg-img-preview img').attr("src",kento_splash_screen_bg_img);

</script>      
  
		</td>
	</tr>    
    
    
	<tr valign="top">
		<th scope="row">Border Size:
		</th>
		<td style="vertical-align:middle;">
			<input type="text" name="kento_splash_screen_border_size" size="7" id="kento-splash-screen-border-size"  value ="<?php if ( isset( $kento_splash_screen_border_size ) ) echo $kento_splash_screen_border_size; ?>">px
		</td>
	</tr>    
    
	<tr valign="top">
		<th scope="row">Border Color:
		</th>
		<td style="vertical-align:middle;">
			<input type="text" name="kento_splash_screen_border_color" size="7" id="kento-splash-screen-border-color"  value ="<?php if ( isset( $kento_splash_screen_border_color ) ) echo $kento_splash_screen_border_color; ?>">
		</td>
	</tr>    
    
	<tr valign="top">
		<th scope="row">HTML Content:
		</th>
		<td style="vertical-align:middle;">
        
        
        
        <?php

	wp_editor( stripslashes($kento_splash_screen_content), 'kento-splash-screen-content', $settings = array('textarea_name'=>'kento_splash_screen_content') );
		
		
		?>

           
		</td>
	</tr>     
</table>
                <p class="submit">
                    <input class="button button-primary" type="submit" name="Submit" value="<?php _e('Save Changes' ) ?>" />
                </p>
		</form>


        
        
        
        
</div>
