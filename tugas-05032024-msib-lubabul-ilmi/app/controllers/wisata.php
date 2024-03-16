<?php
class wisata extends Controller
{
    public function index()
    {
        $data['judul'] = "Wisata";
        $data['wisata'] = $this->model("Wisata_model")->getAllWisata();
        $this->view('templates/header', $data);
        $this->view('wisata/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail Wisata";
        $data['wisata'] = $this->model("Wisata_model")->getWisataById($id);
        $this->view('templates/header', $data);
        $this->view('wisata/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Wisata_model')->buatWisata($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/wisata');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASE_URL . '/wisata');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('Wisata_model')->hapusWisata($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/wisata');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' . BASE_URL . '/wisata');
            exit;
        }
    }
    public function getubah()
    {
        $data['wisata'] = $this->model('Wisata_model')->getWisataById($_POST['id']);
    }

    public function ubah()
    {
        if ($this->model('Wisata_model')->ubahWisata($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/wisata');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('location: ' . BASE_URL . '/wisata');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Wisata';
        $data['wisata'] = $this->model('Wisata_model')->cariDataWisata();
        $this->view('templates/header', $data);
        $this->view('wisata/index', $data);
        $this->view('templates/footer');
    }
}
