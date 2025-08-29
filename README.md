# 🐼 WP-LazyEmbeds 🐼

![GitHub release](https://img.shields.io/github/v/release/frankpanduh/wp-lazyembeds?style=flat-square)
![License](https://img.shields.io/github/license/frankpanduh/wp-lazyembeds?style=flat-square)
![Issues](https://img.shields.io/github/issues/frankpanduh/wp-lazyembeds?style=flat-square)
![Build Status](https://img.shields.io/github/actions/workflow/status/frankpanduh/wp-lazyembeds/ci.yml?style=flat-square)

🐼✨🌴💿🎶🎹🎸
```
8   8  8 8""""8      8                        8""""                                 
8   8  8 8    8      8     eeeee eeeee e    e 8     eeeeeee eeeee  eeee eeeee eeeee 
8e  8  8 8eeee8      8e    8   8 "   8 8    8 8eeee 8  8  8 8   8  8    8   8 8   " 
88  8  8 88     eeee 88    8eee8 eeee8 8eeee8 88    8e 8  8 8eee8e 8eee 8e  8 8eeee 
88  8  8 88          88    88  8 88      88   88    88 8  8 88   8 88   88  8    88 
88ee8ee8 88          88eee 88  8 88ee8   88   88eee 88 8  8 88eee8 88ee 88ee8 8ee88 
                                                                                    

**Lazy load all embedded iframes** on your WordPress site including Spotify, iTunes, Bandcamp, Vimeo, YouTube, Tidal, Deezer, Apple Music, and more.

## Features
- Lazy load iframes at fold for faster page load.
- Optional fallback animations: glass style or spinning loaders.
- Admin panel for settings & animation preview.
- Secure API storage for Vimeo & Cloudflare (AES encrypted).
- Local caching for LQIP thumbnails for speed (future roadmap).

## Roadmap
- Add LQIP fetch for all supported platforms using APIs.
- Legacy mode toggle (3DS, WeeeU, etc.). (W.I.P)
- Cloudflare optimization support.
- Audio accessibility settings.

## Installation
1. Upload `wp-lazy-embeds` folder to `/wp-content/plugins/`.
2. Activate plugin through the Plugins menu.
3. Configure settings via the "Lazy Embeds" admin menu.

## Notes
- Default placeholder is glass style.
- Tiny LQIP images from some providers may be skipped.
- Fallbacks for legacy browsers provided.

Made in California "after taking the 405 to the 101 to get outta here and make this plugin..." by [Frank Panduh](https://panduh.dev)