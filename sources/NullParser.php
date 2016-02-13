<?php
/*
 * This file is part of the nia framework architecture.
 *
 * (c) Patrick Ullmann <patrick.ullmann@nat-software.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types = 1);
namespace Nia\Parsing;

/**
 * Null object parser parses nothing and just returns the passed value.
 */
class NullParser implements ParserInterface
{

    /**
     *
     * {@inheritDoc}
     *
     * @see \Nia\Parsing\ParserInterface::parse($value)
     */
    public function parse(string $value): string
    {
        return $value;
    }
}
