<?php
namespace java\lang;

use java\lang\Object;

/**
 * The abstract class Number is the superclass of classes BigDecimal, BigInteger, Byte, Double, Float, Integer, Long, and Short.
 * Subclasses of Number must provide methods to convert the represented numeric value to byte, double, float, int, long, and short.
 * @author ahorvath
 */
abstract class Number extends Object implements Serializable {
	/**
	 * @return int .
	 */
	public abstract function byteValue();
	/**
	 * Returns the value of the specified number as a double.
	 * @return float .
	 */
	public abstract function doubleValue();
	/**
	 * Returns the value of the specified number as a float.
	 * @return float .
	 */
	public abstract function floatValue();
	/**
	 * Returns the value of the specified number as an int.
	 * @return int .
	 */
	public abstract function intValue();
	/**
	 * Returns the value of the specified number as a long.
	 * @return int .
	 */
	public abstract function longValue();
	/**
	 * Returns the value of the specified number as a short.
	 * @return int .
	 */
	public abstract function shortValue();
}
