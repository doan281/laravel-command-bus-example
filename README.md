<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Triển khai Command Bus trong Laravel

- Code command bus nằm ở đường dẫn app/CommandBus.
- Module áp dụng command bus app/Http/Controllers/User

## Các bước tạo module
- B1: Tạo thư mục module, nó giống như app/Http/Controllers/User
- B2: Tạo Controller, nó giống như app/Http/Controllers/User/Controllers
- B3: Tạo Command, nó giống như app/Http/Controllers/User/Commands
- B4: Tạo Handle tương ứng với Command, nó giống như app/Http/Controllers/User/Handlers
- B5: Tạo Repositories, tham khảo app/Repositories
- B6: Tạo giao diện trong views, tạo route

## Nguồn tham khảo
- [rosamarsky/laravel-command-bus](https://github.com/rosamarsky/laravel-command-bus)
- [edupham/laravel-command-bus](https://github.com/doan281/laravel-command-bus): fix lỗi tên class Handle tương ứng với Command
- [Nguyễn Thế Huy](https://www.facebook.com/groups/167363136987053/user/100003910426858/): từ [bài viết này](https://www.facebook.com/groups/vietnam.laravel/permalink/2069851366738211/) trong nhóm Laravel Việt Nam
