<?php
class Book {
  // Private properties for title and available copies
  private $title;
  private $availableCopies;

  public function __construct($title, $availableCopies) {
    $this->title = $title;
    $this->availableCopies = $availableCopies;
  }

  // Getters for title and available copies
  public function getTitle() {
    return $this->title;
  }

  public function getAvailableCopies() {
    return $this->availableCopies;
  }

  // Borrow book method decreases available copies
  public function borrowBook() {
    if ($this->availableCopies > 0) {
      $this->availableCopies--;
      return true;
    } else {
      return false;
    }
  }

  // Return book method increases available copies
  public function returnBook() {
    $this->availableCopies++;
  }
}

class Member {
  // Private property for member name
  private $name;

  public function __construct($name) {
    $this->name = $name;
  }

  // Getter for member name
  public function getName() {
    return $this->name;
  }

  // Borrow book method takes book as argument and calls borrowBook on it
  public function borrowBook($book) {
    $book->borrowBook();
  }

  // Return book method takes book as argument and calls returnBook on it
  public function returnBook($book) {
    $book->returnBook();
  }
}

// Usage

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);


// Print Available Copies with their names
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}<br>";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}<br>";