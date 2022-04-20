<?php

class Jaime {

    public function sleepWith($inst)
    {
        if (get_class($inst) == 'Tyrion')
        {
            print("Not even if I'm drunk !" . PHP_EOL);
        }
        else if (get_class($inst) == 'Sansa')
        {
            print("Let's do this." . PHP_EOL);
        }
        else if(get_class($inst) == 'Cersei')
        {
            print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
        }
        else
        {
            return ;
        }
    }
}

?>