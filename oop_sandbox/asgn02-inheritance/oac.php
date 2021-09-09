<?php

class Bird {
  public $commonName;
  protected $habitat;
  protected $nestLocation;
  protected $footStructer;
  protected $diet;
  protected $conservationLevel;
  protected $averageWeight = 0.0;

  public function averageWeight() {
    return "The average weight of this bird is " . $this->averageWeight . "oz";
  }

  public function set_averageWeight($value) {
    $this->averageWeight = floatval($value);
  }

}

class Woodpecker extends Bird {
  protected $favoriteTree;
  public function favoriteTree() {
    return $this->favoriteTree = "dead tree";
  }
}

class GrayHawk extends Bird {
  protected $topSpeed;
  public function topSpeed() {
    return $this->topSpeed = "93 mph";
  }
}

class FishCrow extends Bird {
  protected $funFacts;
  public function funFacts() {
    return $this->funFacts = "Members of a mated pair frequently preen the back of each other's head.";
  }
}

$birds = new Bird;
$woodpecker = new Woodpecker;
$grayHawk = new GrayHawk;
$fishCrow = new FishCrow;

echo $birds->commonName = "Types of Birds with some facts" . "<br />";
echo "<hr />";

echo $woodpecker->commonName = "Woodpecker" . "<br />";
echo $woodpecker->favoriteTree() . "<br />";
$woodpecker->set_averageWeight(0.25);
echo $woodpecker->averageWeight() . "<br />";
echo "<hr />";

echo $grayHawk->commonName = "Grey Hawk" . "<br />";
echo $grayHawk->topSpeed() . "<br />";
$grayHawk->set_averageWeight(16.8);
echo $grayHawk->averageWeight() . "<br />";
echo "<hr />";

echo $fishCrow->commonName = "Fish Crow" . "<br />";
echo $fishCrow->funFacts() . "<br />";
$fishCrow->set_averageWeight(10);
echo $fishCrow->averageWeight() . "<br />";
echo "<hr />";

?>