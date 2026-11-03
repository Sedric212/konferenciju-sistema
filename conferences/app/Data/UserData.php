<?php

namespace App\Data;

class UserData
{
    public const CLIENT = 1;

    public const EMPLOYEE = 4;

    public const ADMIN = 5;

    public static function all(): array
    {
        return session('sd1.users') ?? [
            1 => ['first_name' => 'Arnas Aleksas', 'last_name' => 'Sidorovičius', 'email' => 'arnas@example.test', 'role' => 'client'],
            2 => ['first_name' => 'Mantas', 'last_name' => 'Kazlauskas', 'email' => 'mantas@example.com', 'role' => 'client'],
            3 => ['first_name' => 'Gabija', 'last_name' => 'Petrauskaitė', 'email' => 'gabija@example.com', 'role' => 'client'],
            4 => ['first_name' => 'Ieva', 'last_name' => 'Petraitė', 'email' => 'ieva@example.test', 'role' => 'employee'],
            5 => ['first_name' => 'Tomas', 'last_name' => 'Jankus', 'email' => 'tomas@example.test', 'role' => 'admin'],
        ];
    }

    public static function find(int $id): array
    {
        return self::all()[$id] ?? abort(404);
    }

    public static function update(int $id, array $data): void
    {
        $users = self::all();
        $users[$id] = array_replace(self::find($id), $data);
        session()->put('sd1.users', $users);
    }
}
