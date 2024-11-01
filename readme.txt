=== SLP Payments for WooCommerce ===
Contributors: ekliptor
Tags: bitcoin, bch, ecommerce, e-commerce, blog, woocommerce, store, sales, sell, shop, bitcoin cash, btc
Donate link: https://simpleledger.io/
Requires at least: 4.7
Tested up to: 5.6
Requires PHP: 7.1
Stable tag: 1.2.74
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

SLP Payments for WooCommerce

== Description ==

PLUGIN IN MAINTENANCE: CURRENTLY THIS PLUGIN HAS BEEN DISABLED DUE TO A MAJOR API REWRITE
PLEASE COME BACK LATER

Accept any SLP token or Bitcoin Cash (BCH) as a payment method in your online store.

Are you looking to offer your customers a unique and fun way to redeem earned loyalty, rewards or appreciation tokens in exchange for merchandise or other items at your online store?

With Simple Ledger Protocol (SLP), anyone can easily create and send their own token to any supported wallet. However, until now there have been no options that allow online store owners to accept their token as a payment option.

**SLP Token Payments for WooCommerce** is easy to set up and allows anyone with a
WooCommerce store to accept their own SLP token as a payment option.

**What is SLP?**

Simple Ledger Protocol (SLP) tokens are the simplest, fastest, and most liberating token system in existence. SLP tokens can easily be created, traded, and managed on the Bitcoin Cash blockchain within seconds; costing the user only fractions of a penny for each transaction.
To learn more about SLP tokens and how to create your own, visit [simpleledger.cash](https://simpleledger.cash/).

**Example uses:**

* **Youtube channels:** Offer SLP tokens to new subscribers or as prizes for competitions, redeemable for merchandise at your store.
* **Gaming sites:** Players can use SLP tokens earned in your game for merchandise at your online store.
* **Loyalty rewards and discounts for store owners:** Accept your own custom SLP Token for special rewards or discounts, redeemable only at your online store.
* **Loyalty points for news sites/blogs:** Offer loyalty points to your subscribers in the form of SLP Tokens and accept them as a form of payment on your online store.

Check out the store demo at [slp.cash](http://slp.cash/).

**Easy Setup:**

* Install WooCommerce
* Install the **SLP Token Payments for WooCommerce** plugin, then configure as shown in [this video](https://simpleledger.cash/project/slp-payments-for-woocommerce/).

Check out the store demo at [slp.cash](https://simpleledger.cash/shop/).

**Advanced Features:**

* Accept 0-conf payments or wait for more confirmations
* Use your custom token icon and website URL to promote your token as a payment option


LEGAL NOTICE:
This plug-in is watch-only wallet software for receiving Bitcoin Cash and SLP. The plug-in has no access to the user’s private keys.
The WooCommerce store operator using this plug-in is solely responsible for managing their private keys using an SLP aware wallet, like Electron Cash SLP Edition.
Simple Ledger, Inc. is not responsible for damages of any kind associated with the use of this plug-in.

This plugin loads code API code from bitcoin.com to interact with BadgerWallet - a browser extension for BCH payments.
This does not require an account or signup at their service. Their privacy policy is available here: https://www.bitcoin.com/privacy-policy/


== Installation ==
Just install it from the WordPress plugin store or upload the slp-payments-for-woocommerce.zip file via your browser in your WordPress plugin page.

== Frequently Asked Questions ==
= Is this plugin for free? =
Yes this plugin is completely free.

= How can I create SLP Tokens? =
Anyone can easily create SLP Tokens. Just use the Electron Cash SLP wallet or the Badger wallet.

= Does it detect partial payments? How are they handled? =
Yes this plugin will automatically detect partial payments (underpayments). In that case it will credit the paid amount of the order and display a message on the website to show the user the remaining amount.
The user then can make a second (regular) transaction to the same address to complete the payment.

= Does it generate 1 new address per invoice? =
Yes this plugin automatically generates a new address for every order. To do this it uses the store owner’s xPub. This way the WordPress website has no access to any funds in case of a security breach.
The private key is kept safely in a supported wallet such as “Electron Cash SLP Edition”.

= How can merchants do refunds? =
To do refunds, the shop owner should contact the buyer via usual channels (such as the WooCommerce customer invoice email address) and ask him for an address to send the funds back to.
The shop owner can then make the refund transaction directly from a wallet (such as “Electron Cash SLP Edition”).

We do not recommend sending refunds back directly to the address the payment came from. That address might belong to a 3rd party (an exchange) and the customer might not get credited incoming funds on this address.

= Will it confuse customers who send Bitcoin BTC payments? Will they lose funds? =
No. There is no way this plugin can confuse your customers if you also accept Bitcoin Core (BTC) payments in your store. This plugin solely uses the new CashAddr format for BCH payments (addresses starting with a “q”) and the SLP address format for all SLP token payments (see [here](https://github.com/simpleledger/slp-specifications/blob/master/slp-uri-scheme.md)).
Those addresses are not recognized by Bitcoin Core (BTC) nodes, so it’s impossible to send BTC to them. Therefore you will not have to worry about issues with lost funds due to customer confusion.

== Screenshots ==
1. The WooCommerce admin settings in WP admin panel
2. The WooCommerce checkout page when placing an order
3. Plugin payment options on order page

== Changelog ==
= 1.2.74 =
* temporarily removed all features due to major API rewrite

= 1.2.73 =
* made SLP address prefix optional

= 1.2.72 =
* added link to SLP merchant rewards tool in plugin settings

= 1.2.71 =
* make API call to token rate API and validate response if this setting is changed to warn admin about invalid API response
* serialize order items for stats

= 1.2.70 =
* fixed getting token metadata for addresses with 0 transactions

= 1.2.69 =
* don't count BCH balances below dust limit
* store BCH address as SLP rewards address if no SLP address provided on BCH payment
* updated WebPack to v5 and switched to ts-loader

= 1.2.68 =
* add SLP Rewards address from SLP transaction (if none provided) by using the last address from outputs
* updated default BCHD API URL

= 1.2.67 =
* added optional WP rewards SLP address input field

= 1.2.65 =
* ensure to notify admin only paid orders and exactly once

= 1.2.64 =
* added new default BCHD API server

= 1.2.63 =
* fixed crash due to missing import

= 1.2.62 =
* ensure plugin JavaScript script is always included after jQuery
* ensure internal load order doesn't add hooks twice when WP cron is running

= 1.2.61 =
* minor fixes

= 1.2.60 =
* improved WP cron scheduling on install and plugin (re-) activation

= 1.2.59 =
* ensure plugin activation gets re-tried on every setttings update to reset status if it previously failed

= 1.2.58 =
* fixed possible double init call on WP cron
* fixed site ping

= 1.2.57 =
* run admin query hourly and after update 

= 1.2.56 =
* updated terms of service and data policy in plugin

= 1.2.53 =
* leave default setting for BCHD API empty and show admin message that API URL is required
* disable plugin on update from previous versions and register with SLP Admin plugin upon enabling plugin
* record total order amount of all paid SLP orders, time and more data for the SLP admin plugin

= 1.2.52 =
* send "ignore cache" headers on /order-status ajax request
* always force recheck of BCHD on ajax requests

= 1.2.51 =
* fixed bug not reloading immeidatly on balance change in browser
* added HTTP headers to CasP: Cache-Control: no-cache,max-age=0
* throw exception in CashP if BCHD doesn't return number of token decimals

= 1.2.50 =
* fixed bug on token select radio buttons selection
* improved payment recognition speed and query WP again if browser BCHD says "paid"

= 1.2.48 =
* ensure token select radio button events are bound in case of late/async script load by increasing retries with timer
* use different timer for querying WP and BCHD node in browser as a fix to ensure the WP order status query continues until fully paid

= 1.2.47 =
* improved TypeScript update timer call of remaining amount display
* increased accepted TX to up to 30 blocks ago (shouldn't be needed as we generate new addresses)

= 1.2.46 =
* fixed wrong SLP token amount with decimals when checking payments
* ensure partial payment page keeps updading UI on more (partial) payments
* updated TypeScript to 3.9.5 and jQuery typings (for upcoming WP jQuery upgrade)

= 1.2.45 =
* fixed parsing response of newly created address from BCHD that doesn't contain any token info yet

= 1.2.44 =
* fixed BCHD API payment bug for SLP tokens with decimals other than "satoshis" as smallest unit
* added error message in WP admin when adding a SLP token other than type1 and disable this token
* increased default SLP token decimals (fallback) to 9

= 1.2.43 =
* fixed showing WC order fields in WP admin hidden by "Advanced Custom Fields" plugin

= 1.2.42 =
* fixed restoring same payment address if browser session cookies were removed
* show WC order fields in WP admin hidden by "Advanced Custom Fields" plugin (to see payment address and chain transaction IDs)

= 1.2.41 =
* added BCHD as full node backend and removed Bitcoin.com REST API and SLPSocket DB
* disable plugin on upgrade and require consent to "Terms of Service" before activation in WP admin
* show error message in WP admin on incomplete token config or mismatch of token ID and ticker symbol

= 1.2.40 =
* fixed payment error if token digits could not be fetched from blockchain API
* updated WP 5.5 compatibility

= 1.2.39 =
* fixed inccorect check for BCH payment with some SLP addresses

= 1.2.38 =
* ensure on-chain transactions are always present for new orders
* don't load on-chain transactions if order is not in status "pending" anymore

= 1.2.37 =
* added WooCommerce 4.0 compatibility

= 1.2.36 =
* fixed possible crash in WP REST API when checking order status
* bumped WordPress 5.4 compatibility

= 1.2.35 =
* updated token-rate-sample.php for price_{woocommerce_currency}
* skip loading plugin during WooCommerce or other situations where WC gateway classes might not be defined

= 1.2.34 =
* added support for all WooCommerce currencies in token rate API, use store default currency and USD only as fallback
* always update SLP token rates via API on checkout page if last update is older than 5min

= 1.2.33 =
* keep previous token rate if current rate is not positive (or null) on token rate API update

= 1.2.32 =
* always truncate token amounts on internal comparison to min(8, token_digits_config) to prevent false underpayments
* fixed bug resetting hdPath counter when changing xPub in WP admin
* fixed ensuring new address has 0 balance, removed associated REST API errors from customer checkout page
* ensure we don't have multiple payment API check calls simultaneously on slow REST API response

= 1.2.31 =
* check orders expired (cancelled by WooCommerce) within the last 24h for received payments too
* added order expiration message for values of woocommerce_hold_stock_minutes below 1h too

= 1.2.30 =
* removed SPICE token from pre-installed tokens 

= 1.2.29 =
* fixed bug on settings update checking wrong variable

= 1.2.27 =
* added JSON API setting to update SLP token rates hourly. see /tpl/token-rate-sample.php in plugin folder for the JSON spec
* added more setting cleanups on plugin uninstall

= 1.2.25 =
* added plugin specific error/debug logfile to WooCommerce  status logs in WP admin

= 1.2.24 =
* faster WP REST repeated payment confirmation checks on EventStream update in browser
* changed default SPICE icon and removed box shadown from token icon

= 1.2.23 =
* added checks to ensure address has 0 balance of the user's chosen token before using it for payments
* added database migrations on version updates
* added SLPSocket EventStream in browser for faster payment checks
* fixed: ensure to always use simpleledger URI for SLP token payments and bitcoincash URI for BCH payments
* refactored some TypeScript code for better maintainability

= 1.2.22 =
* list token selection for customers vertically
* ensure token rate is always positive

= 1.2.21 =
* always show the same SLP gateway icon on Woocommerce gateway selection
* show "payment success" animation only once, then keep the last frame of the image
* fixed number formating in simple ledger payment URIs
* don't send payment instruction email if the order has already been fully paid (invoice email is already sent)

= 1.2.20 =
* improved first page load time of order page (skipping immediate payment checks on new address)
* added payment status order notes in WC admin to help store owners process orders
* fixed editing of multiple tokens simultaneously in WP admin

= 1.2.19 =
* use SLPDB to check TX confirmations and address balance if 0 conf is enabled (default)

= 1.2.18 =
* find first empty-balance address when changing xPub using WP cron
* improved partial payment updates

= 1.2.17 =
* fixed token selection for WP themes loading payment options delayed

= 1.2.16 =
* update QR codes on partial payments to show remaining amount
* some fixes

= 1.2.14 =
* improved restoring order session from email link without cookies
* fixed error on invalid (or expired) order page

= 1.2.12 =
* show remaining BCH or SLP token amount on underpayment
* fixed showing invalid total amounts for tokens on payment page

= 1.2.10 =
* fixed token select layout
* improved bitcoin.com REST API error handling
* fixed token enabling in WP admin

= 1.2.9 =
* added "payment received" icon
* improved AJAX payment checks, including remaining amount
* improved invoice mail sending trigger
* fixed bugs 

= 1.2.8 =
* show correct number of decimals for each SLP token on website and in order emails
* fixed various bugs

= 1.2.7 =
* added multiple SLP token payment selection for customers
* fixed sending order emails
* fixed various bugs

= 1.2.0 =
* added setup for multiple SLP tokens in WP admin interface
* added pre-installed SLP tokens: USDH and SPICE

= 1.1.3 =
* fixed underpay bug
* improved payment page layout

= 1.1.2 =
* added new payment page layout

= 1.1.1 =
* WP REST API fixes

= 1.1.0 =
* added AJAX requests to check payment status
* added customized order confirmation and paid email
* min wait 30 seconds between checks for new transactions via REST API to reduce overhead

= 1.0.6 =
* improved layout of payment page
* added a checkbox to enable BadgerWallet in WP admin
* fixed warning on plugin activation when loading templates

= 1.0.5 =
* minor updates to banner, settings tooltips, and readme docs

= 1.0.4 =
* improved "pay in app" button style
* moved periodic REST API calls to the end of script execution for faster load times

= 1.0.0 =
* Initial release.


