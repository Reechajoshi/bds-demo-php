
// Java script utilities
//////////////////////////////////////////////////////////////////////////////////////////

CUtil = function() {}

CUtil.M_KEY_CODE_BACK= 8
CUtil.M_KEY_CODE_TAB= 9
CUtil.M_KEY_CODE_ENTER= 13
CUtil.M_KEY_CODE_ESCAPE= 27
CUtil.M_KEY_CODE_LEFT_ARROW= 37
CUtil.M_KEY_CODE_TOP_ARROW= 38
CUtil.M_KEY_CODE_RIGHT_ARROW= 39
CUtil.M_KEY_CODE_BOTTOM_ARROW= 40
CUtil.M_KEY_CODE_DEL= 46
CUtil.M_KEY_CODE_FUNCTION_1= 112
CUtil.M_KEY_CODE_FUNCTION_2= 113
CUtil._M_FB = false


CUtil.init = function()
{
}

CUtil.removeNamedIndex = function(x,ni)
{
	var na = new Array();
	
	for(i in x)
	{
		if(i!=ni) 
			na[i]=x[i]; 
	}	
	
	return(na);
}	

CUtil.delCookie = function(name)
{
	CUtil.setCookie(name,"",-1);
}

CUtil.showErrorInDivWithId = function( div_id , msg )
{
	jQuery("#"+div_id).hide();
	jQuery("#"+div_id).show();
	jQuery('#'+div_id).html(msg);
	return false;
}


CUtil.validatePerticular = function(name)
{
	var arr = document.getElementsByName( "perticular" ) ; 
	//return false;
}

CUtil.addPerticluar = function( ob ) //Used for proforma as well as Invoice
{
	var pardiv = document.getElementById('perticulardiv');
	if( pardiv )
	{
		var id = "pert-" + Math.random(); 
		newPerticularHTML = "<font size=1><div style='clear:both;padding-top:10px;' ><table  class=txt style='font-size: 12px;' ><tr><td style='width:501px;'><div style='float:left;width:100%;'><textarea  name='perticular[]' id='"+ id +"' style='width: 450px;resize:none;font-family:Lucida Sans Unicode,Verdana,Tahoma,Arial;font-size:9pt;'></textarea></div></td><td><div style='float:left;'><input type=text name=amount[] onKeyUp='CUtil.amountIncreaseShortCut(this,event);'  onKeyPress='return(CUtil._decimalNumersOnlyCB(event));' ></div><div style='padding-left:3px'><a style='text-decoration:none;color:#4a7d8e;' href='#' onClick='CUtil.removePerticluar(this); return (false);' >Remove</a></div></td></tr></table></div></font>";
		
		var newd = document.createElement('DIV');
		newd.setAttribute('name','pertdiv');
		newd.innerHTML = newPerticularHTML;
		
		pardiv.appendChild( newd );
		tinyMCE.execCommand('mceAddControl', false, id );
	}
}

CUtil.removePerticluar=function(ob)
{
	var remdiv = CUtil.getParentByName(ob,'pertdiv') , 
		pardiv = CUtil.getParentByName(ob,'perticulardiv') ;
	
	if( pardiv && remdiv )
	{
		pardiv.removeChild( remdiv );
	}
}


CUtil.addPerticluarWithUnit = function( ob ) //Used for proforma as well as Invoice
{
	var pardiv = document.getElementById('perticular_unit_div');
	if( pardiv )
	{
		var id = "pert-" + Math.random(); 
		newPerticularHTML = "<font size=1><div style='clear:both;padding-top:10px;' ><table  class=txt style='font-size: 12px;clear:both;' ><tr><td style='width:501px !important;'><div  style = 'float:left;padding-top:10px;width:100%;'><textarea  name='perticular[]' id='"+id+"' style='width:450px;resize:none;font-family:Lucida Sans Unicode,Verdana,Tahoma,Arial;font-size:9pt;'></textarea></div></td><td><div style='float:left;'><input type=text name=amount[] onKeyUp='CUtil.amountIncreaseShortCut(this,event);'  onKeyPress='return(CUtil._decimalNumersOnlyCB(event));' ></div></td><td><div style='float:left;padding-left:15px;'><input type=text name=unit[] onKeyPress=' return(CUtil._decimalNumersOnlyCB(event));' ></div><div style='padding-left:3px;'><a style='text-decoration:none;color:#4a7d8e;' href='#' onClick='CUtil.removePerticluarWithUnit(this); return (false);' >Remove</a></div></td> </tr></table></div></font>";
		
		var newd = document.createElement('DIV');
		newd.setAttribute('name','pertdiv');
		newd.innerHTML = newPerticularHTML;
		
		pardiv.appendChild( newd );
		tinyMCE.execCommand('mceAddControl', false, id );
	}
}

CUtil.removePerticluarWithUnit=function(ob)
{
	var remdiv = CUtil.getParentByName(ob,'pertdiv') , 
		pardiv = CUtil.getParentByName(ob,'perticular_unit_div') ;
	
	if( pardiv && remdiv )
	{
		pardiv.removeChild( remdiv );
	}
}


CUtil.formatAmountOnLoad=function(obj) //K-> amt*1000 , L-> amt*100000
{
	if( window.clientCountry == 1 )
		{
			
			CUtil.formatCurrencyIndia( obj );
		}
		else if( window.clientCountry == 2 )
			CUtil.formatCurrencyUK( obj );
}


CUtil.amountIncreaseShortCut=function(obj ,event) //K-> amt*1000 , L-> amt*100000
{
	if( ( obj.value.length ) > 0 ) 
	{
		var tmp = obj.value.replace(/,/g,"");
		obj.value = tmp.replace(/ /,"");
		if( event.keyCode == 75 ) //key -> k
		{ 	
			obj.value = parseFloat( obj.value )*1000 ;
		}
		if( event.keyCode == 76 ) //key -> l
		{
			obj.value = parseFloat( obj.value )*100000 ;
		}
		if( event.keyCode == 190 ) // key -> .
		{
			if( obj.value.split(".").length - 1 > 1 ) //Prevent user frm typing multiple "." 
			{
				event.preventDefault();
				//obj.value = original_val.substring( 0 , original_val.length - 1 ) ;
				obj.value = obj.value.substring( 0 , obj.value.length - 1 ) ; //strip the last char (.)
				return false;
			}
		}
		
		if( window.clientCountry == 1 )
		{	
			CUtil.formatCurrencyIndia( obj );
		}
		else if( window.clientCountry == 2 )
		{
			CUtil.formatCurrencyUK( obj );
		}
    }
	
}



