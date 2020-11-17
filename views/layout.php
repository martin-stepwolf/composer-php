<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>composer-php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a href="/" class="navbar-brand h1">Home</a>
            <a href="/fundamentals" class="navbar-brand h1">Fundamentals</a>
            <a href="/arrays" class="navbar-brand h1">Arrays</a>
            <a href="/validations" class="navbar-brand h1">Validations</a>
            <a href="/oop" class="navbar-brand h1">OOP</a>
            <a href="/magicmethods" class="navbar-brand h1">Magic Methods</a>
            <a href="/interfaces" class="navbar-brand h1">Interfaces</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</body>

</html>