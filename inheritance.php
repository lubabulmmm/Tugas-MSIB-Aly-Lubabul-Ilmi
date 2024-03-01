<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-sm">
        <?php

        // Kelas induk (superclass) Mainan
        class Mainan
        {
            protected $nama;
            protected $harga;

            public function __construct($nama, $harga)
            {
                $this->nama = $nama;
                $this->harga = $harga;
            }

            public function getInfo()
            {
                return "Mainan: {$this->nama}, Harga: Rp " . number_format($this->harga, 0, ',', '.') . " ";
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

            public function getInfo()
            {
                return parent::getInfo() . "<br>Jenis: {$this->jenis}";
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

            public function getInfo()
            {
                return parent::getInfo() . "<br>Model: {$this->model}";
            }
        }

        // Membuat objek MainanMobil
        $mobil = new MainanMobil("Mobil Balap Ferrari", 1350000, "Remote Control");

        // Membuat objek Playstation
        $ps = new Playstation("Playstation 5", 6550000, "Slim");

        // Menampilkan informasi mainan
        echo '<div class="text-xl font-sm-bold mb-4">' . $mobil->getInfo() . '</div>';
        echo '<div class="text-xl font-sm-bold">' . $ps->getInfo() . '</div>';
        ?>
    </div>
</body>

</html>