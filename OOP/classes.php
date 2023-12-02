<!-- Object-oriented Programming in PHP -->
<!-- Classes -->
<?php

class Fruit {
    // Creating Properties and attributes
    public $name;
    protected $color;
    private $price;
    // Public variables are accessible within the class, in the class' children, and outside the class

    // Protected is only accessible within that class and its children
    // Private is only accessible in that class

    // When a person creates a new object, the constructor is invoked. So this is the best time to assign values to variables. The constructor is a function that runs when a new object is created using that class
    function __construct($name, $color, $price) {
        // $this->name = "apple";
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    /* Destructor functions are automatically called when code execution stops or the class is exited */
    function __destruct() {
      echo "<p style='color: red;'>This will run after all code has been executed </p><br>";
  }
}

$fruit1 = new Fruit("apple", "Green", "2.00");

echo "Name:" . $fruit1->name . "<br>";
// echo "Color:" . $fruit1->color . "<br>"; // throws error because it is not accessable outside of class
//echo "Price" . $fruit1->price . "<br>"; // throws error because it is not accessable outside of class


// Encapsulation - Keeping private variables safe but still being able to manipulate and access them. This is done through the use of "getters and setters "
class BankAccount {
    private $balance;
    private $pin;
    public $bank_name;
    public $owner_name;

    public function __construct($balance, $pin, $bank_name, $owner_name) {
        $this->balance = $balance;
        $this->pin = $pin;
        $this->bank_name = $bank_name;
        $this->owner_name = $owner_name;
    }



    // Function to set pin
    public function resetPin($newPin) {
        return $this->pin = $newPin;
    }
    // Function to get pin
    public function getPin() {
        return $this->pin;
    }
    // Function to get balance
    public function getBalance() {
        return $this->balance;
    }

    // Function to increase balance by a chosen amount
    public function getPaid($pay) {
        return $this->balance += $pay;
    }
    // Function to decrease balance by a chosen amount

    public function payBills($bills) {
        return $this->balance -= $bills;
    }
}

$b1 = new BankAccount(200, 12345, "some bank", "Bob");
echo "bank name:" . $b1->bank_name . "<br>";  // is accessible from anywhere as it is a public variable
$b1->getBalance();
echo "I haven't got paid yet, I have " . "£" . $b1->getBalance() . " in my account <br> <br>";
$b1->getPaid(200);
echo "I just got paid in my bank account. I now have " . "£" . $b1->getBalance() . " in my account  <br> <br>";

$b1->payBills(50);
echo "My direct debits have just come out of my account. Now I have " . "£" . $b1->getBalance() . " in my account  <br> <br>";

// Instanceof keyword can be used to check if an object is an instance of / inherits from a particular class. It returns a value of True or False

echo var_dump($b1 instanceof BankAccount) . "<br>";

echo "My bank account pin is " . $b1->getPin() . "<br>";
echo "OOPS! I need to reset my pin... My new one is  "  . $b1->resetPin(26790);
?>
