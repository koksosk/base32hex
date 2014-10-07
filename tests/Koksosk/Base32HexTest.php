<?php
namespace KoksoskTest;

use Koksosk\Base32Hex;

class Base32HexTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers Koksosk\Base32Hex::encode
     */
    public function testEncode()
    {
        $s = Base32Hex::encode("Hello");
        $this->assertSame('91IMOR3F', $s);
    }

    /**
     * @covers Koksosk\Base32Hex::decode
     */
    public function testDecode()
    {
        $s = Base32Hex::decode("91IMOR3F");
        $this->assertSame('Hello', $s);
    }
}
