<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
namespace CMS\Test\TestCase\config;

use Cake\I18n\I18n;
use Cake\TestSuite\TestCase;

/**
 * BasicTest class.
 */
class BasicTest extends TestCase
{

    /**
     * test normalizePath() function.
     *
     * @return void
     */
    public function testNormalizePath()
    {
        $tests = [
            '/path/to/filename\with\backslashes.zip' => normalizePath('/path\to/filename\with\backslashes.zip', '/'),
            '/directory' => normalizePath('/directory', '/'),
            '/directory/' => normalizePath('/directory/', '/'),
            '@@directory@@file.pdf' => normalizePath('/directory/file.pdf', '@@'),
        ];

        foreach ($tests as $expected => $actual) {
            $this->assertEquals($expected, $actual);
        }
    }

    /**
     * test packageSplit() function.
     *
     * @return void
     */
    public function testPackageSplit()
    {
        $this->assertEquals(['quickapps-cms', 'test-plugin'], packageSplit('quickapps-cms/test-plugin'));
        $this->assertEquals(['', 'php'], packageSplit('php'));
        $this->assertEquals(['', 'TestPlugin'], packageSplit('test-plugin', true));
        $this->assertEquals(['VendorName', 'TestPlugin'], packageSplit('vendor_name/test-plugin', true));
    }

    /**
     * test array_move() function.
     *
     * @return void
     */
    public function testArrayMove()
    {
        $array = [1, 2, 3, 4 , 5];

        $this->assertEquals([1, 2, 4, 3 , 5], array_move($array, 2, 'up'));
        $this->assertEquals([1, 3, 2, 4 , 5], array_move($array, 2, 'down'));
        $this->assertEquals([1, 2, 3, 4 , 5], array_move($array, 0, 'down'));
        $this->assertEquals([1, 2, 3, 4 , 5], array_move($array, 4, 'up'));
    }

    /**
     * test php_eval() function.
     *
     * @return void
     */
    public function testPhpEval()
    {
        $code1 = '<?php return "testing"; ?>';
        $code2 = '<?php return "testing {$arg}"; ?>';
        $this->assertEquals('testing', php_eval($code1));
        $this->assertEquals('testing dummy', php_eval($code2, ['arg' => 'dummy']));
    }

    /**
     * test get_this_class_methods() function.
     *
     * @return void
     */
    public function testGetThisClassMethods()
    {
        $B = new B();
        $A = new A();
        $this->assertEquals(['bar'], get_this_class_methods($B));
        $this->assertEquals(['foo', 'dummy'], get_this_class_methods($A));
    }

    /**
     * test str_replace_once() function.
     *
     * @return void
     */
    public function testStrReplaceOnce()
    {
        $this->assertEquals('aAABBBCCC', str_replace_once('A', 'a', 'AAABBBCCC'));
        $this->assertEquals('AAABBBCCC', str_replace_once('X', 'x', 'AAABBBCCC'));
    }

    /**
     * test str_replace_last() function.
     *
     * @return void
     */
    public function testStrReplaceLast()
    {
        $this->assertEquals('AAaBBBCCC', str_replace_last('A', 'a', 'AAABBBCCC'));
        $this->assertEquals('AAABBBCCC', str_replace_last('X', 'x', 'AAABBBCCC'));
    }

    /**
     * test str_starts_with() function.
     *
     * @return void
     */
    public function testStrStartsWith()
    {
        $this->assertTrue(str_starts_with('lorem ipsum', 'lo'));
        $this->assertFalse(str_starts_with('lorem ipsum', 'ipsum'));
    }

    /**
     * test str_ends_with() function.
     *
     * @return void
     */
    public function testStrEndsWith()
    {
        $this->assertTrue(str_ends_with('lorem ipsum', 'm'));
        $this->assertFalse(str_ends_with('dolorem sit amet', 'at'));
    }
}

/**
 * Used for testing get_this_class_methods()
 */
class A
{
    public function foo()
    {

    }
    public function dummy()
    {

    }
}

/**
 * Used for testing get_this_class_methods()
 */
class B extends A
{
    public function bar()
    {

    }
}
