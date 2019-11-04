<?php
	class Test{
		//kõik, mis on Klassi sees tuleb siia alla
		//muutujad ehk properties
		private $secretNumber;
		public $publicNumber;
		
		function __construct($sentValue){
			$this->secretNumber = 10;
			$this->publicNumber = $sentValue * $this->secretNumber;
			echo "salajane" .$this->secretNumber ." ja avalik: " .$this->publicNumber;
		}//constructor lõppeb
		
		//destructor algab
		
		function __destruct(){
			echo "klass on valmis ja"
		}
		
		//destructor lõppeb
		
		//funktsioon ehk methods
		public function showValue(){
			echo "\n salajane" .$this->secretNumber ;
			$this->tellSecret();
		}
		
		private function tellSecret(){
			echo"Näidisklass on peaaegu valmis";
		}
		
	}//Class lõppeb