CUtil.setCookie = function( name, value, expires, path, domain, secure ) 
{
	// set time, it's in milliseconds
	var today = new Date();
	today.setTime( today.getTime() );

	//day to ms = expires * 1000 * 60 * 60 * 24;
	if (CUtil.varok(expires))
		expires = new Date( today.getTime() + (expires) ); 

	document.cookie = name + "=" +escape( value ) +
	( ( expires ) ? ";expires=" + expires.toGMTString() : "" ) + 
	( ( path ) ? ";path=" + path : "" ) + 
	( ( domain ) ? ";domain=" + domain : "" ) +
	( ( secure ) ? ";secure" : "" );
}

CUtil.getCookie = function(check_name)
{
	var a_all_cookies = document.cookie.split( ';' );
	var a_temp_cookie = '';
	var cookie_name = '';
	var cookie_value = '';
	var b_cookie_found = false;
	
	for ( i = 0; i < a_all_cookies.length; i++ )
	{
		a_temp_cookie = a_all_cookies[i].split( '=' );
		
		cookie_name = a_temp_cookie[0].replace(/^\s+|\s+$/g, '');
	
		if ( cookie_name == check_name )
		{
			b_cookie_found = true;
			if ( a_temp_cookie.length > 1 )
			{
				cookie_value = unescape( a_temp_cookie[1].replace(/^\s+|\s+$/g, '') );
			}
			return cookie_value;
			break;
		}
		a_temp_cookie = null;
		cookie_name = '';
	}

	if ( !b_cookie_found )
		return null;
}

CUtil.getElementsById = function(sId)
 {
    var outArray = new Array();	
	
	if(typeof(sId)!='string' || !sId)
	{
		return outArray;
	};
	
	if(document.evaluate)
	{
		var xpathString = "//*[@id='" + sId.toString() + "']";
		var xpathResult = document.evaluate(xpathString, document, null, 0, null);
		while ((outArray[outArray.length] = xpathResult.iterateNext())) { }
		outArray.pop();
	}
	else if(document.all)
	{
		if(CUtil.varok(document.all[sId]))
		{
			if(CUtil.varok(document.all[sId].length))
			{
				for(var i=0,j=document.all[sId].length;i<j;i+=1){
				outArray[i] =  document.all[sId][i];}
			}
			else
				outArray.push(document.all[sId]);
		}		
	}
	else if(document.getElementsByTagName)
	{	
		var aEl = document.getElementsByTagName( '*' );	
		for(var i=0,j=aEl.length;i<j;i+=1)
		{	
			if(aEl[i].id == sId )
			{
				outArray.push(aEl[i]);
			};
		};	
		
	};
	
	return outArray;
 }
 
 CUtil.isMM = function(e) { return(e.type=="mousemove") }
 CUtil.isMD = function(e) { return(e.type=="mousedown") }
 CUtil.isMU = function(e) { return(e.type=="mouseup") }
 
 CUtil.ensureRealEvent = function(e,twin)
 {
	if(CUtil.varok(e))
		return(e);
	else if((CUtil.varok(twin)) && (CUtil.varok(twin.event)))
		return(twin.event);	
	else if(CUtil.varok(window.event))
		return(window.event);
	else
		return(e);
 }
 
 CUtil.getEventSrc = function(e)
 {
	if(CUtil.varok(e.target))
		return(e.target);
	else if(CUtil.varok(e.srcElement))
		return(e.srcElement);
	else
		return(false);
 }
 
 CUtil.getEventDestSrc = function(e)
 {
	if(CUtil.varok(e.toElement))
		return(e.toElement);
	else if(CUtil.varok(e.relatedTarget))
		return(e.relatedTarget);
	else
		return(false);
 }
 
 CUtil.getClassName = function(ob)
 {
	var c = ob.getAttribute("ClassName");
	return(((c) ? (c) : (ob.getAttribute("class"))));
 }
 
 CUtil.getNeighbourByName = function(ob,nm,tagn,nests,depth)
 {
	if(!CUtil.varok(nests)) nests = 1;
	if(!CUtil.varok(depth)) depth = true;
	try { for(var x=0;(x<nests); ) { ob=ob.parentNode; if(ob.tagName==tagn) { x++; } } } catch(e) {}
	return(CUtil.getChildByName(ob,nm,tagn,depth));
 }
 
 CUtil.getNeighbourByClass = function(ob,nm,tagn,nests,depth)
 {
	if(!CUtil.varok(nests)) nests = 1;
	if(!CUtil.varok(depth)) depth = true;
	for(var x=0; x<nests; x++) { ob=ob.parentNode; }
	return(CUtil.getChildByClass(ob,nm,tagn,depth));
 }

CUtil.toggleViewByA = function(anob,visTXT,hidTXT,divob)
{
	if(divob.style.display=='none')
	{
		anob.innerHTML=hidTXT;
		divob.style.display='block';
	}
	else
	{
		anob.innerHTML=visTXT;
		divob.style.display='none';
	}
}

CUtil.switchDivViewIn = function(p,hd,vd)
{
	for(var h in hd)
	{
		var hdelm = CUtil.getChildByName(p,hd[h],'DIV',true);
		if(hdelm)
			hdelm.style.display='none';
	}

	for(var v in vd)
	{
		var vdelm = CUtil.getChildByName(p,vd[v],'DIV',true);

		if(vdelm)
			vdelm.style.display='block';
	}
}

CUtil.toggleDivInDOM = function(sob,dname,upc)
{
	var divob = CUtil.getNeighbourByName(sob,dname,'DIV',upc,true);
	if(divob)
	{
		if(divob.style.display=='none')
			divob.style.display='block';
		else
			divob.style.display='none';
	}
}

