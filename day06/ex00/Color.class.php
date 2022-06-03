<?php

class Color {
	public static $verbose = False;
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	function	__construct($rgb_array)
	{
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
		if (self::$verbose)
			print($this . " constructed.\n");
		return ;

	}

	public function	add (Color $rgb_array )
	{
		$new_color = new Color( array(	'red' => $this->red + $rgb_array->red,
										'green' => $this->green + $rgb_array->green,
										'blue' => $this->blue + $rgb_array->blue));
		return ($new_color);
	}
	
	function	sub($rgb_array)
	{
		$new_color = new Color( array(	'red' => $this->red - $rgb_array->red,
										'green' => $this->green - $rgb_array->green,
										'blue' => $this->blue - $rgb_array->blue));
		return ($new_color);
	}
	
	function	mult($number)
	{
		$new_color = new Color( array(	'red' => $this->red * $number,
										'green' => $this->green * $number,
										'blue' => $this->blue * $number));
		return ($new_color);

	}
	
	function	__toString()
	{
		return 'Color( red: ' . $this->red . ' ,green: ' . $this->green . ' ,blue: ' . $this->blue . ')';
	}

	static function	doc()
	{
		return (file_get_contents("Color.doc.txt"));
	}
	
	function	__destruct()
	{
		if (self::$verbose)
			print($this . " destructed.\n");
		return ;
	}
}
?>