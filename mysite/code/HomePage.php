<?php

class HomePage extends Page {

	private static $db = array(

		);

	public function getCMSFields() {

//Could eventually add option to upload a new BG image/ new logo... in the future
	}

}

class HomePage_Controller extends Page_Controller {



	public function init() {
        parent::init();
        //
        Requirements::javascript("cms/javascript/fullScreenImage.js");
        Requirements::css("cms/css/home.css");
    }

}



