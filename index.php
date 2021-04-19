<?php
	class Car{
		public $price;
		public $speed;
		public $fuel;
		public $mileage;
		public $tax = 0.12;

		public function __construct($car){
			$this->Display_all();
		}

		public function get_speed(){
			return $this->speed;
		}
		public function set_speed($value){
			$this->speed = $value;
		}

		public function get_price(){
			return $this->price;
		}
		public function set_price($value){
			$this->price = $value;
		}

		public function get_fuel(){
			return $this->fuel;
		}
		public function set_fuel($value){
			$this->fuel = $value;
		}

		public function get_mileage(){
			return $this->mileage;
		}
		public function set_mileage($value){
			$this->mileage = $value;
		}

		public function get_tax(){
			return $this->tax;
		}
		public function set_tax($value){
			if($this->get_price() > 10000){
				$value = 0.15;
			} else {
				$value = 0.12;
			}
			$this->tax = $value;
		}

		public function Display_all(){
			echo ' Price:'.' '.$this->get_price().'<br>';
			echo ' Speed:'.' '.$this->get_speed().'mph <br>';
			echo ' Fuel:'.' '.$this->get_fuel().'<br>';
			echo ' Mileage:'.' '.$this->get_mileage().'mpg <br>';
			echo ' Tax:'.' '.$this->get_tax().'<br><br>';

		}
	}

	$car1 = new Car('car1');
	$car1->set_price(2000);
	$car1->set_speed(40);
	$car1->set_fuel('Full');
	$car1->set_mileage(10);
	$car1->set_tax($value);
	echo $car1->Display_all().'<br>';

	$car2 = new Car('car2');
	$car2->set_price(60000);
	$car2->set_speed(40);
	$car2->set_fuel('Empty');
	$car2->set_mileage(10);
	$car2->set_tax($value);
	echo $car2->Display_all().'<br>';

	$car3 = new Car('car3');
	$car3->set_price(50000);
	$car3->set_speed(40);
	$car3->set_fuel('Not Full');
	$car3->set_mileage(10);
	$car3->set_tax($value);
	echo $car3->Display_all().'<br>';

	$car4 = new Car('car4');
	$car4->set_price(11000);
	$car4->set_speed(40);
	$car4->set_fuel('Full');
	$car4->set_mileage(10);
	$car4->set_tax($value);
	echo $car4->Display_all().'<br>';

	$car5 = new Car('car5');
	$car5->set_price(2000);
	$car5->set_speed(40);
	$car5->set_fuel('Full');
	$car5->set_mileage(10);
	$car5->set_tax($value);
	echo $car5->Display_all().'<br>';
	
?>
