# Olark plugin for Craft CMS

Integrate Olark with Craft

![Screenshot](resources/icon.png)

# About Olark

Over 10,000 companies rely on Olark live chat to answer customers immediately on their website. Loved by customer service and sales teams.

## Installation

To install Olark, follow these steps:

1. Download & unzip the file and place the `olark` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `olark` for Craft to see it.

Olark works on Craft 2.4.x and Craft 2.5.x.

## Configuring Olark

Add your tracking code to the plugin settings. You can get it when entering the inbox for the first time, or from [Settings -> Website Settings -> (select your site) -> Setup instructions](https://app.olark.im/settings/websites/)

## Using Olark

Simply insert the template hook into your main layout file, right before the `</body>` end tag:

```twig
{% hook 'olark' %}
```

## Olark Roadmap

- Add Commerce stats (order #, LTV, etc.) to users

Brought to you by [Superbig](https://superbig.co)