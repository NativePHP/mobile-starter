# NativePHP Mobile Starter Template

A pre-configured Laravel + NativePHP Mobile starter template.

## What's Included

- **Laravel** - Latest version with standard configuration
- **NativePHP Mobile** - Pre-installed and configured
- **Laravel Boost**
- **CLAUDE.md** - Generated guidelines for the AI assistant

## Automated Updates

This repository has a GitHub Action that runs daily to keep dependencies up to date:

- Runs `composer update` and commits `composer.lock`
- Runs `npm update` and commits `package-lock.json`
- Runs `npm run build` to verify the build still works (assets are gitignored)
