
<?php

class Book {

    //Properties
    public $title, $author, $publishDate, $price, $publisher;

    //Methods
    function getPrice(){
        return $this->price;
    }

    public function __construct($name, $author, $price){
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;

    }
}

    $book1 = new Book("This", "That", 100);
    
    // echo $book1-> getPrice();

?>