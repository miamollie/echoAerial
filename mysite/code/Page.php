<?php
class Page extends SiteTree {

	private static $db = array(
		);

	private static $has_one = array(
		);

}
class Page_Controller extends PageController {


	private static $allowed_actions = array (
		);

	public function init() {
		parent::init();
		Requirements::javascript("themes/echo-theme/javascript/menu.js");
		Requirements::css("themes/echo-theme/css/menu.css");
		Requirements::css("themes/echo-theme/css/contact.css");

	// 	$css[] = $this->ThemeDir() . '/css/home.css';
	// 	$css[] = $this->ThemeDir() . '/css/menu.css';
	// 	// $css[] = $this->ThemeDir() . '/css/stylesheet3.css';
	// 	Requirements::combine_files('combined.css', $css);
	// 	Requirements::process_combined_files();
	}

}
