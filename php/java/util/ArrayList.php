<?php
namespace java\util;

/**
 * .
 * @author ahorvath
 */
class ArrayList extends AbstractList implements Serializable {
	public function ArrayList($init = null) {
		if ($init == null) {
			return;
		}
		if (\is_array($init)) {
			// TODO: add check for same type
			$this->_v = $init;
			return;
		}
		if (\is_a($init, \get_class($this))) {
			$this->_v = clone $init->_v;
		}
	}
	/**
	 * Returns with a reference to the selected item
	 * @param int $index The index of the element that's needed
	 * @return &<T> Reference to the chosen element
	 */
	public function &elementAt($index) {
		if (is_int($index) && $index >= 0) {
			if ($index < $this->size()) {
				// Returning with the reference to the object
				return $this->_v[$index];
			} else {
				throw new Exception('Index out of range: "' . $index . '"');
			}
		} else {
			throw new Exception('Bad indexing for Vector: "' . $index . '"');
		}
	}
	/**
	 * Appends the specified element to the end of this Vector.
	 * @param E $e Element to be appended to this Vector
	 * @return boolean True.
	 */
	public function add($e) {
		$this->_v[$this->size()] = $e;
		// The collection has changed
		return true;
	}
	public function addAll(Collection $c) {
		$prevSize = $this->size();
		array_merge($this->_v, $c->toArray());

		return $prevSize != $this->size();
	}
	public function contains($o) {
		return in_array($o, $this->_v);
	}
	public function containsAll(Collection $c) {
		foreach ($c->toArray() as $value) {
			if (in_array($value) == false)
				return false;
		}
		return true;
	}
	public function remove($o) {
		// Seek value, then save position if found
		if (($pos = array_search($this->_v, $o)) !== null) {

			// Is it the last element?
			if ($pos < $this->size() - 1) {
				// SO, it's not the last element
				for (; $pos != $this->size() - 1; $pos++) {
					// Shift elements, thus removing the selected
					$this->_v[$pos] = $this->_v[$pos + 1];
				}
			}
			// At this point we need to unset the last element
			unset($this->_v[$pos]);
			return true;
		}
		return false;
	}
	public function removeAll(Collection $c) {
		$sizeBefore = $this->size();
		foreach ($c->toArray() as $val) {
			$this->remove($val);
		}
		return $sizeBefore != $this->size();
	}
	public function toArray2($a) {
		return $a = $this->_v;
	}
	public function iterator() {

	}
	public function retainAll(Collection $c) {

	}
	public function serialize() {
		if ($this->_v) {
			serialize($this->_v);
		}
	}
	public function unserialize($serialized) {
		$this->_v = unserialize($serialized);
	}
}
