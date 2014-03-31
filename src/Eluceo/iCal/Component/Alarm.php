<?php

/*
 * This file is part of the zargener/iCal package.
 *
 * (c) Danil Orlov <zargener@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eluceo\iCal\Component;

use Eluceo\iCal\Component;
use Eluceo\iCal\PropertyBag;
use Eluceo\iCal\Property;
use \InvalidArgumentException;

/**
 * Implementation of the VALARM component
 */
class Alarm extends Component
{
    protected $action;

    protected $description;

    protected $attendee;

    protected $trigger;


    public function getType() {
        return "VALARM";
    }
}