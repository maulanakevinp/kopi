- Lakukan composer install ketik
```terminal
composer install
```
- Tunggu sampai proses selesai
- Buat database baru di phpmyadmin anda beri nama sesuka hati anda
- Copy file .env.example yang ada di dalam folder project dan ubah namanya menjadi .env
bagi yang menggunakan git bash bisa ketik seperti dibawah
```terminal
cp .env.example .env
```
- Lakukan generate key ketik 
```terminal
php artisan key:generate
```
- Buka file .env
- Ubah konfigurasi database sesuai nama database yang anda buat tadi lalu simpan
- lakukan migrate ketik :
```terminal
php artisan migrate:refresh --seed
```
- Uji coba aplikasi : 
``` terminal
php artisan produk:list
```
``` terminal
php artisan checkout CL4 CL4 KL4
```
``` terminal
php artisan checkout FR2 FR2 FR2 FR2 BC2 BC2 BC2 BC2 KL2 KL2
```
``` terminal
php artisan checkout KL1 KL1 FR1
```
``` terminal
php artisan checkout BC3 BC3 BC3 CL3 CL3
```
``` terminal
php artisan checkout KL4 KL4 FR4 FR4 FR4
```
``` terminal
php artisan checkout BC4 BC4 BC4 CL4
```
