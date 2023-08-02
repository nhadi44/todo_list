# TODO LIST APP

## Deskripsi
Ini merupakan simpel aplikasi todo list berbasis website, dibuat dengan menggunakan bahasa pemrograman PHP Native dengan konsep MVC (Model View Controller) dan menggunakan database MySQL.

## Cara Penggunaan
1. Clone repository ini
2. Restore database yang ada didalam root folder dengan nama file `todo_list.sql`
3. Simpan folder hasil clone didalam folder `htdocs` (untuk pengguna XAMPP) atau `www` (untuk pengguna WAMP) atau '/laragon/www' (untuk pengguna Laragon)
4. Pastikan web server dan database server sudah berjalan
5. Akses aplikasi melalui browser dengan alamat `http://localhost/todo_list`
6. Halaman utaman akan menampilkan landing page aplikasi todo list
7. Untuk dapat mengakses dashboard aplikasi, silkahkan sign up terlebih dahulu
8. Setelah sign up, silahkan Sign in dengan username dan password yang sudah didaftarkan
9. Setelah berhasil login, silahkan tambahkan activity yang ingin dilakukan dengan menekan tombol `Add Activity`
10. Seletah berhasil, anda dapat melihat activity yang sudah dibuat pada dashboard aplikasi
11. Untuk melakukan update activity, silahkan klik tombol `Edit` pada card activity yang sudah dibuat
12. Untuk melakukan delete activity, silahkan klik tombol `Delete` pada card activity yang sudah dibuat
13. Untuk menambahkan taks di dalam activity, silahkan klik tombol `Taks` pada card activity yang sudah dibuat
14. Setelah berhasil taks baru akan muncul pada dashboard aplikasi
15. Anda dapat melakukan update dan delete taks dengan cara yang sama seperti activity
16. Untuk menyelesaikan taks, silahkan klik tombol `Finish` pada card taks yang sudah dibuat

## Fitur
Adapun fitur pada aplikasi ini yaitu:
1. Sign up
2. Sign in
3. Penyesuaian Activity per user    
4. Penyesuaian Taks per activity user

## Teknologi yang digunakan
Adapun teknologi yang digunakan antara lain:
1. PHP Native v8.1.10
2. MySQL v8.0.34
3. Bootstrap v5.3.1
4. JQuery v3.7.0
5. Bootstrap Icons v1.10.5
6. Sweet Alert v2.1.2
7. Custom CSS
8. PHP MVC (Model View Controller)

## Struktur Folder
Berikut adalah struktur folder dari aplikasi todo list ini:
```bash
├───app
│   ├───config
│   ├───controllers
│   ├───core
│   ├───models
│   └───views
├───public
│   ├───css
│   ├───icons
│   ├───images
│   └───js
```

## Penjelasan Struktur Folder
1. Folder app
   Folder ini berisi file-file yang berhubungan dengan aplikasi todo list ini, antara lain:
   * config
        Folder ini berisi file-file konfigurasi aplikasi todo list
   * controllers
        Folder ini berisi file-file controller aplikasi todo list
   * core
        Folder ini berisi file-file core aplikasi todo list
   * models
        Folder ini berisi file-file model aplikasi todo list
   * views
        Folder ini berisi file-file view aplikasi todo list
2. Folder public
   Folder ini berisi file-file yang berhubungan dengan tampilan aplikasi todo list ini, antara lain:
   * css
        Folder ini berisi file-file css aplikasi todo list
   * icons
        Folder ini berisi file-file icons aplikasi todo list
   * images
        Folder ini berisi file-file images aplikasi todo list
   * js
        Folder ini berisi file-file javascript aplikasi todo **list**

## Struktur Database
Berikut adalah struktur database dari aplikasi todo list ini:
1. tb_user
   | Field | Type | Null | Key | Default | Extra |
    | --- | --- | --- | --- | --- | --- |
    | id | int | No | Primary | None | Auto Increment |
    | email | varchar(250) | No | None | None | None |
    | password | varchar(250) | No | None | None | None |
    | created_at | timestamp | No | None | CURRENT_TIMESTAMP | None |
    | updated_at | timestamp | No | None | CURRENT_TIMESTAMP | None |

2. tb_activity
    | Field | Type | Null | Key | Default | Extra |
    | --- | --- | --- | --- | --- | --- |
    | id | int | No | Primary | None | Auto Increment |
    | name | varchar(250) | No | None | None | None |
    | description | varchar(250) | No | None | None | None |
    | user_id | int | No | Foreign | None | None |
    | created_at | timestamp | No | None | CURRENT_TIMESTAMP | None |
    | update_at | timestamp | No | None | CURRENT_TIMESTAMP | None |

3. tb_taks
    | Field | Type | Null | Key | Default | Extra |
    | --- | --- | --- | --- | --- | --- |
    | id | int | No | Primary | None | Auto Increment |
    | name | varchar(250) | No | None | None | None |
    | description | varchar(250) | No | None | None | None |
    | priority | int | No | None | None | None |
    | is_finished | int | No | None | None | None |
    | activity_id | int | No | Foreign | None | None |
    | created_at | timestamp | No | None | CURRENT_TIMESTAMP | None |
    | update_at | timestamp | No | None | CURRENT_TIMESTAMP | None |

## Screenshot
Berikut adalah tampilan dari aplikasi todo list ini:
1. Landing Page
![Landing Page](https://i.postimg.cc/RhxgdXCF/landing-page.jpg)
1. Sign Up
![Sign Up](https://i.postimg.cc/J46b4pwk/signup.jpg)
1. Sign In
[![signin.jpg](https://i.postimg.cc/j54fVXQC/signin.jpg)](https://postimg.cc/JDt0ZjFW)
1. Activity
[![activity.jpg](https://i.postimg.cc/Fzn7mnfF/activity.jpg)](https://postimg.cc/PvYtQyz0)
1. Taks
[![taks.jpg](https://i.postimg.cc/HkMVDzTH/taks.jpg)](https://postimg.cc/YvppQ14y)

## Author
Aplikasi ini dibuat oleh [Hadi Nurhidayat](https://www.linkedin.com/in/hadinurhidayat/)

