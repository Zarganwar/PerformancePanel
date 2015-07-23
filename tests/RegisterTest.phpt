<?php

/**
 * Test: Register.
 *
 * @author Martin Jirásek <jertin@seznam.cz>
 */
namespace RegisterTest;
use Tester;
use Tester\Assert;
use \Zarganwar\PerformancePanel\Register;
require_once __DIR__ . '/bootstrap.php';
/**
 * @author Martin Jirásek <jertin@seznam.cz>
 * @testCase
 */
class RegisterTest extends Tester\TestCase
{
	protected function tearDown() {
		parent::tearDown();
		
	}
	
	public function testAddBreakpointNamed()
	{
		Register::addBreakpoint('A1_-=');
		$names = Register::getNames();
		Assert::equal(array('A1_-=' => 'A1_-='), $names);
	}
	public function testAddBreakpointNamedDuplicity()
	{
		Register::addBreakpoint('A1_-=');
		Register::addBreakpoint('A1_-=');
		$names = Register::getNames();
		Assert::equal(array('A1_-=', 'A1_-=_1'), $names);
	}
	public function testAddBreakpointUnnamed()
	{
		Register::addBreakpoint();
		Register::addBreakpoint();
		$names = Register::getNames();
		Assert::equal(array('BP_1', 'BP_2'), $names);
	}
}
\run(new RegisterTest());