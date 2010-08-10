<?php

require_once dirname(__FILE__).'/../lib/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    // for compatibility / remove and enable only the plugins you want
    $this->enablePlugins(array('sfDoctrinePlugin'));
    $this->disablePlugins(array('sfPropelPlugin'));
    //$this->enableAllPluginsExcept(array('sfPropelPlugin', 'sfCompat10Plugin'));
    //$this->enableAllPluginsExcept(array('sfDoctrinePlugin', 'sfCompat10Plugin'));
  }
}
