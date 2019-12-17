![ResponseTappr](.github/README/logo.png)

[![Contributors](https://img.shields.io/github/contributors/herdl/responsetappr)](https://github.com/herdl/responsetappr)
[![HitCount](http://hits.dwyl.io/herdl/responsetappr.svg)](https://github.com/herdl/responsetappr)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/herdl/responsetappr/graphs/commit-activity)
[![GitHub releases](https://img.shields.io/github/release/herdl/responsetappr.svg)](https://github.com/herdl/responsetappr/releases/)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](http://makeapullrequest.com)
[![We Love Open Source!](https://badges.frapsoft.com/os/v3/open-source.svg?v=103)](https://github.com/herdl)

# ResponseTappr
A ResponseTap integration for Wordpress.

== Description ==

This plugin is a ResponseTap WordPress integration to aid with call tracking.

ResponseTap is a call intelligence platform that provides real-time, actionable data related to inbound phone calls. Insights provided through ResponseTap are integral to analysing the success of marketing channels and lead generation activities.

== Installation ==

You can download the latest release as a `.zip` then head over to your site to install this manually or install from the WordPress plugin library.

== Usage ==

Get your website ID from the ResponseTap dashboard and input it to our settings page.
	 
The settings page for this plugin can be found in the admin section of WordPress under `Settings > ResponseTappr`.
	 
Use shortcodes in replacement of phone numbers in your code.
`
[responsetappr responsetap_number="12345" number="+44 (1163) 400442"]
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

## We're Using
* [PHP](https://www.php.net/) - The primary programming language

## Contributing
It is worth noting that all contributions must comply with the [PSR-2 standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)

## Versioning
We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/herdl/responsetappr/tags). 

## Authors
* **Alex Blackham** - *Developer and Maintainer* - [B3none](https://github.com/b3none)
* **Mat Moses** - *Logo creation* - [mooonthemove](https://instagram.com/mooonthemove)

See also the list of [contributors](https://github.com/herdl/responsetappr/contributors) who participated in this project.

## License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
