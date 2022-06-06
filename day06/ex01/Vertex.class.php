<?php

require_once "Color.class.php";
class Vertex{
	public static $verbose = False;
	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 1.0;
	private $_color;

	function	__construct($array)
	{
		$this->_x = $array['x'];
		$this->_y = $array['y'];
		$this->_z = $array['z'];
		if ($array['w'])
			$this->_w = $array['w'];
		if (!array_key_exists(color, $array))
			$this->_color = new Color( array('red' => 255, 'green' => 255, 'blue' => 255));
		else
			$this->_color = $array['color'];
		// print_r(get_object_vars($this));
			/*
			if (array_key_exists(red, $rgb_array))
			$this->red = $rgb_array['red'];
			if (array_key_exists(green, $rgb_array))
			$this->green = $rgb_array['green'];
			if (array_key_exists(blue, $rgb_array))
			$this->blue = $rgb_array['blue'];
			if (array_key_exists(rgb, $rgb_array))
			{
				$this->red = ($rgb_array['rgb'] & 16711680) >> 16;
				$this->green = ($rgb_array['rgb'] & 65280) >> 8;
				$this->blue = ($rgb_array['rgb'] & 255);
			}
			*/
		if (self::$verbose)
			print($this . "constructed\n");
		return ;

	}
	
	function	__toString()
	{
		if (self::$verbose)
		{
			$str = sprintf(	"Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f, ", $this->_x, $this->_y, $this->_z, $this->_w);
			// $str .= sprintf(", ");
			$str .= sprintf($this->_color) . " ) ";
		}
		else
			$str = sprintf(	"Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f )", $this->_x, $this->_y, $this->_z, $this->_w);

		// if ($this->_color)
		return ($str);
	}

	static function	doc()
	{
		return (file_get_contents("Vertex.doc.txt"));
	}
	
	function	__destruct()
	{
		if (self::$verbose)
			print($this . "destructed\n");
		return ;
	}
}
?>