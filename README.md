# WashingtonIslandFerry
A custom WordPress website for Washington Island Ferry

# :metal: Getting started

At the time of development the WordPress Gutenberg editor was fairly new and there were a lot of unknowns. Because of this I opted to build the site without using any of the default page editors.

# :open_file_folder: Basic File Structure

## :page_with_curl: Pages

Each individual page is titled page - page title ex. about = page-about.php

## inc

The inc folder includes smaller blocks that are either reused on multiple pages or were just added here to break the page up and make it easier to organize content.

## :dancer: Styles

Do not make style changes in the css directory. The styles for the website are all in the \_scss directory. Each individual page has had its own style sheet setup for styles unique to that page, and then there are sheets setup for general styling like the footer or typography. The \_variables.scss sheet has site wide variables that can be used in your scss sheets.

## \_scss folder

### Variables

Variables folder contains our sites variables, mostly color variables for styles throughout the sites

### Breakpoints

This file contains my breakpoints for mobile styling

### Layout

Contains all the styles used for layouts, columns, images, text blocks etc...

### Header

Styling for the sites header/navigation

### Footer

Styling for the sites Footer

### Typography

Typography settings for headers paragraphs etc ...

### Buttons

Styling for our sites buttons and links

### General

Holds any styles that are general or consistent with all pages throughout the site

### Icons

Styling for any icons the site might use

### Individual Page Styles

Each individual pages custom styles are held in the scss file with the corresponding page name ex. home = home.scss
