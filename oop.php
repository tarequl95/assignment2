<?php
class Book {
 // TODO: Add properties as Private
 private $title;
 private $availableCopies;
 public function __construct($title, $availableCopies) {
     // TODO: Initialize properties
     $this->title=$title;
     $this->availableCopies=$availableCopies;
     }
// TODO: Add getTitle method
public function getTitle(){
    if ($this->availableCopies>0){
        return " Name:". $this->title;
    }
    else{
        return " Name:". $this->title."not available now";
    }
   
}
 // TODO: Add getAvailableCopies method
 function getAvailableCopies(){
    
    return "Available Copies of '$this->title':  $this->availableCopies <br>";
    //return " , Available Copies:". $this->availableCopies;
    
   
 }
 // TODO: Add borrowBook method
 function borrowBook($bookname,$copies){
  if($bookname===$this->title){
     $this->availableCopies-=$copies;
  }
  else{
    echo "this $bookname book is not available now";
  }
 }
 // TODO: Add returnBook method
 function returnBook($bookname,$copies){
    $this->title=$bookname;
    $this->availableCopies+=$copies;
 }
}


class Member{
 // TODO: Add properties as Private
private $name;
 public function __construct($name) {
      // TODO: Initialize properties
      
      $this->name=$name;
     }

 // TODO: Add getName method
 function getName(){
    return "Name: ".$this->name;
 }
 
 // TODO: Add borrowBook method
 function borrowBook($bookName, $bookCopis){
    return [$bookName,$bookCopis];
 }
 
 // TODO: Add returnBook method
 function returnBook($bookName, $bookCopis){
    return [$bookName,$bookCopis];
 }
 
}
$book1=new Book("The Great Gatsby",5);
$member1=new Member("John Doe");
$requestcoppy=$member1->borrowBook("The Great Gatsby",1);
$book1->borrowBook($requestcoppy[0],$requestcoppy[1]);
//$returnBook=$member1->returnBook("The Great Gatsby",1);
//$book1->returnBook($returnBook[0],$returnBook[1]);
echo $book1->getAvailableCopies();

$book2=new Book("To Kill a Mockingbird",3);
$member2=new Member("Jane Smith");
$request_book=$member2->borrowBook("To Kill a Mockingbird",1);
$book2->borrowBook($request_book[0],$request_book[1]);
//$returnCoppy=$member2->returnBook("To Kill a Mockingbird",1);
//$book2->returnBook($returnCoppy[0],$returnCoppy[1]);
echo $book2->getAvailableCopies();



