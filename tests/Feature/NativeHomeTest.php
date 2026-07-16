<?php

use Native\Mobile\Testing\Native;

it('renders the original welcome design with native components', function () {
    $logoPath = public_path('images/nativephp-logo.png');

    expect($logoPath)->toBeFile();

    Native::visit('/')
        ->assertSee('Your app is ready.')
        ->assertSee('Read the Docs')
        ->assertSee('Join the Community')
        ->assertSee('Explore on GitHub')
        ->assertSee('Built on NativePHP · Made by Bifrost')
        ->assertSee('Powered by Laravel')
        ->assertMissingElement('top_bar')
        ->assertElement('column', fn (array $node): bool => ($node['ref'] ?? null) === 'welcome-screen'
            && ($node['style']['bg_color'] ?? null) === '#FAFAFA'
            && ($node['props']['dark_bg_color'] ?? null) === '#0A0A0A'
            && ($node['layout']['width'] ?? null) === 'fill'
            && ($node['layout']['height'] ?? null) === 'fill'
            && ($node['layout']['align_items'] ?? null) === 1
            && ($node['layout']['justify_content'] ?? null) === 1
            && ($node['layout']['safe_area'] ?? null) === 1)
        ->assertElement('column', fn (array $node): bool => ($node['ref'] ?? null) === 'welcome-card'
            && ($node['style']['bg_color'] ?? null) === '#FFFFFF'
            && ($node['props']['dark_bg_color'] ?? null) === '#161615'
            && ($node['style']['border_radius'] ?? null) === 16.0)
        ->assertElement('text', fn (array $node): bool => ($node['ref'] ?? null) === 'welcome-title'
            && ($node['props']['color'] ?? null) === '#1B1B18'
            && ($node['props']['dark_color'] ?? null) === '#EDEDEC')
        ->assertElement('text', fn (array $node): bool => ($node['ref'] ?? null) === 'welcome-subtitle'
            && ($node['props']['color'] ?? null) === '#706F6C'
            && ($node['props']['dark_color'] ?? null) === '#A1A09A')
        ->assertElement('row', fn (array $node): bool => ($node['ref'] ?? null) === 'nativephp-logo-container'
            && ($node['layout']['width'] ?? null) === 'fill'
            && ($node['layout']['justify_content'] ?? null) === 1)
        ->assertElement('image', fn (array $node): bool => ($node['ref'] ?? null) === 'nativephp-logo'
            && ($node['props']['src'] ?? null) === $logoPath
            && ($node['props']['alt'] ?? null) === 'NativePHP'
            && ($node['layout']['width'] ?? null) === 64.0
            && ($node['layout']['height'] ?? null) === 64.0
            && ($node['props']['fit'] ?? null) === 1)
        ->assertElement('row', fn (array $node): bool => ($node['ref'] ?? null) === 'docs-link'
            && ($node['style']['bg_color'] ?? null) === '#FAFAFA'
            && ($node['style']['border_color'] ?? null) === '#E5E5E5'
            && ($node['props']['dark_bg_color'] ?? null) === '#1F1F1E'
            && ($node['props']['dark_border_color'] ?? null) === '#3E3E3A')
        ->assertElement('column', fn (array $node): bool => ($node['ref'] ?? null) === 'welcome-footer'
            && ($node['layout']['width'] ?? null) === 'fill'
            && ($node['layout']['align_items'] ?? null) === 1)
        ->assertAccessible();
});

it('opens every welcome link through the native browser bridge', function () {
    $bridge = Native::fakeBridge()
        ->respondTo('Browser.OpenInApp', ['success' => true])
        ->respondTo('Browser.Open', ['success' => true]);

    Native::visit('/')
        ->tap('docs-link')
        ->tap('community-link')
        ->tap('github-link');

    $bridge
        ->assertCalled('Browser.OpenInApp', fn (array $params): bool => $params['url'] === 'https://nativephp.com/docs/mobile')
        ->assertCalled('Browser.Open', fn (array $params): bool => $params['url'] === 'https://discord.gg/nativephp')
        ->assertCalled('Browser.Open', fn (array $params): bool => $params['url'] === 'https://github.com/NativePHP')
        ->assertCalledTimes('Browser.OpenInApp', 1)
        ->assertCalledTimes('Browser.Open', 2)
        ->assertCallOrder([
            'Browser.OpenInApp',
            'Browser.Open',
            'Browser.Open',
        ]);
});
