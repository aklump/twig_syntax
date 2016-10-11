<?php
namespace AKlump\TwigSyntax;

/**
 * Class TwigSyntaxTest
 * @package AKlump\TwigSyntax
 */
class TwigSyntaxTest extends \PHPUnit_Framework_TestCase
{
    public function testAssertSetMergeFilledArrayWorks()
    {
        $twig = $this->obj;

        $classes = array('do', 're');
        $twig->set(array(
            'mi',
            'fa',
            'so',
        ))->merge($classes);

        $this->assertSame(array ('mi', 'fa', 'so', 'do', 're'), $classes);
    }
    public function testAssertSetMergeDefaultArrayWorks()
    {
        $twig = $this->obj;

        $classes = array();
        $twig->set(array(
            'mi',
            'fa',
            'so',
        ))->merge($classes);

        $this->assertSame(array ('mi', 'fa', 'so'), $classes);
    }

    public function setUp()
    {
        $this->obj = new TwigSyntax;
    }
}
