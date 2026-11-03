<?php

namespace App\Data;

class ConferenceData
{
    public static function all(): array
    {
        return session('sd1.events') ?? self::initial();
    }

    private static function initial(): array
    {
        $events = [];
        foreach ([
            [1, 'web', '+14 days', '10:00', 'Jonas Jonaitis', 'Vilniaus g. 10, Vilnius', [2, 3]],
            [2, 'security', '+21 days', '14:00', 'Ieva Petrauskaitė', 'Kauno g. 15, Vilnius', []],
            [3, 'archive', '-7 days', '09:00', 'Tomas Jankus', 'Parko g. 5, Kaunas', [2]],
        ] as [$id, $key, $offset, $time, $speaker, $address, $participants]) {
            $events[$id] = [
                'id' => $id, 'title' => __("messages.conference_{$key}_title"),
                'description' => __("messages.conference_{$key}_description"),
                'date' => now('Europe/Vilnius')->modify($offset)->toDateString(),
                'time' => $time, 'speaker' => $speaker, 'address' => $address,
                'participants' => $participants,
            ];
        }
        session()->put('sd1.events', $events);

        return $events;
    }

    public static function upcoming(array $event): bool
    {
        return now('Europe/Vilnius')->format('Y-m-d H:i') < $event['date'].' '.$event['time'];
    }

    public static function find(int $id): array
    {
        return self::all()[$id] ?? abort(404);
    }

    public static function add(array $data): void
    {
        $events = self::all();
        $id = session('sd1.next_id', 4);
        $events[$id] = $data + ['id' => $id, 'participants' => []];
        session()->put(['sd1.events' => $events, 'sd1.next_id' => $id + 1]);
    }

    public static function update(int $id, array $data): void
    {
        $events = self::all();
        $events[$id] = array_replace(self::find($id), $data);
        session()->put('sd1.events', $events);
    }

    public static function remove(int $id): void
    {
        abort_unless(self::upcoming(self::find($id)), 403, __('messages.no_delete'));
        $events = self::all();
        unset($events[$id]);
        session()->put('sd1.events', $events);
    }
}
