<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <?php

    require __DIR__ . '/partials/functions.php';

    $length = $_GET['length_string'] ?? false;
    $length = intval($length);

    ?>
    <div class="container p-4">
        <form action="" method="GET" class="d-flex align-items-center gap-3 mb-3">
            <div class="d-flex align-items-center gap-2">
                <label for="length_string"><strong>Inserisci un numero</strong></label>
                <input required type="number" name="length_string" id="length_string" value="<?php echo $length; ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Genera</button>
        </form>

        <p><strong>Password generata</strong>: <strong class="text-danger"><?php echo passwordGenerator($length) ?></strong></p>
    </div>
</body>

</html>