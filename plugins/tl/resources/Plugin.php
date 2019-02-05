<?php namespace Tl\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
  public function pluginDetails()
  {
    return [
      'name' => 'Tl',
      'description' => 'Provides company resources',
      'author' => 'Lylia Taleb',
      'icon' => 'icon-leaf'
    ];
  }

  public function registerComponents()
  {
    return [
      '\Tl\Resources\Components\Links' => 'resourcesLinks'
    ];
  }
}
