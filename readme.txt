=== ResponseTap WP ===
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

This plugin is a ResponseTap WordPress integration to aid with call tracking.

ResponseTap is a call intelligence platform that provides real-time, actionable data related to inbound phone calls. Insights provided through ResponseTap are integral to analysing the success of marketing channels and lead generation activities.

== Installation ==

You can download the latest release as a `.zip` then head over to your site to install this manually or install from the WordPress plugin library.

== Usage ==

Get your website ID from the ResponseTap dashboard and input it to our settings page.
	 
The settings page for this plugin can be found in the admin section of WordPress under `Settings > ResponseTap WP`.
	 
Use shortcodes in replacement of phone numbers in your code.
`
[responsetap_wp responsetap_number="12345" number="+44 (1163) 400442"]
`

The shortcode will be replaced with the following markup when published:

`
<a href="tel:+44123456">
    <span class="rTapNumber12345">
        +44123456
    </span>
</a>
`

If ResponseTap returns an error, it will the plugin will use the fallback entered. See below:

`
<a href="tel:+441163400442">
    <span class="rTapNumber12345">
        +44 (1163) 400442
    </span>
</a>
`

== Frequently Asked Questions ==

There are currently no frequently asked questions for this project.

== Upgrade Notice ==

There are currently no upgrade notices for this project.

== Screenshots ==

1. There are no screenshots available for this project.

== Changelog ==

= 1.0.0 =
* Initial release.
