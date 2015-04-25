<?php if(!defined('KIRBY')) exit ?>

title: Event
pages:
  build:
    - title: Students
      uid: students
      template: student-list
    - title: Speakers
      uid: speakers
      template: speaker-list

files: true
fields:
  title:
    label: Title
    type: text
  date:
    label: Date
    type: Date
    width: 1/2
  time:
    label: Time
    type: time
    interval: 30
    width: 1/2

  intro:
    label: Introduction
    type: textarea

  location_host:
    label: Event Host
    type: text
    width: 1/2
    icon: building-o
    help: Who is hosting this year’s event?

  location_address:
    label: Address
    type: textarea
    buttons: false
    width: 1/2
    icon: map-marker
    help: Where is it, exactly?

  sponsors:
    label: Sponsors
    type: structure
    entry: >
      <code>{{logo}}</code>
      <div><strong><a href="{{url}}">{{name}}</a></strong></div>
      <p>{{notes}}</p>
    fields:
      name:
        label: Sponsor Name
        type: text
        required: true
      logo:
        label: Logo
        type: select
        options: images
        required: true
      url:
        label: URL
        type: url
      notes:
        label: Notes
        type: textarea
        icon: info
