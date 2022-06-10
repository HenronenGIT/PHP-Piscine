<?php

require_once "Vertex.class.php";
class Vector {
	public static $verbose = False;
	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 0.0;
	private $_coordinate;

	function	__construct($array)
	{
		if (array_key_exists(orig, $array))
			$origVertex = $array['orig'];
		else
			$origVertex = new Vertex( array ( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0 ));
		$this->_x = $array['dest']->getX();
		$this->_y = $array['dest']->getY();
		$this->_z = $array['dest']->getZ();
		if (self::$verbose)
			print($this . " constructed\n");
		return ;
	}
	
	function	__toString()
	{
		if (self::$verbose)
		{
			$str = sprintf(	"Vector( x:%3.2f, y:%3.2f, z:%3.2f, w:%3.2f", $this->_x, $this->_y, $this->_z, $this->_w);
			$str .= sprintf($this->_coordinate) . " )";
		}
		else
			$str = sprintf(	"Vector( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		return ($str);
	}

	static function	doc()
	{
		return (file_get_contents("Vector.doc.txt"));
	}
	
	function	__destruct()
	{
		if (self::$verbose)
			print($this . " destructed\n");
		return ;
	}
	public function magnitude()
	{
		
	}
	public function getX() { return ($this->_x);}
	public function getY() { return ($this->_y);}
	public function getZ() { return ($this->_z);}
}
?>