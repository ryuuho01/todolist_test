<?php

namespace App\Http\Controllers;

use App\Models\Contentslist;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Contentslist::all();
        return view('index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Contentslist::$rules);
        $form = $request->all();
        Contentslist::create($form);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $this->validate($request, Contentslist::$rules);
        $form = $request->all();
        unset($form['_token']);
        Contentslist::where('id', $request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        Contentslist::find($request->id)->delete();
        return redirect('/');
    }
}
