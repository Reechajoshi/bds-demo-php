<title>BDS</title>

<script type="text/javascript" src="jsinc.php"></script>
<link rel="stylesheet" type="text/css" href="styles/ui.css_x.php">

<script type="text/javascript"> 
	var _M_SERIAL_A =  String.fromCharCode( 15 ),
		_M_SERIAL_B =  String.fromCharCode( 16 );
	var tabprops = new Array();	
	tabprops['TAB_CLIENTS'] = { txtColor: '#28A9D3', txtSelectColor: '#28A9D3', tabLImage: 'images/tabs/tabl.png', tabTImage: 'images/tabs/tabt.png', tabRImage: 'images/tabs/tabr.png', extraBackdrop: '#28A9D3', borderSelect: '#fff 1px solid' };
	
	tabprops['TAB_PROJECTS'] = tabprops['TAB_CLIENTS'];
	
	var addDynTab = function(parentTabID,newTabName,tabTxt,iuri,isNMailer)
	{		
		addDynTabEx(parentTabID,newTabName,"",tabTxt,iuri,isNMailer);				
	}

	var addDynTabEx = function(parentTabID,newTabID,newTabIDFix,tabTxt,iuri,isNMailer)
	{
		var doc = parent.window.document;
		var ptm = parent.window.CTabs.getTabObject(parentTabID);
		var tabc = ptm.getTabIndexFromID(newTabID + newTabIDFix);
		
		if(!tabc)
		{
			var p = { name: tabTxt, txtColor: "#fff", iframeURL: iuri };
			if(CUtil.varok(tabprops[parentTabID]))
				for(var i in tabprops[parentTabID])
				{
					p[i] = tabprops[parentTabID][i];			
				}
			
			var tabc = ptm.addIFrameTab( (newTabID + newTabIDFix) , p );
			ptm.displayNewTab(tabc);
			
			if(CUtil.varok(isNMailer) && isNMailer)
				parent.window.CTabs.regSafeClose(newTabID,'If you have any unsaved changes in this mailer, they will be lost. Are you sure you want to continue?');
		}
		else
			ptm.selectEx(tabc);
	}

	var indTabRef = function(tid,tp)
	{
		var doc = parent.window.document;
		var ptm = parent.window.CTabs.getTabObject(tid);
		ptm.indRefIFrame(0);
	}
	
	var getAllClient = function()
	{
		if( CUtil.varok( parent.parent._ALL_CLIENTS ) )
		{
			return( parent.parent._ALL_CLIENTS );
		}
		return(false);
	}
	
	CUi.init(document);
	CTabs.init();
	CUi.initMouse();
 </script>