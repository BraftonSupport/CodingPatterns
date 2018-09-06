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
class sellingBook{

}
trait SellingBook{
    public $publisher;
    public function createFinalDraft(){

    }

    public function sendToDistributor(){
        
    }
}
class SciFiBook{
    public $varB;

}

