<?php

namespace Database\Seeders;

use App\Models\JobPosting;
use Illuminate\Database\Seeder;

class JobPostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Registered Nurse (RN)',
                'description' => "We are looking for a dedicated Registered Nurse to join our home healthcare team. \n\nResponsibilities:\n- Provide high-quality nursing care to patients in their homes.\n- Monitor patient health and maintain accurate records.\n- Collaborate with doctors and other healthcare professionals.\n\nRequirements:\n- Valid RN license in Ontario.\n- Previous experience in home healthcare is preferred.\n- Excellent communication and interpersonal skills.",
                'location' => 'Courtice, ON',
                'job_type' => 'Full-time',
                'salary_range' => '$35 - $45 per hour',
                'status' => 'open',
            ],
            [
                'title' => 'Personal Support Worker (PSW)',
                'description' => "Join our team as a Personal Support Worker and help our clients live comfortably at home. \n\nResponsibilities:\n- Assist with daily living activities (bathing, dressing, meal prep).\n- Provide emotional support and companionship.\n- Report any changes in client condition to supervisors.\n\nRequirements:\n- PSW Certificate.\n- Compassionate and reliable nature.\n- Valid driver's license and access to a vehicle.",
                'location' => 'Oshawa, ON',
                'job_type' => 'Part-time',
                'salary_range' => '$19 - $24 per hour',
                'status' => 'open',
            ],
            [
                'title' => 'Physiotherapist',
                'description' => "We are seeking a part-time or contract Physiotherapist to provide in-home rehabilitation services.\n\nResponsibilities:\n- Assess patient physical condition and develop treatment plans.\n- Guide patients through exercises and manual therapy.\n- Track progress and adjust treatments as needed.\n\nRequirements:\n- Registered Physiotherapist in Ontario.\n- Experience in geriatric or home-based rehab.\n- Ability to work independently.",
                'location' => 'Bowmanville, ON',
                'job_type' => 'Contract',
                'salary_range' => '$50 - $70 per session',
                'status' => 'open',
            ],
        ];

        foreach ($jobs as $job) {
            JobPosting::create($job);
        }
    }
}
