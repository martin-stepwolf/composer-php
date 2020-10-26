<h1>Fundamentals</h1>
<p>Simple functions, arrays, object.</p>
<pre>
echo upper('Hello World!!!');
echo lower('Hello World!!!');
//variables
$nick_name = 'martin-stepwolf';
$my_skills = [
'languages' => [
10 => 'PHP',
'JavaScript', // it has the key 11
'framework' => 'Laravel'
]
];

function printer($element, $key)
{
echo $element . ": $key";
}
array_walk($my_skills['languages'], 'printer');

/*
array_key_exists('frontend', $courses);
in_array('javascript', $courses);
array_keys($courses);
array_values($courses);
*/

class User
{
    public $name = 'Martín';
}
$user = new User();
echo "Project for practicing
{$my_skills['languages'][10]}
by $user->name ($nick_name);

echo implode(' - ', $courses);

$courses = ['ruby', 'php', 'python'];
$course = "   PHP course   ";
// ltrim($course) o rtrim($course).
$course = trim($course);
echo "I wanna take a $course with any framework.";

#Alter
$text = "PHP is A LANGUAGE";
echo $text;
echo strtolower($text);
echo strtoupper($text);
echo lcfirst($text);
echo ucfirst($text);

#Reemplace
$slug = str_replace(' ', '-', $text);
echo $slug;
echo strtolower($slug);

#Modification
$code = 39;
echo str_pad($code, 8, '#');
echo str_pad($code, 8, '#', STR_PAD_BOTH);
echo str_pad($code, 8, '#', STR_PAD_LEFT);
echo str_pad($code, 8, '#', STR_PAD_RIGHT);

// strip_tags() deletes all the HTML tags
echo strip_tags($text);

$text = "PHP es UN LENGUAJE, año 2020, programación";
echo strtoupper($text); //monobye

echo mb_strtoupper($text); //multibyte

// data format
$data = 'PHP Language';
echo $data[0];

$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem?";
$extract = substr($post, 0, 10);

echo "$extract... [read more]";

$data = 'javascript, php, laravel';
$tags = explode(', ', $data);

var_dump($tags);

</pre>