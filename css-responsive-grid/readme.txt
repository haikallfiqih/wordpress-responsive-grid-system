=== CSS Responsive Grid System ===
Contributors: Haikal Fiqih
Tags: css,grid, responsive, layout, mobile-responsive
Requires at least: 5.0
Tested up to: 6.7
Stable tag: 1.0.0
Requires PHP: 7.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A lightweight and flexible grid system for creating responsive layouts in WordPress using a 12-column grid system.

== Description ==

CSS Responsive Grid System provides a modern, flexible way to create responsive layouts in WordPress. Built with flexibility and ease of use in mind, it helps developers and site builders create beautiful, responsive designs without the complexity.

= Features =

* 12-column grid system for precise layouts
* Five responsive breakpoints (xs, sm, md, lg, xl)
* Simple, intuitive class naming convention
* Lightweight and optimized for performance
* Built specifically for WordPress
* No dependencies required

= How It Works =

The grid system uses a combination of containers, rows, and columns to create layouts:

1. Containers provide a centered, maximum-width wrapper
2. Rows create horizontal groups of columns
3. Columns specify the width and responsiveness of content areas

= Responsive Breakpoints =

* xs (extra small): 0px and up
* sm (small): 576px and up
* md (medium): 768px and up
* lg (large): 992px and up
* xl (extra large): 1200px and up

== Installation ==

1. Upload the `wordpress-responsive-grid` folder to your `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Start using the grid system in your theme templates or content

== Usage ==

= Basic Example =

`
<div class="container">
    <div class="row">
        <div class="col md6">Left Column</div>
        <div class="col md6">Right Column</div>
    </div>
</div>
`

= Available Classes =

1. Container Class:
* `container` - Creates a centered, maximum-width wrapper

2. Row Class:
* `row` - Creates a horizontal group of columns

3. Column Classes:
* Base class: `col`
* Responsive prefixes: `xs`, `sm`, `md`, `lg`, `xl`
* Numbers: 1 through 12
* Example: `md6` means 50% width on medium screens and up

= Examples =

Different column sizes:
`
<div class="col xs12 sm6 md4 lg3">
    Responsive column that adapts to screen size
</div>
`

== Frequently Asked Questions ==

= Does this plugin modify my content? =

No, this plugin only adds CSS classes and necessary styling. It doesn't modify your content or database.

= Will this work with my theme? =

Yes, the grid system is designed to work with any WordPress theme.

= Is it mobile-friendly? =

Yes, the grid system is fully responsive and works on all device sizes.

== Changelog ==

= 1.0.0 =
* Initial release
* Added 12-column grid system
* Implemented responsive breakpoints
* Added container, row, and column classes

== Upgrade Notice ==

= 1.0.0 =
Initial release of CSS Responsive Grid System. Includes full responsive grid functionality.
