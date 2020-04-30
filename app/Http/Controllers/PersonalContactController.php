<?php

namespace App\Http\Controllers;

use App\Models\PersonalContact;
use Illuminate\Http\Request;

class PersonalContactController extends Controller
{

    public function index()
    {
        $data = PersonalContact::all();
        return view('backend.personalcontact.index', compact('data'));
    }


    public function create()
    {
        return view('backend.personalcontact.add');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
