<!-- 
JS
	import Modal from 'assets/plugins/franework/src/modal'



	@note: will need to be opened right away.

	new Modal(modalElement).open


 -->
<div id="m-rogue-timer" class="modal modal-default modal-expanded" data-modal-width="640px">
	<h3 class="color-error no-margin-top flex-xs align-items-center">
		<span class="h2 color-inherit display-inline no-margin-y margin-small-right">
			<i class="symbol symbol-error-inverse"></i>
		</span>
		You Left A Timer Running
	</h3>
	<p>Please fix your time entry</p>

	<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y margin-micro-bottom">
		<div class="flex-col-xs-12 flex-col-sm-2">
			<strong class="input-label font-weight-700 no-padding">Client</strong>
		</div>
		<div class="flex-col-xs-12 flex-col-sm-10">
			<div class="text-wrap-ellipsis">
				<span class="REPLACE">Parokya ni Edgar</span>
			</div>
		</div>
	</div>
	<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y margin-micro-bottom">
		<div class="flex-col-xs-12 flex-col-sm-2">
			<strong class="input-label font-weight-700 no-padding">Project</strong>
		</div>
		<div class="flex-col-xs-12 flex-col-sm-10">
			<div class="text-wrap-ellipsis">
				<span class="REPLACE">Buruguduystunstugudunstuy</span>
			</div>
		</div>
	</div>
	<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y margin-micro-bottom">
		<div class="flex-col-xs-12 flex-col-sm-2">
			<strong class="input-label font-weight-700 no-padding">Task</strong>
		</div>
		<div class="flex-col-xs-12 flex-col-sm-10">
			<div class="text-wrap-ellipsis">
				<span class="REPLACE">At first, I was afraid to eat a picha pie Kept thinking this is not a good, this is a picha pie And I spent, oh, so many nights, just eating my tortang talong And I grew strong because of my tortang talong Biglang may box from outer space Nakita ko, sabay kinuha ko 'yung box from outer space Binuksan ko at nasindak, may picha pie, sobrang laki Tinikman ko, within five seconds, naubos ko parang mani Ngayon, ako ay ganito Kung 'di ka Pizza Hut or Shakey's, you're not welcome, ina mo Ngayon sa aking picha pie, ayoko nang mahiwalay Para sa 'yo, handa 'kong magpakamatay 'Cause now, I love picha pie, yeah As long as I eat picha pie, I know I'll be alive I want all my garlic beef, pepperoni, double cheese Ang picha pie, ang picha pie, pahingi They took all the cash I have, naubos na'ng lahat Gusto ko pa ng picha pie ngunit ang pera'y 'di sapat And I spent, oh, so many nights, just feeling sorry for myself It made me cry, wala na ba 'kong picha pie? Ngayon, ako ay nagipit Hindi na 'ko stupid person na hindi nag-iisip Medyo mahal ang picha pie, you can't expect it to be free That's why I'm saving all my money, para mayro'ng pambili Ngayon, ako ay ganito Kung 'di ka Pizza Hut or Shakey's, you're not welcome, ina mo Ngayon, sa aking picha pie, ayoko nang mahiwalay Para sa 'yo, handa 'kong magpakamatay 'Cause now, I love my picha pie, yeah As long as I eat picha pie, I know I'll be alive I want all my garlic beef, pepperoni, double cheese Oh, picha pie, oh, picha pie, pahingi Look, it's not "picha pie", it's "pizza pie" Huh? Picha pie? No, no, no, say it like this, "pizza pie" Picha pie Pi- (pi-), zza (cha) Pizza (picha) No, no, no, no, no, no</span>
			</div>
		</div>
	</div>
	<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y margin-micro-bottom">
		<div class="flex-col-xs-12 flex-col-sm-2">
			<strong class="input-label font-weight-700 no-padding">Date</strong>
		</div>
		<div class="flex-col-xs-12 flex-col-sm-10">
			<div class="text-wrap-ellipsis">
				<span class="REPLACE">June 12, 1898</span>
			</div>
		</div>
	</div>


	<form action="">
		<!-- hidden input fields here -->

		<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y margin-micro-bottom">
			<div class="flex-col-xs-12">
				<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
					<label for="rogue-timer-comments" class="input-label font-weight-700">Comments</label>
					<textarea name="" id="rogue-timer-comments" class="input input-multiple-line input-block" ></textarea>
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-sm-4">
				<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
					<label for="rogue-timer-start" class="input-label font-weight-700">Start Time</label>
					<input name="" id="rogue-timer-start" disabled type="time" class="input input-single-line input-block" />
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-sm-4">
				<div class="input-wrapper input-wrapper-block input-wrapper-vertical input-error">
					<label for="rogue-timer-end" class="input-label font-weight-700">End Time *</label>
					<input name="" id="rogue-timer-end" type="time" class="input input-single-line input-block" />
					<span class="input-info color-error">Enter correct end time *</span>
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-sm-4">

				<div class="input-wrapper input-wrapper-block input-wrapper-vertical input-error">
					<span for="rogue-timer-start" class="input-label font-weight-700 spacer">&nbsp;</span>
					<button class="btn btn-theme">Update Time Entry</button>
				</div>
			</div>
		</div>
	</form>
</div>


<!-- DEMO only -->
<script>
	(function(fw){
		if(window.location.hash == '#m-rogue-timer')
			new fw.Modal(document.getElementById('m-rogue-timer')).open()

	})(window.fw)
</script>