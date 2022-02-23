<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        return view('index')->with(['data' => $data]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        Employee::insert($data);
        return redirect('/');
    }

    public function edit($id)
    {
        $data = Employee::findOrFail($id);
        return view('edit')->with(['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $item = Employee::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/');
    }

    public function destroy($id)
    {
        $data = Employee::findOrFail($id);
        $data->delete();
        return redirect('/');
    }
}
