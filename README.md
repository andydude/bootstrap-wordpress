bootstrap-wordpress
===================

Bootstrap WordPress Theme


Introduction
------------

Navigation
----------

The WordPress way of doing nav-menus is that posts and pages may be *both* a link and a menu at the same time. Mosts themes allow this by activating the menus on hover, and the links on click. This works great, unless you are browsing on a phone, or need assistive technologies, e.g. if you are blind.

The Bootstrap way recognises that phone's don't have hover events, and so the two actions are separated into two items: the link, and the arrow. The arrow activates the menu, and the link goes to that page.

Integrating the WordPress way and the Bootstrap way was very difficult. WordPress does not provide any indication whether or not the `li` element being visited is a menu (meaning a branch) or just a simple link (meaning a leaf). In order to obtain this information I had to write a special function `bswp_count_number_of_children($item_id)` to count the number of children of a given `li` element. With this information in hand, it's much easier to add the required Bootstrap styles `.dropdown` and `.dropdown-menu` to the corresponding elements.