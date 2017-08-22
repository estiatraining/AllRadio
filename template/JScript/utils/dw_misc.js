/*************************************************************************
  This code is from Dynamic Web Coding at http://www.dyn-web.com/
  Copyright 2004 by Sharon Paine 
  See Terms of Use at http://www.dyn-web.com/bus/terms.html
  regarding conditions under which you may use this code.
  This notice must be retained in the code as is!
*************************************************************************/

//  sub-window code for presenting example documents - version date Dec 2003
//  Some example links: <a href="yo.html" onclick="return openSubWin(this.href)">link</a> 
//  <a href="some.html" onclick="return openSubWin(this.href, 'win2', null, null, 800, 600, 'resizable')">link</a>
function openSubWin(url, nm, x, y, w, h, atts) {
  nm = nm || "subwindow";
  atts = atts || "menubar,resizable,scrollbars";
  w = w || 600; h = h || 450;
  x = (typeof x=="number")? x: window.opera? 100: Math.round( (screen.availWidth - w)/2 );
  y = (typeof y=="number")? y: window.opera? 20: Math.round( (screen.availHeight - h)/2 );
  atts += ',width='+w+',height='+h+',left='+x+',top='+y;
  var win = window.open(url, nm, atts); 
  if (win) {
    if (!win.closed) { win.resizeTo(w,h); win.moveTo(x,y); win.focus(); return false; }
  } 
  return true;
}

// attach title to links that open sub-windows
function setSubWinTitle() {
  var lnks, att;
  if ( document.getElementsByTagName ) lnks = document.getElementsByTagName("A");
  if ( lnks && lnks[0].getAttribute ) {
    for (var i=0; lnks[i]; i++) {
      if ( ( att = lnks[i].getAttribute("onclick") )  && att.toString().indexOf("openSubWin") != -1 ) 
        lnks[i].setAttribute("title", "opens sub-window");
    }
  }
}

// set target attribute to "_blank" if link has class="blank"
function setTargetBlank() {
  var lnks;
  if ( document.getElementsByTagName ) lnks = document.getElementsByTagName("A");
  if ( lnks && lnks[0].getAttribute ) {
    for (var i=0; lnks[i]; i++) {
      if ( lnks[i].getAttribute("href") && lnks[i].className == "blank" )
        lnks[i].target = "_blank";
    }
  }
}

// pass id of elements in which you want no marquee to be displayed around links
// for example: preventMarquee("navs", "text");
function preventMarquee() {
  if ( document.getElementById && document.getElementsByTagName ) {
    for (var i=0; arguments[i]; i++) {
      var el = document.getElementById( arguments[i] );
      var lnks = el.getElementsByTagName('A');
      for (var j=0; lnks[j]; j++) lnks[j].hideFocus = true;
    }
  }
}

//	modified from www.hivelogic.com/safeaddress/	by Dan Benjamin 
//	presented at www.alistapart.com/stories/spam/  
//  to insert email address anywhere in document:
//  <script type="text/javascript">noSpamEmail('link text here')</script> 
function noSpamEmail(txt) {
  var address = '<a href="';
  address += "ma";  address += "il";  address += "to:";
  address += "&#99;&#111;&#110;&#116;&#97;&#99;&#116;";	
  address += "&#64;";
  address += "&#100;&#121;&#110;&#45;&#119;&#101;&#98;&#46;&#99;&#111;&#109;";
  address += '">' + txt + "<\/a>";
  document.write(address);
}


