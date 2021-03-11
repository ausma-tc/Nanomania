<?php
/**
 * @package Message_Dashboard
 * @version 1.0.0
 */
/*
Plugin Name: Message Dashboard
Plugin URI: http://google.fr
Description: Plugin fait sur mesure afin d'afficher un message sur le Dashboard du compte client.
Author: Thomas Corbières
Version: 1.0.0
Author URI: http://google.fr
*/

// Ajoute le plugin dans le menu réglage.

function message_add_menu() {
	add_submenu_page ( "options-general.php", "Message Dash", "Message Dash", "manage_options", "message-dashboard", "message_dashboard_page" );
}
add_action ( "admin_menu", "message_add_menu" );

// Titre et form du plugin
function message_dashboard_page()
{
?>
<div class="wrap">
	<h1>
		Message Dashboard Plugin - Thomas Corbières
	</h1>
 
	<form method="post" action="options.php">
    <?php
			settings_fields("message_dashboard_config");
			do_settings_sections("message-dashboard");
			submit_button();
		?>
  </form>
</div> 
<?php
}
 
function message_dashboard_settings() {
	add_settings_section("message_dashboard_config", "", null, "message-dashboard");
	add_settings_field("message-dashboard-text", "Ecrivez un texte pour les clients :", "message_dashboard_options", "message-dashboard", "message_dashboard_config");
	register_setting("message_dashboard_config", "message-dashboard-text");
}
add_action("admin_init", "message_dashboard_settings");
 
function message_dashboard_options() {
?>
<div class="postbox" style="width: 65%; padding: 30px;">
	<input type="text" name="message-dashboard-text"
		value="<?php
	echo stripslashes_deep(esc_attr(get_option('message-dashboard-text'))); ?>" />
	Ecrivez un mesage qui sera affiché sur l'interface compte de l'utilisateur<br />
	<p style="margin-top: 10px;">Activation/Désactivation du texte à afficher:</p>

	<form method="post">
	<div style="padding: 10px 0;">
		<input type="radio" id="on" name="activation" value="activer">
		<label for="on">Activer</label>
	</div>

	<div>
		<input type="radio" id="off" name="activation" value="desactiver">
		<label for="off">Désactiver</label>
	</div>

	<button type="submit" name="Submit1" style="margin: 10px 0;">Validez votre choix</button>
	<?php


	if(isset($_POST["Submit1"]))
	{
	$radio_button = $_POST["activation"];
	
	if($radio_button == 'activer') {
		add_filter('the_content', 'message_dashboard_content' );
	} else {
		return 'Fonction désactivé';
	}

	}     

	?>
	</form>


</div>



<?php
 
}

// Faire apparaître le message dans le contenu de la page.

function message_dashboard_content($content) {
	return $content . stripslashes_deep ( esc_attr ( get_option ( 'message-dashboard-text' ) ) );
}

add_filter('the_content', 'message_dashboard_content' );
