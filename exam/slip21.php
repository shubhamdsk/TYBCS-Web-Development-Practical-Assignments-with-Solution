<?php
$xml = new DOMDocument();
$xml->load("slip21.xml");

print $xml->saveXML();
?>