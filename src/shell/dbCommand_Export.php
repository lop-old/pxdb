<?php
/*
 * PoiXson pxdb - PHP Database Utilities Library
 * @copyright 2004-2017
 * @license GPL-3
 * @author lorenzo at poixson.com
 * @link http://poixson.com/
 */
namespace pxn\pxdb\shell;


class dbCommand_Export extends dbCommand_Common {

	public $flagImportExport = NULL;



	public function __construct($dry=TRUE) {
		parent::__construct($dry, self::CMD_EXPORT);
	}



}
