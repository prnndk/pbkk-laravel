# Laravel Progress - PBKK Kelas D

| Nama                   | NRP        |
| ---------------------- | ---------- |
| Arya Gading Prinandika | 5025221280 |

## Tugas 1 (Instalasi Laravel, View, Components)

### Halaman Home

Disini saya membuat halaman home dengan menggunakan layout dari laravel yang sudah saya buat, yaitu `layout.blade.php` yang berisi `navbar.blade.php` `nav-link.blade.php` `post-card.blade.php`. Untuk halaman home ini saya berencana untuk membuat sebuah halaman yang menampilkan daftar post atau artikel yang telah dibuat. Dimana disini saya untuk sementara menggunakan data dummy yang dibuat dari routes.

![Screenshot (2)](https://github.com/user-attachments/assets/191ff10e-b8e9-4b3e-9367-3d03b5f21f1a)

### Halaman About

Pada halaman ini dengan menggunakan layout yang sama dengan halaman home, saya berencana untuk membuat sebuah halaman untuk menampilkan data diri saya yang dimulai dengan data portofolio aplikasi yang pernah saya buat.

![Screenshot (3)](https://github.com/user-attachments/assets/8076307d-f59f-4c70-9344-61e7cc032e8b)

### Halaman Contact

Pada halaman ini saya berencana untuk membuat sebuah halaman yang dapat mengirim pesan dari pengunjung website kepada saya. Jadi dapat dilihat didalam halaman ini ada form submisi untuk mengirimkan pesan.

![Screenshot (4)](https://github.com/user-attachments/assets/7324e836-6711-4dd8-8d67-8a2177a7feec)

## Update Database seeder factory and migration

Pada tugas ini saya membuat database yang berbeda dengan database yang ada pada video tutorial, pada pengerjaan ini saya menambahkan database yang berbeda yaitu portofolio dan contact. Pada database tersebut berfungsi untuk menghandle contact dan juga portofolio untuk listing portofolio data.
Lalu untuk factory saya menggunakan data dari faker untuk tiap tabel yang ada di database. Untuk code yang diubah dapat dilihat pada folder [berikut](database/)

## Searching and Pagination

Untuk melakukan searching, sesuai dengan di video disini saya tambahkan sebuah fungsi di dalam model untuk dapat melakukan scope filtering.
Berbeda dengan yang ada di video, saya menggunakan controller untuk mengolah view dan data (tidak ditaruh di web). Berikut merupakan model yang saya tambahkan filtering [file filtering](app/Models/Contact.php).
Selanjutnya untuk dapat melakukan searching maka perlu untuk menambahkan form input untuk searching di homepage dari aplikasi laravel. Disini saya menambahkan sebuah component baru untuk search bar yang dapat dilihat pada [sini](resources/views/components/search-bar.blade.php).
Perlu diperhatikan bahwa input form yang digunakan yaitu dengan metode get untuk menambahkan query parameter pada url sekarang. Lalu untuk pagination cara penggunaannya mudah dengan menambahkan fungsi pagination pada eloquent di controller.
Lalu setelah itu perlu untuk ditambahkan kode `{{ $posts->links() }}` yang akan menampilkan tombol untuk navigasi ke tiap paginasi yang telah dibuat.

Berikut merupakan tampilan UI setelah dilakukan penambahan searching dan pagination