CUtil.roundFloat = function(f, p)
{
	var base10P = Math.pow(10, p);
	return((Math.round(f*base10P)/ base10P).toFixed(p));
} 

 CUtil.getParentByClass = function(ob,nm)
 {
	try
	{
		if(CUtil.varok(ob.parentNode))
		{
			if(CUtil.getClassName(ob.parentNode)==nm)
				return(ob.parentNode);
			
			return(CUtil.getParentByClass(ob.parentNode,nm));
		}			
	} catch(err) {}
	
	return(false);
 }

 CUtil.deepestSoleChild = function(ob)
 {
	try
	{
		if(!CUtil.varok(ob.childNodes[0].tagName))
			return(ob);
		else
			return(CUtil.deepestSoleChild(ob.childNodes[0]));
	}
	catch(e)
	{
		CUtil.log("deepestSoleChild: " + e.message);
	}
	
	return(ob);
 }
 
 CUtil.getParentByName = function(ob,nm)
 {
	try
	{
		if(CUtil.varok(ob.parentNode))
		{
			if(ob.parentNode.getAttribute("name")==nm)
				return(ob.parentNode);
			
			return(CUtil.getParentByName(ob.parentNode,nm));
		}			
	} catch(err) {}
	
	return(false);
 }
 
CUtil.echoError = function( msg )
{	
	jQuery.growlUI( '' , '<h2>'+msg+'</h2>' ,  2000 );
	return false;
}

CUtil.echoSuccess = function( msg )
{	
	jQuery.growlUI( '' , '<h2>'+msg+'</h2>' ,  2000 );
	return false;

}
 
CUtil.getChildByName = function(ob,nm,tagn,depth)
{
	try
	{
		for( var x = 0; ob.childNodes[x]; x++ )
		{
			//if(ob.childNodes[x].tagName) alert(ob.childNodes[x].tagName);
			
			if(ob.childNodes[x].tagName==tagn && ob.childNodes[x].getAttribute("name")==nm)
				return(ob.childNodes[x]);
			else if(depth)
			{
				var ret = CUtil.getChildByName(ob.childNodes[x],nm,tagn,depth);
				if(ret!=false) return(ret);
			}
		}
	} catch(err) { }
	
	return(false);
}


CUtil.getChildByClass = function(ob,cln,tagn,depth)
{
	try
	{
		for( var x = 0; ob.childNodes[x]; x++ )
		{
			//if(ob.childNodes[x].tagName==tagn) alert(CUtil.getClassName(ob.childNodes[x]));
			
			if(ob.childNodes[x].tagName==tagn && CUtil.getClassName(ob.childNodes[x])==cln)
				return(ob.childNodes[x]);
			else if(depth)
			{				
				var ret = CUtil.getChildByClass(ob.childNodes[x],cln,tagn,depth);
				if(ret!=false) return(ret);
			}
		}
	} catch(err) {}
	
	return(false);
}

CUtil.applyToChildNodes = function(ob,tagn,depth,func)
{
	try
	{
		//alert(ob.childNodes.length);
		for( var x = 0; ob.childNodes[x]; x++ )
		{			
			if(ob.childNodes[x].tagName==tagn)
				func(ob.childNodes[x]);
			
			if(depth)
				CUtil.applyToChildNodes(ob.childNodes[x],tagn,depth,func);
		}
	} catch(e) {CUtil.log(e.message);}	
}

CUtil.applyToMultiChildNodes = function(ob,tags,depth,func)
{
	try
	{
		for( var x = 0; ob.childNodes[x]; x++ )
		{			
			for( var i in tags)
			{
				if(ob.childNodes[x].tagName==tags[i])
					func(ob.childNodes[x]);
			}
			
			if(depth)
				CUtil.applyToChildNodes(ob.childNodes[x],tags,depth,func);
		}
	} catch(e) {CUtil.log(e.message);}	
}

CUtil.applyToAllChildNodes = function(ob,depth,func)
{
	try
	{
		//alert(ob.childNodes.length);
		for( var x = 0; ob.childNodes[x]; x++ )
		{			
			func(ob.childNodes[x]);			
			if(depth) CUtil.applyToAllChildNodes(ob.childNodes[x],depth,func);
		}
	} catch(e) {CUtil.log(e.message);}	
}

CUtil.getChildById = function(ob,id,tagn,depth)
{
	try
	{
		for( var x = 0; ob.childNodes[x]; x++ )
		{
			if(ob.childNodes[x].tagName==tagn && ob.childNodes[x].getAttribute("id")==id)
				return(ob.childNodes[x]);
			else if(depth)
			{
				var ret = CUtil.getChildById(ob.childNodes[x],id,tagn,depth);
				if(ret!=false) return(ret);
			}
		}
	} catch(e) {CUtil.log(e.message);}
	
	return(false);
}

CUtil.forwardPadByZeros = function(n,pc)
{
	n = String(n);
	for(var i=n.length;i<pc;i++)
		n ="0" + n;
	
	return(n);
}

CUtil.getNow = function()
{
	var now = new Date();	
	return(CUtil.forwardPadByZeros(now.getHours(),2) + ":" + CUtil.forwardPadByZeros(now.getMinutes(),2) + ":" + CUtil.forwardPadByZeros(now.getSeconds(),2));
}

//but: 1:2:3=l:m:r & ie= 1:4:2 l:m:r
	
CUtil.isMMButtonReleased = function(e) //only works in IE (FF doesn't give us this info)
{
	return((CUi._isIE)&&(e.button==0));
}

CUtil.getEventKeyCode= function(e)
{
	return(e.keyCode);
}

CUtil.isOkCode = function(e,ct,cf,ce1)
{
	var c = CUtil.getEventKeyCode(e);
	return( (c>=ct && c<=cf) || (c==8) || (c==ce1) );
}

CUtil._M_RETR_IMG_STORE = new Array();

