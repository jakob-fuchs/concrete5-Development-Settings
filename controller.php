<?php

namespace Concrete\Package\JafDevelopmentSettings;

defined('C5_EXECUTE') or die(_('Access Denied.'));

use Package;

class Controller extends Package {

  protected $pkgHandle = 'jaf_development_settings';
  protected $pkgVersion = '1.4.1';
  protected $appVersionRequired = '5.7.5.9';

  public function getPackageName() { return t('Development Settings'); }

  public function getPackageDescription() { return t('Sets configuration options useful while developing or debugging concrete5 themes or other functionality.'); }

  public function on_start() {

    $app = \Concrete\Core\Support\Facade\Application::getFacadeApplication();
    $config = $app->make('config');

    /* --------------------------------------------------------------------------  *
     * Clear cache on every page load; considerably slows down page load
     * -------------------------------------------------------------------------- */
    // $app->clearCaches();

    /* --------------------------------------------------------------------------  *
     * Enable maintenance mode
     * ------------------------------------------------------------------------- */
    // $config->set('concrete.maintenance_mode', true);

    /* --------------------------------------------------------------------------  *
     * Enable more useful debug messages
     * -------------------------------------------------------------------------- */
    $config->set('concrete.debug.display_errors', true);
    $config->set('concrete.debug.detail', 'debug');

    /* --------------------------------------------------------------------------  *
     * Disable all caching
     * -------------------------------------------------------------------------- */
    $config->set('concrete.cache.enabled', false);
    $config->set('concrete.cache.overrides', false);
    $config->set('concrete.cache.blocks', false);
    $config->set('concrete.cache.assets', false);
    $config->set('concrete.cache.theme_css', false);
    $config->set('concrete.cache.pages', false);
    // Not sure what this does, but it sounds useful:
    $config->set('concrete.cache.doctrine_dev_mode', true);

    /* --------------------------------------------------------------------------  *
     * Disable Less compression and enable Less sourcemaps
     * -------------------------------------------------------------------------- */
    $config->set('concrete.theme.compress_preprocessor_output', false);
    $config->set('concrete.theme.generate_less_sourcemap', true);

    /* --------------------------------------------------------------------------  *
     * Enable error logging and database query logging
     * Might lead to big database tables
     *
     * Affected tables:
     * -> Logs (clear at: /dashboard/reports/logs)
     * -> SystemDatabaseQueryLog (clear at: /dashboard/system/optimization/query_log/)
     * -------------------------------------------------------------------------- */
    $config->set('concrete.log.errors', true);
    $config->set('concrete.log.queries.log', true);

    /* --------------------------------------------------------------------------  *
     * Prevent logout when user agent string changes
     * -------------------------------------------------------------------------- */
    $config->set('concrete.security.session.invalidate_on_user_agent_mismatch', false);

    /* --------------------------------------------------------------------------  *
     * Disable help system and news overlay (because it's annoying)
     * -------------------------------------------------------------------------- */
    $config->set('concrete.accessibility.display_help_system', false);
    $config->set('concrete.external.news', false);
    $config->set('concrete.external.news_overlay', false);

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
