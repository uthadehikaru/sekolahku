<?php

use App\Models\User;

use function Pest\Laravel\actingAs;

test('can render login', function () {
    $this->get('/admin/login')
        ->assertStatus(200);
});

test('authenticated user can access the dashboard', function () {
    $user = User::factory()->create();

    actingAs($user)->get('/admin')
        ->assertStatus(200);
});

test('non authenticated user can not access the dashboard', function () {
    $user = User::factory()->create();

    $this->get('/admin')
        ->assertRedirect('admin/login');
});
