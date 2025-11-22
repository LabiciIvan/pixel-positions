<?php

namespace Tests\Feature;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = User::factory()->create();

        // Create an employer
        $employer = Employer::factory([
            'user_id' => $user->id
        ])->create();

        // Create a job and associate it with the employer
        $job = Job::factory()
            ->alternateLocation()
            ->alternateSchedule()
            ->create([
                'employer_id' => $employer->id,
            ]);

        // Assert the relationship works
        $this->assertInstanceOf(Employer::class, $job->employer);

        // Assert the related employer is the same one we created
        $this->assertTrue($job->employer->is($employer));
    }

    public function test_tags(): void {
        $tag = Tag::factory()->create();
        $user = User::factory()->create();

        // Create an employer
        $employer = Employer::factory([
            'user_id' => $user->id
        ])->create();

        // Create a job and associate it with the employer
        $job = Job::factory()
            ->alternateLocation()
            ->alternateSchedule()
            ->create([
                'employer_id' => $employer->id,
        ]);

        $job->tags()->sync($tag->id);

        $this->assertCount(1, $job->tags);

    }
}
