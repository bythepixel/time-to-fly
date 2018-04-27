<?php namespace App\Twig;

use Twig_Extension;
use Twig_SimpleFunction;

/**
 * Access Laravels auth class in your Twig templates.
 */
class Env extends Twig_Extension
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'TwigBridge_Extension_Env';
    }

    /**
     * {@inheritDoc}
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('env', 'getenv'),
        ];
    }
}
