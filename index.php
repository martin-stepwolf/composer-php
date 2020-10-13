<?php

require __DIR__ . '/vendor/autoload.php';

echo upper('Hello World!!!') . "<br>";
echo lower('I am a project with \"composer(not frameworks).\"<br>');

//variables 
$nick_name = 'martin-stepwolf';
$my_skills = [
    'languages' => [
        'PHP',
        'JavaScript'
    ]
];
class User
{
    public $name = 'Martín';
}
$user = new User();

echo "Project for practicing 
{$my_skills['languages'][0]} 
by $user->name ($nick_name)<hr>";

// data format
$data = 'PHP Language';
echo $data[0];

echo "<br>";
$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, reiciendis non facilis commodi numquam ea perspiciatis aliquid voluptas fuga? Magnam animi architecto reprehenderit eaque officia maxime facere fugit repellendus! Praesentium?";
$extract = substr($post, 0, 30);

echo "$extract... [read more]";

echo "<br>";
$data = 'javascript, php, laravel';
$tags = explode(', ', $data);

var_dump($tags);

echo "<br>";
$courses = ['ruby', 'php', 'python'];
echo implode(' - ', $courses);

echo "<br>";
$course = "   PHP course   ";
// ltrim($course) o rtrim($course).
$course = trim($course);
echo "I wanna take a $course with any framework.";

#Alter
$text = "<h3>PHP is A LANGUAGE</h3>";
echo $text;
echo strtolower($text);
echo strtoupper($text);
echo lcfirst($text);
echo ucfirst($text);

echo "<hr>";
#Reemplace
$slug = str_replace(' ', '-', $text);
echo $slug;
echo strtolower($slug);

echo "<hr>";
#Modification
$code = 39;
echo "<br>";
echo str_pad($code, 8, '#');
echo "<br>";
echo str_pad($code, 8, '#', STR_PAD_BOTH);
echo "<br>";
echo str_pad($code, 8, '#', STR_PAD_LEFT);
echo "<br>";
echo str_pad($code, 8, '#', STR_PAD_RIGHT);

echo "<hr>";
// strip_tags() deletes all the HTML tags
echo strip_tags($text);

echo "<hr>";
$text = "PHP es UN LENGUAJE, año 2020, programación";
echo strtoupper($text); //monobye
echo "<br>";
echo mb_strtoupper($text); //multibyte

echo "<hr>";
#Regula Expressions
/*
/:  container
^: init
$: final
-: range
[]: pattern
{}: condition
*/

$password = '12345';
$password1 = '123456a';
$password2 = '123456';
echo preg_match('/^[0-9]{6,9}$/', $password);
echo "<br>";
var_dump(preg_match('/^[0-9]{6,9}$/', $password1));
echo "<br>";
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password2));
