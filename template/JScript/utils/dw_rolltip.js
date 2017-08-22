/*************************************************************************
  This code is from Dynamic Web Coding at http://www.dyn-web.com/
  Copyright 2002-4 by Sharon Paine 
  See Terms of Use at http://www.dyn-web.com/bus/terms.html
  regarding conditions under which you may use this code.
  This notice must be retained in the code as is!
*************************************************************************/

/*
  dw_rolltip.js   version date: Feb 2004  
  requires dw_viewport.js
  algorithm for time-based animation from youngpup.net
*/

var RollTip = {
  offX: 12,
  offY: 12,
  ID: "rolltipDiv",
  aniLen: 300,  // duration of clipping animation
  ready: false,
  t1: null,
  t2: null,
  tip: null,
  
  init: function() {
    if ( document.createElement && document.body && 
        typeof document.body.appendChild != "undefined" && !window.opera ) {
      var el = document.createElement("DIV");
      el.className = "rolltip"; el.id = this.ID;
      document.body.appendChild(el);
      this.mult = el.offsetWidth/this.aniLen/this.aniLen;	
      el.style.clip = "rect(0, 0, 0, 0)";
      el.style.visibility = "visible";
      this.ready = true;
    }
  },

  reveal: function(msg, e) {
    if (this.t1) clearTimeout(this.t1);	if (this.t2) clearTimeout(this.t2); 
    this.tip = document.getElementById( this.ID );
    this.writeTip(""); // for mac ie 
    this.writeTip(msg);
    viewport.getAll();
    this.w = this.tip.offsetWidth; this.h = this.tip.offsetHeight;
    this.startTime = (new Date()).getTime();
    this.positionTip(e);
    this.t1 = setInterval("RollTip.rollOut()", 10);
  },
  
  rollOut: function() {
    var elapsed = (new Date()).getTime() - this.startTime;
  	if (elapsed < this.aniLen) {
  		var cv = this.w - Math.round( Math.pow(this.aniLen - elapsed, 2) * this.mult );
  		this.clipTo(0, cv, this.h, 0);
  	} else {
      this.clipTo(0, this.w, this.h,0);
      clearInterval(this.t1);
    }
  },
  
  conceal: function() {
  	if (this.t1) clearInterval(this.t1);	if (this.t2) clearInterval(this.t2);
  	this.startTime = (new Date()).getTime();
  	this.t2 = setInterval("RollTip.rollUp()", 10);
  },
  
  rollUp: function() {
  	var elapsed = (new Date()).getTime() - this.startTime;
  	if ( elapsed < this.aniLen ) {
  		var cv = Math.round( Math.pow(this.aniLen - elapsed, 2) * this.mult );
  		this.clipTo(0, cv, this.h, 0);
  	} else {
      this.clipTo(0, 0, this.h, 0);
      clearInterval(this.t2);
      this.tip = null;
    }  
  },
  
  writeTip: function(msg) {
    if ( this.tip && typeof this.tip.innerHTML != "undefined" ) this.tip.innerHTML = msg;
  },
  
  clipTo: function(top, rt, btm, lft) {
    this.tip.style.clip = "rect("+top+"px, "+rt+"px, "+btm+"px, "+lft+"px)";
  },
  
  positionTip: function(e) {
    var x = e.pageX? e.pageX: e.clientX + viewport.scrollX;
    var y = e.pageY? e.pageY: e.clientY + viewport.scrollY;
    if ( x + this.tip.offsetWidth + this.offX > viewport.width + viewport.scrollX )
      x = x - this.tip.offsetWidth - this.offX;
    else x = x + this.offX;
  
    if ( y + this.tip.offsetHeight + this.offY > viewport.height + viewport.scrollY )
      y = ( y - this.tip.offsetHeight - this.offY > viewport.scrollY )? y - this.tip.offsetHeight - this.offY : viewport.height + viewport.scrollY - this.tip.offsetHeight;
    else y = y + this.offY;

    this.tip.style.left = x + "px"; this.tip.style.top = y + "px";
  }

}

var imageHandler = { 
  imgs:[], path:"", preload:function() { for(var i=0;arguments[i];i++) {
    var img=new Image(); img.src=this.path+arguments[i]; this.imgs[this.imgs.length]=img;}}
}