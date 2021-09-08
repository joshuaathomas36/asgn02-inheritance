<?php
class Bird {
  var $commonName;
  $this->commonName = "Bird";
  protected $habitat;
  protected $nestLocation;
  protected $footStructer;
  protected $diet;
  protected $conservationLevel();
}

class Woodpecker extends Bird {
  var $favoriteTree;
  $this->favoriteTree = "dead tree";
}

class GrayHawk extends Bird {
  var $topSpeed;
  $this->topSpeed = "93 mph";
}

class FishCrow extends Bird {
  var $funFacts;
  $this->funFacts = "Members of a mated pair frequently preen the back of each other's head.";
}


$Woodpecker->commonName = "Woodpecker";
$GrayHawk->commonName = "Gray Hawk";
$FishCrow->commonName = "Fish Crow";

echo $Woodpecker->commonName . "<br />";
echo $Woodpecker->favoriteTree . "<br />";

echo $GrayHawk->commonName . "<br />";
echo $GrayHawk->topSpeed . "<br />";

echo $FishCrow->commonName . "<br />";
echo $FishCrow->funFacts . "<br />";

?>
