/**
* Alter allowed tags in comment form
* Installation:
* 1. Add this file's contents to your theme's functions.php.
* 2. Alter the $allowedtags array to your needs.
*/
function mchl_allowed_tags_in_comments() {
	define('CUSTOM_TAGS', true);
	global $allowedtags;

	$allowedtags = array(
		'a' => array(
			'href' => array(),
			'title' => array()
		),
		'br' => array(),
		'em' => array(),
		'strong' => array(),
	);
}
//Hooks the function to the specific action (init).
add_action('init', 'mchl_allowed_tags_in_comments', 10);
