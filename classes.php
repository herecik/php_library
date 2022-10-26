<?php
    class Book{
        public $name;
        public $number_of_pages;

        function __construct($name)
        {
            $this->name = $name;
            $this->number_of_pages = 0;
        }

        

    }
    class Inventory{
        public $max_capacity;
        public $capacity = 0;
        public $name;
        public $shelf = array();

        function __construct($name, $capacity)
        {
            $this->name = $name;
            $this->max_capacity = $capacity;
            for($i = 0; $i < $this->max_capacity; $i++){
                
            }

        }

        function add_book($book_name){
            if($this->capacity < $this->max_capacity){
                array_push($this->shelf, $book_name);
                $this->capacity++;
                echo "Book ".$book_name." has been added to the shelf ". $this->name . "\n";
                return true;
            }
            else{
                echo "The shelf ". $this->name . " is full\n";
                return false;
            }

        }

        function find_book($method){
            $found = false;
            if($method == "index"){
                $index = readline("Positin in shelf: ") - 1;
                if($index <= $this->max_capacity){
                    echo "Your book is ". $this->shelf[$index];
                }
                else{
                    echo "Your book is not here";
                }  
            }
            else if($method == "by_name"){
                $name_entered = readline("Enter name of searched book: ");
                for($i = 0; $i < $this->max_capacity; $i++){
                    if($this->shelf[$i] == $name_entered){
                        echo "Your book". $name_entered ."is on position ". $i + 1 . "\n";
                        $found = true;
                    }
                }
                if(!$found){
                    echo "Your book was not found\n";
                }
            }
        }

    }




?> 