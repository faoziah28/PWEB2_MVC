    NAMA   : ANISATUN FAOZIAH AFNI NURJANAH
    NPM    : 230302075
    KELAS  : TI 2D
            aplikasi PHP sederhana menggunakan arsitektur MVC dengan studi kasus
pengelolaan data mahasiswa dan program studi:
1. Model (Mengelola Data)
Model bertugas sebagai "penjaga data." Semua proses pengambilan atau penyimpanan data ke database dilakukan di sini.

Contoh Kelas Model:
    1. MahasiswaModel:

        Fungsi getAllMahasiswa(): Mengambil semua data mahasiswa dari tabel mahasiswa.
        Fungsi getMahasiswaById($id): Mengambil data mahasiswa berdasarkan ID tertentu.
               Kode :    class MahasiswaModel {
                            private $koneksi;

                            public function __construct($db) {
                                  $this->koneksi = $db;
                            }

                            public function getAllMahasiswa() {
                                $query = "SELECT * FROM mahasiswa";
                                $result = mysqli_query($this->koneksi, $query);
                                return $result;
                            }

                            public function getMahasiswaById($id) {
                            $query = "SELECT * FROM mahasiswa WHERE id = $id";
                            $result = mysqli_query($this->koneksi, $query);
                            return $result;
                            }
                      }

                   
