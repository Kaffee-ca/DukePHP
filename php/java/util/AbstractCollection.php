<?php
namespace java\util;

use java\lang\Object;

/**
 * .
 * @author ahorvath
 */
abstract class AbstractCollection extends Object implements Collection {
	public function AbstractCollection() {
		$this->_v = array();
	}
	public final function clear() {
		$this->_v = array();
	}
	public final function isEmpty() {
		return count($this->_v) == 0;
	}
	public final function size() {
		return count($this->_v);
	}
	public function equals(Collection $o) {
		return array_diff($this->_v, $o->toArray()) == null;
	}
	/**
	 * Returns with tha native PHP representation of the Collection.
	 * @return array Values listed into an array with the increasing integer indexes
	 */
	public function toArray() {
		return $this->_v;
	}
}