CUtil.dynRetrImg = function(iname,isrc)
{
	try 
	{
		//TODO: maybe a good idea to check oncomple asyncronously
		CUtil._M_RETR_IMG_STORE[iname] = CUi.doc.createElement('img');
		CUtil._M_RETR_IMG_STORE[iname].setAttribute("name",iname);
		CUtil._M_RETR_IMG_STORE[iname].src = (isrc);
		CUtil._M_RETR_IMG_STORE[iname].border=0;
	} catch(e) {}
}

CUtil.varok = function(v)
{
	return((typeof(v) != "undefined") && (v!=null));
}

CUtil.hexMap = "0123456789ABCDEF";
CUtil.dec2hex = function(d)
{
	var h = CUtil.hexMap.substr(d&15,1);
	while(d>15) {d>>=4;h=CUtil.hexMap.substr(d&15,1)+h;}
	return(h);
}

CUtil.getRealColourHex = function(c)
{
	if(c.slice(0,3) == 'rgb')
	{
		var rgb = c.slice(4).split(',');
		return('#'+CUtil.dec2hex(parseInt(rgb[0]))+CUtil.dec2hex(parseInt(rgb[1]))+CUtil.dec2hex(parseInt(rgb[2])));
	}
	else
		return(c.toUpperCase());
}

CUtil.strTrim = function(s)
{
	return s.replace(/^\s*/, "").replace(/\s*$/, "");
}

CUtil.isTimeStr = function(s)
{
	return(s.match(/[0-9]+[:][0-9]+[:][0-9]+/)==s);
}

CUtil.getSafeVal = function(s)
{
	return((((typeof s =="string")&&(s.indexOf("NaN")==-1))?(s):('')));
}

// This will return true even if the first part of n is a number; i.e: 1234AA will eq true
CUtil.isNumber = function(n)
{
   var _n=parseInt(n);
   return(!isNaN(_n));
}

CUtil.isKeyEnterPressed = function(e)
{
	e = CUtil.ensureRealEvent(e);
	return(CUtil.getEventKeyCode(e) == CUtil.M_KEY_CODE_ENTER);
}

CUtil.logDTFormat = "";
CUtil.logHist = new Array();
CUtil.logViewID = "LOGVIEW";

CUtil.log = function(msg)
{
	CUtil.logHist.push(new Array(CUtil.getNow(), msg));
	
	if(CUtil.logHist.length>1000)
		CUtil.logHist.splice(0,1);		
}

CUtil.displayLog = function()
{
	var gl = new CGrid(CUtil.logViewID,false,false);
	
	gl.addCol("ts",140,"Time");
	gl.addCol("msg",300,"Log");
	
	var rvlog = CUtil.logHist.reverse();
	for(var ix in  CUtil.logHist)
		gl.addRow(ix,CUtil.logHist[ix]);
		
	gl.displayGridInWindow(CUtil.logViewID,CUtil.logViewID,"Log",405,200);
}

CUtil.dynLinkScrip = function(scripSrc,cb)
{
	var head= document.getElementsByTagName('head')[0];
	
	CUtil.applyToChildNodes(head,"SCRIPT",false,function(ob) { 
		if(ob.getAttribute('src')==scripSrc)
			head.removeChild(ob);
	} );
	
   var script = document.createElement('script');
   script.type = 'text/javascript';
   script.src = scripSrc;   
   
   //TODO: current only supported in FF; use onreadystatechange for IE.
   script.onload=function() { cb(); }
   
   head.appendChild(script);
}

CUtil.serializeAll = function(oarr,excf)
{
	var szfo = '';
	
	for(var i in oarr)
		if(typeof oarr[i] == 'object')
			{ szfo += CUtil.serialize(oarr[i],true); }
			
	return(szfo);
}
		
CUtil.arrKeyJoin = function(arr,glue)
{
	var ret = "";
	for(var key in arr)
		ret += key + glue;
	
	if(ret=="")
		ret = ret.slice(0,-1);
		
	return(ret);
}

CUtil.arrKeySplit = function(ser,glue,allval)
{
	var parts = ser.split(glue);
	var ret = new Array();
	for(var i in parts)
	{
		if((parts[i]!="") && (parts[i].length!=0))
			ret[parts[i]] = allval;
	}
	
	return(ret);
}

CUtil.toBool = function(v) //Boolean(String(false))!=false the madness that is JS!
{
	if(v=="false")
		return(false);
	else if(v=="true")
		return(true);
	else
		return(Boolean(v));
}

CUtil.getCleanArray = function(asrc)
{
	var adst = new Array();
	for(var i in asrc)
	{
		if((i.length>0) && (asrc[i].length>0) && (asrc[i]!=""))
			adst[i] = asrc[i];
	}
	return(adst);
}

CUtil.cloneHeadEx = function(src,dst)
{
	var head_src = src.document.getElementsByTagName('head')[0];
	var head_dst = dst.document.getElementsByTagName('head')[0];
	
	for(var x=0; head_src.childNodes[x]; x++)
		head_dst.appendChild(head_src.childNodes[x].cloneNode(true));	
}

CUtil.spawnx = function(f,tot)
{
	setTimeout( f, tot);
}

CUtil.startsWith = function(str,chk)
{
	return(str.slice(0,chk.length) == chk);
}
CUtil.waitForIt = function(t,cb,prm)
{
	var exitNow = false;
	
	setTimeout( function() {
		exitNow = (cb(prm));
		if(!exitNow)
			CUtil.waitForIt(t,cb,prm);
	}, t);
}

CUtil.POP_IMG_ID = 'ABS_POP_IMG';

