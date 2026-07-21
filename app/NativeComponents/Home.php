<?php

namespace App\NativeComponents;

use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;
use Native\Mobile\Facades\Browser;

class Home extends NativeComponent
{
    public function openDocs(): void
    {
        Browser::inApp('https://nativephp.com/docs/mobile');
    }

    public function openDiscord(): void
    {
        Browser::open('https://discord.gg/nativephp');
    }

    public function openGitHub(): void
    {
        Browser::open('https://github.com/NativePHP');
    }

    public function render(): View
    {
        return view('native.home');
    }
}
