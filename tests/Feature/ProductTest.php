<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    public function testIfProductWasCreated(): void
    {
        $category = new Category;
        $category->name = 'test';
        $category->save();

        $arr = [
            'name' => 'Uniq test',
            'description' => 'Uniq test',
            'category_id' => $category->id,
            'price' => 12,
            'quantity' => 13,
        ];

        $result = Product::create($arr);
        $this->assertInstanceOf(Product::class, $result);

        $this->assertEquals($category->id, $result->category_id);
    }
}