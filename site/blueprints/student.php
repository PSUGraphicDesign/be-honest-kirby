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
  profile_image:
    label: Profile Photo
    type: select
    options: images
    help: Pick the file from this student’s images. Profile images should be uploaded square, no larger than 600px.
  bio:
    label: Biographical Info
    type: textarea
  website:
    label: Website
    type: url
