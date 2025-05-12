<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevWebController extends Controller
{
    //
}
namespace App\Http\Controllers;

use App\Models\Course; // Importation du modèle Course
use Illuminate\Http\Request;

class DevWebController extends Controller
{
    public function index() {
        $courses = Course::where('type', 'dev_web')->get(); // Récupère les cours de type 'dev_web'
        return view('dev-web.index', compact('courses')); // Retourne la vue avec les cours
    }

    public function store(Request $request) {
        $request->validate([
            'course_name' => 'required|string|max:255', // Validation du nom du cours
            'file_type' => 'required|string', // Validation du type de fichier
            'file' => 'required|file|mimes:pdf,ppt,pptx|max:2048', // Validation du fichier
        ]);

        $filePath = $request->file('file')->store('courses'); // Stocke le fichier et récupère son chemin

        Course::create([
            'name' => $request->course_name, // Crée un nouveau cours dans la base de données
            'type' => 'dev_web',
            'file_type' => $request->file_type,
            'file_path' => $filePath,
        ]);

        return redirect()->route('dev-web')->with('success', 'Cours ajouté avec succès.'); // Redirection avec message de succès
    }
}