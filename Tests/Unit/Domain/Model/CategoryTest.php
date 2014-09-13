<?php

namespace SoerenKroell\SkPhotobox\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Soeren Kroell <hallo@soerenkroell.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \SoerenKroell\SkPhotobox\Domain\Model\Category.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Soeren Kroell <hallo@soerenkroell.com>
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SoerenKroell\SkPhotobox\Domain\Model\Category
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SoerenKroell\SkPhotobox\Domain\Model\Category();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getPhotoboxReturnsInitialValueForPhotobox() {
		$this->assertEquals(
			NULL,
			$this->subject->getPhotobox()
		);
	}

	/**
	 * @test
	 */
	public function setPhotoboxForPhotoboxSetsPhotobox() {
		$photoboxFixture = new \SoerenKroell\SkPhotobox\Domain\Model\Photobox();
		$this->subject->setPhotobox($photoboxFixture);

		$this->assertAttributeEquals(
			$photoboxFixture,
			'photobox',
			$this->subject
		);
	}
}
