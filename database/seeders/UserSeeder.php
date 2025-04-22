<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Rasyidi Alwee',
                'email' => 'rasyidi@gmail.com',
            ],
            [
                'name' => 'Hazwan Syahmi',
                'email' => 'hazsyah02@gmail.com',
            ],
            [
                'name' => 'Irfan Izzat Khilfi',
                'email' => 'nikarsyad07@gmail.com',
            ],
            [
                'name' => 'Haziq Zulkifli',
                'email' => 'haziqzulkifl1020@gmail.com',
            ],
            [
                'name' => 'Arsyad',
                'email' => 'irfanijatron@gmail.com',
            ],
            [
                'name' => 'Khairil',
                'email' => 'khairil1721@gmail.com',
            ],

        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
