<p align="center"><img src="https://i.imgur.com/UwNermi.png"></p>

# GoodFood

一套互相分享食譜的網站。

## 網站功能

- 收藏食譜,食譜總收藏數
- 食譜 顯示,新增,刪除,修改
- 食材 顯示,新增,刪除,修改
- 食譜 分類 顯示,新增,刪除,修改
- 計算食譜總熱量
- 會員 顯示,新增,刪除,修改,等級


## 網站使用
1. > git clone https://github.com/WISD-2017/wisd12.git
2. > composer install
3. > copy .env.example .env (For windows) cp .env.example .env(For Unix)
4. > modify .env (not need to input email field)
5. > php artisan migrate
6. > php artisan db:seed
7. > (option) php artisan admin:set {email} {password}  (make a admin for ur self)
8. > (option) php artisan serve (if u don't have the Apache software)

## User data
1. default user
> ming@gmail.com ming00

2. Admin (Or u can set up by ur self)
> nini@gmail.com nini

#### Designer
- [Andrew Liao](https://github.com/img21326)
- [Nini](https://github.com/s3a432064)