CUtil.popImg = function(uri,s,w,h)
{
	if((!CUtil.varok(w))||(!CUtil.varok(h)))
	{
		var p = uri.split('_');
		
		if((p.length>=2)&&(CUtil.isNumber(p[p.length-1]))&&(CUtil.isNumber(p[p.length-2])))
			{ w = parseInt(p[p.length-2]); h = parseInt(p[p.length-1]); }
		else
			return false;
	}
	
	if(CUtil.varok(s))
		{ w *= s; h *= s; }
	
	var l = ((CUi._mouseX + CUi.doc.body.scrollLeft) - (w/2));
	var t = ((CUi._mouseY + CUi.doc.body.scrollTop) - (h/2));
	
	if((t+h)>(CUi.doc.body.scrollTop+CUi.doc.body.clientHeight))
		t=(CUi.doc.body.scrollTop+CUi.doc.body.clientHeight)-h;
	
	if((l+w)>(CUi.doc.body.scrollLeft+CUi.doc.body.clientWidth))
		l=(CUi.doc.body.scrollLeft+CUi.doc.body.clientWidth)-w;
		
	if(l<0) l=0; if(t<0) t=0;
	
	var eldiv = CUi.doc.createElement('div');
	eldiv.setAttribute('id',CUtil.POP_IMG_ID);
	eldiv.setAttribute('name',CUtil.POP_IMG_ID);
	eldiv.style.display='block';
	eldiv.style.padding = '5px';
	eldiv.style.border = '#888 1px solid';
	eldiv.style.backgroundColor = '#aaa';
	eldiv.style.position='absolute';
	eldiv.style.left = l; eldiv.style.top = t;
	eldiv.innerHTML = 'loading...';	
	
	var elimg = CUi.doc.createElement('img');
	elimg.src = uri; elimg.border=0;
	elimg.width=w; elimg.height=h;
	elimg.style.cursor = ((CUi._isFF) ? ("pointer") : ("hand"));
	elimg.onclick = function() { eldiv.parentNode.removeChild(eldiv) }
	
	CUi.doc.body.appendChild(eldiv);
		
	CUtil.waitForIt( function() {
		if(elimg.complete)
		{
			try 
			{
				eldiv.innerHTML='';
				eldiv.style.background ='#fff url(images/2thatch.gif) repeat scroll top left';
				eldiv.appendChild(elimg);
			} catch(e) {}
			
			return(true);
		}
		else
			return(false);
	} );
}

CUtil.strsub = function(str,nedl,sub)
{
	var i=-1; //alert(typeof str);
	if ((i=str.indexOf(nedl)) > -1)
		return(str.substring(0,i)+sub+str.substring(i+sub.length));
	else
		return(str);
}

CUtil.strsubex = function()
{
	var args=CUtil.strsub.arguments;
	var Base=args[0];
	var Seek,Len,ix1,ix2,ix3;
	for (ix1=1; ix1<args.length; ix1++)
	{
		ix2=ix1-1;
		Seek='{'+ix2+'}';
		if ((ix3=Base.indexOf(Seek)) > -1)
		{
			Len=Seek.length;
			Base=Base.substring(0,ix3)+args[ix1]+Base.substring(ix3+Len);
		}
	}
	return Base;
}

CUtil.absIX = 1;

CUtil.addFileUp = function(ancClass,stxt,cid,bid,ifix)
{
	var cob = document.getElementById(cid);	

	if(cob)
	{
//		var divs = cob.getElementsByTagName('input');
		var mID = ifix + CUtil.absIX++;
		var newI = document.createElement('div');
		newI.setAttribute('name','filecont');
		newI.setAttribute('class','gencon'); //IE doesn;t support this technique..
		qh=CUi.getAgentVal("<div class=gencon>",'') + "<div class=gensideblock><div class=txt>" + stxt + "</div></div><div class=gensideblock><input type=file name='" + mID + "' size=30 /></div><div class=gensideblock><a class='" + ancClass + "' href=# onclick=\"var p=CUtil.getParentByName(this,'filecont');p.parentNode.removeChild(p);CUtil.rmvFileUpSBut('"+cid+"','"+bid+"');return(false);\">Remove</a></div>" + CUi.getAgentVal('</div>','');

		newI.innerHTML=qh;
		cob.appendChild(newI);	
		CUtil.rmvFileUpSBut(cid,bid);
	}
}

CUtil.rmvFileUpSBut = function(cid,bid)
{
	var cob = document.getElementById(cid);	
	var bob = document.getElementById(bid);	

	if(cob && bob)
	{
		if(cob.childNodes.length==0 && bob.style.display!='none')
			bob.style.display='none';
		else if(bob.style.display!='block')
			bob.style.display='block';
	}
}

CUtil.setHand = function(ob,doit)
{
	if(doit)
	{
		ob.style.cursor=((CUi._isIE)?('hand'):('pointer'));
	}
	else
		ob.style.cursor='default'; 
}

CUtil.getDim = function(bwidth,safety)
{
	if(!CUtil.varok(safety))
		safety = 0;
		
	if(bwidth)
		return(CUi.doc.body.clientWidth-safety);
	else
		return(CUi.doc.body.clientHeight-safety);
}

CUtil.markAll = function(ids,m)
{
	var els = CUtil.getElementsById(ids);

	for(var x=0; x< els.length;x++)
	{
		els[x].checked=m;
	}
}

CUtil.mergeAssoArr = function(asrc, atmpl)
{
	var p = atmpl;
	for(var i in asrc)
	{
		p[i] = asrc[i];
	}	
	return(p);
}

CUtil.isfunc = function(f)
{
	return(typeof(f) == 'function');
}

CUtil.formatCurrencyIndia = function(obj) 
{
	var ret_val= "" ;
	var number2 = obj.value ;
	if ( /^0/.test(obj.value) || /^\./.test(obj.value) ) //Dont allow 0 and "." at the beginning of amout
	{
		obj.value = "";
	}

	var tmp = number2.replace(/,/g,"");
	number2 = tmp.replace(/ /,"");
	var numberStr = number2.toString() ;
	
	var isFloat = numberStr.indexOf(".") > 0 ;
	
	
	if( isFloat )
	{
		// NOTE : when "." is not present then integerPart becomes "" and fractionpart becomes the value typed
		
		var integerPart = number2.substring( 0 , number2.indexOf(".") ) ;
		var fractionalPart =  number2.substring( number2.indexOf(".")+1 , number2.length );
		
		numberStr = integerPart ;
		
		var thousandsMatcher = /(\d+)(\d{3})$/ ;
		var thousandsAndRest = thousandsMatcher.exec(numberStr) ;
		
		if( thousandsAndRest )
		{
			ret_val = thousandsAndRest[1].replace(/\B(?=(\d{2})+(?!\d))/g, ",") + "," + thousandsAndRest[2];
			
			obj.value = ret_val+"."+fractionalPart ;
			
		}
		
		
		
	}
	else
	{	
		var thousandsMatcher = /(\d+)(\d{3})$/ ;
		var thousandsAndRest = thousandsMatcher.exec(numberStr) ;
		
		if( thousandsAndRest )
		{
			ret_val = thousandsAndRest[1].replace(/\B(?=(\d{2})+(?!\d))/g, ",") + "," + thousandsAndRest[2];
			obj.value = ret_val;
			
		}
		
	}
	
	
	
}


