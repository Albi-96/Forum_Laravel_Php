<?php

test('Posting Threads.', function () {
    $response = $this->get('/posts/create');
    $response->assertStatus(302);
});

