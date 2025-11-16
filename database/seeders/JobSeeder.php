<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory()
            ->count(10)
            ->for(
                Employer::factory()
                    ->for(User::factory())
            )
            ->has(Tag::factory()->count(3))
            ->alternateSchedule()               // <- use a custom method defined on the Factory model itself.
            ->alternateLocation()
            ->alternateFeatured()
            ->create();

    }
}
