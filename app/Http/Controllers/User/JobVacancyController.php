<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\JobPosition;
use Carbon\Carbon;

class JobVacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job = JobPosition::where('status', 'public')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($job) {
                $job->formatted_closing_date = Carbon::parse($job->closing_date)->translatedFormat('d F Y');

                return $job;
            });

        return view('user.pages.job_vacancy.index', compact('job'));
    }

    public function show(string $id)
    {
        $job = JobPosition::find($id);

        if ($job) {
            $job->formatted_closing_date = Carbon::parse($job->closing_date)->translatedFormat('d F Y');
            $job->formatted_announcement_date = Carbon::parse($job->announcement_date)->translatedFormat('d F Y');
        }

        return view('user.pages.job_vacancy.detail', compact('job'));
    }
}
