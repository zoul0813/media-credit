<?php
/*
Plugin Name: Media Credit
Plugin URI: https://github.com/zoul0813/media-credit
Description: This plugin adds a "Credit" field to the media uploading and editing tool and inserts this credit when the images appear on your blog.
Version: 3.0.0
Author: Scott Bressler, modified by David Higgins
Author URI: https://github.com/zoul0813/media-credit
Text Domain: media-credit
License: GPL2
*/

require_once('constants.php');
require_once('display.php');
require_once('MediaCredit.class.php');

register_activation_hook(__FILE__, array('MediaCreditPlugin', 'set_default_media_credit_options') );

$media_credit_plugin = new MediaCreditPlugin;