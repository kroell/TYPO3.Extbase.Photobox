<?php
namespace SoerenKroell\SkPhotobox\Tests\Unit\Controller;
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
 * Test case for class SoerenKroell\SkPhotobox\Controller\PhotoboxController.
 *
 * @author Soeren Kroell <hallo@soerenkroell.com>
 */
class PhotoboxControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \SoerenKroell\SkPhotobox\Controller\PhotoboxController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('SoerenKroell\\SkPhotobox\\Controller\\PhotoboxController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllPhotoboxesFromRepositoryAndAssignsThemToView() {

		$allPhotoboxes = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$photoboxRepository = $this->getMock('SoerenKroell\\SkPhotobox\\Domain\\Repository\\PhotoboxRepository', array('findAll'), array(), '', FALSE);
		$photoboxRepository->expects($this->once())->method('findAll')->will($this->returnValue($allPhotoboxes));
		$this->inject($this->subject, 'photoboxRepository', $photoboxRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('photoboxes', $allPhotoboxes);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenPhotoboxToView() {
		$photobox = new \SoerenKroell\SkPhotobox\Domain\Model\Photobox();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('photobox', $photobox);

		$this->subject->showAction($photobox);
	}
}