<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobPosition;
use Illuminate\Http\Request;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobPositions = JobPosition::whereNull('deleted_at')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.job_position.index', compact('jobPositions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.job_position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'location' => 'required|string',
        'status' => 'required|string',
        'closing_date' => 'required|date',
        'announcement_date' => 'required|date',
        'description' => 'required|string',
        'duration' => 'required|string',
        'education' => 'required|string',
        'requirements' => 'required|string',
        'quota' => 'required|string'
    ]);

    // Membuat instance model baru
    $jobPosition = new JobPosition();
    $jobPosition->title = $validatedData['title'];
    $jobPosition->description = $validatedData['description'];
    $jobPosition->location = $validatedData['location'];
    $jobPosition->closing_date = $validatedData['closing_date'];
    $jobPosition->announcement_date = $validatedData['announcement_date'];
    $jobPosition->requirements = $validatedData['requirements'];
    $jobPosition->duration = $validatedData['duration'];
    $jobPosition->education = $validatedData['education'];
    $jobPosition->status = $validatedData['status'];
    $jobPosition->quota = $validatedData['quota'];

    $jobPosition->save();

    return redirect()->route('job-position.index')->with('success', 'Lowongan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jobDetail = JobPosition::find($id);
        return view('admin.pages.job_position.show', compact('jobDetail'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobDetail = JobPosition::find($id);
        return view('admin.pages.job_position.edit', compact('jobDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string',
            'status' => 'required|string',
            'closing_date' => 'required|date',
            'announcement_date' => 'required|date',
            'description' => 'required|string',
            'duration' => 'required|string',
            'education' => 'required|string',
            'requirements' => 'required|string',
            'quota' => 'required|string'
        ]);

         $jobPosition = JobPosition::findOrFail($id);
        $jobPosition->title = $validatedData['title'];
        $jobPosition->description = $validatedData['description'];
        $jobPosition->location = $validatedData['location'];
        $jobPosition->closing_date = $validatedData['closing_date'];
        $jobPosition->announcement_date = $validatedData['announcement_date'];
        $jobPosition->requirements = $validatedData['requirements'];
        $jobPosition->duration = $validatedData['duration'];
        $jobPosition->education = $validatedData['education'];
        $jobPosition->status = $validatedData['status'];
        $jobPosition->quota = $validatedData['quota'];

        $jobPosition->save();

        return redirect()->route('job-position.index')->with('success', 'Lowongan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jobPosition = JobPosition::find($id);
        $jobPosition->delete();
        return redirect()->route('job-position.index')->with('success', 'Lowongan berhasil dihapus');
    }
}
