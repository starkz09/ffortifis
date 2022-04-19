jQuery.validator.addMethod('validemail', function (value) {
	value = value.toLowerCase();
	return /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b$/i.test(value);
}, 'Please enter valid email address.');

jQuery.validator.addMethod("customEmail", function (value, element) {
    return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
}, 'Please enter a valid email address');

jQuery.validator.addMethod('nofreeemail', function (value) {
	value = value.toLowerCase();
	return /^([\w-.]+@(?!gmail\.com)(?!yahoo\.com)(?!hotmail\.com)(?!yopmail\.com)(?!aol\.com)(?!msn\.com)(?!laposte\.com)(?!opolis\.com)(?!ovi\.com)(?!rediff\.com)(?!sify\.com)(?!yandex\.com)(?!mail\.ru)(?!yandex\.ru)([\w-]+.)+[\w-]{2,4})?$/.test(value);
}, 'Please enter only company email address.');

jQuery.validator.addMethod("allowCaps", function(value, element) {
  return this.optional(element) || !/[a-zA-Z]/.test(value); 
}, 'Please enter valid email address.');

jQuery.validator.addMethod('validUrl', function (value) {
	value = value.toLowerCase();
	//return  /^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/.test(value);
	return  /^(http(s)?:\/\/)?((www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?|((([1-9]?\d|1\d\d|2[0-5][0-5]|2[0-4]\d)\.){3}([1-9]?\d|1\d\d|2[0-5][0-5]|2[0-4]\d)))(\/.*)?$/.test(value);
}, 'Please enter valid url');

jQuery.validator.addMethod("alphaspace", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
}, 'Alphabets only allowed');

jQuery.validator.addMethod("alphaNumeric", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z0-9\-\s]+$/);
}, 'Alphanumeric only allowed');

jQuery.validator.addMethod("invalidNumbers", function(value, element) {  
    value = jQuery.trim(value);
    if(value.match(/^([0-9])\1*$/)){ // check continues same number
        return false;
    } else {
        return /^((?!(1234567)).)*$/.test(value);    
    }
}, 'Please enter valid phone number');

jQuery.validator.addMethod("validateURL", function(value, element) {
    value = jQuery.trim(value);
    if(value!="") {
        var regx = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/|www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
        if( (regx.test(value)) == false ) {   
            return false;
        }
    }
    return true;
}, "Please enter valid website URL");

jQuery.validator.addMethod("alpha", function (value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Please enter alphabetical characters only.");

jQuery.validator.addMethod("ckeckPhone", function (value, element) {
    var found = false;
    value = $.trim(value);
    var regx = /^\+?([0-9]{1,3})\)?[-. ]?([0-9]{1,4})[-. ]?([0-9]{2,8})[-. ]?([0-9]{2,8})?$/;
    if (value.match(regx) && (value.match(/\d/g).length >= 7 && value.match(/\d/g).length <= 15)) {
        return true; // no error
    } else {
        return false;
    }
}, "Please enter valid Phone Number.");
