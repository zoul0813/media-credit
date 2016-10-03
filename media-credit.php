<?php
/*
Plugin Name: Media Credit (Modified)
Plugin URI: https://github.com/zoul0813/media-credit
Description: This plugin adds a "Credit" field to the media uploading and editing tool and inserts this credit when the images appear on your blog.
Version: 3.0.6
Author: Scott Bressler, modified by David Higgins
Author URI: https://github.com/zoul0813/media-credit
Text Domain: media-credit
License: GPL2
*/


// remove update notice for forked plugins
function remove_update_notifications($value) {
  if(isset($value) && is_object($value)) {
    unset($value->response[plugin_basename(__FILE__)]);
  }
  return $value;
}
add_filter('site_transient_update_plugins', 'remove_update_notifications');

require_once('constants.php');
require_once('display.php');
require_once('MediaCredit.class.php');

register_activation_hook(__FILE__, array('MediaCreditPlugin', 'set_default_media_credit_options') );

$media_credit_plugin = new MediaCreditPlugin;
