<?php

class Color {
    public $verbose = False;
    public $red = 0;
    public $green = 0;
    public $blue = 0;

    function    __construct($arr)
    {
        if ($verbose == TRUE)
        {

        }
        else
            return ;

    }

    function    add()
    {
        // The Class must have a method called add that allows you to add
        // the the components of the current instance to the components of
        // another instance argument. The resulting color is a new
        // instance.
    }

    function    sub()
    {
        // The Class must have a method called sub that allows you to
        // subtract the components of another instance from the components
        // of the current instance. The resulting color is a new instance.
    }

    function    mult()
    {
        // The Class must propose a method called mult that allows you to
        // multiply the components of the current instance with the
        // components of of another instance argument. The resulting color
        // is a new instance.
    }

    function    __toString()
    {

    }

    function    doc()
    {
//         The Class must have a static method called doc that returns the
// documentation of the class in a string. (in this specific case
// the documentation does not have to be long). The content of the
// documentation must be read from a Color.doc.txt file. See
// example output for formatting the documentation and content of
// the file.

        // $str = 
        // return ($str);
    }

    function    __destruct()
    {
        if ($verbose == TRUE)
        {

        }
        else
            return ;
    }

}
?>