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
 * Interface for value parser implementations.
 */
interface ParserInterface
{

    /**
     * Parses a specific value from the given value.
     *
     * @param string $value
     *            The value to parse.
     * @return string The parsed value.
     */
    public function parse(string $value): string;
}
