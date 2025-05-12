<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiscalController extends Controller
{
    //
}
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class FiscalController extends Controller
{
    public function index() {
        $courses = Course::where('type', 'fiscal')->get(); // Récupère les cours de type 'fiscal'
        return view('fiscal.index', compact('courses')); // Retourne la vue avec les cours
    }
}
