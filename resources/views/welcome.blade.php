<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Mimi') }} - Built with NativePHP</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles -->
        <style>
                *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
                html { font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif; line-height: 1.5; }
                body { min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1.5rem; background: linear-gradient(135deg, #fafafa 0%, #f0f0f0 100%); }
                @media (prefers-color-scheme: dark) {
                    body { background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%); color: #ededec; }
                }
                .container { max-width: 28rem; width: 100%; }
                .card { background: white; border-radius: 1rem; padding: 2.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1); }
                @media (prefers-color-scheme: dark) {
                    .card { background: #161615; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3); }
                }
                .logo { width: 4rem; height: 4rem; margin: 0 auto 1.5rem; }
                .title { font-size: 1.5rem; font-weight: 600; text-align: center; margin-bottom: 0.5rem; color: #1b1b18; }
                @media (prefers-color-scheme: dark) { .title { color: #ededec; } }
                .subtitle { font-size: 0.875rem; text-align: center; color: #706f6c; margin-bottom: 2rem; }
                @media (prefers-color-scheme: dark) { .subtitle { color: #a1a09a; } }
                .links { display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 2rem; }
                .link { display: flex; align-items: center; gap: 0.75rem; padding: 0.875rem 1rem; border-radius: 0.5rem; text-decoration: none; color: #1b1b18; background: #fafafa; border: 1px solid #e5e5e5; transition: all 0.15s; font-size: 0.875rem; }
                .link:hover { border-color: #d1d1d1; background: #f5f5f5; }
                @media (prefers-color-scheme: dark) {
                    .link { background: #1f1f1e; border-color: #3e3e3a; color: #ededec; }
                    .link:hover { border-color: #525250; background: #262625; }
                }
                .link-icon { width: 1.25rem; height: 1.25rem; flex-shrink: 0; }
                .link-text { flex: 1; }
                .link-arrow { width: 1rem; height: 1rem; opacity: 0.5; }
                .divider { height: 1px; background: #e5e5e5; margin: 1.5rem 0; }
                @media (prefers-color-scheme: dark) { .divider { background: #3e3e3a; } }
                .footer { text-align: center; font-size: 0.75rem; color: #a1a09a; }
                .footer a { color: inherit; text-decoration: underline; text-underline-offset: 2px; }
                .footer a:hover { color: #706f6c; }
                @media (prefers-color-scheme: dark) { .footer a:hover { color: #d1d1d1; } }
                .badge { display: inline-flex; align-items: center; gap: 0.25rem; padding: 0.25rem 0.5rem; border-radius: 9999px; background: linear-gradient(135deg, #7c3aed 0%, #db2777 100%); color: white; font-size: 0.625rem; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <!-- NativePHP Logo -->
                <div class="logo">
                    <svg viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.375 25.1H0V0.800003H7.375V25.1Z" fill="#505B93"/>
                        <path d="M24.1748 25.1H16.7998V0.800003H24.1748V25.1Z" fill="#00AAA6"/>
                        <path d="M24.175 25.1H7.375V0.800003L24.175 25.1Z" fill="#272D48"/>
                    </svg>
                </div>

                <!-- Title -->
                <h1 class="title">{{ config('app.name', 'Mimi') }}</h1>
                <p class="subtitle">Your app is ready.</p>

                <!-- Links -->
                <div class="links">
                    <a href="https://nativephp.com/docs/mobile" target="_blank" class="link">
                        <svg class="link-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <span class="link-text">Read the Docs</span>
                        <svg class="link-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </a>

                    <a href="https://discord.gg/nativephp" target="_blank" class="link">
                        <svg class="link-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/>
                        </svg>
                        <span class="link-text">Join the Community</span>
                        <svg class="link-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </a>

                    <a href="https://github.com/NativePHP" target="_blank" class="link">
                        <svg class="link-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        <span class="link-text">Explore on GitHub</span>
                        <svg class="link-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </a>
                </div>

                <div class="divider"></div>

                <!-- Footer -->
                <p class="footer">
                    Built on <a href="https://nativephp.com" target="_blank">NativePHP</a>
                    &middot;
                    Made by <a href="https://bifrost.nativephp.com" target="_blank">Bifrost</a>
                    <br>
                    Powered by <a href="https://laravel.com" target="_blank">Laravel</a>
                </p>
            </div>
        </div>
    </body>
</html>
