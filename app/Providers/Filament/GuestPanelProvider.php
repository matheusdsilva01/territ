<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Filament\Guest\Pages\Community;
use App\Filament\Guest\Pages\Home;
use App\Filament\Guest\Pages\Post;
use App\Filament\Shared\Pages\LoginPage;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;

final class GuestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('guest')
            ->path('')
            ->colors([
                'primary' => Color::Purple,
            ])
            ->discoverResources(in: app_path('Filament/Guest/Resources'), for: 'App\Filament\Guest\Resources')
            ->discoverPages(in: app_path('Filament/Guest/Pages'), for: 'App\Filament\Guest\Pages')
            ->routes(function (): void {
                Route::get('/login', LoginPage::class);
            })
            ->pages([
                Home::class,
                Community::class,
                Post::class,
            ])
            ->sidebarFullyCollapsibleOnDesktop()
            ->discoverWidgets(in: app_path('Filament/Guest/Widgets'), for: 'App\Filament\Guest\Widgets')
            ->widgets([])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([]);
    }
}
