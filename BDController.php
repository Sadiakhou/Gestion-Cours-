<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BDController extends Controller
{
    //
}
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class BDController extends Controller
{
    public function index() {
        $courses = Course::where('type', 'bd')->get(); // Récupère les cours de type 'bd'
        return view('bd.index', compact('courses')); // Retourne la vue avec les cours
    }
}