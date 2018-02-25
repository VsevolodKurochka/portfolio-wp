'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

(function () {
	function log(content) {
		console.log(content);
	}

	var hasClass = function hasClass(element, cls) {
		return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
	};

	function addClass(element, cls) {
		if (!hasClass(element, cls)) {
			var empty = '';
			if (element.classList.value != "") empty = ' ';
			element.className += empty + cls;
		}
	}

	function removeClass(element, cls) {
		if (hasClass(element, cls)) element.classList.remove(cls);
	}

	function toggleClass(element, cls) {
		hasClass(element, cls) ? removeClass(element, cls) : addClass(element, cls);
	}

	var exists = function exists(element) {
		return typeof element != 'undefined' && element != null;
	};

	// class Modal {
	// 	constructor(){

	// 		// Prefix for modal class
	// 		this.prefix = '';

	// 		// Name of modal class
	// 		this.name = `${this.prefix}modal`;

	// 		// All modals
	// 		this.modals = document.querySelectorAll(`.${this.name}`);

	// 		// Open Buttons
	// 		this.openButtons = document.querySelectorAll(`[data-action="${this.name}"]`);

	// 		// Close Button(`x`)
	// 		this.closeButtons = document.querySelectorAll(`[data-close="${this.name}"]`);

	// 		this.modalClickEvents = ['click'];

	// 		//log(this.openButtons);
	// 		// this.openButtons.forEach( (openButton) => {
	// 		// 	log(openButton);
	// 		// 	//openButton.addEventListener('click', (e) => this._showButtonClick(e, this));
	// 		// });

	// 		for(let i = 0; i < this.openButtons.length; i++){
	// 			this.openButtons[i].addEventListener('click', (e) => {
	// 				this._showButtonClick(e);
	// 			});
	// 		}

	// 		for(let i = 0; i < this.closeButtons.length; i++){
	// 			this.closeButtons[i].addEventListener('click', (e) => {
	// 				this._closeButtonClick(e);
	// 			});
	// 		}

	// 		document.body.addEventListener('click', (e) => {
	// 			this._bodyClick(e);
	// 		});

	// 		//console.log(this.openButtons.length);

	// 		// this.modalClickEvents.forEach( (modalClickEvent) => {

	// 		// 	// document.body.addEventListener(modalClickEvent, (e) => {
	// 		// 	// 	this._bodyClick(e, this);
	// 		// 	// });


	// 		// 	// this.closeButtons.forEach( (button) => {
	// 		// 	// 	button.addEventListener(modalClickEvent, (e) => this._closeButtonClick(e, this));
	// 		// 	// });

	// 		// });
	// 	}


	// 	modalClose(el){
	// 		removeClass(el, `${this.name}_showing_in`);
	// 		removeClass(document.body, `${this.name}-open`);
	// 	}

	// 	modalOpen(el){
	// 		addClass(document.body, `${this.name}-open`);
	// 		addClass(el, `${this.name}_showing_in`);
	// 	}

	// 	_showButtonClick(e) {
	// 		// Get button data-attributes
	// 		var modalData = e.target.dataset;

	// 		// Get attribute data-open and replace # with empty line
	// 		var modalID = modalData.open.replace("#", "");


	// 		if( exists(document.getElementById(modalID) ) ){

	// 			let modalCurrent = document.getElementById(modalID);

	// 			this.modalOpen(modalCurrent);

	// 			if(modalData.video != undefined){


	// 				if( exists(modalCurrent.getElementsByClassName('modal__video')[0]) ){

	// 					this._removeIframe(modalCurrent);

	// 					let videoIframe = document.createElement('iframe');

	// 					addClass(videoIframe, 'modal__video-iframe');

	// 					let videoSRC = modalData.video;
	// 					videoIframe.setAttribute('src', videoSRC);
	// 					videoIframe.setAttribute('allow', 'autoplay; encrypted-media');
	// 					videoIframe.setAttribute('allowfullscreen', 'allowfullscreen');

	// 					videoWrapper.appendChild(videoIframe);
	// 				}
	// 			}

	// 		}else{
	// 			console.error('No element with ID: ' + modalID);
	// 		}
	// 	}

	// 	_removeIframe(element){
	// 		if( exists(element.getElementsByClassName('modal__video')[0]) ){
	// 			let _videoWrapper = element.getElementsByClassName('modal__video')[0];
	// 			_videoWrapper.innerHTML = '';
	// 		}
	// 	}

	// 	_closeButtonClick(e) {

	// 		let modalCurrent = e.target.closest(`.${this.name}`);
	// 		this.modalClose( modalCurrent );

	// 		this._removeIframe(modalCurrent);
	// 	}

	// 	_getEventTarget(e){
	// 		var targ;

	// 		if (e.target) { // W3C
	// 			targ = e.target;
	// 		}else if (e.srcElement) { // IE6-8
	// 			targ = e.srcElement;
	// 		}else if(e.originalTarget){
	// 			targ = e.originalTarget;
	// 		}
	// 		if (targ.nodeType == 3) { // Safari
	// 			targ = targ.parentNode;
	// 		}
	// 		return targ;
	// 	}

	// 	_bodyClick(e){
	// 		let target = this._getEventTarget(e);

	// 		//log(target);
	// 		for(let i = 0; i < this.modals.length; i++){

	// 			let targetModal = this.modals[i];

	// 			if(target == targetModal){
	// 				this.modalClose(targetModal);
	// 				this._removeIframe(targetModal);
	// 			}
	// 		}
	// 	}
	// }

	var Navigation = function () {
		function Navigation() {
			var _this = this;

			_classCallCheck(this, Navigation);

			this.prefix = '';
			this.navigation = document.getElementById('navigation');
			this.menu = document.getElementById('js-navigation-menu');
			this.hamburger = document.getElementById('js-nav-hamburger');
			this.addition = document.getElementById('js-nav-addition');
			this.links = '.nav__menu-item-link';

			if (exists(this.hamburger)) {
				this.hamburger.addEventListener('click', function (e) {
					return _this.hamburgerClick(e, _this);
				});
			}

			if (exists(this.addition)) {
				this.addition.addEventListener('click', function (e) {
					return _this.additionClick(e, _this);
				});
			}

			this.linksScroll();

			if (exists(this.navigation)) {
				this.navigationScroll();
			}
		}

		_createClass(Navigation, [{
			key: 'checkScrollY',
			value: function checkScrollY() {
				window.scrollY > 0 ? addClass(this.navigation, 'nav_scrolled') : removeClass(this.navigation, 'nav_scrolled');
			}
		}, {
			key: 'navigationScroll',
			value: function navigationScroll() {
				var _this2 = this;

				this.checkScrollY();

				window.addEventListener("scroll", function () {
					return _this2.checkScrollY();
				});
			}
		}, {
			key: 'hamburgerClick',
			value: function hamburgerClick(el) {
				toggleClass(this.hamburger, 'active');
				toggleClass(this.menu, 'nav__menu_active');
			}
		}, {
			key: 'additionClick',
			value: function additionClick(el) {
				toggleClass(this.addition, 'active');
			}
		}, {
			key: 'linksScroll',
			value: function linksScroll() {
				var _this3 = this;

				new SmoothScroll(this.links, {
					offset: 100,
					before: function before() {
						removeClass(_this3.hamburger, 'active');
						removeClass(_this3.menu, 'nav__menu_active');
					}
				});
			}
		}]);

		return Navigation;
	}();

	document.addEventListener("DOMContentLoaded", function () {
		//new Modal();

		new Navigation();

		emergence.init();
	});
})();