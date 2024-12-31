<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CustomDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.custom-dashboard';
    protected static ?string $slug = '/';
    protected static ?string $title = 'Dashboard';

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }
}
