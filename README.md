### Mifer Blog Theme Wordpress

Simple Wordpress Blog Page built by HTML, CSS, SASS, JS and Materialize CSS.

![miferwp](https://i.imgur.com/6pjtABK.jpg)

( This is the firstime i have developed a wordpress template so it wouldn't
 be the best organized structure for wordpress theme.
 I just want to have a simple blog with 2 types of posts are: Article and Product.
 Of course this template must be incudes all another wordpress's basic page,
 and  my lists for each page is lied under the "Structure" tag )

# Prerequisites

You must to know about the basic skills with HTML, CSS, SASS, Materialize CSS
and not really need to know alot about php and Javascript.

# Structure

* Index - `index.php` - Nothing is here
* Header - `header.php` - All meta tags for SEO was displayed in here, you need to change your information's website inside each meta tag.
* Footer - `footer.php` - Import js files (js/main.js)
* Home - ` home.php` - This page includes list of default post types (article)
* Product List - `page-product.php` - This page includes list of product post types (You must to create a new page name 'product' on admin dashboard to use this template)
* Functions :
- `function.php` - I split this file into 3 small function files included in folder 'functions' :
  + `remove.php` - I dont want to use some unnecessary actions of 'wp_head()' and 'wp_footer()' like admin_bar...,
  so i removed them by functions putted on this file, if you want to use admin bar, you can edit code or remove it on this file.
  + `register.php` - Adding some basic actions like register menu, i registered 3 type of menus with 3 difference positions are : Navbar in header, Menu for Article page and Menu for Product Page under the title and banner section.
  I also registered the excerpt for each post with 24 words, style of button readmore and the thumbnail for each post here.
  + `add_type.php` - I registered my product (post type) here.
* Single - `single.php` - This is the single page for default post type (article)
* Single Product - `single-products.php` - This is the single page for product post type
* Sidebar - `sidebar.php` - Sidebar would be displayed in 'home.php' (articles) & 'category.php' (category page)
* Search - `search.php` - Search page with search form and search results
* Contact - `contact.php` - You should delete this file because i made it for my individual contact form, you can use wordpress form plugin by creating a new contact page and installing form plugin form admin dashboard.
* Comments - `comment.php` - Configure comment for each single post here.
* Category - `category.php` - You should divide 2 main type (top level) of categorys like article and product. Because the template for 2 post types are difference in this category page.

* `js/main.js` - I use js function to enable the navbar menu button on mobile screen and alert to clients after they submit the contact form (you should delete this function and use the contact form from wordpress plugin that i have said above in the line * Contact-`contact.php`).

* CSS - I used gulp module for developing this template with SASS

# License

The code is open source and available under the [MIT License](LICENSE.md).
