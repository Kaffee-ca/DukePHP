<?php

namespace java\util;

/**
 * .
 * @author ahorvath
 */
interface Collection extends Iterable {

	/**
	 * @return boolean
	 */
	function add($o);

	/**
	 * @return boolean
	 */
	function addAll(Collection $c);

	/**
	 * .
	 */
	function clear();

	/**
	 * @return boolean
	 */
	function contains($o);

	/**
	 * @return boolean
	 */
	function containsAll(Collection $c);

	/**
	 * @return boolean
	 */
	function equals(Collection $o);

	/**
	 * @return boolean
	 */
	function isEmpty();

	/**
	 * @return boolean
	 */
	function remove($o);

	/**
	 * @return boolean
	 */
	function removeAll(Collection $c);

	/**
	 * @return boolean
	 */
	function retainAll(Collection $c);

	/**
	 * @return int
	 */
	function size();

	/**
	 * @return array(E)
	 */
	function toArray();
}
