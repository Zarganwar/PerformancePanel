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
		Register::add('A1');
		Register::add('A1');
		Register::add();
		Register::add();
		Register::add('PARENT');
		Register::add('CHILD', 'PARENT');
		Register::add('NEXT');
		
		Assert::equal(array('A1', 'A1_2', 'BP_3', 'BP_4', 'PARENT', 'CHILD', 'NEXT'), Register::getNames());
		Assert::equal('PARENT', Register::getParent('CHILD'));
		Assert::equal(null, Register::getParent('NEXT'));
	}

}
\run(new RegisterTest());