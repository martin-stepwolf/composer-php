<h1>Magic methods</h1>
<pre>

class InsertDataEmployer
{
    private $name;
    private $creditCard;

    public function __construct($name)
    {
        echo "<p>DB connection opened</p>";
        $this->name = $name;
    }

    private function getNumberCard()
    {
        $this->creditCard['number'];
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
            // True if the propery exist, NULL if not
            // It is better to use getters in order to have better performance
        }
    }

    public function __set($property, $value)
    {
        return $this->$property = $value;
        // rewrite or create a new property whit its value
        // It is better to use setters in order to have better performance
        // But the use of setters does not allow to create new properties
    }

    public function __isset($property)
    {
        return isset($this->$property);
        // TRUE if the property exist, FALSE if not
    }

    public function __unset($property)
    {
        unset($this->$property);
        // delete a property
    }

    public function __toString()
    {
        return $this->name;
        // return the object represented as a string
    }

    public function __sleep() // not parameters
    {
        echo 'proceeding to serialize...';
        return array('name'); // it must return an array

        /**
         * serialize is used to handle objects or arrangements of complex data structures (.json for example) 
         * which cannot be transported or stored or in some other way used outside of a php script.
         * It is used if you need to send information outside of the php scripts and 
         * save its type and structure without being altered in the process.
         */
    }

    public function __wakeup()
    {
        // it is the opposite of __sleep
        //it is throwed when a data is deserialized with the unserialize function.
        echo 'proceeding to deserialize...';
        $this->name = 'Martin Campos';
    }

    public function __call($method, $values)
    {
        // it allows to access inaccessible methods
        echo '<p>automatically accessing the private getNumberCard method from outside the class</p>';
        return call_user_func_array(array($this, $method), $values);
    }

    public function __destruct()
    {
        echo '<p>DB connection closed...</p>';
    }
}
$employer = new InsertDataEmployer('Martin');

// __get()
echo '<p>name: ' . $employer->name . '</p>';

// __set()
$employer->name = 'Campos';
echo '<p>New name: ' . $employer->name . '</p>';

// create new property whit __set()
$employer->age = 25;
echo '<p> Edad: ' . $employer->age . '</p>';

// look all the properties
echo var_dump($employer);

// it verifies if the value name exists
echo var_dump(isset($employer->name));

// delete the property age
unset($employer->age);
var_dump($employer);

// look the value of the class as String
echo "<p>$employer</p>";

//property to serualize
$dataSerialized = serialize($employer);
//(s: string, i: integer, b: boolean, d: double o float, N: null), 
// number of characters and the value
echo "<p>$dataSerialized</p>";

echo "<p>{unserialize($dataSerialized)}</p>";

$employer->creditCard = 123456789;
$employer->getNumberCard();
echo '<p> Card: ' . $employer->creditCard . '</p>';
</pre>