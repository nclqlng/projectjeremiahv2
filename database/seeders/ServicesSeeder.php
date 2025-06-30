<?php

namespace Database\Seeders;

use App\Models\Admin\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Academic Counseling',
                'description' => 'Personalized guidance to help students achieve their academic goals through effective study strategies, course planning, and academic skill development.'
            ],
            [
                'name' => 'Mental Health Support',
                'description' => 'Professional mental health services including counseling for anxiety, depression, stress management, and emotional well-being support.'
            ],
            [
                'name' => 'Career Guidance',
                'description' => 'Comprehensive career counseling services to help students explore career paths, develop professional skills, and plan their future.'
            ],
            [
                'name' => 'Personal Development',
                'description' => 'Programs focused on building self-confidence, leadership skills, communication abilities, and personal growth.'
            ],
            [
                'name' => 'Crisis Intervention',
                'description' => 'Immediate support and intervention services for students experiencing emotional or psychological crises.'
            ],
            [
                'name' => 'Group Therapy',
                'description' => 'Structured group sessions that provide peer support and therapeutic intervention in a collaborative environment.'
            ]
        ];

        foreach ($services as $service) {
            Services::create($service);
        }
    }
} 