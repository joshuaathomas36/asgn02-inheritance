<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';
    
    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    $kiwi = new Kiwi;
    $kiwi->flying = "no";
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p> <hr />";   
    
    echo "<h1>Static Examples</h1>";
    echo "<h2>Before using the create method</h2>";
    echo "<p>Instance count for Bird: " . Bird::$instatnce_count . ".</p>";
    echo "<p>Instance count for YellowBelliedFlyCatcher: " . YellowBelliedFlyCatcher::$instatnce_count . ".</p>";
    echo "<p>Instance count for Kiwi: " . Kiwi::$instatnce_count . ".</p>";
    
    $bird = Bird::create();
    $fly_catcher = YellowBelliedFlyCatcher::create();
    $kiwi = Kiwi::create();

    echo "<h2>After using the create method</h2>";
    echo "<p>Instance count for Bird: " . Bird::$instatnce_count . ".</p>";
    echo "<p>Instance count for YellowBelliedFlyCatcher: " . YellowBelliedFlyCatcher::$instatnce_count . ".</p>";
    echo "<p>Instance count for Kiwi: " . Kiwi::$instatnce_count . ".</p>";

?>
    </body>
</html>

