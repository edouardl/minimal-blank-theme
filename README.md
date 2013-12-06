minimal-blank-theme
===================
A simple, light and minimal blank theme, to start any wordpress project, without need of deleting or changing any code. Just add yours.

Don't forgot to change the domain to yours if you need translation or to change the text, in this files : 
- 404.php (lines 3, 6)
- comments.php (lines 15, 26, 27, 28, 37)
- index.php (line 13)

The Minimal Blank Theme made by Pierre-Olivier Blouin and Edouard Labre, is currently in version 1.1 (2013/12/06).


Changelog
===================
Version 1.1
- Replace the param of post_class() function : 'entry' by array('entry') in page.php, index.php and single.php
- Fix for get_template_part() the path of example block in single.php and page.php
- Moved the get_template_part() function in page.php, under the <h1> title
- Replace the class of the loop section : "entry-section" by "entry-loop" in index.php
- Replace h3 title by h1 in single.php

Version 1.0
- Initial