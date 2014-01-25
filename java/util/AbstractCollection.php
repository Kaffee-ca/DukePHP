<?php
namespace java\util;

/**
 * .
 * @author ahorvath
 */
abstract class AbstractCollection implements Collection {
	public function AbstractCollection() {
		$this->_v = array();
	}
	//public function add($e);
	//public function addAll(Collection $c);
	public final function clear() {
		$this->_v = array();
	}
	//public function contains($o);
	//public function containsAll(Collection $c);
	public final function isEmpty() {
		return count($this->_v) == 0 ? true : false;
	}
	//public function remove($o);
	//public function removeAll(Collection $c);
	public final function size() {
		return count($this->_v);
	}
	/**
	 * Compares objects by their content.
	 * @param Collection $o The object to compare with
	 * @return boolean True if equals false otherwise
	 */
	public function equals(Collection $o) {
		return array_diff($this->_v, $o->toArray()) == null;
	}
	/**
	 * Returns with tha native PHP representation of the Vector.
	 * @return array Values listed into an array with the increasing integer indexes
	 */
	public function toArray() {
		return $this->_v;
	}
}
