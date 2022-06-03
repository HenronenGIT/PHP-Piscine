<?php

class Color {
	static $verbose = False;
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	function	__construct($rgb_array)
	{
		
		// print_r(get_object_vars($this));
		//var_dump($rgb_array);
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
		// print_r(get_object_vars($this));
		// if (self::$verbose)
		// print($this . " constructed\n");

		// print(" constructed\n");
	}

	public function	add (Color $rgb_array )
	{
		$new_color = new Color( array(	'red' => $this->red + $rgb_array->red,
										'green' => $this->green + $rgb_array->green,
										'blue' => $this->blue + $rgb_array->blue));
		return ($new_color);

	}
	
	function	sub()
	{
		// The Class must have a method called sub that allows you to
		// subtract the components of another instance from the components
		// of the current instance. The resulting color is a new instance.
	}
	
	function	mult()
	{
		// The Class must propose a method called mult that allows you to
		// multiply the components of the current instance with the
		// components of of another instance argument. The resulting color
		// is a new instance.
	}
	

	function    __toString()
	{
		return 'Color( red: ' . $this->red . ' ,green: ' . $this->green . ' ,blue: ' . $this->blue . ')';
	}

	static function	doc()
	{
		return (file_get_contents("Color.doc.txt"));

		// The Class must have a static method called doc that returns the
		// documentation of the class in a string. (in this specific case
		// the documentation does not have to be long). The content of the
		// documentation must be read from a Color.doc.txt file. See
		// example output for formatting the documentation and content of
		// the file.
	}
	
	function	__destruct()
	{
		if (self::$verbose)
			print('destructed\n');
	}

}
?>