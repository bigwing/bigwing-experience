# BigWing Experience Plugin

The BigWing Experience plugin configures WordPress to better protect and inform our clients, aligned to BigWing’s best practices. It is not meant as a general-distribution plugin and does not have an open development process, but is available for public perusal.

This is a fork of the original 10up Experience Plugin, and we are extremely grateful for their work on this.

## Requirements

* PHP 5.3+
* [WordPress](http://wordpress.org) 4.7+

## Install

1. Clone or [download](https://github.com/bigwing/bigwing-experience/archive/master.zip) and extract the plugin into `wp-content/plugins`. Make sure you use the `master` branch which contains the latest stable release.
1. Activate the plugin via the dashboard or WP-CLI.
1. Updates use the built-in WordPress update system to pull from GitHub releases.

## Plugin Usage

This plugin requires no configuration.

## Changelog

### 1.5
* Forked from 10up Experience and modified for BigWing.

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
* Add `bigwing_experience_remove_stream_menu_item` filter
* Add `composer.json`
* Add `editorconfig`
* Coding standard fixes

### 1.0
* Initial release.

## License

This plugin is free software; you can redistribute it and/or modify it under the terms of the [GNU General Public License](http://www.gnu.org/licenses/gpl-2.0.html) as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
