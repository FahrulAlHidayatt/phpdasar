<?php

    class Singer {
        public $name = "Ann";
        public function display() {
            echo $this->name;
        }
    }
    $s = newSinger();
    $s -> display();
    ?>
