<?php
namespace SoerenKroell\SkPhotobox\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Soeren Kroell <hallo@soerenkroell.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Photobox
 */
class Photobox extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * category
	 *
	 * @var \SoerenKroell\SkPhotobox\Domain\Model\Category
	 */
	protected $category = NULL;

	/**
	 * images
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SoerenKroell\SkPhotobox\Domain\Model\Image>
	 * @cascade remove
	 */
	protected $images = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the category
	 *
	 * @return \SoerenKroell\SkPhotobox\Domain\Model\Category $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 *
	 * @param \SoerenKroell\SkPhotobox\Domain\Model\Category $category
	 * @return void
	 */
	public function setCategory(\SoerenKroell\SkPhotobox\Domain\Model\Category $category) {
		$this->category = $category;
	}

	/**
	 * Adds a Image
	 *
	 * @param \SoerenKroell\SkPhotobox\Domain\Model\Image $image
	 * @return void
	 */
	public function addImage(\SoerenKroell\SkPhotobox\Domain\Model\Image $image) {
		$this->images->attach($image);
	}

	/**
	 * Removes a Image
	 *
	 * @param \SoerenKroell\SkPhotobox\Domain\Model\Image $imageToRemove The Image to be removed
	 * @return void
	 */
	public function removeImage(\SoerenKroell\SkPhotobox\Domain\Model\Image $imageToRemove) {
		$this->images->detach($imageToRemove);
	}

	/**
	 * Returns the images
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SoerenKroell\SkPhotobox\Domain\Model\Image> $images
	 */
	public function getImages() {
		return $this->images;
	}

	/**
	 * Sets the images
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SoerenKroell\SkPhotobox\Domain\Model\Image> $images
	 * @return void
	 */
	public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images) {
		$this->images = $images;
	}

}