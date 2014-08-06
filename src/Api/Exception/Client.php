<?php

namespace Netatmo\API\PHP\Api\Exception;

/**
 * OAuth2.0 Netatmo exception handling
 *
 * @author Originally written by Thomas Rosenblatt <thomas.rosenblatt@netatmo.com>.
 */
class NAClientException extends Exception
{
	public $error_type;
	/**
	* Make a new API Exception with the given result.
	*
	* @param $result
	*   The result from the API server.
	*/
	public function __construct($code, $message, $error_type)
	{
		$this->error_type = $error_type;
		parent::__construct($message, $code);
	}
}
