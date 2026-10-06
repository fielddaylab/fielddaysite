# Field Day Website
public website for Field Day

## Building the site locally

**Requirements**
- PHP - v5.4 or newer
- Node - v10 or newer (recommended for gulp, not compatible with a windows build)
- an HTTP server running with vhosts pointing to `%project_dir%`

## Initial Installation
1. Clone the repo
```
git clone <path-to-dir>/fielddaysite
cd <path-to-dir>/fielddaysite
```

2. Install Node Dependencies
`npm install` in your `%project_dir%`

## Build & Run the Site
1. Run Gulp from Node Script
```
npm run watch
```

2. With Gulp running start your HTTP Server
with PHP:
```
php -S localhost:8080
```
or with MAMP:
* Follow [these](https://documentation.mamp.info/en/MAMP-Mac/First-Steps/index.html) steps to set up MAMP to serve the site

## Deploying

The site is hosted by UW Madison DoIT on Plesk, and Plesk deploys it straight from this repository (Plesk → Websites & Domains → the domain → Git). Only the two branches below are deployed; `master` is not. Changes for the live site go to `wwwtest`, then `production`, and the files below (`.htaccess`, `.github/workflows/plesk-deploy.yml`) live on those branches.

| Branch | Site |
|---|---|
| `production` | https://fielddaylab.wisc.edu |
| `wwwtest` | https://wwwtest.fielddaylab.wisc.edu |

- Pushing to one of those branches runs `.github/workflows/plesk-deploy.yml`. It joins the campus VPN, SSHes into porky with the fielddaylab.wisc.edu deploy key, and from there calls that site's Plesk webhook (repository secrets `PLESK_WEBHOOK_PRODUCTION`/`PLESK_WEBHOOK_WWWTEST`), and Plesk pulls the branch into the site's `/httpdocs`. The webhooks (port 8443 on porky and petunia) only answer inside the campus network, not from GitHub's webhooks and not over the VPN. If a deploy doesn't show up, re-run that workflow or use **Pull now** on the domain's Git page.
- Plesk copies the whole branch, dotfiles included, so `.htaccess` deploys like any other file.
- Plesk leaves files that aren't in the repository alone, such as the Unity builds the game repositories upload to `/play/<game>/ci/<branch>/`.
- Test on `wwwtest` first, then bring the same commits to `production`. `doit-production` was the production branch until 2026-10-05 and is no longer deployed.

Until 2026-10-05, `.github/workflows/main.yml` rsynced `doit-production` to the server over the campus VPN, and `cloudrun.yml` deployed `staging`/`production` to Cloud Run (`fielddaysite-staging`/`fielddaysite-prod`, which no domain points at). Both workflows were removed and disabled. Their rsync never copied dotfiles, so `.htaccess` never reached the server until Plesk took over.

### Redirects

`.htaccess` holds the site's redirects, and the DoIT Apache honours it. Every old game address (a game's `/play/<game>/ci/master|main|production` builds, a bare `ci/`, and its old build folders like `/play/lakeland/game`, `/play/jowilder/build`, `/play/atom-touch/build`) 301s to the game's Vault Learning Games page with the player open (`https://vaultlearninggames.org/<slug>#play`). The list was built on 2026-10-06 from every game address in this repository's history plus every `/play` address people requested in a year of server logs. Team test builds (`ci/develop`, `ci/staging`, …) and the `/play/<game>/` pages are left alone. Old builds of games not on Vault (Alien Gardener, Ice Cube, The Station Maine) go to their page here. Keep the block the same on `production` and `wwwtest`. Before adding a game, check that its Vault listing plays from the Vault CDN, not from the URL being redirected, or the redirect will loop.

#### PBS Wisconsin Education

PBS Wisconsin Education's "Play the game" pages open two games' old addresses in an 880-pixel popup: `/play/jowilder/game/iframe.html` and `/play/emerald/ci/production/`. When the request's Referer is `pbswisconsineducation.org`, those two addresses 302 to the game itself on the Vault CDN (`https://cdn.vaultlearninggames.org/fieldday/jowilder/iframe.html`, `…/fieldday/emerald/`), so PBS players get the game without the Vault player's bar, as before Vault. Every other visitor gets the game's Vault page. These rules come first in the redirect block.

- They are 302s, not 301s, because they depend on the Referer, and a browser keeps a 301 for the address whoever sent it.
- The Vault CDN only serves a game's page to a browser outside the Vault player when its Cloudflare redirect rule allows it: the rule "CDN builds only play in the Vault player" (Cloudflare → `vaultlearninggames.org` → Rules → Redirect Rules) has an exception for exactly these files with a PBS Wisconsin Referer. A new PBS game needs both an `.htaccess` rule here and that exception. Without the exception, the CDN sends PBS players back to Vault.
- Each game's own analytics then tells PBS players from Vault players by referrer: `pbswisconsineducation.org` for PBS, `vaultlearninggames.org` for Vault. That's Jo Wilder's `UA-72694027-9` (Google forwards it into GA4 `G-4JW7HRZEM0`) and Emerald's GA4 `G-70RRTWTVBE`.
