<?php
class komputer
{
    public $prosesor;
    public $memory;

    public function __construct($prosesor, $memory = "12 GB")
    {
        $this->prosesor = $prosesor;
        $this->memory = $memory;
    }

    public function run(){
        return "$this->prosesor | $this->memory";
    }
}

$komputerSaya = new komputer("Core i7","8 GB");
echo $komputerSaya->run();
?>