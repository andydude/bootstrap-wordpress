<ul class="nav navbar-nav navbar-left">
	<li class="dropdown">
	    <a href="" class="dropdown-toggle widget-title" data-toggle="dropdown">Meta <span class="caret"></span></a>
	    <ul class="dropdown-menu" role="menu">
	        <?php wp_register(); ?>
	        <li><?php wp_loginout(); ?></li>
	        <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php echo esc_attr(__('Syndicate this site using RSS 2.0')); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
	<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php echo esc_attr(__('The latest comments to all posts in RSS')); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		    <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
	        <?php wp_meta(); ?>
	    </ul>
	</li>
</ul>
<form class="navbar-form navbar-right ds-search-form hidden-xs" action="<?php esc_url( home_url( '/' ) ); ?>" role="search">
    <fieldset class="ds-search-fieldset">
        <legend class="sr-only"><?php echo _x( 'Search for:', 'label' ); ?></legend>
        <span class="form-group ds-search-query-group">
            <label class="sr-only" for="bswp_search_query">Query</label>
            <input class="form-control ds-search-query" id="bswp_search_query" name="s" type="search" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>">
        </span>
        <button class="btn btn-success ds-search-btn" type="submit"><span class="glyphicon glyphicon-search"></span></button>
    </fieldset>
</form>
