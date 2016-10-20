<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\Note;

class NotesController extends Controller
{

    public function index(){
        $ListadoNotas =  Note::All();
        return view('notes')->with('notas', $ListadoNotas)
                            ->with('fecha', Carbon::now());
    }

    public function create(){
        return view('notes.create');
    }

    public function store(Request $request){
        $nota = $request->input('txtNota');

        $tblNote = new Note;
        $tblNote->note = $nota;
        $tblNote->save();

        return back()->withInput()->with('mensaje', 'Ok');
    }

    public function delete($id){
        $tblNote = Note::find($id);
        $tblNote->delete();

        return back();
    }

    public function show($note){
    	return $note;
    }


}
