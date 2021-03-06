<?php

namespace Codegis\GoogleCalendar;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codegis\GoogleCalendar\GoogleCalendar
 */
class GoogleCalendarFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-google-calendar';
    }
}
