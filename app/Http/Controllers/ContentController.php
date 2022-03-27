<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::all();
        return view('welcome', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);
        $request = Content::create([
            'subject' => $request['judul'],
            'content' => $request['pengarang'],
        ])->save();
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $content = Content::all();
        //return view('welcome',compact('content'));
        dd($content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //cookies
    public function setCookie(Request $request)
    {
        $minutes = 1;
        $response = new Response('Silahkan Klik link disamping kiri untuk mendapatkan session');
        $response->withCookie(cookie('cookies', 'Dika from cookies', $minutes));
        echo'<a href="/session"> Session </a>';
        return $response;
        
    }
    public function getCookie(Request $request)
    {
        $value = $request->cookie('cookies');
        return $value;
    }
    public function sessionLaravel(Request $request)
    {
        $minutes = 1;
    
        //session
        $request->session()->put('name', 'Dika from session',$minutes);
        $data = session()->all();

        //cookies
        $response = new Response('Halooo ini adalah hasil cookies');
        $response->withCookie(cookie('cookies', 'Dika from cookies', $minutes));
        $value= $request->cookie('cookies');
        return compact('data','response','value');
    }
}
