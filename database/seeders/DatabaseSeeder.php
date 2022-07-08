<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Destination;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Admin1',
            'email' => 'admintravelend@gmail.com',
            'password' => bcrypt('123456'),
            'role_as' => 'admin',
        ]);

        User::create([
            'username' => 'Danu14',
            'email' => 'danuart14@gmail.com',
            'password' => bcrypt('123456'),
            'role_as' => 'user',
        ]);

        Category::create([
            'name' => 'Mountain',
            'slug' => 'mountain',
        ]);

        Category::create([
            'name' => 'Waterfall',
            'slug' => 'waterfall',
        ]);

        Category::create([
            'name' => 'Beach',
            'slug' => 'beach',
        ]);

        Category::create([
            'name' => 'Aurora',
            'slug' => 'aurora',
        ]);

        Category::create([
            'name' => 'Grand Canyon',
            'slug' => 'grand-canyon',
        ]);

        Category::create([
            'name' => 'Lake',
            'slug' => 'lake',
        ]);

        Category::create([
            'name' => 'Hotel & Villa',
            'slug' => 'hotel&villa',
        ]);

        Category::create([
            'name' => 'Other',
            'slug' => 'other',
        ]);



        // CATEGORY MOUNTAIN
        Destination::create([
            'category_id' => 1,
            'name' => 'Bromo Mountain',
            'slug' => 'bromo-mountain',            
            'price' => '205',
            'time' => '12 pm - 12 am',
            'location' => 'Indonesia',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 1,
            'name' => 'Everest Mountain',
            'slug' => 'everest-mountain',            
            'price' => '320',
            'time' => '12 pm - 12 am',
            'location' => 'Nepal',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 1,
            'name' => 'Moena Mountain',
            'slug' => 'moena-mountain',            
            'price' => '295',
            'time' => '12 pm - 12 am',
            'location' => 'Italy',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 1,
            'name' => 'Snowdonia Mountain',
            'slug' => 'snowdonia-mountain',            
            'price' => '260',
            'time' => '12 pm - 12 am',
            'location' => 'Wales',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);



        // CATEGORY WATERFALL
        Destination::create([
            'category_id' => 2,
            'name' => 'Havasu Falls',
            'slug' => 'havasu-falls',            
            'price' => '410',
            'time' => '6 pm - 6 am',
            'location' => 'United States',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 2,
            'name' => 'Multnomah Falls',
            'slug' => 'multnomah-falls',            
            'price' => '295',
            'time' => '6 pm - 6 am',
            'location' => 'United States',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 2,
            'name' => 'Seljalandsfoss Falls',
            'slug' => 'seljalandsfoss-falls',            
            'price' => '375',
            'time' => '6 pm - 6 am',
            'location' => 'Iceland',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);



        // CATEGORY BEACH
        Destination::create([
            'category_id' => 3,
            'name' => 'Isla Saboga Beach',
            'slug' => 'isla-saboga-beach',            
            'price' => '205',
            'time' => '12 pm - 12 am',
            'location' => 'Panama',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 3,
            'name' => 'Isle Of Pines Beach',
            'slug' => 'isle-of-pines-beach',            
            'price' => '230',
            'time' => '12 pm - 12 am',
            'location' => 'France',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 3,
            'name' => 'Kauai Beach',
            'slug' => 'kauai-beach',            
            'price' => '245',
            'time' => '12 pm - 12 am',
            'location' => 'Hawai',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 3,
            'name' => 'Lampuuk Beach',
            'slug' => 'lampuuk-beach',            
            'price' => '285',
            'time' => '12 pm - 12 am',
            'location' => 'Indonesia',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 3,
            'name' => 'Maldives Beach',
            'slug' => 'maldives-beach',            
            'price' => '505',
            'time' => '12 pm - 12 am',
            'location' => 'Maladewa',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 3,
            'name' => 'Mcway Beach',
            'slug' => 'mcway-beach',            
            'price' => '100',
            'time' => '12 pm - 12 am',
            'location' => 'United States',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 3,
            'name' => 'Playa De La Misericordia Beach',
            'slug' => 'playa-de-la-misericordia-beach',            
            'price' => '195',
            'time' => '12 pm - 12 am',
            'location' => 'Spain',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 3,
            'name' => 'Waialua Beach',
            'slug' => 'waialua-beach',            
            'price' => '150',
            'time' => '12 pm - 12 am',
            'location' => 'United States',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);



        // CATEGORY AURORA
        Destination::create([
            'category_id' => 4,
            'name' => 'Bodo Night',
            'slug' => 'bodo-night',            
            'price' => '200',
            'time' => '10 am - 5 pm',
            'location' => 'Norway',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 4,
            'name' => 'Hella Night',
            'slug' => 'hella-night',            
            'price' => '270',
            'time' => '10 am - 5 pm',
            'location' => 'Iceland',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 4,
            'name' => 'Tromso Night',
            'slug' => 'tromso-night',            
            'price' => '130',
            'time' => '10 am - 5 pm',
            'location' => 'Norway',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);



        // CATEGORY GRAND CANYON
        Destination::create([
            'category_id' => 5,
            'name' => 'Colorado Springs Canyon',
            'slug' => 'colorado-springs-canyon',            
            'price' => '470',
            'time' => '8 pm - 5 am',
            'location' => 'United States',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 5,
            'name' => 'Horseshoe Bend Canyon',
            'slug' => 'horseshoe-bend-canyon',            
            'price' => '400',
            'time' => '8 pm - 5 am',
            'location' => 'United States',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 5,
            'name' => 'Stakkholtsgja Canyon',
            'slug' => 'stakkholtsgja-canyon',            
            'price' => '460',
            'time' => '8 pm - 5 am',
            'location' => 'Iceland',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 5,
            'name' => 'Oljato- Monument Valley Canyon',
            'slug' => 'oljato-monument-valley-canyon',            
            'price' => '355',
            'time' => '8 pm - 5 am',
            'location' => 'United States',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);



        // CATEGORY LAKE
        Destination::create([
            'category_id' => 6,
            'name' => 'Freibergsee Lake',
            'slug' => 'freibergsee-lake',            
            'price' => '320',
            'time' => '12 pm - 12 am',
            'location' => 'Germany',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 6,
            'name' => 'Pragser Wildsee Lake',
            'slug' => 'pragser-wildsee-lake',            
            'price' => '275',
            'time' => '12 pm - 12 am',
            'location' => 'Italy',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);



        // CATEGORY HOTEL & VILLA
        Destination::create([
            'category_id' => 7,
            'name' => 'Jempana Villa',
            'slug' => 'jempana-villa',            
            'price' => '525',
            'time' => '12 pm - 12 am',
            'location' => 'Indonesia',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 7,
            'name' => 'Jumeirah Hotel',
            'slug' => 'jumeirah-hotel',            
            'price' => '600',
            'time' => '12 pm - 12 am',
            'location' => 'Dubai',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 7,
            'name' => 'Samujana Villa',
            'slug' => 'samujana-villa',            
            'price' => '485',
            'time' => '12 pm - 12 am',
            'location' => 'Thailand',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 7,
            'name' => 'Santorini Villa',
            'slug' => 'santorini-villa',            
            'price' => '625',
            'time' => '12 pm - 12 am',
            'location' => 'Yunani',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);



        // CATEGORY HOTEL
        Destination::create([
            'category_id' => 8,
            'name' => 'Batu Caves',
            'slug' => 'batu-caves',            
            'price' => '170',
            'time' => '7 pm - 9 am',
            'location' => 'Malaysia',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);

        Destination::create([
            'category_id' => 8,
            'name' => 'Cappadocia',
            'slug' => 'cappadocia',            
            'price' => '320',
            'time' => '12 pm - 12 am',
            'location' => 'Turky',
            'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At duis molestie ut fermentum. Scelerisque molestie varius in mauris semper habitasse commodo sed. Amet porta blandit proin at tincidunt sit mattis. Lorem eget nec congue tristique lacus ornare nulla. Pellentesque turpis non malesuada sit lectus sed porttitor egestas. Sapien gravida amet velit et. Placerat aliquet tempus, felis donec volutpat. Sit molestie adipiscing diam cras mi vitae.</p>',
            'status' => 1
        ]);
    }
}
