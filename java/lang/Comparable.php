<?php

namespace java\lang;

/**
 * Imposes a total ordering on the objects which implement it.
 * @author ahorvath
 */
interface Comparable {

	/**
	 * Compares this with the specified object for order.
	 * @param $o mixed The object compared.
	 * @return int a negative, zero, or a positive as object is less than, equal to, or greater.
	 */
	function compareTo($o);
}
