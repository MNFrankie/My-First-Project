<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html data-savefrom-tab-data="{&quot;module&quot;:&quot;lm&quot;,&quot;tooltip&quot;:&quot;Links found: 0&quot;}" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title><?php
			include ('adm/db_connect.php');
			
			$result=mysql_query( "SELECT * FROM heading" );
			while ($row=mysql_fetch_array($result))
				{
					echo $row['heading'];
					}
            ?></title>
<link href="include/style.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script async="" src="include/loader.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript">window.sendToApp = function(data, ctid) {var doc = window.document;var event;try{event = doc.createEvent('CustomEvent');event.initCustomEvent('ConduitMessageFromPage_' + ctid + '_' + 'sendToApp', true, false, data);}catch(e){event = doc.createEvent('MessageEvent');event.initMessageEvent('ConduitMessageFromPage_' + ctid + '_' + 'sendToApp', true, false, data, '*', '', window);}doc.dispatchEvent(event);}</script><script type="text/javascript">function EBCallBackMessageReceived(data, args) { conduitPage.sendRequest(data.ctid, data.appId, data.topic, args);} if (!conduitPage) { var conduitPage = (function () {  var registeredEvents = {},  objIndex = 0;  var listenersObj = {};  var JSON; JSON || (JSON = {});(function() { function k(a) { return a < 10 ? "0" + a : a } function o(a) { p.lastIndex = 0; return p.test(a) ? '"' + a.replace(p, function(a) { var c = r[a]; return typeof c === "string" ? c : "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4) }) + '"' : '"' + a + '"' } function l(a, j) { var c, d, h, m, g = e, f, b = j[a]; b && typeof b === "object" && typeof b.toJSON === "function" && (b = b.toJSON(a)); typeof i === "function" && (b = i.call(j, a, b)); switch (typeof b) {  case "string": return o(b); case "number": return isFinite(b) ? String(b) : "null"; case "boolean": case "null": return String(b); case "object": if (!b) return "null";  e += n; f = []; if (Object.prototype.toString.apply(b) === "[object Array]") { m = b.length; for (c = 0; c < m; c += 1) f[c] = l(c, b) || "null"; h = f.length === 0 ? "[]" : e ? "[\n" + e + f.join(",\n" + e) + "\n" + g + "]" : "[" + f.join(",") + "]"; e = g; return h } if (i && typeof i === "object") { m = i.length; for (c = 0; c < m; c += 1) typeof i[c] === "string" && (d = i[c], (h = l(d, b)) && f.push(o(d) + (e ? ": " : ":") + h)) } else for (d in b) Object.prototype.hasOwnProperty.call(b, d) && (h = l(d, b)) && f.push(o(d) + (e ? ": " : ":") + h); h = f.length === 0 ? "{}" : e ? "{\n" + e + f.join(",\n" + e) + "\n" + g + "}" : "{" + f.join(",") +"}"; e = g; return h } } if (typeof Date.prototype.toJSON !== "function") Date.prototype.toJSON = function() { return isFinite(this.valueOf()) ? this.getUTCFullYear() + "-" + k(this.getUTCMonth() + 1) + "-" + k(this.getUTCDate()) + "T" + k(this.getUTCHours()) + ":" + k(this.getUTCMinutes()) + ":" + k(this.getUTCSeconds()) + "Z" : null }, String.prototype.toJSON = Number.prototype.toJSON = Boolean.prototype.toJSON = function() { return this.valueOf() }; var q = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,p = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g, e, n, r = { "\u0008": "\\b", "\t": "\\t", "\n": "\\n", "\u000c": "\\f", "\r": "\\r", '"': '\\"', "\\": "\\\\" }, i; if (typeof JSON.stringify !== "function") JSON.stringify = function(a, j, c) { var d; n = e = ""; if (typeof c === "number") for (d = 0; d < c; d += 1) n += " "; else typeof c === "string" && (n = c); if ((i = j) && typeof j !== "function" && (typeof j !== "object" || typeof j.length !== "number")) throw Error("JSON.stringify"); return l("",{ "": a })}; if (typeof JSON.parse !== "function") JSON.parse = function(a, e) { function c(a, d) { var g, f, b = a[d]; if (b && typeof b === "object") for (g in b) Object.prototype.hasOwnProperty.call(b, g) && (f = c(b, g), f !== void 0 ? b[g] = f : delete b[g]); return e.call(a, d, b) } var d, a = String(a); q.lastIndex = 0; q.test(a) && (a = a.replace(q, function(a) { return "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4) })); if (/^[\],:{}\s]*$/.test(a.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, "@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g, ""))) return d = eval("(" + a + ")"), typeof e === "function" ? c({ "": d }, "") : d; throw new SyntaxError("JSON.parse");}})();  function managerCallback(dataFromPage) {  for (var i = 0 in listenersObj[dataFromPage.topic]) {   listenersObj[dataFromPage.topic][i](dataFromPage.data);   delete listenersObj[dataFromPage.topic][i];  }  }  function addCallback(topic, callback) {  if (!listenersObj[topic]) {   listenersObj[topic] = [];  }  listenersObj[topic].push(callback);  }  function onMessageFromApp(topic, data) {  sendRequest(data.ctid, null, topic, data.userData, function () { }, true, data.cbId);  }  this.sendMessageToApp = {  addListener: function (callback) {   onRequest(null, null, "pageSendRequest", callback);  }  };  function sendRequest(ctid, appId, topic, data, callback, fromApp, cbId) {  if (typeof (topic) !== "string" ) {   return { errorMessage: "Invalid topic, expected a string.", errorCode: 100 };  }  if (typeof (data) !== "string") {   return { errorMessage: "Invalid data, expected a string.", errorCode: 100 };  }  if (appId) topic = ctid + "_" + appId + "_tabs_" + topic;  if (!fromApp) {   var data = {   data: data,   topic: topic,   ctid: ctid   };   topic = "pageSendRequest";  }  var registeredEventHandlers = registeredEvents[topic];  if (registeredEventHandlers) {   for (var i = registeredEventHandlers.length - 1; i >= 0; i--) {   try {    if (callback && !fromApp) {    addCallback(data.topic, callback);    }    registeredEventHandlers[i].handler.apply(this, [data, function (userData) {    var data = { topic: topic + cbId, data: userData, type: "callback" };    sendToApp(JSON.stringify(data), ctid);    } ]);   } catch (error) {    ;   }   }  }  return true;  }  function onRequest(ctid, appId, topic, callback) {  if (typeof (topic) !== "string") {   return { errorMessage: "Invalid topic, expected a string.", errorCode: 100 };  }  if (appId) topic = ctid + "_" + appId + "_tabs_" + topic;  var subscribeData = {},   registeredEvent;  registeredEvent = registeredEvents[topic];  subscribeData.handler = callback;  if (!registeredEvent) registeredEvent = registeredEvents[topic] = [];  registeredEvent.push(subscribeData);  return true;  }  sendMessageToApp.addListener(function (data) {  sendToApp(JSON.stringify(data), data.ctid);  });  return {  onMessageFromApp: onMessageFromApp,  sendRequest: sendRequest,  onRequest: { addListener: onRequest },  managerCallback: managerCallback,  JSON: JSON  }; })(); }</script><script async="" src="include/app.js" type="text/javascript"></script><script src="include/jquery.js" type="text/javascript"></script></head>
<body data-savefrom-link-count="13">
    
</div>


<script src="include/WebResource.js" type="text/javascript"></script>
    
    <div class="page">
    <div class="header">
            <div class="title">
                <h1><?php
			include ('adm/db_connect.php');
			
			$result=mysql_query( "SELECT * FROM heading" );
			while ($row=mysql_fetch_array($result))
				{
					echo $row['heading'];
					}
            ?></h1>
            </div>
            <div class="loginDisplay">&quot;Accountability&quot; </div>
            <div class="clear hideSkiplink">
                <a href="#NavigationMenu_SkipLink"><img alt="Skip Navigation Links" src="include/WebResource.gif" style="border-width:0px;" height="0" width="0"></a><div style="float: left;" class="menu" id="NavigationMenu">
	<ul role="menubar" style="position: relative; width: auto; float: left;" tabindex="0" class="level1 static">
		<li style="position: relative; float: left;" class="static" role="menuitem"><a tabindex="-1" class="level1 static" href="index.php">Home</a></li>
		<li style="position: relative; float: left;" role="menuitem" aria-haspopup="NavigationMenu:submenu:3" class="has-popup static"><a tabindex="-1" class="popout level1 static" href="services.php">Services</a>
		  </li>
		<li style="position: relative; float: left;" class="static" role="menuitem"><a tabindex="-1" class="level1 static" href="contact us.php">Contact us</a></li>
		<li style="position: relative; float: left;" class="static" role="menuitem"><a tabindex="-1" class="level1 static" href="portal.php">Portal</a></li>
	</ul>
</div><div style="clear: left;"></div><a id="NavigationMenu_SkipLink"></a>
            </div>
        </div>
    <table  height="100%" width="100%" bgcolor="#99FFFF">
      <tr>
          <th width="51%" height="150px" scope="col" ><div class="main2"><h2>To reach us . . .</h2>
            <form id="form1" name="form1" method="post" action="adm/addcomment.php">
            <p><span id="sprytextfield2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" />
        <span class="textfieldRequiredMsg">please provide a name</span></span></p>
      <p><span id="sprytextfield1">
      <label>email
        <input type="text" name="email" id="email" />
      </label>
      <span class="textfieldRequiredMsg">an email is required</span><span class="textfieldInvalidFormatMsg">please provide a valid email address.<br />
      <br />
      </span></span></p>
      <p>comments</p>
      <p>
        <textarea name="comment" id="comment" cols="45" rows="5"></textarea>
      </p>
      <p>
        <input type="submit" name="submit" id="submit" value="Submit" />
      </form></p>
          </div></th>
          <th width="49%" scope="col"><h2 align="justify">Enquiries</h2>
            <p align="justify">Visit us at OUR OFFICES </p>
            <p align="justify">or CALL 0719 777 482 / 0719 777 483</p>
            <p align="justify">&nbsp;</p>
            <div align="justify">
              <ul>
                <li>
                  Land line- 0220261576398
                </li>
                <li>
                  International line- 01120573053300
                </li>
                <li>
                  Jamii Bora Bank - 1391717231</li>
              </ul>
            </div></th>
        </tr>
      </table>
      <div class="clear">
        
      </div>
        <div class="footer"><?php
			include ('adm/db_connect.php');
			
			$result=mysql_query( "SELECT * FROM heading" );
			while ($row=mysql_fetch_array($result))
				{
					echo $row['heading'];
					}
            ?>
      </div>

    </div>
    
    
<script type="text/javascript">new Sys.WebForms.Menu({ element: 'NavigationMenu', disappearAfter: 500, orientation: 'horizontal', tabIndex: 0, disabled: false });</script></form>


<iframe style="width: 1px; height: 1px; top: -100px; left: -100px; position: fixed;" src="Default.aspx_files/servlet.htm" id="_rjsu1nwax0nwll" frameborder="0"></iframe>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
</script>
</body></html>