![Image of plan](https://images.unsplash.com/photo-1606768666853-403c90a981ad?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2251&q=80)


# laravel_easy_file_uploader
simple package for uploading files in laravel frame-work.

# HOW TO USE
- INSTALL THE PACKAGE THROW THIS COMMAND `composer require qusai/easy-upload-files` 
- ADD THE SERVEICE PROVIDER IN THE `app.php` AND ADD THIS
```php 
        Qusai\Upload\Providers\UploadFileServiceProvider::class 
```
- GO TO THE `filesystem.php` AND ADD THIS CODE INIT SO THE PACKAGE WORK PROPERLY
```php
       'public_uploads' => [
            'driver' => 'local',
            'root'   => public_path() . '/',
             'url' => env('APP_URL'). '/',
             'visibility' => 'public'
        ]
```
- WHNE USEs THE UPLOAD FUNCTION YOU CAN CALL IT LIEK THIS 
```php
        use Qusai\Upload\UploadFiles;

        $upload = new UploadFiles();
        $upload->uplaodFile('public_uploads','FOLDERNAME',$request->file('FILE INPUT NAME IN THE REQUEST'));
```

GOOD LUCK:)
[License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)