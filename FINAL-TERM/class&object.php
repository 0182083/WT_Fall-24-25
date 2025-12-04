<?php
class Book {
    
    public $title;
    public $author;
    public $year;
 
    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
 
    public function getDetails() {
        return "Title: " . $this->title . "<br>Author: " . $this->author . "<br>Year: " . $this->year . "<br>";
    }
 

    public function setTitle($title) {
        $this->title = $title;
    }
 
    public function setAuthor($author) {
        $this->author = $author;
    }
 
    public function setYear($year) {
        $this->year = $year;
    }
}
 
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
 
echo $book1->getDetails();
 
$book1->setTitle("1984");
$book1->setAuthor("George Orwell");
$book1->setYear(1949);
 

echo "<br>Updated Book Details:<br>";
echo $book1->getDetails();
?>