<h1>Object Oriented Programming</h1>
<pre>
echo "Arguments";
#Value
function greet($name)
{
    return "Hi, $name ";
    /**
     * return the value and stops the function
     * exit(); stop the system
     */
}
echo greet('Martin');

#References '&'
$course = 'PHP';
function path(&$course)
{
    $course = 'Laravel';
    echo $course; //Laravel
}
path($course);
echo $course; //Laravel

#Default
function greet1($name = 'Martin')
{
    return "Hi, $name";
}
echo greet1();
echo greet1('Carlos');

echo "Closure";
// anonymous function
// $greet = function ($name) {
//     return "Hi, $name";
// };
// echo greet('Martin');

function greet2(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name) {
    return "Hola, $name";
};

$en = function ($name) {
    return "Hello, $name";
};

echo greet2($es, 'Martin');
echo greet2($en, 'Martin');
</pre>