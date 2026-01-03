<?php

use Ihxnnxs\UmbraUI\Facades\Toast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('showcase');
});

Route::post('/', function (Request $request) {
    $type = $request->input('toast_type', 'success');

    $messages = [
        'success' => 'Server-side success! Your form was processed successfully.',
        'error' => 'Server-side error! There was an issue processing your request.',
        'warning' => 'Server-side warning! Please check your input data.',
        'info' => 'Server-side info! This is an informational message from the server.',
    ];

    $message = $messages[$type] ?? $messages['success'];

    return redirect()->back()->with($type, $message);
});

Route::get('/test-label', function () {
    return view('test-label');
});

Route::post('/toast-facade', function (Request $request) {
    $type = $request->input('toast_type', 'success');

    switch ($type) {
        case 'success':
            Toast::success('Toast Facade success! Using Toast::success() method.', 'Facade Success');
            break;
        case 'error':
            Toast::error('Toast Facade error! Using Toast::error() method.', 'Facade Error');
            break;
        case 'warning':
            Toast::warning('Toast Facade warning! Using Toast::warning() method.', 'Facade Warning');
            break;
        case 'info':
            Toast::info('Toast Facade info! Using Toast::info() method.', 'Facade Info');
            break;
    }

    return redirect()->back();
});