CUtil.formatCurrencyUK = function (obj)
{
	if ( /^0/.test(obj.value) || /^\./.test(obj.value) )//should not start with 0 or .
	{
		obj.value = "";
	}
	if (Number(obj.value.replace(/,/g,"")))
	{
	var tmp = obj.value.replace(/,/g,"");
	tmp = tmp.toString().split('').reverse().join('').replace(/(\d{3})/g,'$1,').split('').reverse().join('').replace(/^,/,'');
	if (/\./g.test(tmp))
	{
		 tmp = tmp.split(".");
		 tmp[1] = tmp[1].replace(/\,/g,"").replace(/ /,"");
		 obj.value = tmp[0]+"."+tmp[1];
	}
	else 	
	{
		obj.value = tmp.replace(/ /,"");
	} 
	}
	else{
		 obj.value = obj.value.replace(/[^\d\,\.]/g,"").replace(/ /,"");
		}
}

CUtil._decimalNumersOnlyCB= function(e)
{
	e = CUtil.ensureRealEvent(e);
	return( CUtil.isNumerPart( CUtil.getEventCharCode( e ), true ) || CUtil.isInputControlKey( CUtil.getEventKeyCode( e ) ) );
}
	
CUtil._numersOnlyCB= function(e)
{	
	e = CUtil.ensureRealEvent(e);
	return( CUtil.isNumerPart( CUtil.getEventCharCode( e ), false ) || CUtil.isInputControlKey( CUtil.getEventKeyCode( e ) ) );
}

CUtil.isNumerPart= function( kc, bAllowDecimal, numRange )
{
	//if( bAllowDecimal && (kc == ".".charCodeAt(0) || kc == "-".charCodeAt(0)))
	if( bAllowDecimal && ( kc == ".".charCodeAt(0)) ) //commented minus sign for customization
		return(true);
	else
	{
		if(!CUtil.isdef(numRange))
			numRange = "09";
		
		return( (kc >= numRange.charCodeAt(0)) && (kc <= numRange.charCodeAt(1)) );
	}
}

CUtil.getEventCharCode= function(e)
{
	return(e.charCode || e.keyCode);
}

CUtil.isInputControlKey= function(kc)
{
	//TODO: DEL KEY AND DECIMAL KEY SAME KEYCODE ; NEED  TO DISTINGUISH!
	return( (kc==CUtil.M_KEY_CODE_BACK) || (kc == CUtil.M_KEY_CODE_TAB) || (kc==CUtil.M_KEY_CODE_DEL) || (kc==CUtil.M_KEY_CODE_LEFT_ARROW) || (kc==CUtil.M_KEY_CODE_RIGHT_ARROW) || (kc==CUtil.M_KEY_CODE_BOTTOM_ARROW) || (kc==CUtil.M_KEY_CODE_TOP_ARROW) );
}

CUtil.isdef = function(v)
{	
	return(typeof(v) != "undefined");
}

try {
CUtil._M_FB = CUtil.varok(console.debug);
} catch(e) { CUtil._M_FB = false; }


CUtil.logFB = function(msg)
{
if(CUtil._M_FB) { console.debug(CUtil.getNow() + ": " + msg); }
}

CUtil.validate_invoice_prf = function() 
{
	var validate_units = false;
	if( $("#template").val() !="" )
	{	
		var perticular_arr = $('textarea:not(:disabled)[name="perticular[]"]');
		var amount_arr = $('input:not(:disabled)[name="amount[]"]');
		
		if( tmpl_is_unit_map_arr[$("#template").val()] == 1 )
		{	
			var unit_arr = $('input:not(:disabled)[name="unit[]"]');
			
			validate_units = true;
			
		}
		
		if( perticular_arr && perticular_arr.length > 0 )
		{
			for( var i=0 ; i<perticular_arr.length ; i++ )
			{	
				//Getting the value of textarea from tinyMCE API getContent()
				//if( tinyMCE.get(perticular_arr[i].id).getContent().length == 0 )
				if( perticular_arr[i].disabled != true ) //not disabled
				{	
					var content = tinyMCE.get( perticular_arr[i].id ).getContent() ;
					var text = $(content).text().trim(); //Strip tags from tinymce and get only text
					
					if(  text.length == 0 )
					{
						CUtil.echoError( "Particular details cannot be empty " );
						return false;
					}
				}	
				
			}
		}
		else
		{
			CUtil.echoError("Please add at least one particular ");
			return false;
		}
		
		if( amount_arr && amount_arr.length > 0 )
		{
			for( var i=0 ; i<amount_arr.length ; i++ )
			{
				if( amount_arr[i].disabled != true )
				{
					var amount_element = amount_arr[i] ;
					
					if( amount_element.value.length == 0 )
					{
						amount_element.value = 0 ;
					}
					else
					{
						var numeric_value = amount_arr[i].value.replace(/,/g,"");
						if( isNaN( numeric_value ) || ( numeric_value ) < 0 )
						{
							CUtil.echoError( "Amount Please enter only number  "+amount_arr[i].value+" is not a number" );
							return false;
						}
					}
				}
			}
		}
		else
		{
			CUtil.echoError("Please add at least one invoice particular 1");
			return false;
		}
		
		if( validate_units )
		{
			if( unit_arr && unit_arr.length > 0 )
			{
				for( var i=0 ; i<unit_arr.length ; i++ )
				{
					if( unit_arr[i].value.length != 0  )
					{
						if( isNaN( numeric_value ) || ( numeric_value ) < 0 )
						{
							CUtil.echoError( "Please enter valid unit  , "+unit_arr[i].value+" is not valid" );
							return false;
						}
					}
					else
					{
						CUtil.echoError( "Please enter valid unit  , "+unit_arr[i].value+" is not valid" );
							return false;
					}
					
				}
			}
			else
			{
				CUtil.echoError("Please add at least one invoice particular 2");
				return false;
			}
		}
		
			return true;
		
	} //Template condition
	else
	{
		CUtil.echoError( "Please select a template" );
		return false;
	}
	//NOTE : Same method for invoice & proforma validation since html element names are same
	
	
}









