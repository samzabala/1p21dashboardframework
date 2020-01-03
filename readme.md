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

| [New Templates](https://github.com/samzabala/1p21dashboardframework)	 | Description | [Current Dev Templates](https://github.com/mjp92067/seo_scoreboard) | New Template Live Link | Local Link(assuming localhost:3000) |
| -- | -- | -- | -- | -- |
| error	 | Internal errors (eg. 404, 503.. ) | *No Match Found* | http://frameworkdashboarddebug.1p21.io/?template=error |  |
| home-production | Overall stats: tasks/production | *No Match Found* | http://frameworkdashboarddebug.1p21.io/?env=production |  |
| home-scoreboard | Overall stats: seo scoreboard | dashboard | http://frameworkdashboarddebug.1p21.io/?env=scoreboard |  |
| last-activity | yes | last_user_activity#show,<br>user_last_activity | http://frameworkdashboarddebug.1p21.io/?template=last-activity |  |
| login | yes | login | http://frameworkdashboarddebug.1p21.io/?template=login |  |
| profile-production | profile for production ppl | *No Match Found* | http://frameworkdashboarddebug.1p21.io/?template=profile&env=production |  |
| profile-scoreboard | profile for seos | *No Match Found* | http://frameworkdashboarddebug.1p21.io/?template=profile&env=scoreboard |  |
| profiles | list of profiles. subgrouped as well | *No Match Found* | http://frameworkdashboarddebug.1p21.io/?template=profiles<br> |  |
| project-production | view of site project for production | *No Match Found* |  |  |
| project-scoreboard | for SEO | *No Match Found* |  |  |
| projects-production | list view of projects for production | *No Match Found* |  |  |
| projects-scoreboard | list view of projects for scoreboard | *No Match Found* |  |  |


## Current Templates with no existing equivalent
* analytics
* nw_top_tens

## New Templates that are can be disregarded for dashy boi 

* debug.php - used to debug the framework build.


## Strings to find dynamic shit

There are html comments or string instances by markup with dynamic attributes and or content. Initiate a find (but not a replace because wew) on these instances to setup for magic

*	`REPLACE`
	Meant to be replaced with dynamic content or actual data. if it's a span with this class, replace the entire span and its inner

*	`DYNAMIC`
	Contains information for something that needs to be dynamicall modified but not necessarily replaced

*	`LOOP`

	Boi gon loop

*	`PLACEHOLDER` or `placeholder`

	Meant to go away or even repurposed when dynamicness is ready

*	`/placeholder/`

	uri for assets meant to go away when dynamic boi is ready

	NOTE: graphs will have tooltip integrations through framework setup using [tooltip framework integration](/assets/plugins/framework/docs/sections/components/tooltip.md#tooltip) 

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