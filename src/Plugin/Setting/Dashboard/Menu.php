<?php

namespace Drupal\pluraltheme\Plugin\Setting\Dashboard;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;
use Drupal\system\Entity\Menu as CoreMenu;

/**
 * The "dashboard_menu" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "dashboard_menu",
 *   type = "select",
 *   title = @Translation("Dashboard menu"),
 *   defaultValue = "dashboard",
 *   description = @Translation("Specify the menu to be used for the dashboard. The menu path and all sub-paths will be themed using the dashboard template."),
 *   groups = {
 *     "dashboard" = @Translation("Dashboard"),
 *   },
 * )
 */
class Menu extends SettingBase {

  public function getElementProperties() {
    $properties = parent::getElementProperties();
    $menus = CoreMenu::loadMultiple();
    $properties['options'] = array_map(function($menu) {
      return $menu->label();
    }, $menus);
    return $properties;
  }

}
