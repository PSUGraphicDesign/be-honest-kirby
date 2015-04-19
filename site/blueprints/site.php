<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
files: false
fields:
  section_main:
    label: Basic Info
    type: headline

  title:
    label: Title
    type: text
  contact:
    label: Primary Contact
    type: email
  department:
    label: Departmental Information
    type: textarea

  section_credits:
    label: Credits
    type: headline

  colophon:
    label: Colophon
    type: textarea
    help: Include some information about the process of building this site. Make sure to credit the designer and any other parties that were involved. This is not the place to add sponsors, though.
  copyright:
    label: Copyright Information
    type: textarea

  section_meta:
    label: Metadata
    type: headline
    help: Info for search engines and other creepy crawlies.

  description:
    label: Site Description
    type: textarea
    buttons: false
    help: The description that will be pulled in by search engines and other servies.
  keywords:
    label: Keywords
    type: tags
    help: Comma-separate a list of keywords to describe the site.
  analytics:
    label: Google Analytics Key
    type: text
    help: Add just the key provided by Google Analytics. Not required, but recommended!
