<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman
        <?= $data['judul']; ?>
    </title>
</head>

<body class="bg-gray-900">


    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Wisata Kota Batu</h1>
                <p class="max-w-2xl mb-4 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Kota
                    Batu adalah sebuah kota wisata di Provinsi Jawa Timur, Indonesia. Kota ini terletak 90 km
                    sebelah barat
                    daya Surabaya atau 15 km sebelah barat laut Malang. Kota Batu berada di jalur yang menghubungkan
                    Malang-Kediri dan Jombang. Kota Batu berbatasan dengan Kabupaten Mojokerto dan Kabupaten Pasuruan di
                    sebelah utara serta dengan Kabupaten Malang di sebelah timur, selatan, dan barat. Wilayah kota ini
                    berada di ketinggian 800-2.000 meter dan ketinggian rata-rata yaitu 980 meter di atas permukaan
                    laut dengan suhu udara rata-rata mencapai 11-19 derajat Celsius.</p>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="<?= BASE_URL; ?>/img/batu.png" alt="mockup">
            </div>
        </div>
    </section>

    <section class="bg-grey-900">
        <div section id="tentang"
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full" src="<?= BASE_URL; ?>/img/batu1.png" alt="dashboard image">
            <!-- <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image"> -->
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Kota Batu</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg">Batu dikenal sebagai salah satu kota wisata
                    terkemuka di Indonesia, karena potensi keindahan alam yang luar biasa. Kekaguman bangsa Belanda
                    terhadap keindahan dan keelokan alam Batu membuat wilayah kota Batu disejajarkan dengan sebuah
                    negara di Eropa yaitu Swiss dan dijuluki sebagai De Kleine Zwitserland atau Swiss Kecil di Pulau
                    Jawa Bersama dengan Kota Malang dan Kabupaten Malang, Kota Batu merupakan bagian dari kesatuan
                    wilayah yang dikenal dengan Malang Raya.
                </p>

            </div>
        </div>
    </section>

</body>

</html>