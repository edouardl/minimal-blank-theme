minimal-blank-theme
===================
A simple, light and minimal blank theme, to start any wordpress project, without need of deleting or changing any code. Just add yours.

Don't forget to  edit the value of $content_width in functions.php for your own theme and uncomment any js or css lib you need in inc/enqueues.php
Default required css are set in style.css

The Minimal Blank Theme made by Pierre-Olivier Blouin and Edouard Labre, is currently in version 1.2 (2016/03/08).


Changelog
===================
Version 1.5
- cleanup <head> section
- cleanup files : remove external librairies (can be call from CDNs)
- reorganisation of blocks files to have a better files architecture : the_content and loop content in specifics files
- identify lines with domain name to change with @TODO

Version 1.4
- Responsive fix

Version 1.3
- Update jQuery (1.11.3) and jquery-ui (1.11.4) to keep compatibility with bootstrap 3.3.6

Version 1.2
- Set Modernizr and Normalize enqueue functions in comments
- Add enqueue functions for bootstrap (in comments)
- Set all externals librairies from cdn
- Add default required theme css
- Set registers sidebars in function call durint widgets_init hook
- Add viewport meta to be responsive ready
- Add comment-reply js enqueue in header
- Add $content_width definition in functions.php
- Add Editor style support in functions.php (commented by default)

Version 1.1
- Replace the param of post_class() function : 'entry' by array('entry') in page.php, index.php and single.php
- Fix for get_template_part() the path of example block in single.php and page.php
- Moved the get_template_part() function in page.php, under the h1 title
- Replace the class of the loop section : "entry-section" by "entry-loop" in index.php
- Replace h3 title by h1 in single.php

Version 1.0
- Initial
