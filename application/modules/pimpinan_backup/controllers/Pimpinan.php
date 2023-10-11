<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Dompdf\Dompdf;

require_once APPPATH . 'third_party/dompdf/autoload.inc.php';
class Pimpinan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('login/auth');
        };

        $role = $this->session->userdata('role');

        // var_dump($login->gambar);die;

        $this->load->library('terbilang');

    }
    public function index()
    {
        $id = $this->session->userdata('id');
        $akses = $this->db->query("Select * from users where id ='$id' ")->row();

        var_dump($akses);die;

        $data = [
            'gambar_profile' => $akses->gambar,
        ];
        $this->load->view('v_dashboard', $data);
    }

    public function myprofile()
    {
        $id = $this->session->userdata('id');
        $akses = $this->db->query("Select * from users where id ='$id' ")->row();
        $jabatan = $this->db->query("Select * from jabatan")->result();
        $data = [
            'title' => 'Data Profile',
            'akses' => $akses,
            'jabatan' => $jabatan,
            'gambar_profile' => $akses->gambar,

        ];
        $this->load->view('v_profile', $data);
    }

    public function update_profile()
    {
        // Mendapatkan ID akses dari sesi
        $id = $this->session->userdata('id');

        // Memperbarui profil pengguna berdasarkan ID
        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nip' => $this->input->post('nip'),
            'jabatan' => $this->input->post('jabatan'),
            'nohp' => $this->input->post('nohp'),
            'email' => $this->input->post('email'),
        );
        $this->db->where('id', $id);
        $this->db->update('users', $data);

        $this->session->set_flashdata('sweet_success', 'Profile berhasil disimpan...');
        redirect('petugas/myprofile');
    }
    public function update_password()
    {

        $password_lama = md5($this->input->post('password_lama'));
        $password_baru = $this->input->post('password_baru');

        $id = $this->session->userdata('id');

        $cek = $this->db->query("select * from users where id = '$id' and password = '$password_lama'")->num_rows();

        if ($cek < 1) {
            # code...
            $this->session->set_flashdata('sweet_error', 'Password lama tidak sesuai, Password Gagal diperbaraui.');
            redirect('petugas/myprofile');

        }

        $data = array(
            'password' => md5($password_baru),
        );

        $this->db->where('id', $id);
        $this->db->update('users', $data);

        // Lakukan pembaruan password di sini (misalnya dengan model atau library yang sesuai)

        // Tampilkan pesan sukses dan arahkan pengguna ke halaman lain
        $this->session->set_flashdata('sweet_success', 'Password berhasil diperbarui.');
        redirect('petugas/myprofile');
    }

    public function uploadProfilePicture()
    {
        // Mendapatkan ID akses dari objek $akses
        $id = $this->session->userdata('id');
        $akses = $this->db->query("SELECT * FROM users WHERE id ='$id' ")->row();
        $foto_lama = $akses->gambar;

        // Konfigurasi upload gambar
        $config['upload_path'] = './assets/profile/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $id;

        // Memuat library upload CodeIgniter
        $this->load->library('upload', $config);

        // Memeriksa apakah unggahan berhasil
        if ($this->upload->do_upload('photo')) {
            // Mendapatkan data unggahan gambar
            $data = $this->upload->data();

            // Dapatkan nama file gambar
            $filename = $data['file_name'];

            // Menghapus foto lama jika ada
            if (!empty($foto_lama)) {
                $old_file = './assets/profile/' . $foto_lama;
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
            }

            // Simpan nama file gambar ke dalam database
            $data = array(
                'gambar' => $filename,
            );
            $this->db->where('id', $id);
            $this->db->update('users', $data);

            // Tampilkan pesan sukses
            $this->session->set_flashdata('sweet_success', 'Foto berhasil disimpan...');
            redirect('petugas/myprofile');
        } else {
            // Jika unggahan gagal, tampilkan pesan error
            $this->session->set_flashdata('sweet_error', 'Foto Gagal diubah...');
            redirect('petugas/myprofile');
        }
    }

    public function karyawan()
    {

        // var_dump($gambar_profile);die;
        $list = $this->db->query("Select * from users")->result();
        $jabatan = $this->db->query("Select * from jabatan")->result();

        $id = $this->session->userdata('id');
        $akses = $this->db->query("Select * from users where id ='$id' ")->row();

        $data = [
            'title' => 'Data Karyawan',
            'list' => $list,
            'jabatan' => $jabatan,
            'gambar_profile' => $akses->gambar,

        ];
        $this->load->view('v_karyawan', $data);
    }

    public function jabatan()
    {
        $list = $this->db->query("Select * from jabatan")->result();

        $id = $this->session->userdata('id');
        $akses = $this->db->query("Select * from users where id ='$id' ")->row();

        $data = [
            'title' => 'Data Jabatan',
            'list' => $list,
            'gambar_profile' => $akses->gambar,

        ];
        $this->load->view('v_jabatan', $data);
    }

    public function add_jabatan()
    {
        $nama_jabatan = $this->input->post('nama_jabatan');

        $data = [
            'nama_jabatan' => $nama_jabatan,

        ];
        $this->db->insert('jabatan', $data);
        $this->session->set_flashdata('sweet_success', 'Data berhasil disimpan...');
        redirect('petugas/jabatan');

    }

    public function add_karyawan()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $nip = $this->input->post('nip');
        $jabatan = $this->input->post('jabatan');

        $data = [
            'nama_lengkap' => $nama_lengkap,
            'nip' => $nip,
            'jabatan' => $jabatan,
            'password' => md5(12345),
            'role' => 1,

        ];
        $this->db->insert('users', $data);
        $this->session->set_flashdata('sweet_success', 'Data berhasil disimpan...');
        redirect('petugas/karyawan');

    }

    public function edit_karyawan()
    {
        // Mendapatkan data yang dikirimkan melalui form
        $nama_lengkap = $this->input->post('nama_lengkap');
        $nip = $this->input->post('nip');
        $jabatan = $this->input->post('jabatan');
        $id = $this->input->post('id');

        // Membuat array data yang akan diupdate
        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'nip' => $nip,
            'jabatan' => $jabatan,
            'role' => 1,

        );
        $this->db->where('id', $id);

        // Memanggil method pada model untuk melakukan update data
        $result = $this->db->update('users', $data);

        if ($result) {
            $this->session->set_flashdata('sweet_success', 'Data berhasil diupdate...');
            redirect('petugas/karyawan');
        } else {
            $this->session->set_flashdata('sweet_error', 'Data Gagal diubah...');
            redirect('petugas/karyawan');
        }
    }
    public function reset_karyawan()
    {
        // Periksa apakah permintaan datang dengan metode POST
        if ($this->input->method() == 'post') {
            $id = $this->input->post('id');
            // Jalankan pernyataan SQL DELETE

            $data = array(
                'password' => md5(12345),
            );
            $this->db->where('id', $id);
            $result = $this->db->update('users', $data);

            // var_dump($result);die();

            if ($result) {
                // Jika penghapusan berhasil
                echo 'success';
            } else {
                // Jika terjadi kesalahan saat menghapus
                echo 'error';
            }
        }
    }

    public function hapus_karyawan()
    {
        // Periksa apakah permintaan datang dengan metode POST
        if ($this->input->method() == 'post') {
            $id = $this->input->post('id');
            // Jalankan pernyataan SQL DELETE
            $this->db->where('id', $id);
            $result = $this->db->delete('users');

            // var_dump($result);die();

            if ($result) {
                // Jika penghapusan berhasil
                echo 'success';
            } else {
                // Jika terjadi kesalahan saat menghapus
                echo 'error';
            }
        }
    }

    public function hapus_jabatan()
    {
        // Periksa apakah permintaan datang dengan metode POST
        if ($this->input->method() == 'post') {
            $id = $this->input->post('id');
            // Jalankan pernyataan SQL DELETE
            $this->db->where('idjabatan', $id);
            $result = $this->db->delete('jabatan');

            // var_dump($result);die();

            if ($result) {
                // Jika penghapusan berhasil
                echo 'success';
            } else {
                // Jika terjadi kesalahan saat menghapus
                echo 'error';
            }
        }
    }

    public function pengajuan()
    {
        $list = $this->db->query("Select * from v_ajuan_status order by id_ajuan DESC ")->result();
        $jabatan = $this->db->query("Select * from jabatan")->result();

        $id = $this->session->userdata('id');
        $akses = $this->db->query("Select * from users where id ='$id' ")->row();

        $data = [
            'title' => 'Data Pengajuan',
            'list' => $list,
            'jabatan' => $jabatan,
            'gambar_profile' => $akses->gambar,

        ];
        $this->load->view('v_acara', $data);
    }

    public function add_ajuan()
    {
        // Mengambil data dari form
        $nomor_surat = $this->input->post('nomor_surat');
        $tgl = $this->input->post('tgl');

        $id = $this->session->userdata('id');
        $nama_lengkap = $this->session->userdata('nama_lengkap');

        // Menyiapkan data untuk disimpan ke database
        $data = array(
            'nomor_surat' => $nomor_surat,
            'tgl' => $tgl,

            'id_user' => $id,
            'nama_user' => $nama_lengkap,
            'keterangan' => $this->terbilang->getCustomFormattedDate($tgl),
            'created_at' => date('Y-m-d H:i:s'),
        );

        // Menyimpan data ke tabel 'ajuan' dalam database
        $result = $this->db->insert('ajuan', $data);

        if ($result) {
            $this->session->set_flashdata('sweet_success', 'Data berhasil disimpan...');
            redirect('petugas/pengajuan');
        } else {
            $this->session->set_flashdata('sweet_error', 'Data Gagal diubah...');
            redirect('petugas/pengajuan');
        }
    }

    public function edit_ajuan($id_ajuan)
    {
        // Mendapatkan data dari form edit
        $nomor_surat = $this->input->post('nomor_surat');
        $tgl = $this->input->post('tgl');

        // Lakukan proses pengeditan data di database sesuai dengan $id_ajuan
        // ...

        $data = array(
            'nomor_surat' => $nomor_surat,
            'tgl' => $tgl,
            'keterangan' => $this->terbilang->getCustomFormattedDate($tgl),
            'updated_at' => date('Y-m-d H:i:s'),
        );

        $this->db->where('id_ajuan', $id_ajuan);

        // Memanggil method pada model untuk melakukan update data
        $result = $this->db->update('ajuan', $data);

        // Setelah proses pengeditan selesai, redirect ke halaman yang diinginkan
        if ($result) {
            $this->session->set_flashdata('sweet_success', 'Data berhasil diupdate...');
            redirect('petugas/pengajuan');
        } else {
            $this->session->set_flashdata('sweet_error', 'Data Gagal diubah...');
            redirect('petugas/pengajuan');
        }
    }

    public function hapus_ajuan()
    {
        // Periksa apakah permintaan datang dengan metode POST
        if ($this->input->method() == 'post') {
            $id = $this->input->post('id');
            // Jalankan pernyataan SQL DELETE
            $this->db->where('id_ajuan', $id);
            $result = $this->db->delete('ajuan');

            // var_dump($result);die();

            if ($result) {
                // Jika penghapusan berhasil
                echo 'success';
            } else {
                // Jika terjadi kesalahan saat menghapus
                echo 'error';
            }
        }
    }

    public function detail_ajuan()
    {
        error_reporting(0);
        $d = $this->input->get('d');
        $s = $this->input->get('s');
        $list = $this->db->query("select * from ajuan where id_ajuan = '$d'")->row();
        $step1 = $this->db->query("select * from step1_ajuan where id_ajuan = '$d'")->row();
        $jabatan = $this->db->query("Select * from jabatan")->result();
        $users = $this->db->query("Select * from users")->result();

        if (hash('sha256', $list->created_at) == $s) {
            $data = [
                'title' => 'Data Pengajuan',
                'list' => $list,
                'step1' => $step1,
                'jabatan' => $jabatan,
                'users' => $users,
                'gambar_profile' => $this->akses->gambar,

            ];
            $this->load->view('acara/v_pengajuan', $data);
        } else {
            $this->session->set_flashdata('sweet_error', 'Mohon maaf data yang anda maksud tidak tersedia...');
            redirect('petugas/pengajuan');
        }

    }

    public function simpan_step1()
    {
        $id_ajuan = $this->input->post('id_ajuan'); // Ambil data dari formulir
        $hash = $this->input->post('hash'); // Ambil data dari formulir
        $data = array(
            'nama1' => $this->input->post('nama1'),
            'id_ajuan' => $id_ajuan,
            'nip1' => $this->input->post('nip1'),
            'jabatan1' => $this->input->post('jabatan1'),
            'nama2' => $this->input->post('nama2'),
            'nip2' => $this->input->post('nip2'),
            'jabatan2' => $this->input->post('jabatan2'),
            'bulan' => $this->input->post('bulan'),
            'tahun' => $this->input->post('tahun'),
            'created_at' => date('Y-m-d H:i:s'),
        );
        $step1 = $this->db->query("SELECT * FROM step1_ajuan WHERE id_ajuan = '$id_ajuan'")->num_rows();

        if ($step1 > 0) {
            $this->db->where('id_ajuan', $id_ajuan);
            $result = $this->db->update('step1_ajuan', $data);
        } else {
            $result = $this->db->insert('step1_ajuan', $data);
        }

        if ($result) {
            $this->session->set_flashdata('sweet_success', 'Data berhasil disimpan...');
            redirect('petugas/detail_ajuan?d=' . $id_ajuan . '&s=' . $hash);
        } else {
            $this->session->set_flashdata('sweet_error', 'Data Gagal diubah...');
            redirect('petugas/detail_ajuan?d=' . $id_ajuan . '&s=' . $hash);
        }
    }

    public function detail_belanja()
    {
        error_reporting(0);
        $d = $this->input->get('d');
        $s = $this->input->get('s');
        $list = $this->db->query("select * from ajuan where id_ajuan = '$d'")->row();
        $step2 = $this->db->query("select * from step2_belanja where id_ajuan = '$d'")->row();

        if (hash('sha256', $list->created_at) == $s) {
            $data = [
                'title' => 'Data Belanja (PEMENDAGRI)',
                'list' => $list,
                'step2' => $step2,
                'gambar_profile' => $this->akses->gambar,

            ];
            $this->load->view('acara/v_belanja', $data);
        } else {
            $this->session->set_flashdata('sweet_error', 'Mohon maaf data yang anda maksud tidak tersedia...');
            redirect('petugas/pengajuan');
        }

    }

    public function simpan_step2()
    {
        $id_ajuan = $this->input->post('id_ajuan'); // Ambil data dari formulir
        $hash = $this->input->post('hash'); // Ambil data dari formulir
        // Ambil data yang dikirimkan melalui form
        $saldo_awal = $this->input->post('saldo_awal');

        // var_dump($saldo_awal);die;
        $belanja_operasi = $this->input->post('belanja_operasi');
        $belanja_modal = $this->input->post('belanja_modal');
        $belanja_terduga = $this->input->post('belanja_terduga');
        $belanja_transfer = $this->input->post('belanja_transfer');
        $total_pengeluaran = $this->input->post('total_pengeluaran');

        // Buat array data yang akan disimpan ke dalam database
        $data = array(
            'id_ajuan' => $id_ajuan,
            'saldo_awal' => $saldo_awal,
            'belanja_operasi' => $belanja_operasi,
            'belanja_modal' => $belanja_modal,
            'belanja_terduga' => $belanja_terduga,
            'belanja_transfer' => $belanja_transfer,
            'total_pengeluaran' => $total_pengeluaran,
            'created_at' => date('Y-m-d H:i:s'),
        );
        $step2 = $this->db->query("SELECT * FROM step2_belanja WHERE id_ajuan = '$id_ajuan'")->num_rows();
        if ($step2 > 0) {
            $this->db->where('id_ajuan', $id_ajuan);
            $result = $this->db->update('step2_belanja', $data);
        } else {
            $result = $this->db->insert('step2_belanja', $data);
        }

        // Setelah penyimpanan berhasil, lakukan redirect ke halaman lain
        if ($result) {
            $this->session->set_flashdata('sweet_success', 'Data berhasil disimpan...');
            redirect('petugas/detail_belanja?d=' . $id_ajuan . '&s=' . $hash);
        } else {
            $this->session->set_flashdata('sweet_error', 'Data Gagal diubah...');
            redirect('petugas/detail_belanja?d=' . $id_ajuan . '&s=' . $hash);
        }
    }

    public function detail_pengeluaran()
    {
        error_reporting(0);
        $d = $this->input->get('d');
        $s = $this->input->get('s');
        $list = $this->db->query("select * from ajuan where id_ajuan = '$d'")->row();
        $step3 = $this->db->query("select * from step3_pengeluaran where id_ajuan = '$d'")->row();

        if (hash('sha256', $list->created_at) == $s) {
            $data = [
                'title' => 'Data BKU Pengeluaran',
                'list' => $list,
                'step3' => $step3,
                'gambar_profile' => $this->akses->gambar,

            ];
            $this->load->view('acara/v_bku_pengeluaran', $data);
        } else {
            $this->session->set_flashdata('sweet_error', 'Mohon maaf data yang anda maksud tidak tersedia...');
            redirect('petugas/pengajuan');
        }

    }

    public function detail_bendahara()
    {
        error_reporting(0);
        $d = $this->input->get('d');
        $s = $this->input->get('s');
        $list = $this->db->query("select * from ajuan where id_ajuan = '$d'")->row();
        $step4 = $this->db->query("select * from step4_bendahara where id_ajuan = '$d'")->row();

        if (hash('sha256', $list->created_at) == $s) {
            $data = [
                'title' => 'Data BKU Pengeluaran',
                'list' => $list,
                'step4' => $step4,
                'gambar_profile' => $this->akses->gambar,

            ];
            $this->load->view('acara/v_bendahara', $data);
        } else {
            $this->session->set_flashdata('sweet_error', 'Mohon maaf data yang anda maksud tidak tersedia...');
            redirect('petugas/pengajuan');
        }

    }

    public function simpan_step3()
    {

        $id_ajuan = $this->input->post('id_ajuan'); // Ambil data dari formulir
        $hash = $this->input->post('hash'); // Ambil data dari formulir
        $data = array(
            'id_ajuan' => $id_ajuan,
            'saldo_awal' => $this->input->post('saldo_awal'),
            'penerimaan_sp2d' => $this->input->post('penerimaan_sp2d'),
            'bku' => $this->input->post('bku'),
            'lra' => $this->input->post('lra'),
            'selisih' => $this->input->post('selisih'),
            'gu_bku' => $this->input->post('gu_bku'),
            'bku_gu' => $this->input->post('bku_gu'),
            'dana_desa' => $this->input->post('dana_desa'),
            'spj' => $this->input->post('spj'),
            'lebih_pajak' => $this->input->post('lebih_pajak'),
            'pajak_setor' => $this->input->post('pajak_setor'),
            'penerima_pajak' => $this->input->post('penerima_pajak'),
            'penyetor_pajak' => $this->input->post('penyetor_pajak'),
            'pengembalian' => $this->input->post('pengembalian'),
        );

        // Lakukan penyimpanan data ke database
        $step3 = $this->db->query("SELECT * FROM step3_pengeluaran WHERE id_ajuan = '$id_ajuan'")->num_rows();
        if ($step3 > 0) {
            $this->db->where('id_ajuan', $id_ajuan);
            $result = $this->db->update('step3_pengeluaran', $data);
        } else {
            $result = $this->db->insert('step3_pengeluaran', $data);
        }

        // Setelah penyimpanan berhasil, lakukan redirect ke halaman lain
        if ($result) {
            $this->session->set_flashdata('sweet_success', 'Data berhasil disimpan...');
            redirect('petugas/detail_pengeluaran?d=' . $id_ajuan . '&s=' . $hash);
        } else {
            $this->session->set_flashdata('sweet_error', 'Data Gagal diubah...');
            redirect('petugas/detail_pengeluaran?d=' . $id_ajuan . '&s=' . $hash);
        }
    }

    public function simpan_step4()
    {
        // Validasi input jika diperlukan
        $id_ajuan = $this->input->post('id_ajuan'); // Ambil data dari formulir
        $hash = $this->input->post('hash'); // Ambil data dari formulir
        // Ambil data dari input form
        $saldo_kas = $this->input->post('saldo_kas');
        $saldo_bank = $this->input->post('saldo_bank');
        $saldo_tunai = $this->input->post('saldo_tunai');
        $total_saldo = $this->input->post('total_saldo');
        $selisih_saldo = $this->input->post('selisih_saldo');
        $kurang_lembur = $this->input->post('kurang_lembur');

        // Simpan data ke database
        $data = array(
            'id_ajuan' => $id_ajuan,
            'saldo_kas' => $saldo_kas,
            'saldo_bank' => $saldo_bank,
            'saldo_tunai' => $saldo_tunai,
            'total_saldo' => $total_saldo,
            'selisih_saldo' => $selisih_saldo,
            'kurang_lembur' => $kurang_lembur,
        );

        $step4 = $this->db->query("SELECT * FROM step4_bendahara WHERE id_ajuan = '$id_ajuan'")->num_rows();
        if ($step4 > 0) {
            $this->db->where('id_ajuan', $id_ajuan);
            $result = $this->db->update('step4_bendahara', $data);
        } else {
            $result = $this->db->insert('step4_bendahara', $data);
        }

        // Setelah penyimpanan berhasil, lakukan redirect ke halaman lain
        if ($result) {
            $this->session->set_flashdata('sweet_success', 'Data berhasil disimpan...');
            redirect('petugas/detail_bendahara?d=' . $id_ajuan . '&s=' . $hash);
        } else {
            $this->session->set_flashdata('sweet_error', 'Data Gagal diubah...');
            redirect('petugas/detail_bendahara?d=' . $id_ajuan . '&s=' . $hash);
        }
    }

    public function detail_pimpinan()
    {
        error_reporting(0);
        $d = $this->input->get('d');
        $s = $this->input->get('s');
        $list = $this->db->query("select * from ajuan where id_ajuan = '$d'")->row();
        $step2 = $this->db->query("select * from step2_belanja where id_ajuan = '$d'")->row();
        $ajuan = $this->db->query("select * from step1_ajuan where  id_ajuan = '$d'")->row();

        if (hash('sha256', $list->created_at) == $s) {
            $data = [
                'title' => 'Data BKU Pengeluaran',
                'list' => $list,
                'step2' => $step2,
                'ajuan' => $ajuan,
                'gambar_profile' => $this->akses->gambar,

            ];
            $this->load->view('acara/v_ttd', $data);
        } else {
            $this->session->set_flashdata('sweet_error', 'Mohon maaf data yang anda maksud tidak tersedia...');
            redirect('petugas/pengajuan');
        }

    }

    public function simpan_ttd1()
    {
        $id_ajuan = $this->input->post('id_ajuan');
        $hash = $this->input->post('hash');

        // Simpan gambar tanda tangan Pihak Pertama ke server
        $gambar_ttd = $this->input->post('ttd'); // Ambil data gambar dari form

        if ($gambar_ttd) {
            // Lakukan operasi penyimpanan gambar tanda tangan
            $file_path = 'assets/ttd_digital/' . $id_ajuan . '_ttd1.png'; // Path file tujuan penyimpanan
            $is_saved = file_put_contents($file_path, base64_decode(str_replace('data:image/png;base64,', '', $gambar_ttd)));

            if ($is_saved) {
                // Update data di tabel step1_ajuan
                $data = array(
                    'ttd_1' => $file_path, // Simpan path file tanda tangan
                    'updated_at' => date('Y-m-d H:i:s'),
                );
                $this->db->where('id_ajuan', $id_ajuan);
                $this->db->update('step1_ajuan', $data);

                // Berikan respon ke klien
                $response = array(
                    'status' => 'success',
                    'message' => 'Tanda tangan Pihak Pertama berhasil disimpan.',
                );
            } else {
                // Jika gagal menyimpan gambar tanda tangan
                $response = array(
                    'status' => 'error',
                    'message' => 'Gagal menyimpan gambar tanda tangan Pihak Pertama.',
                );
            }
        } else {
            // Jika gambar tanda tangan kosong
            $response = array(
                'status' => 'error',
                'message' => 'Gambar tanda tangan Pihak Pertama tidak ditemukan.',
            );
        }

        echo json_encode($response);
    }

    public function simpan_ttd2()
    {
        $id_ajuan = $this->input->post('id_ajuan');
        $hash = $this->input->post('hash');

        // Simpan gambar tanda tangan Pihak Pertama ke server
        $gambar_ttd = $this->input->post('ttd'); // Ambil data gambar dari form

        if ($gambar_ttd) {
            // Lakukan operasi penyimpanan gambar tanda tangan
            $file_path = 'assets/ttd_digital/' . $id_ajuan . '_ttd2.png'; // Path file tujuan penyimpanan
            $is_saved = file_put_contents($file_path, base64_decode(str_replace('data:image/png;base64,', '', $gambar_ttd)));

            if ($is_saved) {
                // Update data di tabel step1_ajuan
                $data = array(
                    'ttd_2' => $file_path, // Simpan path file tanda tangan
                    'updated_at' => date('Y-m-d H:i:s'),
                );
                $this->db->where('id_ajuan', $id_ajuan);
                $this->db->update('step1_ajuan', $data);

                // Berikan respon ke klien
                $response = array(
                    'status' => 'success',
                    'message' => 'Tanda tangan Pihak Kedua berhasil disimpan.',
                );
            } else {
                // Jika gagal menyimpan gambar tanda tangan
                $response = array(
                    'status' => 'error',
                    'message' => 'Gagal menyimpan gambar tanda tangan Pihak Kedua.',
                );
            }
        } else {
            // Jika gambar tanda tangan kosong
            $response = array(
                'status' => 'error',
                'message' => 'Gambar tanda tangan Pihak Kedua tidak ditemukan.',
            );
        }

        echo json_encode($response);
    }

    public function laporan()
    {
        $data = [
            'title' => 'Laporan',

        ];
        $this->load->view('acara/v_Laporan', $data);
    }

    public function cetak_dokumen()
    {
        // Ambil parameter dari URL
        $idAjuan = $this->input->get('d');
        $shaHash = $this->input->get('s');

        $list = $this->db->query("SELECT * FROM v_all_ajuan Where id_ajuan ='$idAjuan'")->row();

        // Ambil parameter dari URL
        $data = array(
            'title' => 'My Awesome PDF',
            'content' => 'This is the content of my PDF',
            'list' => $list,
        );

        $html = $this->load->view('acara/v_surat_cetak', $data, true);

        // Create new Dompdf instance
        $dompdf = new Dompdf();

        // Load HTML content
        $dompdf->loadHtml($html);

        // (Optional) Setup paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream("my_awesome_pdf.pdf", array("Attachment" => false));

    }

}
