<?php

namespace App\Http\Controllers;

use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Requests\Project\UpdateProjectRequest;
use App\Models\Project;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store($request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($board)
    {
        return Inertia::render('Board/Show', [
            'board' => $board,
            'tasks' => [
                'to_do' => $board->tasks()->where('category', 1)->get(),
                'do_today' => $board->tasks()->where('category', 2)->get(),
                'in_progress' => $board->tasks()->where('category', 3)->get(),
                'done' => $board->tasks()->where('category', 4)->get()
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, $board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($board)
    {
        //
    }
}