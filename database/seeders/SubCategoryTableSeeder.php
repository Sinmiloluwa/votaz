<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            [
                'id' => 1,
                'name' => 'Data Analyst',
                'category_id' => 1 
            ],

            [
                'id' => 2,
                'name' => 'Data Analyst',
                'category_id' => 2 
            ],

            [
                'id' => 3,
                'name' => 'Data Scientist & Engineer',
                'category_id' => 1  
            ],
            [
                'id' => 4,
                'name' => 'Data Scientist & Engineer',
                'category_id' => 2 
            ],
            [
                'id' => 5,
                'name' => 'VISUAL DESIGNER',
                'category_id' => 1  
            ],
            [
                'id' => 6,
                'name' => 'DevOps Expert',
                'category_id' => 1  
            ],
            [
                'id' => 7,
                'name' => 'DevOps Expert',
                'category_id' => 2  
            ],
            [
                'id' => 8,
                'name' => 'Digital Marketer',
                'category_id' => 1 
                 
            ],
            [
                'id' => 9,
                'name' => 'Digital Marketer',
                'category_id' => 2 
            ],
            [
                'id' => 10,
                'name' => 'Game Developer',
                'category_id' => 1  
            ],
            [
                'id' => 11,
                'name' => 'Game Developer',
                'category_id' => 2  
            ],
            [
                'id' => 12,
                'name' => 'GIS Analyst',
                'category_id' => 1  
            ],
            [
                'id' => 13,
                'name' => 'GIS Analyst',
                'category_id' => 2  
            ],
            [
                'id' => 14,
                'name' => 'Investment Analyst',
                'category_id' => 1  
            ],
            [
                'id' => 15,
                'name' => 'Investment Analyst',
                'category_id' => 2  
            ],
            [
                'id' => 16,
                'name' => 'IT Support Engineer',
                'category_id' => 1  
            ],
            [
                'id' => 17,
                'name' => 'IT Support Engineer',
                'category_id' => 2  
            ],
            [
                'id' => 18,
                'name' => 'Linkedin Influencer',
                'category_id' => 1  
            ],
            [
                'id' => 19,
                'name' => 'Linkedin Influencer',
                'category_id' => 2  
            ],
            [
                'id' => 20,
                'name' => 'Mobile Developer',
                'category_id' => 1  
            ],
            [
                'id' => 21,
                'name' => 'Mobile Developer',
                'category_id' => 2  
            ],
            [
                'id' => 22,
                'name' => 'Product Designer',
                'category_id' => 1  
            ],
            [
                'id' => 23,
                'name' => 'Product Designer',
                'category_id' => 2  
            ],
            [
                'id' => 24,
                'name' => 'Product Growth Expert',
                'category_id' => 1  
            ],
            [
                'id' => 25,
                'name' => 'Product Growth Expert',
                'category_id' => 2  
            ],
            [
                'id' => 26,
                'name' => 'Product Manager',
                'category_id' => 1  
            ],
            [
                'id' => 27,
                'name' => 'Product Manager',
                'category_id' => 2  
            ],
            [
                'id' => 28,
                'name' => 'Quality Assurance Specialist',
                'category_id' => 1  
            ],
            [
                'id' => 29,
                'name' => 'Quality Assurance Specialist',
                'category_id' => 2 
            ],
            [
                'id' => 30,
                'name' => 'Social Media Manager',
                'category_id' => 1  
            ],
            [
                'id' => 31,
                'name' => 'Social Media Manager',
                'category_id' => 2  
            ],
            [
                'id' => 32,
                'name' => 'Software Developer (Backend)',
                'category_id' => 1 
            ],
            [
                'id' => 33,
                'name' => 'Software Developer (Backend)',
                'category_id' => 2 
            ],
            [
                'id' => 34,
                'name' => 'Software Developer (Frontend)',
                'category_id' => 1 
            ],
            [
                'id' => 35,
                'name' => 'Software Developer (Frontend)',
                'category_id' => 2 
            ],
            [
                'id' => 36,
                'name' => 'Start-Up Founder',
                'category_id' => 1 
            ],
            [
                'id' => 37,
                'name' => 'Start-Up Founder',
                'category_id' => 2 
            ],
            [
                'id' => 38,
                'name' => 'Tech Trainer of the Year',
                'category_id' => 3 
            ],
            [
                'id' => 39,
                'name' => 'Technical Accountant',
                'category_id' => 1 
            ],
            [
                'id' => 40,
                'name' => 'Technical Accountant',
                'category_id' => 2 
            ],
            [
                'id' => 41,
                'name' => 'Technical Lawyer',
                'category_id' => 1 
            ],
            [
                'id' => 42,
                'name' => 'Technical Lawyer',
                'category_id' => 2 
            ],
            [
                'id' => 43,
                'name' => 'Visual Designer',
                'category_id' => 1 
            ],
            [
                'id' => 44,
                'name' => 'Visual Designer',
                'category_id' => 2 
            ],
            [
                'id' => 45,
                'name' => 'Tech HR Personnel',
                'category_id' => 1 
            ],
            [
                'id' => 46,
                'name' => 'Tech HR Personnel',
                'category_id' => 2  
            ],
            [
                'id' => 47,
                'name' => 'Health Care Startup',
                'category_id' => 1  
            ],
            [
                'id' => 48,
                'name' => 'Health Care Startup',
                'category_id' => 2 
            ],
            [
                'id' => 49,
                'name' => 'Legal Tech Startup',
                'category_id' => 1  
            ],
            [
                'id' => 50,
                'name' => 'Legal Tech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 51,
                'name' => 'Edutech Startup',
                'category_id' => 1  
            ],
            [
                'id' => 52,
                'name' => "Edutech Startup",
                'category_id' => 2  
            ],
            [
                'id' => 53,
                'name' => 'Most Beautiful Tech Lady of the Year',
                'category_id' => 3  
            ],
            [
                'id' => 54,
                'name' => 'Insurtech Startup',
                'category_id' => 1  
            ],
            [
                'id' => 55,
                'name' => 'Insurtech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 56,
                'name' => 'AI Tech Startup',
                'category_id' => 1 
            ],
            [
                'id' => 57,
                'name' => 'AI Tech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 58,
                'name' => 'Proptech Startup',
                'category_id' => 1  
            ],
            [
                'id' => 59,
                'name' => 'Proptech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 60,
                'name' => 'Agrictech Startup',
                'category_id' => 1  
            ],
            [
                'id' => 61,
                'name' => 'Agrictech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 62,
                'name' => 'E-commerce Startup',
                'category_id' => 1  
            ],
            [
                'id' => 63,
                'name' => 'E-commerce Startup',
                'category_id' => 2  
            ],
            [
                'id' => 64,
                'name' => 'Enterprise Company',
                'category_id' => 1  
            ],
            [
                'id' => 65,
                'name' => 'Enterprise Company',
                'category_id' => 2  
            ],
            [
                'id' => 66,
                'name' => 'Design Company',
                'category_id' => 1  
            ],
            [
                'id' => 67,
                'name' => 'Design Company',
                'category_id' => 2  
            ],
            [
                'id' => 68,
                'name' => 'Fintech Startup',
                'category_id' => 1  
            ],
            [
                'id' => 69,
                'name' => 'Fintech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 70,
                'name' => 'Energy Tech Startup',
                'category_id' => 1  
            ],
            [
                'id' => 71,
                'name' => 'Energy Tech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 72,
                'name' => 'Marketing Company',
                'category_id' => 2  
            ],
            [
                'id' => 73,
                'name' => 'Logistics Company',
                'category_id' => 1  
            ],
            [
                'id' => 74,
                'name' => 'Logistics Comapny',
                'category_id' => 2  
            ],
            [
                'id' => 75,
                'name' => 'Information Technology Company',
                'category_id' => 1  
            ],
            [
                'id' => 76,
                'name' => 'Information Technology Company',
                'category_id' => 2  
            ],
            [
                'id' => 77,
                'name' => 'Marketing Company',
                'category_id' => 1  
            ]

        ]);
    }
}
