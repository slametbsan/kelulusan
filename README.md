# Aplikasi Pengumuman Kelulusan SMK
Ini merupakan aplikasi berbasis web (PHP, MySQL/MariaDB) yang dapat dimanfaatkan untuk pengumuman kelulusan sekolah (SMK). Dengan aplikasi ini, siswa tidak perlu lagi datang ke sekolah untuk mengetahui hasil kelulusannya, cukup dengan akses internet (via komputer atau gadget). Dengan siswa mengakses web resmi sekolah, tentu akan meningkatkan visit-rate.

## Spesifikasi
1. Aplikasi ini ditulis dalam skrip PHP 5.x (ke atas) yang mendukung penggunaan sintaks _MySQL Improved_.
2. Database MySQL/MariaDB. 
3. Untuk tampilan interface, kami serahkan pada **Twitter Bootstrap** (*versi 3.x*).
4. jQuery dan sebagainya yang bisa dilihat dalam langsung pada file-file yang ada.

## Cara instal
1. Unduh telebih dahulu file [Kelulusan](https://github.com/slametbsan/kelulusan/archive/kelulusan.zip)
2. Ekstrak dengan menggunakan _tools_ favorit anda: 7zip, WinRAR, WinZip, atau yang lain.
3. Login ke cPanel web sekolah anda, 
..* buat direktori/folder (misalnya: *lulus*) dalam direktori _document root_ (www, public_html, atau htdocs) pada server anda.
..* buat database untuk menampung data kelulusan. Buat juga username dan password khusus untuk database kelulusan, jika perlu.
> Nama database pada prinsipnya bebas, walaupun pada aplikasi ini diberi nama **un2016** yang meng-indikasikan tahun pembuatan. Anda dapat memberi nama apa saja.
4. Unggah file-file yang telah di-ekstrak ke direktori yang telah dibuat pada langkah-3.
5. Edit file **database.php** sesuai dengan konfigurasi pada server anda. Jangan lupa untuk disimpan :)
```php
define('DB_HOST','localhost');  //alamat server database, umumnya 'localhost'
define('DB_USER','root');       //ganti dengan nama user database
define('DB_PASS','');           //isi dengan password user database
define('DB_NAME','un2016');     //ganti dengan nama database yang telah dibuat
```
6. Buka laman *phpMyAdmin* dari cPanel dan impor file **un2016.sql** ke dalam database yang telah dibuat pada langkah-3.
7. Jika sudah, anda dapat mengakses halaman kelulusan (misalnya: http://websekolah.sch.id/lulus/) dan halaman admin (misalnya: http://websekolah.sch.id/lulus/admin/)
..* username: admin
..* password: admin
8. Pada halaman admin, anda dapat melakukan impor file kelulusan dalam format CSV (seperti pada file: *un_siswa.csv*). File CSV ini bisa anda buat dengan menggunakan aplikasi _spreadsheet_ seperti Ms Excel. Untuk mudahnya, anda dapat mengedit data dalam file *un_siswa.csv* yang disertakan.

## Pengembangan
Aplikasi ini dibuat secara sederhana sebagai *proof of concept* pemrograman web sederhana untuk membuat pengumuman kelulusan sekolah. Saya tidak dapat menjanjikan pengembangan, karena aplikasi ini dibuat pada saat-saat longgar saya. Jika anda atau orang disekitar anda, memiliki kemampuan dalam pemrograman web (PHP) silahkan fork/download dan kembangkan aplikasi ini.
Aplikasi ini dilisensi sebagai [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/deed.id).
