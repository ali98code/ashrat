<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Create Parent Categories */

        $business = Category::create([
            'id' => 1,
            'name' => 'الأعمال',
            'slug' => 'business',
            'icon' => 'fas fa-business-time',
            'parent_id' => null
        ]);
        $programming = Category::create([
            'id' => 2,
            'name' => 'برمجيات',
            'slug' => 'programming',
            'icon' => 'fas fa-code',
            'parent_id' => null
        ]);
        $marketing = Category::create([
            'id' => 3,
            'name' => 'تسويق',
            'slug' => 'marketing',
            'icon' => 'fas fa-bullhorn',
            'parent_id' => null
        ]);
        $design = Category::create([
            'id' => 4,
            'name' => 'تصميم',
            'slug' => 'design',
            'icon' => 'fas fa-paint-brush',
            'parent_id' => null
        ]);
        $video = Category::create([
            'id' => 5,
            'name' => 'فيديو',
            'slug' => 'video',
            'icon' => 'fas fa-video',
            'parent_id' => null
        ]);

        /* Create Child Categories */
        Category::create([
            'name' => 'البيانات',
            'slug' => 'data',
            'icon' => null,
            'parent_id' => $business->id
        ]);
        Category::create([
            'name' => 'تطوير المواقع',
            'slug' => 'we-development',
            'icon' => null,
            'parent_id' => $programming->id
        ]);
        Category::create([
            'name' => 'إعلانات غوغل',
            'slug' => 'google-ads',
            'icon' => null,
            'parent_id' => $marketing->id
        ]);
        Category::create([
            'name' => 'تصميم شعار',
            'slug' => 'logo',
            'icon' => null,
            'parent_id' => $design->id
        ]);
        Category::create([
            'name' => 'مونتاج',
            'slug' => 'video-editing',
            'icon' => null,
            'parent_id' => $video->id
        ]);
    }
}
