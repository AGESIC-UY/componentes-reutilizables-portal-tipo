class texto_a_voz extends HTMLElement {
	static attributes = {};
	urlBase = ".";
	
	hasShadow;
	instanceVariantDefaults = {"boton-leer":{}};

	/* Component form data */
	static formAssociated = true;
	formFields = {};
	formData;
	attachedInternals;
	labelChanges= {};

	constructor() {
		super();
		this.urlBase = wcf_allInstances.actualUrlBase("./js/texto-a-voz.js");
	}

	replaceDefaults(newDefaults) {
		this.instanceVariantDefaults = newDefaults;
	}

	connectedCallback() {
		let compId;
		let shadow;

		if (this.getRootNode().host) {
			this.hasShadow = false;
			/* get the host attached form */
			this.attachedInternals = this.getRootNode().host.attachedInternals;
		} else {
			this.hasShadow = true;
			shadow = this.attachShadow({ mode: "open", delegatesFocus: true});
			/* Attach the web component to the containing form */
			this.attachedInternals = this.attachInternals();
		}

		let inputName;
		let labelForId, labelForIdOri;
		this.formData = new FormData();				// Form data is fullfilled onLoad from attachedInternals  

		/* add the component to the global component list */
		const tagIdOri = this.getAttribute("id");
		let tagIdValue;
		if (tagIdOri) {
			tagIdValue = wcf_allInstances.getUniqueInstanceId(tagIdOri);
		} else {
			tagIdValue = wcf_allInstances.getUniqueInstanceId("compInstance");
		}
		const tagId = tagIdValue;
		wcf_allInstances.addInstance(tagId, this, this.hasShadow);
		wcf_allInstances.addProp(tagId, "oriComp", "texto-a-voz");
		wcf_allInstances.allCompsIds[tagId] = {};
		this.setAttribute("id",tagId);


		/* Add the attributes mutation observer */
		this.mutationObserver = new MutationObserver(this.mutationObserverCallback);
		this.mutationObserver.observe(this, {attributes: true, attributeOldValue: true});

		const div = document.createElement("div");
		div.setAttribute("data-component-id", "texto-a-voz");
		div.setAttribute("data-wcfid", "div");
		div.setAttribute("original-id", "node_3");
		div.setAttribute("data-wcfid", "div");
		div.setAttribute("class", "div");
		wcf_allInstances.allCompsIds[tagId]["div"] = div;
		if (this.hasShadow) {
			shadow.appendChild(div);
		} else {
			this.appendChild(div);
		}

		if (this.hasShadow) {
			const cssReset = document.createElement("link");
			cssReset.setAttribute("rel", "stylesheet");
			cssReset.setAttribute("href", this.urlBase+"/css/reset.css");
			shadow.appendChild(cssReset);

		}
		/* if component has private styles, they go here */
		let cssText =' .div {font-style:normal; font-variant:normal; font-weight:400; font-family:Open Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, Arial, sans-serif; font-stretch:100%; margin:0px; padding:0px; border:0px; outline:0px; font-size:100%; vertical-align:baseline; background:transparent; box-sizing:border-box; } @media print { .div {background:transparent !important; color:rgb(0, 0, 0) !important; box-shadow:none !important; text-shadow:none !important; }} blockquote::before, blockquote::after, q::before, q::after {content: none;} a:active, a:hover {outline-width: 0px;} svg:not(:root) {overflow: hidden;} [type="button"]:focus-visible, [type="reset"]:focus-visible, [type="submit"]:focus-visible, button:focus-visible {outline: buttontext dotted 1px;} *, ::after, ::before {box-sizing: inherit;} button:focus {outline: dotted 1px;} [tabindex="-1"]:focus {outline: none !important;} a:focus, a:hover {text-decoration: underline;} :focus, button:focus {outline: orange solid 3px; outline-offset: 0.05rem;} .Container::after, .Container::before {display: table; content: "";} .Container::after {clear: both;} .Grid::after, .Grid::before {display: table; content: "";} .Grid::after {clear: both;} .List .List-item:first-child, .List > li:first-child {border-top: 0px;} .List--media .Media:first-child {padding-top: 0px; margin-top: 0px;} .List--medium > .Media:first-child {padding-top: 0px; margin-top: 0px;} .List--simple > .Media:first-child {padding-top: 0px; margin-top: 0px;} .List--media .Download:first-child {margin-top: 0.1875rem;} .List--media .Download.Download--media .Download-title:last-child {margin-bottom: 0.25rem;} .FlexEmbed::before {display: block; content: "";} .FlexEmbed--21by9::before {padding-top: 42.8571%;} .FlexEmbed--16by9::before {padding-top: 56.25%;} .FlexEmbed--4by3::before {padding-top: 75%;} .FlexEmbed--1by1::before {padding-top: 100%;} .FlexEmbed--1by2::before {padding-top: 200%;} .Button:hover {background-color: rgb(221, 221, 221);} .Button:focus {border: 1px solid orange !important; outline: none; box-shadow: rgba(255, 190, 70, 0.075) 0px 1px 2px inset, rgba(255, 190, 70, 0.3) 0px 0px 0px 0.2em;} .Button:active, .Button:focus, .Button:hover {text-decoration: none;} .Button.is-disabled, .Button:disabled {cursor: not-allowed; opacity: 0.4; box-shadow: none;} .Button:active {box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 0.15em inset;} .Button--primary:hover {background-color: rgb(0, 46, 124);} .Button--primary.u-outerLink::after {background-image: url("'+this.urlBase+'/img/outerLink-white.svg");} .Button--secondary:hover {background-color: rgb(252, 206, 38);} .Button--secondary.u-outerLink::after {background-image: url("'+this.urlBase+'/img/outerLink-black.svg");} .Button--inverse:hover {color: rgb(255, 255, 255); background-color: rgb(0, 46, 124);} .Button--inverse:hover.u-outerLink::after {background-image: url("'+this.urlBase+'/img/outerLink-white.svg");} .Button--inverse.is-disabled:hover, .Button--inverse:disabled:hover {background-color: rgb(255, 255, 255); color: rgb(0, 61, 165);} .Button--link:hover {background-color: inherit; text-decoration: underline;} .Alert > :first-child {margin-top: 0px !important;} .Alert > :last-child {margin-bottom: 0px !important;} .Alert a:hover {text-decoration: none;} .Container--alerts:empty {display: none;} .Alert--atajos:hover {background-color: rgb(226, 233, 241); text-decoration: underline;} .Tags-item:hover {box-shadow: rgb(221, 221, 221) 1px 1px 1px, rgb(221, 221, 221) 0px 0px 1px; color: rgb(0, 0, 0); text-decoration: none;} .Tags-item:last-child {margin-right: 0px;} .Tags-item--csv:hover, .Tags-item--html:hover, .Tags-item--json:hover, .Tags-item--pdf:hover, .Tags-item--rar:hover, .Tags-item--txt:hover, .Tags-item--undefined:hover, .Tags-item--xls:hover, .Tags-item--xml:hover, .Tags-item--zip:hover {color: rgb(255, 255, 255); text-decoration: underline;} .Tags-item--close::after {content: "×"; font-size: 1.25rem; font-weight: 700; line-height: 0; position: absolute; top: 0.875rem; right: 0.625rem;} .Audio-link:not(.collapsed) > span:first-child {display: none;} .Audio-link:not(.collapsed)::before {content: "Ocultar transcripción";} .SkipLink:focus {color: rgb(255, 255, 255); top: 0px; left: 0px; z-index: 5; width: auto; height: auto;} .Dropdown:focus-within .Dropdown-menu, .Dropdown:focus .Dropdown-menu, .Dropdown:hover .Dropdown-menu {display: block;} .Download:focus, .Download:hover {text-decoration: none;} .Download:focus .Download-icon, .Download:hover .Download-icon {background-color: rgb(255, 255, 255); border: 2px solid rgb(238, 238, 238);} .Download:focus .Download-title, .Download:hover .Download-title {text-decoration: underline;} .Download-title:last-child {margin-bottom: 0.2rem;} .Event-info::after, .Event-info::before {display: table; content: "";} .Event-info::after {clear: both;} .Event-map::after {position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; display: block; content: " "; background-color: rgba(0, 0, 0, 0.1); cursor: pointer;} .Event-map.is-visible::after {display: none;} .Pagination-links li a:hover {background-color: rgb(221, 221, 221);} .Pagination-next a::after {padding-left: 0.5rem; content: "→";} .Pagination-prev a::before {padding-right: 0.5rem; content: "←";} .Carousel .owl-stage::after {content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0px;} .Carousel::after, .Carousel::before {display: table; content: "";} .Carousel::after {clear: both;} .Carousel .owl-nav [class*="owl-"]:hover {background: rgb(51, 51, 51); color: rgb(255, 255, 255); text-decoration: none;} .Carousel .owl-nav [class*="owl-"]:active {background: rgb(85, 85, 85); text-decoration: none;} .Carousel .owl-dots .owl-dot.active span, .Carousel .owl-dots .owl-dot:hover span {background: rgb(51, 51, 51);} .Tree li::after, .Tree li::before {content: ""; left: 3%; position: absolute; right: auto;} .Tree li::before {bottom: 50px; height: 100%; top: 0px; width: 0px;} .Tree li::after {top: 25px; width: 12%;} .Tree li div.itemContent li::after, .Tree li div.itemContent li::before {content: ""; position: static;} .Tree ul > li > ul > li::before {top: 0px;} .Tree ul > li > ul > li:last-child::before {height: 25px;} .Tree li div.itemContent ul li::before {content: ""; border: medium; height: auto; width: auto;} .Tree li::before {top: -20px; padding-bottom: 20px;} .Tree > ul > li::after, .Tree > ul > li::before {border: 0px;} .Tree li:last-child::before {height: 45px;} .Tree li.parent_li > .hasChilds:hover, .Tree li.parent_li > .hasChilds:hover + ul li .hasChilds {background: rgb(251, 251, 251); border: 1px solid rgb(102, 102, 102); color: rgb(0, 0, 0);} .Tree li::after, .Tree li::before {background-color: rgb(204, 204, 204);} .Tree li::after {height: 2px;} .Tree li::before {width: 2px;} .Tree li.lvlOne::after, .Tree li.lvlOne::before {display: none;} .Tree-rightLink::after, .Tree-rightLink::before {display: none !important;} .Tree-prevRightLink::before {height: 26px !important;} .Tree-hasRightLink ul::before {width: 2px; content: ""; position: absolute; top: 0px; left: -14px; z-index: 1; height: calc(100% + 65px);} .Tree li.Tree-rightLink > .itemContent::before {display: block !important; position: absolute; content: ""; z-index: 0; height: 2px; top: 16px; left: -10%; width: 10%;} .Tree-hasRightLink ul::before, .Tree li.Tree-rightLink > .itemContent::before {background-color: rgb(29, 144, 255);} .Tree-hasRightLink:not(.Tree-prevRightLink) ul::before {background: linear-gradient(rgb(29, 144, 255) 70%, rgb(255, 255, 255)) !important; height: calc(100% + 10px);} .Tree li.Tree-hasRightLink::after, .Tree li.Tree-hasRightLink::before {background-color: rgb(0, 153, 255);} .Tree ul > li > ul > li::after, .Tree ul > li > ul > li::before {background-color: rgb(204, 204, 204);} .Tree ul:not([class]) li.Tree-rightLink::before {height: 62px; top: -36px;} .Tree-rightLink::before {content: ""; width: 2px; height: 100px; background-color: red; position: absolute; left: -100px; top: 0px;} .Tree .Tree-rightLink div.itemContent::after {content: ""; display: block; height: calc(100% + 100px); width: 2px; background-color: rgb(29, 144, 255); position: absolute; bottom: 36px; left: calc(-10% - 1px);} .Tree-prevRightLink.Tree-hasRightLink::before {content: ""; height: calc(100% + 25px) !important;} .Tree-prevRightLink.Tree-hasRightLink + .Tree-prevRightLink.Tree-hasRightLink::before {height: 0px !important;} .Page::after, .Page::before {display: table; content: "";} .Page::after {clear: both;} .Page-info::after, .Page-info::before {display: table; content: "";} .Page-info::after {clear: both;} .Page-navList li a:hover {color: rgb(0, 0, 0);} .Page-navList li.is-active .Page-navSublist a:hover {color: rgb(0, 0, 0); text-decoration: underline;} .Page-navList > li.is-active:first-child {border-top: 1px solid rgb(238, 238, 238);} .Page-navSublist li:last-child {border-bottom: 0px;} .Page-navSublist > li.is-active:first-child {border-top: 1px solid rgb(238, 238, 238);} .Page-document .Page-downloads li:first-child {padding-top: 0.5rem;} .Page--hasNav > .Grid > .Grid-item:first-child {box-shadow: rgb(238, 238, 238) 1px 0px 0px 0px !important;} .Page-navStatus::after {line-height: 1; content: "+"; font-size: 18px;} .Page-nav--mf .Page-navTitle .Page-navStatus::after {content: ""; width: 0.45em; height: 0.45em; border-style: solid; border-top-color: rgb(0, 61, 165); border-right-color: rgb(0, 61, 165); border-bottom-color: rgb(0, 61, 165); border-image: none; border-left-color: inherit; position: relative; top: -6px; display: inline-block; margin-top: 0px; border-width: 0px 0.125em 0.125em 0px; transform: rotate(45deg);} .Page-nav--mf .Page-navTitle.collapsed .Page-navStatus::after {top: -3px;} .Breadcrumb::after, .Breadcrumb::before {display: table; content: "";} .Breadcrumb::after {clear: both;} .Breadcrumb a:hover {text-decoration: underline;} .Breadcrumb ul li::before {padding-right: 12px; color: rgb(85, 85, 85); content: "»";} .Breadcrumb ul li:first-child::before {display: none;} .Breadcrumb ul li:first-child {padding-left: 0px; margin-left: 0px;} .Search::after, .Search::before {display: table; content: "";} .Search::after {clear: both;} .Header-top::after, .Header-top::before {display: table; content: "";} .Header-top::after {clear: both;} .Header-site .Header-mainLink:focus, .Header-site .Header-mainLink:hover {text-decoration: none;} .Header-parent .Header-arrow::after {left: 0px; top: 0px; transform: rotate(90deg);} .Header-parent.open .Header-arrow::after {top: -5px; transform: rotate(-90deg);} .Header-body::after, .Header-body::before {display: table; content: "";} .Header-body::after {clear: both;} .Header-search .Search-input:focus {outline: orange solid 3px; outline-offset: 3px;} .Header-arrow::after {content: ""; width: 0px; height: 0px; border-width: 0.2825em; border-style: solid; border-top: 0.2825em solid transparent; border-right: 0.2825em solid transparent; border-bottom: 0.2825em solid transparent; border-image: none; border-left-color: inherit; position: relative; left: 3px; top: -2px; display: inline-block; margin-top: 0.64481em; transform: rotate(0deg);} .Header-lang .Dropdown:focus .Dropdown-menu, .Header-lang .Dropdown:hover .Dropdown-menu {display: none;} .Header-lang .Dropdown-menu::before {content: ""; position: absolute; top: -9px; left: calc(100% - 34px); display: inline-block; height: 0px; width: 0px; border-left: 9px solid transparent; border-right: 9px solid transparent; border-bottom: 9px solid rgb(204, 204, 204);} .Header-lang .Dropdown-menu::after {content: ""; position: absolute; top: -8px; left: calc(100% - 33px); display: inline-block; height: 0px; width: 0px; border-left: 8px solid transparent; border-right: 8px solid transparent; border-bottom: 8px solid rgb(255, 255, 255);} .Header-langLink:hover {text-decoration: underline;} .Header-langLink::after {content: ""; width: 0px; height: 0px; border-width: 0.2825em; border-style: solid; border-top: 0.2825em solid transparent; border-right: 0.2825em solid transparent; border-bottom: 0.2825em solid transparent; border-image: none; border-left-color: inherit; position: relative; top: 0px; display: inline-block; margin-top: 0.64481em; transform: rotate(90deg); margin-left: 0.5rem;} .User-dropdown ul > li:first-child > * {border-top: 0px;} .User-dropdown li:first-child a {border-top: 0px;} .User-dropdown .close-dropdown-user:hover {cursor: pointer; background-color: rgb(243, 243, 243);} .User-dropdown .Dropdown-links a:hover {text-decoration: underline; background-color: rgb(243, 243, 243);} .Header--catalogo .Header-logo a:hover .Logo-text {text-decoration: underline;} .Header-logo a:hover {text-decoration: none;} .Nav::after, .Nav::before {display: table; content: "";} .Nav::after {clear: both;} .Nav a, .Nav a:hover {text-decoration: none; color: rgb(255, 255, 255);} .Nav-list > li > a:hover {transition-delay: 0.35s;} .Nav-subnav ul li:last-child {border-bottom: 0px;} .Nav-subnav ul li:last-child a {border-bottom-left-radius: 2px; border-bottom-right-radius: 2px;} .Nav-subnav a:focus, .Nav-subnav a:hover {text-decoration: none; background-color: rgb(0, 61, 165);} .Nav-item:focus-within div.Nav-subnav {left: 0px; opacity: 1;} .Nav-list > li.hover .Nav-subnav, .Nav-list > li:hover .Nav-subnav, .Nav-list > li > a:focus + .Nav-subnav, .Nav-list > li > a:hover + .Nav-subnav {left: 0px; opacity: 1;} .Nav-list > li:hover .Nav-subnav, .Nav-list > li > a:focus + .Nav-subnav, .Nav-list > li > a:hover + .Nav-subnav {transition-delay: 0.35s;} .Nav--minisitio a, .Nav--minisitio a:hover {color: rgb(0, 61, 165);} .Nav--minisitio a:focus {background-color: rgb(247, 247, 247);} .Menu-root .has-submenu > span::after {content: ""; width: 1rem; height: 1rem; background: transparent url("'+this.urlBase+'/img/arrow.svg") 50% center no-repeat; display: block; float: right; position: relative; top: 8px;} .Menu-item.has-submenu.is-open > span::after {background-image: url("'+this.urlBase+'/img/arrow-black.svg");} .Menu-item.has-submenu > span::after {width: 1.45rem; height: 1.45rem; background: transparent url("'+this.urlBase+'/img/plus.svg") 50% center no-repeat; top: 2px;} .Menu-item.has-submenu > span.is-open::after {background-image: url("'+this.urlBase+'/img/minus.svg");} .Menu-subNav li.has-submenu::after {content: ""; width: 0.75rem; height: 0.75rem; background: transparent url("'+this.urlBase+'/img/arrow-black.svg") 50% center no-repeat; display: block; float: right; position: relative; top: 8px;} .Menu-badge > a:hover span {background-image: url("'+this.urlBase+'/img/arrow.svg");} .Menu-badge > a:hover {text-decoration: none; background-color: rgb(0, 61, 165); color: rgb(255, 255, 255);} .Menu-link:hover {text-decoration: none;} .ParentNav-logo a:focus, .ParentNav-logo a:hover {text-decoration: none;} .ParentNav-body .has-submenu > span::after {content: ""; width: 1rem; height: 1rem; background: transparent url("'+this.urlBase+'/img/arrow.svg") 50% center no-repeat; display: block; float: right; position: relative; top: 8px;} .ParentNav-item.has-submenu.is-open > span::after {background-image: url("'+this.urlBase+'/img/arrow-black.svg");} body::after {opacity: 0; content: ""; transition: opacity 0.5s ease-in-out;} body.has-menu::after {content: ""; position: fixed; inset: 0px; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 9998;} .Footer a:hover {text-decoration: none;} .Footer-logo a, .Footer-logo a:hover {text-decoration: none;} .Live--now::before {content: " "; display: inline-block; border-radius: 50%; background-color: rgb(178, 34, 34); width: 10px; height: 10px; margin-right: 0.625em; animation: 1.25s linear infinite c;} .Group--fondo .Grid-item > .Module-item:last-child .Box {margin-bottom: 0px;} .modal-header::after, .modal-header::before {display: table; content: "";} .modal-header::after {clear: both;} .modal-footer::after, .modal-footer::before {display: table; content: "";} .modal-footer::after {clear: both;} .modal::before {height: 100%; margin-right: -4px; content: "";} .modal-dialog, .modal::before {display: inline-block; vertical-align: middle;} .modal-content .modal-body:last-child {border-bottom: medium;} .Filters .Form-legend::before, .Filters .Form legend::before {display: block; height: 1px; width: 100%; background-color: rgb(238, 238, 238); content: ""; top: 50%; position: absolute; z-index: 1;} .Form-widget:disabled {opacity: 0.35; background-color: rgb(238, 238, 238);} .Form-widget:focus {border-color: orange !important; outline: none; box-shadow: rgba(255, 190, 70, 0.075) 0px 1px 2px inset, rgba(255, 190, 70, 0.3) 0px 0px 0px 0.2em;} .Form-widget--read > :first-child {margin-bottom: 0px;} .Form-actions > :last-child {justify-self: flex-end;} .Form--filters > .Form-group:last-child {padding-top: 1.15rem;} ::placeholder {color: rgb(85, 85, 85); opacity: 1; font-style: italic;} ::placeholder {color: rgb(85, 85, 85); opacity: 1; font-style: italic;} .Suscribe::after, .Suscribe::before {display: table; content: "";} .Suscribe::after {clear: both;} .Suscribe-button:hover {background-color: rgb(252, 206, 38);} .Suscribe-button:active {box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 12px inset;} .Suscribe-button:focus {} .Index-nav li:last-child {border-bottom: 0px;} .Index-nav li.is-active > a:hover {text-decoration: none;} .Steps-item:hover {text-decoration: none;} .Steps-item:first-child {border-radius: 8px 0px 0px 8px;} .Steps-item:last-child {border-radius: 0px 8px 8px 0px;} .Steps-item:last-child::after {display: none;} .Steps-item::after {content: ""; position: absolute; width: 68px; height: 68px; background-color: rgb(243, 243, 243); top: 2px; right: -20px; transform: rotate(45deg) skew(10deg, 10deg); border-right: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204); z-index: 1;} .Steps-item.is-active, .Steps-item.is-active::after {background-color: rgb(0, 61, 165);} .Steps-item.is-finished, .Steps-item.is-finished::after {background-color: rgb(243, 243, 243);} .Steps-inner > .Steps-item:first-child {padding-left: 1.125em;} .Rating-control:first-of-type:focus ~ .Rating-item:nth-of-type(1)::before, .Rating-control:nth-of-type(2):focus ~ .Rating-item:nth-of-type(2)::before, .Rating-control:nth-of-type(3):focus ~ .Rating-item:nth-of-type(3)::before, .Rating-control:nth-of-type(4):focus ~ .Rating-item:nth-of-type(4)::before, .Rating-control:nth-of-type(5):focus ~ .Rating-item:nth-of-type(5)::before {content: ""; outline: rgb(255, 193, 7) solid 3px; outline-offset: 0.08rem; position: absolute; inset: -0.15em 0px;} .Rating-control:first-of-type:checked ~ .Rating-item:nth-of-type(1), .Rating-control:nth-of-type(2):checked ~ .Rating-item:nth-of-type(-n+2), .Rating-control:nth-of-type(3):checked ~ .Rating-item:nth-of-type(-n+3), .Rating-control:nth-of-type(4):checked ~ .Rating-item:nth-of-type(-n+4), .Rating-control:nth-of-type(5):checked ~ .Rating-item:nth-of-type(-n+5), .Rating:hover {color: rgb(255, 193, 7);} .Rating-item:hover ~ .Rating-item {color: rgb(238, 238, 238);} .Status::before {content: " "; display: inline-block; border-radius: 50%; background-color: rgb(187, 187, 187); width: 10px; height: 10px; margin-bottom: 1px; margin-right: 0.4em;} .Status--activo::before, .Status--verde::before {background-color: rgb(39, 158, 63);} .Status--amarillo::before, .Status-desactualizado::before {background-color: rgb(255, 209, 95);} .Status--discontinuado::before, .Status--rojo::before {background-color: rgb(204, 51, 51);} .Status--enlaceRoto::before {background: url("'+this.urlBase+'/img/icn-plus-sm.png") 0% 0% / cover; width: 11px; height: 11px; transform: rotate(-45deg); margin-bottom: 0px;} .Header--slim .Container::after, .Header--slim .Container::before {display: none;} .Header--slim .Header-top::after, .Header--slim .Header-top::before {display: none;} .Header--slim .Header-top .Header-site .Brand .Brand-text:hover {text-decoration: underline;} .Header--slim .Site-menu a:hover {text-decoration: none;} .Header--slim .Site-menu .Nav-site > ul > li > a.active, .Header--slim .Site-menu .Nav-site > ul > li > a:hover {background-color: rgb(229, 229, 229);} .Header--slim .Site-menu .Nav-site > ul > li > a:hover {text-decoration: underline;} .Header--slim .Site-menu .Nav-site > ul > li > a.w-sub::after {transform: rotate(45deg); transform-origin: center center 0px; margin-top: -1px;} .Header--slim .Site-menu .Nav-site > ul > li > a.w-sub.active::after, .Header--slim .Site-menu .Nav-site > ul > li > a.w-sub::after {content: ""; width: 6px !important; height: 6px !important; opacity: 1 !important; border-style: solid; border-color: rgb(0, 61, 165); border-image: none; border-width: 0px 1px 1px 0px; transition: none !important;} .Header--slim .Site-menu .Nav-site > ul > li > a.w-sub.active::after {transform: rotate(-135deg); transform-origin: center center 0px; margin-top: 5px;} .Header--slim .Site-menu .Nav-site .subnav.show ul li a:hover {background-color: rgb(242, 242, 242); text-decoration: underline;} .Header--slim .Site-menu .Nav-site .subnav.show ul li:first-child a {padding-top: 1rem;} .Header--slim .Site-menu .Nav-site .subnav.show ul li:last-child a {padding-bottom: 1rem;} .Header--slim .User-dropdown .User-data .Login-method:last-child {margin-bottom: 0px;} .Header--slim .Header-body .user-access a.link-user-access:hover, .Header--slim .Header-body .user-access button.link-user-access:hover {background: rgb(243, 243, 243); text-decoration: underline;} .Header--slim .Nav--flex::after, .Header--slim .Nav--flex::before {display: none;} .Header--slim .Nav--flex .Nav a:hover, .Header--slim .Nav--flex a {color: rgb(0, 61, 165);} .Header--slim .Nav--flex > ul > li > a:focus, .Header--slim .Nav--flex > ul > li > a:hover {background-color: rgb(243, 243, 243); border-color: rgb(243, 243, 243); z-index: 2;} .Header--slim .Nav--flex > ul > li > a.w-sub::after {content: ""; width: 0px; height: 0px; border-style: solid; border-top-color: rgb(0, 61, 165); border-right-color: rgb(0, 61, 165); border-bottom-color: rgb(0, 61, 165); border-image: none; border-left-color: inherit; position: relative; top: 0.25rem; display: inline-block; margin-top: 0px; border-width: 0px 0.1rem 0.1rem 0px; transform: rotate(45deg); opacity: 0; transition: 0.2s linear;} .Header--slim .Nav--flex > ul > li > a.w-sub.active:focus::after, .Header--slim .Nav--flex > ul > li > a.w-sub:focus::after, .Header--slim .Nav--flex > ul > li > a.w-sub:hover::after {width: 6px; height: 6px; opacity: 1; transition: 0.2s linear;} .Header--slim .Nav--flex > ul > li > a.active.w-sub:focus::after, .Header--slim .Nav--flex > ul > li > a.active.w-sub:hover::after {width: 1px; height: 1px; opacity: 0; transition: 0.2s linear;} .Header--slim .Nav--flex > ul > li div.subnav > ul > li > a:focus, .Header--slim .Nav--flex > ul > li div.subnav > ul > li > a:hover {background-color: rgb(4, 47, 98);} .Header--slim .Nav--flex > ul > li div.subnav > ul > li:first-child > a {padding-top: 16px;} .Header--slim .Nav--flex > ul > li div.subnav > ul > li:last-child > a {padding-bottom: 16px;} .Header--slim .searchButtonWrap-md .Button:hover {color: rgb(255, 255, 255);} .Header--slim .searchButtonWrap-md .Button:hover svg path {fill: rgb(255, 255, 255); transition: fill 0.35s;} .Header--slim .Header-search .search-form .Search .Search-input:focus {outline-offset: 0.05rem;} .gubuy-mega-menu .body-mega-menu .user-gubuy .link-gubuy-access:hover {border-radius: 4px; background-color: rgb(4, 47, 98); transition: background-color 0.375s;} .Header--slim.Header--blue .Header-logo a:hover .Logo-text {text-decoration: underline;} .Header--slim.Header--blue .Nav--flex a, .Header--slim.Header--blue .Nav--flex a:hover {color: rgb(255, 255, 255);} .Header--slim.Header--blue .Nav--flex > ul > li > a.w-sub::after {border-style: solid; border-color: rgb(255, 255, 255); border-image: none; border-width: 0px 0.1rem 0.1rem 0px;} .Header--slim.Header--blue .Nav--flex > ul > li > a.active, .Header--slim.Header--blue .Nav--flex > ul > li > a:focus, .Header--slim.Header--blue .Nav--flex > ul > li > a:hover {background-color: rgb(4, 47, 98); border-color: rgb(4, 47, 98);} .Header--slim.Header--blue .Nav--flex > ul > li div.subnav > ul > li > a:focus, .Header--slim.Header--blue .Nav--flex > ul > li div.subnav > ul > li > a:hover {background-color: rgb(0, 61, 165);} .Header--slim.Header--blue .searchButtonWrap-md .Button:hover {background-color: rgb(4, 47, 98);} .Header--slim.Header--visualizador .Nav--flex a, .Header--slim.Header--visualizador .Nav a:hover {color: rgb(255, 255, 255);} .Header--slim.Header--gubUy .Header-body .user-access .link-user-access:hover {background-color: rgb(4, 47, 98);} .Box:focus {outline: orange solid 3px !important; outline-offset: 0.05rem;} .Box::after, .Box::before {display: table; content: "";} .Box::after {clear: both;} .Box-header::after, .Box-header::before {display: table; content: "";} .Box-header::after {clear: both;} .Box-footer > a:hover {text-decoration: none;} .Box-gridList .Box-title a:hover {text-decoration: underline;} .Box-gridList a:hover .Box-title {text-decoration: underline;} .Box-gridList > li:last-child {margin-bottom: 1rem;} .Box-mediaList > .Media:first-child, .Box-mediaList li:first-child {padding-top: 0.25rem; border-top: 0px;} .Box--acceso:focus, .Box--acceso:focus .Box-info, .Box--acceso:hover, .Box--acceso:hover .Box-info {text-decoration: none;} .Box--acceso:focus .Box-title, .Box--acceso:hover .Box-title {text-decoration: underline;} .Box--mf.Box--acceso .Box-title:last-child {margin-bottom: 0px;} .Box--mf.Box--acceso.Box--accesoCentrado .Box-title:last-child {margin-top: 0px;} .Box--atencionCiudadana .nav-tabs li > a::after {content: ""; display: block; width: 100%; border-bottom: 0.2rem solid rgb(68, 68, 68); position: absolute; border-radius: 0.1rem; bottom: -2px; transform: scaleX(0) scaleZ(1); transform-origin: center center 0px; transition: transform 0.2s ease-out, transform 0.2s ease-out;} .Box--atencionCiudadana .nav-tabs li.active > a::after {transform: scale(1) scaleZ(1);} .Box--atencionCiudadana .Flag-body > div:last-child {margin-bottom: 0px;} .Box--event .Box-subtitle:empty {display: none;} .Box--destacado1 a:hover {text-decoration: none;} .Box--destacado1.Box--colorWhite a:hover {text-decoration: underline;} .Box--destacado1 .Box-info:empty, .Box--destacado1 .Box-text:empty {display: none;} .Box--destacado2 .Box-title:hover {text-decoration: none;} .Box--destacado2.Box--solid .Box-overlay :last-child {margin-bottom: 0px;} .Box--destacado2.Box--solid .Box-overlay .Box-title:hover {text-decoration: underline;} .Box--destacado3 .Box-info:empty {display: none;} .Box--destacado3:hover {text-decoration: none;} .Box--destacado3:hover .Box-title {text-decoration: underline;} .Box--destacado3.Box--mf .Box-title::before {height: 102%; top: -2px;} .Box--destacado3.Box--mf:hover .Box-title {text-decoration: none;} .Box--destacado3.Box--mf a.Box-title:hover {text-decoration: underline;} .Box--destacado4 a:focus .Box-title, .Box--destacado4 a:hover .Box-title {text-decoration: underline;} .Box--destacado4 .Box-subtitle:empty {display: none;} a.Box--mf.Box--destacado4:focus, a.Box--mf.Box--destacado4:hover {text-decoration: none;} a.Box--mf.Box--destacado4:focus .Box-title, a.Box--mf.Box--destacado4:hover .Box-title {text-decoration: underline;} .Box--mf.Box--listadoEnlaces .u-bullet li::before {width: 0.5em; height: 0.5em; content: ""; border-style: solid; border-color: rgb(85, 85, 85); border-image: none; border-width: 0px 0.2em 0.2em 0px; transform: rotate(-45deg); top: 0.6em; left: -1.625em;} .Box--listadoAccesos .Box-title:last-child {margin-bottom: 0px;} .Box--listadoDescargas.Box--mf .Box-mediaList > .Media:first-child, .Box--listadoDescargas.Box--mf .Box-mediaList li:first-child {padding-top: 0.5rem;} .Box--listadoTramites.Box--mf .Box-body:last-child > .Box-gridList li:last-child {margin-bottom: 1.25rem;} .Box--navLocal ul.Page-navList li:last-child {border-bottom: medium;} .Box--timeline .List > li:first-child {padding-top: 0.25rem;} .Box-timelineNav a:hover {text-decoration: underline; box-shadow: rgb(221, 221, 221) 1px 1px 1px, rgb(221, 221, 221) 0px 0px 1px;} .Hero-body .Box-title a:hover {text-decoration: none;} .Box--banner.rectangle-banner .Box-image::after {content: ""; display: block; width: 100%; height: 60%; left: 0px; top: 0px; position: absolute; background: linear-gradient(rgba(0, 0, 0, 0.75), transparent); z-index: 1;} .Box--banner.full-banner .Box-image::after {content: ""; display: block; width: 50%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(90deg, rgba(0, 0, 0, 0.65), transparent); z-index: 1;} .Box--stats .Box-value:hover {text-decoration: none;} .Box--topic .Box-header::before {content: ""; display: block; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 2;} .Box--topic .Box-header:hover img {transform: scale(1.15);} .Box--topic .Box-linkHeader .Box-title:hover {text-decoration: none;} .Totales-box .Grid-item:not(:last-child) {border-right: 1px solid rgba(255, 255, 255, 0.2);} .Totales-box .Grid-item:not(:first-child) {padding-left: 2em;} .Table--collapse td:not(:first-child) {text-align: right;} .Group--color2 .Box--microaccesos a:focus, .Group--color2 .Box--microaccesos a:hover {text-decoration: none;} .Box--galeria .Carousel .owl-dots .owl-dot:hover span {background: rgb(187, 187, 187); height: 12px; width: 12px;} .Group .Module:last-child {margin-bottom: 1rem;} .Box--destacadoFondo .Box-overlay .Box .Box-actions:empty {display: none !important;} .Box-bgVideoControl button.Button--play .play-pause::after {content: ""; height: 100%; width: 2px; background-color: rgb(255, 255, 255); position: absolute; left: 1px; top: 0px;} .Box-bgVideoControl button.Button--play .play-pause::before {content: ""; height: 100%; width: 2px; background-color: rgb(255, 255, 255); position: absolute; right: 1px; top: 0px;} .Box-bgVideoControl button.Button--play.is-active .play-pause::after {background-color: transparent; width: 0px; height: 0px; border-top: 6px solid transparent; border-bottom: 6px solid transparent; border-left: 10px solid rgb(255, 255, 255);} .Box-bgVideoControl button.Button--play.is-active .play-pause::before {display: none;} .Box-name::before {content: ""; display: inline-block; width: 5px; height: 1.5em; background-color: transparent; position: absolute; top: 0.1em; left: -1.5rem; border-top-right-radius: 3px; border-bottom-right-radius: 3px;} .Box--color1 .Box-name::before {background-color: rgb(0, 61, 165);} .Box--color2 .Box-name::before {background-color: rgb(0, 153, 255);} .Box--color3 .Box-name::before {background-color: rgb(71, 10, 104);} .Box--color4 .Box-name::before {background-color: rgb(147, 17, 126);} .Box--color5 .Box-name::before {background-color: rgb(255, 105, 0);} .Box--color6 .Box-name::before {background-color: red;} .Box--color7 .Box-name::before {background-color: rgb(40, 167, 69);} .Box--color8 .Box-name::before {background-color: rgb(0, 125, 138);} .Box--color9 .Box-name::before {background-color: rgb(43, 92, 168);} .Box--color10 .Box-name::before {background-color: rgb(243, 163, 3);} .Box--color11 .Box-name::before {background-color: rgb(130, 54, 140);} .Box--color12 .Box-name::before {background-color: rgb(119, 138, 21);} .Box--destacado3 .Box-title::before {content: ""; display: inline-block; width: 5px; height: 1.5em; background-color: transparent; position: absolute; top: 1.2em; left: 0px; border-top-right-radius: 3px; border-bottom-right-radius: 3px;} .Box--destacado3.Box--color1 .Box-title::before {background-color: rgb(0, 61, 165);} .Box--destacado3.Box--color2 .Box-title::before {background-color: rgb(0, 153, 255);} .Box--destacado3.Box--color3 .Box-title::before {background-color: rgb(71, 10, 104);} .Box--destacado3.Box--color4 .Box-title::before {background-color: rgb(147, 17, 126);} .Box--destacado3.Box--color5 .Box-title::before {background-color: rgb(255, 105, 0);} .Box--destacado3.Box--color6 .Box-title::before {background-color: red;} .Box--destacado3.Box--color7 .Box-title::before {background-color: rgb(40, 167, 69);} .Box--destacado3.Box--color8 .Box-title::before {background-color: rgb(0, 125, 138);} .Box--destacado3.Box--color9 .Box-title::before {background-color: rgb(43, 92, 168);} .Box--destacado3.Box--color10 .Box-title::before {background-color: rgb(243, 163, 3);} .Box--destacado3.Box--color11 .Box-title::before {background-color: rgb(130, 54, 140);} .Box--destacado3.Box--color12 .Box-title::before {background-color: rgb(119, 138, 21);} .Box--listadoEnlaces.Box--mf.Box--color1 .u-bullet li::before {border-color: rgb(0, 61, 165);} .Box--listadoEnlaces.Box--mf.Box--color2 .u-bullet li::before {border-color: rgb(0, 153, 255);} .Box--listadoEnlaces.Box--mf.Box--color3 .u-bullet li::before {border-color: rgb(71, 10, 104);} .Box--listadoEnlaces.Box--mf.Box--color4 .u-bullet li::before {border-color: rgb(147, 17, 126);} .Box--listadoEnlaces.Box--mf.Box--color5 .u-bullet li::before {border-color: rgb(255, 105, 0);} .Box--listadoEnlaces.Box--mf.Box--color6 .u-bullet li::before {border-color: red;} .Box--listadoEnlaces.Box--mf.Box--color7 .u-bullet li::before {border-color: rgb(40, 167, 69);} .Box--listadoEnlaces.Box--mf.Box--color8 .u-bullet li::before {border-color: rgb(0, 125, 138);} .Box--listadoAccesos.Box--color1 .Flag-body .Box-title::after {border-color: rgb(0, 61, 165);} .Box--listadoAccesos.Box--color2 .Flag-body .Box-title::after {border-color: rgb(0, 153, 255);} .Box--listadoAccesos.Box--color3 .Flag-body .Box-title::after {border-color: rgb(71, 10, 104);} .Box--listadoAccesos.Box--color4 .Flag-body .Box-title::after {border-color: rgb(147, 17, 126);} .Box--listadoAccesos.Box--color5 .Flag-body .Box-title::after {border-color: rgb(255, 105, 0);} .Box--listadoAccesos.Box--color6 .Flag-body .Box-title::after {border-color: red;} .Box--listadoAccesos.Box--color7 .Flag-body .Box-title::after {border-color: rgb(40, 167, 69);} .Box--listadoAccesos.Box--color8 .Flag-body .Box-title::after {border-color: rgb(0, 125, 138);} .Box--sinae .Box-name::before {display: none;} .u-cfx::after, .u-cfx::before {display: table; content: "";} .u-cfx::after {clear: both;} .u-bullet li::before {content: "•"; font-size: 0.75em; position: absolute; top: 0.25em; left: -1.25em;} .u-alternativeLink:hover {text-decoration: none;} .u-outerLink::after {content: ""; padding-left: 15px; background: url("'+this.urlBase+'/img/outerLink.svg") 0px 0px / 16px no-repeat; margin-left: 3px;} .u-outerLink--white::after {background-image: url("'+this.urlBase+'/img/outerLink-white.svg");} .u-outerLink--black::after {background-image: url("'+this.urlBase+'/img/outerLink-black.svg");} ';
		if (typeof switchesCssText != "undefined") {
			cssText += switchesCssText;
		}
		let style = document.createElement("style");
		style.type = "text/css";
		style.textContent = cssText;
		if (this.hasShadow) {
			shadow.appendChild(style);
		} else {
			this.appendChild(style);
		}
		/* Fonts need to be added to document head also in order to work properly */
		let sheet = window.document.styleSheets[0];
		if (typeof sheet == "undefined") {
			sheet = new CSSStyleSheet();
			document.adoptedStyleSheets = [sheet];
		}
		let rule;
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Light"),url('+this.urlBase+'/fonts/OpenSans-Light.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Light.woff) format("woff");font-weight:300;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Light Italic"),url('+this.urlBase+'/fonts/OpenSans-LightItalic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-LightItalic.woff) format("woff");font-weight:300;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Regular"),url('+this.urlBase+'/fonts/OpenSans-Regular.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Regular.woff) format("woff");font-weight:400;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Italic"),url('+this.urlBase+'/fonts/OpenSans-Italic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Italic.woff) format("woff");font-weight:400;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans SemiBold"),url('+this.urlBase+'/fonts/OpenSans-Semibold.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Semibold.woff) format("woff");font-weight:500;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans SemiBold Italic"),url('+this.urlBase+'/fonts/OpenSans-SemiboldItalic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-SemiboldItalic.woff) format("woff");font-weight:500;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans SemiBold"),url('+this.urlBase+'/fonts/OpenSans-Semibold.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Semibold.woff) format("woff");font-weight:600;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans SemiBold Italic"),url('+this.urlBase+'/fonts/OpenSans-SemiboldItalic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-SemiboldItalic.woff) format("woff");font-weight:600;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Bold"),url('+this.urlBase+'/fonts/OpenSans-Bold.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Bold.woff) format("woff");font-weight:700;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Bold Italic"),url('+this.urlBase+'/fonts/OpenSans-BoldItalic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-BoldItalic.woff) format("woff");font-weight:700;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}



		/* instance of boton-leer */
		let comp_boton_leer;
		if (this.getAttribute("no-subcomps") != "true") {
			comp_boton_leer = document.createElement("comp-boton-leer");
			if (this.instanceVariantDefaults["COMP-BOTON-LEER"]) {		 // sets the default variant for childs
				comp_boton_leer.addEventListener("load", () => {
					comp_boton_leer.replaceDefaults(this.instanceVariantDefaults["COMP-BOTON-LEER"]["children"]);
				});
			}
			compId = wcf_allInstances.getUniqueInstanceId(tagId+".comp-boton-leer");
			comp_boton_leer.setAttribute("id",compId);
			comp_boton_leer.setAttribute("data-wcfid","comp_boton_leer");
			comp_boton_leer.setAttribute("name","comp_boton_leer");
			div.appendChild(comp_boton_leer);
		}


		/* instance of boton-leer */
		let comp_boton_leer_1;
		if (this.getAttribute("no-subcomps") != "true") {
			comp_boton_leer_1 = document.createElement("comp-boton-leer");
			if (this.instanceVariantDefaults["COMP-BOTON-LEER"]) {		 // sets the default variant for childs
				comp_boton_leer_1.addEventListener("load", () => {
					comp_boton_leer_1.replaceDefaults(this.instanceVariantDefaults["COMP-BOTON-LEER"]["children"]);
				});
			}
			compId = wcf_allInstances.getUniqueInstanceId(tagId+".comp-boton-leer");
			comp_boton_leer_1.setAttribute("id",compId);
			comp_boton_leer_1.setAttribute("data-wcfid","comp_boton_leer_1");
			comp_boton_leer_1.setAttribute("name","comp_boton_leer_1");
			div.appendChild(comp_boton_leer_1);
		}


		/* instance of boton-leer */
		let comp_boton_leer_2;
		if (this.getAttribute("no-subcomps") != "true") {
			comp_boton_leer_2 = document.createElement("comp-boton-leer");
			if (this.instanceVariantDefaults["COMP-BOTON-LEER"]) {		 // sets the default variant for childs
				comp_boton_leer_2.addEventListener("load", () => {
					comp_boton_leer_2.replaceDefaults(this.instanceVariantDefaults["COMP-BOTON-LEER"]["children"]);
				});
			}
			compId = wcf_allInstances.getUniqueInstanceId(tagId+".comp-boton-leer");
			comp_boton_leer_2.setAttribute("id",compId);
			comp_boton_leer_2.setAttribute("data-wcfid","comp_boton_leer_2");
			comp_boton_leer_2.setAttribute("name","comp_boton_leer_2");
			div.appendChild(comp_boton_leer_2);
		}


		/* if attribute is true, add declared instances AFTER all is loaded */
		if (this.getAttribute("addDeclaredInstances") != "false") {
			addEventListener("load", (event) => {
				wcf_allInstances.addDeclaredInstances(tagId);
			});
		}

		/* Set the rigth field ids, values and labels on load */
		wcf_allInstances.setFieldsOnLoad(tagId);

		/* if it's root and has variat defaults, set them */
		if (this.hasShadow && this.instanceVariantDefaults) {
			wcf_allInstances.setInstanceVariantDefaults(tagId, this.instanceVariantDefaults);
		}

		/* if component has custom JS, it goes here */
		comp_boton_leer_1.style.display="none";
		comp_boton_leer_2.style.display="none";
		comp_boton_leer_1.setAttribute("button", "Pausar");
		comp_boton_leer_2.setAttribute("button", "Reiniciar");
		
		comp_boton_leer.onclick = ()=> {
			comp_boton_leer.style.display = "none";
			comp_boton_leer_1.removeAttribute("style");
			comp_boton_leer_2.removeAttribute("style");
		}

	}

	mutationObserverCallback(mutationList, observer) {
		for (const mutation of mutationList) {
			wcf_allInstances.attrObserveCallback(mutation.target, mutation.attributeName, mutation.oldValue, mutation.target.getAttribute(mutation.attributeName));
		}
	}
}
customElements.define("comp-texto-a-voz", texto_a_voz);


