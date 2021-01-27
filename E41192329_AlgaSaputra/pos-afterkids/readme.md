## Deskripsi Aplikasi 
Source Code Aplikasi Penjualan Barang sederhana berbasis Website dengan PHP & MYSQL.
<br>
Source Blog : <a href="https://www.codekop.com/read/source-code-aplikasi-penjualan-barang-kasir-dengan-php-amp-mysql-gratis.html" target="_blank">DISINI</a>

## Setting Koneksi PHP
setting koneksi di config.php dan ganti username, password dan dbname nya

## Penggunaan Login
User : admin
<br/>
Pass : 123

## Contoh Program 
- Login
<img src="https://raw.githubusercontent.com/fauzan1892/pos-kasir-php/master/assets/img/pic/login.png">

- Dashboard 
<img src="https://raw.githubusercontent.com/fauzan1892/pos-kasir-php/master/assets/img/pic/1.png">

- Tabel Barang
<img src="https://raw.githubusercontent.com/fauzan1892/pos-kasir-php/master/assets/img/pic/2.png">

- Keranjang / Transaksi
<img src="https://raw.githubusercontent.com/fauzan1892/pos-kasir-php/master/assets/img/pic/4.png">

- Laporan 
<img src="https://raw.githubusercontent.com/fauzan1892/pos-kasir-php/master/assets/img/pic/5.png">

## Changelog

06 Oktober 2020<br>
- revisi session error pada hosting dengan error : 
Warning: session_start(): Cannot send session cookie - headers already sent by (output started at [duplicate] -> fixed
- Ganti background login, header
- Ganti Header table barang, table keranjang, table laporan
- Fix transaksi -> transaksi stok < keranjang tidak bisa diproses
- penghapusan trigger sql
- penambahan fungsi transaksi untuk pengurangan stok barang setelah transaksi bayar 

23 Agustus 2020<br>
- revisi print
- menambahkan alert telah di bayar di bagian bayar transaksi penjualan

18 Juli 2020<br>
- fix edit kategori
- fix modal tambah barang
- rapihin form laporan

29 Agustus 2019 <br>
- laporan tampilan error  -> fixed
- klik button bayar transaksi  tidak masuk ke laporan -> fixed
- pencarian barang pada menu transaksi sudah otomatis dengan tambahan jquery ajax
- data laporan dapat dicari berdasarkan periode bulan dan tahun

<br>
** Jika ada issues atau revisi atau menambahkan fitur silahkan pull request di repository ini

## Contributors
<a href="https://fauzan.codekop.com/"> Fauzan Falah</a>

My Blog : <a href="https://www.codekop.com/"> Codekop.com</a>

Gunakan Aplikasi dengan bijak, dan Selamat Belajar