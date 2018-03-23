<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\File;
use Illuminate\Http\RedirectResponse;

use Storage;

class galleryController extends Controller
{
    public function show(Request $images) {

    $images = DB::table('files')->get();

      return view('gallery', ['files' => $images ]);

    }
}
