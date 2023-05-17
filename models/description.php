<?php 

class description{
    public $name;
    public $date;
    public $dimension;
    public $game;

    function __construct($_name,$_value='' )
    {
        $this->name = $_name;
        if ($_name == 'cuccia') {
            $this->dimension = $_value;
        } elseif ($_name == 'cibo') {
            $this->date = $_value;
        }elseif($_name == 'giochi'){
            $this->game = $_value;
        };
    }
}