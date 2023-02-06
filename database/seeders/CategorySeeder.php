<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Medical', 'image' => 'https://d25oniaj7o2jcw.cloudfront.net/photo-category-medical-uk@2x.jpg', 'heading' => 'Get help with medical fundraising', 'description' => 'With a GoFundMe, you can get immediate help with medical bills.', 'section_heading1' => "We're the leader in online medical fundraising", 'section_left_text1' => '250,000+', 'section_left_text2' => 'medical fundraisers per year', 'section_right_text1' => '$650 million+', 'section_right_text2' => 'raised per year'],
            ['name' => 'Funeral', 'image' => 'https://d25oniaj7o2jcw.cloudfront.net/photo-category-medical-uk@2x.jpg', 'heading' => 'Get help with medical fundraising', 'description' => 'With a GoFundMe, you can get immediate help with medical bills.', 'section_heading1' => "We're the leader in online medical fundraising", 'section_left_text1' => '250,000+', 'section_left_text2' => 'medical fundraisers per year', 'section_right_text1' => '$650 million+', 'section_right_text2' => 'raised per year'],
            ['name' => 'Emergency', 'image' => 'https://d25oniaj7o2jcw.cloudfront.net/photo-category-medical-uk@2x.jpg', 'heading' => 'Get help with medical fundraising', 'description' => 'With a GoFundMe, you can get immediate help with medical bills.', 'section_heading1' => "We're the leader in online medical fundraising", 'section_left_text1' => '250,000+', 'section_left_text2' => 'medical fundraisers per year', 'section_right_text1' => '$650 million+', 'section_right_text2' => 'raised per year'],
            ['name' => 'Charity', 'image' => 'https://d25oniaj7o2jcw.cloudfront.net/photo-category-medical-uk@2x.jpg', 'heading' => 'Get help with medical fundraising', 'description' => 'With a GoFundMe, you can get immediate help with medical bills.', 'section_heading1' => "We're the leader in online medical fundraising", 'section_left_text1' => '250,000+', 'section_left_text2' => 'medical fundraisers per year', 'section_right_text1' => '$650 million+', 'section_right_text2' => 'raised per year'],
            ['name' => 'Financial Emergency', 'image' => 'https://d25oniaj7o2jcw.cloudfront.net/photo-category-medical-uk@2x.jpg', 'heading' => 'Get help with medical fundraising', 'description' => 'With a GoFundMe, you can get immediate help with medical bills.', 'section_heading1' => "We're the leader in online medical fundraising", 'section_left_text1' => '250,000+', 'section_left_text2' => 'medical fundraisers per year', 'section_right_text1' => '$650 million+', 'section_right_text2' => 'raised per year'],
            ['name' => 'Animals', 'image' => 'https://d25oniaj7o2jcw.cloudfront.net/photo-category-medical-uk@2x.jpg', 'heading' => 'Get help with medical fundraising', 'description' => 'With a GoFundMe, you can get immediate help with medical bills.', 'section_heading1' => "We're the leader in online medical fundraising", 'section_left_text1' => '250,000+', 'section_left_text2' => 'medical fundraisers per year', 'section_right_text1' => '$650 million+', 'section_right_text2' => 'raised per year'],
        ];

        Category::insert($categories);
    }
}
