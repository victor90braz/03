<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\03\\";
require_once $basePath . "functions.php";

class CoffeMaker {
    public function brew() {
        dd("Brewing the coffee");
    }
}

(new CoffeMaker())->brew();