CUtil.validate_edit_client = function()
{
	//usern ,passw ,cpassw , c_desc
	
	//var cpassword = jQuery("#cpassword").val();
	var npassword = jQuery("#npassword").val();
	var rpassword = jQuery("#rpassword").val();
	
	var error_div = jQuery("#error_div") ;
	//var name = jQuery("#ledgerinput").val().trim();
	
	
	//if( cpassword.length == 0 || npassword.length == 0 || rpassword.length == 0) 
	if( npassword.length == 0 || rpassword.length == 0) 
	{
		var msg = "Please Enter Mandatory Fields";
		
		jQuery.growlUI('' , '<h2>'+msg+'</h2>' ,  5000);
		
		//CUtil.echoError(msg);
		return false;
	}
	
	if( npassword != rpassword)
	{
		var msg = "Passwords don't match";
		
		jQuery.growlUI('' , '<h2>'+msg+'</h2>' ,  5000);
		
		//CUtil.echoError(msg);
		return false;
	}
	else
		return CUtil.validate_client_log_pwd(npassword);
		
	return true;
}

CUtil.validate_only_pwds = function()
{
	//usern ,passw ,cpassw , c_desc
	
	//var cpassword = jQuery("#cpassword").val();
	var npassword = jQuery("#npassword").val();
	var rpassword = jQuery("#rpassword").val();
	
	var error_div = jQuery("#error_div") ;
	//var name = jQuery("#ledgerinput").val().trim();
	
	
	//if( cpassword.length == 0 || npassword.length == 0 || rpassword.length == 0) 
	if( npassword.length == 0 || rpassword.length == 0) 
	{
		var msg = "Please Enter Mandatory Fields";
		
		jQuery.growlUI('' , '<h2>'+msg+'</h2>' ,  5000);
		
		//CUtil.echoError(msg);
		return false;
	}
	
	if( npassword != rpassword)
	{
		var msg = "Passwords don't match";
		
		jQuery.growlUI('' , '<h2>'+msg+'</h2>' ,  5000);
		
		//CUtil.echoError(msg);
		return false;
	}
	else
		return CUtil.validate_client_log_pwd(npassword);
		
	return true;
}

CUtil.validate_client_log_pwd = function(passw)
{
	if(passw.length <8)
	{
		var msg= "Password should be atleast 8 charecters long";
		
		jQuery.growlUI('' , '<h2>'+msg+'</h2>' ,  5000);
		
		return false;
	}
	else
	{
		var containsSpecial = /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(passw);
		var containsDigits = /[0-9]/.test(passw) ;
		var containsUpper = /[A-Z]/.test(passw) ;
		
		if(containsSpecial || containsDigits || containsUpper) //HACK : Could have reveresed the condition
		{
		}
		else
		{
			var msg = "Password should contain atleast one digit or special character or an uppercase" ;
			jQuery.growlUI('' , '<h2>'+msg+'</h2>' ,  5000);
			return false;	
		}
		
	}
	return true ;
}

CUtil.validate_client_login = function()
{
	//usern ,passw ,cpassw , c_desc
	
	var usern = jQuery("#username").val().trim();
	var passw = jQuery("#password").val();
	var cpassw = jQuery("#cpassw").val();
	
	var error_div = jQuery("#error_div") ;
	
	if( usern.length == 0 || passw.length == 0 || cpassw.length == 0) 
	{
		var msg = "Please Enter Mandatory Fields";
		
		
		jQuery.growlUI('' , '<h2>'+msg+'</h2>' ,  5000);
	
		return false;
	}
	
	if( passw != cpassw)
	{
		var msg = "Passwords do not match";
		
		jQuery.growlUI('' , '<h2>'+msg+'</h2>' ,  5000);
		
		return false;
	}
	else
	{
		return CUtil.validate_client_log_pwd(passw);
	}
	
	
	return true;
}

CUtil.change_acc_type=function(radio_id)
{
	var radio_val = jQuery('input[name="acc_type"]:checked').val();
	
	//alert("dimmu_borgir "+dimmu_borgir);
	
	if(radio_val == "a")
	{
		var select_box = document.getElementById( "cid" ); //txt_box select_box
		
		select_box.readOnly = true;
		select_box.disabled = true;
		select_box.style.backgroundColor = "#F0F0F0";
	}
	else
	{
		var select_box = document.getElementById( "cid" ); //txt_box select_box
		
		
		select_box.readOnly = false;
		select_box.disabled = false;
		select_box.style.backgroundColor = "#FFF";
	
	}
	
	
	
}

CUtil.load_invoice_filter = function(select_id , ac , cname)
{
	var sel_val = jQuery('select[name='+select_id+']').val();
	
	//HACK : value 100 is used for all and another func parameter ac have value src/all
	
	var url;
	
	if( sel_val == 100 && ac == 'all')
	{
		url = "index.x?b=inv&ac="+ac ;
	}
	else if( sel_val == 100 && ac == 'src' )
	{
		url = "index.x?b=inv&ac="+ac+"&cname="+cname ;
	}
	else
	{
		if(ac == 'src')
			url = "index.x?b=inv&ac="+ac+"&filter="+sel_val+"&cname="+cname;
		else
			url = "index.x?b=inv&ac="+ac+"&filter="+sel_val;
	}
	
	document.location.replace(url) ;
	
}


