<?php

/**
 * jQuery UI
 * 
 * Provide the jQuery UI library with according themes.
 * 
 * @version 1.8.14
 * @author Cor Bosman <roundcube@wa.ter.net>
 * @author Thomas Bruederli <roundcube@gmail.com>
 */
class jqueryui extends rcube_plugin
{
  public $noajax = true;

  public function init()
  {
    $version = '1.8.14';

    $rcmail = rcmail::get_instance();
    $this->load_config();

    // include UI scripts
    $this->include_script("js/jquery-ui.min.js");

    // include UI stylesheet
    $skin = $rcmail->config->get('skin', 'default');
    $ui_map = $rcmail->config->get('jquery_ui_skin_map', array());
    $ui_theme = $ui_map[$skin] ? $ui_map[$skin] : 'smoothness';

    if (file_exists($this->home . "/css/$ui_theme/jquery-ui.custom.css")) {
      $this->include_stylesheet("css/$ui_theme/jquery-ui.min.css");
    }
    else {
      $this->include_stylesheet("css/smoothness/jquery-ui.min.css");
    }

    // jquery UI localization
    $jquery_ui_i18n = $rcmail->config->get('jquery_ui_i18n', array());
    if (count($jquery_ui_i18n) > 0) {
      $lang_l = str_replace('_', '-', substr($_SESSION['language'], 0, 5));
      $lang_s = substr($_SESSION['language'], 0, 2);
      foreach($jquery_ui_i18n as $package) {
        if (file_exists($this->home . "/js/i18n/jquery.ui.$package-$lang_l.js")) {
          $this->include_script("js/i18n/jquery.ui.$package-$lang_l.js");
        }
        else if (file_exists($this->home . "/js/i18n/jquery.ui.$package-$lang_s.js")) {
          $this->include_script("js/i18n/jquery.ui.$package-$lang_s.js");
        }
      }
    }
  }

}
