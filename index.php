<?php
	defined('_JEXEC') or die;
	$app = JFactory::getApplication();
	$doc = JFactory::getDocument();
	$menu = $app->getMenu();
	$lang = JFactory::getLanguage();
	
	$template_url = $this->baseurl . '/templates/' . $this->template;
	// $doc->addStyleSheet($template_url . '/css/style.css');
	// $doc->addStyleSheet($template_url . '/css/style-edit.css');
	
	$is_home_page = $menu->getActive() == $menu->getDefault($lang->getTag());
	
	JHtml::_('jquery.framework');
	
	unset($doc->_scripts[JURI::root(true). '/media/system/js/caption.js']);
	unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery.min.js']);
	unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery-noconflict.js']);
	unset($doc->_scripts[JURI::root(true). '/media/jui/js/jquery-migrate.min.js']);
	JFactory::getDocument()->setGenerator('');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<jdoc:include type="head" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/templates/bau/css/bootstrap.min.css" rel="stylesheet">
<link href="/templates/bau/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="/templates/bau/css/style.css" rel="stylesheet">
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="/templates/bau/js/bootstrap.min.js"></script>
		<script src="/templates/bau/js/lightbox-2.6.min.js"></script>
		<script src="/templates/bau/js/scripts.js"></script>
	</body>
</html>
