<?php

class NightsWatch implements IFighter {

    public $arr = array();

    function recruit($soldier)
    {
        $this->arr[] = $soldier;
    }
    function fight()
    {
        foreach ($this->arr as $index)
        {
            if ($index instanceof IFighter)
            $index->fight();
        }
    }
}

?> 