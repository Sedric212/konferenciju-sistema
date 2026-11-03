<?php

namespace App\Http\Controllers\Admin;

use App\Data\ConferenceData;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;

class ConferenceController extends Controller
{
    public function index()
    {
        return view('admin.conferences.index', [
            'conferences' => ConferenceData::all(),
        ]);
    }
    public function create()
    {
        return view('admin.conferences.create');
    }

        public function store(ConferenceRequest $request)
    {
        ConferenceData::add($request->validated());

        return redirect()->route('admin.conferences.index');
    }
    }