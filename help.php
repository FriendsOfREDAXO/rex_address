<?php
	echo rex_view::info($this->i18n('help_intro'));
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_address::getStreet();".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', $this->i18n('config_street'), false);
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_address::getZipcode();".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', $this->i18n('config_zipcode'), false);
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_address::getCity();".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', $this->i18n('config_city'), false);
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_address::getCountry();".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', $this->i18n('config_country'), false);
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_address::getLatitude();".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', $this->i18n('config_latitude'), false);
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_address::getLongitude();".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', $this->i18n('config_longitude'), false);
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
?>