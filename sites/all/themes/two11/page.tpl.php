<div id="page">
	<!--  **************************** HEADER *****************************  -->
	<?php print render($page['header']); ?>
	<header id="main-header" class="clearfix">
		<div class="container">
			<h1><?=l($site_name, "<front>");?></h1>
		</div>
	</header>
	<nav id="main-nav">
		<?php if (isset($main_menu)) { ?>
			<?php print drupal_render($main_menu);?>
		<?php } ?>
	</nav>
	<nav id="utility-nav">
		<ul>
		<li class="first"><a href="http://211connects.org" target="_self">Home</a></li>
		<li class="middle"><a href="http://211tampabay.org" target="_blank">About Us</a></li>
		<li class="middle"><a href="http://211connects.org/Contact-Us">Contact Us</a></li>
		<li class="middle"><a href="http://211connects.org/sitemap">sitemap</a></li>
		</ul>
	</nav>
	<div id="emailNewsletterEnroll">
		<form action="http://visitor.constantcontact.com/d.jsp" method="post" name="ccoptin" target="_blank" accept-charset="utf-8">
			<b>Sign up for our Email Newsletter</b>&nbsp;
			<input type="text" name="ea" size="20" value="" title="enter email address" placeholder="enter email address" class="placeholder" style="color: rgb(102, 102, 102); ">
			<input type="submit" name="go" value="GO" class="submit">
			<input type="hidden" name="m" value="1103049216497">
			<input type="hidden" name="p" value="oi">
		</form>

	</div>
	<div id="breadcrumb">
    <?php if ($breadcrumb): ?>
      <?php print $breadcrumb; ?>
    <?php endif; ?>	
	</div>
	<!--  ***************************** MAIN *******************************  -->
	<section id="main" class="clearfix">
		<?php if ($page['sidebar_first']): ?>
			<aside id="sidebar-first" class="sidebar">
				<?php print render($page['sidebar_first']); ?>
			</aside>
		<?php endif; ?>
		<a id="main-content"></a>
		<?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
		<?php print render($title_prefix); ?>
		<?php print render($title_suffix); ?>
		<?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
			<?php print render($tabs2); ?>
		<?php print $messages; ?>
		<?php print render($page['help']); ?>
		<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
		<article class="clearfix">
			<?php print render($page['content']); ?>
		</article>
		<?php if ($page['sidebar_second']): ?>
			<aside id="sidebar-second" class="sidebar">
				<?php print render($page['sidebar_second']); ?>
			</aside>
		<?php endif; ?>
	</section>

	<!--  ****************************** FOOTER ****************************  -->
	<footer id="main-footer" class="clearfix">
		<?php print $feed_icons ?>
        <?php print render($page['footer']); ?>
	</footer>
	
</div>

	
