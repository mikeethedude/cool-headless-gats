# WordPress + Gatsby
---------------------------------------

This repo is for jumping into a headless wordpress site using GatsbyJS.

## Pre-Requisites
Gatsby installed locally

Lando installed locally

## Setup Steps

We'll have to setup WordPress first in order for this to work without a lot of tweaking. I have included a WordPress install.

**WordPress**
- `cd wordpress`
- `lando start`
- Setup wordpress at `https://cool-wordpress-app.lndo.site/`

**Gatsby**
- `cd gatsby/wordpress-gatsby`
- `npm install`
- `gatsby develop`

###Develop!
That should get you going! Check out GraphiQL at `https://localhost:8000/___graphql`