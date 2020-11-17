<?php 

require_once 'classes/golf.php';
require_once 'classes/kaefer.php';


$btj652 = new Golf();

$btj652->starten();

echo '<hr>';

$bka238 = new Kaefer();

$bka238->tanken();
$bka238->schluessel();
$bka238->wischer();
$bka238->ausschalten();

echo '<hr>';


 //recursive

function recursive($n)
{
    if (($n == 1) || ($n == 0)) {
        return $n;
    }
    return recursive($n - 1) + recursive($n - 2);
}


for ($i=0; $i<=25; $i++) {
    echo $i . ' = ' . recursive($i) . '<br>';
}


// Closure
$amount = 25;
$total = function ($price) use ($amount) {
    return $price * $amount;
};

// arrow function
$amount = 25;
$total = fn ($price) => $price * $amount;


// Typed Properties

class Post
{
    public int $id;                //type definition
    public string $title;          //type definition
}

$post = new Post;
$post->id = 1;                     //correct
// $post->title = [];              // error, ergibt:
// Fatal error: Uncaught TypeError: Typed property Post::$title must be string, array used in...


echo '<hr>';

$test = "TEST";
$example = function () use (&$test) {
    $test = "NULL";
    echo var_dump($test);
};
$example($test);
echo var_dump($test);

echo '<hr>';

$test2 = "TEST";
$example = function () use (&$test2) {
    $test2 = "NULL";
    echo var_dump($test2);
};
$example();
echo var_dump($test2);