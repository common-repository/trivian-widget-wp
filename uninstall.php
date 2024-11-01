<?php

//  remove all stored options on uninstall the plugin
$availableWPOptions = array(
  'trivian_widget',
);

foreach($availableWPOptions as $option) {
  delete_option($option);
}
