<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman
        <?= $data['judul']; ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="sticky border-gray-200 top-0 l-0 w-full bg-gray-950 z-50">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="mMenu relative inline-flex items-center justify-center rounded-md p-2 text-amber-500 hover:bg-amber-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>


                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">


                    <a href="<?= BASE_URL; ?>" class="flex items-center space-x-3 rtl:space-x-reverse">

                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Pariwisata
                            Batu</span>
                    </a>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="<?= BASE_URL; ?>"
                                class="rounded-md px-3 py-2 text-md text-white font-medium hover:text-amber-500 z-50">Home
                                <span class="sr-only">(current)</span></a>
                            <!-- <a href="../index.php/#tentang" class=" hover:text-amber-500 z-50 rounded-md px-3 py-2 text-md font-medium">Tentang</a> -->
                            <a href="<?= BASE_URL; ?>/wisata"
                                class="bg-amber-500 text-white rounded-md px-3 py-2 text-md font-medium">Data
                                Wisata</a>
                        </div>
                    </div>

                </div>




    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="../js/script.js"></script>