<native:column
    ref="welcome-screen"
    fill
    center
    class="safe-area bg-[#FAFAFA] px-6 py-6 dark:bg-[#0A0A0A]"
>
    <native:column
        ref="welcome-card"
        class="w-full rounded-2xl bg-[#FFFFFF] p-10 shadow-md dark:bg-[#161615]"
    >
        <native:row ref="nativephp-logo-container" class="w-full justify-center mb-6">
            <native:image
                ref="nativephp-logo"
                src="{{ public_path('images/nativephp-logo.png') }}"
                alt="NativePHP"
                class="w-16 h-16 object-contain"
            />
        </native:row>

        <native:text ref="welcome-title" class="text-2xl font-semibold text-center text-[#1B1B18] dark:text-[#EDEDEC]">
            {{ config('app.name', 'Mimi') }}
        </native:text>
        <native:text ref="welcome-subtitle" class="mt-2 mb-8 text-sm text-center text-[#706F6C] dark:text-[#A1A09A]">
            Your app is ready.
        </native:text>

        <native:column class="w-full gap-3">
            <native:row
                ref="docs-link"
                a11y-label="Read the Docs"
                class="w-full items-center gap-3 rounded-lg border border-[#E5E5E5] bg-[#FAFAFA] px-4 py-[14] dark:border-[#3E3E3A] dark:bg-[#1F1F1E]"
                @press="openDocs"
            >
                <native:icon name="book.pages" class="text-[#1B1B18] dark:text-[#EDEDEC]" :size="20" />
                <native:text class="flex-1 text-sm font-normal text-[#1B1B18] dark:text-[#EDEDEC]">
                    Read the Docs
                </native:text>
                <native:icon name="arrow.up.right" class="text-[#1B1B18] opacity-50 dark:text-[#EDEDEC]" :size="16" />
            </native:row>

            <native:row
                ref="community-link"
                a11y-label="Join the Community"
                class="w-full items-center gap-3 rounded-lg border border-[#E5E5E5] bg-[#FAFAFA] px-4 py-[14] dark:border-[#3E3E3A] dark:bg-[#1F1F1E]"
                @press="openDiscord"
            >
                <native:icon name="person.3" class="text-[#1B1B18] dark:text-[#EDEDEC]" :size="20" />
                <native:text class="flex-1 text-sm font-normal text-[#1B1B18] dark:text-[#EDEDEC]">
                    Join the Community
                </native:text>
                <native:icon name="arrow.up.right" class="text-[#1B1B18] opacity-50 dark:text-[#EDEDEC]" :size="16" />
            </native:row>

            <native:row
                ref="github-link"
                a11y-label="Explore on GitHub"
                class="w-full items-center gap-3 rounded-lg border border-[#E5E5E5] bg-[#FAFAFA] px-4 py-[14] dark:border-[#3E3E3A] dark:bg-[#1F1F1E]"
                @press="openGitHub"
            >
                <native:icon name="chevron.left.forwardslash.chevron.right" class="text-[#1B1B18] dark:text-[#EDEDEC]" :size="20" />
                <native:text class="flex-1 text-sm font-normal text-[#1B1B18] dark:text-[#EDEDEC]">
                    Explore on GitHub
                </native:text>
                <native:icon name="arrow.up.right" class="text-[#1B1B18] opacity-50 dark:text-[#EDEDEC]" :size="16" />
            </native:row>
        </native:column>

        <native:divider class="w-full my-6 border-[#E5E5E5] dark:border-[#3E3E3A]" />

        <native:column ref="welcome-footer" class="w-full items-center gap-1">
            <native:text class="w-full text-xs text-center text-[#A1A09A]">
                Built on NativePHP · Made by Bifrost
            </native:text>
            <native:text class="w-full text-xs text-center text-[#A1A09A]">
                Powered by Laravel
            </native:text>
        </native:column>
    </native:column>
</native:column>
