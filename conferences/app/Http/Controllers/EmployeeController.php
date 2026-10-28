<?php

namespace App\Http\Controllers;

use App\Data\ConferenceData;

class EmployeeController extends Controller
{
    public function index()
    {
        $conferences = ConferenceData::all();

        return view('employee.index', [
            'conferences' => $conferences,
        ]);
    }

    public function show(int $id)
    {
        $conference = collect(ConferenceData::all())
            ->firstWhere('id', $id);

        abort_if($conference === null, 404);

        return view('employee.show', [
            'conference' => $conference,
        ]);
    }
}
