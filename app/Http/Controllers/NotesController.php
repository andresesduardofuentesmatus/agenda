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

    public function create($status = null){

        return view('notes.create')->with('mensaje', $status);
    }

    public function store(Request $request){
        $nota = $request->input('txtNota');

        $tblNote = new Note;
        $tblNote->note = $nota;
        $tblNote->save();

        $request->session()->flash('status', 'Task was successful!');

        return back()->withInput();
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
