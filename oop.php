<?php
class Book
{
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct( $title, $availableCopies )
    {
        // TODO: Initialize properties
        $this->title           = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method
    public function getTitle()
    {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method

    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    // TODO: Add borrowBook method

    public function borrowBook()
    {
        if ( $this->availableCopies > 0 ) {
            $this->availableCopies = $this->availableCopies - 1;
            return true;
        } else {
            return false;
        }
    }

    // TODO: Add returnBook method

    public function returnBook()
    {
        $this->availableCopies = $this->availableCopies + 1;
    }

}

class Member
{
    // TODO: Add properties as Private
    private $name;

    public function __construct( $name )
    {
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method

    public function getName()
    {
        return $this->name;
    }

    // TODO: Add borrowBook method

    public function borrowBook( $book )
    {
        if ( $book->borrowBook() ) {
            echo $this->getName() . " borrowed " . $book->getTitle() . "\n";
        } else {
            echo "No available copies of '{$book->getTitle()}' for {$this->name} to borrow.\n";
        }
    }

    // TODO: Add returnBook method

    public function returnBook( $book )
    {
        $book->returnBook();
        echo $this->getName() . " returned " . $book->getTitle() . "\n";
    }

}
$book1 = new Book( "The Great Gatsby", 5 );
$book2 = new Book( "To Kill a Mockingbird", 3 );

//Available copies of the books before borrowing

echo $book1->getTitle() . " has " . $book1->getAvailableCopies() . " available copies.\n";

echo $book2->getTitle() . " has " . $book2->getAvailableCopies() . " available copies.\n";

$member1 = new Member( "John Doe" );
$member2 = new Member( "Jane Smith" );

$member1->borrowBook( $book1 );
$member2->borrowBook( $book2 );

//Available copies of the books before borrowing

echo $book1->getTitle() . " has " . $book1->getAvailableCopies() . " available copies.\n";

echo $book2->getTitle() . " has " . $book2->getAvailableCopies() . " available copies.\n";

// Members can return books
$member1->returnBook( $book1 );
$member2->returnBook( $book2 );

//Available copies of the books after returning

echo $book1->getTitle() . " has " . $book1->getAvailableCopies() . " available copies.\n";

echo $book2->getTitle() . " has " . $book2->getAvailableCopies() . " available copies.\n";