=== WordPress Responsive Grid System ===
Contributors: haikalfiqih
Tags: grid, responsive, layout, columns, design
Requires at least: 5.0
Tested up to: 6.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A lightweight and flexible grid system plugin for WordPress websites.

== Description ==

WordPress Responsive Grid System is a lightweight and flexible grid system that helps you create responsive layouts easily in WordPress. It provides a 12-column grid system with multiple breakpoints for different screen sizes.

Features:

* 12-column grid system
* Responsive breakpoints (xs, sm, md, lg, xl)
* Easy to use class names
* Lightweight and performant
* WordPress-optimized

== Installation ==

1. Upload the `wordpress-responsive-grid` folder to your `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Start using the grid system in your theme!

== Usage ==

Basic example:
`
<div class="container">
    <div class="row">
        <div class="col md6">Left Column</div>
        <div class="col md6">Right Column</div>
    </div>
</div>
`

Available Classes:

* Container: `container`
* Row: `row`
* Columns: `col` with breakpoint prefixes
  * xs: 0px and up
  * sm: 576px and up
  * md: 768px and up
  * lg: 992px and up
  * xl: 1200px and up

Example column classes: `xs12`, `sm6`, `md4`, `lg3`, `xl2`

== Changelog ==

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.0.0 =
Initial release of WordPress Responsive Grid System
