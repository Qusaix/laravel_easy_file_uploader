![Image of plan](https://images.unsplash.com/photo-1606768666853-403c90a981ad?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2251&q=80)


# laravel_easy_file_uploader
simple package for uploading files in laravel frame-work.

# HOW TO USE
- INSTALL THE PACKAGE THROW THIS COMMAND `composer require qusai/easy-upload-files` 
- ADD THE SERVEICE PROVIDER IN THE `app.php`
```php 
        Qusai\Upload\Providers\UploadFileServiceProvider::class 
```
- GO TO THE `filesystem.php` AND ADD THIS CODE INIT SO THE PACKAGE WILL WORK PROPERLY
```php
       'easy_file_uploader' => [
            'driver' => 'local',
            'root'   => public_path() . '/',
             'url' => env('APP_URL'). '/',
             'visibility' => 'public'
        ]
```
- WHEN YOU NEED TO USE THIS PACKAGE YOU CAN CALL IT LIKE THIS 
```php
        use Qusai\Upload\UploadFiles;

        class className extends Controller {
                ...
                use UploadFiles;

                public function functionName(Request $request)
                {
                        .....
                        $this->uplaodFile('FOLDERNAME',$request->file('FILE INPUT NAME IN THE REQUEST'));
                }
        }
```

GOOD LUCK:)

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

