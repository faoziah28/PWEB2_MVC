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


        2.ModelProgramStudi
        Fungsi getAllProgramStudi(): Mengambil semua data program studi dari tabel program_studi.

        
                         class ProgramStudiModel {
                                    private $koneksi;

                                    public function __construct($db) {
                                            $this->koneksi = $db;
                                    }

                                   public function __construct($db) {
                                        $this->koneksi = $db;
                                }

                                public function getAllProgramStudi() {
                                        $query = "SELECT * FROM program_studi";
                                        $result = mysqli_query($this->koneksi, $query);
                                        return $result;
                                    }
                                }



2. View (Membuat Tampilan)
View bertugas menampilkan data kepada pengguna dalam format yang bisa dilihat, misalnya dalam bentuk halaman web.

Contoh File View:
   a. mahasiswa_view.php:
     Menampilkan daftar mahasiswa yang diambil dari MahasiswaModel.

    Kode:  
   ![8](https://github.com/user-attachments/assets/7539aa87-dc28-4b7f-b2ae-1b0730a898c2)


    b. detail_mahasiswa_view
        Menampilkan detail mahasiswa berdasarkan ID.

        Kode:
        ![7](https://github.com/user-attachments/assets/ebfaacc5-7861-4487-8856-9ead107016ff)


3. Controller (Menghubungkan Model dan View)
Controller bertugas mengatur logika aplikasi. Dia bertindak sebagai perantara antara Model dan View.

Contoh Kelas Controller:
MahasiswaController:

Fungsi index(): Mengambil semua data mahasiswa dari Model dan mengirimkannya ke View.
Fungsi show($id): Mengambil data mahasiswa tertentu berdasarkan ID dan menampilkan detailnya
kode:
![8](https://github.com/user-attachments/assets/d3238d53-b2f7-42a0-bb51-9b55b5c24e68)


 ProgramStudiController:

Fungsi index(): Mengambil semua data program studi dan mengirimkan ke View.
Kode:
![10](https://github.com/user-attachments/assets/e883e033-0f8b-4fbc-b43b-0b6e545a5e8e)


ProgramStudiController:

Fungsi index(): Mengambil semua data program studi dan mengirimkan ke View.
Kode:
![11](https://github.com/user-attachments/assets/1c976ecb-1220-4bc8-8f13-8489f2155741)


4. Integrasi
Semua komponen digabungkan agar aplikasi bekerja dengan baik. Contohnya:
Ketika Prodi diklik, Controller akan memanggil fungsi untuk menampilkan detail mahasiswa melalui View.
![12](https://github.com/user-attachments/assets/7d2b1743-79c0-4b53-99de-6b1c6b28d1dd)
![13](https://github.com/user-attachments/assets/127bd30c-dd29-4b2c-b6ce-b628aac5c358)


