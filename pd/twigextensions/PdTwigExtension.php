<?php
/**
 * Pd plugin for Craft CMS
 *
 * Pd Twig Extension
 *
 * @author    Piccirilli Dorsey, Inc.
 * @copyright Copyright (c) 2016 Piccirilli Dorsey, Inc.
 * @link      http://picdorsey.com
 * @package   Pd
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class PdTwigExtension extends \Twig_Extension
{
    /**
     * @return string The extension name
     */
    public function getName()
    {
        return 'Pd';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return [

        ];
    }

    /**
    * @return array
     */
    public function getFunctions()
    {
        return [

        ];
    }
}