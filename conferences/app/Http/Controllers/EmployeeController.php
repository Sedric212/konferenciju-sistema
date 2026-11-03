<?php

namespace App\Http\Controllers;

use App\Data\ConferenceData;
use App\Data\UserData;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.index', ['conferences' => ConferenceData::all()]);
    }

    public function show(int $id)
    {
        $conference = ConferenceData::find($id);
        $conference['participants'] = array_map([UserData::class, 'find'], $conference['participants']);

        return view('employee.show', compact('conference'));
    }
}
