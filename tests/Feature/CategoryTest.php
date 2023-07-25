<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    public function testIfCategoryWasCreated(): void
    {
        $arr = [
            "name" => "Uniq Test"
        ];

        $result = Category::create($arr);
        $this->assertInstanceOf(Category::class, $result);

    }
}