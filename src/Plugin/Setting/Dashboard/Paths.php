<?php

namespace Drupal\pluraltheme\Plugin\Setting\Dashboard;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "dashboard_paths" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "dashboard_paths",
 *   type = "textarea",
 *   title = @Translation("Dashboard paths"),
 *   defaultValue = "",
 *   description = @Translation("Specify the paths which will be themed using the dashboard template. This is in addition to the paths under the menu specified above."),
 *   groups = {
 *     "dashboard" = @Translation("Dashboard"),
 *   },
 * )
 */
class Paths extends SettingBase {}

