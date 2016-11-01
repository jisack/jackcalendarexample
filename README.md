# jackcalendarexample
calendar packages for example

##Requirements
* [Laravel 5.**](https://laravel.com/docs/5.2)

##Include
* [Admin LTE](https://almsaeedstudio.com/preview)
* [Full Calendar](http://fullcalendar.io/)
* [Jquery](http://jquery.com/)
* [Bootstrap](http://getbootstrap.com/)

##Installation
  in composer.json add
  ```json
  "Jacklaravel\\Calendar\\" : "packages/jacklaravel/calendar/src/"
  ``` 
  to "psr-4"
  
  in config/app add 
   ```php
        Jacklaravel\Calendar\CalendarServiceProvider::class,
   ```
   to array provider
  
  and then run 
  ```bash
      $ composer require jacklaravel/calendar
  ```
  
  run
  
  ```bash
      $ php artisan jack:calendar
  ```
  
  so now you can run a calendar package thought
  
  <b>www.yourdomain.com\calendar</b>


