<laravel-boost-guidelines>
=== foundation rules ===

# Laravel Boost Guidelines

The Laravel Boost guidelines are specifically curated by Laravel maintainers for this application. These guidelines should be followed closely to ensure the best experience when building Laravel applications.

## Foundational Context

This application is a Laravel application and its main Laravel ecosystems package & versions are below. You are an expert with them all. Ensure you abide by these specific packages & versions.

- php - 8.4
- laravel/boost (BOOST) - v2
- laravel/framework (LARAVEL) - v13
- laravel/mcp (MCP) - v0
- laravel/prompts (PROMPTS) - v0
- laravel/pail (PAIL) - v1
- laravel/pint (PINT) - v1
- laravel/sail (SAIL) - v1
- pestphp/pest (PEST) - v4
- phpunit/phpunit (PHPUNIT) - v12

## Skills Activation

This project has domain-specific skills available in `**/skills/**`. You MUST activate the relevant skill whenever you work in that domain—don't wait until you're stuck.

## Conventions

- You must follow all existing code conventions used in this application. When creating or editing a file, check sibling files for the correct structure, approach, and naming.
- Use descriptive names for variables and methods. For example, `isRegisteredForDiscounts`, not `discount()`.
- Check for existing components to reuse before writing a new one.

## Verification Scripts

- Do not create verification scripts or tinker when tests cover that functionality and prove they work. Unit and feature tests are more important.

## Application Structure & Architecture

- Stick to existing directory structure; don't create new base folders without approval.
- Do not change the application's dependencies without approval.

## Frontend Bundling

- If the user doesn't see a frontend change reflected in the UI, it could mean they need to run `npm run build`, `npm run dev`, or `composer run dev`. Ask them.

## Documentation Files

- You must only create documentation files if explicitly requested by the user.

## Replies

- Be concise in your explanations - focus on what's important rather than explaining obvious details.

=== boost rules ===

# Laravel Boost

## Tools

- Laravel Boost is an MCP server with tools designed specifically for this application. Prefer Boost tools over manual alternatives like shell commands or file reads.
- Use `database-query` to run read-only queries against the database instead of writing raw SQL in tinker.
- Use `database-schema` to inspect table structure before writing migrations or models.
- Use `get-absolute-url` to resolve the correct scheme, domain, and port for project URLs. Always use this before sharing a URL with the user.
- Use `browser-logs` to read browser logs, errors, and exceptions. Only recent logs are useful, ignore old entries.

## Searching Documentation (IMPORTANT)

- Always use `search-docs` before making code changes. Do not skip this step. It returns version-specific docs based on installed packages automatically.
- Pass a `packages` array to scope results when you know which packages are relevant.
- Use multiple broad, topic-based queries: `['rate limiting', 'routing rate limiting', 'routing']`. Expect the most relevant results first.
- Do not add package names to queries because package info is already shared. Use `test resource table`, not `filament 4 test resource table`.

### Search Syntax

1. Use words for auto-stemmed AND logic: `rate limit` matches both "rate" AND "limit".
2. Use `"quoted phrases"` for exact position matching: `"infinite scroll"` requires adjacent words in order.
3. Combine words and phrases for mixed queries: `middleware "rate limit"`.
4. Use multiple queries for OR logic: `queries=["authentication", "middleware"]`.

## Artisan

- Run Artisan commands directly via the command line (e.g., `php artisan route:list`). Use `php artisan list` to discover available commands and `php artisan [command] --help` to check parameters.
- Inspect routes with `php artisan route:list`. Filter with: `--method=GET`, `--name=users`, `--path=api`, `--except-vendor`, `--only-vendor`.
- Read configuration values using dot notation: `php artisan config:show app.name`, `php artisan config:show database.default`. Or read config files directly from the `config/` directory.

## Tinker

- Execute PHP in app context for debugging and testing code. Do not create models without user approval, prefer tests with factories instead. Prefer existing Artisan commands over custom tinker code.
- Always use single quotes to prevent shell expansion: `php artisan tinker --execute 'Your::code();'`
  - Double quotes for PHP strings inside: `php artisan tinker --execute 'User::where("active", true)->count();'`

=== php rules ===

# PHP

