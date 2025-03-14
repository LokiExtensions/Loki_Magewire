# Yireo_LokiComponentsMagewire

**This is an add-on package for adding Magewire components to the LokiComponents architecture.**

Magewire and LokiComponents are two very different frameworks, even though they both work with AlpineJS and are added on top
of Magento 2. Magewire focuses on bringing Laravel Livewire to Magento, with its complete feature set. This allows you to
build rich UI components while not focussing much upon JavaScript. LokiComponents focuses purely on form elements that
should be synced with AJAX and which should update other HTML targets on the page. It focuses more on modularity and
extensibility then ease-of-use, even though you could put together a LokiComponent without needing to write JavaScript and
with just a few steps. Magewire and LokiComponents are not the same. However, you could still combine both.

This module allows you to build client-side LokiComponents (including validation, filtering and more) while syncing to a
backend Magewire PHP component via `Magewire.find()`. The benefit is that you can a Magewire backend component while
benefiting from client-side LokiComponent behaviour. The LokiComponent feature of bundled HTML updates is not available though.

Note that in the LokiCheckout, you can simply also add a block that is driven both client-side and server-side by Magewire.
There is no requirement for a field to be a LokiComponent.

## Installation
Install this package via composer (assuming you have setup the `composer.yireo.com` repository correctly already):
```bash
composer require yireo/magento2-loki-components-magewire
```

Next, enable this module:
```bash
bin/magento module:enable Yireo_LokiComponentsMagewire
```

