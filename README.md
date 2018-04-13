### Mifer Blog Theme Wordpress

Simple Wordpress Blog Page built by HTML, CSS, SASS, JS and Materialize CSS.

![miferwp](https://i.imgur.com/6pjtABK.jpg)

( This is the firstime i have developed a wordpress template so it wouldn't
 be the best organizational structure for wordpress theme.
 I just want to have a simple blog with 2 types of posts are: Article and Product.
 Of course this template must be incudes all another wordpress's basic page,
 and  my lists for each page is lied under the "Structure" tag )

# Prerequisites

You must to know about the basic skill with HTML, CSS, SASS, Materialize CSS
and not really need to know alot about php and Javascript.

# Structure

* Index - `index.php` - Nothing is here
* Header - `header.php` - All meta tags for SEO was display in here, you must change your information's website inside each meta tag
* Footer - `footer.php` - Import js file (js/main.js)
* Home - ` home.php` - This page includes list of default post types (article)
* Product List - `page-product.php` - This page includes list of product post types (U must create a new page name product to use this template)
* Functions :
- function.php - split 3 small function files in folder functions :
  + remove.php - I dont want to use some action of wp_head() and wp_footer() like admin bar...,
  so i removed them by functions inside this file, if tou want to use admin bar u can modify this file.
  + register.php - Add some basic actions like register menu, i registered 3 type menu with 3 difference positions : Navbar, Menu for Article page and Menu for Product Page.
  register excerpt for post with 24 words, style of button readmore and register thumbnail for each post.
  + add_type.php - I register my product (post type) here
* Single - `single.php` - This is single page for default post type (article)
* Single Product - `single-products.php` - This is single page for product post type
* Sidebar - `sidebar.php` - Sidebar would display in home (articles) & category page
* Search - `search.php` - Search page with search form and search results
* Contact - `contact.php` - You should delete this file because i made it for my individual contact form, you can use form plugin or create a new contact page.
* Comments - `comment.php` - Comments for each single post
* Category - `category.php` - You should divide two main type (top level) of category likes article and product. Because template for 2 post types are difference in this category page.

* `js/main.js` - I use js function to toggle button menu navbar on difference media screens and alert after submit contact form (you should delete this function).

# License

The code is open source and available under the [MIT License](LICENSE.md).
