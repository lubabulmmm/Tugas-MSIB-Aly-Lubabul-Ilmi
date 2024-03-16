<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman
        <?= $data['judul']; ?>
    </title>
</head>

<body class="bg-gray-900">


    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <img class="h-auto max-w-lg mx-auto" src="<?= BASE_URL; ?>/img/batu.png" alt="image description">






        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">

            <form class="max-w-sm mx-auto">
                <div class="mb-5">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Wisata</label>
                    <input type="text" aria-label="large-input"
                        class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="<?= $data['wisata']['wisata']; ?>" required></input>
                </div>
                <div class="mb-5">
                    <label for="large-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <input type="text" aria-label="large-input"
                        class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="<?= $data['wisata']['deskripsi']; ?>" required></input>
                </div>
                <div class="mb-5">
                    <label for="large-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" aria-label="large-input"
                        class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="<?= $data['wisata']['alamat']; ?>" required></input>
                </div>
                <div class="mb-5">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                        Masuk</label>
                    <input type="text" aria-label="large-input"
                        class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="<?= $data['wisata']['HTM']; ?>" required></input>
                </div>
                <a href="<?= BASE_URL; ?>/wisata" type="button"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-500 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-red-400">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 5H1m0 0 4 4M1 5l4-4" />
                    Kembali
                </a>
                <a href="<?= BASE_URL; ?>/wisata/ubah" type="button"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-yellow-400">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 5H1m0 0 4 4M1 5l4-4" />
                    Ubah
                </a>

            </form>

</body>

</html>