<?php
use App\Http\Controllers\PcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pcs', [PcController::class, 'index'])->name('pcs.index');
Route::get('/pcs/create', [PcController::class, 'create'])->name('pcs.create');
Route::post('/pcs', [PcController::class, 'store'])->name('pcs.store');
Route::get('/pcs/{pc}', [PcController::class, 'show'])->name('pcs.show');
Route::get('/pcs/{pc}/edit', [PcController::class, 'edit'])->name('pcs.edit');
Route::put('/pcs/{pc}', [PcController::class, 'update'])->name('pcs.update');
Route::delete('/pcs/{pc}', [PcController::class, 'destroy'])->name('pcs.destroy');