<?php
/**
 * Pd plugin for Craft CMS
 *
 * Piccirilli Dorsey business logic.
 *
 * @author    Piccirilli Dorsey, Inc.
 * @copyright Copyright (c) 2016 Piccirilli Dorsey, Inc.
 * @link      http://picdorsey.com
 * @package   Pd
 * @since     1.0.1
 */

namespace Craft;

class PDPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('PD');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Piccirilli Dorsey business logic.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/picdorsey/craft-pd/blob/master/readme.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/picdorsey/craft-pd/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.1';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Piccirilli Dorsey, Inc.';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://picdorsey.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.pd.twigextensions.PDTwigExtension');

        return new PDTwigExtension();
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}
