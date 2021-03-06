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

namespace bitExpert\Disco\BenchHelper;

class I
{
    /**
     * @var H
     */
    private $h;

    /**
     * Creates a new {@link \bitExpert\Disco\BenchHelper\I}.
     *
     * @param H $h
     */
    public function __construct(H $h)
    {
        $this->h = $h;
    }
}
