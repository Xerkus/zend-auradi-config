<?php
/**
 * @see       https://github.com/zendframework/zend-auradi-config for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-auradi-config/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace ZendTest\AuraDi\Config\TestAsset;

use Psr\Container\ContainerInterface;

class Factory
{
    public function __invoke(ContainerInterface $container)
    {
        return new Service();
    }
}
