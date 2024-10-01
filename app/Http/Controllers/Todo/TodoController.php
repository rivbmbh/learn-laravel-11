<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $todoModel = TodoModel::orderBy('task', 'ASC')->get();//menampilkan data dari DB
        $data = [
            'title' => 'Todolist with Laravel',
            'dataTodo' => $todoModel
        ];
        return view('todo.app', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        #dd($request);//var_dump() versi laravel

        // Validasi Form 
        $request->validate([
            'task' => 'required|min:4'
        ],
        [
            'task.required' => 'Inputan task tidak boleh kosong !',
            'task.min' => 'Inputan task harus berisi minimal 3 karakter !'
        ]);

        
        $data = [
            'task' => $request->input('task'),//ambil data dari inputan
        ];

        TodoModel::create($data);//insert data ke DB
        return redirect()->route('todo')->with('success', 'Successfully Add Data Todo');
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