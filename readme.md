hello, there's two things here so. bear with documentation for now, 
will separate dashboard and framework one the bois are readeh



# Documentation

## Dependencies
### Javascript
*	[jQuery](https://jquery.com/)
*	~[Trumbowyg](https://alex-d.github.io/Trumbowyg/) (will be replaced with TinyMCE)~
	*	~Trumbowyg Upload Plugin (1p21 Dashboard Custom) (will be deprecated when replaced with TinyMCE)~
*	[1p21 Dashboard Framework](https://github.com/samzabala/framework/)



### CSS / SASS
*	[Shithole](https://github.com/samzabala)
*	[1p21 Dashboard Framework](https://github.com/samzabala/framework/)


### ***NEW***

[Bubble chart demo code](template/chart.php)
[Bubble Live](http://frameworkdashboarddebug.1p21.io/?template=chart)


# Worfklow sidebar modules notes:
NOTE: all modules with forms/accordions elements with id or name attributes will be reused by the incoming edit project board as well


@NOTE on each module-side-*-edit.php components, we need to have prefixes prepended to input field names/id attributes, etc to avoid conflicting instances of user filter components

(ie when the project edit board and task edit board markups are both present in one page. This is guaranteed to occur on some or all of the incoming project-view templates being built by nadia)

Keep an eye out for these strings to make sense of why the fuc sam did??. Feel free to change the structure of the naming system as well to whatever is comfortable on your end, but keep in mind prefixes will be primarily important to avoid ui/ front end conflicts if there are ids/names that fall out of this standardized syntax, feel free to fix too:


REPLACEwithPostType

	definition:
		=> either `project` ot `task`, depending which editing board the module is placed.
		so if it's in the task-id-edit board, the a field REPLACEMODE-REPLACEwithPostType-team-lead-to-add-id the field's name is `edit-task-lead-sales-rep-id`

	
	logic:
		if board's for viewing/editing/adding a task
			REPLACEwithPostType = `task`
		
			if board's for editing a project (thank god only editing)
			REPLACEwithPostType = `project`
	

	example front end render:

			<label for="edit-task-title" class="input-label sr-only">Title</label>
			<input type="text" placeholder="Enter title" id="edit-task-title" name="edit-task-title" class=" input input-single-line input-large">

		vs

			<label for="edit-project-title" class="input-label sr-only">Title</label>
			<input type="text" placeholder="Enter title" id="edit-project-title" name="edit-project-title" class=" input input-single-line input-large">



REPLACEMODE 

	definition:
		depending on which board editor (new task vs edit task) contains the form

		both Add new task or edit new task boards will be present together on pages. This is to ensure eding the task from the view board works.  REPLACEMODE prefix is to resolve any front end conflicts, like input field and label relations or modals and accordions

	logic:
		if board's id is `task-69-edit`
			REPLACEMODE = `edit`

		if board's id is `task-69-new`
			REPLACEMODE = `new`


	example front end render:

			<label for="edit-task-title" class="input-label sr-only">Title</label>
			<input type="text" placeholder="Enter title" id="edit-task-title" name="edit-task-title" class=" input input-single-line input-large">

		vs

			<label for="new-task-title" class="input-label sr-only">Title</label>
			<input type="text" placeholder="Enter title" id="new-task-title" name="new-task-title" class=" input input-single-line input-large">



filter-FIELDNAME
	definition:
		prefix for input fields that will only extend a valid input fields' capabilities (ie, search for a user name to append to team or search for valid tags to append to labels and tags)


	example front end render:'
			field that will contain tags to add to actuial field
				<input id="filter-edit-task-tags" name="filter-edit-task-tags" type="text" class="input input-block input-large input-single-line" placeholder="Search for tag" />
			field that will actually submit to the database
				<input id="edit-task-tags" name="edit-task-tags" type="hidden" />

REPLACEwithCorrespondingInputFieldName
	definition:
		coimplete name of the filter-* field is connected tofield that will actually submit to the database


	example front end render:'

		code on html/php demo version
			field that will contain tags to add to actuial field
				<input id="filter-edit-task-tags" name="filter-edit-task-tags" type="text" class="input input-block input-large input-single-line" placeholder="Search for tag" />
			field that will actually submit to the database
				<input id="edit-task-tags" name="edit-task-tags" type="hidden" />

		vs

			field that will contain tags to add to actuial field
				<input id="filter-REPLACEwithCorrespondingInputFieldName" name="filter-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-large input-single-line" placeholder="Search for tag" />
			field that will actually submit to the database
				<input id="REPLACEwithCorrespondingInputFieldName" name="REPLACEwithCorrespondingInputFieldName" type="hidden" />


# For Cristian

## As of 07-21-2020

instances of data atrtributes `data-modal-max-width` and `data-board-max-width` will now be  `data-modal-width` and `data-board-width`


## As of 07-13-2020

Workflow board components will now have their toggles and board bllock elements separated to allow more modularity
eg:

`board-track-time` => `board-track-time` and `board-track-time-toggle`

`board-track-time` will contain only the board element while `board-track-time-toggle` will contain the toggle we see on `my-dash`


These are classes that need to be found and replaced for framework 2.0.0
* `btn-symbol-round` => `btn-round`
* `btn-group-block` => `btn-block`


# Structure 

I reorganized im sorry :...DDDDDD

Files to translate
* assets - front end shit boi
	* images - duh
	* plugins - third party bitches eg framework, trumbowyg, etc
	* scripts - duh
	* styles - duh
* placeholder - they can alll go awei
* app-* - templates built for apps on the framework
  * includes - contains navigation and header contents for specific app
* global - templates used by all apps/placehodr
* components - shared or repeating markup. second holy grail
  For visual reference, see YOURLOCALENV.domain?template=debug-components
* includes - template parts
* header.php - duh
* footer.php - duh

Files you dont need because it's just to setup the templates for showing off or internal bitches.. or.. whatever pls ignore them they're not needed on the actual dashboardt 
* config.codekit
* config.php
* content.php
* helpers.php
* index.php


# Timetracker Notes

Leave add entry modal anmd date dropdowns as is for now. still awaiting design updates for those

Links are setup for templates that do not exist yet



## Matching Templates

| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[New&nbsp;Templates](https://github.com/samzabala/1p21dashboardframework/app-timetracker)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |  New Template Live Demo | Current Template Live Link |
| -- | -- | -- | -- |
| error	 | Internal errors (eg. 404, 503.. ).<br><br>for both envs: production and scoreboard | http://frameworkdashboarddebug.1p21.io/?template=error |
| home/my-time | Landing page | http://frameworkdashboarddebug.1p21.io/?template=home&env=&app=timetracker | https://time-tracker.1p21.io/ |
| team | team data  | http://frameworkdashboarddebug.1p21.io/?template=team&env=&app=timetracker | https://time-tracker.1p21.io/views/team<br><br>https://time-tracker.1p21.io/views/week |
| project | view for a single project/client? | not yet |
| profile | view for a single user | not yet |
| tasks | ?? | not yet |
| analytics | ?? | not yet |







Calendar ui dropdown markup

```html
<!-- Container/ ancestor with position to validly position dropdown-->
<div class="position-relative">
	<!-- toggle for dropdown -->
	<a href="#dropcal" data-toggle="dropdown">Toggle ya boi</a>

	<!-- dropdown -->
	<div id="dropcal" class="dropdown" data-dropdown-width="100%">
		<div class="flex-grid flex-wrap flex-grid-no-gutter-y"">

			<div class="flex-col-md-4 flex-col-sm-6">

				<div class=" input-wrapper input-wrapper-vertical input-wrapper-responsive input-wrapper-block">
					<label class="input-label">From</label>
					<input type="date" class="input input-calendar" data-calendar-text-input="true" />
				</div>
			</div>

			
			<div class="flex-col-md-4 flex-col-sm-6">

				<div class=" input-wrapper input-wrapper-vertical input-wrapper-responsive input-wrapper-block">
					<label class="input-label">To</label>
					<input type="date" class="input input-calendar" data-calendar-text-input="true" />
				</div>
			</div>

			
			<div class="flex-col-md-4 flex-col-sm-12">
				<div class="input-label">Or by Month</div>
				<ul class="no-padding-left">

					<li><a href="#">Jan 2018</a></li>
					<li><a href="#">Feb 2018</a></li>
					<li><a href="#">March 2018</a></li>
					<li><a href="#">April 2018</a></li>
					<li><hr class="dropdown-separator"></li>
					<li><a href="#">Today</a></li>
					<li><a href="#">Last 3 days</a></li>
					<li><a href="#">Last week</a></li>
					<li><a href="#">Last Month</a></li>
				</ul>

			</div>
		</div>
	</div>
</div>
```

# Assets Flowchart
[Flowchart](assets-flow-chart.png)

--

#	Dashboard NOTES

*	Highcharts with tooltips

	To maintain design, we may have to add `events.load` properties to be able to append tooltip attributes

	Documentation for tooltip: [here](https://github.com/samzabala/framework/blob/master/docs/sections/components/tooltip.md#tooltip)

	`events.load` property solution: [here](https://stackoverflow.com/questions/25493472/rendering-html-data-attributes-on-highcharts-series)

*	Overrides to framework or custom styles are prepended with `#dashboard` or `.dashboard`. `.filter-` are also custom shits and not the framework's bbies

*	dynamic content will be classed with corresponding prefix (eg. .profile-name contains the profile's name data ) but not necessarily styled yet


## Templates

Found in templates directory

| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[New&nbsp;Templates](https://github.com/samzabala/1p21dashboardframework)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | [Matching&nbsp;Current&nbsp;Templates](https://github.com/mjp92067/seo_scoreboard) | New Template Live Link | Current Template Local Link Reference(assuming localhost:3000) |
| -- | -- | -- | -- | -- |
| error	 | Internal errors (eg. 404, 503.. ).<br><br>for both envs: production and scoreboard | *No match* | http://frameworkdashboarddebug.1p21.io/?template=error | n/a |
| home-production | Overall stats: tasks/production | *No match* | http://frameworkdashboarddebug.1p21.io/?env=production | n/a |
| home-scoreboard | Overall stats: seo scoreboard | dashboard | http://frameworkdashboarddebug.1p21.io/?env=scoreboard | http://localhost:3000/dashboard?date=2020-01 |
| last-activity | yes | user_last_activity | http://frameworkdashboarddebug.1p21.io/?template=last-activity | http://localhost:3000/seo_team/Natalie/last_activity |
| login | yes.<br><br>for both envs | login | http://frameworkdashboarddebug.1p21.io/?template=login | http://localhost:3000/login |
| profile-production | profile for production ppl | *No match* | http://frameworkdashboarddebug.1p21.io/?template=profile&env=production | n/a |
| profile-scoreboard | profile for seos | user | http://frameworkdashboarddebug.1p21.io/?template=profile&env=scoreboard | http://localhost:3000/seo_team/Alana?date=2020-01 |
| profiles | list of profiles. subgrouped as well.<br><br>for both envs. | designers,<br>developers | http://frameworkdashboarddebug.1p21.io/?template=profiles | http://localhost:3000/designers?date=ytd |
| project-production | view of site project/account for production | *No match* | http://frameworkdashboarddebug.1p21.io/?template=project&env=production | n/a |
| project-scoreboard | view of site project/account for SEO | user_websites | http://frameworkdashboarddebug.1p21.io/?env=scoreboard&template=project | n/a |
| projects-production | all list view of site project/account for production. e.g. search, view all, etc | *No match* | http://frameworkdashboarddebug.1p21.io/?template=projects&env=production |  |
| projects-scoreboard | all list view of site project/account for production. e.g. search, view all, etc | todos,<br>user_todos,<br>events,<br>user_events,<br>new_content,<br>user_new_content,<br>social_media,<br>user_social_media | http://frameworkdashboarddebug.1p21.io/?env=scoreboard&template=projects | http://localhost:3000/seo_team/Alana/on_page_updates?date=ytd |
| unique-links | yes | links,<br>user_links | http://frameworkdashboarddebug.1p21.io/?template=unique-links&env=scoreboard | http://localhost:3000/seo_team/Alana/links?date=ytd |


## Current Templates with no existing equivalent
* analytics
* nw_top_tens

## New Templates that are can be disregarded for dashy boi 

* debug.php - used to debug the framework build.
* debug-components.php - reference for componentsd available so we can reuse or improve what already exists and code less

## Found Features in design that do not exist on current dashboard yet 

Will be updated when items are found

| [New&nbsp;Templates](https://github.com/samzabala/1p21dashboardframework) | Feature not ready |
| -- | -- |
| error | none |
| home-production |  |
| home-scoreboard |  |
| last-activity |  |
| login |  |
| profile-production | online status on profile image<br>Availability status<br>Add new task |
| profile-scoreboard |  |
| profiles |  |
| project-production |  |
| project-scoreboard |  |
| projects-production |  |
| projects-scoreboard |  |
| unique-links |  |


# Strings to find dynamic shit

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

	NOTE: graphs will have tooltip integrations through framework setup using [tooltip framework integration](https://github.com/samzabala/framework/blob/master/docs/sections/components/tooltip.md#tooltip) 

*	`NOTE`

	Other elements that rely on server side based... things

*	`@IF @ELSE`

	Conditional markup

*	Functions

	*	`app_create_link()`

		Also counts as REPLACE, this was setup solely to link together the user flow of templates. this creates internal links

	*	`app_get_component()`

		Calls on template markups of functionality based template markups. replace or repurpose if needed.

# Framework Documentation
[Here](https://github.com/samzabala/framework/blob/master/readme.md)



#2.0.0 Rebuilds and additions (for workflow suport)

framework 2.0.0
---------------------------
new components / helpers
ang mga may js baka matagasalan ka kasi tanga ka rin minsan

js/ js + html

js + css (1 week or more)
* .board - modal... but from the side. see debug template for basuc demo

css
* PRIORITY
    * OK zone
        * zone-large
        * zone-small // transfer default boi here
    * modal close button
        * add attribute to override classes + change to button
    * OK border radius rounding classes  - *
        * btn-round
        * input round
        * btn-group-round
        * btn-group-round
    * OK btn palettes not fully customizeable (eg btn-theme-outline, btn-theme-polar- outline etc) - *
        * btn-COLORTAG-outline
    * input-toggle - *
        * requires 3 block elements
        * input-wrapper.input-checkbox-wrapper
            * input.input-checkbox
            * input-label.input-label-checkbox
    * OK Panel - * reminders USE .alert instead
    * summary - * donloadable assets
        * my dumbass didnt name dem thumbnails as avatar instead so here we are
        * possible files
            * default - download button na lang
            * image
            * word
            * excel
            * text
            * pdf
            * powerpoint
* 1 day or less 
    * progress bar - view task
        * sizing
            * progress-bar-small *
            * progress-bar-large
        * change default styles ???
    * symbol-download - * task pages
        *  - use polygon
    * highlight - * task pages
        * tagged names at comments
    * OK modal
        * adjust paddings for non mobile breakpoint and shit


redesign/ rebuild 
* may take more than 1 day
* 1 day or less 
    * tags color - edit task
        * bg changes + dynamic variable setup



Can't do due to layout/ usability issues
* tables in modules w/o x-padding
    * - layout and scroll issues to tables
* arrow toggle flushed on right side with title on left while having module functions in between
*  Thumbnail possobility 4 files


