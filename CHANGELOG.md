# Changelog

All notable changes to this project should be documented in this file.

## [Unreleased]

- Optional follow-up: explicitly test Git Updater auto-update behavior only if theme auto-updates will be used. To complete this, enable theme auto-updates, publish a future version bump, and confirm WordPress updates the theme without manually clicking update. If manual Git Updater updates are acceptable, remove this item.

## [1.0.12] - 2026-10-08

- Tightened vertical spacing between the Categories and Tags groups, their labels, and linked terms; reduced chip padding and inter-chip gaps on single posts.
- Bumped theme version to 1.0.12 for Git Updater detection.

## [1.0.11] - 2026-10-08

- Reduced Categories and Tags heading labels to 0.75rem with muted text and made linked category/tag chips 0.95rem so the actual terms are more prominent.
- Bumped the theme version to 1.0.11 for Git Updater detection.

## [1.0.10] - 2026-10-08

- Labeled the Categories and Tags sections at the bottom of single post pages, showing each only when terms are assigned.
- Improved tag/category chip readability, spacing, contrast, and mobile wrapping.
- Bumped the theme version to 1.0.10 for Git Updater detection.

## [1.0.9] - 2026-10-01

- Bumped the `style.css` theme header version from `1.0.8` to `1.0.9` so Git Updater can detect the update.
- Updated single post pages to show the WordPress post author near the title and date.
- Updated the footer text to `© 2026 JasonLamb.ME - All rights reserved.` using the current site year dynamically.
- Kept the mobile polish stylesheet active and aligned it with the `1.0.9` release.
- Reworked the accumulated base stylesheet into a cleaner readable version while preserving the dark terminal-style theme direction.
- Resolved the previous unreleased note about needing a `style.css` version bump for CSS-only/mobile-polish changes.

## [1.0.9-mobile-polish] - 2026-08-28

- Added `assets/css/mobile-polish.css` for mobile readability and shorter pre-post scrolling.
- Changed the hero quote/note block away from the hard-to-read Comic Sans accent font to a readable system font.
- Reduced mobile hero padding, card padding, and command-panel spacing.
- Compacted the mobile interest tags, command status grid, and content lanes.
- Hid the personality card and project console on small mobile screens so the first post appears sooner.
- Fixed the `Latest Notes` section heading on mobile so the heading and description stack cleanly.
- Adjusted mobile post card image ratio and title/body sizing.

## [1.0.8] - 2026-06-13

- Bumped theme version to `1.0.8` to test whether Git Updater recognizes a newer GitHub release after the live site was manually aligned to `1.0.7`.

## [1.0.7] - 2026-06-13

- Bumped theme version to `1.0.7` after manual upload of the `1.0.6` files to the live host so Git Updater can detect the next available update.

## [1.0.6] - 2026-06-13

- Renamed the repository references from `jl-dark-lab` to `jl-wp-theme-dark`.
- Updated Git Updater headers and repository URLs to use `jasrasr/jl-wp-theme-dark`.
- Updated the WordPress admin theme homepage link to the GitHub repository and kept the author website on `jasonlamb.me`.
- Updated the homepage note cards to show featured images in the left media panel, with a square aspect ratio for consistent layout.
- Updated README install, clone, and workflow examples to use the new theme repo name and install path.
- Updated the theme header display name and text domain to `JL WP Theme Dark` and `jl-wp-theme-dark`.
- Added and standardized `CHANGELOG.md` for future releases.
