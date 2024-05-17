
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-12 flex-col-md-8">
		<h5 class="no-margin text-transform-uppercase">Sales Outreach</h5>
		<h1 class="no-margin">
			<?= ucwords(str_replace('-',' ',FWAPPS_TEMPLATE)) ?>
		</h1>
	</div>
	<div class="flex-col-12  flex-col-md-4 align-self-flex-end text-align-right">
		<?php app_get_component('components/function-input-search') ?>
	</div>
</div>

<div id="outreach-messages" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">

			<hr class="hide-nonmobile">
			
			<?php app_get_component('components/pagination-view-per-page') ?>

			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<table class="table-fixed outreach-table text-vertical-align-middle">
		<tr>
			<th class="text-align-center" width="50">
				<label class="input-label">
					<input type="checkbox" class="input-inline" name="allmessagesSelected">
					<span class="hide-nonmobile">Select all messages</span>
				</label>
            </th>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Block Selected'
								=> 'href="#"',
							'Delete Selected'
								=> 'href="#"',
						)
					)) ?>
				</div>
			</th>
			<!--
				th a
					@NOTE: for sortable column headers
					classes to add

					`` => if column is sorted descending
					`active` => if column is sorted ascending

				th a i
					classes to add
					`display-none` => if column is not set to sort
			-->
			<th class="text-nowrap text-align-center" width="100">
				User
			</th>
			<th class="filter-sortable text-nowrap" width="300">
				<a href="#" class="color-inherit text-decoration-none">
					From / To
				</a>
			</th>
			<th class="text-nowrap">
				Message
			</th>
			<th class="text-nowrap" width="120">
				Date
			</th>
			<th class="filter-sortable text-nowrap text-align-center" width="120">
				&nbsp;<div class="sr-only">Open Message</div>
			</th>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Block Selected'
								=> 'href="#"',
							'Delete Selected'
								=> 'href="#"',
						)
					)) ?>
				</div>
			</th>
		</tr>

		<!-- @LOOP row -->
			<tr>
				<td class="text-align-center">
					<label class="input-label">
						<input type="checkbox" class="input-inline" name="allmessagesSelected">
						<span class="hide-nonmobile">Select message</span>
					</label>
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Block'
									=> 'href="#"',
								'Delete'
									=> 'href="#"'
							)
						)) ?>
					</div>
				</td>
				<td class="text-align-center" width="120">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">User</span>
					<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="text-align-center">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td>
					<a class="color-inherit" data-toggle-modal-board href="#message-row-REPLACEID">

						<h5 class="no-margin-y">		
							<span class="hide-nonmobile no-margin">From:</span>
							<span class="REPLACE">First Name Last Name</span>
						</h5>
						<div>
							<span class="hide-nonmobile no-margin">To:</span>
							<span class="REPLACE">Naruto Uzumaki</span>
						</div>
					</a>
				</td>
				<td>
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Message</span>
					<p class="no-margin-bottom text-wrap-ellipsis-multiple">
						<span class="REPLACE">I will be hokage one day! &#128548;</span>
					</p>
				</td>
				<td width="120">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
					<p class="no-margin-bottom">
						<span class="REPLACE">04/20/69</span>
					</p>
				</td>
				<td>
					<a data-toggle-modal-board href="#message-row-REPLACEID"class="btn btn-link">
						<span class="hide-nonmobile margin-right">View Message</span>
						<i class="symbol symbol-arrow-right"></i>
					</a>
					<?php app_get_component('components/modal-board-sms-thread','',false,array(
						'id' => 'message-row-REPLACEID'
					)) ?>
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="position-relative">
						<div class="position-relative">
							<?php app_get_component('components/modal-actions','',false,array(
								'links' => array(
									'Block'
										=> 'href="#"',
									'Delete'
										=> 'href="#"'
								)
							)) ?>
						</div>

						
					</div>
				</td>
			</tr>

			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				<?php $placeholder = array(
					array(
						'from' => 'Rock Lee',
						'to' => 'Sakura Haruno',
						'message' => 'We\'ve been trying to reach you concerning your vehicle\'s extended warranty.'
					),
					array(
						'from' => 'Hinata Hyuga',
						'to' => 'Naruto Uzumaki',
						'message' => 'Oh, hello there, misteryoso \'Di pa rin mabasa ang \'yong tunay na motibo, oh Iba\'ng \'pinapakita, taliwas sa \'yong salita Pero ayokong magduda, baka lang sa simula Maghihintay na lang na ika\'y dumaan Sana ay maibsan ang aking pangungulila Trapped in this fairytale But I don\'t wanna wake up in this dream, baby Ayokong umasa sa paniniwalang May pag-asa nga ba na baka ang puso ko\'y mapagbigyan Mahiwagang salamin, kailan ba niya aaminin Kaniyang tunay na pagtingin? Mahiwagang salamin, ano ba\'ng dapat gawin? Bakit ang puso\'y nabibitin? Salamin, salamin sa dingding, nasa\'n na\'ng pag-ibig? Salamin, salamin sa dingding, puwede mo bang sabihin? Salamin, salamin sa dingding, nasa\'n na\'ng pag-ibig? Salamin, salamin, kailan niya ba \'ko papansinin? Ayokong maniwala (ayokong maniwala, ayy) Na baka mabalewala (oh no, oh no) Pero sa \'yong sulyap, mga mata\'y nangungusap \'Di ko kayang magpanggap, ano ba talaga ito? (Oh) Maghihintay na lang na ika\'y dumaan Sana ay maibsan ang aking pangungulila Trapped in this fairytale But I don\'t wanna wake up in this dream, baby Ayokong umasa sa paniniwalang May pag-asa nga ba na baka ang puso ko\'y mapagbigyan Mahiwagang salamin, kailan ba niya aaminin Kaniyang tunay na pagtingin? Mahiwagang salamin, ano ba\'ng dapat gawin? Bakit ang puso\'y nabibitin? Salamin, salamin sa dingding, nasa\'n na\'ng pag-ibig? Salamin, salamin sa dingding, puwede mo bang sabihin? Salamin, salamin sa dingding, nasa\'n na\'ng pag-ibig? Salamin, salamin, kailan niya ba \'ko papansinin? Mirror, mirror on the wall Please tell my prince charming, I\'m waiting for his call Bakit ba pasikot-sikot? Para bang pinapaikot \'Di ko talaga ma-gets, ano ba talaga ang next move mo? Gusto ko lang naman malaman (malaman) Ano ba ang katotohanan? (Oh my) Better say it now, it\'s not too late I\'m ready to be called your princess, hey (hey) Ayokong umasa sa paniniwalang May pag-asa nga ba na baka ang puso ko\'y mapagbigyan Mahiwagang salamin (oh), kailan ba niya aaminin (aaminin) Kaniyang tunay na pagtingin? (Ano ba\'ng sasabihin?) Mahiwagang salamin, ano ba\'ng dapat gawin? (Gawin) Bakit ang puso\'y nabibitin? Salamin, salamin sa dingding, nasa\'n na\'ng pag-ibig? (Salamin, salamin, salamin, salamin) Salamin, salamin sa dingding, puwede mo bang sabihin? (Ano\'ng gagawin?) Salamin, salamin sa dingding, nasa\'n na\'ng pag-ibig? Salamin, salamin, kailan niya ba \'ko papansinin? (Whoo)'
					),
					array(
						'from' => 'Avatar Aang',
						'to' => 'Prince Zuko of The Fire Nation',
						'message' => 'Best grandson teehee :))'
					),
					array(
						'from' => 'Dao Ming Si',
						'to' => 'Shancai I forgot her last name',
						'message' => '雖然經常夢見妳 還是毫無頭緒 外面正在下著雨 今天是星期幾 But I don\'t know 你去那裡 雖然不曾懷疑你 還是忐忑不定 誰是你的那個唯一 原諒我懷疑自己 我明白 我要的愛 會把我寵壞 像一個小孩 只懂在你懷裡壞 你要的愛 不只是依賴 要像個大男孩 風吹又日曬 生活自由自在 雖然不曾懷疑你 還是忐忑不定 誰是你的那個唯一 原諒我懷疑自己 我明白 我要的愛 會把我寵壞 像一個小孩 只懂在你懷裡壞 你要的愛 不只是依賴 要像個大男孩 風吹又日曬 生活自由自在 我明白 我要的愛 會把我寵壞 像一個小孩 只懂在你懷裡壞 你要的愛 不只是依賴 要像個大男孩 風吹又日曬 生活自由自在'
					),
					array(
						'from' => 'Satoru Gojo',
						'to' => 'Suguru Geto',
						'message' => 'Suguru &#128526;'
					),
					array(
						'from' => 'Suguru Geto',
						'to' => 'Satoru Gojo',
						'message' => 'Satoru  &#129402;'
					),
					array(
						'from' => 'Shikamaru Nara',
						'to' => 'Sasuke Uchiha',
						'message' => 'No one likes you &gt;:-('
					),
					array(
						'from' => 'Sai',
						'to' => 'Sasuke Uchiha',
						'message' => 'What Shikamaru said &#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;&#128578;'
					),
					array(
						'from' => 'Gaara of The Sand',
						'to' => 'Sasuke Uchiha',
						'message' => 'What sai and shikabro said &#129319;'
					),
					array(
						'from' => 'Sokka of the Water Tribe',
						'to' => 'Sasuke Uchiha',
						'message' => 'Water triiiiiiiibe &#129312;'
					),
					array(
						'from' => 'Itachi Uchiha',
						'to' => 'Tobirama',
						'message' => '내가 제일 잘 나가 내가 제일 잘 나가 내가 제일 잘 나가 내가 제일 잘 나가 (제 제 제일 잘 나가) bam, ra-ta-ta-ta-ta, ta-ta-ta-ta-ta (Bae!) bam, ra-ta-ta-ta-ta, ta-ta-ta-ta-ta (Bae!) bam, ra-ta-ta-ta-ta, ta-ta-ta-ta-ta (Bae!) bam, ra-ta-ta-ta-ta, ta-ta-ta-ta Oh my god 누가 봐도 내가 좀 죽여주잖아 alright 둘째가라면 이 몸이 서럽잖아 alright 넌 뒤를 따라오지만 난 앞만 보고 질주해 네가 앉은 테이블 위를 뛰어다녀 I don\'t care 건드리면 감당 못해 I\'m hot-hot-hot-hot fire 뒤집어지기 전에 제발 누가 날 좀 말려 옷장을 열어 가장 상큼한 옷을 걸치고 거울에 비친 내 얼굴을 꼼꼼히 살피고 지금은 여덟 시 약속시간은 여덟 시 반 도도한 걸음으로 나선 이 밤 내가 제일 잘 나가 내가 제일 잘 나가 내가 제일 잘 나가 내가 제일 잘 나가 (제 제 제일 잘 나가) 내가 봐도 내가 좀 끝내주잖아 alright 네가 나라도 이 몸이 부럽잖아 alright 남자들은 날 돌아보고 여자들은 따라 해 내가 앉은 이 자리를 매일 넘봐 피곤해 선수인척 폼만 잡는 어리버리한 playa\' 넌 바람 빠진 타이어처럼 보기 좋게 차여 어떤 비교도 난 거부해 이건 겸손한 얘기 가치를 논하자면 나는 billion dollar, baby 뭘 쫌 아는 사람들은 다 알아서 알아봐 아무나 잡고 물어봐 누가 제일 잘 나가? 내가 제일 잘 나가 내가 제일 잘 나가 내가 제일 잘 나가 내가 제일 잘 나가 (제 제 제일 잘 나가) 누가? 네가 나보다 더 잘 나가? (hey!) No, no, no, no! Na, na, na, na! 누가? 네가 나보다 더 잘 나가? (hey!) No, no, no, no! Na, na, na, na! (rrra) 누가? 네가 나보다 더 잘 나가? (hey!) No, no, no, no! Na, na, na, na! 누가? 네가 나보다 더 잘 나가? (hey!) No, no, no, no! Na, na, na, na! Bam, ra-ta-ta-ta-ta, ta-ta-ta-ta-ta (Bae!) bam, ra-ta-ta-ta-ta, ta-ta-ta-ta-ta (Bae!) bam, ra-ta-ta-ta-ta, ta-ta-ta-ta-ta (Bae!) bam, ra-ta-ta-ta-ta, ta-ta-ta-ta-ta (Bae!) bam, ra-ta-ta-ta-ta, ta-ta-ta-ta Oh my god'
					),
					array(
						'from' => 'Sokka of the Water Tribe',
						'to' => 'Prince Zuko of The Fire Nation',
						'message' => 'My first girlfriend turned into the moon &#128557;'
					),
					array(
						'from' => 'Prince Zuko of The Fire Nation',
						'to' => 'Sokka of the Water Tribe',
						'message' => 'That\'s rough buddy &#128528;'
					),
					array(
						'from' => 'Might Gai',
						'to' => 'Kakashi Hatake',
						'message' => 'Uây uây uây uây Sao mới gặp lần đầu mà đầu mình quay quay Anh ơi anh à Anh bỏ bùa gì mà lại làm em yêu vậy Bae bae bae bae Em nói từ đầu baby can you stay Mai đi coi ngày Xem cưới ngày nào thì nhà mình đông con vậy Nếu như một câu nói có thể khiến anh vui Sẽ suốt ngày luôn nói không ngừng để anh cười Nếu em làm như thế trông em có hâm không (điên điên điên lắm) Đem ngay vô nhà thương đem ngay vô nhà thương Đem ngay vô nhà anh để thương Giây phút em gặp anh là em biết em see tình Tình tình tình tang tang tính tang Tình tình tình tang tang tang Giây phút em gặp anh là em biết em see tình Tình đừng tình toan toan tính toan Tình mình tình tang tang tang tình Yah yah Anh tính sao giờ đây anh tính sao Yah yah Anh tính sao giờ đây anh tính sao Tới đâu thì tới tới đâu thì tới Em cũng chẳng biết tới đâu (tới đâu) Nếu yêu là khó không yêu cũng khó Em cũng chẳng biết thế nào (thế nào thế nào) Hôm nay tia cực tím xuyên qua trời đêm (nhưng) Anh như tia cực hiếm xuyên ngay vào tim Ấy ấy ấy chết em rồi Ấy ấy chết thật thôi Nếu như một câu nói có thể khiến anh vui Nói thêm một câu nữa có khi khiến anh buồn Nếu em làm như thế trông em có hâm không (điên điên điên lắm) Đem ngay vô nhà thương đem ngay vô nhà thương Đem ngay vô nhà anh để thương Giây phút em gặp anh là em biết em see tình Tình tình tình tang tang tính tang Tình tình tình tang tang tang Giây phút em gặp anh là em biết em see tình Tình đừng tình toan toan tính toan Tình mình tình tang tang tang tình Yah yah Anh tính sao giờ đây anh tính sao Yah yah Anh tính sao giờ đây anh tính sao'
					),
					array(
						'from' => 'Konoha',
						'to' => 'Pain',
						'message' => 'Aray... Aray naku, oh! Kay sakit naman ng ginawa mo Aray, oh! kay hapdi nitong puso ko Ang sabi mo ako lamang ang paka iibigin mo. Bakit ngayon ako ay iniwanan mo, oh! Aray.... kay sakit naman ng ginawa mo Aray.... oh! kay hapdi nitong puso ko Kay haba ng mga panahon na ikaw lang ang minahal ko ngunit anong dahilan ikaw ay biglang nagbago, oh! Aray.... (kay sakit naman ng ginawa mo) (Aray... oh kay hapdi hapdi naman nitong puso ko) Malaki ang pag-ibig na inalay ko sayo Sa tuwing maiisip ayoko na ah ha Ayoko na noh Ayoko ng umaray, Ooohh ayoko Ooohh ayoko ng umaray'
					),
					array(
						'from' => 'Toph Bei Fong',
						'to' => 'Melon Lord',
						'message' => 'Anti-ti-ti-ti fragile, fragile Anti-ti-ti-ti fragile Anti-ti-ti-ti fragile, fragile (Anti-fragile) (Anti-fragile) 가시밭길 위로 riding, you made me boost up (ah-ah-ah-ah) 거짓으로 가득 찬 party 가렵지도 않아 내 뒤에 말들이 많아, 나도 첨 듣는 내 rival 모두 기도해 내 falling 그 손 위로 I\'ma jump in Yes, gimme that 걸어봐 위엄 like a lion 눈빛엔 거대한 desire (nan-na-na-eh) 더 부어 gasoline on fire 불길 속에 다시 날아 rising (nan-na-na-eh) 잊지 마, 내가 두고 온 toe shoes 무슨 말이 더 필요해? 무시 마, 내가 걸어온 커리어 I go to ride \'til I die, die 더 높이 가줄게 내가 바랐던 세계 젤 위에 (ah-ah) 떨어져도 돼 I\'m anti-fragile, anti-fragile (ah-ah) 난 지금 on my way 갖다버려 줘 너의 fairy tale (ah-ah) Now you know my name I\'m anti-fragile, anti-fragile Anti-ti-ti-ti fragile, fragile Anti-ti-ti-ti fragile Anti-ti-ti-ti fragile, fragile (Anti-fragile) (Anti-fragile) Lovey, lovey, lovey Dovey, dovey, dovey 멋대로 정하네 나란 애에 대해 I don\'t know what to say, I can\'t feel it 뜨거운 관심은 환영, 귀여운 질투는 go ahead 줄 달린 인형은 no thanks 내 미랠 쓸 나의 노래 Yeah, gimme that 걸어봐 위엄 like a lion 눈빛엔 거대한 desire (nan-na-na-eh) 더 부어 gasoline on fire 불길 속에 다시 날아 rising (nan-na-na-eh) 잊지 마, 내가 두고 온 toe shoes 무슨 말이 더 필요해? 무시 마, 내가 걸어온 커리어 I go to ride \'til I die, die 더 높이 가줄게 내가 바랐던 세계 젤 위에 (ah-ah) 떨어져도 돼 I\'m anti-fragile, anti-fragile (ah-ah) 난 지금 on my way 갖다버려 줘 너의 fairy tale (ah-ah) Now you know my name I\'m anti-fragile, anti-fragile Anti-ti-ti-ti fragile, fragile Anti-ti-ti-ti fragile Anti-ti-ti-ti fragile, fragile (Anti-fragile) (Anti-fragile) We can break it, baby Rock it, twist it, lock it, baby All I know is you can\'t chain me \'Cause I\'m gonna break out Gonna, gonna break out, out We can break it, baby Rock it, twist it, lock it, baby All I know is you can\'t chain me \'Cause I\'m gonna break out Gonna, gonna break out, out (whoa-uh-oh-oh!) 더 높이 가줄게 내가 바랐던 세계 젤 위에 (ah-ah) 떨어져도 돼 I\'m anti-fragile, anti-fragile (ah-ah) 난 지금 on my way 갖다버려 줘 너의 fairy tale (ah-ah) Now you know my name I\'m anti-fragile, anti-fragile Anti-ti-ti-ti fragile, fragile Anti-ti-ti-ti fragile Anti-ti-ti-ti fragile, fragile (Anti-fragile) (Anti-fragile)'
					),
					array(
						'from' => 'Kenjaku',
						'to' => 'Suguru Geto',
						'message' => 'I want some, I get some, no later I woke up and baked that potato Got carbed to shape me for major But I stay me, not mediocre Look at me, tell me what you see All Gucci? But the real question is "Who\'s really me?" A movie\'s definitely not my reality \'Cause you see marumi, marumi, marumi, ew, kadiri Yeah, I\'m gonna see you later (later) Pagkatapos ko mag-shower (shower) Medyo ramdam ko na\'ng power (power) Kulang pa sa sour mga hater kaya (ayy) Alamin ang mga bagay-bagay \'Di puwedeng anay sa \'king bahay Tahimik lang daw ang matibay Pero \'pag tinopak, talagang mag-iingay (gento) Gento, gento \'Di \'to basta-basta bingo Need mo makumpleto parang bento Gento, ano, kaya mo? Pilit na hinukay ang bumbunan Makakita lang ng ginto, ginto Kahit na wala pang hinto Ciento por ciento bawat bitaw ko Mismo, eto, kaya mo? \'Di ka basta-basta makakakita ng gento Gento (hmm) Ge-ge-gento (uh) Gento (ah) \'Di ka basta-basta makakakita ng gento \'Di ko na kailangan lumunok ng bato, hindi mala-Darna \'to Aandar ang makina ko, tanging mekaniko ay ako, \'la nang moni-Moniko Sa daming pinagdaanan, nagpatong na\'ng story ko Osyoso mga tsismoso, \'lika\'t pumanhik na rito, uh! Hindi naman talaga madali, aminin ko pa man o hindi Sa likod ng mga tagong paghikbi, kayamanan kong hapdi Panis \'to, laging alisto Kahit pa si Mephisto, tiklop \'pag nag-beast mode na bihis ko No rush, I can do this all day (no rush) Twenty-four mentality like Kobe (Mamba) The harder I work, the harder I play Walang home court sa \'kin, sasalpak kahit away Heto na nga, heto na nga, wala nang magdada-dada \'Pag ako ang umangat, deretso sigaw, "Baba, baba" Ako ay galing sa lupa Kahit pilitin niyong hukayin, \'ding-hindi mo makukuha Yeah, I know this isn\'t over (over) \'Di pa tapos ang disaster (disaster) Alam ko na I\'m in danger (danger) But I\'m betting you sooner magiging better kaya Alamin ang mga bagay-bagay \'Di puwedeng tambay sa \'king bahay Lahat ng magtaas ng kilay Susunugin nang matuto namang magnilay Gento, gento (ooh, yeah) \'Di \'to basta-basta bingo Need mo makumpleto parang bento (oh) Gento, ano, kaya mo? (Gento) Pilit na hinukay ang bumbunan Makakita lang ng ginto, ginto Kahit na wala pang hinto (ooh) Ciento por ciento bawat bitaw ko (oh) Mismo, eto, kaya mo? (Oh) \'Di ka basta-basta makakakita ng gento Halukayin mo na parang gento \'Wag kang hihinto sa ordinaryo Kahig pa, sige, hanggang sa magdugo \'Di ka basta-basta makakakita ng gento Gento! Gento! Gento! Gento! Gento! Gento! Ah, gento! Halukayin mo na parang gento \'Wag kang hihinto sa ordinaryo Kahig pa, sige, hanggang sa magdugo \'Di ka basta-basta makakakita nito'
					),
					array(
						'from' => 'Sokka of The Water Tribe',
						'to' => 'Yue',
						'message' => 'It\'s in the moments When your face is next to mine And we don\'t show it But we\'re thinking of the times So put it in motion My desires taking over my emotions, my emotions Want you in every way Want you to scream my name With my hands around your waist Yeah, I li-li-like Doing what we do in the moonlight I be loving you, baby, all night Baby, you and me are shadows on the ceiling That\'s my favorite feeling Yeah, I li-li-like Doing what we do in the moonlight I be loving you, baby, all night Baby, you and me are shadows on the ceiling That\'s my favorite feeling Yeah, I li-li-like Doing what we do in the moonlight La, la-la-la, la, la-la-la, la, la-la-la Doing what we do in the moonlight La, la-la-la, la, la-la-la, la, la-la-la No, you don\'t wanna give me any reasons Show me what to do, I\'ll keep it secret We can\'t hide the feelings in between us Just you and me, I\'ll never leave Want you in every way Want you to scream my name With my hands around your waist Yeah, I li-li-like Doing what we do in the moonlight I be loving you, baby, all night Baby, you and me are shadows on the ceiling That\'s my favorite feeling Yeah, I li-li-like Doing what we do in the moonlight I be loving you, baby, all night Baby, you and me are shadows on the ceiling That\'s my favorite feeling Yeah, I li-li-like Doing what we do in the moonlight La, la-la-la, la, la-la-la, la, la-la-la Doing what we do in the moonlight La, la-la-la, la, la-la-la, la, la-la-la Doing what we do in the moonlight'
					),
					array(
						'from' => 'The world',
						'to' => 'Kento Nanami',
						'message' => 'You are my special You are my special You are my special 今際の際際で踊りましょう 東京前線興の都 往生際の際際で足掻きましょう お行儀の悪い面も見せてよ I love you, baby 謳い続けましょう 如何痴れ者も 如何余所者も 心燃える一挙手一投足 走り出したらアンコントロール You are my special 無茶苦茶にしてくれないかい？ 一切を存分に喰らい尽くして 一生迷宮廻遊ランデブー 眩暈がする程 You are my special 有耶無耶な儘廻る世界 No, no, no! そう冷静にはならないで 一生迷宮廻遊ランデブー 誰が如何言おうと You are my special We are special You are my special 土俵際の際際で堪えましょう 東京沿線大荒れ模様 報道機関 氣裸氣裸 血走ります 冷静と俯瞰は御法度です Get lost in me 自分を庇う言葉ばかりを いつまで言い聞かせるの？ Get lost in me 生き様を悔いるなんて そんなの御免だわ 応答してよ 其体温感じたいの 低体温のフローが点けた青い炎 ロマンティックに誤魔化さないで 単刀直入に切り裂いて 熱っぽいラブソングには酔えないよもう I love you, baby I love you, baby 今際の際際で踊りましょう 東京前線興の都 往生際の際際で足掻きましょう お行儀の悪い You are my special 無茶苦茶にしてくれないかい？ 未来を存分に喰らい尽くして 一生迷宮廻遊ランデブー 眩暈がする程 You are my special 有耶無耶な儘廻る世界 No, no, no! そう冷静にはならないで 一生迷宮廻遊ランデブー 誰が如何言おうと You are my special We are special 冷静にはならないで We are special あなたはそのままで We are special どこまでも特別よ We are special 誰が如何言おうと You arе my special'
					),
				); ?>
				<?php foreach($placeholder as $i => $message){ ?>
					<tr>
						<td class="text-align-center">
							<label class="input-label">
								<input type="checkbox" class="input-inline" name="allmessagesSelected">
								<span class="hide-nonmobile">Select message</span>
							</label>
						</td>
						<td class="outreach-table-cell-actions text-align-center" width="50">
							<div class="position-relative">
								<?php app_get_component('components/modal-actions','',false,array(
									'links' => array(
										'Block'
											=> 'href="#"',
										'Delete'
											=> 'href="#"'
									)
								)) ?>
							</div>
						</td>
						<td class="text-align-center" width="120">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">User</span>
							<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="text-align-center">
								<?php app_get_component('components/profile-image-micro') ?>
							</a>
						</td>
						<td>
							<a class="color-inherit" data-toggle-modal-board href="#message-row-<?= $i ?>">

								<h5 class="no-margin-y">		
									<span class="hide-nonmobile no-margin">From:</span>
									<span class="REPLACE"><?= $message['from'] ?></span>
								</h5>
								<div>
									<span class="hide-nonmobile no-margin">To:</span>
									<span class="REPLACE"><?= $message['to'] ?></span>
								</div>
							</a>
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Message</span>
							<p class="no-margin-bottom text-wrap-ellipsis-multiple">
									<span class="REPLACE"><?= $message['message'] ?></span>
							</p>
						</td>
						<td width="120">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date</span>
							<p class="no-margin-bottom">
								<span class="REPLACE">04/20/69</span>
							</p>
						</td>
						<td>
							<a data-toggle-modal-board href="#message-row-<?= $i ?>" class="btn btn-link">
								<span class="hide-nonmobile margin-right">View Message</span>
								<i class="symbol symbol-arrow-right"></i>
							</a>
							<?php app_get_component('components/modal-board-sms-thread','',false,array(
								'id' => 'message-row-'.$i
							)) ?>
						</td>
						<td class="outreach-table-cell-actions text-align-center" width="50">
							<div class="position-relative">
								<div class="position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Block'
												=> 'href="#"',
											'Delete'
												=> 'href="#"'
										)
									)) ?>
								</div>

								
							</div>
						</td>
					</tr>
				<?php } ?>
	</table>

	<div class="module-footer">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>

</div>