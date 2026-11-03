<?php

namespace App\Http\Controllers;

use App\Data\ConferenceData;
use App\Data\UserData;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index', ['conferences' => array_filter(ConferenceData::all(), [ConferenceData::class, 'upcoming'])]);
    }

    public function show(int $id)
    {
        $conference = ConferenceData::find($id);
        abort_unless(ConferenceData::upcoming($conference), 404);

        return view('client.show', compact('conference'));
    }

    public function register(int $id)
    {
        $event = ConferenceData::find($id);
        abort_unless(ConferenceData::upcoming($event), 404);
        if (! in_array(UserData::CLIENT, $event['participants'], true)) {
            $event['participants'][] = UserData::CLIENT;
            ConferenceData::update($id, ['participants' => $event['participants']]);
        }

        return to_route('client.show', $id)->with('status', __('messages.registered'));
    }
}
