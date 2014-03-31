<?php

// Alarm demo

// use composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// set default timezone (PHP 5.4)
date_default_timezone_set('Europe/Berlin');

// 1. Create new calendar
$vCalendar = new \Eluceo\iCal\Component\Calendar('www.example.com');


// add alarm directly to calendar, no binding to event
// it is just popup alarm
$alarm = new \Eluceo\iCal\Component\Alarm();

$alarm->setAction("DISPLAY");
$alarm->setDescription("It's demo time");
$alarm->setTrigger('-P0DT0H30M0S', true);

$vCalendar->addAlarm($alarm);


// create event 
$vEvent = new \Eluceo\iCal\Component\Event();
$vEvent->setDtStart(new \DateTime('2012-12-24'));
$vEvent->setDtEnd(new \DateTime('2012-12-24'));
$vEvent->setNoTime(true);
$vEvent->setSummary('Christmas');

// create email alarm for event
$alarm2 = new \Eluceo\iCal\Component\Alarm();
$alarm2->setAction("EMAIL");
$alarm2->setSummary("Alarm notification");
$alarm2->setDescription("This is an event reminder");
$alarm2->setAttendee("mailto:example@mail.com");
$alarm2->setTrigger('-P0DT0H30M0S', true);

// add alarm to event
$vEvent->addAlarm($alarm2);

// add event to calendar
$vCalendar->addEvent($vEvent);

// Output
echo $vCalendar->render();
