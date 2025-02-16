<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'event_name' => 'International Geographical Union Commission on Agricultural Geography and Land Engineering (AGLE) Annual Conference 2025',
            'event_title' => '"Innovation, Technological Advancement for Rural and Agricultural Resilience"',
            'event_duration' => 'November 05-08, 2025',
            'event_location' => 'Bangkok, Thailand',
            'event_deadline' => '07 September 2025',
            'contact_address' => '58 หมู่​9 Phahonyothin Rd, Khlong Nueng, Khlong Luang District, Pathum Thani 12120',
            'contact_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.969915440519!2d100.6117694748101!3d14.078953289635724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e27f8bf182c5cf%3A0xa51b43c33d385a98!2sAIT%20Conference%20Center!5e0!3m2!1sen!2sth!4v1738552185407!5m2!1sen!2sth',
            'contact_phone' => '1234567890',
            'contact_mail' => 'contact@mail.com',
            'noti_email' => 'ylt@evolxit.com',
        ]);
    }
}
