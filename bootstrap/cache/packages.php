<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'spatie/laravel-google-calendar' => 
  array (
    'providers' => 
    array (
      0 => 'Spatie\\GoogleCalendar\\GoogleCalendarServiceProvider',
    ),
    'aliases' => 
    array (
      'GoogleCalendar' => 'Spatie\\GoogleCalendar\\GoogleCalendarFacade',
    ),
  ),
);