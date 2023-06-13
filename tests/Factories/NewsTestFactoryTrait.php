<?php

namespace Tests\Factories;

use App\Models\News;

trait NewsTestFactoryTrait
{
    protected function generateRandomNews()
    {
        return News::factory()->create();
    }
}
