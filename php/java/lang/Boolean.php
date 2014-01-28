<?php
namespace java\lang;

/**
 * Wraps a boolean value in a class.
 * @author ahorvath
 * @final
 */
final class Boolean extends Object implements Serializable, Comparable {
	/**
	 * .
	 * @param boolean|string the value of the Boolean.
	 */
	public function Boolean($b = false) {
		if ($b === true | strtolower($b) === \PhpPrimitives::$TRUE) {
			$this->_v = true;
		} else if (is_object($b) && is_a($b, self)) {
			$this->_v = $b->_v;
		} else {
			$this->_v = false;
		}
	}
	/**
	 * .
	 * @var boolean
	 */
	public static $TRUE = true;
	/**
	 * .
	 * @var boolean
	 */
	public static $FALSE = false;
	/**
	 * Value of this object as a boolean.
	 * @return boolean
	 */
	public function booleanValue() {
		return $this->_v;
	}
	/**
	 * Duck support
	 * @return int
	 */
	public function compareTo($v) {
		if ($this->_v == true) {
			return ($v->booleanValue() == true) ? 0 : 1;
		}
		return ($v->booleanValue() == true) ? -1 : 0;
	}
	/**
	 * .
	 * @param String $str The string to seek in.
	 * @return boolean
	 */
	public static function getBoolean($str) {
		return parseBoolean($str);
	}
	/**
	 * .
	 * @param String $str The string to seek in.
	 * @return boolean
	 */
	public static function parseBoolean($v) {
		switch (gettype($v)) {
			case \PhpPrimitives::$INTEGER:
			case \PhpPrimitives::$FLOAT:
				return $v == 0 ? false : true;
			case \PhpPrimitives::$OBJECT:
				if (method_exists($v, 'booleanValue')) {
					return $v->booleanValue();
				} else {
					throw new ParseException();
				}
			case \PhpPrimitives::$BOOLEAN:
				return $v;
			default:
				throw new ParseException();
		}
	}
	/**
	 * .
	 * @return string
	 */
	public function __toString() {
		return ($this->_v == true) ? \PhpPrimitives::$TRUE : \PhpPrimitives::$FALSE;
	}
	/**
	 * .
	 * @param boolean $b the boolean to be converted
	 * @return string the string representation of the specified boolean
	 */
	public static function toString($b) {
		if (gettype($b) == \PhpPrimitives::$BOOLEAN) {
			return ($b == true) ? \PhpPrimitives::$TRUE : \PhpPrimitives::$FALSE;
		} else {
			throw new BadMethodCallException('Param $b must be boolean typed.');
		}
	}
	/**
	 * .
	 * @param boolean|string $v
	 * @return Boolean
	 */
	public static function valueOf($v) {
		if (gettype($v) == \PhpPrimitives::$BOOLEAN)
			return new Boolean($v);
		if (gettype($v) == \PhpPrimitives::$STRING)
			return new Boolean(lowercase($v) == \PhpPrimitives::$TRUE);
		// Not so good
		throw new BadMethodCallException('Check method parameters.');
	}
	public function serialize() {
		if ($this->_v == true) {
			return 1;
		}
		return 0;
	}
	public function unserialize($serialized) {
		$this->_v = $serialized === 1;
	}
}
