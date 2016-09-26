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
 * EventbookingModelOverrideRegister class
 *
 * This class is used to show you how to override a model class in Events Booking.
 */
class EventBookingModelOverrideRegister extends EventBookingModelRegister
{
	/**
	 * Process individual registration
	 *
	 * @param $data
	 *
	 * @return int
	 * @throws Exception
	 */
	public function processIndividualRegistration($data)
	{
		// You can simply copy the original code of the method here, then customize it to meet your need. As this class is
		// extended from  EventBookingModelRegister class, you can also call any (public/protected) methods from parent class
		// For example, just call return parent::processIndividualRegistration($data); will work, too
	}
}
