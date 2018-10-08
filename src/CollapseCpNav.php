<?php
/**
 * Collapse CP Nav plugin for Craft CMS 3.x
 *
 * Take control of the left pane navigation in the control panel.  Hide it if you need more space when working with entries that are displaying lots of info in the listings table.
 *
 * @link      https://www.eaglepeakweb.com/team/claudia-aguilar
 * @copyright Copyright (c) 2018 Claudia Aguilar
 */

namespace eaglepeak\collapsecpnav;


use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class CollapseCpNav
 *
 * @author    Claudia Aguilar
 * @package   CollapseCpNav
 * @since     1.0.0
 *
 */
class CollapseCpNav extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var CollapseCpNav
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        $user = Craft::$app->getUser();
        $request = Craft::$app->getRequest();
        $view = Craft::$app->getView();

        Craft::info(
            Craft::t(
                'collapse-cp-nav',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );



        if (!$user || !$user->id || !$request->getIsCpRequest() || $request->getIsConsoleRequest()) {
            return;
        }

        
        if ( $view->getTemplateMode() === 'cp' ){
          // the includeJs method lets us add js to the bottom of the page
          $view->registerAssetBundle(CollapseCpNavBundle::class);
        }
    }

    // Protected Methods
    // =========================================================================

}
