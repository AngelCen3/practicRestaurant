<?php

use App\Livewire\GoogleFake;
use App\Livewire\MainMenu;
use Illuminate\Support\Facades\Route;



Route::get('/', GoogleFake::class);
Route::get('/main', MainMenu::class);
