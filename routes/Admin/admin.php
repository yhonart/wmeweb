<?php
    Route::get('/Admin', [App\Http\Controllers\AdminController::class, 'adminlogin'])->name('Admin');
    Route::get('/Admin_Page', [App\Http\Controllers\AdminController::class, 'adminpage'])->name('Admin_Page');
?>