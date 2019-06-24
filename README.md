# 10up Experience Plugin

> The 10up Experience plugin configures WordPress to better protect and inform our clients, aligned to 10up’s best practices. It is not meant as a general-distribution plugin and does not have an open development process, but is available for public perusal.

[![Build Status](https://travis-ci.org/10up/10up-experience.svg?branch=master)](https://travis-ci.org/10up/10up-experience) [![Support Level](https://img.shields.io/badge/support-active-green.svg)](#support-level)

## Requirements

* PHP 5.3+
* [WordPress](http://wordpress.org) 4.7+

## Install

1. Clone or [download](https://github.com/10up/10up-experience/archive/master.zip) and extract the plugin into `wp-content/plugins`. Make sure you use the `master` branch which contains the latest stable release.
1. Activate the plugin via the dashboard or WP-CLI.
1. Updates use the built-in WordPress update system to pull from GitHub releases.

## Plugin Usage

This plugin requires no configuration.

## Support Level

**Active:** 10up is actively working on this, and we expect to continue work for the foreseeable future including keeping tested up to the most recent version of WordPress.  Bug reports, feature requests, questions, and pull requests are welcome.

## Changelog

### 1.4
* If plugin updates via dashboard are disabled, still show notifcation that an update exists.
* Remove 10up users from author archives.

### 1.3
* Add "Use Classic Editor" toggle to writing settings
* Properly call a hook as a filter, not an action

### 1.2
* Only load admin bar CSS on front-end if the admin bar is showing
* Use a base64-encoded admin bar icon so it can be colorized
* Ensure plugin deactivation message linebreaks are displayed correctly

### 1.1
* Add `tenup_experience_remove_stream_menu_item` filter
* Add `composer.json`
* Add `editorconfig`
* Coding standard fixes

### 1.0
* Initial release.

## License

This plugin is free software; you can redistribute it and/or modify it under the terms of the [GNU General Public License](http://www.gnu.org/licenses/gpl-2.0.html) as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

## Like what you see?

<p align="center">
<a href="http://10up.com/contact/"><img src="https://10updotcom-wpengine.s3.amazonaws.com/uploads/2016/10/10up-Github-Banner.png" width="850"></a>
</p>
