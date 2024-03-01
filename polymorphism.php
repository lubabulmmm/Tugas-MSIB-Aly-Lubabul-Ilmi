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

        // Kelas induk (superclass) Makanan
        class Makanan
        {
            protected $nama;
            protected $jenis;

            public function __construct($nama, $jenis)
            {
                $this->nama = $nama;
                $this->jenis = $jenis;
            }

            public function kirim($tujuan)
            {
                return "Makanan {$this->nama} dikirim ke {$tujuan}";
            }
        }

        // Kelas anak (subclass) Restoran yang mewarisi sifat dari kelas Makanan
        class Restoran extends Makanan
        {
            private $namaRestoran;

            public function __construct($nama, $jenis, $namaRestoran)
            {
                parent::__construct($nama, $jenis);
                $this->namaRestoran = $namaRestoran;
            }

            // Polymorphism: Override metode kirim
            public function kirim($tujuan)
            {
                return parent::kirim($tujuan) . " (Restoran: {$this->namaRestoran})";
            }
        }

        // Kelas anak (subclass) Supermarket yang mewarisi sifat dari kelas Makanan
        class Supermarket extends Makanan
        {
            private $namaSupermarket;

            public function __construct($nama, $jenis, $namaSupermarket)
            {
                parent::__construct($nama, $jenis);
                $this->namaSupermarket = $namaSupermarket;
            }

            // Polymorphism: Override metode kirim
            public function kirim($tujuan)
            {
                return parent::kirim($tujuan) . " (Supermarket: {$this->namaSupermarket})";
            }
        }

        // Membuat objek Restoran
        $restoran = new Restoran("Nasi Goreng Sosis & Nasi Goreng Mawut", "Makanan Utama", "Restoran A");

        // Membuat objek Supermarket
        $supermarket = new Supermarket("Susu & Jajan Ringan", "Minuman", "Supermarket B");

        // Mengirim makanan ke restoran dan supermarket
        
        echo '<div class="text-xl font-sm-bold mb-4">' . $restoran->kirim("Restoran") . '</div>';
        echo '<div class="text-xl font-sm-bold">' . $supermarket->kirim("Supermarket") . '</div>';
        ?>
    </div>
</body>

</html>