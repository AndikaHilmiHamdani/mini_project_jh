
# Mini Project - Jagoan Hosting

untuk memenuhi tes bidang Jagoan Hosting

Sebelumnya pastikan pada device anda terdapat laravel 9 dan php 8




## Usage

1. clone project ini terlebih dahulu
```git
git clone https://github.com/AndikaHilmiHamdani/mini_project_jh
```

2. lakukan perintah composer install
```composer
composer install
```

3. lakukan perintah dibawah ini untuk mendapatkan env
```env
copy .env.example .env
```

4. setelah mendapatkan env, lakukan perintah berikut :

```php
php artisan key:generate
```

5. setelah mendapatkan key, buatlah database bernama mini_projectjh pada localhost. 
kemudian,lakukanlah migrasi database dengan perintah sebagai berikut:

```php
php artisan migrate
```

6. setelah migrasi berhasil, lakukanlah seeder database untuk mengisi database dengan perintah sebagai berikut:
```php
php artisan db:seed
```

7. Terakhir, untuk membukanya di web browser, jalankan perintah:
```php
php artisan serve
```
Lalu jalankan http://localhost:8000


## SESSION DAN COOKIES
1. silahkan click tombol OK, siap! untuk membuat cookies

2. setelah membuat cookies, klik link disamping kanan yang bertuliskan session untuk mendapatkan session

## Authors

- [Andika Hilmi](https://www.github.com/AndikaHilmiHamdani)

