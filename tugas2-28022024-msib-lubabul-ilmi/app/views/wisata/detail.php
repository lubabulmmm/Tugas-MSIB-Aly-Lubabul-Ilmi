<?php
class Wisata_model
{
    private $table = 'wisata';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllWisata()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getWisataById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function buatWisata($data)
    {
        $query = "INSERT INTO wisata VALUES ('', :wisata, :deskripsi, :alamat, :HTM )";
        $this->db->query($query);
        $this->db->bind('wisata', $data['wisata']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('HTM', $data['HTM']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusWisata($id)
    {
        $query = "DELETE FROM wisata WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();

    }

    public function ubahWisata($data)
    {
        $query = "UPDATE wisata SET wisata=:wisata, deskripsi=:deskripsi, alamat=:alamat, HTM=:HTM  WHERE id = :id     ";
        $this->db->query($query);
        $this->db->bind('wisata', $data['wisata']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('HTM', $data['HTM']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariDataWisata()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM wisata WHERE wisata LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultAll();
    }
}
