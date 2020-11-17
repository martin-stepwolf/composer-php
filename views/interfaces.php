<h1>Interfaces</h1>
<pre>

Interfaces allow you to specify what methods a class should implement.
Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
Interfaces are declared with the interface keyword:

// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}
?>

</pre>

<h3>Interfaces and Abstract Classes</h3>
<p>Interface are similar to abstract classes, the difference are:</p>
<ul>
    <li>Interfaces cannot have properties, while abstract classes can</li>
    <li>All interface methods must be public, while abstract class methods is public or protected</li>
    <li>All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary</li>
    <li>Classes can implement an interface while inheriting from another class at the same time</li>
</ul>