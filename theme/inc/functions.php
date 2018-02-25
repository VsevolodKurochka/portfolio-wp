<?php
	
	function social($class_name){
		$return = '<ul class="social '.$class_name.' ">
						<li class="social__item">
							<a class="social__item-link" href="tel: +38 (063) 505 62 63">
								<i class="social__item-link-icon fas fa-mobile" aria-hidden="true"></i>
							</a>
						</li>
						<li class="social__item">
							<a class="social__item-link" href="mailto: seva.kurochka@gmail.com">
								<i class="social__item-link-icon fas fa-envelope" aria-hidden="true"></i>
							</a>
						</li>
						<li class="social__item">
							<a class="social__item-link" href="skype: mozilla20103">
								<i class="social__item-link-icon fab fa-skype" aria-hidden="true"></i>
							</a>
						</li>
						<li class="social__item">
							<a class="social__item-link" href="https://www.facebook.com/vsevolod.kurochka.1">
								<i class="social__item-link-icon fab fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li class="social__item">
							<a class="social__item-link" href="https://github.com/VsevolodKurochka">
								<i class="social__item-link-icon fab fa-github" aria-hidden="true"></i>
							</a>
						</li>
					</ul>';

		echo $return;
	}

?>