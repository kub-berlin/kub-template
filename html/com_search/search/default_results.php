<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_search
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * duplicated from components/com_search/views/search/tmpl/default_results.php
 */

defined('_JEXEC') or die;

?>

<ul class="search-results<?php echo $this->pageclass_sfx; ?>">
<?php foreach ($this->results as $result) : ?>
	<li>
		<h3 class="result-title">
			<?php if ($result->href) : ?>
				<a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) : ?> target="_blank"<?php endif; ?>>
					<?php // $result->title should not be escaped in this case, as it may ?>
					<?php // contain span HTML tags wrapping the searched terms, if present ?>
					<?php // in the title. ?>
					<?php echo $result->title; ?>
				</a>
			<?php else : ?>
				<?php // see above comment: do not escape $result->title ?>
				<?php echo $result->title; ?>
			<?php endif; ?>
		</h3>
		<?php if ($result->section) : ?>
			<div class="result-category">
				(<?php echo $this->escape($result->section); ?>)
			</div>
		<?php endif; ?>
		<div class="result-text">
			<?php echo $result->text; ?>
		</div>
		<?php if ($this->params->get('show_date')) : ?>
			<div class="result-created<?php echo $this->pageclass_sfx; ?>">
				<?php echo JText::sprintf('JGLOBAL_CREATED_DATE_ON', $result->created); ?>
			</div>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>
<div class="pagination">
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>
