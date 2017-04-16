<?php

/*
 * IJVo
 */

namespace Tests\App\Presenters;

use Nette;
use App\IJVoKal\BaseCalendar;

require __DIR__ . '/../bootstrap.php';

/**
 * TEST: HomepagePresenter
 * 
 * @testCase
 *
 */
class HomepagePresenterTest extends \Tester\TestCase
{

	use \Testbench\TCompiledContainer;
	use \Testbench\TPresenter;


	public function setUp()
	{
	}

	public function testRenderDefault()
	{
		$this->checkAction('Homepage:default');
	}


	public function tearDown()
	{
	}

}

(new HomepagePresenterTest())->run();
