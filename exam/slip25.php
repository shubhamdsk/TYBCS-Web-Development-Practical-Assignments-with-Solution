<!-- Write PHP program to get book details from XML file
when user select a book name. Create XML file for
storing details of book (title, author, year, price).  -->


<?php
$bookInfo = new SimpleXMLElement("<BookInfo/>");
$book=$bookInfo ->addChild("book");
$book->addChild("bookno","1");
$book->addChild("bookname","java");
$book->addChild("authorname","Balguru Swami");
$book->addChild("price","250");
$book->addChild("year","2006");

$book=$bookInfo ->addChild("book");
$book->addChild("bookno","2");
$book->addChild("bookname","C");
$book->addChild("authorname","Denis Ritchie");
$book->addChild("price","500");
$book->addChild("year","1971");

$bookInfo -> asXML("slip25.xml");
?>

