# WP Lazy Embeds

[![License: Non-Commercial](https://img.shields.io/badge/license-Non--Commercial-green)](LICENSE.txt)

A lightweight WordPress plugin to **lazy-load embedded media** (YouTube, Spotify, SoundCloud, Bandcamp, Apple Music, and more) while supporting legacy devices and improving page load speed. Optimized for WordPress, mobile, and modern caching setups.

---

## 🌟 Features

- Lazy-loads oEmbeds for **all major media platforms**:
  - YouTube, Vimeo, Twitch
  - Spotify, Apple Music, Deezer, Audius, Audiomack
  - Bandcamp, Tidal, Napster, Pandora
  - Bluesky, X (Twitter), Telegram
  - Mailchimp forms, PayPal, Stripe
- **Legacy device support** (optional):
  - 3DeeS, WeeeU, Weee
  - Older Android/iOS browsers
- **Responsive embeds**: Auto-resizes for all screen sizes
- **Accessibility options**: Default volume moderation, screen reader compatibility where supported
- **Cloudflare aware**: Optional speed optimizations if using Cloudflare APO (API key encrypted)
- **Admin panel toggles**:
  - Enable/disable platforms individually
  - Legacy mode on/off
  - Privacy-friendly mode for affiliate links

---

## ⚡ Installation

1. Download or clone this repository:
   - `git clone https://github.com/yourusername/wp-lazy-embeds.git`
2. Upload the plugin folder to `/wp-content/plugins/`
3. Activate the plugin from your WordPress admin dashboard
4. Configure settings under **Settings → WP Lazy Embeds**

---

## 🔧 Usage

- Simply embed your links in WordPress posts/pages using the standard oEmbed method
- The plugin automatically lazy-loads the media, replacing it with a placeholder until the user interacts
- Legacy mode, accessibility options, and platform-specific toggles can be configured in the admin panel

---

## 💡 Notes

- **Non-commercial license**: Free to use or modify for non-commercial purposes. Attribution to Frank Panduh is required.
- **Performance**: Compatible with Redis, Varnish, LiteSpeed, Nginx, and Apache caching setups
- **Security**: Cloudflare API keys (if used) are encrypted; no tracking or user data is collected

---

## 📁 License

See [LICENSE.txt](LICENSE.txt) for full license details.

---

## 📬 Author

Frank Panduh – [https://panduh.dev](https://panduh.dev) – frank@panduh.dev