CUtil.load_proforma_filter = function( obj , frm_submit )
{
	var sel_val = obj.value ;
	var url = frm_submit+"&filter="+sel_val ;
	
	//alert( frm_submit );
	
	//HACK : value 100 is used for all and another func parameter ac have value src/all
	
	/* var url;
	
	if( sel_val == 100 && ac == 'all' )
	{
		url = "index.x?b=inv&ac="+ac ;
	}
	else if( sel_val == 100 && ac == 'src' )
	{
		url = "index.x?b=inv&ac="+ac+"&cname="+cname ;
	}
	else
	{
		if( ac == 'src' )
			url = "index.x?b=inv&ac="+ac+"&filter="+sel_val+"&cname="+cname;
		else
			url = "index.x?b=inv&ac="+ac+"&filter="+sel_val;
	}
	
	document.location.replace(url) ;  */
	
}

CUtil.validateTmpltUpload = function(event) //New order
{
	var ret = true ;
	var t_name = jQuery("#t_name").val().trim();
	
	var t_html = jQuery("#t_html").val(); 
	
	if( t_name.length == 0 )  
	{
		var msg = "Please enter the template name";
		//CUtil.echoError(msg); /growlUI giving problem
		//alert(msg);
		ret = false;
	}
	else if( t_html.length == 0 ) 
	{
		var msg = "Please upload a template file ";
		//CUtil.echoError(msg); // growlUI giving problem
		//alert(msg);
		ret = false;
	}
	
	return ret;
}



CUtil.validateOrder = function() //New order
{
	var or_ref = jQuery("#or_num").val().trim();
	
	var or_sub =  jQuery("#or_sub").val().trim(); 
	var or_date =  jQuery("#or_date").val().trim(); 
	
	//alert("or_ref -> "+or_ref+" or_sub -> "+or_sub+" or_date -> "+or_date);
	
	if( or_ref.length == 0 )  
	{
		var msg = "Please enter order reference";
		CUtil.echoError(msg);
		return false;
	}
	else if( or_sub.length == 0 ) 
	{
		var msg = "Please enter order subject";
		CUtil.echoError(msg);
		return false;
	}
	else if( or_date.length == 0 ) 
	{
		var msg = "Please enter order date";
		CUtil.echoError(msg);
		return false;
	}
	
	
	return true;
}



CUtil.mandatorycheck = function()
{

	var name = jQuery("#ledgerinput").val().trim();
	
	var billing_individual =  jQuery("#billing_individual").val().trim(); //for now not mandatory
	var billing_email =  jQuery("#billing_email").val().trim(); //for now not mandatory
	var addr =  jQuery("#addr").val().trim();
	var panno =  jQuery("#panno").val().trim(); //Non mandatory
	var pcode =  jQuery("#pcode").val().trim();
	var client_name =  jQuery("#client_name").val().trim();
	var registration_date = jQuery("#registration_date").val().trim();
	
	var country = jQuery("#country").val().trim();
	var region = jQuery("#region").val().trim();
	var city = jQuery("#city").val().trim();
	//var region = jQuery("#region").val().trim();
	
	//NOTE : very redundant code
	if(name.length == 0) {
		var msg = "Please enter Client Name";
		CUtil.echoError(msg);
		return false;
	}
	//pcode not mandatory for now
	/* else if(pcode.length == 0) {
		var msg = "Please enter Pincode";
		CUtil.echoError(msg);
		return false;
	} */
	//else if(client_name.length == 0 || client_name.length<5) {
	else if(client_name.length == 0) {
		var msg = "The client name should be of atleast 3 characters .";
		CUtil.echoError(msg);
		return false;
		}
	else if(registration_date.length == 0 || registration_date.length<10) {
		var msg = "Please enter registration date .";
		CUtil.echoError(msg);
		return false;
		}		
	/* else if(billing_individual.length == 0) {
		var msg = "Please enter Billing Individual";
		CUtil.echoError(msg);
		return false;
		}	 */
	else if(addr.length == 0) {
		var msg = "Please enter Address";
		CUtil.echoError(msg);
		return false;
		}
	//city  country region
	else if(country.length == 0) {
		var msg = "Please enter country";
		CUtil.echoError(msg);
		return false;
		}
	else if(region.length == 0) {
		var msg = "Please enter state/region";
		CUtil.echoError(msg);
		return false;
		}	
	else if(city.length == 0) {
		var msg = "Please enter city";
		CUtil.echoError(msg);
		return false;
		}
	
	/* else if(region.length == 0) {
		var msg = "Please enter region";
		CUtil.echoError(msg);
		return false;
		} */
	//for now panno is not mandatory
	/* else if(panno.length == 0 || panno.length<10) {
		var msg = "Please enter correct Pan No.";
		CUtil.echoError(msg);
		return false;
		} */
	
	var email_client_email_str = document.getElementById('clientemail').value;  
	
	var email_billing_email_str = jQuery("#billing_email").val().trim();  
	
	var emailRegexStr = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	
	var is_client_email_valid = emailRegexStr.test(email_client_email_str); 
	
	var is_billing_email_valid = emailRegexStr.test(email_billing_email_str); 
 
	if (!is_client_email_valid) {
					CUtil.echoError("Please enter valid client email address");
					return false;
				}
	if(email_billing_email_str.length !=0 ) //For now its not mandatory 
	{
		if (!is_billing_email_valid) {
					CUtil.echoError("Please enter valid billing email address");
					return false;
				}
	}
	
	return true;
}

CUtil.validateTemplateUpload = function()
{
	//client side validation is not used only serverside
	
}




CUtil.validateEmail = function()
{


/* var x=document.getElementById('clientemail').value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length )
  {
  alert("Not a valid e-mail address");
  } */
  var emailStr = document.getElementById('clientemail').value;  
  var emailStr2 = document.getElementById('email').value; 
   var emailRegexStr = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   var isvalid = emailRegexStr.test(emailStr); 
 var isvalid2 = emailRegexStr.test(emailStr2); 
   if (!isvalid && !isvalid2) {
	alert("Not a valid e-mail address");
  }
  
} 

CUtil.getCityCombo = function()
{
	var opt = "<option> -- Select -- </option>";

		$(opt).wrap('<select />');

		$('#some-container-div').html(opt);
}

CUtil.openDynTab = function()
{
	//console.log(jQuery);
	
	addDynTabMainEx('TAB_ADMIN' , 'Orders tab' , 'abcde' , 'Orders' , '$me?b=admindetails' , true);
}

