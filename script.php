
<?php
    include('classes.php');
    include('functions.php');

    $max_number_of_books = (int)readline("Input how many books can fit your shelf: ");
    $my_shelf = new Inventory("Shelf1", $max_number_of_books);
    
    $method = decide_action();
    
    switch($method){

        case 1:
            while(true){
                $input = readline("Input Name of your book: ");
                $book_from_input = new Book($input);
                if(!$my_shelf->add_book($book_from_input->name)){
                    break;
                }
            }
        case 2:
            $method = readline("How do you want to find it? ");
            $my_shelf->find_book($method);

    }    



    echo $my_shelf->shelf[0];

    




?> 