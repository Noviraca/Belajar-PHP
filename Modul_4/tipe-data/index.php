<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Belajar tipe data PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class=" bg-light">
    <main class="container-md px-0 border-start border-end min-vh-100 position-relative">
        <section>
            <h4 class="p-4 my-0 border-bottom bg-white position-sticky top-0">Belajar Tipe Data</h4>
            <?php
            // Tipe Data Integer
            $int_1 = 10;
            $int_2 = 5;
            $int_3 = 15;
            $int_4 = 55;
            $int_5 = 40;
            ?>
            <div class="p-4 border-bottom">
                <h5>Tipe Data Integer</h5>
                <div>
                    <ul>
                        <li>Variable a: <?= $int_1; ?></li>
                        <li>Variable b: <?= $int_2; ?></li>
                        <li>Variable c: <?= $int_3; ?></li>
                        <li>Variable d: <?= $int_4; ?></li>
                        <li>Variable e: <?= $int_5; ?></li>
                        <li><?= var_dump($int_5); ?></li>
                    </ul>
                </div>
            </div>
            <?php
            // Tipe Data Float
            $float_1 = 5.1;
            $float_2 = 6.7;
            $float_3 = 9.3;
            $float_4 = 7.68000E1;
            ?>
            <div class="p-4 border-bottom">
                <h5>Tipe Data Float</h5>
                <div>
                    <ul>
                        <li>Matematika : <?= $float_1; ?></li>
                        <li>IPA : <?= $float_2; ?></li>
                        <li>Bahasa Indonesia: <?= $float_3; ?></li>
                        <li>Rata-Rata: <?= $float_4; ?></li>
                        <li><?= var_dump($float_4); ?></li>
                    </ul>
                </div>
            </div>
            <div class="p-4 border-bottom">
                <h5>Tipe Data Boolean</h5>
                <div>
                    <ul>
                        <li><?= var_dump(true); ?></li>
                        <li><?= var_dump(false); ?></li>
                    </ul>
                </div>
            </div>
            <?php
            // Tipe Data String
            $string_1 = "Ibnu";
            $string_2 = "Jakaria";
            ?>
            <div class="p-4 border-bottom">
                <h5>Tipe Data String</h5>
                <div>
                    <ul>
                        <li>Nama Depan: <?= $string_1; ?></li>
                        <li>Nama Belakang: <?= $string_2; ?></li>
                        <li><?= $string_1 . ' ' . $string_2; ?></li>
                    </ul>
                </div>
            </div>