<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/index', 'index')->name('index');
    Route::get('/index2', 'index2')->name('index2');
    Route::get('/index3', 'index3')->name('index3');
    Route::get('/about', 'about')->name('about');
    Route::get('/faq','faq')->name('faq');
    Route::get('/pricing','pricing')->name('pricing');
    Route::get('/project','project')->name('project');
    Route::get('/projectdetails','projectdetails')->name('projectdetails');
    Route::get('/service','service')->name('service');
    Route::get('/servicedetails','servicedetails')->name('servicedetails');
    Route::get('/company','company')->name('company');
    Route::get('/servicedetails/cybersecurity','serviceCybersecurity')->name('servicedetails.cybersecurity');
    Route::get('/servicedetails/agenticai','serviceagenticai')->name('servicedetails.agenticai');
    Route::get('/servicedetails/digital','servicedigital')->name('servicedetails.digital');
    Route::get('/servicedetails/webdev','servicewebdev')->name('servicedetails.webdev');
    Route::get('/servicedetails/appdev','serviceappdev')->name('servicedetails.appdev');
    Route::get('/servicedetails/erp','serviceerp')->name('servicedetails.erp');
    Route::get('/servicedetails/robotic','servicerobotic')->name('servicedetails.robotic');
    Route::get('/servicedetails/data','servicedata')->name('servicedetails.data');

    Route::get('/team','team')->name('team');
    Route::get('/teamdetails','teamdetails')->name('teamdetails');
    Route::get('/testimonial','testimonial')->name('testimonial');
    Route::get('/contact','contact')->name('contact');   
});