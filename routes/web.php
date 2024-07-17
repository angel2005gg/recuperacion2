<?php
use App\Http\Controllers\ViajeroController;
use App\Http\Controllers\DestinoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// VIAJERO
Route::get('Viajero/create', [ViajeroController::class, 'create'])->name('Viajero.create');
Route::post('Viajero/store', [ViajeroController::class, 'store'])->name('Viajero.store');
Route::get('Viajero/list', [ViajeroController::class, 'index'])->name('Viajero.index');
Route::delete('Viajero/{viajero}', [ViajeroController::class, 'destroy'])->name('Viajero.destroy');
Route::get('Viajero/{viajero}', [ViajeroController::class, 'show'])->name('Viajero.show');
Route::put('Viajero/{viajero}', [ViajeroController::class, 'update'])->name('Viajero.update');
Route::get('Viajero/{viajero}/edit', [ViajeroController::class, 'edit'])->name('Viajero.edit');

// DESTINO
Route::get('Destino/create', [DestinoController::class, 'create'])->name('Destino.create');
Route::post('Destino/store', [DestinoController::class, 'store'])->name('Destino.store');
Route::get('Destino/list', [DestinoController::class, 'index'])->name('Destino.index');
Route::delete('Destino/{destino}', [DestinoController::class, 'destroy'])->name('Destino.destroy');
Route::get('Destino/{destino}', [DestinoController::class, 'show'])->name('Destino.show');
Route::put('Destino/{destino}', [DestinoController::class, 'update'])->name('Destino.update');
Route::get('Destino/{destino}/edit', [DestinoController::class, 'edit'])->name('Destino.edit');