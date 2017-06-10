<?php

/*
 * This file is part of the Disco package.
 *
 * (c) bitExpert AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace bitExpert\Disco\Config;

use bitExpert\Disco\Annotations\Bean;
use bitExpert\Disco\Annotations\Alias;
use bitExpert\Disco\Annotations\Configuration;

/**
 * @Configuration
 */
class BeanConfigurationWithNativeTypeAlias
{
    /**
     * @Bean({
     *   "aliases"={
     *     @Alias({"type"=true})
     *   }
     * })
     * @return array
     */
    public function arrayServiceWithNotAllowedTypeAlias(): array
    {
        return [];
    }
}
