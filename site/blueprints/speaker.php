<?php if(!defined('KIRBY')) exit ?>

title: Speaker
pages:
  hide: true
files:
  sortable: true
fields:
  title:
    label: Name
    type: text
    width: 1/2
  professional:
    label: Professional Title
    type: text
    width: 1/2
    icon: briefcase
  profile_image:
    label: Profile Photo
    type: select
    options: images
    help: Pick the file from this speaker’s images. Profile images should be uploaded square, no larger than 600px.
  bio:
    label: Biographical Info
    type: textarea
  website:
    label: Website
    type: url
