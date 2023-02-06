<?php

namespace Database\Seeders;

use App\Models\Fund;
use Illuminate\Database\Seeder;

class FundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funds = [];
        for ($i = 1; $i < 9; $i++) {
            $funds[] = [
                'category_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'user_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'name' => 'Help Harri get the treatment needs! ' . $i,
                'description' => "I am writing this on behave of Harris’s amazing parents. They have now been told there is no other options /treatment for Harri available on the NHS and his last chances are to raise money for treatment. Our last option is to fly him oversea to either Singapore or the USA to give him the best opportunity. The amount needed for treatment £1,000,000. Anything donated is appreciated by all Harri’s family and friends.",
                'image' => 'https://images.gofundme.com/ciJd6nnLrc84ccYPJy0ZgZoR7Ok=/720x405/https://d2g8igdw686xgo.cloudfront.net/63342779_1645028465725233_r.jpeg',
                'amount' => [25000,20000,35000][array_rand([25000,20000,35000])]
            ];
        }
        Fund::insert($funds);

        $funds = [];
        for ($i = 1; $i < 9; $i++) {
            $funds[] = [
                'category_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'user_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'name' => 'Save The Free Abandoned Airplane PROJECT PHOENIX ' . $i,
                'description' => "I am writing this on behave of Harris’s amazing parents. They have now been told there is no other options /treatment for Harri available on the NHS and his last chances are to raise money for treatment. Our last option is to fly him oversea to either Singapore or the USA to give him the best opportunity. The amount needed for treatment £1,000,000. Anything donated is appreciated by all Harri’s family and friends.",
                'image' => 'https://images.gofundme.com/ciJd6nnLrc84ccYPJy0ZgZoR7Ok=/720x405/https://d2g8igdw686xgo.cloudfront.net/63342779_1645028465725233_r.jpeg',
                'amount' => [25000,20000,35000][array_rand([25000,20000,35000])]
            ];
        }
        Fund::insert($funds);

        $funds = [];
        for ($i = 1; $i < 9; $i++) {
            $funds[] = [
                'category_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'user_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'name' => 'In loving memory of Honey Latonero ' . $i,
                'description' => "I am writing this on behave of Harris’s amazing parents. They have now been told there is no other options /treatment for Harri available on the NHS and his last chances are to raise money for treatment. Our last option is to fly him oversea to either Singapore or the USA to give him the best opportunity. The amount needed for treatment £1,000,000. Anything donated is appreciated by all Harri’s family and friends.",
                'image' => 'https://images.gofundme.com/ciJd6nnLrc84ccYPJy0ZgZoR7Ok=/720x405/https://d2g8igdw686xgo.cloudfront.net/63342779_1645028465725233_r.jpeg',
                'amount' => [25000,20000,35000][array_rand([25000,20000,35000])]
            ];
        }
        Fund::insert($funds);

        $funds = [];
        for ($i = 1; $i < 9; $i++) {
            $funds[] = [
                'category_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'user_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'name' => 'Support Desperate Ukrainian Children In Crisis ' . $i,
                'description' => "I am writing this on behave of Harris’s amazing parents. They have now been told there is no other options /treatment for Harri available on the NHS and his last chances are to raise money for treatment. Our last option is to fly him oversea to either Singapore or the USA to give him the best opportunity. The amount needed for treatment £1,000,000. Anything donated is appreciated by all Harri’s family and friends.",
                'image' => 'https://images.gofundme.com/ciJd6nnLrc84ccYPJy0ZgZoR7Ok=/720x405/https://d2g8igdw686xgo.cloudfront.net/63342779_1645028465725233_r.jpeg',
                'amount' => [25000,20000,35000][array_rand([25000,20000,35000])]
            ];
        }
        Fund::insert($funds);

        $funds = [];
        for ($i = 1; $i < 9; $i++) {
            $funds[] = [
                'category_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'user_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'name' => 'Child of Light Children’s Home & Resource Centre ' . $i,
                'description' => "I am writing this on behave of Harris’s amazing parents. They have now been told there is no other options /treatment for Harri available on the NHS and his last chances are to raise money for treatment. Our last option is to fly him oversea to either Singapore or the USA to give him the best opportunity. The amount needed for treatment £1,000,000. Anything donated is appreciated by all Harri’s family and friends.",
                'image' => 'https://images.gofundme.com/ciJd6nnLrc84ccYPJy0ZgZoR7Ok=/720x405/https://d2g8igdw686xgo.cloudfront.net/63342779_1645028465725233_r.jpeg',
                'amount' => [25000,20000,35000][array_rand([25000,20000,35000])]
            ];
        }
        Fund::insert($funds);

        $funds = [];
        for ($i = 1; $i < 9; $i++) {
            $funds[] = [
                'category_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'user_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'name' => 'Marketing Basics ' . $i,
                'description' => "I am writing this on behave of Harris’s amazing parents. They have now been told there is no other options /treatment for Harri available on the NHS and his last chances are to raise money for treatment. Our last option is to fly him oversea to either Singapore or the USA to give him the best opportunity. The amount needed for treatment £1,000,000. Anything donated is appreciated by all Harri’s family and friends.",
                'image' => 'https://images.gofundme.com/ciJd6nnLrc84ccYPJy0ZgZoR7Ok=/720x405/https://d2g8igdw686xgo.cloudfront.net/63342779_1645028465725233_r.jpeg',
                'amount' => [25000,20000,35000][array_rand([25000,20000,35000])]
            ];
        }
        Fund::insert($funds);

        $funds = [];
        for ($i = 1; $i < 9; $i++) {
            $funds[] = [
                'category_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'user_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'name' => 'Help Widows & Orphans Break Free From Poverty ' . $i,
                'description' => "I am writing this on behave of Harris’s amazing parents. They have now been told there is no other options /treatment for Harri available on the NHS and his last chances are to raise money for treatment. Our last option is to fly him oversea to either Singapore or the USA to give him the best opportunity. The amount needed for treatment £1,000,000. Anything donated is appreciated by all Harri’s family and friends.",
                'image' => 'https://images.gofundme.com/ciJd6nnLrc84ccYPJy0ZgZoR7Ok=/720x405/https://d2g8igdw686xgo.cloudfront.net/63342779_1645028465725233_r.jpeg',
                'amount' => [25000,20000,35000][array_rand([25000,20000,35000])]
            ];
        }
        Fund::insert($funds);

        $funds = [];
        for ($i = 1; $i < 9; $i++) {
            $funds[] = [
                'category_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'user_id' => [1,2,3,4,5,6][array_rand([1,2,3,4,5,6])],
                'name' => 'Help Ayo fund for her tuition fees ' . $i,
                'description' => "I am writing this on behave of Harris’s amazing parents. They have now been told there is no other options /treatment for Harri available on the NHS and his last chances are to raise money for treatment. Our last option is to fly him oversea to either Singapore or the USA to give him the best opportunity. The amount needed for treatment £1,000,000. Anything donated is appreciated by all Harri’s family and friends.",
                'image' => 'https://images.gofundme.com/ciJd6nnLrc84ccYPJy0ZgZoR7Ok=/720x405/https://d2g8igdw686xgo.cloudfront.net/63342779_1645028465725233_r.jpeg',
                'amount' => [25000,20000,35000][array_rand([25000,20000,35000])]
            ];
        }
        Fund::insert($funds);
    }
}
