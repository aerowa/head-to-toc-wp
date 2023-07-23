# head-to-toc-wp
Very simple WordPress plugin that transforms your head tags into a table of content.


Use:
Pick one of the flavors.

`h2-header.php` if you only want `<h2>` tags to be looked for, but can also be changed into whatever you'd like, just replace `<h2>` with `<hX>`.

`all-headers.php` for all of them, the code is rather unkempt, though. For stylized, simply pick `all-headers-stylized.php` together with `style.css`.

You'll need to edit `$ids = array(PAGEID);` into your preference. `()` for all pages, or for example for pages with ID 23 `$ids = array(23);`. Multiple pages seperate with comma `$ids = array(23, 55, 90);`.

Standard CSS to work with your page style, either in custom within your theme or by using the `style.css`.

Please note that this is not a sticky ToC, just the list autogenerated. For a sticky one see https://github.com/aerowa/wp-sticky-toc - you can combine them into one if required, but do at your own caution.

Installation:

Download your flavor of `.php` and edit as mentioned above, turn into a ZIP file and activate plugin. Change your page for your `<hX>` tags to for example, `<h1 id="1">`. 

To show the box, simply put `<div id="tocBox"></div>` and it will autopopulate with all your head tags.

Open an issue if you have questions.
