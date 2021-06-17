# Akori - Laravel 8.0+ and Larawind Template

Application to Analyze Coffee Sales Patterns at XYZ Cafe Using Web-Based Apriori Algorithm
(Aplikasi Penganalisa Pola Penjualan Kopi Pada Cafe XYZ Menggunakan Algoritma Apriori Berbasis Web)

This project is created with [Larawind Laravel Template](https://github.com/miten5/larawind)


## Requirements

- Laravel installer
- Composer
- Npm installer

## Installation

```
# Clone the repository from GitHub and open the directory:
git clone https://github.com/miten5/larawind.git

# cd into your project directory
cd larawind

#install composer and npm packages
composer install
npm install && npm run dev

# Start prepare the environment:
cp .env.example .env // setup database credentials
php artisan key:generate
php artisan migrate
php artisan storage:link

# Run your server
php artisan serve

```
### Project made possible thanks to:

- [Laravel Jetstream](https://jetstream.laravel.com/1.x/introduction.html)
- [Tailwind CSS](https://tailwindcss.com/)
- [Windmill Dashboard](https://windmill-dashboard.vercel.app/)
- [Original Larawind Template](https://github.com/miten5/larawind)
