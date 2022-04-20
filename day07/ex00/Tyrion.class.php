<?php

class Tyrion extends Lannister {

    public function __construct()
    {
        parent::__construct();
        print('My name is Tyrion'. PHP_EOL);
        return ;
    }

    function    getSize()
    {
        print('Short');
        return ;
    }

    function    houseMotto()
    {
        print('Hear me roar!');
        return;
    }
}
?>