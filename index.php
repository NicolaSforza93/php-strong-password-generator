<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <?php
    $length = $_GET['length_string'];
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@!?&.:;+_-%';


    function passwordGenerator($arg1)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@!?&.:;+_-%';
        $length = $_GET['length_string'];
        $Password = '';
        var_dump($characters, $length);
        for ($i = 0; $i < $length; $i++) {
            $randChars = mt_rand(0, strlen($characters) - 1);
            $Password .= $characters[$randChars];
        }
        return $Password;
    }

    var_dump(passwordGenerator($length));


    ?>

    <form action="" method="GET">
        <label for="length_string">Inserisci un numero</label>
        <input type="number" name="length_string" id="length_string">
        <button type="submit">Invia</button>
    </form>

</body>

</html>