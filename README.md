# JL Dark Lab

A custom dark WordPress theme for Jason Lamb sites.

- Website: https://jasonlamb.me
- GitHub repository for this theme: https://github.com/jasrasr/jl-wp-theme-dark
- Git Updater project: https://github.com/afragen/git-updater
- Git Updater website: https://git-updater.com/

## Design direction

This theme is intended to feel like Jason rather than a generic WordPress theme.

Core identity:

- Helping people with technology
- PowerShell notes and practical scripts
- GitHub-backed projects
- Fun projects with AI
- WordPress experiments
- Dark background with bright readable text
- Typewriter/terminal typography
- A small Comic Sans accent, because apparently we are choosing violence carefully

## Repository layout

```text
jl-wp-theme-dark/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── single.php
├── page.php
├── archive.php
├── search.php
├── 404.php
├── sidebar.php
├── searchform.php
├── screenshot.png
├── README.md
├── assets/
│   ├── images/
│   │   └── jl-logo.png
│   └── js/
│       └── theme.js
└── template-parts/
    └── content-card.php
```

## Required WordPress/Git Updater header

The `style.css` theme header includes this line so Git Updater can identify the GitHub repository:

```css
GitHub Theme URI: https://github.com/jasrasr/jl-wp-theme-dark
Primary Branch: main
```

Git Updater expects a `GitHub Plugin URI` or `GitHub Theme URI` style header that points to the owner/repository URL.

## New website install - manual upload

Use this for the first install on a new site.

1. Download the latest theme ZIP from GitHub releases or from your local build.
2. In WordPress admin, go to:

```text
Appearance -> Themes -> Add New -> Upload Theme
```

3. Upload `jl-dark-lab.zip`.
4. Click **Live Preview** first.
5. Confirm the homepage, post pages, pages, archives, search, categories, and tags look sane.
6. Activate the theme.
7. Assign menus under:

```text
Appearance -> Menus
```

8. Add widgets, if desired, under:

```text
Appearance -> Widgets
```

## New website install - SSH/Git method

Use this if the host gives you SSH access.

```bash
cd public_html/wp-content/themes
git clone https://github.com/jasrasr/jl-wp-theme-dark.git jl-dark-lab
```

Then activate the theme from WordPress admin.

To update later through SSH:

```bash
cd public_html/wp-content/themes/jl-dark-lab
git pull
```

## New website install - Git Updater method

1. Install Git Updater from the official project:

```text
https://github.com/afragen/git-updater
```

2. Activate Git Updater.
3. In WordPress admin, use Git Updater's install screen to install this theme from:

```text
https://github.com/jasrasr/jl-wp-theme-dark
```

4. Confirm the installed folder is:

```text
wp-content/themes/jl-dark-lab
```

5. Preview the theme before activating.
6. Future theme updates should appear in the normal WordPress updates flow after you bump the version in `style.css` and push changes to GitHub.

## Recommended GitHub workflow

1. Make changes locally.
2. Bump the `Version:` value in `style.css`.
3. Update this README if behavior or install steps changed.
4. Commit and push:

```bash
git add .
git commit -m "Update JL Dark Lab theme"
git push
```

5. Optionally tag the release:

```bash
git tag v1.0.5
git push origin v1.0.5
```

## New-site implementation checklist

Before activating on a new WordPress site:

- Confirm WordPress is current.
- Confirm PHP is compatible with your host and theme.
- Back up the site.
- Upload or install the theme.
- Preview before activating.
- Assign the primary menu.
- Confirm categories and tags display.
- Confirm search results work.
- Confirm single posts display featured images, excerpts, categories, and tags.
- Confirm the homepage still feels like Jason, not a beige theme with a flashlight.

## Safety notes

- Keep theme repos public only if you are comfortable with the source being public.
- Do not commit API keys, passwords, tokens, or local config files.
- Test theme updates before production activation.
- A bad theme update can break the public front end, so keep a known-good release tag.

## Suggested `.gitignore`

```gitignore
.env
.env.*
*.log
.DS_Store
Thumbs.db
node_modules/
vendor/
.codex/
```

Do not ignore `.agents/` if you use it for shared Codex/agent project instructions.

## Jason Lamb Links

- Website: https://jasonlamb.me
- GitHub Repository: https://github.com/jasrasr/jl-wp-theme-dark
- Git Updater: https://github.com/afragen/git-updater

## New WordPress Site Implementation

1. Create or confirm the GitHub repository:
   - https://github.com/jasrasr/jl-wp-theme-dark

2. Install Git Updater on WordPress:
   - Project: https://github.com/afragen/git-updater
   - Site: https://git-updater.com/

3. Install this Theme:
   - WordPress Admin -> Plugins or Appearance -> Themes
   - Or use SSH/Git in the appropriate WordPress folder.

4. Confirm expected install path:
   - Plugin: /wp-content/plugins/jl-content-tools/
   - Theme: /wp-content/themes/jl-dark-lab/

5. Activate:
   - Plugin: WordPress Admin -> Plugins -> JL Content Tools -> Activate
   - Theme: WordPress Admin -> Appearance -> Themes -> JL Dark Lab -> Activate

6. Future updates:
   - Edit files locally.
   - Bump the Version header.
   - Commit and push to GitHub.
   - Update from WordPress Admin using Git Updater.
