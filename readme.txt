=== Lang Attribute for the Block Editor ===
Contributors: guillaumeturpin, audrasjb, whodunitagency
Tags: lang, language, accessibility, block editor
Requires at least: 5.9
Tested up to: 6.1
Stable tag: 0.1
Requires PHP: 7.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add lang attribute to the text formatting toolbar in the block editor.

== Description ==

The intent of this plugin is to provide a way to ensure any language change in the content of a page is indicated to assistive technologies. This feature is not available by default in the block editor so it is difficult to make a website fully compliant to WCAG guidelines using the block editor for now.

We clearly hope this feature will be natively implemented in the block editor in middle term, because this very simple feature is really needed to help people to create accessible websites. But in short terms, we need a solution and this plugin is a solution you may want to use to make your website compliant to accessibility guidelines :)

For more context: this plugin helps you to make your website compliant to the Web Content Accessibility Guidelines (WCAG) success criterion 3.1.2: "Language of Parts". The purpose of this success Criterion is to ensure that user agents can correctly present content written in multiple languages.

This makes it possible for user agents and assistive technologies to present content according to the presentation and pronunciation rules for that language. This applies to graphical browsers as well as screen readers, braille displays, and other voice browsers.

Both assistive technologies and conventional user agents can render text more accurately if the language of each passage of text is identified. Screen readers can use the pronunciation rules of the language of the text. Visual browsers can display characters and scripts in appropriate ways.

This is especially important when switching between languages that read from left to right and languages that read from right to left, or when text is rendered in a language that uses a different alphabet. Users with disabilities who know all the languages used in the Web page will be better able to understand the content when each passage is rendered appropriately.


== Screenshots ==

1. Using the block editor formatting toolbar to add a language attribute.
2. Checking that the `lang` attribute is rendered on front-end.

== Installation ==

1. Install the plugin and activate.
2. Use the "Language attribute" toolbar button, available on any text content added in the block editor.

== Changelog ==

= 0.1 =

* Plugin initial commit. Works fine :)