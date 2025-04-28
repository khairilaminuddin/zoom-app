<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zoom;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Rasyidi Alwee',
                'email' => 'rasyidi@gmail.com'
            ],
            [
                'name' => 'Hazwan Syahmi',
                'email' => 'hazsyah02@gmail.com'
            ],
            [
                'name' => 'Irfan Izzat',
                'email' => 'nikarsyad07@gmail.com'
            ],
            [
                'name' => 'Haziq Zulkifli',
                'email' => 'haziqzulkif1020@gmail.com'
            ],
            [
                'name' => 'Nik Arsyad',
                'email' => 'irfanijatron@gmail.com'
            ],
            [
                'name' => 'Khairil Aminuddin',
                'email' => 'khairil1721@gmail.com'
            ]
        ];

        foreach ($user as $user) {
            //User::factory()->create($user);
            
            User::factory()
                ->has(factory: Zoom::factory()->count(count: 10))
                ->create(attributes: $user);
        }
    }
}
