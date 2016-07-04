<?php

namespace Concrete\Package\JafDevelopmentSettings;

defined('C5_EXECUTE') or die(_('Access Denied.'));

use Config;
use Core;
use Package;

class Controller extends Package {

  protected $pkgHandle = 'jaf_development_settings';
  protected $pkgVersion = '1.2.0';
  protected $appVersionRequired = '5.7.5.7';

  public function getPackageName() { return t('Development Settings'); }

  public function getPackageDescription() { return t('Sets configuration options useful while developing or debugging concrete5 themes or other functionality.'); }

  public function on_start() {

    /* --------------------------------------------------------------------------  *
     * Clear cache on every page load; considerably slows down page load
     * -------------------------------------------------------------------------- */
    // $cms = Core::make('app');
    // $cms->clearCaches();

    /* --------------------------------------------------------------------------  *
     * Enable maintenance mode
     * ------------------------------------------------------------------------- */
    // Config::set('concrete.maintenance_mode', true);

    /* --------------------------------------------------------------------------  *
     * Enable more useful debug messages
     * -------------------------------------------------------------------------- */
    Config::set('concrete.debug.display_errors', true);
    Config::set('concrete.debug.detail', 'debug');

    /* --------------------------------------------------------------------------  *
     * Disable all caching
     * -------------------------------------------------------------------------- */
    Config::set('concrete.cache.enabled', false);
    Config::set('concrete.cache.overrides', false);
    Config::set('concrete.cache.blocks', false);
    Config::set('concrete.cache.assets', false);
    Config::set('concrete.cache.theme_css', false);
    Config::set('concrete.cache.pages', false);
    // Not sure what this does, but it sounds useful:
    Config::set('concrete.cache.doctrine_dev_mode', true);

    /* --------------------------------------------------------------------------  *
     * Disable Less compression and enable Less sourcemaps
     * -------------------------------------------------------------------------- */
    Config::set('concrete.theme.compress_preprocessor_output', false);
    Config::set('concrete.theme.generate_less_sourcemap', true);

    /* --------------------------------------------------------------------------  *
     * Enable error logging and database query logging
     * Might lead to big database tables
     *
     * Affected tables:
     * -> Logs (clear at: /dashboard/reports/logs)
     * -> SystemDatabaseQueryLog (clear at: /dashboard/system/optimization/query_log/)
     * -------------------------------------------------------------------------- */
    Config::set('concrete.log.errors', true);
    Config::set('concrete.log.queries.log', true);

    /* --------------------------------------------------------------------------  *
     * Prevent logout when user agent string changes
     * -------------------------------------------------------------------------- */
    Config::set('concrete.security.session.invalidate_on_user_agent_mismatch', false);

    /* --------------------------------------------------------------------------  *
     * Disable help system and news overlay (because it's annoying)
     * -------------------------------------------------------------------------- */
    Config::set('concrete.accessibility.display_help_system', false);
    Config::set('concrete.external.news', false);
    Config::set('concrete.external.news_overlay', false);

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
