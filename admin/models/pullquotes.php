<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * PullquoteList Model
 */
class PullquoteModelPullquotes extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return	string	An SQL query
	 */
	protected function getListQuery()
	{
		// Create a new query object.		
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
		$query->select('q.id,a.title,q.attribution,q.published');
		// From the hello table
		$query->from('#__pullquote q INNER JOIN #__content a ON q.article=a.id');
		return $query;
	}
}
