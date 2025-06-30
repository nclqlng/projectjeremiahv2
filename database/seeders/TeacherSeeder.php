<?php

namespace Database\Seeders;

use App\Models\Admin\Counselor;
use App\Models\Admin\CounselorSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counselors = [
            [
                'name' => 'Ms. Rhodora C. Amora, CMHT, RGC',
                'position' => 'Guidance Counselor',
                'college' => 'SEA & GSPS',
                'email' => 'rcamora@nu-laguna.edu.ph',
                'ms_teams_account' => 'rcamora@nu-laguna.edu.ph',
                'image' => 'counselors/sea.jpg',
                'schedules' => [
                    ['day_of_week' => 'Monday', 'start_time' => '09:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Monday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Tuesday', 'start_time' => '09:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Tuesday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '09:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '09:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Friday', 'start_time' => '09:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Friday', 'start_time' => '13:30', 'end_time' => '16:00'],
                ]
            ],
            [
                'name' => 'Ms. Charlene Ann D. Regulacion, RGC',
                'position' => 'Guidance Counselor',
                'college' => 'SCS & APC',
                'email' => 'cdregulacion@nu-laguna.edu.ph',
                'ms_teams_account' => 'cdregulacion@nu-laguna.edu.ph',
                'image' => 'counselors/scss.jpg',
                'schedules' => [
                    ['day_of_week' => 'Monday', 'start_time' => '09:00', 'end_time' => '11:00'],
                    ['day_of_week' => 'Monday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Tuesday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '09:00', 'end_time' => '11:00'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '09:00', 'end_time' => '11:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Friday', 'start_time' => '13:30', 'end_time' => '16:00'],
                ]
            ],
            [
                'name' => 'Ms. Mary Joy G. Viñas, RPm, RGC',
                'position' => 'Guidance Counselor',
                'college' => 'SABM',
                'email' => 'mjgvinas@nu-laguna.edu.ph',
                'ms_teams_account' => 'mjgvinas@nu-laguna.edu.ph',
                'image' => 'counselors/sabm.jpg',
                'schedules' => [
                    ['day_of_week' => 'Monday', 'start_time' => '09:00', 'end_time' => '11:00'],
                    ['day_of_week' => 'Monday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Tuesday', 'start_time' => '10:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Tuesday', 'start_time' => '13:30', 'end_time' => '15:00'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '09:00', 'end_time' => '11:00'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '09:00', 'end_time' => '11:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Friday', 'start_time' => '10:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Friday', 'start_time' => '13:30', 'end_time' => '15:00'],
                ]
            ],
            [
                'name' => 'Mr. Niño Lito Jake Briones, RGC',
                'position' => 'Guidance Counselor',
                'college' => 'SAS',
                'email' => 'nsbriones@nu-laguna.edu.ph',
                'ms_teams_account' => 'nsbriones@nu-laguna.edu.ph',
                'image' => 'counselors/sas.jpg',
                'schedules' => [
                    ['day_of_week' => 'Monday', 'start_time' => '11:00', 'end_time' => '16:00'],
                    ['day_of_week' => 'Tuesday', 'start_time' => '11:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '11:00', 'end_time' => '16:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '11:00', 'end_time' => '16:00'],
                    ['day_of_week' => 'Friday', 'start_time' => '15:00', 'end_time' => '16:00'],
                ]
            ],
            [
                'name' => 'Mr. Mark Dexter P. Bristol, RGC',
                'position' => 'Guidance Counselor',
                'college' => 'Senior High School',
                'email' => 'mdpbristol@nu-laguna.edu.ph',
                'ms_teams_account' => 'mdpbristol@nu-laguna.edu.ph',
                'image' => 'counselors/shs.jpg',
                'schedules' => [
                    ['day_of_week' => 'Monday', 'start_time' => '09:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Monday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Tuesday', 'start_time' => '13:30', 'end_time' => '14:30'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '09:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '09:00', 'end_time' => '12:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '13:30', 'end_time' => '16:00'],
                    ['day_of_week' => 'Friday', 'start_time' => '13:30', 'end_time' => '14:30'],
                ]
            ],
            [
                'name' => 'Ms. Elizabeth P. Estareja, RPm, CHRA',
                'position' => 'Psychometrician',
                'college' => 'Center for Guidance Services',
                'email' => 'mepestareja@nu-laguna.edu.ph',
                'ms_teams_account' => 'mepestareja@nu-laguna.edu.ph',
                'image' => 'counselors/psychometrician.jpg',
                'schedules' => [
                    ['day_of_week' => 'Monday', 'start_time' => '09:00', 'end_time' => '16:00'],
                    ['day_of_week' => 'Tuesday', 'start_time' => '09:00', 'end_time' => '16:00'],
                    ['day_of_week' => 'Wednesday', 'start_time' => '09:00', 'end_time' => '16:00'],
                    ['day_of_week' => 'Thursday', 'start_time' => '09:00', 'end_time' => '16:00'],
                    ['day_of_week' => 'Friday', 'start_time' => '09:00', 'end_time' => '16:00'],
                ]
            ]
        ];

        foreach ($counselors as $counselorData) {
            $counselor = Counselor::create([
                'name' => $counselorData['name'],
                'position' => $counselorData['position'],
                'college' => $counselorData['college'],
                'email' => $counselorData['email'],
                'ms_teams_account' => $counselorData['ms_teams_account'],
                'image' => $counselorData['image'],
            ]);

            foreach ($counselorData['schedules'] as $schedule) {
                CounselorSchedule::create([
                    'counselor_id' => $counselor->id,
                    'day_of_week' => $schedule['day_of_week'],
                    'start_time' => $schedule['start_time'],
                    'end_time' => $schedule['end_time'],
                ]);
            }
        }
    }
}
