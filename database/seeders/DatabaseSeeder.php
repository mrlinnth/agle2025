<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'AGLE admin',
            'email' => 'agle2025@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        Setting::create([
            'name' => 'AGLE 2025',
            'noti_email' => 'ylt@evolxit.com',
            'logo' => 'default/logo.jpeg',
            'countdown' => [
                'date' => '2025-09-15',
                'title' => 'Days to Registration',
            ],
            'contact' => [
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.969915440519!2d100.6117694748101!3d14.078953289635724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e27f8bf182c5cf%3A0xa51b43c33d385a98!2sAIT%20Conference%20Center!5e0!3m2!1sen!2sth!4v1738',
                'email' => 'contact@mail.com',
                'phone' => 'xxx-xxx-xxx',
                'address' => '58 Moo ​9, Phahonyothin Rd, Khlong Nueng, Khlong Luang District, Pathum Thani 12120',
            ],
            'footer' => [
                'end_logo' => 'default/end.png',
                'center_logos' => [
                    'default/center_1.jpg',
                    'default/center_2.png',
                    'default/center_3.jpeg',
                ],
            ],
            'home' => [
                'about' => [
                    'body' => "<p>The 2025 AGLE conference on “Technological Advancement and Social Innovation for Rural and Agricultural Resilience” will be held from 5-8 November 2025 in Bangkok, Thailand. The conference will include two days of presentations and poster sessions and two days of field trips to rural Thailand.<br><br>&nbsp;This scientific event aims to promote the convergence of scientific knowledge and practical actions to advance innovation, technological development, and applications for rural sustainability and resilience. The conference is organized by the IGU Commission on Agricultural Geography and Land Engineering (AGLE) in collaboration with the Asian Institute of Technology (AIT), Thailand.<br><br>&nbsp;The conference will feature high-level, inclusive, evidence-based discussions on the current challenges and priorities related to advancing innovation and technology for long-term rural sustainability, with a focus on contributing to the United Nations’ Sustainable Development Goals (SDGs). This event offers a valuable opportunity for both early stage and established researchers and practitioners, to showcase their work, exchange ideas, and engage with globally renowned experts in the field. It also provides a platform to enhance participants\' expertise and professional recognition in rural sustainability. The conference fosters cooperation and strengthens collaborative efforts to address rural challenges and promote sustainable development through innovative solutions.&nbsp;</p>",
                    'heading' => 'About The Conference',
                ],
                'banner' => [
                    'heading' => 'International Geographical Union (IGU) Commission on Agricultural Geography and Land Engineering (AGLE) ',
                    'duration' => 'November 05-08, 2025 ',
                    'location' => 'Asian Institute of Technology Conference Center (AITCC), Thailand',
                    'main_title' => 'Technological Advancement and Social Innovation for Rural and Agricultural Resilience ',
                    'sub_heading' => 'Annual Conference 2025',
                    'background_image' => 'default/banner.jpg',
                ],
                'themes' => [
                    'body' => '<p>Abstract submissions, both oral and poster presentation sessions must be in English. Participants are encouraged to submit the research on one or more topics (but are not limited to these.)&nbsp;</p><ol><li>Land use and land management for Sustainable Development</li><li>Innovative Food Systems and Smart Agriculture</li><li>Sustainable Rural Environment and Natural Resources</li><li>Rural community resilience to environmental changes</li><li>Rural and agricultural heritage, socio-cultural conservation</li><li>Education, Technological and Social Innovation</li><li>Governance and Policy for Rural Inclusion and Sustainability</li></ol>',
                    'heading' => 'Conference Themes ',
                ],
                'publication' => [
                    'body' => '<p>The conference will partner with Journal of Rural Studies, Elsevier and Research in Globalization, Elsevier to publish special issues featuring select conference papers. The best abstracts will be invited to submit full papers for consideration in these special issues.</p>',
                    'heading' => 'Publication Opportunities',
                ],
            ],
            'conference' => [
                'fee' => [
                    'optional' => '<ul><li>Two-Day Field Trip - USD 100 (including food and transportation)</li><li>Gala Dinner - USD 55 (includng transportation)</li></ul>',
                    'type_1_title' => 'Academia/Policy Makers/ Practitioners',
                    'type_2_title' => 'Researchers from the Global South',
                    'type_3_title' => 'Early career researchers (PhD Candidates) and students',
                    'type_4_title' => 'Early career researchers (PhD Candidates) and students from the Global South',
                    'best_abstract' => '*** The best abstracts submitted by early-stage researchers (e.g: Doctoral Students) from the Global South will be selected for an award of registration fee waiver ***',
                    'type_1_regular' => 'USD 350',
                    'type_2_regular' => 'USD 300',
                    'type_3_regular' => 'USD 250',
                    'type_4_regular' => 'USD 200',
                    'type_1_earlybird' => 'USD 300',
                    'type_2_earlybird' => 'USD 250',
                    'type_3_earlybird' => 'USD 200',
                    'type_4_earlybird' => 'USD 150',
                ],
                'details' => [
                    'body' => '<ul><li>The field trip will be organized to provinces surrounding Bangkok, including Kanchanaburi, Saraburi, and Lopburi.</li><li>The tentative itinerary includes visits to <strong>the Self-Sufficient Economy Agricultural Model, Organic PGS farming, Pasak Cholasid Dam and Wetland Management, community-based irrigation groups, and EcoSmart Farm Systems, Circular Farm Models.</strong></li></ul>',
                    'trip_date' => ' 7-8 November 2025',
                    'trip_title' => 'Field Trip to Rural Thailand',
                    'dinner_date' => ' 5 November 2025',
                    'dinner_title' => 'Gala dinner Chao Phraya Cruise',
                    'presentation_date' => ' 5-6 November 2025',
                    'presentation_title' => 'Oral/Poster Presentation Sessions',
                ],
                'location' => [
                    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4766.916176001432!2d100.6143444!3d14.078948100000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e27f8bf182c5cf%3A0xa51b43c33d385a98!2sAIT%20Conference%20Center!5e1!3m2!1sen!2ssg!4v1739505506720!5m2!1sen!2ssg',
                    'title' => 'Robert B Banks Auditorium, Asian Institute of Technology (AIT CC)',
                    'address' => '58 Moo 9, Phahonyothin Rd, Khlong Nueng, Khlong Luang District, Pathum Thani 12120, Thailand ',
                ],
                'important' => [
                    'regular_deadline_date' => '2025-09-15',
                    'abstract_deadline_date' => '2025-06-30',
                    'regular_deadline_title' => 'Regular Registration Deadline',
                    'abstract_deadline_title' => 'Abstract Submission Deadline',
                    'earlybird_deadline_date' => '2025-07-31',
                    'abstract_acceptance_date' => '2025-07-28',
                    'earlybird_deadline_title' => 'Early Bird Registration Deadline',
                    'abstract_acceptance_title' => 'Abstract Acceptance Announcement',
                ],
                'accommodation' => '<p>Participants are recommended to consider the following accommodations options where are easily accessible to Conference Location.</p><p><br></p><p>1. AIT Conference Center</p><p>Hotel and Dining Facility in AIT Campus [visit - <a href="http://aitcc.ait.ac.th/accommodation/">http://aitcc.ait.ac.th/accommodation/</a>]</p><p><br></p><p>2. Pinehurst Golf Club and Hotel</p><p>Around 6 km to AIT [visit - <a href="https://www.pinehurst.co.th/en/hotel">https://www.pinehurst.co.th/en/hotel</a>]&nbsp;</p><p><br></p><p>3. Novotel Bangkok Future Park Rangsit</p><p>Around 12 km to AIT [visit - <a href="https://novotelbangkokfutureparkrangsit.com/rooms-suites/">https://novotelbangkokfutureparkrangsit.com/rooms-suites/</a>]</p>',
                'transportation' => '<p><strong>1. Suvarnabhumi International Airport to AIT (around 60 km)</strong></p><p>Around 1 hr with city taxi (around USD25)</p><p>No direct bus to campus</p><p><strong>2. Don Mueang International Airport to AIT (around 60 km)</strong></p><p>Around 25 mins with city taxi (around USD15)</p><p>Around 2 hrs with public transportation (Bus no - 510)</p>',
            ],
            'abstract' => [
                'body' => '<p>Each abstract should be no longer than <strong>250 words</strong> and must include <strong>6 keywords</strong>. The conference will partner with Journal of Rural Studies, Elsevier and Research in Globalization, Elsevier to publish special issues featuring selected conference papers. The best abstracts will be invited to submit full papers for consideration in these special issues.&nbsp;</p>',
            ],
            'committees' => [
                [
                    "name" => "Prof. Holly BARCUS",
                    "institute" => "Macalester College, USA",
                    "photo" => "default/prof/2.jpg",
                ],
                [
                    "name" => "Prof. Avishek DATA",
                    "institute" => "Asian Institute of Technology, Thailand",
                    "photo" => "default/prof/7.jpg",
                ],
                [
                    'name' => 'Prof. Barbaros GÖNENÇGIL',
                    'institute' => 'Istanbul University, Turkey',
                    'photo' => 'default/prof/1.jpg',
                ],
                [
                    'name' => 'Prof. Yansui LIU',
                    'institute' => 'Chinese Academy of Sciences, China',
                    'photo' => 'default/prof/5.jpg',
                ],
                [
                    'name' => 'Assoc. Prof. Yuheng LI',
                    'institute' => 'Chinese Academy of Sciences, China',
                    'photo' => 'default/prof/9.jpg',
                ],
                [
                    'name' => 'Assoc. Prof. Thi Phuoc Lai NGUYEN',
                    'institute' => 'Asian Institute of Technology, Thailand',
                    'photo' => 'default/prof/8.jpg',
                ],
                [
                    'name' => 'Prof. Guy, ROBINSON',
                    'institute' => 'University of Adelaide, Australia',
                    'photo' => 'default/prof/4.jpg',
                ],
                [
                    'name' => 'Prof. Rajendra SHRESTHA',
                    'institute' => 'Asian Institute of Technology, Thailand',
                    'photo' => 'default/prof/6.jpg',
                ],
                [
                    'name' => 'Prof. Darren SMITH',
                    'institute' => 'Loughborough University, UK',
                    'photo' => 'default/prof/3.jpg',
                ],
            ],
            'organizers' => [
                [
                    "name" => "Assoc. Prof. Thi Phuoc Lai NGUYEN",
                    "photo" => "default/prof/8.jpg",
                    "institute" => "Asian Institute of Technology, Thailand",
                ],
                [
                    "name" => "Prof. Guy, ROBINSON",
                    "photo" => "default/prof/4.jpg",
                    "institute" => "University of Adelaide, Australia",
                ],
                [
                    "name" => "Assoc. Prof. Yuheng LI",
                    "photo" => "default/prof/9.jpg",
                    "institute" => "Chinese Academy of Sciences, China",
                ],
            ]
        ]);
    }
}
