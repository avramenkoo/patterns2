<?php

// Design pattern: Iterator

require 'TouristPlaceCollection.php';
require 'TouristPlaceIterator.php';

$collection = new TouristPlaceCollection();
$collection->addItem("The Holy Dormition Kyiv Caves Lavra");
$collection->addItem("Andriivskyi Descent");
$collection->addItem("Saint Sophia Cathedral");

echo "Список туристичних місць на власний розсуд туриста:\n";
foreach ($collection->getTouristIterator() as $item) {
  echo $item . "\n";
}

echo "\n";
echo "Список туристичних місць за рекомендаціями навігатора:\n";
foreach ($collection->getNavigatorIterator() as $item) {
  echo $item . "\n";
}

echo "\n";
echo "Список туристичних місць за допомогою місцевого гіда:\n";
foreach ($collection->getGuideIterator() as $item) {
  echo $item . "\n";
}
