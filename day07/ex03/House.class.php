<?php

class House {
    public function introduce()
    {
        print ('House ');
        print($this->getHouseName() . ' of ');
        print($this->getHouseSeat());
        print(' : "' . $this->getHouseMotto() . '"' . PHP_EOL);
        return ;
    }
}

?>