- Always use curly braces for control structures, even for single-line bodies.
- Use PHP 8 constructor property promotion: `public function __construct(public GitHub $github) { }`. Do not leave empty zero-parameter `__construct()` methods unless the constructor is private.
- Use explicit return type declarations and type hints for all method parameters: `function isAccessible(User $user, ?string $path = null): bool`
- Use TitleCase for Enum keys: `FavoritePerson`, `BestLake`, `Monthly`.
- Prefer PHPDoc blocks over inline comments. Only add inline comments for exceptionally complex logic.
- Use array shape type definitions in PHPDoc blocks.

=== deployments rules ===

# Deployment

- Laravel can be deployed using [Laravel Cloud](https://cloud.laravel.com/), which is the fastest way to deploy and scale production Laravel applications.

=== laravel/core rules ===

# Do Things the Laravel Way

- Use `php artisan make:` commands to create new files (i.e. migrations, controllers, models, etc.). You can list available Artisan commands using `php artisan list` and check their parameters with `php artisan [command] --help`.
- If you're creating a generic PHP class, use `php artisan make:class`.
- Pass `--no-interaction` to all Artisan commands to ensure they work without user input. You should also pass the correct `--options` to ensure correct behavior.

### Model Creation

- When creating new models, create useful factories and seeders for them too. Ask the user if they need any other things, using `php artisan make:model --help` to check the available options.

## APIs & Eloquent Resources

- For APIs, default to using Eloquent API Resources and API versioning unless existing API routes do not, then you should follow existing application convention.

## URL Generation

- When generating links to other pages, prefer named routes and the `route()` function.

## Testing

- When creating models for tests, use the factories for the models. Check if the factory has custom states that can be used before manually setting up the model.
- Faker: Use methods such as `$this->faker->word()` or `fake()->randomDigit()`. Follow existing conventions whether to use `$this->faker` or `fake()`.
- When creating tests, make use of `php artisan make:test [options] {name}` to create a feature test, and pass `--unit` to create a unit test. Most tests should be feature tests.

## Vite Error

- If you receive an "Illuminate\Foundation\ViteException: Unable to locate file in Vite manifest" error, you can run `npm run build` or ask the user to run `npm run dev` or `composer run dev`.

=== pint/core rules ===

# Laravel Pint Code Formatter

- If you have modified any PHP files, you must run `vendor/bin/pint --dirty --format agent` before finalizing changes to ensure your code matches the project's expected style.
- Do not run `vendor/bin/pint --test --format agent`, simply run `vendor/bin/pint --format agent` to fix any formatting issues.

=== pest/core rules ===

## Pest

- This project uses Pest for testing. Create tests: `php artisan make:test --pest {name}`.
- The `{name}` argument should not include the test suite directory. Use `php artisan make:test --pest SomeFeatureTest` instead of `php artisan make:test --pest Feature/SomeFeatureTest`.
- Run tests: `php artisan test --compact` or filter: `php artisan test --compact --filter=testName`.
- Do NOT delete tests without approval.

=== nativephp/mobile rules ===

## NativePHP Mobile

- NativePHP Mobile is a Laravel package for building **fully native** iOS and Android apps with PHP. Screens are
rendered as real SwiftUI (iOS) and Jetpack Compose (Android) UI — driven entirely by PHP via SuperNative components
and EDGE Blade elements. A full PHP runtime runs directly on the device with SQLite — no web server required.
- Documentation: `https://nativephp.com/docs/mobile/4/**`
- IMPORTANT: Always activate the `nativephp-mobile` skill every time you work on any NativePHP functionality.

### Native UI First — Always

**Always build screens with native UI: `NativeComponent` classes registered via `Route::native()`, rendering EDGE
elements (`native:column`, `native:text`, `native:button`, …).** This is the way to build NativePHP apps.

- Never scaffold new screens as web views, Blade-over-WebView pages, Livewire components, or Inertia pages.
- The web view (the `native:web-view` element) is a legacy/edge-case escape hatch for embedding web content — never the
  foundation of a screen. If the user asks for a webview-based screen, build it natively with EDGE instead and
  explain why; only fall back to the web view if they explicitly insist.
- If the app contains legacy webview screens, proactively suggest converting them to native UI (see the
  `nativephp-webview-to-native` skill).
- Style EDGE elements with Tailwind utility classes via `class="..."` / `:class="..."` only — never inline
  CSS `style="..."` attributes or ad-hoc styling props.
- Use `native:icon` (SF Symbols on iOS, Material Icons on Android) for iconography — never emoji characters in
  UI text, labels, or buttons, unless the user explicitly asks for emojis. Prefer the typed icon enums
  (`App\Icons\Ios`, `App\Icons\Android`, `App\Icons\AndroidOutlined`) bound via the `:ios` / `:android`
  attributes, e.g. `:ios="Ios::Gearshape" :android="Android::Settings"`, importing each enum into the view with
  Blade's use directive first. The enums are generated, not shipped — if `app/Icons/` doesn't exist yet, run
  `php artisan native-ui:generate-icons` first (safe to run yourself).

### When a Capability Is Missing

If the app needs native functionality or a UI component that core and `native-ui` don't provide:

1. **Look for an existing plugin first.** Check the plugin marketplace (`https://plugins.nativephp.com`) and the
   official core plugins. (If a marketplace-lookup MCP tool is available in your session, use it.)
2. **If no plugin exists, build a custom plugin** with `php artisan native:plugin:create` — plugins bundle
   Swift/Kotlin bridge functions, events, permissions, and can even ship their own native EDGE components.
3. **Never fall back to the web view to fill a native gap.** A missing capability is a reason to write a plugin,
   not a reason to build a webview screen.

### Installing Plugins — Always Register and Verify

Requiring a plugin with Composer is NOT enough — an installed-but-unregistered plugin does nothing. Every plugin
install must follow all three steps:

1. `composer require vendor/plugin-name`
2. `php artisan vendor:publish --tag=nativephp-plugins-provider` — publishes the app's `NativeServiceProvider`
   (needed once, before the first plugin registration; harmless to re-run)
3. `php artisan native:plugin:register vendor/plugin-name` — adds it to the `NativeServiceProvider`
4. `php artisan native:plugin:list` — verify it shows as registered

Then tell the user to rebuild with `php artisan native:run` (native code only compiles in at build time — do not
run this yourself). If `native:run` warns "The following plugins are installed but not registered", go back to
step 3.

### Database Seeding — Always via Migrations

On-device there is no `db:seed` — NativePHP runs **migrations** on app start (once each, tracked, versioned).
Whenever asked to seed the database, use the migration trick: create a dedicated migration
(`php artisan make:migration seed_app_settings`) and put the inserts in `up()`. If a Seeder class helps organize
the data, still create it — but invoke it **from the migration's `up()`** (e.g. `(new CategorySeeder)->run()`),
never rely on `db:seed` being run. Seed migrations must be safe for both fresh installs and updates of existing
user databases.

### Build Commands — Tell the User, Never Run

**CRITICAL: Never execute any of these commands yourself. Always instruct the user to run them manually in their
terminal.**

| Command | Purpose |
|---|---|
| `php artisan native:run ios` | Compile and run on iOS simulator/device |
| `php artisan native:run android` | Compile and run on Android emulator/device |
| `php artisan native:run ios --watch` | Build, deploy, then start hot reload — all in one |
| `php artisan native:watch` | Hot reload (watch for file changes) |
| `php artisan native:open` | Open project in Xcode or Android Studio |
| `php artisan native:install` | Install/upgrade the native shell |

Notes:
- The `./native` shortcut wraps the `native:` namespace (`./native run`, `./native watch`).
- The Vite dev server is **opt-in** in v4: add `--vite` to `native:run`/`native:watch` only when the app actually
  uses JS/CSS HMR. Native UI screens hot-reload without Vite.
- `npm run build -- --mode=ios|android` is only needed for apps with web-view assets — not for native UI screens.

**Always ask which platform before giving any build or run command.** If the user hasn't specified iOS or Android,
ask: "Which platform do you want to build/test on — iOS or Android?" Never assume a platform.

When the platform is confirmed, give the relevant command(s) above and tell the user to run it in their terminal.
Do not run it yourself.

=== nativephp/mobile-browser rules ===

## nativephp/browser

Open URLs in system browser, in-app browser, and OAuth authentication sessions.

### PHP Usage (Livewire/Blade)

Use the `Browser` facade:

<code-snippet name="Using Browser Facade" lang="php">
use Native\Mobile\Facades\Browser;

// Open in in-app browser (keeps users in your app)
Browser::inApp('https://nativephp.com/mobile');

// Open in system browser (leaves your app)
Browser::open('https://nativephp.com/mobile');

// OAuth authentication with automatic redirect handling
Browser::auth('https://provider.com/oauth/authorize?client_id=123&redirect_uri=nativephp://127.0.0.1/auth/callback');
</code-snippet>

### JavaScript Usage (Vue/React/Inertia)

<code-snippet name="Using Browser in JavaScript" lang="javascript">
import { browser } from '#nativephp';

// Open in in-app browser
await browser.inApp('https://nativephp.com/mobile');

// Open in system browser
await browser.open('https://nativephp.com/mobile');

// OAuth authentication
await browser.auth('https://provider.com/oauth/authorize?client_id=123&redirect_uri=nativephp://127.0.0.1/auth/callback');
</code-snippet>

### Methods

- `Browser::inApp(string $url)` - Opens in embedded browser (SFSafariViewController/Chrome Custom Tabs)
- `Browser::open(string $url)` - Opens in device's default browser
- `Browser::auth(string $url)` - Opens OAuth authentication browser with automatic redirect handling

### When to Use Each Method

- **`inApp()`**: Keep users within your app for documentation, help pages, or related content
- **`open()`**: Use when full browser features are required for complex web applications
- **`auth()`**: Implement OAuth authentication flows with secure, automatic redirect handling

=== nativephp/native-ui rules ===

## nativephp/native-ui

Native UI components for NativePHP Mobile. Every element renders as a real
platform primitive — Material3 on Android, SwiftUI on iOS — not a webview
widget. Elements are declared in Blade with `<native:*>` tags or built
programmatically with the fluent `Nativephp\NativeUi\Elements\*` API; both
paths serialize to the same wire tree.

### Core rules

- Visual styling is theme-driven ("Model 3"): buttons, inputs, toggles, and
  other controls take their colors, radii, and typography from the theme
  (`Nativephp\NativeUi\Theme`). Use semantic props like `variant="primary"`
  instead of per-instance colors — per-instance visual overrides on these
  controls are intentionally ignored.
- Bind state with `native:model="property"` (works on toggle, checkbox, chip,
  slider, select, radio-group, button-group, tab-row, and the text inputs).
  Use `.live` / `.blur` / `.debounce.Xms` modifiers to control sync frequency.
- Wire callbacks with event attributes (`@press`, `@change`, `@submit`,
  `@dismiss`) pointing at public methods on the component.

<code-snippet name="Declaring native elements in Blade" lang="blade">
<native:column class="gap-4 p-4">
    <native:outlined-text-input label="Email" native:model.blur="email" />
    <native:toggle label="Notifications" native:model="notify" />
    <native:button variant="primary" @press="save">Save</native:button>
</native:column>
</code-snippet>

### Theming & colors

- Everywhere a color is authored — theme tokens in `config/native-ui.php`,
  element color props (`->color()`, `headline-color`, badge `color`, swipe
  `tint`), and arbitrary-value classes (`bg-[#…]`) — the same grammar applies:
  - Tailwind palette names: `red-300`, `orange-800`
  - Special names: `white`, `black`, `transparent`
  - CSS hex: `#F00`, `#B91C1C`, and with alpha `#8B5CF680` (#RRGGBBAA order)
  - Opacity modifiers on any of the above: `red-300/20`, `#8B5CF6/50`
- Alpha-bearing hex is always authored in CSS `#RRGGBBAA` order; PHP converts
  to the native wire order — never hand-author Android-style `#AARRGGBB`.
- Dark mode: theme tokens carry a `dark` block (auto-derived when omitted),
  and `bg-theme-*` / `text-theme-*` / `border-theme-*` classes emit both
  modes automatically. This works for Blade-declared AND programmatically
  built elements (`Element->class()`).
- Disabled controls use the `surface-variant` (fill) + `on-surface-variant`
  (label) tokens on both platforms — tune disabled contrast by adjusting
  those two tokens, not per-component.
- Buttons render their variant token solid; for a softer tonal fill set
  opacity on the token itself (e.g. `'secondary' => 'fuchsia-500/70'`).
- `<native:icon>` accepts platform enum overrides as attributes —
  `:ios="Ios::House"` / `:android="Android::Home"` — matching the
  programmatic `Icon::make(ios: …, android: …)`.

<code-snippet name="Theme tokens accept the full color grammar" lang="php">
// config/native-ui.php
'light' => [
    'primary'   => 'violet-600',      // tailwind palette name
    'secondary' => 'fuchsia-500/70',  // with opacity → tonal fills
    'surface'   => '#F8FAFC',         // plain hex
    'accent'    => '#00AAA680',       // CSS alpha hex (#RRGGBBAA)
],
</code-snippet>

### Typography

- **Custom fonts.** Drop `.ttf`/`.otf`/`.ttc` files into the app's
  `resources/fonts/` and reference one by its filename (minus extension) with
  the `font` attribute: `font="Inter-Bold"` for `resources/fonts/Inter-Bold.ttf`.
  Works on `<native:text>`, `<native:button>`, and the text inputs; also fluent
  as `->font('Inter-Bold')`. The build's `copy_assets` hook bundles the files
  (iOS registers them by PostScript name, Android loads from `assets/fonts/`);
  an unresolved name falls back to the system font. Font size/weight still come
  from `text-*` / `font-*` classes and the theme.
- **Downloading fonts.** `php artisan native:font Lobster` (or `"Rock Salt"`,
  multiple families, `--weights=400,700`, `--italic`) downloads Google Fonts
  into `resources/fonts/` with ready-to-use token names — no API key.
- **App-wide default font.** Set the theme's `font-family` token in
  `config/native-ui.php` to a bundled token (e.g. `'Inter-Regular'`) to apply
  it everywhere; per-element `font` attributes and `font-serif`/`font-mono`
  classes still win. `native:font --default` sets it for you.
- **Line height (leading).** `leading-none|tight|snug|normal|relaxed|loose`
  (unitless multipliers of the font size), plus arbitrary `leading-[1.4]`
  (multiplier) and `leading-[24px]` (absolute). Applies to `<native:text>` and
  the text inputs; button labels are single-line so it has no visible effect
  there. Only affects multi-line text. iOS caveat: SwiftUI's `Text` only exposes
  additive line spacing, so *increasing* leading (`relaxed`/`loose`, or a large
  `leading-[…px]`) is exact, but tightening below the font's natural line height
  (`none`/`tight`) is limited — measured against the actual font, so custom
  fonts aren't over-spaced. Android is exact both ways.

<code-snippet name="Custom font + line height" lang="blade">
<native:text font="Inter-Bold" class="text-2xl">Heading</native:text>
<native:text class="text-base leading-relaxed">
    A comfortably-spaced paragraph that wraps across several lines.
</native:text>
</code-snippet>

### Accessibility

Screen-reader support rides on two props that every element accepts:
`a11y-label` (what VoiceOver / TalkBack announces; maps to
`accessibilityLabel` on iOS and `contentDescription` on Android) and
`a11y-hint` (supplementary usage guidance, read after the label; maps to
`accessibilityHint` on iOS and is appended to the content description on
Android). Both are also available fluently as `->a11yLabel()` / `->a11yHint()`.

- ALWAYS set `a11y-label` on icon-only buttons, chips, and tabs — with no
  visible text there is nothing for the screen reader to announce.
- Icons are decorative by default: an `<native:icon>` without `a11y-label` is
  silent to screen readers. Give it a label only when the icon itself carries
  meaning.
- Use `alt` on `<native:image>` for meaningful images; omit it for purely
  decorative ones.
- Use `a11y-hint` sparingly, for supplementary guidance the label doesn't
  cover ("Double-tap to reorder"). Never repeat the label in the hint.
- List items with a trailing icon button take `trailing-a11y-label` to label
  that button separately from the row.
- Text scales with the user's system font size on both platforms
  automatically — don't hardcode layouts that break at larger type sizes.

<code-snippet name="Accessible icon-only controls" lang="blade">
<native:button icon="trash" a11y-label="Delete draft" a11y-hint="Deletes the draft permanently" @press="deleteDraft" />
<native:icon name="checkmark.seal" a11y-label="Verified" />
<native:list-item headline="Team meeting" trailingIconButton="ellipsis" trailing-a11y-label="More options" />
</code-snippet>

<code-snippet name="Fluent a11y API" lang="php">
use Nativephp\NativeUi\Elements\Button;

Button::make()
    ->icon('plus')
    ->a11yLabel('Add item')
    ->a11yHint('Adds a new item to the list')
    ->onPress('addItem');
</code-snippet>

</laravel-boost-guidelines>
