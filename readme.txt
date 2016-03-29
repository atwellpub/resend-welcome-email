=== Resend Welcome Email ===
Contributors: adbox, ramiy
Donate link: hudson.atwell@gmail.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: users, welcome-email, user-mangement, support
Requires at least: 3.8
Tested up to: 4.4
Stable Tag: 1.0.3

Quickly create a new password and send a welcome email for a user through the user's profile edit area.

== Description ==

This tool was developed to quickly renew and remind users of their password when they are having trouble logging in. I looked for a way to skip the password regeneration but I don't think it is possible with WordPress.

= Developers & Designers =

This extension has a plubic GitHub page where users can contribute fixes and improvements.

[Follow Development on GitHub](https://github.com/atwellpub/resend-welcome-email "Follow & Contribute to core development on GitHub")
 | 
[Follow Developer on Twitter](https://twitter.com/atwellpub "Follow the developer on Twitter")

== Installation ==

1. Upload `resend-welcome-email` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Do you provide free support for this plugin =

No. But we have a public github and we do offer paid support. Contact the plugin developer to commission your work.

== Changelog ==

= 1.0.3 =
* Security: Prevent direct access to php files.
* Security: Prevent direct access to directories.
* i18n: Use [translate.wordpress.org](https://translate.wordpress.org/) to translate the plugin to other languages.

= 1.0.2 =

* wp_new_user_notification() stopped sending passwords via email, and instead it sends a reset password link.

= 1.0.1 =

* Initial release.
