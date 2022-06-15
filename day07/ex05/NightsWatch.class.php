<?php

class NightsWatch implements IFighter {

    public $array = array();

    function recruit($soldier)
    {
        $this->array[] = $soldier;
    }
    function fight()
    {
        foreach ($this->array as $index)
        {
            if ($index instanceof IFighter)
            	$index->fight();
        }
    }
}

?>