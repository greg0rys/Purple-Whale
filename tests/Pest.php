<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your bug binds a specific Test Case to all
| your test files in a given folder. By default, it will apply the
| Laravel TestCase to the "Feature" and "Unit" folders.
|
*/

// Bind the base TestCase to Unit tests
uses(TestCase::class)->in('Unit');

// Bind the base TestCase AND the DB Refresher to Feature tests
uses(
    TestCase::class,
    RefreshDatabase::class // <--- The DB Refresher goes here
)->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations & Functions
|--------------------------------------------------------------------------
| You can also define global custom expectations and helper functions here.
*/
