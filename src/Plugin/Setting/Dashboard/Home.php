<?php

namespace Drupal\pluraltheme\Plugin\Setting\Dashboard;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "dashboard_home" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "dashboard_home",
 *   type = "textfield",
 *   title = @Translation("Dashboard home page"),
 *   defaultValue = "#",
 *   description = @Translation("Specify the path to the dashboard home page (must start with a ""/"")."),
 *   groups = {
 *     "dashboard" = @Translation("Dashboard"),
 *   },
 * )
 */
class Home extends SettingBase {}
