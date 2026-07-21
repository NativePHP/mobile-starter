<column
    ref="welcome-screen"
    fill
    center
    class="safe-area bg-theme-background px-6 py-6"
>
    <column
        ref="welcome-card"
        class="w-full rounded-2xl bg-theme-surface p-10 shadow-md"
    >
        <row ref="nativephp-logo-container" class="w-full justify-center mb-6">
            <image
                ref="nativephp-logo"
                src="{{ public_path('images/nativephp-logo.png') }}"
                alt="NativePHP"
                class="w-16 h-16 object-contain"
            />
        </row>

        <text font="accent" ref="welcome-title" class="text-xl font-bold text-center text-theme-on-surface">
            NativePHP Starter Kit
        </text>
        <text font="lobster" ref="welcome-subtitle" class="mt-2 mb-8 text-center text-theme-on-surface-variant">
            Your app is ready.
        </text>

        <column class="w-full gap-3">
            <row
                ref="docs-link"
                a11y-label="Read the Docs"
                a11y-hint="Opens the documentation in an in-app browser"
                class="w-full items-center gap-3 rounded-lg border border-theme-outline bg-theme-surface-variant px-4 py-[14]"
                @press="openDocs"
            >
                <icon name="book.pages" class="text-theme-on-surface" :size="20" />
                <text  class="flex-1 text-sm font-normal text-theme-on-surface">
                    Read the Docs
                </text>
                <icon name="arrow.up.right" class="text-theme-on-surface opacity-50" :size="16" />
            </row>

            <row
                ref="community-link"
                a11y-label="Join the Community"
                a11y-hint="Opens the Discord invite in your browser"
                class="w-full items-center gap-3 rounded-lg border border-theme-outline bg-theme-surface-variant px-4 py-[14]"
                @press="openDiscord"
            >
                <icon name="person.3" class="text-theme-on-surface" :size="20" />
                <text  class="flex-1 text-sm font-normal text-theme-on-surface">
                    Join the Community
                </text>
                <icon name="arrow.up.right" class="text-theme-on-surface opacity-50" :size="16" />
            </row>

            <row
                ref="github-link"
                a11y-label="Explore on GitHub"
                a11y-hint="Opens the GitHub organization in your browser"
                class="w-full items-center gap-3 rounded-lg border border-theme-outline bg-theme-surface-variant px-4 py-[14]"
                @press="openGitHub"
            >
                <icon name="chevron.left.forwardslash.chevron.right" class="text-theme-on-surface" :size="20" />
                <text  class="flex-1 text-sm font-normal text-theme-on-surface">
                    Explore on GitHub
                </text>
                <icon name="arrow.up.right" class="text-theme-on-surface opacity-50" :size="16" />
            </row>
        </column>

        <divider class="w-full my-6 border-theme-outline" />

        <column ref="welcome-footer" class="w-full items-center gap-1">
            <text font="lobster" class="w-full text-center text-theme-on-surface-variant">
                Built on NativePHP · Made by Bifrost
            </text>
            <text font="lobster" class="w-full text-center text-theme-on-surface-variant">
                Powered by Laravel
            </text>
        </column>
    </column>
</column>
