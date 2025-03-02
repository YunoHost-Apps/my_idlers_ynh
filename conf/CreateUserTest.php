<?php

namespace Tests\Feature\Console;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_creates_with_valid_args(): void
    {
        $this->artisan('app:create-user', [
            'name' => 'ajaxray',
            'email' => 'user@ajaxray.com',
            'password' => '12345678',
        ])->expectsOutputToContain('User created');

        $this->assertDatabaseCount('users', 1);
    }

    public function test_cannot_create_user_with_invalid_email(): void
    {
        $this->artisan('app:create-user', [
            'name' => 'ajaxray',
            'email' => 'user@.com',
            'password' => '222222',
        ])->assertFailed()
            ->expectsOutputToContain('must be a valid email address.');

        $this->assertDatabaseEmpty('users');
    }

    public function test_cannot_create_user_with_duplicate_name(): void
    {
        $this->artisan('app:create-user', [
            'name' => 'ajaxray',
            'email' => 'user1@ajaxray.com',
            'password' => '111111',
        ])->assertSuccessful();

        $this->artisan('app:create-user', [
            'name' => 'ajaxray',
            'email' => 'user2@ajaxray.com',
            'password' => '222222',
        ])->assertFailed()
            ->expectsOutputToContain('name has already been taken.');

        $this->assertDatabaseCount('users', 1);
    }

    public function test_cannot_create_user_with_duplicate_email(): void
    {
        $this->artisan('app:create-user', [
            'name' => 'user1',
            'email' => 'user@ajaxray.com',
            'password' => '111111',
        ])->assertSuccessful();

        $this->artisan('app:create-user', [
            'name' => 'user2',
            'email' => 'user@ajaxray.com',
            'password' => '222222',
        ])->assertFailed()
            ->expectsOutputToContain('email has already been taken.');

        $this->assertDatabaseCount('users', 1);
    }

    public function test_created_users_are_verified_by_default(): void
    {
        $this->assertDatabaseEmpty('users');

        $this->freezeTime(function (Carbon $time) {
            $dateTimeStr = date('Y-m-d H:i:s');

            $this->artisan('app:create-user', [
                'name' => 'user1',
                'email' => 'user@ajaxray.com',
                'password' => '111111',
            ])->assertSuccessful();

            $this->assertDatabaseHas('users', ['email_verified_at' => $dateTimeStr]);
        });
    }

    public function test_created_users_can_be_kept_unverified(): void
    {
        $this->assertDatabaseEmpty('users');

        $this->artisan('app:create-user', [
            'name' => 'user1',
            'email' => 'user@ajaxray.com',
            'password' => '111111',
            '--unverified' => true
        ])->assertSuccessful();

        $this->assertDatabaseHas('users', ['email_verified_at' => null]);
    }
}
