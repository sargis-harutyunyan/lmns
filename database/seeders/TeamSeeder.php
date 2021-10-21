<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = [];

        $person_1 = [
            'first_name' => 'Jonh 1',
            'last_name' => 'Doe 1',
            'position' => 'Lead 1',
            'social_link' => 'test.com/1',
            'image' => 'Layer1.jpg'
        ];

        $person_2 = [
            'first_name' => 'Jonh 2',
            'last_name' => 'Doe 2',
            'position' => 'Lead 2',
            'social_link' => 'test.com/2',
            'image' => 'Layer1.jpg'
        ];

        $person_3 = [
            'first_name' => 'Jonh 3',
            'last_name' => 'Doe 3',
            'position' => 'Lead 3',
            'social_link' => 'test.com/3',
            'image' => 'Layer1.jpg'
        ];

        $team[] = $person_1;
        $team[] = $person_2;
        $team[] = $person_3;


        foreach ($team as $person) {
            $ps = Team::where('first_name', $person['first_name'])
                ->where('last_name', $person['last_name'])
                ->where('position', $person['position'])
                ->where('social_link', $person['social_link'])
                ->where('image', $person['image'])
                ->first();
            if (!$ps) {
                Team::create($person);
            }
        }
    }
}
