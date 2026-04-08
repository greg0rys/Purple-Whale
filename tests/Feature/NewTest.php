<?php
use Illuminate\Support\Collection;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('it can test a collection to not be null', function(){
    $temp = collect([1,2,3,4]);
    expect($temp)->not()->toBeNull();
});
