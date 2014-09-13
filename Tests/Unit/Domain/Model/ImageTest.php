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
 * Test case for class \SoerenKroell\SkPhotobox\Domain\Model\Image.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Soeren Kroell <hallo@soerenkroell.com>
 */
class ImageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SoerenKroell\SkPhotobox\Domain\Model\Image
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SoerenKroell\SkPhotobox\Domain\Model\Image();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getThumbImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getThumbImage()
		);
	}

	/**
	 * @test
	 */
	public function setThumbImageForFileReferenceSetsThumbImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setThumbImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'thumbImage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBigImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getBigImage()
		);
	}

	/**
	 * @test
	 */
	public function setBigImageForFileReferenceSetsBigImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setBigImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'bigImage',
			$this->subject
		);
	}
}
