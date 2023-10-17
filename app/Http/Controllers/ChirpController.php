<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use illuminate\Http\Response;
use Illuminate\View\View;
class ChirpController extends Controller
{
    public function index(): View
    {
        return view('chirps');
    }
}
