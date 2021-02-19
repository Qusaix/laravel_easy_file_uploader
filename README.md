# laravel_easy_file_uploader
simple package for uploading files in laravel frame-work.

# HOW TO USE
- INSTALL THE PACKAGE THROW THIS COMMAND `composer require qusai/easy-upload-files` 
- ADD THE SERVEICE PROVIDER IN THE `app.php` AND ADD THIS
`Qusai\Upload\Providers\UploadFileServiceProvider::class`
- GO TO THE `filesystem.php` AND ADD THIS CODE INIT SO THE PACKAGE WORK PROPERLY
`
'public_uploads' => [
            'driver' => 'local',
            'root'   => public_path() . '/',
             'url' => env('APP_URL'). '/',
             'visibility' => 'public'
        ],
`
- WHNE USE THE UPLOAD FUNCTION YOU CAN CALL IT LIEK THIS 
`
        use Qusai\Upload\UploadFiles;

        $upload = new UploadFiles();
        $upload->uplaodFile('public_uploads','FOLDERNAME',$request->file('FILE INPUT NAME IN THE REQUEST'));

`

GOOD LUCK:)