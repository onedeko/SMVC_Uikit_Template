	
		<!-- Container for centent -->
		<div class="uk-container uk-container-center uk-text-center">
			<hr class="">
		</div>

		<!-- Container for centent -->
		<div class="uk-container uk-container-center uk-text-center uk-margin-bottom">
			<ul class="uk-subnav uk-subnav-line">
				<li><a href="https://github.com/onedeko/SMVC_Uikit_Template" target="_blank">GitHub</a></li>
				<li><a href="https://github.com/onedeko/SMVC_Uikit_Template/issues" target="_blank">Issues</a></li>
				<li><a href="https://github.com/onedeko/SMVC_Uikit_Template/blob/master/README.md" target="_blank">Changelog</a></li>
			</ul>
		</div>

		<!-- JS -->
		<?php
			helpers\assets::js(array(
				helpers\url::template_path() . 'js/jquery.js',  			          
				helpers\url::template_path() . 'js/uikit.min.js',
				helpers\url::template_path() . 'js/components/notify.min.js',
			))
		?>

	</body>

</html>