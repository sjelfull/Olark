# Olark plugin for Craft CMS

Integrate [Olark](http://www.olark.com/special/25091379) with Craft

![Screenshot](resources/icon.png)

# About Olark

Over 10,000 companies rely on [Olark](http://www.olark.com/special/25091379) live chat to answer customers immediately on their website. Loved by customer service and sales teams.

## Installation

To install Olark, follow these steps:

1. Download & unzip the file and place the `olark` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `olark` for Craft to see it.

Olark works on Craft 2.4.x and Craft 2.5.x.

## Configuring Olark

[Get an account first with Olark.](http://www.olark.com/special/25091379).
Then, add your Site ID in the plugin settings. You can get it from the [site install instructions](https://www.olark.com/install)

## Using Olark

Simply insert the template hook into your main layout file, right before the `</body>` end tag:

```twig
{% hook 'olark' %}
```

## Olark Roadmap

- Add Commerce stats (order #, LTV, etc.) to users

Brought to you by [Superbig](https://superbig.co)