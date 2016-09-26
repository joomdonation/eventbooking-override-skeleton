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
 * EventbookingControllerOverrideRegister class
 *
 * This class is used to show you how to override a controller class in Events Booking.
 */
class EventbookingControllerOverrideRegister extends EventbookingControllerRegister
{
	/**
	 * Process Individual Registration
	 */
	public function process_individual_registration()
	{
		// You can simply copy the original code of the method here, then customize it to meet your need. As this class is
		// extended from  EventbookingControllerRegister class, you can also call any (public/protected) methods from parent class
		// For example, just call parent::process_individual_registration(); will work, too
	}
}
