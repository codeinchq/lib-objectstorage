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
// Date:     21/12/2017
// Time:     13:16
// Project:  lib-objectstorage
//
namespace CodeInc\ObjectStorage\Sftp\Exceptions;
use CodeInc\ObjectStorage\Utils\Interfaces\StoreContainerFactoryExceptionInterface;
use Throwable;


/**
 * Class SftpDirectoryFactoryException
 *
 * @package CodeInc\ObjectStorage\Sftp\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class SftpDirectoryFactoryException extends SftpException implements StoreContainerFactoryExceptionInterface {
	/**
	 * @var string
	 */
	private $directoryName;

	/**
	 * SftpContainerFactoryException constructor.
	 *
	 * @param string $containerName
	 * @param Throwable|null $previous
	 */
	public function __construct(string $containerName, Throwable $previous = null) {
		$this->directoryName = $containerName;
		parent::__construct("Factory error for the SFTP container \"$containerName\"", $previous);
	}

	/**
	 * @return string
	 */
	public function getContainerName():string {
		return $this->directoryName;
	}
}