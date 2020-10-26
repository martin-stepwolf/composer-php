<h1>Arrays</h1>
<p>PHP project made whit composer(not frameworks) and best practices.</p>
<pre>
$courses = ['ruby', 'php', 'python'];
sort($courses);
# Short by name
//rsort($courses);
# Sort by key
// ksort($course);
# delete a alement
// var_dump(array_slice($course, 1));
# split an array in array, like pagination from database
// array_chunk($courses_chunk, 2);
# show the first element and delete it
// array_shift() 
# show the last element and delete it
// array_pop()
# add an element in the fisrt space
// array_unshift()
# add an element in the final space
// array_push()
# switch the value for the keys
// array_flip()
# compare arrays
// var_dump(array_diff($wishes, $courses)); 
// it shows the elements in wishes that courses does not have
# compare arrays (with keys)
// array_diff_assoc()

// var_dump($frontent + $backend);
// whit this function the index are remplaced
# merge arrays
// array_merge($frontent1, $backend1)
# merge arrays, if there are elements with
# the same key, the values become an array
// array_merge_recursive($frontend2, $backend2)
# combine arrays, one has the keys and the second one the values
// array_combine($courses, $categories)
</pre>