



# Framework Documentation

## Installation
include the following files:

css/sass
*	[framework scss files](scss/framework/)

js files (in order)
*	jQuery (for trumbowyg support. sad. This will be expendable soon)
*	[Trumbowyg](js/trumbpowyg.js)
*	[framework js file](js/framework.js) 
	*	Note: This script uses jQuery only for trumbowyg, the reset are vanilla. will be updated once vanilla trumbowyg version is released.
	*	If full on jQuery dependency is preferred, [use this boi](js/framework.plugged.js)

and done


# TOC
*	Setup
	*	[QuickStart](/docs/sections/quickstart.md)
	*	[Customize](/docs/sections/customize.md)
*	Layout
	*	[Flex Grid](/docs/sections/flexgrid.md)
	*	[Module](/docs/sections/module.md)
*	Scaffolding
	*	[Tables](/docs/sections/table.md)
	*	[Typography](/docs/sections/typography.md)
	*	[Images](/docs/sections/images.md)
	*	[Helpers](/docs/sections/helpers.md)
*	Components (o lawd)
	*	[Tables](/docs/sections/badge.md)
	*	[Buttons](/docs/sections/button.md)
	*	[Form and input fields](/docs/sections/form.md)
	*	[Legends](/docs/sections/legend.md)
	*	[List group](/docs/sections/list-group.md)
	*	[Modal](/docs/sections/modal.md)
	*	[Nav](/docs/sections/nav.md)
	*	[Pagination](/docs/sections/pagination.md)
	*	[Dropdown](/docs/sections/dropdown.md)
	*	[Tooltip](/docs/sections/tooltip.md)
	*	[Progress](/docs/sections/progress.md)
	*	[Symbols](/docs/sections/symbol.md)
	*	[Tags](/docs/sections/tag.md)
	*	[Thumbnails](/docs/sections/thumbnail.md)
	*	[Accordions](/docs/sections/accordion.md)
	*	[Trumbowyg](/docs/sections/trumbowyg.md)
*	Other Obscure things
	*	[Script](/docs/sections/script.md)


## Setting up custom variables
- Set up sass file
- Framework sass variables can be customized by declaring custom variables fist before integrating the framework

Example:
```
/*! 
Custom variables
****************************************************************************/

$brand-font-primary: 'Poppins','Helvetica Neue',Helvetica,Arial,sans-serif !default;
$brand-font-accent: $brand-font-primary !default;
$brand-font-monospace: 'Menlo', 'Monaco', 'Consolas', "Courier New", monospace;
$body-font-weight: 500;
$body-font-weight-bold:900;

/*! 
framework sass
****************************************************************************/
	@import 'framework/_framework';


// any custom css after

```

## Setting up for custom scripts
Wrap your script around with this

```
window.jQuery && jQuery.noConflict();
(function(window){
	


}(Vue,window));

```

Refer to [The var file](src) to change anything

## Global keywords / helprs / shet

Here are global things... this framework uses

### Breakpoints

Breakpoints are where media queries separate.

These values can be customized by declaring framework vars.

`xs`

*	framework var: `$br-xs`
*	Larger Mobile Devices (767px by default)

`sm`

*	framework var: `$br-sm`
*	Tablet (1279px  by default)

`md`

*	framework var: `$br-md`
*	Laptop (1799px by default)

`lg`

*	Mobile (+1 of md breakpoint value)
*	For desktop elements. Since it's the largest breakpoint, it does not have a max value, instead it's minimum is based on md breakpoints value

**Special breakpoints**

`xxs`

*	framework var: `$br-xxs`
*	True Mobile (0px - 400px by default)
*	UI Design may have elements designed too large for many mobile devices. use this to fix or tweak them. This breakpoint is for adding custom css for the framework and is not natively by the core framework's styles although used at some places by js bois.


#### Internal Sass Functions (All from shithole)

NOTE:Since the shithole library is built mobile first, Declared framework sass variable values are set as the maximum value of these breakpoints, but using their tags with shithole functionalities will be interpretted as min values by the shithole core.

If you use shithole mixins or functions and want to use these max values append `-max` to the tags
```
@include breakpoint(sm-max) {
	//styles for tablet and below heeere
}
```

##### breakpoint($tag)

create media queries

###### Parameters
*	@param $br: () !default | (list / string) | breakpoint duh.  accepts string of condition or breakpoint tag
*	@param $media: '' !default | (list / string) | the mediatype 
*	@param $use-only: false !default | (boolean) | add `only` to the query
*	@param $operator: and !default | (string) | operator to use between list $br
*	@content: styles for the breakpoint
*	@return: declared @content wrapped in breakpoint

Examples:

```
@include breakpoint(lg) {
	//styles for desktop and above
}
```


```
@include breakpoint(md,md-max) {
	//styles for desktop and above
}
```



##### br($tag)
shorter way of includeing `breakpoint()`

##### media($mediaquerystring)
Advanced cousin of `breakpoint`. Accepts other values aside from the breakpoints but also translates instances of breakpoint tags with it

Example:

```
@include media('md and md-max, max-width: 420px') {
	//styles for whatever breakpoint that is
}
```


### Colors

The framework supports up to 19-35 colors for full design capabilities (don't shoot me pls i'm only the dev this time)


`$brand-color-base`

*	framework var: `$band-color-base`
*	Color for body text, usually a dork color


`$brand-color-base`

*	framework var: `$band-color-base`
*	Color for body text, usually a dork color






## Modules

These are boxes that hold content and can be rearranged in css grid

### `.module-grid`

#### Grid setup

Container of modules. To allow css grid setup, declare css grid properties as data attributes

```
<div class="module-grid" data-template-rows="50% 20px 1fr">
<!-- .module here -->
</div>
```



[More information on available css grid parent properties](https://css-tricks.com/snippets/css/complete-guide-grid/)

#### Data Attributes


### `.modules-grid`
container of a box
### `.module`
THE BOIS

## Functions
