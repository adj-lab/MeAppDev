# MeAppDev_r001(Pigly）

## 環境構築

### Docker ビルド

- 1.git clone git@github.com:adj-lab/MeAppDev.git
- 2.docker-compose up -d --build
- MySQL は、作業端末で.evn を作成し任意の変数を用意

### Laravel 環境構築

- 1.docker-compose exec php bash
- 2.composer install
- 3..env.example ファイルから.env ファイル作成、環境変数を変更
- 4.php artisan key:generate
- 5.php artisan migrate
- 6.php artisan db:seed

## 使用技術

- NGINX1.21.1
- PHP7.4.9
- Laravel8.83.29
- MySQL8.0.26

## ER 図

[画像添付](https://github.com/adj-lab/MeAppDev/blob/55b2b47d1d88eae546880344f0dab6fde2d31f83/er_meapp_dev_r001.png)

## URL

- 開発環境：http://localhost:86/
- phpMyAdmin：http://localhost:8888/
