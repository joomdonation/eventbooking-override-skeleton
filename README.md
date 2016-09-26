# Overriding Events Booking extension code

From version 2.10.2, Events Booking has a mechanism to allow you to override it's code (static methods, model, view, controller classes). So in case you have to customize Events Booking to meet your own need, you won't have to worry about upgrading to loosing this customization while updating to future releases of Events Booking anymore. Below you can see the details:

## Override static methods (helper methods)

Events Booking has some helper classes which you can see in components/com_eventbooking/helper folder. Currently, the following static methods can be overrided:

1. EventbookingHelper::buildTags
2. EventbookingHelper::calculateIndividualRegistrationFees
3. EventbookingHelper::calculateGroupRegistrationFees
4. EventbookingHelper::calculateCartRegistrationFee
5. EventbookingHelper::generateInvoicePDF
6. EventbookingHelperMail::sendEmails
7. EventbookingHelperMail::sendRegistrationApprovedEmail
8. EventbookingHelperMail::sendRegistrationCancelledEmail
9. EventbookingHelperMail::sendRegistrationCancelledEmail
10. EventbookingHelperMail::sendWaitinglistEmail
11. EventbookingHelperMail::sendDepositPaymentEmail
12. EventbookingHelperMail::sendNewEventNotificationEmail
13. EventbookingHelperMail::sendReminder
14. EventbookingHelperMail::sendDepositReminder
15. EventbookingHelperJquery::validateForm



To customize a method in one of these classes, please folow the steps below:

1. Create folder **override** under components/com_eventbooking/helper folder 
2. Create a php file (same name with the php file which contains the method you want to override, for example **helper.php**, **mail.php**, **jquery.php**

3. Add a blank class into that PHP file. The class name must follow this Rule: It has the word **Override** inserted after **EventbookingHelper** compare to the original class name and extends the original class. For example:

```php
/**
 * EventbookingHelperOverrideHelper class
 *
 * This class can be used to override some common methods used in EventbookingHellper class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Events Booking
 */
class EventbookingHelperOverrideHelper extends EventbookingHelper
{
}


/**
 * EventbookingHelperOverrideMail class
 *
 * This class can be used to override some common methods used in EventbookingHellperMail class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Events Booking
 */
class EventbookingHelperOverrideMail extends EventbookingHelperMail
{

}


/**
 * EventbookingHelperOverrideJquery class
 *
 * This class can be used to override some common methods used in EventbookingHelperOverrideJquery class. It is needed when you need to
 * override these methods without having to worry about losing the customization while updating to future releases of Events Booking
 */
class EventbookingHelperOverrideJquery extends EventbookingHelperJquery
{
}
```
4.Copy the original code of the method you want to override into the class you defined above and customize it to meet your need. Please note that these classes extends the original class, so you can call any (public/protected) methods in the parent class

You can see the skeleton of the override code for these methods here https://github.com/joomdonation/eventbooking-override-skeleton/tree/master/helper/override

## Override method in a controller class

If you need to override a method inside a controller, please follow the steps below:

1. Create folder **override** under components/com_eventbooking/controller folder (or under  administrator/components/com_eventbooking/controller if you want to override a backend controller)
2. Create a php file (same name with the php file which contains the method you want to override, for example **register.php**, **event.php**, **registrant.php**)
3. Add a blank class into that PHP file. The class name must follow this Rule: It has the word **Override** inserted after **EventbookingController** compare to the original class name and extends the original class. For example:

```php
/**
 * EventbookingControllerOverrideRegister class
 *
 * This class is used to show you how to override a controller class in Events Booking.
 */
class EventbookingControllerOverrideRegister extends EventbookingControllerRegister
{

}
```
4.Copy the original code of the method you want to override into the class you defined above and customize it to meet your need. Please note that these classes extends the original class, so you can call any (public/protected) methods in the parent class. See https://github.com/joomdonation/eventbooking-override-skeleton/blob/master/controller/override/register.php for sample of controller override

## Override method in a model class

If you need to override a method inside a model, please follow the steps below:

1. Create folder **override** under components/com_eventbooking/model folder (or under  administrator/components/com_eventbooking/model if you want to override a backend model)
2. Create a php file (same name with the php file which contains the method you want to override, for example **register.php**, **list.php**, **categories.php**)
3. Add a blank class into that PHP file. The class name must follow this Rule: It has the word **Override** inserted after **EventBookingModel** compare to the original class name and extends the original class. For example:

```php
/**
 * EventbookingModelOverrideRegister class
 *
 * This class is used to show you how to override a model class in Events Booking.
 */
class EventBookingModelOverrideRegister extends EventBookingModelRegister
{

}
```
4.Copy the original code of the method you want to override into the class you defined above and customize it to meet your need. Please note that these classes extends the original class, so you can call any (public/protected) methods in the parent class. See https://github.com/joomdonation/eventbooking-override-skeleton/blob/master/model/override/register.php for a sample of override model classs.

## Override method in a view class

If you need to override a method inside a view, please follow the steps below:

1. Create folder **override** under components/com_eventbooking/view folder (or under  administrator/components/com_eventbooking/view if you want to override a backend model)
2. Create a new folder - the name of this folder must be the same with name of the view you want to override, for example **register**, **registrants**, **search**...
3. Create a php file - same name with the php file which contains the method you want to override, usually html.php, put it into the above folder
4. Add a blank class into that PHP file. The class name must follow this Rule: It has the word **Override** inserted after EventbookingView compare to the original class name and extends the original class. For example:

```php
/**
 * Class EventbookingViewOverrideRegisterHtml
 *
 * This class is used to show you how to override a view class in Events Booking.
 */
class EventbookingViewOverrideRegisterHtml extends EventbookingViewRegisterHtml
{
}
```
5.Copy the original code of the method you want to override into the class you defined above and customize it to meet your need. Please note that these classes extends the original class, so you can call any (public/protected) methods in the parent class. See https://github.com/joomdonation/eventbooking-override-skeleton/blob/master/view/override/register/html.php for sample of override view class
