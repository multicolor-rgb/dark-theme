<?php
 
# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
 
# register plugin
register_plugin(
	$thisfile, //Plugin id
	'Dark Theme admin Mod', 	//Plugin name
	'1.5', 		//Plugin version
	'Mateusz Skrzypczak',  //Plugin author
	'http://www.multicolor.stargard.pl/', //author website
	'Dark Admin Theme for get simple', //Plugin description
	'plugins', //page type - on which admin tab to display
	'hello_world_show'  //main function (administration)
);

register_script('dark_theme', $SITEURL.'plugins/dark_theme/js/scriptdarktheme.js', '0.1', TRUE);
register_style('dark_theme_style', $SITEURL.'plugins/dark_theme/css/css.css', '0.1', FALSE);

queue_script ( 'dark_theme' , GSBACK ) ; 
queue_style( 'dark_theme_style' , GSBACK ) ;
 
# activate filter 
add_action('header','dark_theme'); 
add_action('index-login','dark_theme'); 
 
# add a link in the admin tab 'theme'
add_action('plugins-sidebar','createSideMenu',array($thisfile,'Dark_theme <i class="fas fa-heart"></i> Get Simple CMS'));
 
# functions
function dark_theme() {
	echo ('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
	echo ('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">');
	echo ('<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext,cyrillic" rel="stylesheet">');
}

function hello_world_show() {
	echo '<h3>Thanks for the installation!</h3> <p style="font-size:16px;">This theme will help you use GetSimple CMS and on mobile devices.</p><br>
	<br>Thanks <b>Oleg06</b> for create fix,and persistence in correcting my plugin and not giving up for winning, as well as creating an entry about this plugin on your website.<br><br> Thanks <b>Craiga</b> for first edit dark theme on github and good opinion<br>
	<br>Thanks <b>vixrealitum</b> for many lines of text on the discord about plug-in corrections, and good words
	
	';
	
}
?>