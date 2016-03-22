// -----------------------------------------------------//
// SAVE FORM FIELD SELECTIONS IN COOKIES 		//
// formcookie_saverestore.js				//
// Written by Tony Davis, T. Davis Consulting, Inc.	//
// Date written: September 27, 2005			//
// Email: tony@tdavisconsulting.com			//
// Web site: http://www.tdavisconsulting.com		//
// -----------------------------------------------------//

// instructions:
// ------------
// Change <BODY>
// to <BODY onunload="saveSelections(document.forms[0])"> and
// Change </FORM>
// TO </FORM><SCRIPT language=JavaScript type="">loadSelections(document.forms[0]);</SCRIPT>
// see a working example at: http://www.tdavisconsulting.com/formcookie
//

//
// ------------------------------------------------
// This function will concatentate all the fields in
// in the form into one string, delimited by a PIPE
// symbol, into one cookie. The cookie name is the
// same name as the form name. ALL fields are saved.
// ------------------------------------------------
//


function saveSelections(frm) {
		var setvalue;
		var fieldType;
		var index;
		var formname = frm.name;

		// Expire cookie in 999 days.
		var today = new Date();
		var exp   = new Date(today.getTime()+999*24*60*60*1000);

		var string = "formname=" + formname + "|";
		var cookieName = formname;

		//alert(exp);
		//alert(formname);

		var n = frm.length;
		for (i = 0; i < n; i++)

		{
			e 	    = frm[i].name;
			fieldValue  = frm[i].value;
			fieldType   = frm[i].type;

			//alert(e);
			//alert(fieldType);
			//alert(fieldValue);

			//
			// RADIO BUTTON
			//
			if (fieldType == "radio") {
			//alert(frm.elements[e].length);
				for (x=0; x < frm.elements[e].length; x++) {
					if (frm.elements[e][x].checked)
					{
					index = x
					}
				}
			string = string + index + "\|";
			}

			//
			// TEXT, TEXTAREA, and DROPDOWN
			//
			if ((fieldType == "text") ||
			    (fieldType == "textarea") ||
			    (fieldType == "select-one"))
			{
		    	string = string + frm.elements[e].value + "\|";
		    	//alert("text");
			}

			//
			// CHECKBOX
			//
			if (fieldType == "checkbox")
			{
				if (frm.elements[e].checked==true) {
					var setvalue = "1";
					}
				if (frm.elements[e].checked==false) {
					var setvalue = "0";
					}
			string = string + setvalue + "\|";
			//alert("checkbox");
			}

			//
			// HIDDEN field
			//
			if (fieldType == "hidden")
			{
		    	string = string + frm.elements[e].value + "\|";
		    	//alert("text");
			}
		}

//alert(string);
setCookie(cookieName, string, exp); }

//
// LOAD FORM FIELD SELECTIONS FROM SAVED COOKIES
//

function loadSelections(frm) {
var e;
var z;
var x;
var cookieName;
var fieldArray;
var fieldValues;
var fieldValue;

var formname = frm.id;

// Retrieve form elements from cookie and split into array.

cookieName  = formname;
fieldValues = getCookie(cookieName);
fieldArray  = fieldValues.split("\|");

//alert(fieldArray);
//alert(fieldArray[0]);
//alert(fieldArray[1]);
//alert(fieldArray[2]);
//alert(fieldArray[3]);

		var n = frm.length;
		for (i = 0; i < n; i++) {
			e = frm[i].name;
			z = i;
			z++;
			var fieldType  = frm[i].type;
			var fieldValue = fieldArray[z];

			//
			// TEXT, TEXTAREA, and DROPDOWN
			//
			if ((fieldType == "text") ||
			    (fieldType == "textarea") ||
			    (fieldType == "select-one"))
			{
		    	frm.elements[e].value = fieldValue;
		    	//alert(e);
		    	//alert(fieldValue);
			}

			// CHECKBOX
			//
			if (fieldType == "checkbox")
			{
				fld_checkbox = fieldValue;
				if (fld_checkbox == "1") {
					frm.elements[e].checked = true;
				}
			}

			// RADIO BUTTON
			//
			if (fieldType == "radio") {
				x = fieldValue;
				//alert(x);
				frm.elements[e][x].checked = true;
			}

			//
			// HIDDEN field
			//
			if (fieldType == "hidden")
			{
		    	frm.elements[e].value = fieldValue;
		    	}
		}
}

/// COOKIE FUNCTIONS

function setCookie(name, value, expires, path, domain, secure) {
document.cookie= name + "=" + escape(value) +
((expires) ? "; expires=" + expires.toGMTString() : "") +
((path) ? "; path=" + path : "") +
((domain) ? "; domain=" + domain : "") +
((secure) ? "; secure" : "");
}

function getCookie(name) {
var dc = document.cookie;
var prefix = name + "=";
var begin = dc.indexOf("; " + prefix);
if (begin == -1) {
begin = dc.indexOf(prefix);
if (begin != 0) return null;
} else {
begin += 2;
}
var end = document.cookie.indexOf(";", begin);
if (end == -1) {
end = dc.length;
}
return unescape(dc.substring(begin + prefix.length, end));
}
