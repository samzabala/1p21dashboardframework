<!-- play butt..on -->
<!-- NOTE:
classes to add:
	.row-timer-btn.timetracker-toggle-play
		when timer is running => `display-none`
		when timer is paused => `display-none`
		when timer is in default state  => ``
		when timer is in default stopped  => `display-none` OR not render this element at all
-->
<a href="#" class="row-timer-btn timetracker-toggle-play btn btn-symbol btn-small  well well-compact btn-primary background-gradient-45 background-image-none-hover
	">
	<i class="symbol symbol-play"></i>
</a>




<!-- pause butt..on -->
<!-- NOTE:

classes to add:
	.row-timer-btn.timetracker-toggle-pause
		when timer is running => ``
		when timer is paused => `display-none`
		when timer is in default state => `display-none`
		when timer is in default stopped  => `display-none` OR not render this element at all
-->
<a href="#"class="row-timer-btn timetracker-toggle-pause btn btn-symbol btn-small  well well-compact btn-secondary">
	<i class="symbol symbol-pause"></i>
</a>


<!-- spacer -->
<span class="font-size-large">&nbsp;</span>



<!-- stop butt..on -->
<!-- NOTE:
classes to add:
	.row-timer-btn.timetracker-toggle-stop
		when timer is running => ``
		when timer is paused => ``
		when timer is in default state => ``
		when timer is in default stopped  => `display-none` OR not render this element at all

-->
<a href="#"class="row-timer-btn timetracker-toggle-stop btn btn-symbol btn-small  well well-compact
btn-neutral background-success-hover
">
	<i class="symbol symbol-check"></i>
</a>