<?php
/**
 * @package            Joomla
 * @subpackage         Event Booking
 * @author             Tuan Pham Ngoc
 * @copyright          Copyright (C) 2010 - 2016 Ossolution Team
 * @license            GNU/GPL, see LICENSE.php
 */
// no direct access
defined('_JEXEC') or die;

/**
 * EventbookingHelperOverrideJquery class
 *
 * This class can be used to override some common methods used in EventbookingHelperOverrideJquery class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Events Booking
 */
class EventbookingHelperOverrideJquery extends EventbookingHelperJquery
{
	/**
	 * validate form
	 */
	public static function validateForm()
	{

	}
}