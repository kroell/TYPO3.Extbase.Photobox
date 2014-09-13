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
 * Image
 */
class Image extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * thumbImage
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $thumbImage = NULL;

	/**
	 * bigImage
	 *
	 * @var string
	 */
	protected $bigImage = '';

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * photobox
	 *
	 * @var \SoerenKroell\SkPhotobox\Domain\Model\Photobox
	 */
	protected $photobox = NULL;

	/**
	 * Returns the thumbImage
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbImage
	 */
	public function getThumbImage() {
		return $this->thumbImage;
	}

	/**
	 * Sets the thumbImage
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbImage
	 * @return void
	 */
	public function setThumbImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbImage) {
		$this->thumbImage = $thumbImage;
	}

	/**
	 * Returns the bigImage
	 *
	 * @return string $bigImage
	 */
	public function getBigImage() {
		return $this->bigImage;
	}

	/**
	 * Sets the bigImage
	 *
	 * @param string $bigImage
	 * @return void
	 */
	public function setBigImage($bigImage) {
		$this->bigImage = $bigImage;
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
	 * Returns the photobox
	 *
	 * @return \SoerenKroell\SkPhotobox\Domain\Model\Photobox $photobox
	 */
	public function getPhotobox() {
		return $this->photobox;
	}

	/**
	 * Sets the photobox
	 *
	 * @param \SoerenKroell\SkPhotobox\Domain\Model\Photobox $photobox
	 * @return void
	 */
	public function setPhotobox(\SoerenKroell\SkPhotobox\Domain\Model\Photobox $photobox) {
		$this->photobox = $photobox;
	}

}