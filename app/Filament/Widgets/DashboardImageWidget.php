<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class DashboardImageWidget extends Widget
{
    protected static string $view = 'filament.widgets.dashboard-image-widget';

    public static function canView(): bool
    {
        return true;
    }
}
