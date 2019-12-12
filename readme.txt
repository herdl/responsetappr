=== ResponseTappr ===
Contributors: b3none
Donate link: https://herdl.com/
Tags: responsetap, call, call tracking, tracking, herdl
Requires at least: 2.9
Tested up to: 5.2
Stable tag: 5.2
Requires PHP: 7.0.0
License: MIT
License URI: https://github.com/herdl/responsetappr/blob/master/LICENSE.md

A ResponseTap integration for Wordpress.

== Description ==

A ResponseTap Wordpress integration to aid with call tracking.

== Installation ==

You can download the latest release as a `.zip` then head over to your site to install this manually.

Once this plugin has been approved on the WordPress marketplace we will update the repository with a link.

== Usage ==

Get your website ID from the ResponseTap dashboard and input it to our settings page.

The settings page can be found in the admin section of wordpress under `Settings > ResponseTappr`.

Use shortcodes in replacement of phone numbers in your code.
```
[responsetappr responsetap_number="12345" number="+44 (1163) 400442"]
```

This will be replaced with

```
<a href="tel:+44123456">
    <span class="rTapNumber12345">
        +44123456
    </span>
</a>
```

Unless ResponseTap errors, if it does it will then use the fallback

```
<a href="tel:+441163400442">
    <span class="rTapNumber12345">
        +44 (1163) 400442
    </span>
</a>
```

== Frequently Asked Questions ==

There are currently no frequently asked questions for this project.

== Upgrade Notice ==

There are currently no upgrade notices for this project.

== Screenshots ==

1. There are no screenshots available for this project.

== Changelog ==

= 1.0.0 =
* Initial release.
