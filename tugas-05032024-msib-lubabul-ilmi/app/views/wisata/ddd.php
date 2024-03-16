<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Buat Artikel
                </button>
                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="judulModal">Buat Artikel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= BASE_URL; ?>/blog/tambah" method="post">
                                    <div class="form-group">
                                        <label for="judul">Judul Artikel</label>
                                        <input type="text" class="form-control" id="judul" name="judul" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="tulisan">Isi Artikel</label>
                                        <textarea class="form-control" id="tulisan" rows="5" name="tulisan"
                                            required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="penulis">Nama Penulis</label>
                                        <input type="text" class="form-control" id="penulis" name="penulis" required="">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Artikel</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <h3 class="mt-4">Blog</h3>
                <ul class="list-group">
                    <?php foreach ($data['blog'] as $blog): ?>
                        <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                            <?= $blog['judul']; ?>
                            <a href=" <?= BASE_URL; ?>/blog/detail/<?= $blog['id']; ?>" class="badge badge-primary">
                                baca</a>
                        </li>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>



    <button data-modal-target="popup-modal-delete-<?= $blog['id']; ?>"
        data-modal-toggle="popup-modal-delete-<?= $blog['id']; ?>" type="button"
        class="text-red-700 border-2 border-red-700 hover:bg-red-700 hover:text-white ml-2 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">

        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
        </svg>
        <span class="sr-only">Icon Trash</span>
    </button>
    <div id="popup-modal-delete-<?= $blog['id']; ?>" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="popup-modal-delete-<?= $blog['id']; ?>">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-red-600 w-12 h-12" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-md font-normal text-gray-500 dark:text-gray-400">
                        Apakah kamu yakin menghapus <span class="font-medium">
                            <?= $blog['judul'] ?>
                        </span> ?</h3>
                    <a href=" <?= BASE_URL; ?>/blog/hapus/<?= $blog['id']; ?>" type="button"
                        class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2 text-center me-2">
                        Ya, saya yakin
                    </a>
                    <button data-modal-hide="popup-modal-delete-<?= $blog['id']; ?>" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2 hover:text-gray-900 focus:z-10">Batal</button>
                </div>
            </div>
        </div>
    </div>