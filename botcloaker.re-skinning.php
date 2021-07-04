<?php function add_reskinning_cpa_admin_page() {
$icon_url =  plugin_dir_url( __FILE__ ). '/imgs/icon.png';
add_menu_page("Re-skinning Cpa Button Adder", "Re-skinning BC", "administrator", "myadminpage", "reskinning_cpa_admin_page", $icon_url, 2);
}
add_action('admin_menu', 'add_reskinning_cpa_admin_page' );
function display_reskinning_button_text(){ ?>
<input type="text" name="reskinning_button_text" style="min-width: 600px;" placeholder="Button text here" id="reskinning_button_text" value="<?php echo get_option('reskinning_button_text'); ?>" />
<p class="description"><?php _e('Enter your CPA button text here'); ?></p>
<?php }
function display_reskinning_button_url(){ ?>
<input type="text" name="reskinning_button_url" style="min-width: 600px;" placeholder="Button URL here" id="reskinning_button_url" value="<?php echo get_option('reskinning_button_url'); ?>" />
<p class="description"><?php _e('Enter your CPA button URL here'); ?></p>
<?php }
function display_reskinning_button_description(){ ?>
<input type="text" name="reskinning_button_description" style="min-width: 600px;" placeholder="Button description here" id="reskinning_button_description" value="<?php echo get_option('reskinning_button_description'); ?>" />
<p class="description"><?php _e('Enter your CPA button description  here'); ?></p>
<?php }
function display_reskinning_button_color(){ ?>
<input type="text" name="reskinning_button_color" style="min-width: 200px;" placeholder="Button Color here" id="reskinning_button_color" value="<?php echo get_option('reskinning_button_color'); ?>" />
<p class="description"><?php _e('Enter your CPA button <code>HEX COLOR CODE</code> here - <code>Example: eb4034</code>'); ?></p>
<p class="description"><?php _e('You can use <a target="_blank" href="https://www.google.com/search?q=color+picker">Google Color Picker</a> to choose a nice color'); ?></p>
<?php }
function display_theme_panel_fieldset(){
add_settings_section("reskinning_button_section", null, null, "reskinning_button_options");
add_settings_field("reskinning_button_text", "Button Text", "display_reskinning_button_text", "reskinning_button_options", "reskinning_button_section");  
register_setting("reskinning_button_section", "reskinning_button_text");	
add_settings_field("reskinning_button_url", "Button Url", "display_reskinning_button_url", "reskinning_button_options", "reskinning_button_section");  
register_setting("reskinning_button_section", "reskinning_button_url");	
add_settings_field("reskinning_button_description", "Button Desctiption", "display_reskinning_button_description", "reskinning_button_options", "reskinning_button_section");  
register_setting("reskinning_button_section", "reskinning_button_description");	
add_settings_field("reskinning_button_color", "Button Color", "display_reskinning_button_color", "reskinning_button_options", "reskinning_button_section");  
register_setting("reskinning_button_section", "reskinning_button_color");	
}
add_action("admin_init", "display_theme_panel_fieldset");
include( plugin_dir_path( __FILE__ ) . 'botcloak.re-skinning.php'); 