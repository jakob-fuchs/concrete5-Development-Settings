<?php

namespace Concrete\Package\JafDevelopmentSettings;

defined('C5_EXECUTE') or die(_('Access Denied.'));

use Package;
use Config;

class Controller extends Package {

  protected $pkgHandle = 'jaf_development_settings';
  protected $pkgVersion = '1.1.1';
  protected $appVersionRequired = '5.7.5.7';

  public function getPackageName() {

    return t('Development Settings');

  }

  public function getPackageDescription() {

    return t('Package to set configuration options useful while developing or debugging concrete5 themes or other functionality.');

  }

  public function on_start() {

    // Enable Maintenance Mode
    // ---------------------------------------------------------
    Config::set('concrete.maintenance_mode', true);

    // Enable useful debugging messages
    // ---------------------------------------------------------
    Config::set('concrete.debug.detail', 'debug');

    // Disable all Caching
    // ---------------------------------------------------------
    Config::set('concrete.cache.enabled', false);
    Config::set('concrete.cache.overrides', false);
    Config::set('concrete.cache.blocks', false);
    Config::set('concrete.cache.assets', false);
    Config::set('concrete.cache.theme_css', false);
    Config::set('concrete.theme.compress_preprocessor_output', false);

    // Disable help system and news overlay
    // ---------------------------------------------------------
    Config::set('concrete.accessibility.display_help_system', false);
    Config::set('concrete.external.news', false);
    Config::set('concrete.external.news_overlay', false);

    // Disable Marketplace integration
    // ---------------------------------------------------------
    // Config::set('concrete.marketplace.enabled', false);
    // Config::set('concrete.marketplace.intelligent_search', false);
    // Config::set('concrete.external.intelligent_search_help', false);

  }

  public function install() {

    $pkg = parent::install();

  }

  public function upgrade() {

    parent::upgrade();

  }

  public function uninstall() {

    parent::uninstall();

  }

}
