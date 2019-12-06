hello, there's two things here so. bear with documentation for now, 
will separate dashboard and framework one the bois are readeh



# Dashboard Documentation

## Dependencies
### Javascript
*	Vue
*	[jQuery (will be deprecated once vanilla trumbowyg is available)](https://jquery.com/)
*	[Trumbowyg](https://alex-d.github.io/Trumbowyg/)
	*	Trumbowyg Upload Plugin (1p21 Dashboard Custom)
*	[1p21 Dashboard Framework](https://github.com/samzabala)



### CSS / SASS
*	[Trumbowyg](https://alex-d.github.io/Trumbowyg/)
*	[Shithole (I'll think of a better name eventually)](https://github.com/samzabala)
*	[1p21 Dashboard Framework](https://github.com/samzabala)


#	NOTES
*	Overrides to framework or custom styles are prepended with #dashboard or .dashboard
*	dynamic content will be classed with corresponding prefix (eg. .profile-name contains the profile's name data ) but not styled yet


## There are html comments or string instances by markup with dynamic attributs and or content

*	`REPLACE`
	Meant to be replaced with dynamic content or actual data

*	`DYNAMIC`
	Contains information for something that needs to be dynamicall modified but not necessarily replaced

*	`LOOP`

	Boi gon loop

*	`PLACEHOLDER`

	Meant to go away when dynamicness is ready

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