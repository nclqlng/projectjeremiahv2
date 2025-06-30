<?php

namespace Database\Seeders;

use App\Models\Admin\Consultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Consultation::create([
            'name' => 'Online Request for Counseling Appointment',
            'description' => 'Whether you\'re facing academic, career, interpersonal, or personal concerns, our Registered Guidance Counselors are here to support you. Secure your slot now!',
            'request_link' => 'https://forms.office.com/r/fYMTFLXveu'
        ]);
    }
}
