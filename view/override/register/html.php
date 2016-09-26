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
 * Class EventbookingViewOverrideRegisterHtml
 *
 * This class is used to show you how to override a view class in Events Booking.
 */
class EventbookingViewOverrideRegisterHtml extends EventbookingViewRegisterHtml
{
	/**
	 * Display individual registration Form
	 *
	 * @param object   $event
	 * @param RADInput $input
	 *
	 * @throws Exception
	 */
	protected function displayIndividualRegistrationForm($event, $input)
	{
		// You can simply copy the original code of the method here, then customize it to meet your need. As this class is
		// extended from  EventBookingModelRegister class, you can also call any (public/protected) methods from parent class
		// For example, just call parent::displayIndividualRegistrationForm($data); will work, too
	}
}
