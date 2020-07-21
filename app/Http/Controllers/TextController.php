<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;

class TextController extends Controller
{
    public function create()
    {
        return view('text.create');
    }

    public function store(Request $request)
    {
        $text = new Text;
        $text->content = $request->content;
        $text->save();

        return redirect()->route('index');
    }

    public function show($id)
    {
        $text = Text::find($id);

        return view('text.show', ['text' => $text]);
    }

    public function edit($id)
    {
        $text = Text::find($id);

        return view('text.edit', ['text' => $text]);
    }

    public function update(Request $request, $id)
    {
        $text = Text::find($id);
        $text->content = $request->content;
        $text->save();

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $text = Text::find($id);
        $text->delete();

        return redirect()->route('index');
    }
}
