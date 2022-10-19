<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Belajar Operator PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class=" bg-light">
    <main class="container-md px-0 border-start border-end min-vh-100 position-relative">
        <section>
            <h4 class="p-4 my-0 border-bottom bg-white position-sticky top-0">Belajar Operator PHP</h4>
            <?php
            // Operator Aritmatika
            $o_plus = 5 + 10;
            $o_min = 5 - 10;
            $o_kali = 5 * 10;
            $o_modulus = 5 / 10;
            $o_akar = 5 ** 10;
            ?>
            <div class="p-4 border-bottom">
                <h5>Operator Aritmatika</h5>
                <div>
                    <ul>
                        <li>5 + 10 = <?= $o_plus; ?></li>
                        <li>5 - 10 = <?= $o_min; ?></li>
                        <li>5 * 10 = <?= $o_kali; ?></li>
                        <li>5 % 10 = <?= $o_modulus; ?></li>
                        <li>5 ** 10 = <?= $o_akar; ?></li>
                        <li> -a = <?= $o_min; ?></li>
                    </ul>
                </div>
            </div>
            <?php
            // Operator Penugasan
            $penugasan = 10;
            $p_plus = $penugasan += 5;
            $p_minus = $penugasan -= 20;
            $p_devide = $penugasan /= 20;
            $p_multiply = $penugasan *= 200;
            ?>
            <div class="p-4 border-bottom">
                <h5>Operator Penugasan</h5>
                <div>
                    <ul>
                        <li><?= var_dump($p_plus); ?></li>
                        <li><?= var_dump($p_minus); ?></li>
                        <li><?= var_dump($p_devide); ?></li>
                        <li><?= var_dump($p_multiply); ?></li>
                    </ul>
                </div>
            </div>
            <div class="p-4 border-bottom">
                <h5>Operator Perbandingan</h5>
                <div>
                    <ul>
                        <li>90 > 80 <span> = </span><?= var_dump(90 > 80); ?></li>
                        <li>3 >= 3 <span> = </span><?= var_dump(3 >= 3); ?></li>
                        <li>3 < 6 <span> = </span><?= var_dump(3 < 6); ?></li>
                        <li>5 <= 3 <span> = </span><?= var_dump(5 <= 3); ?></li>
                        <li>'a' < 'b' <span> = </span><?= var_dump('a' < 'b'); ?></li>
                        <li>'abc' < 'b' <span> = </span><?= var_dump('abc' < 'b'); ?></li>
                    </ul>
                </div>
            </div>
            <div class="p-4 border-bottom">
                <h5>Operator Perbandingan Equal dan Identik</h5>
                <div>
                    <ul>
                        <li><?= var_dump(2 === 2); ?></li>
                        <li><?= var_dump(2 === '2') ?></li>
                    </ul>
                </div>
            </div>