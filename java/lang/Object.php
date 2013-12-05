<?php

namespace java\lang;

/**
 * .
 * @author ahorvath
 */
abstract class Object {

	/**
	 * Returns with a copy of this object.
	 * @return Object a clone of this instance.
	 */
	protected function __clone() {
		throw new CloneNotSupportedExcetion();
	}

	/**
	 * String that "textually represents" this object.
	 * @return string Representation of the object.
	 */
	public function __toString() {
		throw new NotImplementedException();
	}

	/**
	 * Indicates whether some other object is "equal to" this one.
	 * @param Object $obj the object to compare with.
	 * @return boolean True if object is the same as the argument; false otherwise.
	 */
	public function equals($obj) {
		throw new NotImplementedException();
	}

	/**
	 * Hash code value for the object.
	 * @return int Hash code value for this object.
	 */
	public function hashCode() {
		return hash('crc32', $this->__toString(), true);
	}

}
