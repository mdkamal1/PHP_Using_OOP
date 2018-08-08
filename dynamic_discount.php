<?php  

class Discount
{
	private $discount;
	public function __construct($d)
	{
		$this->discount = $d;
	}

	public function calculate($amount)
	{
		echo $final_amount=$amount-($this->discount/100*$amount);
	}
}
//FOR FIRST 10 CUSTOMER
$lucky = new Discount(50);
$lucky->calculte(1000);echo " for first 10 lucky customer";

// FOR FEMALE CUSTOMER
$female = new Discount(20);
$female->calculate(1000);echo " for female customer";

echo "<br>";

// FOR MALE CUSTOMER
$male = new Discount(10);
$male->calculate(1000);echo " for male customer";

?>