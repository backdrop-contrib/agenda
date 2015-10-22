# Agenda

The Agenda module allows you to display a list of upcoming events from 
Google Calendar as a block on your website.

The events are automatically downloaded and cached from the Calendar IDs
specified in the Agenda administration page. Unlimited calendars can be 
added, and the colours for each calendar can be specified in the CSS file.

The output is fully themeable, and uses jQuery for dynamic effects such 
as rounded corners, and click-toggling extra information.

This is a port from the Drupal module of the same name. 

## Status

This is an initial port of the module ready for testing but not for use.

## Requirements

This module depends on the Google api php client library which you
need to download and install in your libraries folder.


## Installation

- Install this module using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/modules.
  
- Also install the Libraries module for Backdrop and add the Google
  API client library to your sites libraries folder in a 
  subdirectory 'google-api-php-client'.
  
- To install the Google API Client Library for PHP:
   + Navigate to https://github.com/google/google-api-php-client
   + Download the 1.1.2 release at
     https://github.com/google/google-api-php-client/releases/tag/1.1.2.
   + Rename the downloaded directory "google-api-php-client" and move it
     to your libraries directory - preferably /libraries.
   + Check admin/reports/status to ensure it is installed properly.

- To obtain a Google API Developer ID key:
   + Navigate to https://console.developers.google.com/start
   + Select 'Use Google APIs' and create a project.
   + Navigate to "APIs" in the left menu of the new project and turn on 
     the Calendar API (agree to the Terms of Service).
   + Navigate to "Credentials" in the left menu under "APIs & auth".
   + Create a new key (server key) if you don't already have one. You may
     have to (or want to) specify particular IP addresses to accept 
     requests from.
   + Once it's created, it will display on that page. Copy the "API KEY" 
     and save it for the next step (see CONFIGURATION below).
     

## Configuration

 - Navigate to module settings at admin/config/services/agenda
 - Click the "Settings" tab and add your Google API Key (see "Obtain a
   Google API Developer ID key" under INSTALLATION in this file). 
   The module will not work until you have done so.
 - Navigate back to the module settings and configure each block 
   to be used.


## Help & Documentation

See readme.txt for more information about installation and use.


## License

This project is GPL v2 software. See the LICENSE.txt file in this
directory for complete text.
    
        
## Current porting to Backdrop

Graham Oliver (github.com/Graham-72/)

## Credits

### Maintainer for Drupal:

- Gus Childs (guschilds)

### Acknowledgement

This port to Backdrop would not, of course, be possible without all
the work done by the developers and maintainers of the Drupal module.
