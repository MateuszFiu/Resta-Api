<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\people;

class peopleController extends Controller
{
    public function index()
    {
        return people::all();
    }

    public function store(Request $request)
    {
        $people = people::create($request->all());

        return response()->json($people, 201);
    }

    public function show(people $people)
    {
        return response()->json($people);
    }

    public function update(Request $request, people $people)
    {
        $people->update($request->all());

        return response()->json($user);
    }

    public function destroy(people $people)
    {
        $people->delete();

        return response()->json(null, 204);
    }
}
