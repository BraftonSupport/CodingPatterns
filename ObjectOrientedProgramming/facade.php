<?php 
/**
 * (structural)
 * hides more complex pattern and systems to be called by callable class methods
 * 
 * in this limited example we need an embeed for an author we will need in many places so we build a facade
 * 
 * key take aways
 * 1. the use is tied directly to the facade
 * 2. facade captures the complexity of an operation and provides deligation to other downstream methods
 */

interface book{
    public function getTitle();
}

class bookA implements book{
    public $title = "something";
    public $description = "";
    private $extract = "extract";
    public $author = null;
    public function __construct(){
        $this->setAuthor();
    }
    private function setAuthor(){
        $this->author = new stdClass;
        $this->author->name = "Tony Stark";
        $this->author->profileImage = "https://somedomain.com/image.png";
        $this->author->bio = "kld ljakld kl dkdas f kdfhjsadlk fsdfk sdf aoi djd hd ljsd fkljs dlkfjdsklfjadkl dksfj asdklfjas dfljas d";
    }
    public function capitalizeDescription(){
        return strtoupper($this->description);
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
}

class BuildImageEmbeed{
    public static function buildImageTag($src){
        return "<img src=\"${src}\"/>";
    }
}
class BuildSectionEmbeed{
    public static function buildSectionTag($content){
        return "<section><span class=\"bio\">${content}</span></section>";
    }
}
class ElementWrapper{
    public static function buildWrapper(){
        $args = func_get_args();
        $string = "<div>";
        foreach($args as $el){
            $string .= $el;
        }
        $string .= "</div>";
        return $string;
    }
}

class BuildAuthorEmbeedFacade{

    public static function createEmbeed($author){
        $imageEmbeed = BuildImageEmbeed::buildImageTag($author->profileImage);
        $bioWrapper = BuildSectionEmbeed::buildSectionTag($author->bio);
        return ElementWrapper::buildWrapper($imageEmbeed, $bioWrapper);
    }
}

$book = new bookA();
var_dump(BuildAuthorEmbeedFacade::createEmbeed($book->author));