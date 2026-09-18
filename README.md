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

## iOS Simulator Build

Every push to `main` builds the starter as an iOS simulator app and publishes it:

- https://bin.nativephp.com/mobile-starter/ios-simulator/latest.zip
- https://bin.nativephp.com/mobile-starter/ios-simulator/latest.json (commit, sha256, bundle id and toolchain versions)

It's an arm64 Debug build, so it needs an Apple Silicon Mac and an iOS 18.2 or newer simulator. To run it in the booted simulator:

```sh
curl -fsSL https://bin.nativephp.com/mobile-starter/ios-simulator/latest.zip -o starter.zip && ditto -x -k starter.zip .
xcrun simctl install booted NativePHP-simulator.app
xcrun simctl launch booted com.nativephp.starter
```
