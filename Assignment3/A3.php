<!-- You have to just write this program xml file will be automatically created after running this php code.. -->

<?php
$bookInfo = new SimpleXMLElement("<BookInfo/>");
$book=$bookInfo ->addChild("book");
$book->addChild("bookno","1");
$book->addChild("bookname","java");
$book->addChild("price","250");
$book->addChild("year","2006");

$book=$bookInfo ->addChild("book");
$book->addChild("bookno","2");
$book->addChild("bookname","C");
$book->addChild("price","500");
$book->addChild("year","1971");

$bookInfo -> asXML("A3.xml");
?>