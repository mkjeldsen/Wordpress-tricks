/* ============================================================
	Check for single post-type template ("single-{slug}.php")
	
	INSTALLATION:
	1. Copy/paste into functions.php
	2. Create single-{slug}.php and place in template folder
	3. Done!
	
=============================================================== */

	add_filter('single_template', 'check_for_category_single_template');
	function check_for_category_single_template( $template ) {
		foreach( (array) get_the_category() as $category ) {
			if ( file_exists(TEMPLATEPATH . "/single-{$category->slug}.php") ) return TEMPLATEPATH . "/single-{$category->slug}.php";
			if($category->parent) {
				$cat = get_the_category_by_ID( $category->parent );
				if ( file_exists(TEMPLATEPATH . "/single-{$category->slug}.php") ) return TEMPLATEPATH . "/single-{$category->slug}.php";
			}
		}
		return $template;
	}
