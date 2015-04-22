<?php if(!defined('KIRBY')) exit ?>

title: Student
pages:
  hide: true
files:
  sortable: true
fields:
  title:
    label: Name
    type: text
    width: 1/2
  year:
    label: Year
    type: select
    options:
      Freshman: Freshman
      Sophomore: Sophomore
      Junior: Junior
      Senior: Senior
    width: 1/2
    icon: graduation-cap
  website:
    label: Website
    type: url
