<?php
use TestCase\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('can get a new user added to the database. ', function(){
    $comp = collect();
    $comp->push(1);
    expect($comp->count()->not()->toBe(0);x

});
