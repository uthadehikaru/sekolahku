<?php

use App\Filament\Resources\UserResource;
use App\Models\User;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('can list users', function () {
    $this->get(UserResource::getUrl('index'))->assertSuccessful();
});
