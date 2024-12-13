class wcf_manage {
	allComps = {};
	allCompsProps = {};
	allCompsIds = {};
	allLabelForIds = {};
	allRegisteredSwitches = {};
		
	INPUTTYPES = ['INPUT', 'TEXTAREA', 'BUTTON', 'SELECT', 'OPTION', 'OPTGROUP'];
	
	// internal use
	addInstance(tagId, comp, hasShadow) {
		this.allComps[tagId] = comp;
		this.addProp(tagId, 'hasShadow', hasShadow);
		comp.addEventListener("focus", function () {
			this.style.outline = 'none';
		});
		return true;
	}
	
	getAllInstances() {
		return this.allComps;
	}

	getInstanceById(tagId) {
		return this.allComps[tagId]; 
	}
	
	// deprecated
	getInstanceElemById(tagId, elemId) {
		if (this.allCompsIds[tagId]) {
			return this.allCompsIds[tagId][elemId];
		}
	}
	
	getInstanceElemByWcfid(tagId, wcfid) {
		if (this.allComps[tagId]) {
			if (this.getInstanceProp(tagId, 'hasShadow')) {
				return this.allComps[tagId].shadowRoot.querySelector('[data-wcfid="'+wcfid+'"]');
			} else {
				return this.allComps[tagId].querySelector('[data-wcfid="'+wcfid+'"]');
			}
		}
	}		// return undefined if no comp.
	
	getInstanceElemByQuery(tagId, selector) {
		if (this.allComps[tagId]) {
			if (this.getInstanceProp(tagId, 'hasShadow')) {
				return this.allComps[tagId].shadowRoot.querySelector(selector);
			} else {
				return this.allComps[tagId].querySelector(selector);
			}
		}
	}		// return undefined if no comp.
	
		
	getInstanceElemByQueryAll(tagId, selector) {
		if (this.allComps[tagId]) {
			if (this.getInstanceProp(tagId, 'hasShadow')) {
				return this.allComps[tagId].shadowRoot.querySelectorAll(selector);
			} else {
				return this.allComps[tagId].querySelectorAll(selector);
			}
		}
	}		// return undefined if no comp.
	
	
	isSwitchRegistered(tagId, attrName) {
		if (this.allRegisteredSwitches[tagId] && this.allRegisteredSwitches[tagId][attrName]) {
			return true; 
		}
		return false;
	}
	
	switchRegister(tagId, attrName) {
		if (!this.allRegisteredSwitches[tagId]) {
			this.allRegisteredSwitches[tagId] = {}; 
		}
		this.allRegisteredSwitches[tagId][attrName] = true;
	}		
	
	actualUrlBase(scriptPath) {
		scriptPath = scriptPath.substr(1); 				// remove initial .
		let scriptRegex = new RegExp('(.*)'+scriptPath);
		for (let i=0; i<document.scripts.length; i++) {
			let found = document.scripts[i].src.match(scriptRegex);
			if (found) {
				return found[1];
			}
		}
		return '.';
	}
	
	addProp(tagId, propName, propValue) {
		if (this.allComps[tagId]) {
			if (!this.allCompsProps[tagId]) {
				this.allCompsProps[tagId] = {};
			}
			this.allCompsProps[tagId][propName] = propValue;
			return true;
		}
	}
	
	getInstancePropsById(tagId) {
		return this.allCompsProps[tagId];
	}
	
	getInstanceProp(tagId, propName) {
		if (this.allCompsProps[tagId]) {
			return this.allCompsProps[tagId][propName];
		}
	}
	
			
	// ****************************************************************************
	// INSTANCE MANAGING
	// ****************************************************************************
	
	getUniqueInstanceId(id) {
		let ret = id;
		let i = 1; 
		while (this.allComps[ret]) {
			ret = id + '_' + i;
			i++;
		}
		return ret;
	}
	
	// ads an instance of compId to the elem at pos. if pos is empty, it's added at the end
	addSubComp(elem, compName, attr = {}, pos = '') {	
		if (!elem) {
			console.error("at addSubComp elem",elem," is not an element");
			return false;
		}
		const existe = customElements.get(compName);
		if (!existe) {
			console.error("at addSubComp, compName", compName, "it's not a custom element");
			return false;
		}
		const subComp = document.createElement(compName);
		let instanceId = wcf_allInstances.getUniqueInstanceId(compName);
		subComp.setAttribute("id",instanceId);
		subComp.setAttribute("name", instanceId);
		for (let key in attr) {
			if (typeof attr[key] == 'string') {
				subComp.setAttribute(key, attr[key]);
			}
		}
		elem.appendChild(subComp);
		return instanceId; 
	}
	
	setInstanceAttr(tagId, attr) {
		let instance = this.getInstanceById(tagId); 
		if (typeof instance == 'undefined') {
			return false;
		}
		for (let key in attr) {
			if (typeof attr[key] == 'string') {
				elem.setAttribute(key, attr[key]);
			}
		}
		return tagId;
	}
		
	
	setInstanceElemOnClick(tagId, selector, href) {
		let elem = this.getInstanceElemByQuery(tagId, selector); 
		if (!elem) {
			return false;
		}
		elem.onclick = function () {
			window.location = href;
		}
		this.addClickProperties(elem); 
		return true;
	}
	
	// internal use
	addClickProperties(elem) {
		if (elem) {
			elem.style.cursor = 'pointer';
			// if it's not a button or a link, add the aria role
			if (elem.tagName != 'a' && elem.tagName != 'button') {
				elem.setAttribute('role', 'link');
			}
			return true;
		}
		// return undefined 
	}
	
	// internal use
	addDeclaredInstances(tagId) {
		let instance = this.getInstanceById(tagId); 
		let childs = instance.querySelectorAll('*');
		for (let i=0; i < instance.childNodes.length; i++) {
			if (instance.childNodes[i].tagName) {
				let childId = instance.childNodes[i].getAttribute('id');
				let child = this.getInstanceById(childId); 
				if (child) {
					let newChild = document.createElement(child.tagName);
					let attr = {}
					for (const attrVar of child.attributes) {		// store for seting after child removal
						attr[attrVar.name] = attrVar.value;
					}
					for (let key in attr) {
						if (key == 'id') {
							attr[key] = this.getUniqueInstanceId(attr[key]);
						}
						if (key && attr[key]) {
							newChild.setAttribute(key, attr[key]);
						}
					}
					if (attr['insertatselector']) {
						let insertAt = this.getInstanceElemByQuery(tagId, attr['insertatselector']);
						if (insertAt) {
							insertAt.appendChild(newChild);
							this.removeInstance(childId);
						}
					}
				}
			}
		}
		return true;
	}
	
	// internal use
	addSelectOptions(tagId, internals, formData) {
		let instance = this.getInstanceById(tagId); 
		let childs = instance.querySelectorAll('*');
		// borrar esto si todo anda bien.
		// let selectElem = instance.shadowRoot.querySelector('select');
		let selectElem = this.getInstanceElemByQuery(tagId, 'select');
		if (!selectElem) {
			return false;
		}
		let value = ''; 
		for (let i=0; i< childs.length; i++) {
			if (childs[i].tagName == 'OPTION') {
				if (!value) {
					value = childs[i].value; 
				}
				if (childs[i].hasAttribute('selected')) {
					value = childs[i].value; 
				}			
				let newOption = childs[i].cloneNode(true);
				childs[i].parentNode.removeChild(childs[i]); 
				selectElem.appendChild(newOption);
			}
		}
		formData.set(selectElem.getAttribute("name"),value);
		internals.setFormValue(formData);
		return true;
	}

	removeInstance(tagId) {
		let instance = this.getInstanceById(tagId); 
		if (instance) {
			instance.parentElement.removeChild(instance);
			delete this.allComps['tagId'];
			return true;
		}
		return false;
	}
		
	
	// ****************************************************************************
	// ATRIBUTES MANAGING
	// ****************************************************************************
	
	// internal use
	// this function is called by the observer, each time a parameter is modified
	// if the attribute was setted by WCF, asigns the element value. 
	// at the end calls the callBack function if it is defined. 
	attrObserveCallback(instance, name, oldValue, newValue) {
		let instanceAttr = instance.constructor.attributes[name];
		if (instanceAttr && instanceAttr.data && instanceAttr.data.wcfAttr) {		// original WCF attribute
			let data = instanceAttr.data; 
			let targetWcfId = data.elem.getAttribute('data-wcfid');
			let target = this.getInstanceElemByQuery(instance.getAttribute('id'), '[data-wcfid="'+targetWcfId+'"]');
			if (target) { 		// before element is appended, target is undefined.
				let textTags = ['p','a','button','label','div','h1','h2','h3','h4','h5','h6'];
				if (textTags.includes(data.type)) {
					target.textContent = newValue + '';
				}
				if (data.type == 'href') {
					if (typeof window[newValue] == "function") {		// set onclick
						target.setAttribute("href","#");
						target.setAttribute("onclick",newValue+"(this);return false;");
					} else {											// remove onclick and set href
						target.setAttribute('href',newValue);
						target.removeAttribute("onclick");
					}
				}
				if (data.type == 'img') {
					target.setAttribute('src',newValue);
				}
				if (data.type == 'slot') {
					let slot = document.querySelector('[slot="'+data.slotName+'"]');
				}
			}
		}
		if (!instance['wcfCallbackRegister']) {
			instance['wcfCallbackRegister'] = {};
		}
		if (!instance['wcfCallbackRegister'][name]) {
			instance['wcfCallbackRegister'][name] = {};
		}
		if (instanceAttr && typeof instanceAttr.callback == 'function') {
			// check if attrObserveRegister has run for the first time
			if (!instance['wcfCallbackRegister'][name]['alreadyRun'] && oldValue === null && instance['wcfCallbackRegister'][name]['firstValue'] && instance['wcfCallbackRegister'][name]['firstValue'] == newValue) {
				return; 
			}
			instance['wcfCallbackRegister'][name]['alreadyRun'] = true;
			instanceAttr.callback(instance, name, instanceAttr.data, oldValue, newValue);
		}
		// call the attrLink management. 
		this.attrLink(instance, name, newValue);
	}
	
	attrObserveRegister(tagId, name, dataParam, callback) {
		let instance = this.getInstanceById(tagId); 
		if (typeof instance == 'undefined') {
			return false;
		}
		if (!dataParam) {
			dataParam = {};
		}
		if (!dataParam['wcfAttr']) {
			dataParam['wcfAttr'] = false;
		}
		instance.constructor.attributes[name] = {data: dataParam, "callback": callback};
		// call for the first time on load
		addEventListener("load", (event) => {
			this.attrObserveFirstRun(instance);
		});
	}

	// internal use
	attrObserveFirstRun(instance) {
		for (let name in instance.constructor.attributes) {
			let instanceAttr = instance.constructor.attributes[name];
			if (!instance['wcfCallbackRegister']) {
				instance['wcfCallbackRegister'] = {};
			}
			if (!instance['wcfCallbackRegister'][name] || !instance['wcfCallbackRegister'][name]['alreadyRun']) {		// it has never run
				instance['wcfCallbackRegister'][name] = {};
				
				let attr = instance.getAttribute(name);
				if (attr && typeof instanceAttr.callback == 'function') {			// the attr has been set and there is a callback function
					instance['wcfCallbackRegister'][name]['firstValue'] = attr;	
					instanceAttr.callback(instance, name, instanceAttr.data, '', attr);
				}
			}
		}
	}
	
	
	// ATRIBUTES MANAGING FOR VARIANTS 
	
	// internal use
	// handles the "variant" atributeute  observer changes
	variantObserver(instance, attr, data, oldValue, newValue) {
		if (newValue.match(/^[0-9]$/)) {
			newValue = Number(newValue) 		// cast to number
		}	
		let ordinal = newValue;
		
		if (data['variantsData'] && data['variantsData'].length > ordinal) {
			let tagId = instance.getAttribute('id'); 
			if (ordinal == 0) {
				wcf_allInstances.resetComponent(tagId, data['variantsData'][0]['modify'],data['setVariantsData']); 
			} else {
				wcf_allInstances.setVariant(tagId, ordinal, data['variantsData'], data['setVariantsData'])
			}
		}
		if (instance.rtSwitching) {
			for (let attr in instance.rtSwitching) {
				instance.setAttribute(attr, instance.rtSwitching[attr]);
			}
		}
	}
	
	// internal use
	async resetComponent(setTagId, defaultData, setVariantsData) {
		await wcf_allInstances.waitForInstance(setTagId);
		for (let wcfid in defaultData) {
			let elem = wcf_allInstances.getInstanceElemByQuery(setTagId, '[data-wcfid="'+wcfid+'"]');
			elem.className = defaultData[wcfid]['class']; 
			elem.removeAttribute('style');
		}
		for (let ordinal=1; ordinal < setVariantsData.length; ordinal++) {
			for (let wcfid in setVariantsData[ordinal]) {
				let elem = wcf_allInstances.getInstanceElemByQuery(setTagId, '[data-wcfid="'+wcfid+'"]');
				elem.style.display = 'none';
				wcf_allInstances.clearFormField(setTagId, elem);			
			}
		}
	}
	
	// internal use
	async setVariant(setTagId, ordinal, variantsData, setVariantsData) {
		let variantWasSet = new Event("variantWasSet");
		await this.resetComponent(setTagId, variantsData[0]['modify'], setVariantsData); 

		// first remove, in order to avoid removing added element with same wcfid
		for (let wcfid in variantsData[ordinal]['remove']) {
			let target = wcf_allInstances.getInstanceElemByQuery(setTagId,'[data-wcfid="'+wcfid+'"]');
			target.style.display = 'none';
			wcf_allInstances.clearFormField(setTagId, target, true);		// true means clear form AND internals
		}
		
		// then Modify
		for (let wcfid in variantsData[ordinal]['modify']) {
			let target = wcf_allInstances.getInstanceElemByQuery(setTagId,'[data-wcfid="'+wcfid+'"]');
			if (ordinal > 0 && variantsData[ordinal]['modify'][wcfid]['class']) {
				target.classList.add(variantsData[ordinal]['modify'][wcfid]['class']);
			}
			target.removeAttribute('style'); 
		}
		
		// finally add
		for (let wcfid in setVariantsData[ordinal]) {
			let target = wcf_allInstances.getInstanceElemByQuery(setTagId,'[data-wcfid="'+wcfid+'"]');
			target.removeAttribute('style');
		}
		let instance = wcf_allInstances.getInstanceById(setTagId);
		instance.dispatchEvent(variantWasSet);
	}
	
	// internal use
	clearFormField(setTagId, elem, clearInternals = false) {
		let instance = wcf_allInstances.getInstanceById(setTagId);
		if (instance.getAttribute('preserve-form-values') === 'true') {		// preserve 
			return; 
		}
		
		if (wcf_allInstances.INPUTTYPES.includes(elem.tagName)) {
			let currentVariant = wcf_allInstances.getCurrentVariant(setTagId);
			let elemVariant = wcf_allInstances.getElemVariant(elem);
			if (currentVariant == elemVariant) {			// preseve values of current varian fields
				return;				// childs are of the same variant, no recursion then.
			}
			let internals = instance.attachedInternals;
			instance.formData.set(elem.getAttribute("name"),''); 		// clear form data
			elem.value = '';											// clear field value
			if (clearInternals) {
				internals.setFormValue(instance.formData);
			}
		}
		let children = Array.from(elem.children);
		for (let i=0; i < children.length; i++) {
			wcf_allInstances.clearFormField(setTagId, children[i]);
		}
	}
	
	getCurrentVariant(setTagId) {
		let instance = wcf_allInstances.getInstanceById(setTagId);
		if (instance) {
			if (instance.getAttribute('variant')) {
				return instance.getAttribute('variant');
			} else {
				return 0;
			}
		}
	}
	
	getElemVariant(elem) {
		let wcfid = elem.getAttribute('data-wcfid');
		if (!wcfid) {
			return;
		}
		let regex = /^wcfvar-([0-9]+).*/;
		let found = wcfid.match(regex);
		if (found) {
			return found[1]; 
		} else {
			return 0;
		}
	} 
	
	// internal use
	getVariantPrefix(elem) {
		let wcfid = elem.getAttribute('data-wcfid');
		if (!wcfid) {
			return '';
		}
		let regex = /^(wcfvar-[0-9]+-).*/;
		let found = wcfid.match(regex);
		if (found) {
			return found[1]; 
		} else {
			return '';
		}
	} 
	
	// internal use
	addAllVariants(setTagId, variantsData) {
		if (typeof variantsData == 'undefined') {
			return [];
		}
		let ret = [{}];			// ret[0] is empty.
		for (let ordinal=1; ordinal<variantsData.length; ordinal++) {
			ret[ordinal] = {};
			for (let wcfid in variantsData[ordinal]['add']) {
				let addData = variantsData[ordinal]['add'][wcfid];
				if (addData['outerHTML']) {
					let outerHTML = addData['outerHTML'].replaceAll('data-wcfid="','data-wcfid="wcfvar-'+ordinal+'-');
					let newElem = this.createElementFromHTML(outerHTML);
					// it's very probable to have repeated ids in variants, so, id must be make unique
					let newId = newElem.getAttribute('data-wcfid');
					
					ret[ordinal][newId] = newId;
					newElem.style.display = 'none';
					let addId = addData['addId'];
					let oriElem = wcf_allInstances.getInstanceElemByQuery(setTagId,'[data-wcfid="'+addId+'"]');
					if (addData['function'] == 'after') {
						oriElem.after(newElem);
					} else if (addData['function'] == 'before') {
						oriElem.before(newElem);
					} else {
						oriElem.appendChild(newElem);
					}
					this.adjustFormData(newElem, setTagId, ordinal);  // adjust elementInternals for added fields
				}
			}
		}
		return ret;	
	}
	
	// internal use
	adjustFormData(elem, setTagId, ordinal) {
		// wait for the component is fully rendered
		wcf_allInstances.waitForInstance(setTagId).then((instance) => {
			// first the elem
			if (this.INPUTTYPES.includes(elem.tagName)) {
				let wcfid = elem.getAttribute('data-wcfid');
				this.variantFieldAdded(setTagId, wcfid, ordinal);
			}
			
			// then the childs
			let allChilds = elem.querySelectorAll('*'); 
			for (let i=0; i< allChilds.length; i++) {
				if (this.INPUTTYPES.includes(allChilds[i].tagName)) {
					let wcfid = allChilds[i].getAttribute('data-wcfid');
					this.variantFieldAdded(setTagId, wcfid, ordinal);
				}
			}
		});
 	}
	
	// internal use
	createElementFromHTML(htmlString) {
		let div = document.createElement('div');
		div.innerHTML = htmlString.trim();

		// Change this to div.childNodes to support multiple top-level nodes.
		return div.firstChild;
	}
	
	// Functions that manage forms when a variant adds a field
	
	// Internal use
	// set form values and accesibility data
	variantFieldAdded(setTagId, wcfid, ordinal) {
		let instance = wcf_allInstances.getInstanceById(setTagId);
		let field = wcf_allInstances.getInstanceElemByWcfid(setTagId, wcfid);
		if (!field || !instance) {
			return;
		}
	
		let inputName;
		if (field.hasAttribute("name")) {
			inputName = field.getAttribute("name");
		} else {
			inputName = wcfid;	
			field.setAttribute("name",inputName);
		}
	
		/* set the field value from component attributes */
		// pendiente:esto hay que verlo bien. es para checkboxes y radios en un subcomp
		// wcf_allInstances.setFieldValue(tagId, field);
	
		/* if field has label, generate unique id to prevent repeated label fors */
		let labelForIdOri = field.getAttribute('original-id')+''; 		// cast to string, to make replaceAll work always
		if (labelForIdOri) {
			labelForIdOri = labelForIdOri.replaceAll('-','_');
			let label = wcf_allInstances.getInstanceElemByQuery(setTagId,'[for="'+labelForIdOri+'"]');
			if (label) {
				let labelForId = wcf_allInstances.addLabelForId(labelForIdOri, label);
				label.setAttribute("for", labelForId);
				instance.labelChanges[labelForIdOri] = labelForId;
			}
		}
		
		/* if field has aria-describedby attribute, set the rights ids */
		wcf_allInstances.setAriaDescribedby(setTagId, field);
												 
		/* store the aria description for input asociation, if exists */
		if (field.getAttribute("aria-describedby")) {
			let oriForId = field.getAttribute("aria-describedby");
			let forId = this.getUniqueLabelForId(oriForId);
			field.setAttribute("aria-describedby", forId);
			let description = wcf_allInstances.getInstanceElemByWcfid(setTagId, 'wcfvar'+ordinal+'-'+oriForId);
			if (description) {
				description.setAttribute('id', forId);
			}
		}
		
		/* Set field data, validity and handlers */
		instance.formFields[inputName] = field;
		instance.attachedInternals.setValidity(instance.formFields[inputName].validity, instance.formFields[inputName].validationMessage, instance.formFields[inputName]);
		instance.formFields[inputName].addEventListener("input", (e) => wcf_allInstances.handleInput(e, setTagId));
		instance.formFields[inputName].addEventListener("keypress", (e) => wcf_allInstances.handleKeypress(e, setTagId));
		
	}
	
	// internal use
	setAriaDescribedby(setTagId, field) {
		let ariaDescribedby = field.getAttribute('aria-describedby');
		if (ariaDescribedby) {
			let varPrefix = wcf_allInstances.getVariantPrefix(field);
			let ariaElem = wcf_allInstances.getInstanceElemByWcfid(setTagId, varPrefix+ariaDescribedby)
			if (ariaElem) {
				ariaElem.setAttribute('id', ariaDescribedby);
			}
		}
	}
	
	setInstanceVariantDefaults(tagId, defaults) {
	let elems = wcf_allInstances.getInstanceElemByQueryAll(tagId,'*');
		if (!elems || Object.keys(defaults).length === 0) {
			return; 
		}
		let regex = /^COMP-/;
		let used = {}; 
		for (let i = 0; i < elems.length; i++) {
			if (elems[i].style.display != 'none' && elems[i].tagName.match(regex)) {
				if (!used[elems[i].tagName]) {
					if (defaults[elems[i].tagName]) {
						elems[i].setAttribute('variant',defaults[elems[i].tagName]['variant']);
						used[elems[i].tagName] = 1; 
						elems[i].addEventListener("variantWasSet", (e) => {
							this.setInstanceVariantDefaults(elems[i].getAttribute('id'), defaults[elems[i].tagName]['children']);
						}, false);
					}
				} else {
					let vtag = elems[i].tagName+'-'+used[elems[i].tagName];
					if (defaults[vtag]) {
						elems[i].setAttribute('variant',defaults[vtag]['variant']);
						used[elems[i].tagName]++;
						elems[i].addEventListener("variantWasSet", (e) => {
							this.setInstanceVariantDefaults(elems[i].getAttribute('id'), defaults[vtag]['children']);
						}, false);
						
					}
				}
			} 
		}
	}

	// *****************************************************************************
	// END - dinamically change variants 
	// *****************************************************************************
	
	// ****************************************************************************
	// FORMS MANAGING
	// ****************************************************************************
	
	// uso interno
	handleInput(e, tagId) {
		let instance = wcf_allInstances.getInstanceById(tagId);
		let internals = instance.attachedInternals;
		let formData = instance.formData;
		let fieldName = e.target.getAttribute("name");
		
		internals.setValidity(e.target.validity, e.target.validationMessage, e.target);
		if (e.target.type == "checkbox") {
			if (e.target.checked) {
				formData.set(fieldName,"on");
			} else {
				formData.delete(fieldName);
			}
		} else if (e.target.type == "radio") {
			if (e.target.checked) {
				if (e.target.getAttribute("value")) {
					formData.set(fieldName, e.target.getAttribute("value"));
				} else {
					formData.set(fieldName, e.target.getAttribute("id"));
				}			
			}		
		} else if (e.target.type == "text" || e.target.type == "select-one" || e.target.type == "textarea" || e.target.type == "date" || e.target.type == "file" ) {
			formData.set(fieldName,e.target.value);
		}
		
		instance.formData = formData;
		internals.setFormValue(formData);
	}
	
	// internal use
	handleKeypress(e, tagId) {
		let instance = wcf_allInstances.getInstanceById(tagId);
		let internals = instance.attachedInternals;
		if (e.keyCode == 13 && e.target.nodeName != 'TEXTAREA') {
			if (internals.form) {
				internals.form.submit();
			}
		}
	}
	
	// internal use
	setFieldValue(tagId, input) {
		let instance = this.getInstanceById(tagId); 
		if (input.getAttribute('type') == 'radio' && instance.getAttribute('value')) {
			input.setAttribute('value', instance.getAttribute('value'));
		}
		return true;
	}
	
	// internal use
	/* set filed values for firefox field value cache */
	setFieldsOnLoad(tagId) {
		let instance = this.getInstanceById(tagId);
		// prevent multiple execution
		if (this.setFieldsOnLoad.alreadyCalled && this.setFieldsOnLoad.alreadyCalled[tagId]) {
			return;
		}
		if (!this.setFieldsOnLoad.alreadyCalled) {
			this.setFieldsOnLoad.alreadyCalled = {}; 
		}
		this.setFieldsOnLoad.alreadyCalled[tagId] = true;
		addEventListener("load", (event) => {			// takes internals form data and stores it at instance
			let internals = instance.attachedInternals; 
			let formFields = instance.formFields;
			if (!internals || !internals.form) {
				return;
			}
			// First of all, adjust fields and label IDs to be unique
			this.setLabelChanges(tagId, instance.labelChanges);
			
			let allFormData = new FormData(internals.form);
			let formData = new FormData();
			// Secondly, include al fields in form, empty
			for (let fieldName in formFields) {
				formData.set(fieldName, '');
			}
			// then set value to fields that already have one			
			for (var pair of allFormData.entries()) {
				if (formFields[pair[0]] && formFields[pair[0]].getAttribute('type') != 'file') { 	// file inputs can't be restored on load
					formFields[pair[0]].value= pair[1];
					formData.set(pair[0], pair[1]);
				}
			}
			// at the end, adjust instance values.
			instance.formData = formData;
			internals.setFormValue(formData);
		});
	}
	
	// internal use
	addLabelForId(id, label) {
		id  = this.getUniqueLabelForId(id);
		this.allLabelForIds[id] = label; 
		return id;
	}
	
	// internal use
	getUniqueLabelForId(id) {
		let ret = id;
		let i = 1; 
		while (this.allLabelForIds[ret]) {
			ret = id + '_' + i;
			i++;
		}
		return ret;
	}
	
	// internal use
	setLabelChanges(tagId, labelChanges) {
		let instance = wcf_allInstances.getInstanceById(tagId); 
		for (let labelO in labelChanges) {
			let inputTarget = wcf_allInstances.getInstanceElemByQuery(tagId,'.'+labelO); 
			if (inputTarget) {
				inputTarget.setAttribute('id', labelChanges[labelO]);
				inputTarget.setAttribute('name', labelChanges[labelO]);
				// adjust formFields data
				delete instance.formFields[inputTarget.getAttribute('original-id')];
				instance.formFields[labelChanges[labelO]] = inputTarget;
			}
		}
	}
	
	// ******************************************************************
	// SWITCHES
	// ******************************************************************
	
	// internal use
	switchObserver(instance, attr, data, oldValue, newValue) {
		// set new class in all childs that switch
		const elems = wcf_allInstances.getInstanceElemByQueryAll(instance.getAttribute('id'), '[data-css-switch="'+attr+'"]');
		for (let ind=0; ind < elems.length; ind++) {
			let elem = elems[ind];
			let classList = elem.className.split(' ');
			let newClass = '';
			for (let i=0; i < classList.length; i++) {				// remove oldValue
				let className = classList[i].toLowerCase();
				if (className != oldValue && className != newValue && className != attr+'-off') {
					newClass += className+' ';
				}
			}
			
			if (newValue == 'off') {			// add new class
				newClass += attr+'-off'; 
			} else {
				newClass += newValue;
			}
			elem.className = newClass;
		};
		// store the real time switching value for variant reset.
		if (!instance.rtSwitching) {
			instance.rtSwitching = {};
		}
		instance.rtSwitching[attr] = newValue;
	}
	
	// *****************************************************************
	// LINKS
	// *****************************************************************
	
	// Attribute Links
	// Internal use
	attrLink(instance, attr, value) {
		if (instance.linkData) {
			for(let i=0; i < instance.linkData.length; i++) {
				let ld = instance.linkData[i];
				
				if (instance.getAttribute('id') == ld['destTagId'] && ld['oriAttr'] == ld['destAttr']) {
					console.error("Error: Recursive link call for tagId '"+ld['destTagId']+"' and attribute '"+ld['destAttr']+"'");
					continue; 			// prevent infinite loop;
				}
				if (attr == ld['oriAttr'] && value == ld['oriValue']) {
					let destInstance = wcf_allInstances.getInstanceById(ld['destTagId']);
					if (!destInstance) {
						console.error("Not such an instance with id "+ld['destTagId']+" in link from "+instance.getAttribute('id')+" for attribute "+attr);
					} else {
						console.info("Link: from", instance.getAttribute('id'), attr, value,"to", ld['destTagId'],ld['destAttr'], ld['destValue']);
						destInstance.setAttribute(ld['destAttr'], ld['destValue']);
					}
				}
			}
		}
	}
	
	setLinkData(tagId, linkData) {
		if (!Array.isArray(linkData)) {
			console.error("Error: link data must be array in setAttrLinks for tagId '"+tagId+"' on setLinkData"); 
			return false;
		}
		let instance = wcf_allInstances.getInstanceById(tagId);
		if (instance) {
			instance.linkData = linkData;
			return true;
		}
		return false;
	}
	
	getLinkData(tagId) {
		let instance = wcf_allInstances.getInstanceById(tagId);
		if (instance && instance.linkData) {
			return instance.linkData;
		}
		// return undefined
	}
	
		
	// ******************************************************************
	// Internal use functions
	// ******************************************************************
	
	// internal use
	loadHeadStyleSheet(url) {
		let headTag = document.getElementsByTagName("head")[0];
		let links = headTag.getElementsByTagName("link");
		for (let key in links) {
			if (links[key].href == url) {
				return true;
			}
		}
		let linkStyle = document.createElement("link");
		linkStyle.setAttribute("rel", "stylesheet");
		linkStyle.setAttribute("href", url);
		headTag.appendChild(linkStyle);
		return true;
	}
	
	// internal use
	isFontLoaded(font) {
		let family = font.match(/font-family: (.*?);/i);
		let weight = font.match(/font-weight: (.*?);/i);
		let style = font.match(/font-style: (.*?);/i);
		if (!family || !weight || !style) {
			return false;
		}
		
		let allFonts = Array.from(document.fonts);
		for (let i = 0; i < allFonts.length; i++) {
			if (allFonts[i].weight == weight[1] && allFonts[i].family == family[1] && allFonts[i].style == style[1]) {
				return true;
			}
		}
		return false;
	}
	
	// internal use
	waitForInstance(tagId) {		
		let nameSplitted = this.splitSubCompName(tagId);
		return new Promise(resolve => {
			if (!nameSplitted) {
				if (this.getInstanceById(tagId) && document.querySelector("#"+tagId)) {
					return resolve(document.querySelector("#"+tagId));
				}
			} else {
				if (this.getInstanceById(tagId) && this.getInstanceElemByQuery(nameSplitted[0],'[id="'+nameSplitted[1]+'"]')) {
					return resolve(this.getInstanceElemByQuery(nameSplitted[0],'[id="'+nameSplitted[1]+'"]'));
				}
			}
		
			const observer = new MutationObserver(mutations => {
				if (!nameSplitted) {
					if (document.querySelector("#"+tagId)) {
						observer.disconnect();
						resolve(document.querySelector("#"+tagId));
					}
				} else {
					if (this.getInstanceElemByQuery(nameSplitted[0],"#"+nameSplitted[1])) {
						observer.disconnect();
						resolve(this.getInstanceElemByQuery(nameSplitted[0],'[id="'+nameSplitted[1]+'"]'));
					}
				}
			});

			// If you get "parameter 1 is not of type 'Node'" error, see https://stackoverflow.com/a/77855838/492336
			observer.observe(document.body, {
				childList: true,
				subtree: true
			});
		});
	}
	
	splitSubCompName(name) {
		let instance = this.getInstanceById(name);
		console.log("en split", instance, name);
		if (!instance || !instance.getRootNode().host) {
			return false;
		} 
		let hostTagId = instance.getRootNode().host.getAttribute('id')		
		return [hostTagId, name];
	}

	
}
const wcf_allInstances = new wcf_manage;