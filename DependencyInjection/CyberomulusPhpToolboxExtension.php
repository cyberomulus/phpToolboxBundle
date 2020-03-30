<?php
/*
 * This file is part of the phpToolBoxBundle package.
 *
 * (c) Brack Romain <cyberomulus.me@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cyberomulus\PhpToolboxBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;

/**
 * @author	Brack Romain <cyberomulus.me@gmail.com>
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