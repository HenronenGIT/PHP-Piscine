<?php

class Tyrion {
    public function sleepWith($inst)
    {
        if (get_class($inst) == 'Jaime')
        {
            print("Not even if I'm drunk !" . PHP_EOL);
        }
        else if (get_class($inst) == 'Sansa')
        {
            print("Let's do this." . PHP_EOL);
        }
        else if (get_class($inst) == 'Cersei')
        {
            print("Not even if I'm drunk !" . PHP_EOL);
        }
        else
        {
            return ;
        }
    }
}

?>