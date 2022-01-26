=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://bway.pt
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple cookie consent mechanic for our clients.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `bw-cookie-consent` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add `id="analytics-js"` and `type="conditional-js"` to your site analytics script tag.

```
<script id="analytics-js" type="conditional-js" async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXX-XX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-XXXXXX-XX');
</script>
```

== Changelog ==

= 1.0.0 =
* Initial version