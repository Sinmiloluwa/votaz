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
                'name' => 'Exceptional Data Analyst',
                'category_id' => 1 
            ],

            [
                'id' => 2,
                'name' => 'Promising Data Analyst',
                'category_id' => 1 
            ],

            [
                'id' => 3,
                'name' => 'Exceptional Data Scientist',
                'category_id' => 1  
            ],
            [
                'id' => 4,
                'name' => 'Promising Data Scientist',
                'category_id' => 1 
            ],
            [
                'id' => 5,
                'name' => 'Exceptional Visual Designer',
                'category_id' => 1  
            ],
            [
                'id' => 6,
                'name' => 'Promising Visual Designer',
                'category_id' => 1  
            ],
            [
                'id' => 7,
                'name' => 'Exceptional DevOps Expert',
                'category_id' => 1  
            ],
            [
                'id' => 8,
                'name' => 'Promising DevOps Expert',
                'category_id' => 1  
            ],
            [
                'id' => 9,
                'name' => 'Marketing Experts',
                'category_id' => 1 
                 
            ],
            [
                'id' => 10,
                'name' => 'Game Developer',
                'category_id' => 1  
            ],
        
            [
                'id' => 11,
                'name' => 'Exceptional GIS Analyst',
                'category_id' => 1  
            ],
            [
                'id' => 12,
                'name' => 'Promising GIS Analyst',
                'category_id' => 2  
            ],
            [
                'id' => 13,
                'name' => 'Investment Analyst',
                'category_id' => 1  
            ],
           
            [
                'id' => 14,
                'name' => 'Exceptional 3D Animator',
                'category_id' => 1  
            ],
            [
                'id' => 15,
                'name' => 'Promising 3D Animator',
                'category_id' => 1  
            ],
            [
                'id' => 16,
                'name' => 'Linkedin Influencer',
                'category_id' => 1  
            ],
        
            [
                'id' => 17,
                'name' => 'Exceptional Mobile Developer',
                'category_id' => 1  
            ],
            [
                'id' => 18,
                'name' => 'Promising Mobile Developer',
                'category_id' => 1  
            ],
            [
                'id' => 19,
                'name' => 'Exceptional Product Designer',
                'category_id' => 1  
            ],
            [
                'id' => 20,
                'name' => 'Promising Product Designer',
                'category_id' => 1  
            ],
            [
                'id' => 21,
                'name' => 'Exceptional Product Growth Expert',
                'category_id' => 1  
            ],
            [
                'id' => 22,
                'name' => 'Promising Product Growth Expert',
                'category_id' => 1 
            ],
            [
                'id' => 23,
                'name' => 'Exceptional Product Manager',
                'category_id' => 1  
            ],
            [
                'id' => 24,
                'name' => 'Promising Product Manager',
                'category_id' => 1  
            ],
            [
                'id' => 25,
                'name' => 'Automation and Robotics Expert',
                'category_id' => 1  
            ],
            [
                'id' => 26,
                'name' => 'C-Level Executive',
                'category_id' => 1 
            ],
            [
                'id' => 27,
                'name' => 'Exceptional Social Media Manager',
                'category_id' => 1  
            ],
            [
                'id' => 28,
                'name' => 'Promising Social Media Manager',
                'category_id' => 1  
            ],
            [
                'id' => 29,
                'name' => 'Exceptional Software Developer (Backend)',
                'category_id' => 1 
            ],
            [
                'id' => 30,
                'name' => 'Promising Software Developer (Backend)',
                'category_id' => 1 
            ],
            [
                'id' => 31,
                'name' => 'Exceptional Software Developer (Frontend)',
                'category_id' => 1 
            ],
            [
                'id' => 32,
                'name' => 'Promising Software Developer (Frontend)',
                'category_id' => 1
            ],
            [
                'id' => 33,
                'name' => 'Exceptional Content Writer',
                'category_id' => 1 
            ],
            [
                'id' => 34,
                'name' => 'Promising Content Writer',
                'category_id' => 1 
            ],
            [
                'id' => 35,
                'name' => 'Tech Trainer of the Year',
                'category_id' => 1
            ],
            [
                'id' => 36,
                'name' => 'Technical Accountant',
                'category_id' => 1 
            ],
        
            [
                'id' => 37,
                'name' => 'Technical Lawyer',
                'category_id' => 1 
            ],
            [
                'id' => 38,
                'name' => 'Exceptional Customer Sucess',
                'category_id' => 1 
            ],
            [
                'id' => 39,
                'name' => 'Promising Customer Sucess',
                'category_id' => 1 
            ],
            [
                'id' => 40,
                'name' => 'Exceptional CyberSecurity Expert',
                'category_id' => 1 
            ],
            [
                'id' => 41,
                'name' => 'Promising CyberSecurity Expert',
                'category_id' => 1 
            ],
    
            [
                'id' => 42,
                'name' => 'Exceptional Visual Designer',
                'category_id' => 1 
            ],
            [
                'id' => 43,
                'name' => 'Promising Visual Designer',
                'category_id' => 1 
            ],
            [
                'id' => 44,
                'name' => 'Tech HR Personnel',
                'category_id' => 1 
            ],
            
            [
                'id' => 45,
                'name' => 'Health Care Startup',
                'category_id' => 2  
            ],
            [
                'id' => 46,
                'name' => 'Legal Tech Startup',
                'category_id' => 2 
            ],
            [
                'id' => 47,
                'name' => 'Edutech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 48,
                'name' => 'Most Beautiful Tech Lady of the Year',
                'category_id' => 1 
            ],
            [
                'id' => 49,
                'name' => 'Insurtech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 50,
                'name' => 'AI Tech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 51,
                'name' => 'Proptech Startup',
                'category_id' => 2  
            ],
            [
                'id' => 52,
                'name' => 'Agrictech Startup',
                'category_id' => 2 
            ],
            [
                'id' => 53,
                'name' => 'E-commerce Startup',
                'category_id' => 2  
            ],
            [
                'id' => 54,
                'name' => 'Enterprise Company',
                'category_id' => 2  
            ],
            [
                'id' => 55,
                'name' => 'Design Company',
                'category_id' => 2  
            ],
            [
                'id' => 56,
                'name' => 'Fintech Startup',
                'category_id' => 2 
            ],
            [
                'id' => 57,
                'name' => 'Energy Tech Startup',
                'category_id' => 2 
            ],
            [
                'id' => 58,
                'name' => 'Marketing Company',
                'category_id' => 2  
            ],
            [
                'id' => 59,
                'name' => 'Logistics Company',
                'category_id' => 2  
            ],
            [
                'id' => 60,
                'name' => 'Information Technology Company',
                'category_id' => 2 
            ],
            [
                'id' => 61,
                'name' => 'Marketing Company',
                'category_id' => 2  
            ],
            [
                'id' => 62,
                'name' => 'Exceptional Quality Assurance Expert',
                'category_id' => 1 
            ],

            [
                'id' => 63,
                'name' => 'Promising Quality Assurance Expert',
                'category_id' => 1 
            ],
            [
                'id' => 64,
                'name' => 'Start-Up Founder',
                'category_id' => 1
            ],
            [
                'id' => 65,
                'name' => 'Company of the Year',
                'category_id' => 2
            ],
            [
                'id' => 66,
                'name' => 'Tech group of the Year',
                'category_id' => 2
            ],
            

        ]);
    }
}
