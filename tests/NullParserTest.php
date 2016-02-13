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
namespace Test\Nia\Parsing;

use PHPUnit_Framework_TestCase;
use Nia\Parsing\NullParser;

/**
 * Unit test for \Nia\Parsing\NullParser.
 */
class NullParserTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Nia\Parsing\NullParser::parse
     *
     * @dataProvider parseProvider
     */
    public function testParse($value, $expected)
    {
        $parser = new NullParser($value);

        $this->assertSame($expected, $parser->parse($value));
    }

    public function parseProvider()
    {
        $content = <<<EOL
123456789.99;123456789.99
foo bar;foo bar
/tmp/bla;/tmp/bla
  with - spaces;  with - spaces
EOL;

        // convert CSV to result set
        $result = [];
        foreach (explode("\n", $content) as $line) {
            $result[] = explode(';', $line);
        }

        return $result;
    }
}
