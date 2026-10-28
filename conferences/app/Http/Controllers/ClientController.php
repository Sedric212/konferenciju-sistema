<?php

namespace App\Http\Controllers;

use App\Data\ConferenceData;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = ConferenceData::all();

        return view('client.index', [
            'conferences' => $conferences,
        ]);
     }
        public function show(int $id)
    {
        $conference = collect(ConferenceData::all())
            ->firstWhere('id', $id);

        abort_if($conference === null, 404);

        return view('client.show', [
            'conference' => $conference,
        ]);
    }
}