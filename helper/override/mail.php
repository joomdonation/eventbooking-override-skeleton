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
 * EventbookingHelperOverrideMail class
 *
 * This class can be used to override some common methods used in EventbookingHellperMail class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Events Booking
 */
class EventbookingHelperOverrideMail extends EventbookingHelperMail
{
	/**
	 * Helper function for sending emails to registrants and administrator
	 *
	 * @param EventbookingTableRegistrant $row
	 * @param object                      $config
	 */
	public static function sendEmails($row, $config)
	{

	}

	/**
	 * Send email to registrant when admin approves his registration
	 *
	 * @param EventbookingTableRegistrant $row
	 * @param RADConfig                   $config
	 */
	public static function sendRegistrationApprovedEmail($row, $config)
	{

	}

	/**
	 * Send email to registrant when admin change the status to cancelled
	 *
	 * @param EventbookingTableRegistrant $row
	 * @param object                      $config
	 */
	public static function sendRegistrationCancelledEmail($row, $config)
	{

	}

	/**
	 * Send email when users fill-in waitinglist
	 *
	 * @param  object $row
	 * @param object  $config
	 */
	public static function sendWaitinglistEmail($row, $config)
	{

	}

	/**
	 * Send email when registrants complete deposit payment
	 *
	 * @param EventbookingTableRegistrant $row
	 * @param RADConfig                   $config
	 */
	public static function sendDepositPaymentEmail($row, $config)
	{

	}

	/**
	 * Send new event notification email to admin and users when new event is submitted in the frontend
	 *
	 * @param EventbookingTableEvent $row
	 * @param RADConfig              $config
	 */
	public static function sendNewEventNotificationEmail($row, $config)
	{

	}

	/**
	 * Send reminder email to registrants
	 *
	 * @param int  $numberEmailSendEachTime
	 * @param null $bccEmail
	 */
	public static function sendReminder($numberEmailSendEachTime = 0, $bccEmail = null)
	{

	}
	
	/**
	 * Send deposit payment reminder email to registrants
	 *
	 * @param int  $numberDays
	 * @param int  $numberEmailSendEachTime
	 * @param null $bccEmail
	 */
	public static function sendDepositReminder($numberDays, $numberEmailSendEachTime = 0, $bccEmail = null)
	{

	}
}