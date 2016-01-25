<?php

class TwoColumnPage extends Page {

	private static $db = array(
		'RightColumn' => 'HTMLText'
		);

	public function getCMSFields() {

		$fields = parent::getCMSFields();
		// Rename Title of Main HTMLEDITOR to 'Performance'
		$fields->fieldByName('Root.Content.Main')->setTitle('LeftColumn');
		// Add Second content input field
		$fields->addFieldToTab("Root.Content.RightColumn", new HTMLEditorField('RightColumn','RightContent'));

		return $fields;
	}

}

class TwoColumnPage_Controller extends Page_Controller {

}



