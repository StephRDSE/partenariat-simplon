<?php
/*
Plugin Name: Simplon partenariat
Plugin URI: http://simplon.co/partenariat_plug
Description: Un plugin pour indique le partenariat avec simplon.co sous WordPress
Version: 0.1
Author: StephRDSE
Author URI: http://simplon.co
License: GPL2
*/

function SimplonShortcode() {
	return '<p style=" text-size: 8px; font-style: italic; color: #8B572A;">La publication de cet article est possible grâce à mon super partenaire <a href="http://simplon.co">simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web. </p>';
}
add_shortcode('Simplon', 'SimplonShortcode');