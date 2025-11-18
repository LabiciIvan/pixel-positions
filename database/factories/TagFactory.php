<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $listTags = [
            'Backend',
            'Frontend',
            'Fullstk',
            'WebDev',
            'Mobile',
            'DevOps',
            'Cloud',
            'DataEng',
            'MLDev',
            'AIDev',
            'GameDev',
            'APIDev',
            'DBAdmin',
            'UIUX',
            'SecEng',
            'SysAdm',
            'QAEng',
            'Tester',
            'SoftEng',
            'Embed',
            'IoTDev',
            'Script',
            'GoLang',
            'Rust',
            'Python',
            'PHP',
            'Laravel',
            'NodeJS',
            'React',
            'VueJS',
            'Angular',
            'Docker',
            'K8s',
            'AWS',
            'Azure',
            'Linux',
            'GitOps',
            'CSharp',
            'Swift',
            'Kotlin',
        ];


        return [
            'name' => fake()->unique()->randomElement($listTags)
        ];
    }
}
