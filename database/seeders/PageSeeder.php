<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [];

        $homePage = [
            [
                'name' => 'home',
                'place' => 'top',
                'header' => '',
                'content' => '<h1>Lorem ipsum dolor sit amet.</h1>
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, blanditiis.</h3>
                    <button>Get Support Today</button>',
                'image' => 'homepage-hero-hps.jpg'
            ],
            [
                'name' => 'home',
                'place' => 'middle',
                'header' => '',
                'content' => '<h1>Lorem ipsum dolor sit, amet consectetur adipisicing</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt harum sint culpa aliquam nobis, quasi modi impedit aliquid atque alias repellendus minus nostrum delectus dolore voluptate quae vel molestias! Tempore laborum, maxime est soluta fugiat similique. Iusto voluptatem nam officiis dolores aliquam? Et blanditiis amet molestiae impedit quam porro natus hic eaque doloribus, harum magnam sint qui animi. Placeat, deserunt!</p>',
                'image' => ''
            ],
            [
                'name' => 'home',
                'place' => 'middle_section_1',
                'header' => '',
                'content' => '<img src="images/home-services-clinical.png">
                    <h2>Lorem & dolor.</h2>
                    <p>elit. Laboriosam, numquam?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias explicabo cum, vero sunt reiciendis modi aut quis non aliquam nobis quod doloribus perferendis cumque? Ducimus amet itaque, nesciunt commodi blanditiis quo natus rem non numquam eligendi consectetur dicta dolorum ea repudiandae error voluptas iste! Asperiores eveniet iure ab soluta voluptate!</p>
                    <button class="section_3_button">Lorem, ipsum.</button>',
                'image' => ''
            ],
            [
                'name' => 'home',
                'place' => 'middle_section_2',
                'header' => '',
                'content' => '<img src="images/home-services-clinical.png">
                    <h2>Lorem & dolor.</h2>
                    <p>elit. Laboriosam, numquam?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias explicabo cum, vero sunt reiciendis modi aut quis non aliquam nobis quod doloribus perferendis cumque? Ducimus amet itaque, nesciunt commodi blanditiis quo natus rem non numquam eligendi consectetur dicta dolorum ea repudiandae error voluptas iste! Asperiores eveniet iure ab soluta voluptate!</p>
                    <button class="section_3_button">Lorem, ipsum.</button>',
                'image' => ''
            ],
            [
                'name' => 'home',
                'place' => 'middle_section_3',
                'header' => '',
                'content' => '<img src="images/home-services-clinical.png">
                    <h2>Lorem & dolor.</h2>
                    <p>elit. Laboriosam, numquam?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias explicabo cum, vero sunt reiciendis modi aut quis non aliquam nobis quod doloribus perferendis cumque? Ducimus amet itaque, nesciunt commodi blanditiis quo natus rem non numquam eligendi consectetur dicta dolorum ea repudiandae error voluptas iste! Asperiores eveniet iure ab soluta voluptate!</p>
                    <button class="section_3_button">Lorem, ipsum.</button>',
                'image' => ''
            ],
            [
                'name' => 'home',
                'place' => 'bottom',
                'header' => '',
                'content' => '<h1>Schedule A Meeting with Healthcare Provider Solutions</h1>
                    <p>Our team of dedicated professionals is standing by to assist you. With our combined experience and easy-to-use online resources, we have many ways to help your agency regardless of your location.
                    <br><br> How can we help your agency succeed? Submit the form to schedule a meeting to speak with us one-on-one.</p>',
                'image' => 'schedule-a-call.jpg'
            ],
        ];

        $about = [
            [
                'name' => 'about',
                'place' => 'vision',
                'header' => '',
                'content' => '<h1>Our Vision</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate autem accusantium culpa similique laborum inventore iure atque, ad error consequatur!</p>',
                'image' => ''
            ],
            [
                'name' => 'about',
                'place' => 'mission',
                'header' => '',
                'content' => '<h1>Our Mission</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex ducimus veniam iure repellat, rem tempora consectetur vitae maiores odio molestiae.</p>',
                'image' => ''
            ]
        ];

        $pages['home'] = $homePage;
        $pages['about'] = $about;

        foreach ($pages as $page) {
            foreach ($page as $section) {
                if (!Page::where('name', $section['name'])->where('place', $section['place'])->first()) {
                    Page::create($section);
                }
            }
        }
    }
}
