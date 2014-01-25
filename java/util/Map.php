<?php
namespace java\util;

/**
 * .
 * @author ahorvath
 */
interface Map {
	/**
	 * Removes all mappings from this map (optional operation).
	 * @return void
	 */
	function clear();
	/**
	 * Returns true if this map contains a mapping for the specified key.
	 * @return boolean
	 */
	function containsKey($key);
	/**
	 * Returns true if this map maps one or more keys to the specified value.
	 * @return boolean
	 */
	function containsValue($val);
	/**
	 * Returns a set view of the mappings contained in this map.
	 * @return Set
	 */
	function entrySet();
	/**
	 * Compares the specified object with this map for equality.
	 * @return boolean
	 */
	function equals();
	/**
	 * Returns the value to which this map maps the specified key.
	 * @return <Value>
	 */
	function get($key);
	/**
	 * Returns true if this map contains no key-value mappings.
	 * @return boolean
	 */
	function isEmpty();
	/**
	 * Returns a set view of the keys contained in this map.
	 * @return Set
	 */
	function keySet();
	/**
	 * Associates the specified value with the specified key in this map (optional operation).
	 * @return <Value>
	 */
	function put($key, $value);
	/**
	 * Copies all of the mappings from the specified map to this map (optional operation).
	 * @return void
	 */
	function putAll(Map $m);
	/**
	 * Removes the mapping for this key from this map if it is present (optional operation).
	 * @return <Value>
	 */
	function remove($key);
	/**
	 * Returns the number of key-value mappings in this map.
	 * @return int
	 */
	function size();
	/**
	 * Returns with an associative array copy of the map.
	 * @return array
	 */
	function toAssocArray();
	/**
	 * Returns a collection view of the values contained in this map.
	 * @return Collection
	 */
	function values();
}
