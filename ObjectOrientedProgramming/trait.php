<?php 
/**
 * a trait is reusable code similar to an abstract class however is not limited to a single inheritance
 */
interface IWriteBook{
    public function addPage(string $pageContent):void;
}

interface IPublishBook{
    public function sendToPublisher();
}

abstract class Book{
    public $content;
    public $author;

    public function AMethod(){

    }
}

trait SellingBook{
    public $publisher;
    public function createFinalDraft(){

    }

    public function sendToDistributor(){
        echo 'sending';
    }
}
class SciFiBook{
    public $varB;
    use SellingBook;
    public function sendToDistributor(){
        echo 'sending direct'; 
    }
}
/** @var SciFiBook */
$a = new SciFiBook();

$a->sendToDistributor();