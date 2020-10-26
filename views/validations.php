<h1>Validations</h1>
<pre>
#Regular Expressions
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
var_dump(preg_match('/^[0-9]{6,9}$/', $password1));
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password2));

echo 'Test';
var_dump(App\Validate::email('test@gmail.com'));
var_dump(App\Validate::url('https://martin.com'));
var_dump(App\Validate::password('123456'));
</pre>