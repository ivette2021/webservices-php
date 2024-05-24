//

<?php

$xml = new SimpleXMLElement($argv[1], 0, true);

foreach ($xml->book as $book) {
    echo "$book->author escribio $book->tittle" . PHP_EOL;
}
$newBook = $xml->addChild('book');
$newBook->addChild('author', 'Stephen king');
$newBook->addChild('tittle', 'Misery');

$xml->asXML('newbooks.xml');
