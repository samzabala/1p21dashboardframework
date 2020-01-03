hello, there's two things here so. bear with documentation for now, 
will separate dashboard and framework one the bois are readeh



# Dashboard Documentation

## Dependencies
### Javascript
*	[jQuery](https://jquery.com/)
*	[Trumbowyg](https://alex-d.github.io/Trumbowyg/)
	*	Trumbowyg Upload Plugin (1p21 Dashboard Custom)
*	[1p21 Dashboard Framework](https://github.com/samzabala)



### CSS / SASS
*	[Shithole](https://github.com/samzabala)
*	[1p21 Dashboard Framework](https://github.com/samzabala)


#	NOTES

*	Highcharts with tooltips

	To maintain design, we may have to add `events.load` properties to be able to append tooltip attributes

	Documentation for tooltip: [here](assets/plugins/framework/docs/sections/components/tooltip.md)

	`events.load` property solution: [here](https://stackoverflow.com/questions/25493472/rendering-html-data-attributes-on-highcharts-series)

*	Overrides to framework or custom styles are prepended with #dashboard or .dashboard

*	dynamic content will be classed with corresponding prefix (eg. .profile-name contains the profile's name data ) but not necessarily styled yet

# Structure 

Files to translate
* assets - front end shit boi
	* images - duh
	* plugins - third party bitches
	* scripts - duh
	* styles - duh
* placeholder - they can alll go awei
* template - markup for each page. this is the holy grail of bitches
* components - shared or repeating markup. second holy grail
* includes - template parts
* header.php - duh
* footer.php - duh

Files you dont need because it's just to setup the templates for showing off or internal bitches.. or.. whatever pls ignore them they're not needed on the actual dashboardt 
* config.codekit
* config.php
* content.php
* helpers.php
* index.php

# Templates

## Equivalent Templates

Found in templates directory

| [New Templates](https://github.com/samzabala/1p21dashboardframework) | Description | [Current Dev Templates](https://github.com/mjp92067/seo_scoreboard) | New Template Live Link | Local Link(assuming localhost:3000) |
| -- | -- | -- | -- | -- |
| error | Internal errors (eg. 404, 503.. )| TBD | http://frameworkdashboarddebug.1p21.io/?template=error |  |
| home-production | Overall stats: tasks/production | TBD | http://frameworkdashboarddebug.1p21.io/?env=production |  |
| home-scoreboard | Overall stats: seo scoreboard | dashboard | http://frameworkdashboarddebug.1p21.io/?env=scoreboard |  |
| last-activity | yes | last_user_activity#show,<br>user_last_activity |  |  |
| login | | TBD |  |  |
| profile-production | profile for production ppl | TBD |  |  |
| profile-scoreboard | profile for seos | TBD | http://frameworkdashboarddebug.1p21.io/?template=profile&env=scoreboard |  |
| home-production | | TBD |  |  |
| home-production | | TBD |  |  |
| home-production | | TBD |  |  |
| home-production | | TBD |  |  |
| home-production | | TBD |  |  |


## Current Templates with no existing equivalent
* analytics
* nw_top_tens

## New Templates that are can be disregarded for dashy boi 

* debug.php - used to debug the framework build.


## There are html comments or string instances by markup with dynamic attributs and or content

*	`REPLACE`
	Meant to be replaced with dynamic content or actual data

*	`DYNAMIC`
	Contains information for something that needs to be dynamicall modified but not necessarily replaced

*	`LOOP`

	Boi gon loop

*	`PLACEHOLDER`

	Meant to go away when dynamicness is ready

*	`/placeholder/`

	uri for assets meant to go away when dynamic boi is ready

	NOTE: graphs will have tooltip integrations through framework setup using `frameWork.createTooltip()` 

*	`NOTE`

	Other elements that rely on server side based... things

*	@IF @ELSE

	Conditional markup

*	Functions

	*	app_create_link()

		Also counts as REPLACE, this was setup solely to link together the user flow of templates. this creates internal links

	*	app_get_component()

		Calls on template markups of functionality based template markups. replace or repurpose if needed.

# Framework Documentation
[Here](assets/plugins/framework/readme.md)