<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProjectController;

Route :: prefix('/v1') -> group(function() {

    Route :: get('/project-index', [ProjectController::class, 'projectIndex']);
});
