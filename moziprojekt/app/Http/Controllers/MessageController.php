<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /*Show the form for creating a new resource.*/
    public function create()
    {
        return view('kapcsolat.create');
    }
    /*Store a newly created resource in storage.*/
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        Message::create($validated);

        return redirect()->route('kapcsolat')
                         ->with('success', 'Üzenetét sikeresen elküldtük!');
    }
    /*Display a listing of the resource.*/
    public function index()
    {

        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('uzenetek.index', [
            'messages' => $messages
        ]);
    }
}

