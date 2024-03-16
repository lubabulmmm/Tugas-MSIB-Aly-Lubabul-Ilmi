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
            <img class="w-full" src="./assets/img/pbl_logo.png" alt="dashboard image">
            <!-- <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image"> -->
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Tentang PBL</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg">Pembelajaran berbasis proyek adalah metoda
                    pembelajaran yang menggunakan proyek/kegiatan sebagai media. Peserta didik melakukan eksplorasi,
                    penilaian, interpretasi, sintesis, dan informasi untuk menghasilkan berbagai bentuk hasil belajar.
                </p>
                <!-- <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Get started
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a> -->
            </div>
        </div>
    </section>

</body>

</html>



<!-- <div class=”container”>
        <div class="jumbotron mt-4">
            <h1 class="display-4">Halo, Selamat Datang !</h1>
            <p class="lead">Perkenalkan, saya
            <?= $data['nama']; ?>
            </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class=”btn btn-primary btn-lg” href=”#” role=”button”>Learn more</a>
        </div>
    </div> -->