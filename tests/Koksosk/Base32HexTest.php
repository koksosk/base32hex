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
        $str = Base32Hex::encode("Hello");
        $this->assertSame("91IMOR3F", $str);
    }

    /**
     * @covers Koksosk\Base32Hex::decode
     */
    public function testDecode()
    {
        $str = Base32Hex::decode("91IMOR3F");
        $this->assertSame("Hello", $str);
    }

    /**
     * @covers Koksosk\Base32Hex::stringToBinary
     */
    public function testStringToBinary()
    {
        $str = Base32Hex::stringToBinary("Hello");
        $this->assertSame("0100100001100101011011000110110001101111", $str);
    }

    /**
     * @covers Koksosk\Base32Hex::binaryToString
     */
    public function testBinaryToString()
    {
        $str = Base32Hex::binaryToString("0100100001100101011011000110110001101111");
        $this->assertSame("Hello", $str);
    }
}
