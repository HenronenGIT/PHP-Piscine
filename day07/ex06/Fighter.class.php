<?php

    class Fighter {

        public $soldier;

        function __construct($type)
        {
            $this->soldier = $type;
        }
        function __toString()
        {
            return $this->soldier;
        }
    }

?>