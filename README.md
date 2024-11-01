# SlP Token WooCommerce Gateway
This is the source of the WordPress WooCommerce payment gateway plugin available on: https://simpleledger.io/

It is written in PHP7 using the latest WordPress APIs and hooks.

## Features
* add a Bitcoin Cash (BCH) payment option to your Woocommerce store
* add an optional SLP token payment option
* on-chain payments without going through a 3rd party
* configurable if you want to accept 0-conf payments or wait for more confirmations
* 0 coding skills required for webmasters


## Installation
Just upload all sources as a zip file into your WordPress instance.

This plugin is also available in the [WordPress plugin installer](https://wordpress.org/plugins/slp-payments-for-woocommerce/).


## Development
#### Requirements
For changes to the JavaScript code shipped to browsers you need:
```
TypeScript >= 3.0
yarn >= 1.9.4 (npm should work too, but no support given if you run into errors)
Webpack >= 4
```

#### Compilation
Go to the `tpl/js` folder and run `yarn watch` to generate the `bundle.js` file of your TypeScript code.

Changes to the PHP code don't require any additional build steps.


## Contact
Website](https://simpleledger.io/)
