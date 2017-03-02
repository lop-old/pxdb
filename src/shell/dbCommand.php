<?php
/*
 * PoiXson pxdb - PHP Database Utilities Library
 * @copyright 2004-2017
 * @license GPL-3
 * @author lorenzo at poixson.com
 * @link http://poixson.com/
 */
namespace pxn\pxdb\shell;

use pxn\phpUtils\System;


abstract class dbCommand {

	protected $dry = NULL;



	public function __construct($dry=TRUE) {
		System::RequireShell();
		$this->dry = ($dry !== FALSE);
	}



	public abstract function execute($pool, $table);



}
