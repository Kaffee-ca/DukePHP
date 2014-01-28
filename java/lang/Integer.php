<?php
namespace java\lang;

/**
 * Wrapper class to represent integer values.
 * @author ahorvath
 */
final class Integer extends Number implements Comparable {
	public static $MAX_VALUE = 2147483647;
	public static $MIN_VALUE = -2147483648;
	public static $SIZE = 4;
	/**
	 *
	 * @param int $v
	 */
	public function Integer($v) {
		if (is_string($v)) {
			// Turning into int, so next if will catch it
			$v = intval($v);
		}
		if (is_int($v) && $v >= self::$MIN_VALUE && $v <= self::$MAX_VALUE) {
			$this->_v = $v;
		} else {
			$this->_v = 0;
			throw new BadMethodCallException('Bad parameter type or range.');
		}
	}
	/**
	 * .
	 * @return int
	 */
	public function intValue() {
		return $this->_v;
	}
	/**
	 * @return string
	 */
	public static function toString($v) {
		if (is_int($v)) {
			return '' . $v;
		}
		throw new BadMethodCallException('Not an integer.');
	}
	/**
	 *
	 * @return string
	 */
	public function __toString() {
		return '' . $this->_v;
	}
	public function compareTo($value) {
		if (get_class($v) == get_class($this)) {
			if ($value->_v > $this->_v) {
				return 1;
			} else if ($value->_v < $this->_v) {
				return -1;
			}
			// Least likely to happen
			return 0;
		}
	}
	public function serialize() {
		return false;
	}
	public function unserialize($serialized) {
		return false;
	}
	/**
	 *
	 * @param mixed $val Value to parse in.
	 * @return int Parsed value.
	 */
	public static function parseInteger($val) {
		switch (gettype($val)) {
			case 'string':
			case 'double':
			case 'float':
				return intval($val);
			case 'object':
				if (is_a($val, get_class($this))) {
					return $val->_v;
				}
			default:
				throw new BadMethodCallException();
		}
	}
	public function doubleValue() {
		return doubleval($this->_v);
	}
	public function floatValue() {
		return floatval($this->_v);
	}
	public function longValue() {
		return $this->_v;
	}
	public function shortValue() {
		return $this->_v & 0xffff;
	}
	public function byteValue() {
		return $this->_v & 0xff;
	}
}
