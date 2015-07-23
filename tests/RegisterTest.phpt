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

		Assert::equal(array('A1' => 'A1', 'A1_2' => 'A1_2', 'BP_3' => 'BP_3', 'BP_4' => 'BP_4'), Register::getNames());
	}

}
\run(new RegisterTest());