class boton_leer extends HTMLElement {
	static attributes = {};
	urlBase = ".";
	switches = {boton:{wcfid:"button", values:[]}};
	hasShadow;
	instanceVariantDefaults = {};

	/* Component form data */
	static formAssociated = true;
	formFields = {};
	formData;
	attachedInternals;
	labelChanges= {};

	constructor() {
		super();
		this.urlBase = wcf_allInstances.actualUrlBase("./js/texto-a-voz.js");
	}

	replaceDefaults(newDefaults) {
		this.instanceVariantDefaults = newDefaults;
	}

	connectedCallback() {
		let compId;
		let shadow;

		if (this.getRootNode().host) {
			this.hasShadow = false;
			/* get the host attached form */
			this.attachedInternals = this.getRootNode().host.attachedInternals;
		} else {
			this.hasShadow = true;
			shadow = this.attachShadow({ mode: "open", delegatesFocus: true});
			/* Attach the web component to the containing form */
			this.attachedInternals = this.attachInternals();
		}

		let inputName;
		let labelForId, labelForIdOri;
		this.formData = new FormData();				// Form data is fullfilled onLoad from attachedInternals  

		/* add the component to the global component list */
		const tagIdOri = this.getAttribute("id");
		let tagIdValue;
		if (tagIdOri) {
			tagIdValue = wcf_allInstances.getUniqueInstanceId(tagIdOri);
		} else {
			tagIdValue = wcf_allInstances.getUniqueInstanceId("compInstance");
		}
		const tagId = tagIdValue;
		wcf_allInstances.addInstance(tagId, this, this.hasShadow);
		wcf_allInstances.addProp(tagId, "oriComp", "boton-leer");
		wcf_allInstances.allCompsIds[tagId] = {};
		this.setAttribute("id",tagId);


		/* Add the attributes mutation observer */
		this.mutationObserver = new MutationObserver(this.mutationObserverCallback);
		this.mutationObserver.observe(this, {attributes: true, attributeOldValue: true});

		const button = document.createElement("button");
		button.setAttribute("data-component-id", "boton-leer");
		button.setAttribute("class", "Button Button--small button");
		button.setAttribute("data-css-switch", "boton")
		button.setAttribute("data-wcfid", "button");
		button.setAttribute("original-id", "node_1");
		button.setAttribute("data-wcfid", "button");
		wcf_allInstances.allCompsIds[tagId]["button"] = button;


		/* get the parameter if exists */
		var buttontext = this.getAttribute("button");
		button.textContent = buttontext;
		if (!buttontext) {
			button.textContent = "Escuchar contenido"
		}

		/* Register the attribute for the observer */
		wcf_allInstances.attrObserveRegister(tagId,"button", {"elem": button, "type":"button", "wcfAttr": true}, false)

		/* Add the observer for the css switch */
		wcf_allInstances.attrObserveRegister(tagId, "boton", {}, wcf_allInstances.switchObserver);
		if (!this.hasShadow) {
			let hostTagId = this.getRootNode().host.getAttribute("id");
			if (!wcf_allInstances.isSwitchRegistered(hostTagId, "boton")) {
				wcf_allInstances.switchRegister(hostTagId, "boton");
				wcf_allInstances.attrObserveRegister(hostTagId, "boton", {}, wcf_allInstances.switchObserver);
			}
		}

		if (this.hasShadow) {
			shadow.appendChild(button);
		} else {
			this.appendChild(button);
		}

		if (this.hasShadow) {
			const cssReset = document.createElement("link");
			cssReset.setAttribute("rel", "stylesheet");
			cssReset.setAttribute("href", this.urlBase+"/css/reset.css");
			shadow.appendChild(cssReset);

		}
		/* classes for switching */
		let switchesCssText = ' .boton-off {display:none;}';
		/* if component has private styles, they go here */
		let cssText =' .button {font:inherit; overflow:visible; text-transform:none; appearance:button; background:transparent; display:inline-block; background-color:rgb(238, 238, 238); border-radius:3px; box-shadow:rgba(0, 0, 0, 0.15) 1px 1px 2px; box-sizing:border-box; color:rgb(0, 0, 0); font-style:inherit; font-variant:inherit; font-stretch:inherit; line-height:20.4px; font-family:inherit; font-size-adjust:inherit; font-kerning:inherit; font-optical-sizing:inherit; font-language-override:inherit; font-feature-settings:inherit; font-variation-settings:inherit; font-weight:600; margin:0px; padding:0.5em 1.5em; position:relative; text-align:center; text-decoration:none; transition:box-shadow 0.35s, background-color 0.35s; user-select:none; vertical-align:middle; cursor:pointer; border:1px solid transparent; font-size:0.85rem; } @media print { .button {background:transparent !important; color:rgb(0, 0, 0) !important; box-shadow:none !important; text-shadow:none !important; }} blockquote::before, blockquote::after, q::before, q::after {content: none;} a:active, a:hover {outline-width: 0px;} svg:not(:root) {overflow: hidden;} [type="button"]:focus-visible, [type="reset"]:focus-visible, [type="submit"]:focus-visible, button:focus-visible {outline: buttontext dotted 1px;} *, ::after, ::before {box-sizing: inherit;} button:focus {outline: dotted 1px;} [tabindex="-1"]:focus {outline: none !important;} a:focus, a:hover {text-decoration: underline;} :focus, button:focus {outline: orange solid 3px; outline-offset: 0.05rem;} .Container::after, .Container::before {display: table; content: "";} .Container::after {clear: both;} .Grid::after, .Grid::before {display: table; content: "";} .Grid::after {clear: both;} .List .List-item:first-child, .List > li:first-child {border-top: 0px;} .List--media .Media:first-child {padding-top: 0px; margin-top: 0px;} .List--medium > .Media:first-child {padding-top: 0px; margin-top: 0px;} .List--simple > .Media:first-child {padding-top: 0px; margin-top: 0px;} .List--media .Download:first-child {margin-top: 0.1875rem;} .List--media .Download.Download--media .Download-title:last-child {margin-bottom: 0.25rem;} .FlexEmbed::before {display: block; content: "";} .FlexEmbed--21by9::before {padding-top: 42.8571%;} .FlexEmbed--16by9::before {padding-top: 56.25%;} .FlexEmbed--4by3::before {padding-top: 75%;} .FlexEmbed--1by1::before {padding-top: 100%;} .FlexEmbed--1by2::before {padding-top: 200%;} .Button:hover {background-color: rgb(221, 221, 221);} .Button:focus {border: 1px solid orange !important; outline: none; box-shadow: rgba(255, 190, 70, 0.075) 0px 1px 2px inset, rgba(255, 190, 70, 0.3) 0px 0px 0px 0.2em;} .Button:active, .Button:focus, .Button:hover {text-decoration: none;} .Button.is-disabled, .Button:disabled {cursor: not-allowed; opacity: 0.4; box-shadow: none;} .Button:active {box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 0.15em inset;} .Button--primary:hover {background-color: rgb(0, 46, 124);} .Button--primary.u-outerLink::after {background-image: url("'+this.urlBase+'/img/outerLink-white.svg");} .Button--secondary:hover {background-color: rgb(252, 206, 38);} .Button--secondary.u-outerLink::after {background-image: url("'+this.urlBase+'/img/outerLink-black.svg");} .Button--inverse:hover {color: rgb(255, 255, 255); background-color: rgb(0, 46, 124);} .Button--inverse:hover.u-outerLink::after {background-image: url("'+this.urlBase+'/img/outerLink-white.svg");} .Button--inverse.is-disabled:hover, .Button--inverse:disabled:hover {background-color: rgb(255, 255, 255); color: rgb(0, 61, 165);} .Button--link:hover {background-color: inherit; text-decoration: underline;} .Alert > :first-child {margin-top: 0px !important;} .Alert > :last-child {margin-bottom: 0px !important;} .Alert a:hover {text-decoration: none;} .Container--alerts:empty {display: none;} .Alert--atajos:hover {background-color: rgb(226, 233, 241); text-decoration: underline;} .Tags-item:hover {box-shadow: rgb(221, 221, 221) 1px 1px 1px, rgb(221, 221, 221) 0px 0px 1px; color: rgb(0, 0, 0); text-decoration: none;} .Tags-item:last-child {margin-right: 0px;} .Tags-item--csv:hover, .Tags-item--html:hover, .Tags-item--json:hover, .Tags-item--pdf:hover, .Tags-item--rar:hover, .Tags-item--txt:hover, .Tags-item--undefined:hover, .Tags-item--xls:hover, .Tags-item--xml:hover, .Tags-item--zip:hover {color: rgb(255, 255, 255); text-decoration: underline;} .Tags-item--close::after {content: "×"; font-size: 1.25rem; font-weight: 700; line-height: 0; position: absolute; top: 0.875rem; right: 0.625rem;} .Audio-link:not(.collapsed) > span:first-child {display: none;} .Audio-link:not(.collapsed)::before {content: "Ocultar transcripción";} .SkipLink:focus {color: rgb(255, 255, 255); top: 0px; left: 0px; z-index: 5; width: auto; height: auto;} .Dropdown:focus-within .Dropdown-menu, .Dropdown:focus .Dropdown-menu, .Dropdown:hover .Dropdown-menu {display: block;} .Download:focus, .Download:hover {text-decoration: none;} .Download:focus .Download-icon, .Download:hover .Download-icon {background-color: rgb(255, 255, 255); border: 2px solid rgb(238, 238, 238);} .Download:focus .Download-title, .Download:hover .Download-title {text-decoration: underline;} .Download-title:last-child {margin-bottom: 0.2rem;} .Event-info::after, .Event-info::before {display: table; content: "";} .Event-info::after {clear: both;} .Event-map::after {position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; display: block; content: " "; background-color: rgba(0, 0, 0, 0.1); cursor: pointer;} .Event-map.is-visible::after {display: none;} .Pagination-links li a:hover {background-color: rgb(221, 221, 221);} .Pagination-next a::after {padding-left: 0.5rem; content: "→";} .Pagination-prev a::before {padding-right: 0.5rem; content: "←";} .Carousel .owl-stage::after {content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0px;} .Carousel::after, .Carousel::before {display: table; content: "";} .Carousel::after {clear: both;} .Carousel .owl-nav [class*="owl-"]:hover {background: rgb(51, 51, 51); color: rgb(255, 255, 255); text-decoration: none;} .Carousel .owl-nav [class*="owl-"]:active {background: rgb(85, 85, 85); text-decoration: none;} .Carousel .owl-dots .owl-dot.active span, .Carousel .owl-dots .owl-dot:hover span {background: rgb(51, 51, 51);} .Tree li::after, .Tree li::before {content: ""; left: 3%; position: absolute; right: auto;} .Tree li::before {bottom: 50px; height: 100%; top: 0px; width: 0px;} .Tree li::after {top: 25px; width: 12%;} .Tree li div.itemContent li::after, .Tree li div.itemContent li::before {content: ""; position: static;} .Tree ul > li > ul > li::before {top: 0px;} .Tree ul > li > ul > li:last-child::before {height: 25px;} .Tree li div.itemContent ul li::before {content: ""; border: medium; height: auto; width: auto;} .Tree li::before {top: -20px; padding-bottom: 20px;} .Tree > ul > li::after, .Tree > ul > li::before {border: 0px;} .Tree li:last-child::before {height: 45px;} .Tree li.parent_li > .hasChilds:hover, .Tree li.parent_li > .hasChilds:hover + ul li .hasChilds {background: rgb(251, 251, 251); border: 1px solid rgb(102, 102, 102); color: rgb(0, 0, 0);} .Tree li::after, .Tree li::before {background-color: rgb(204, 204, 204);} .Tree li::after {height: 2px;} .Tree li::before {width: 2px;} .Tree li.lvlOne::after, .Tree li.lvlOne::before {display: none;} .Tree-rightLink::after, .Tree-rightLink::before {display: none !important;} .Tree-prevRightLink::before {height: 26px !important;} .Tree-hasRightLink ul::before {width: 2px; content: ""; position: absolute; top: 0px; left: -14px; z-index: 1; height: calc(100% + 65px);} .Tree li.Tree-rightLink > .itemContent::before {display: block !important; position: absolute; content: ""; z-index: 0; height: 2px; top: 16px; left: -10%; width: 10%;} .Tree-hasRightLink ul::before, .Tree li.Tree-rightLink > .itemContent::before {background-color: rgb(29, 144, 255);} .Tree-hasRightLink:not(.Tree-prevRightLink) ul::before {background: linear-gradient(rgb(29, 144, 255) 70%, rgb(255, 255, 255)) !important; height: calc(100% + 10px);} .Tree li.Tree-hasRightLink::after, .Tree li.Tree-hasRightLink::before {background-color: rgb(0, 153, 255);} .Tree ul > li > ul > li::after, .Tree ul > li > ul > li::before {background-color: rgb(204, 204, 204);} .Tree ul:not([class]) li.Tree-rightLink::before {height: 62px; top: -36px;} .Tree-rightLink::before {content: ""; width: 2px; height: 100px; background-color: red; position: absolute; left: -100px; top: 0px;} .Tree .Tree-rightLink div.itemContent::after {content: ""; display: block; height: calc(100% + 100px); width: 2px; background-color: rgb(29, 144, 255); position: absolute; bottom: 36px; left: calc(-10% - 1px);} .Tree-prevRightLink.Tree-hasRightLink::before {content: ""; height: calc(100% + 25px) !important;} .Tree-prevRightLink.Tree-hasRightLink + .Tree-prevRightLink.Tree-hasRightLink::before {height: 0px !important;} .Page::after, .Page::before {display: table; content: "";} .Page::after {clear: both;} .Page-info::after, .Page-info::before {display: table; content: "";} .Page-info::after {clear: both;} .Page-navList li a:hover {color: rgb(0, 0, 0);} .Page-navList li.is-active .Page-navSublist a:hover {color: rgb(0, 0, 0); text-decoration: underline;} .Page-navList > li.is-active:first-child {border-top: 1px solid rgb(238, 238, 238);} .Page-navSublist li:last-child {border-bottom: 0px;} .Page-navSublist > li.is-active:first-child {border-top: 1px solid rgb(238, 238, 238);} .Page-document .Page-downloads li:first-child {padding-top: 0.5rem;} .Page--hasNav > .Grid > .Grid-item:first-child {box-shadow: rgb(238, 238, 238) 1px 0px 0px 0px !important;} .Page-navStatus::after {line-height: 1; content: "+"; font-size: 18px;} .Page-nav--mf .Page-navTitle .Page-navStatus::after {content: ""; width: 0.45em; height: 0.45em; border-style: solid; border-top-color: rgb(0, 61, 165); border-right-color: rgb(0, 61, 165); border-bottom-color: rgb(0, 61, 165); border-image: none; border-left-color: inherit; position: relative; top: -6px; display: inline-block; margin-top: 0px; border-width: 0px 0.125em 0.125em 0px; transform: rotate(45deg);} .Page-nav--mf .Page-navTitle.collapsed .Page-navStatus::after {top: -3px;} .Breadcrumb::after, .Breadcrumb::before {display: table; content: "";} .Breadcrumb::after {clear: both;} .Breadcrumb a:hover {text-decoration: underline;} .Breadcrumb ul li::before {padding-right: 12px; color: rgb(85, 85, 85); content: "»";} .Breadcrumb ul li:first-child::before {display: none;} .Breadcrumb ul li:first-child {padding-left: 0px; margin-left: 0px;} .Search::after, .Search::before {display: table; content: "";} .Search::after {clear: both;} .Header-top::after, .Header-top::before {display: table; content: "";} .Header-top::after {clear: both;} .Header-site .Header-mainLink:focus, .Header-site .Header-mainLink:hover {text-decoration: none;} .Header-parent .Header-arrow::after {left: 0px; top: 0px; transform: rotate(90deg);} .Header-parent.open .Header-arrow::after {top: -5px; transform: rotate(-90deg);} .Header-body::after, .Header-body::before {display: table; content: "";} .Header-body::after {clear: both;} .Header-search .Search-input:focus {outline: orange solid 3px; outline-offset: 3px;} .Header-arrow::after {content: ""; width: 0px; height: 0px; border-width: 0.2825em; border-style: solid; border-top: 0.2825em solid transparent; border-right: 0.2825em solid transparent; border-bottom: 0.2825em solid transparent; border-image: none; border-left-color: inherit; position: relative; left: 3px; top: -2px; display: inline-block; margin-top: 0.64481em; transform: rotate(0deg);} .Header-lang .Dropdown:focus .Dropdown-menu, .Header-lang .Dropdown:hover .Dropdown-menu {display: none;} .Header-lang .Dropdown-menu::before {content: ""; position: absolute; top: -9px; left: calc(100% - 34px); display: inline-block; height: 0px; width: 0px; border-left: 9px solid transparent; border-right: 9px solid transparent; border-bottom: 9px solid rgb(204, 204, 204);} .Header-lang .Dropdown-menu::after {content: ""; position: absolute; top: -8px; left: calc(100% - 33px); display: inline-block; height: 0px; width: 0px; border-left: 8px solid transparent; border-right: 8px solid transparent; border-bottom: 8px solid rgb(255, 255, 255);} .Header-langLink:hover {text-decoration: underline;} .Header-langLink::after {content: ""; width: 0px; height: 0px; border-width: 0.2825em; border-style: solid; border-top: 0.2825em solid transparent; border-right: 0.2825em solid transparent; border-bottom: 0.2825em solid transparent; border-image: none; border-left-color: inherit; position: relative; top: 0px; display: inline-block; margin-top: 0.64481em; transform: rotate(90deg); margin-left: 0.5rem;} .User-dropdown ul > li:first-child > * {border-top: 0px;} .User-dropdown li:first-child a {border-top: 0px;} .User-dropdown .close-dropdown-user:hover {cursor: pointer; background-color: rgb(243, 243, 243);} .User-dropdown .Dropdown-links a:hover {text-decoration: underline; background-color: rgb(243, 243, 243);} .Header--catalogo .Header-logo a:hover .Logo-text {text-decoration: underline;} .Header-logo a:hover {text-decoration: none;} .Nav::after, .Nav::before {display: table; content: "";} .Nav::after {clear: both;} .Nav a, .Nav a:hover {text-decoration: none; color: rgb(255, 255, 255);} .Nav-list > li > a:hover {transition-delay: 0.35s;} .Nav-subnav ul li:last-child {border-bottom: 0px;} .Nav-subnav ul li:last-child a {border-bottom-left-radius: 2px; border-bottom-right-radius: 2px;} .Nav-subnav a:focus, .Nav-subnav a:hover {text-decoration: none; background-color: rgb(0, 61, 165);} .Nav-item:focus-within div.Nav-subnav {left: 0px; opacity: 1;} .Nav-list > li.hover .Nav-subnav, .Nav-list > li:hover .Nav-subnav, .Nav-list > li > a:focus + .Nav-subnav, .Nav-list > li > a:hover + .Nav-subnav {left: 0px; opacity: 1;} .Nav-list > li:hover .Nav-subnav, .Nav-list > li > a:focus + .Nav-subnav, .Nav-list > li > a:hover + .Nav-subnav {transition-delay: 0.35s;} .Nav--minisitio a, .Nav--minisitio a:hover {color: rgb(0, 61, 165);} .Nav--minisitio a:focus {background-color: rgb(247, 247, 247);} .Menu-root .has-submenu > span::after {content: ""; width: 1rem; height: 1rem; background: transparent url("'+this.urlBase+'/img/arrow.svg") 50% center no-repeat; display: block; float: right; position: relative; top: 8px;} .Menu-item.has-submenu.is-open > span::after {background-image: url("'+this.urlBase+'/img/arrow-black.svg");} .Menu-item.has-submenu > span::after {width: 1.45rem; height: 1.45rem; background: transparent url("'+this.urlBase+'/img/plus.svg") 50% center no-repeat; top: 2px;} .Menu-item.has-submenu > span.is-open::after {background-image: url("'+this.urlBase+'/img/minus.svg");} .Menu-subNav li.has-submenu::after {content: ""; width: 0.75rem; height: 0.75rem; background: transparent url("'+this.urlBase+'/img/arrow-black.svg") 50% center no-repeat; display: block; float: right; position: relative; top: 8px;} .Menu-badge > a:hover span {background-image: url("'+this.urlBase+'/img/arrow.svg");} .Menu-badge > a:hover {text-decoration: none; background-color: rgb(0, 61, 165); color: rgb(255, 255, 255);} .Menu-link:hover {text-decoration: none;} .ParentNav-logo a:focus, .ParentNav-logo a:hover {text-decoration: none;} .ParentNav-body .has-submenu > span::after {content: ""; width: 1rem; height: 1rem; background: transparent url("'+this.urlBase+'/img/arrow.svg") 50% center no-repeat; display: block; float: right; position: relative; top: 8px;} .ParentNav-item.has-submenu.is-open > span::after {background-image: url("'+this.urlBase+'/img/arrow-black.svg");} body::after {opacity: 0; content: ""; transition: opacity 0.5s ease-in-out;} body.has-menu::after {content: ""; position: fixed; inset: 0px; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 9998;} .Footer a:hover {text-decoration: none;} .Footer-logo a, .Footer-logo a:hover {text-decoration: none;} .Live--now::before {content: " "; display: inline-block; border-radius: 50%; background-color: rgb(178, 34, 34); width: 10px; height: 10px; margin-right: 0.625em; animation: 1.25s linear infinite c;} .Group--fondo .Grid-item > .Module-item:last-child .Box {margin-bottom: 0px;} .modal-header::after, .modal-header::before {display: table; content: "";} .modal-header::after {clear: both;} .modal-footer::after, .modal-footer::before {display: table; content: "";} .modal-footer::after {clear: both;} .modal::before {height: 100%; margin-right: -4px; content: "";} .modal-dialog, .modal::before {display: inline-block; vertical-align: middle;} .modal-content .modal-body:last-child {border-bottom: medium;} .Filters .Form-legend::before, .Filters .Form legend::before {display: block; height: 1px; width: 100%; background-color: rgb(238, 238, 238); content: ""; top: 50%; position: absolute; z-index: 1;} .Form-widget:disabled {opacity: 0.35; background-color: rgb(238, 238, 238);} .Form-widget:focus {border-color: orange !important; outline: none; box-shadow: rgba(255, 190, 70, 0.075) 0px 1px 2px inset, rgba(255, 190, 70, 0.3) 0px 0px 0px 0.2em;} .Form-widget--read > :first-child {margin-bottom: 0px;} .Form-actions > :last-child {justify-self: flex-end;} .Form--filters > .Form-group:last-child {padding-top: 1.15rem;} ::placeholder {color: rgb(85, 85, 85); opacity: 1; font-style: italic;} ::placeholder {color: rgb(85, 85, 85); opacity: 1; font-style: italic;} .Suscribe::after, .Suscribe::before {display: table; content: "";} .Suscribe::after {clear: both;} .Suscribe-button:hover {background-color: rgb(252, 206, 38);} .Suscribe-button:active {box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 12px inset;} .Suscribe-button:focus {} .Index-nav li:last-child {border-bottom: 0px;} .Index-nav li.is-active > a:hover {text-decoration: none;} .Steps-item:hover {text-decoration: none;} .Steps-item:first-child {border-radius: 8px 0px 0px 8px;} .Steps-item:last-child {border-radius: 0px 8px 8px 0px;} .Steps-item:last-child::after {display: none;} .Steps-item::after {content: ""; position: absolute; width: 68px; height: 68px; background-color: rgb(243, 243, 243); top: 2px; right: -20px; transform: rotate(45deg) skew(10deg, 10deg); border-right: 1px solid rgb(204, 204, 204); border-top: 1px solid rgb(204, 204, 204); z-index: 1;} .Steps-item.is-active, .Steps-item.is-active::after {background-color: rgb(0, 61, 165);} .Steps-item.is-finished, .Steps-item.is-finished::after {background-color: rgb(243, 243, 243);} .Steps-inner > .Steps-item:first-child {padding-left: 1.125em;} .Rating-control:first-of-type:focus ~ .Rating-item:nth-of-type(1)::before, .Rating-control:nth-of-type(2):focus ~ .Rating-item:nth-of-type(2)::before, .Rating-control:nth-of-type(3):focus ~ .Rating-item:nth-of-type(3)::before, .Rating-control:nth-of-type(4):focus ~ .Rating-item:nth-of-type(4)::before, .Rating-control:nth-of-type(5):focus ~ .Rating-item:nth-of-type(5)::before {content: ""; outline: rgb(255, 193, 7) solid 3px; outline-offset: 0.08rem; position: absolute; inset: -0.15em 0px;} .Rating-control:first-of-type:checked ~ .Rating-item:nth-of-type(1), .Rating-control:nth-of-type(2):checked ~ .Rating-item:nth-of-type(-n+2), .Rating-control:nth-of-type(3):checked ~ .Rating-item:nth-of-type(-n+3), .Rating-control:nth-of-type(4):checked ~ .Rating-item:nth-of-type(-n+4), .Rating-control:nth-of-type(5):checked ~ .Rating-item:nth-of-type(-n+5), .Rating:hover {color: rgb(255, 193, 7);} .Rating-item:hover ~ .Rating-item {color: rgb(238, 238, 238);} .Status::before {content: " "; display: inline-block; border-radius: 50%; background-color: rgb(187, 187, 187); width: 10px; height: 10px; margin-bottom: 1px; margin-right: 0.4em;} .Status--activo::before, .Status--verde::before {background-color: rgb(39, 158, 63);} .Status--amarillo::before, .Status-desactualizado::before {background-color: rgb(255, 209, 95);} .Status--discontinuado::before, .Status--rojo::before {background-color: rgb(204, 51, 51);} .Status--enlaceRoto::before {background: url("'+this.urlBase+'/img/icn-plus-sm.png") 0% 0% / cover; width: 11px; height: 11px; transform: rotate(-45deg); margin-bottom: 0px;} .Header--slim .Container::after, .Header--slim .Container::before {display: none;} .Header--slim .Header-top::after, .Header--slim .Header-top::before {display: none;} .Header--slim .Header-top .Header-site .Brand .Brand-text:hover {text-decoration: underline;} .Header--slim .Site-menu a:hover {text-decoration: none;} .Header--slim .Site-menu .Nav-site > ul > li > a.active, .Header--slim .Site-menu .Nav-site > ul > li > a:hover {background-color: rgb(229, 229, 229);} .Header--slim .Site-menu .Nav-site > ul > li > a:hover {text-decoration: underline;} .Header--slim .Site-menu .Nav-site > ul > li > a.w-sub::after {transform: rotate(45deg); transform-origin: center center 0px; margin-top: -1px;} .Header--slim .Site-menu .Nav-site > ul > li > a.w-sub.active::after, .Header--slim .Site-menu .Nav-site > ul > li > a.w-sub::after {content: ""; width: 6px !important; height: 6px !important; opacity: 1 !important; border-style: solid; border-color: rgb(0, 61, 165); border-image: none; border-width: 0px 1px 1px 0px; transition: none !important;} .Header--slim .Site-menu .Nav-site > ul > li > a.w-sub.active::after {transform: rotate(-135deg); transform-origin: center center 0px; margin-top: 5px;} .Header--slim .Site-menu .Nav-site .subnav.show ul li a:hover {background-color: rgb(242, 242, 242); text-decoration: underline;} .Header--slim .Site-menu .Nav-site .subnav.show ul li:first-child a {padding-top: 1rem;} .Header--slim .Site-menu .Nav-site .subnav.show ul li:last-child a {padding-bottom: 1rem;} .Header--slim .User-dropdown .User-data .Login-method:last-child {margin-bottom: 0px;} .Header--slim .Header-body .user-access a.link-user-access:hover, .Header--slim .Header-body .user-access button.link-user-access:hover {background: rgb(243, 243, 243); text-decoration: underline;} .Header--slim .Nav--flex::after, .Header--slim .Nav--flex::before {display: none;} .Header--slim .Nav--flex .Nav a:hover, .Header--slim .Nav--flex a {color: rgb(0, 61, 165);} .Header--slim .Nav--flex > ul > li > a:focus, .Header--slim .Nav--flex > ul > li > a:hover {background-color: rgb(243, 243, 243); border-color: rgb(243, 243, 243); z-index: 2;} .Header--slim .Nav--flex > ul > li > a.w-sub::after {content: ""; width: 0px; height: 0px; border-style: solid; border-top-color: rgb(0, 61, 165); border-right-color: rgb(0, 61, 165); border-bottom-color: rgb(0, 61, 165); border-image: none; border-left-color: inherit; position: relative; top: 0.25rem; display: inline-block; margin-top: 0px; border-width: 0px 0.1rem 0.1rem 0px; transform: rotate(45deg); opacity: 0; transition: 0.2s linear;} .Header--slim .Nav--flex > ul > li > a.w-sub.active:focus::after, .Header--slim .Nav--flex > ul > li > a.w-sub:focus::after, .Header--slim .Nav--flex > ul > li > a.w-sub:hover::after {width: 6px; height: 6px; opacity: 1; transition: 0.2s linear;} .Header--slim .Nav--flex > ul > li > a.active.w-sub:focus::after, .Header--slim .Nav--flex > ul > li > a.active.w-sub:hover::after {width: 1px; height: 1px; opacity: 0; transition: 0.2s linear;} .Header--slim .Nav--flex > ul > li div.subnav > ul > li > a:focus, .Header--slim .Nav--flex > ul > li div.subnav > ul > li > a:hover {background-color: rgb(4, 47, 98);} .Header--slim .Nav--flex > ul > li div.subnav > ul > li:first-child > a {padding-top: 16px;} .Header--slim .Nav--flex > ul > li div.subnav > ul > li:last-child > a {padding-bottom: 16px;} .Header--slim .searchButtonWrap-md .Button:hover {color: rgb(255, 255, 255);} .Header--slim .searchButtonWrap-md .Button:hover svg path {fill: rgb(255, 255, 255); transition: fill 0.35s;} .Header--slim .Header-search .search-form .Search .Search-input:focus {outline-offset: 0.05rem;} .gubuy-mega-menu .body-mega-menu .user-gubuy .link-gubuy-access:hover {border-radius: 4px; background-color: rgb(4, 47, 98); transition: background-color 0.375s;} .Header--slim.Header--blue .Header-logo a:hover .Logo-text {text-decoration: underline;} .Header--slim.Header--blue .Nav--flex a, .Header--slim.Header--blue .Nav--flex a:hover {color: rgb(255, 255, 255);} .Header--slim.Header--blue .Nav--flex > ul > li > a.w-sub::after {border-style: solid; border-color: rgb(255, 255, 255); border-image: none; border-width: 0px 0.1rem 0.1rem 0px;} .Header--slim.Header--blue .Nav--flex > ul > li > a.active, .Header--slim.Header--blue .Nav--flex > ul > li > a:focus, .Header--slim.Header--blue .Nav--flex > ul > li > a:hover {background-color: rgb(4, 47, 98); border-color: rgb(4, 47, 98);} .Header--slim.Header--blue .Nav--flex > ul > li div.subnav > ul > li > a:focus, .Header--slim.Header--blue .Nav--flex > ul > li div.subnav > ul > li > a:hover {background-color: rgb(0, 61, 165);} .Header--slim.Header--blue .searchButtonWrap-md .Button:hover {background-color: rgb(4, 47, 98);} .Header--slim.Header--visualizador .Nav--flex a, .Header--slim.Header--visualizador .Nav a:hover {color: rgb(255, 255, 255);} .Header--slim.Header--gubUy .Header-body .user-access .link-user-access:hover {background-color: rgb(4, 47, 98);} .Box:focus {outline: orange solid 3px !important; outline-offset: 0.05rem;} .Box::after, .Box::before {display: table; content: "";} .Box::after {clear: both;} .Box-header::after, .Box-header::before {display: table; content: "";} .Box-header::after {clear: both;} .Box-footer > a:hover {text-decoration: none;} .Box-gridList .Box-title a:hover {text-decoration: underline;} .Box-gridList a:hover .Box-title {text-decoration: underline;} .Box-gridList > li:last-child {margin-bottom: 1rem;} .Box-mediaList > .Media:first-child, .Box-mediaList li:first-child {padding-top: 0.25rem; border-top: 0px;} .Box--acceso:focus, .Box--acceso:focus .Box-info, .Box--acceso:hover, .Box--acceso:hover .Box-info {text-decoration: none;} .Box--acceso:focus .Box-title, .Box--acceso:hover .Box-title {text-decoration: underline;} .Box--mf.Box--acceso .Box-title:last-child {margin-bottom: 0px;} .Box--mf.Box--acceso.Box--accesoCentrado .Box-title:last-child {margin-top: 0px;} .Box--atencionCiudadana .nav-tabs li > a::after {content: ""; display: block; width: 100%; border-bottom: 0.2rem solid rgb(68, 68, 68); position: absolute; border-radius: 0.1rem; bottom: -2px; transform: scaleX(0) scaleZ(1); transform-origin: center center 0px; transition: transform 0.2s ease-out, transform 0.2s ease-out;} .Box--atencionCiudadana .nav-tabs li.active > a::after {transform: scale(1) scaleZ(1);} .Box--atencionCiudadana .Flag-body > div:last-child {margin-bottom: 0px;} .Box--event .Box-subtitle:empty {display: none;} .Box--destacado1 a:hover {text-decoration: none;} .Box--destacado1.Box--colorWhite a:hover {text-decoration: underline;} .Box--destacado1 .Box-info:empty, .Box--destacado1 .Box-text:empty {display: none;} .Box--destacado2 .Box-title:hover {text-decoration: none;} .Box--destacado2.Box--solid .Box-overlay :last-child {margin-bottom: 0px;} .Box--destacado2.Box--solid .Box-overlay .Box-title:hover {text-decoration: underline;} .Box--destacado3 .Box-info:empty {display: none;} .Box--destacado3:hover {text-decoration: none;} .Box--destacado3:hover .Box-title {text-decoration: underline;} .Box--destacado3.Box--mf .Box-title::before {height: 102%; top: -2px;} .Box--destacado3.Box--mf:hover .Box-title {text-decoration: none;} .Box--destacado3.Box--mf a.Box-title:hover {text-decoration: underline;} .Box--destacado4 a:focus .Box-title, .Box--destacado4 a:hover .Box-title {text-decoration: underline;} .Box--destacado4 .Box-subtitle:empty {display: none;} a.Box--mf.Box--destacado4:focus, a.Box--mf.Box--destacado4:hover {text-decoration: none;} a.Box--mf.Box--destacado4:focus .Box-title, a.Box--mf.Box--destacado4:hover .Box-title {text-decoration: underline;} .Box--mf.Box--listadoEnlaces .u-bullet li::before {width: 0.5em; height: 0.5em; content: ""; border-style: solid; border-color: rgb(85, 85, 85); border-image: none; border-width: 0px 0.2em 0.2em 0px; transform: rotate(-45deg); top: 0.6em; left: -1.625em;} .Box--listadoAccesos .Box-title:last-child {margin-bottom: 0px;} .Box--listadoDescargas.Box--mf .Box-mediaList > .Media:first-child, .Box--listadoDescargas.Box--mf .Box-mediaList li:first-child {padding-top: 0.5rem;} .Box--listadoTramites.Box--mf .Box-body:last-child > .Box-gridList li:last-child {margin-bottom: 1.25rem;} .Box--navLocal ul.Page-navList li:last-child {border-bottom: medium;} .Box--timeline .List > li:first-child {padding-top: 0.25rem;} .Box-timelineNav a:hover {text-decoration: underline; box-shadow: rgb(221, 221, 221) 1px 1px 1px, rgb(221, 221, 221) 0px 0px 1px;} .Hero-body .Box-title a:hover {text-decoration: none;} .Box--banner.rectangle-banner .Box-image::after {content: ""; display: block; width: 100%; height: 60%; left: 0px; top: 0px; position: absolute; background: linear-gradient(rgba(0, 0, 0, 0.75), transparent); z-index: 1;} .Box--banner.full-banner .Box-image::after {content: ""; display: block; width: 50%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(90deg, rgba(0, 0, 0, 0.65), transparent); z-index: 1;} .Box--stats .Box-value:hover {text-decoration: none;} .Box--topic .Box-header::before {content: ""; display: block; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 2;} .Box--topic .Box-header:hover img {transform: scale(1.15);} .Box--topic .Box-linkHeader .Box-title:hover {text-decoration: none;} .Totales-box .Grid-item:not(:last-child) {border-right: 1px solid rgba(255, 255, 255, 0.2);} .Totales-box .Grid-item:not(:first-child) {padding-left: 2em;} .Table--collapse td:not(:first-child) {text-align: right;} .Group--color2 .Box--microaccesos a:focus, .Group--color2 .Box--microaccesos a:hover {text-decoration: none;} .Box--galeria .Carousel .owl-dots .owl-dot:hover span {background: rgb(187, 187, 187); height: 12px; width: 12px;} .Group .Module:last-child {margin-bottom: 1rem;} .Box--destacadoFondo .Box-overlay .Box .Box-actions:empty {display: none !important;} .Box-bgVideoControl button.Button--play .play-pause::after {content: ""; height: 100%; width: 2px; background-color: rgb(255, 255, 255); position: absolute; left: 1px; top: 0px;} .Box-bgVideoControl button.Button--play .play-pause::before {content: ""; height: 100%; width: 2px; background-color: rgb(255, 255, 255); position: absolute; right: 1px; top: 0px;} .Box-bgVideoControl button.Button--play.is-active .play-pause::after {background-color: transparent; width: 0px; height: 0px; border-top: 6px solid transparent; border-bottom: 6px solid transparent; border-left: 10px solid rgb(255, 255, 255);} .Box-bgVideoControl button.Button--play.is-active .play-pause::before {display: none;} .Box-name::before {content: ""; display: inline-block; width: 5px; height: 1.5em; background-color: transparent; position: absolute; top: 0.1em; left: -1.5rem; border-top-right-radius: 3px; border-bottom-right-radius: 3px;} .Box--color1 .Box-name::before {background-color: rgb(0, 61, 165);} .Box--color2 .Box-name::before {background-color: rgb(0, 153, 255);} .Box--color3 .Box-name::before {background-color: rgb(71, 10, 104);} .Box--color4 .Box-name::before {background-color: rgb(147, 17, 126);} .Box--color5 .Box-name::before {background-color: rgb(255, 105, 0);} .Box--color6 .Box-name::before {background-color: red;} .Box--color7 .Box-name::before {background-color: rgb(40, 167, 69);} .Box--color8 .Box-name::before {background-color: rgb(0, 125, 138);} .Box--color9 .Box-name::before {background-color: rgb(43, 92, 168);} .Box--color10 .Box-name::before {background-color: rgb(243, 163, 3);} .Box--color11 .Box-name::before {background-color: rgb(130, 54, 140);} .Box--color12 .Box-name::before {background-color: rgb(119, 138, 21);} .Box--destacado3 .Box-title::before {content: ""; display: inline-block; width: 5px; height: 1.5em; background-color: transparent; position: absolute; top: 1.2em; left: 0px; border-top-right-radius: 3px; border-bottom-right-radius: 3px;} .Box--destacado3.Box--color1 .Box-title::before {background-color: rgb(0, 61, 165);} .Box--destacado3.Box--color2 .Box-title::before {background-color: rgb(0, 153, 255);} .Box--destacado3.Box--color3 .Box-title::before {background-color: rgb(71, 10, 104);} .Box--destacado3.Box--color4 .Box-title::before {background-color: rgb(147, 17, 126);} .Box--destacado3.Box--color5 .Box-title::before {background-color: rgb(255, 105, 0);} .Box--destacado3.Box--color6 .Box-title::before {background-color: red;} .Box--destacado3.Box--color7 .Box-title::before {background-color: rgb(40, 167, 69);} .Box--destacado3.Box--color8 .Box-title::before {background-color: rgb(0, 125, 138);} .Box--destacado3.Box--color9 .Box-title::before {background-color: rgb(43, 92, 168);} .Box--destacado3.Box--color10 .Box-title::before {background-color: rgb(243, 163, 3);} .Box--destacado3.Box--color11 .Box-title::before {background-color: rgb(130, 54, 140);} .Box--destacado3.Box--color12 .Box-title::before {background-color: rgb(119, 138, 21);} .Box--listadoEnlaces.Box--mf.Box--color1 .u-bullet li::before {border-color: rgb(0, 61, 165);} .Box--listadoEnlaces.Box--mf.Box--color2 .u-bullet li::before {border-color: rgb(0, 153, 255);} .Box--listadoEnlaces.Box--mf.Box--color3 .u-bullet li::before {border-color: rgb(71, 10, 104);} .Box--listadoEnlaces.Box--mf.Box--color4 .u-bullet li::before {border-color: rgb(147, 17, 126);} .Box--listadoEnlaces.Box--mf.Box--color5 .u-bullet li::before {border-color: rgb(255, 105, 0);} .Box--listadoEnlaces.Box--mf.Box--color6 .u-bullet li::before {border-color: red;} .Box--listadoEnlaces.Box--mf.Box--color7 .u-bullet li::before {border-color: rgb(40, 167, 69);} .Box--listadoEnlaces.Box--mf.Box--color8 .u-bullet li::before {border-color: rgb(0, 125, 138);} .Box--listadoAccesos.Box--color1 .Flag-body .Box-title::after {border-color: rgb(0, 61, 165);} .Box--listadoAccesos.Box--color2 .Flag-body .Box-title::after {border-color: rgb(0, 153, 255);} .Box--listadoAccesos.Box--color3 .Flag-body .Box-title::after {border-color: rgb(71, 10, 104);} .Box--listadoAccesos.Box--color4 .Flag-body .Box-title::after {border-color: rgb(147, 17, 126);} .Box--listadoAccesos.Box--color5 .Flag-body .Box-title::after {border-color: rgb(255, 105, 0);} .Box--listadoAccesos.Box--color6 .Flag-body .Box-title::after {border-color: red;} .Box--listadoAccesos.Box--color7 .Flag-body .Box-title::after {border-color: rgb(40, 167, 69);} .Box--listadoAccesos.Box--color8 .Flag-body .Box-title::after {border-color: rgb(0, 125, 138);} .Box--sinae .Box-name::before {display: none;} .u-cfx::after, .u-cfx::before {display: table; content: "";} .u-cfx::after {clear: both;} .u-bullet li::before {content: "•"; font-size: 0.75em; position: absolute; top: 0.25em; left: -1.25em;} .u-alternativeLink:hover {text-decoration: none;} .u-outerLink::after {content: ""; padding-left: 15px; background: url("'+this.urlBase+'/img/outerLink.svg") 0px 0px / 16px no-repeat; margin-left: 3px;} .u-outerLink--white::after {background-image: url("'+this.urlBase+'/img/outerLink-white.svg");} .u-outerLink--black::after {background-image: url("'+this.urlBase+'/img/outerLink-black.svg");} ';
		if (typeof switchesCssText != "undefined") {
			cssText += switchesCssText;
		}
		let style = document.createElement("style");
		style.type = "text/css";
		style.textContent = cssText;
		if (this.hasShadow) {
			shadow.appendChild(style);
		} else {
			this.appendChild(style);
		}
		/* Fonts need to be added to document head also in order to work properly */
		let sheet = window.document.styleSheets[0];
		if (typeof sheet == "undefined") {
			sheet = new CSSStyleSheet();
			document.adoptedStyleSheets = [sheet];
		}
		let rule;
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Light"),url('+this.urlBase+'/fonts/OpenSans-Light.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Light.woff) format("woff");font-weight:300;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Light Italic"),url('+this.urlBase+'/fonts/OpenSans-LightItalic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-LightItalic.woff) format("woff");font-weight:300;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Regular"),url('+this.urlBase+'/fonts/OpenSans-Regular.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Regular.woff) format("woff");font-weight:400;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Italic"),url('+this.urlBase+'/fonts/OpenSans-Italic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Italic.woff) format("woff");font-weight:400;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans SemiBold"),url('+this.urlBase+'/fonts/OpenSans-Semibold.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Semibold.woff) format("woff");font-weight:500;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans SemiBold Italic"),url('+this.urlBase+'/fonts/OpenSans-SemiboldItalic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-SemiboldItalic.woff) format("woff");font-weight:500;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans SemiBold"),url('+this.urlBase+'/fonts/OpenSans-Semibold.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Semibold.woff) format("woff");font-weight:600;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans SemiBold Italic"),url('+this.urlBase+'/fonts/OpenSans-SemiboldItalic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-SemiboldItalic.woff) format("woff");font-weight:600;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Bold"),url('+this.urlBase+'/fonts/OpenSans-Bold.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-Bold.woff) format("woff");font-weight:700;font-style:normal;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}
		rule = '@font-face{font-family:Open Sans;src:local("Open Sans Bold Italic"),url('+this.urlBase+'/fonts/OpenSans-BoldItalic.woff2) format("woff2"),url('+this.urlBase+'/fonts/OpenSans-BoldItalic.woff) format("woff");font-weight:700;font-style:italic;font-display:swap}';
		if (!wcf_allInstances.isFontLoaded(rule)) {
			sheet.insertRule(rule,sheet.cssRules.length);
		}


		if (this.hasAttribute("name")) {
			inputName = this.getAttribute("name");
		} else if (button.hasAttribute("name")) {
			inputName = button.getAttribute("name");
		} else {
			inputName = "button";
		};
		button.setAttribute("name",inputName);
		/* set the field value from component attributes */
		wcf_allInstances.setFieldValue(tagId, button);
		/* store the aria description for input asociation, if exists */
		if (button.getAttribute("aria-describedby")) {
			this.labelChanges[button.getAttribute("aria-describedby")] = button.getAttribute("aria-describedby");
		}


		/* if attribute is true, add declared instances AFTER all is loaded */
		if (this.getAttribute("addDeclaredInstances") != "false") {
			addEventListener("load", (event) => {
				wcf_allInstances.addDeclaredInstances(tagId);
			});
		}

		/* Set the rigth field ids, values and labels on load */
		wcf_allInstances.setFieldsOnLoad(tagId);

		/* if it's root and has variat defaults, set them */
		if (this.hasShadow && this.instanceVariantDefaults) {
			wcf_allInstances.setInstanceVariantDefaults(tagId, this.instanceVariantDefaults);
		}

		/* if component has custom JS, it goes here */

	}

	mutationObserverCallback(mutationList, observer) {
		for (const mutation of mutationList) {
			wcf_allInstances.attrObserveCallback(mutation.target, mutation.attributeName, mutation.oldValue, mutation.target.getAttribute(mutation.attributeName));
		}
	}
}
customElements.define("comp-boton-leer", boton_leer);

	//Empieza codigo Lector
	window.onbeforeunload = function(e) {
		if(window.speechSynthesis.speaking){
			window.speechSynthesis.cancel();  
		}
	}
	
	class Lector{
		estado = "";
		utterance = null;
		textoALeer = "";
		partesDeTexto = [];
		parteActual = 0;
	
		constructor(){
			this.textoALeer = document.getElementById('TTS').innerText;
			this.partesDeTexto = this.separarTexto(this.textoALeer);  
		}
		
		leer() {
			this.estado = "leyendo"
			let utterance = new SpeechSynthesisUtterance(this.partesDeTexto[this.parteActual]);
			utterance.lang = "es-US";
			utterance.pitch = 1;
			utterance.volume = 1;
			window.speechSynthesis.speak(utterance);  
	
			utterance.onend = () => {
				if (this.estado != "pausado") {
					this.parteActual++;
					if(this.parteActual < this.partesDeTexto.length){
						setTimeout(() => {
							this.leer();
						}, 500);
					}
				}
			}
		}
	
		pausar(botonPausar) {
			if(this.estado == "leyendo"){
				window.speechSynthesis.cancel();  
				this.estado = "pausado";
				botonPausar.setAttribute('button','Reanudar');
			} else {
				this.leer();
				this.estado = "leyendo";
				botonPausar.setAttribute('button','Pausar');
			}
		}
		
	
		reiniciar(botonPausar){
			window.speechSynthesis.cancel();
			this.parteActual = 0;  
			this.leer();
			botonPausar.setAttribute('button','Pausar');
		}
	
		separarTexto(texto) {
			// Dividir el texto por saltos de línea y espacios
			let resultado = texto.replace(/ {2,}/," ");
			resultado = resultado.replace(/\r/,"");
			resultado = resultado.replace(/\n{2,}/,"\n");
			resultado = resultado.split(/\n|\. /);            
			
			return resultado;
		}
	}
	
	
	document.addEventListener("DOMContentLoaded", function() {
	
		lector = new Lector
	
		let botonLeer = wcf_allInstances.getInstanceElemByWcfid("comp-texto-a-voz", "comp_boton_leer");   
		let botonPausar = wcf_allInstances.getInstanceElemByWcfid("comp-texto-a-voz", "comp_boton_leer_1");   
		let botonReiniciar = wcf_allInstances.getInstanceElemByWcfid("comp-texto-a-voz", "comp_boton_leer_2");   
	
		botonLeer.addEventListener("click", function(){ lector.leer() });
		botonPausar.addEventListener("click", function(){ lector.pausar(this) });
		botonReiniciar.addEventListener("click", function(){ lector.reiniciar(botonPausar) });
		
	});
	
// Fin código leer


/* WCF version: 0.81.0001 */