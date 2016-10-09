<?php

namespace App\Http\Controllers;

use App\Page1;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function bricks()
    {
        $data = ['page' => 'bricks'];
        return view('bricks', $data);
    }

    public function page1()
    {
        $page = Page1::all();
        $data = ['page' => 'page1', 'page' => $page];
        return view('page1', $data);
    }

    public function page1_add(Request $request)
    {
        $page1 = new Page1();
        $page1->name = $request->name;
        $page1->save();
        return redirect('/page1');
    }

    public function page1_delete($id)
    {
        $page1 = Page1::find($id);
        $page1->delete();
        return redirect('/page1');
    }

    public function page1_update($id, Request $request)
    {
        $page1 = Page1::find($id);
        $page1->name = $request->name;
        $page1->save();
        return redirect('/page1');
    }
}
