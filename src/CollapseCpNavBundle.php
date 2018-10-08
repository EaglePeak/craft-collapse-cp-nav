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
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * Class CollapseCpNav
 *
 * @author    Claudia Aguilar
 * @package   CollapseCpNav
 * @since     1.0.0
 *
 */
class CollapseCpNavBundle extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@eaglepeak/collapsecpnav/resources";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/CollapseCpNav.js',
        ];

        $this->css = [
            'css/CollapseCpNav.css',
        ];

        parent::init();
    }
}
