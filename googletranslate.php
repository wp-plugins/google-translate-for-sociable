<?php
/*
Plugin Name: Google Translate for Sociable
Plugin URI: http://wordpress.org/extend/plugins/google-translate-for-sociable/
Description: Automatically add links on your posts, pages and RSS feed to your favorite social bookmarking site. Requires Sociable 3.4.1 or greater.
Version: 1.0
Author: Lopo Lencastre de Almeida <dev@ipublicis.com>
Author URI: http://ipublicis.com/
Donate link: http://smsh.me/7kit
License: GNU GPL v3 or later

    Copyright (C) 2009 iPublicis!COM

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

    Copyright 2006 Peter Harkins (ph@malaprop.org)
*/

function googletranslate_sociable_add_sites( $known_sites ) {
	$googletranslate_sociable_url = WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__));

	$known_sites['GoogleTranslate'] = array(
		'favicon' => $googletranslate_sociable_url. '/images/united_nations.png',
		'url' => 'http://translate.google.com/translate?u=PERMALINK',
		'description' => 'Translate the post into your language'
	);
	return $known_sites;
}
add_filter('sociable_known_sites','googletranslate_sociable_add_sites',10,1);

?>
