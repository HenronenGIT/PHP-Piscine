<?php

// require_once "Vertex.class.php";

class Matrix {
	const IDENTITY = "IDENTITY";
	const SCALE = "";
	const RX = "";
	const RY = "";
	const RZ = "";
	const TRANSLATION = "";
	const PROJECTION = "";

	public static $verbose = False;
	private $_preset;


	function	__construct($array) {
		if (array_key_exists('preset', $array))
			$this->_preset = $array['preset'];
		if (self::$verbose)
		{
			if ($this->_preset == self::IDENTITY)
				print("Matrix " . $this->_preset . " instance constructed\n");
		}
		return ;
	}
	
	function	__toString() {
		if (self::$verbose)
		{
			$str = sprintf(	"M | vtcX | vtcY | vtcZ | vtxO\n");
			$str .= sprintf("-----------------------------\n");
			$str .= sprintf("x |  |  |  |\n");
			$str .= sprintf("y |  |  |  |\n");
			$str .= sprintf("z |  |  |  |\n");
			$str .= sprintf("w |  |  |  |\n");
		}
		return ($str);
	}

	static	function	doc() {
		return (file_get_contents("Matrix.doc.txt"));
	}
	
	function	__destruct() {
		if (self::$verbose)
			print($this . " destructed\n");
		return ;
	}

}
?>