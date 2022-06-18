<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

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
    return view('Acceuil');
});

Route::get('send-mail', function (Request $request) {

    $contacts = [
        'title' => $request->input('object'),
        'name' => $request->input('Name'),
        'mail' => $request->input('email'),
        'body' =>  $request->input('Message')
    ];

    Mail::to('dorian.vericel0546@gmail.com')->send(new \App\Mail\ContactMail($contacts));
    return redirect::to(URL::previous()."#contact");
})->name('send-mail');
