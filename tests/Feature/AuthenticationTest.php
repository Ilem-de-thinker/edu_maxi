<?php

use App\Models\Profile;
use App\Models\TutorSuit;
use App\Models\User;
use Livewire\Livewire;

it('registers a student and lands on the student dashboard', function () {
    Livewire::test('pages::auth.register')
        ->set('accountType', 'student')
        ->set('name', 'Jane Student')
        ->set('email', 'jane@example.com')
        ->set('password', 'password123')
        ->set('confirm_password', 'password123')
        ->call('save')
        ->assertRedirect(route('student_dashboard'));

    $user = User::where('email', 'jane@example.com')->first();

    expect($user)->not->toBeNull()
        ->and(auth()->user()->isStudent())->toBeTrue()
        ->and(Profile::where('user_id', $user->id)->exists())->toBeTrue()
        ->and(TutorSuit::where('user_id', $user->id)->exists())->toBeFalse();
});

it('registers a tutor and lands on the tutor dashboard', function () {
    Livewire::test('pages.auth.register')
        ->set('accountType', 'tutor')
        ->set('name', 'John Tutor')
        ->set('email', 'john@example.com')
        ->set('password', 'password123')
        ->set('confirm_password', 'password123')
        ->set('suit_name', 'Bright Scholars')
        ->set('phone', '+2348000000000')
        ->call('save')
        ->assertRedirect(route('tutor_dashboard'));

    $user = User::where('email', 'john@example.com')->first();

    expect($user)->not->toBeNull()
        ->and($user->isTutor())->toBeTrue()
        ->and(Profile::where('user_id', $user->id)->exists())->toBeTrue()
        ->and($user->tutorSuit->suit_name)->toBe('Bright Scholars')
        ->and($user->tutorSuit->phone)->toBe('+2348000000000')
        ->and($user->tutorSuit->suit_pass_key)->not->toBeNull();
});

it('validates tutor-only fields when registering as a tutor', function () {
    Livewire::test('pages.auth.register')
        ->set('accountType', 'tutor')
        ->set('name', 'John Tutor')
        ->set('email', 'john2@example.com')
        ->set('password', 'password123')
        ->set('confirm_password', 'password123')
        ->call('save')
        ->assertHasErrors(['suit_name']);
});

it('redirects a student to the student dashboard after login', function () {
    $user = User::factory()->create(['password' => bcrypt('password123')]);

    Livewire::test('pages.auth.login')
        ->set('email', $user->email)
        ->set('password', 'password123')
        ->call('login')
        ->assertRedirect(route('student_dashboard'));
});

it('redirects a tutor to the tutor dashboard after login', function () {
    $user = User::factory()->create(['password' => bcrypt('password123')]);
    TutorSuit::create([
        'user_id' => $user->id,
        'suit_name' => 'Bright Scholars',
        'suit_pass_key' => (string) Str::uuid(),
    ]);

    Livewire::test('pages.auth.login')
        ->set('email', $user->email)
        ->set('password', 'password123')
        ->call('login')
        ->assertRedirect(route('tutor_dashboard'));
});

it('redirects an admin to the orchid platform after login', function () {
    $admin = User::factory()->create([
        'password' => bcrypt('password123'),
        'permissions' => ['platform.index' => true],
    ]);

    Livewire::test('pages.auth.login')
        ->set('email', $admin->email)
        ->set('password', 'password123')
        ->call('login')
        ->assertRedirect(route('platform.index'));
});

it('keeps students out of the tutor dashboard', function () {
    $user = User::factory()->create();

    $this->actingAs($user)->get(route('tutor_dashboard'))->assertForbidden();
});

it('keeps tutors out of the student dashboard', function () {
    $user = User::factory()->create();
    TutorSuit::create([
        'user_id' => $user->id,
        'suit_name' => 'Bright Scholars',
        'suit_pass_key' => (string) Str::uuid(),
    ]);

    $this->actingAs($user)->get(route('student_dashboard'))->assertForbidden();
});
