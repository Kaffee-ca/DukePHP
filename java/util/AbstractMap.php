<?php
namespace java\util;

/**
 * .
 * @author ahorvath
 */
abstract class AbstractMap implements Map {
	protected $_v = array();
	public function clear() {
		$this->_v = array();
	}
	public function isEmpty() {
		// Determined by element number
		return count($this->_v) == 0;
	}
	public function size() {
		return count($this->_v);
	}
}
