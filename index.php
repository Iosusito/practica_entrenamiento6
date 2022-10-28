<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function validateName($name): bool
    {
        trim($name);
        if (mb_strlen($name) == 0) {
            return ctype_upper(mb_substr($name, 0, 1)) && ctype_lower(mb_substr($name, 1));
        } else {
            return null;
        }
    }

    $datos = [
        ''
    ];

    $args = [
        'nombre' => [
            'filter' => FILTER_CALLBACK,
            'options' => "validateName"
        ],
        'edad' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => ["min_range" => 0]
        ],
        'altura' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => ["min_range" => 0] //es en cm
        ]
    ];
    $validations = filter_var_array($args);
    ?>


    <form action="index.php" method="POST">
        <?php
        // echo <<<END
        // <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
        // <p>
        //     Edad: <input type="text" name="edad" id="edad">
        // </p>
        // <p>
        //     Altura: <input type="text" name="altura" id="altura"> cm
        // </p>
        // echo '<input type="submit" value="Enviar">';
        // END;
        ?>
    </form>
</body>

</html>