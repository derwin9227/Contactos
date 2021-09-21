<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactosController;
use App\Models\Contacto;
/* use App\Exports\FileExport;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel; */

Route::get('/', [ContactosController::class, 'index'])->name('index');

Route::get('/crear', [ContactosController::class, 'contacto'])->name('crear');

Route::get('/contacto/{id}', [ContactosController::class, 'detalle'])->name('contacto.detalle');

Route::post('/crear',[ContactosController::class, 'crear'])->name('contacto.crear');

Route::get('editar/{id}', [ContactosController::class, 'editar'])->name('contacto.editar');

Route::put('editar/{id}', [ContactosController::class, 'actualizar'])->name('contacto.actualizar');

Route::delete('eliminar/{id}', [ContactosController::class, 'eliminar'])->name('contacto.eliminar');

Route::get('exportar', [ContactosController::class, 'exportar'])->name('contacto.exportar');

Route::get('exportar/detalle', [ContactosController::class, 'exportarDetalle'])->name('exportar.detalle');