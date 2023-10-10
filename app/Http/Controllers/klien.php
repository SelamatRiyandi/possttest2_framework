<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\klien;

class controllerklien extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mengambil data dari tabel post
        // $user = "SELECT * FROM post";
        $posting = DB::table('klien')->get();
        // $posting = Post::all();


        return view('index',['posting' => $posting]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('tambahpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // DB::table("klien")->insert([
        //     'image' => "",
        //     'judul' => $request->judul,
        //     'content' => $request->content
        // ]);

        return redirect('/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
