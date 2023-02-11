<?php
    Route::get('/Admin', [App\Http\Controllers\AdminController::class, 'adminlogin'])->name('Admin');
    Route::get('/Admin_Page', [App\Http\Controllers\AdminController::class, 'adminpage'])->name('Admin_Page');

    // PRODUCT & SERVICES
    Route::get('/Admin_Page/Services', [App\Http\Controllers\AdminController::class, 'services']);

    // NEWS & PROJECT
    Route::get('/Admin_Page/News', [App\Http\Controllers\AdminController::class, 'news']);
    Route::get('/Admin_Page/News/Table', [App\Http\Controllers\AdminController::class, 'newstable']);
    Route::get('/Admin_Page/News/Add', [App\Http\Controllers\AdminController::class, 'newsform']);
    Route::get('/Admin_Page/News/Edit/{IdProject}', [App\Http\Controllers\AdminController::class, 'newsedit']);
    Route::post('/Admin_Page/News/PostingEdit', [App\Http\Controllers\AdminController::class, 'postingEditNews']);
    Route::post('/Admin_Page/News/PostingAddGallery', [App\Http\Controllers\AdminController::class, 'postingAddGallery']);
    Route::post('/Admin_Page/News/PostingAddNews', [App\Http\Controllers\AdminController::class, 'postingAddNews']);
    Route::get('/Admin_Page/News/DeleteProjectGallery/{iddel}', [App\Http\Controllers\AdminController::class, 'deleteGalleryNews']);

    // WEB MENU
    Route::get('/Admin_Page/Menu', [App\Http\Controllers\AdminController::class, 'menu']);
?>