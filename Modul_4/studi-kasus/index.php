<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Program penghitung Luas dan Keliling </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class=" bg-light">
    <main class="container-md px-0 border-start border-end min-vh-100 position-relative">
        </section>
        <section class="min-vh-100">
            <h4 class="p-4 my-0 border-bottom bg-white position-sticky top-0">Belajar PHP dengan Studi Kasus</h4>
            <?php
            // Persegi Panjang
            // Rumus Luas Persegi Panjang = p*l
            // Rumus Keliling Persegi Panjang = 2*(p+l)
            $p = 10;
            $l = 7;
            $luas_persegi_p = $p * $l;
            $keliling_persegi_p = 2 * ($p + $l);
            // Lingkaran
            // Rumus Luas Lingkaran = phi.r.r
            // Rumus Keliling Lingkaran = 2.phi.r
            $phi = 22 / 7;
            $r = 10;
            $luas_lingkaran = $phi * $r * $r;
            $keliling_lingkaran = 2 * $phi * $r;
            // Balok
            // Rumus Luas Balok = 2 × (pl + pt + lt)
            // Rumus Keliling Balok = 4 x (p + l + t)
            $p = 5;
            $l = 3;
            $t = 2;
            $luas_balok = 2 * (($p * $l) + ($p * $t) + ($l * $t));
            $keliling_balok = 4 * ($p + $l + $t);
            ?>
            <div class="p-4 border-bottom">
                <div>
                    <h5>Luas & Keliling Persegi Panjang</h5>
                    <em>Diketahui panjang = 10 dan lebar = 7 </em>
                </div>
                <div>
                    <ul>
                        <li>Luas = <?= $luas_persegi_p; ?></li>
                        <li>Keliling = <?= $keliling_persegi_p; ?></li>
                    </ul>
                </div>
            </div>
            <div class="p-4 border-bottom">
                <div>
                    <h5>Luas & Keliling Lingkaran</h5>
                    <em>Diketahui phi = 22/7 dan jari-jari = 10 </em>
                </div>
                <div>
                    <ul>
                        <li>Luas = <?= $luas_lingkaran; ?></li>
                        <li>Keliling = <?= $keliling_lingkaran; ?></li>
                    </ul>
                </div>
            </div>
            <div class="p-4">
                <div>
                    <h5>Luas & Keliling Balok</h5>
                    <em>Diketahui panjang = 5, lebar = 3 dan tinggi = 2 </em>
                </div>
                <div>
                    <ul>
                        <li>Luas = <?= $luas_balok; ?></li>
                        <li>Keliling = <?= $keliling_balok; ?></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</body>

</html>