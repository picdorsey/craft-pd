<?php
/**
 * Pd plugin for Craft CMS
 *
 * Pd Variable
 *
 * @author    Piccirilli Dorsey, Inc.
 * @copyright Copyright (c) 2016 Piccirilli Dorsey, Inc.
 * @link      http://picdorsey.com
 * @package   Pd
 * @since     1.0.0
 */

namespace Craft;

class PdVariable
{
    /**
     * Checks if a twig template exists
     *
     * @param string $template
     * @return bool fileExists
     */
    public function templateExists($template)
    {
        $fullPath = (new PathService())->templatesPath . $template . '.twig';

        return IOHelper::fileExists($fullPath);
    }

    /**
     * Renders a given front end template
     *
     * @param stinrg $template
     */
    public function renderFrontEndTemplate($template, $vars = [])
    {
        $path = craft()->path->getSiteTemplatesPath();
        craft()->path->setTemplatesPath($path);

        echo craft()->templates->render($template, $vars);
        exit();
    }
}
