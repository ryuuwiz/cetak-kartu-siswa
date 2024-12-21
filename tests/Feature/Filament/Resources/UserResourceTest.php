<?php

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Models\User;
use Filament\Actions\DeleteAction;
use function Pest\Livewire\livewire;

beforeEach(function () {
    /* The TestCase setup generates a user before each test, so we need to clear the table to make sure we have a clean slate. */
    DB::table('users')->truncate();
});

it('dapat membuat satu user', function () {
    $record = User::factory()->make();

    livewire(CreateUser::class)
        ->fillForm([
            'name' => $record->name,
            'email' => $record->email,
            'password' => $record->password,
            'passwordConfirmation' => $record->password,
        ])
        ->assertActionExists('create')
        ->call('create')
        ->assertHasNoFormErrors();

    $this->assertDatabaseHas(User::class, [
        'name' => $record->name,
        'email' => $record->email,
    ]);
});

it('dapat mengubah data user', function () {
    $record = User::factory()->create();
    $newRecord = User::factory()->make();

    livewire(EditUser::class, ['record' => $record->getRouteKey()])
        ->fillForm([
            'name' => $newRecord->name,
            'email' => $newRecord->email,
            'password' => $newRecord->password,
        ])
        ->assertActionExists('save')
        ->call('save')
        ->assertHasNoFormErrors();

    $this->assertDatabaseHas(User::class, [
        'name' => $newRecord->name,
        'email' => $newRecord->email,
        'password' => $newRecord->password,
    ]);
});

it('dapat menghapus data user', function () {
    $record = User::factory()->create();

    livewire(EditUser::class, ['record' => $record->getRouteKey()])
        ->assertActionExists('delete')
        ->callAction(DeleteAction::class);

    $this->assertModelMissing($record);
});
