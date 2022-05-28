<?php

$xml = simplexml_load_file('B2.xml');

echo '<h2>Movie Title and Actor Name</h2>';

$list = $xml->Movie;

for ($i = 0; $i < count($list); $i++) {

    echo 'Movie Name: ' . $list[$i]->MovieTitle . '<br>';

    echo 'Actor Name: ' . $list[$i]->ActorName . '<br><br>';

}
