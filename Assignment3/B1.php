<?php
$xml = new DOMDocument();
$xml->load("A3.xml");

print $xml->saveXML();
?>
