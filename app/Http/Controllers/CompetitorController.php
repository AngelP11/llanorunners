<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competitor;
use App\Mail\CompetitorMail;
use Illuminate\Support\Facades\Mail;

class CompetitorController extends Controller
{
    public function store (Request $request) {
    	$competitor = new Competitor($request->all());

    	if ($competitor->club == null) {
    		$competitor->club = "No Aplica";
    	}

        /*hechizero19942@gmail.com*/
        /*789452136*/

    	$competitor->save();

    	Mail::to($competitor->email)->send(new CompetitorMail($competitor->id));

    	return redirect()->route('inscrito');
    }

    public function index () {
    	$competitors = Competitor::orderBy('id')->paginate(25);

    	return view('admin.competitor.index')->with('competitors', $competitors);
    }

    public function destroy ($id) {
        $competitor = Competitor::find($id);

        $competitor->delete();

        flash('El competidor "' . $competitor->name . '" fue eliminado exitosamente')->success();
        return redirect()->route('competitor.index');
    }
}
