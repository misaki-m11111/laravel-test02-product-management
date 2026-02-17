# 商品管理（Laravel / 確認テスト）

## 環境構築
Dockerビルド  
・git clone　https://github.com/misaki-m11111/laravel-test02-product-management.git  
・docker compose up -d --build

## Dockerビルド

```bash
・git clone https://github.com/misaki-m11111/laravel-test02-product-management.git
・cd laravel-contact-form-test
・docker compose up -d --build
```

## Laravel環境構築
・docker compose exec php bash  
・composer install  
・cp .env.example .env  
・php artisan key:generate  
・php artisan migrate  
・php artisan db:seed

## 開発環境
・商品一覧画面：http://localhost/products  
・商品詳細画面：http://localhost/products/detail/{id}  
・商品登録画面：http://localhost/register  
・商品検索画面：http://localhost/search  
・商品削除画面：http://localhost/products/{id}/delete    
・phpMyAdmin：http://localhost:8080  

## 使用技術(実行環境)
・PHP 8.1.33  
・Laravel 8.83.8  
・MySQL 8.0.26  
・Nginx 1.21  
・PHP 8.1.33  
・Laravel 8.83.8    
・MySQL 8.0.26  
・Nginx 1.21  

## ER図
<img width="771" height="941" alt="contact-form-er" src="https://github.com/user-attachments/assets/b8120033-e0fb-4cd3-a0d3-335bf47df530" />

## URL
・商品一覧画面：http://localhost/products  
・商品詳細画面：http://localhost/products/detail/{id}  
・商品登録画面：http://localhost/register  
・商品検索画面：http://localhost/search  
・商品削除画面：http://localhost/products/{id}/delete    
・phpMyAdmin：http://localhost:8080  
