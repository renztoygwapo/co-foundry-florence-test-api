<?php

use Domain\Photo\GetPhotoAction;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    // return ['Laravel' => app()->version()];
    // return Image::make('http://co-foundry-api.test/storage/17/team-ultra.png')
    //         ->crop(1050,850,215,375)
    //         ->response();
    return resolve(GetPhotoAction::class)();
});

Route::get('image/{width}/{height}/{left}/{top}/{layout}', [PhotoController::class, 'get']);


require __DIR__.'/auth.php';
