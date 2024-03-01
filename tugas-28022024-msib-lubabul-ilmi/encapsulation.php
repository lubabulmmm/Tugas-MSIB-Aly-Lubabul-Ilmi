<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black min-h-screen flex items-center justify-center">
    <div class="bg-white p-10 y-20 rounded shadow-md max-w-sm">

        <?php

        // Kelas induk (superclass) Mainan
        class Mainan
        {
            private $nama;
            private $harga;

            public function __construct($nama, $harga)
            {
                $this->nama = $nama;
                $this->harga = $harga;
            }

            // Metode getter untuk mendapatkan nama mainan
            public function getNama()
            {
                return $this->nama;
            }

            // Metode getter untuk mendapatkan harga mainan
            public function getHarga()
            {
                return $this->harga;
            }
        }

        // Kelas anak (subclass) MainanMobil yang mewarisi sifat dari kelas Mainan
        class MainanMobil extends Mainan
        {
            private $jenis;

            public function __construct($nama, $harga, $jenis)
            {
                parent::__construct($nama, $harga);
                $this->jenis = $jenis;
            }

            // Override metode getter untuk mendapatkan informasi mainan mobil
            public function getInfo()
            {
                return "Mainan: " . parent::getNama() . ", Harga: " . parent::getHarga() . ", Jenis: {$this->jenis}";
            }
        }

        // Kelas anak (subclass) Playstation yang mewarisi sifat dari kelas Mainan
        class Playstation extends Mainan
        {
            private $model;

            public function __construct($nama, $harga, $model)
            {
                parent::__construct($nama, $harga);
                $this->model = $model;
            }

            // Override metode getter untuk mendapatkan informasi playstation
            public function getInfo()
            {
                return "Mainan: " . parent::getNama() . ", Harga: " . parent::getHarga() . ", Model: {$this->model}";
            }
        }

        // Membuat objek MainanMobil
        $mobil = new MainanMobil("Mainan Mobil Hulk", 200000, "Remote Control");

        // Membuat objek Playstation
        $ps = new Playstation("Playstation 4", 4500000, "Fat");

        // Menampilkan informasi mainan    
        echo '<div class="text-xl font-sm-bold mb-4">' . $mobil->getInfo() . '</div>';
        echo '<div class="text-xl font-sm-bold">' . $ps->getInfo() . '</div>';
        ?>
    </div>
</body>

</html>