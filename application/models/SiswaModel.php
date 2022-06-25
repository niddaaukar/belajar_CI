<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class SiswaModel extends CI_Model
{
  // Fungsi untuk menampilkan semua data siswa
  public function view()
  {
    return $this->db->get('mahasiswa')->result();
  }

  // Fungsi untuk menampilkan data siswa berdasarkan nim nya
  public function view_by($nim)
  {
    $this->db->where('nim', $nim);
    return $this->db->get('mahasiswa')->row();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode)
  {
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, nim tidak harus divalidasi
    // Jadi nim di validasi hanya ketika menambah data siswa saja
    if ($mode == "save")

      $this->form_validation->set_rules('input_nim', 'nim', 'required|max_length[11]');
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('input_jenis_kelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('input_telp', 'telp', 'required|numeric|max_length[15]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');

    if ($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }

  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save()
  {
    $data = array(
      "nim" => $this->input->post('input_nim'),
      "nama" => $this->input->post('input_nama'),
      "tgl_lahir" => $this->input->post('input_tgl_lahir'),
      "jenis_kelamin" => $this->input->post('input_jenis_kelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );

    $this->db->insert('mahasiswa', $data); // Untuk mengeksekusi perintah insert data
  }

  // Fungsi untuk melakukan ubah data siswa berdasarkan nim siswa
  public function edit($nim)
  {
    $data = array(
      "nim" => $this->input->post('input_nim'),
      "nama" => $this->input->post('input_nama'),
      "tgl_lahir" => $this->input->post('input_tgl_lahir'),
      "jenis_kelamin" => $this->input->post('input_jenis_kelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );

    $this->db->where('nim', $nim);
    $this->db->update('mahasiswa', $data); // Untuk mengeksekusi perintah update data
  }

  // Fungsi untuk melakukan menghapus data siswa berdasarkan nim siswa
  public function delete($nim)
  {
    $this->db->where('nim', $nim);
    $this->db->delete('mahasiswa'); // Untuk mengeksekusi perintah delete data
  }
}
