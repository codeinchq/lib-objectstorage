<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     19/12/2017
// Time:     22:23
// Project:  ObjectStorage
//
namespace CodeInc\ObjectStorage\Local\Exceptions;
use CodeInc\ObjectStorage\Interfaces\StoreObjectExceptionInterface;
use CodeInc\ObjectStorage\Interfaces\StoreObjectInterface;
use CodeInc\ObjectStorage\Local\LocalFile;
use Throwable;


/**
 * Class LocalObjectException
 *
 * @package CodeInc\ObjectStorage\Local\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class LocalObjectException extends LocalStorageException implements StoreObjectExceptionInterface {
	/**
	 * @var LocalFile
	 */
	private $object;

	/**
	 * LocalObjectException constructor.
	 *
	 * @param LocalFile $object
	 * @param string $message
	 * @param Throwable|null $previous
	 */
	public function __construct(LocalFile $object, string $message, Throwable $previous = null) {
		$this->object = $object;
		parent::__construct($message, $previous);
	}

	/**
	 * @return LocalFile
	 */
	public function getObject():StoreObjectInterface {
		return $this->object;
	}
}