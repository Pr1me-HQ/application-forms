<?php

use App\Http\Controllers\ParticipantController;
use App\Models\Participant;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $participants = Participant::all();

    return view('welcome', compact('participants'));
});

Route::get('/register/alone', [ParticipantController::class, 'create1'])->name('participant.create1');
Route::get('/register/team', [ParticipantController::class, 'create2'])->name('participant.create2');
Route::post('/register', [ParticipantController::class, 'store'])->name('participant.store');
Route::get('/getlist', [ParticipantController::class, 'index'])->name('participant.index');


/*



*/
