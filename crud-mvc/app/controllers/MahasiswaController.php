<?php
require_once(__DIR__ . '/../models/Mahasiswa.php');

class MahasiswaController {
    public function index() {
        $mahasiswa = new Mahasiswa();
        $data = [
            'mahasiswa' => $mahasiswa->getAll(),
            'title' => 'Data Mahasiswa'
        ];
        $this->view('mahasiswa/index', $data);
    }

    public function create() {
        $data = ['title' => 'Tambah Mahasiswa'];
        $this->view('mahasiswa/create', $data);
    }

    public function store() {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->create([
            'nama' => $_POST['nama'],
            'nim' => $_POST['nim']
        ]);
        header("Location: index.php");
    }

    public function edit($id) {
        $mahasiswa = new Mahasiswa();
        $data = [
            'data' => $mahasiswa->find($id),
            'title' => 'Edit Mahasiswa'
        ];
        $this->view('mahasiswa/edit', $data);
    }

    public function update($id) {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->update($id, [
            'nama' => $_POST['nama'],
            'nim' => $_POST['nim']
        ]);
        header("Location: index.php");
    }

    public function confirmDelete($id) {
        $mahasiswa = new Mahasiswa();
        $data = [
            'data' => $mahasiswa->find($id),
            'title' => 'Konfirmasi Hapus'
        ];
        $this->view('mahasiswa/delete', $data);
    }

    public function destroy($id) {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->delete($id);
        header("Location: index.php");
    }

    private function view($path, $data = []) {
        extract($data);
        require __DIR__ . '/../views/' . $path . '.php';
    }
}
?>