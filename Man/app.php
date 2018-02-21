<?php

interface VitalFunction {

    public function breathing($air);
    public function sleeping();
    public function eating($food_type);
    public function drinking($fluid_type);
    
}

trait Muscle{

  public function sendImpulseToMuscle($muscle_id){
    //move muscle logic
  }

}

class Brain {

    use Muscle;
    
    public function memory($word){
      // return database memory result
    }
    
    public function makeMove(){
        $this->sendImpulseToMuscle('muscle_id');
    }

    public function thinking($word){
      // find in database memory anything with $word
      $this->memory($word);
      
    }


}

class Man extends Brain implements VitalFunction {
      
    private $firstname;
    private $lastname;
    
    public function __construct($firstname,lastname){
        $this->firstname=$firstname;
        $this->lastname=$lastname;
    };
    
    public function getFullName(){
        return $this->firstname." ".$this->lastname; 
    }
    
    public function breathing($air){}; 
    public function sleeping(){};
    public function eating($food_type){};
    public function drinking($fluid_type){};


}





?>