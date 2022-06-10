<?php

require_once "Color.class.php";

class Vertex{
	public static $verbose = False;
	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 1.0;
	private $_color;

	function	__construct($array) {
		$this->_x = $array['x'];
		$this->_y = $array['y'];
		$this->_z = $array['z'];
		if ($array['w'])
		$this->_w = $array['w'];
		if (!array_key_exists(color, $array))
		$this->_color = new Color( array('red' => 255, 'green' => 255, 'blue' => 255));
		else
		$this->_color = $array['color'];
		if (self::$verbose)
			print($this . " constructed\n");
		return ;
	}
	
	function	__toString() {
		if (self::$verbose)
		{
			$str = sprintf(	"Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f, ", $this->_x, $this->_y, $this->_z, $this->_w);
			$str .= sprintf($this->_color) . " )";
		}
		else
			$str = sprintf(	"Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		return ($str);
	}

	static function	doc() {
		return (file_get_contents("Vertex.doc.txt"));
	}
	
	function	__destruct() {
		if (self::$verbose)
			print($this . " destructed\n");
		return ;
	}

	public function getX() { return (($this->_x));}
	public function getY() { return ($this->_y);}
	public function getZ() { return ($this->_z);}
	public function getW() { return ($this->_w);}
	public function getColor() { return ($this->_color);}
	public function setX($x) { $this->_x = $x;}
	public function setY($y) { $this->_y = $y;}
	public function setZ($z) { $this->_z = $z;}
	public function setW($w) { $this->_w = $w;}
	public function setColor($color) { $this->_color = $color;}
}
?>