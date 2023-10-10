<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\03\\";
require_once $basePath . "functions.php";

class CoffeMaker {
    public function brew() {
        dd("Brewing the coffee");
    }
}

// (new CoffeMaker())->brew();

class SpecialtyCoffeeMaker extends CoffeMaker {
    public function brewLatte() {
        dd("Brewing a latte");
    }
}

// (new SpecialtyCoffeeMaker())->brewLatte();

class Collection {

    protected array $items;

    function __construct($items = []) {
        $this->items = $items;
    }

    public function sum($key) {
        return array_sum(array_map(function($item) use ($key) {
            return $item->$key;
        }, $this->items));
    }
}

class Video {

    public $title;
    public $length;

    public function __construct($title, $length) {
        $this->title = $title;
        $this->length = $length;
    }
}

$collection = new VideosCollection([
    new Video('Hexa Flamengo 2019', 100),
    new Video('Penta Brasil 2002', 200),
    new Video('Copa do Brasil 2004', 500),
]);

// dd($collection->sum('length'));

class VideosCollection extends Collection {
    public function length() {
        return $this->sum('length');
    }
}

$totalVideos = (new VideosCollection())->length();

dd($totalVideos);