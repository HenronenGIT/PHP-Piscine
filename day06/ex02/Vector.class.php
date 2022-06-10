<?php

require_once "Vertex.class.php";

class Vector {
	public static $verbose = False;
	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 0.0;
	private $_coordinate;

	function	__construct($array) {
		if (array_key_exists(orig, $array))
			$origVertex = $array['orig'];
		else
			$origVertex = new Vertex( array ( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0 ));
		$this->_x = $array['dest']->getX() - $origVertex->getX();
		$this->_y = $array['dest']->getY() - $origVertex->getY();
		$this->_z = $array['dest']->getZ() - $origVertex->getZ();
		if (self::$verbose)
			print($this . " constructed\n");
		return ;
	}
	
	function	__toString() {
		if (self::$verbose)
		{
			$str = sprintf(	"Vector( x:%3.2f, y:%3.2f, z:%3.2f, w:%3.2f", $this->_x, $this->_y, $this->_z, $this->_w);
			$str .= sprintf($this->_coordinate) . " )";
		}
		else
			$str = sprintf(	"Vector( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		return ($str);
	}

	static	function	doc() {
		return (file_get_contents("Vector.doc.txt"));
	}
	
	function	__destruct() {
		if (self::$verbose)
			print($this . " destructed\n");
		return ;
	}

	public	function magnitude() {
		return ((float)sqrt(pow($this->_x, 2) + pow($this->_y, 2) + pow($this->_z, 2)));
	}

	public	function normalize() {
		$normedVec = new Vertex(array(	'x' => $this->getX() / $this->magnitude(),
										'y' => $this->getY() / $this->magnitude(),
										'z' => $this->getZ() / $this->magnitude()));
		return (new Vector( array('dest' => $normedVec)));
	}

	public	function add(Vector $rhs) {
		$summedVectors = new Vertex( array(	'x' => $this->getX() + $rhs->getX(),
											'y' => $this->getY() + $rhs->getY(),
											'z' => $this->getZ() + $rhs->getZ()));
		return (new Vector( array('dest' => $summedVectors)));
	}

	public	function sub(Vector $rhs) {
		$diffVectors = new Vertex(array('x' => $this->getX() - $rhs->getX(),
										'y' => $this->getY() - $rhs->getY(),
										'z' => $this->getZ() - $rhs->getZ()));
		return (new Vector( array('dest' => $diffVectors)));
	}

	public	function opposite() {
		$oppVector = new Vertex( array(	'x' => ($this->getX() * -1),
										'y' => ($this->getY() * -1),
										'z' => ($this->getZ() * -1)));
		return (new Vector( array('dest' => $oppVector)));
	}

	public	function scalarProduct($k) {
		$scaledVector = new Vertex( array(	'x' => ($this->getX() * $k),
											'y' => ($this->getY() * $k),
											'z' => ($this->getZ() * $k)));
		return (new Vector( array('dest' => $scaledVector)));
	}

	public	function dotProduct(Vector $rhs) {
		return((float)$this->getX() * $rhs->getX()
		+ $this->getY() * $rhs->getY()
		+ $this->getZ() * $rhs->getZ());
	}

	public	function crossProduct(Vector $rhs) {
		$result = new Vertex( array('x' => $this->getY() * $rhs->getZ() - $this->getZ() * $rhs->getY(),
									'y' => $this->getZ() * $rhs->getX() - $this->getX() * $rhs->getZ(),
									'z' => $this->getX() * $rhs->getY() - $this->getY() * $rhs->getX()));
		return(new Vector( array('dest' => $result)));
	}

	public	function cos(Vector $rhs) {
		$angle = $this->dotProduct($rhs) / ($this->magnitude() * $rhs->magnitude());
		return($angle);
	}

	public function getX() { return ($this->_x);}
	public function getY() { return ($this->_y);}
	public function getZ() { return ($this->_z);}
	public function getW() { return ($this->_w);}
}
?>