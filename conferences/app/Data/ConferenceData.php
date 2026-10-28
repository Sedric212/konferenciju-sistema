<?php

namespace App\Data;

class ConferenceData
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => __('messages.conference_web_title'),
                'description' => __('messages.conference_web_description'),
                'speaker' => 'Jonas Jonaitis',
                'date' => '2026-12-10',
                'time' => '10:00',
                'address' => 'Vilniaus g. 10, Vilnius',
            ],
            [
                'id' => 2,
                'title' => __('messages.conference_security_title'),
                'description' => __('messages.conference_security_description'),
                'speaker' => 'Ieva Petrauskaitė',
                'date' => '2026-12-15',
                'time' => '14:00',
                'address' => 'Kauno g. 15, Vilnius',
            ],
        ];
    }
}