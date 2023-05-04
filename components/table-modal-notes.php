<a href="#task-notes-ID" class="btn btn-symbol  btn-small btn-primary task-notes">
	<i class="symbol symbol-text-left"></i>
</a>
<div
class="modal"
id="task-notes-ID"
data-modal-width="800px"
data-modal-title="Task notes"
data-modal-classes="record-notes-modal" data-modal-disable-overlay="false">

	<div class="notes">
		We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it And if you ask me how I'm feeling Don't tell me you're too blind to see Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give, never gonna give (Give you up) (Ooh) Never gonna give, never gonna give (Give you up) We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry
	</div>

	<?php if(FWAPPS_APP == 'workflow'): ?>

		<hr>

		<h4>Attachments</h4>


		<ul class="list-group">

			<!-- @LOOP LI -->
				<li class="list-group-item no-padding-x">
					<div class="grid grid-flex grid-fixed grid-constricted-y">
						<a href="/placeholder/files/shrek.jpg" target="_blank" class="grid-col-4">
							<img src="/placeholder/files/shrek.jpg">
						</a>
						<div class="grid-col-8"> 

							<a href="/placeholder/files/shrek.jpg" class="text-wrap-ellipsis text-decoration-none p">
								<span class="file-name">
									<span class="REPLACE">Filename-that-could-be-long-or-could-be-short.jpg</span>
								</span>
								<br>
								<span class="file-size  color-neutral">
									<span class="REPLACE">69kb</span>
								</span>
							</a>


							<div>
								<a href="#" class="btn btn-small btn-error" data-record-id="REPLACE" data-attachment-url="REPLACE">
									<i class="symbol symbol-delete"></i> Delete
								</a>
							</div>
						</div>
					</div>
				</li>
				
		</ul>

	<?php endif; ?>
	
</div>