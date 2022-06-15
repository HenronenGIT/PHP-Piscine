<?php

    class UnholyFactory {

        public $arr = array();

        function absorb($person)
        {
            if (in_array($person, $this->arr))
            {
                echo "(Factory already absorbed a fighter of type ". $person . ")" . PHP_EOL;
                $this->arr[] = $person;
            }
            else if (!get_parent_class($person) == 'Fighter')
            {
                echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
            }
            else
            {
                echo "(Factory absorbed a fighter of type " . $person . ")" . PHP_EOL;
                $this->arr[] = $person;
            }
            return ;
        }

        function fabricate($str)
        {
            foreach ($this->arr as $index)
            {
                if ($str == $index)
                {
                    echo "(Factory fabricates a fighter of type " . $str . ")" . PHP_EOL;
                    return ($index);
                }
            }
            echo "(Factory hasn't absorbed any fighter of type " . $str . ")" . PHP_EOL;
            return (null);
        }


    }

?>