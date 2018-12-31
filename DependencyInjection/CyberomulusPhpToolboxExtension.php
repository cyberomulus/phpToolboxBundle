<?php
/*
 * This file is part of the phpToolBoxBundle package.
 *
 * (c) Brack Romain <http://www.cyberomulus.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace cyberomulus\phpToolboxBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;

/**
 * @author	Brack Romain <http://www.cyberomulus.me>
 */
class CyberomulusPhpToolboxExtension extends extension
    {
    public function load(array $configs, ContainerBuilder $container)
        {
        $loader = new XmlFileLoader($container,
                                    new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        }
    }