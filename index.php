<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <h1>Hello World</h1>

    <form action="process.php" method ="POST">
        Enter A name<input name='name'  type="text">
        <input type="submit">
    </form>
    <?php
        $types_of_ppl = array('gaurav','dog lover','ppl i hate');

        print_r($types_of_ppl);
    ?>

</body>
</html>