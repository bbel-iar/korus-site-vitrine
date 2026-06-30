<?php

namespace Config;

use CodeIgniter\Config\BaseService;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    /*
     * public static function example($getShared = true)
     * {
     *     if ($getShared) {
     *         return static::getSharedInstance('example');
     *     }
     *
     *     return new \CodeIgniter\Example();
     * }
     */

    public static function twig(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('twig');
        }

        $loader = new FilesystemLoader(APPPATH . 'Views');
        $twig = new Environment($loader, [
            'cache' => WRITEPATH . 'cache/twig',
            'debug' => ENVIRONMENT !== 'production',
            'autoescape' => 'html',
        ]);

        $twig->addGlobal('navLinksHeader', getNavLinkHeader());
        $twig->addGlobal('navLinksFooter', getNavLinkFooter());
        $twig->addFunction(new TwigFunction('base_url', 'base_url'));

        return $twig;
    }
}
