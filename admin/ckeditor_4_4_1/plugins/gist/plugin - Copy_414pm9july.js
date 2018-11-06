//important file do not delete

CKEDITOR.plugins.add('gist',{
    init:function(a){
		var boldStyle = new CKEDITOR.style( { element: 'strong' } );
        var cmdAddFullName = a.addCommand('addfullname', {exec:execAddFullName}),
			cmdAddFirstName = a.addCommand('addfirstname', {exec:execAddFirstName}),
			cmdAddLastName = a.addCommand('addlastname', {exec:execAddLastName}),
			cmdUnsub = a.addCommand('unsub', {exec:execUnsub}),
			cmdAddA = a.addCommand('addA', {exec:execAddA}),
			cmdAddB = a.addCommand('addB', {exec:execAddB}),
			cmdAddC = a.addCommand('addC', {exec:execAddC}),
			cmdMailToF = a.addCommand('addMailToF', {exec:execMailToF}),
			cmdFBShare = a.addCommand('fbshare', {exec:execFBShare});
			cmdLNShare = a.addCommand('lnshare', {exec:execLNShare});
			cmdTWShare = a.addCommand('twittshare', {exec:execTWShare});
			cmdCustomSave = a.addCommand('customsave', {exec:execCustomSave});
			cmdGreenStyle = a.addCommand('greenstyle', {exec:execGreenStyle}) ;
			//cmdGreenStyle = a.addCommand('greenstyle', new CKEDITOR.instances.t_html.dialogCommand( boldStyle )) ;
			//editor.addCommand( 'bold', new CKEDITOR.dialogCommand( boldStyle ) );
		
        cmdAddFullName.canUndo=true
		cmdAddFirstName.canUndo=true
		cmdAddLastName.canUndo=true
		cmdUnsub.canUndo=true
		cmdAddA.canUndo=true
		cmdAddB.canUndo=true
        cmdAddC.canUndo=true
		cmdMailToF.canUndo=true
		cmdFBShare.canUndo=true
		cmdLNShare.canUndo=true
		cmdTWShare.canUndo=true
		cmdCustomSave.canUndo=false
		cmdGreenStyle.canUndo=true
		/* 
		a.ui.addButton('addfullname',{ label:'Add full name', command:'addfullname', icon:this.path+'images/N.jpg' })
		a.ui.addButton('addfirstname',{ label:'Add first name', command:'addfirstname', icon:this.path+'images/F.jpg' })
		a.ui.addButton('addlastname',{ label:'Add last name', command:'addlastname', icon:this.path+'images/L.jpg' })
		
		a.ui.addButton('unsub',{ label:'Subscription', command:'unsub', icon:this.path+'images/S.jpg' })
		
		a.ui.addButton('addA',{ label:'Add A', command:'addA', icon:this.path+'images/A.jpg' })
		a.ui.addButton('addB',{ label:'Add B', command:'addB', icon:this.path+'images/B.jpg' })
		a.ui.addButton('addC',{ label:'Add C', command:'addC', icon:this.path+'images/C.jpg' })
		
		a.ui.addButton('addMailToF',{ label:'Mail To Friend', command:'addMailToF', icon:this.path+'images/mail.jpg' })
		a.ui.addButton('fbshare',{ label:'Share on Facebook', command:'fbshare', icon:this.path+'images/facebook.gif' })
		a.ui.addButton('lnshare',{ label:'Share on Linkedin', command:'lnshare', icon:this.path+'images/ln.jpg' })
		a.ui.addButton('twittshare',{ label:'Share on Tweeter', command:'twittshare', icon:this.path+'images/twitt.jpg' })
		a.ui.addButton('customsave',{ label:'Save', command:'customsave', icon:this.path+'images/save.jpg' })
		
		*/
		//
		a.ui.addButton('greenstyle',{ label:'Save', command:'greenstyle', icon:this.path+'images/green.jpg' })
    }
})

var execAddFullName = function(e){
	CKEDITOR.instances.t_html.insertText(_COMP_NAME);
}

var execAddFirstName = function(e){
	CKEDITOR.instances.t_html.insertText(_COMP_FIRST_NAME);
}

var execAddLastName = function(e){
	CKEDITOR.instances.t_html.insertText(_COMP_LAST_NAME);
}

var execUnsub = function(e){
	CKEDITOR.instances.t_html.insertHtml(_COMP_UNSUB_HTML);
}

var execAddA = function(e){
	CKEDITOR.instances.t_html.insertText(_COMP_EXTRA_A);
}

var execAddB = function(e){
	CKEDITOR.instances.t_html.insertText(_COMP_EXTRA_B);
}

var execAddC = function(e){
	CKEDITOR.instances.t_html.insertText(_COMP_EXTRA_C);
}

var execMailToF = function(e){
	CKEDITOR.instances.t_html.insertHtml(_COMP_MAIL_TO_FRND);
}

var execFBShare = function(e){
	CKEDITOR.instances.t_html.insertHtml(_COMP_FB_SHARE);
}
//style.apply()
var execLNShare = function(e){
	CKEDITOR.instances.t_html.insertHtml(_COMP_LN_SHARE);
}

var execTWShare = function(e){
	CKEDITOR.instances.t_html.insertHtml(_COMP_TW_SHARE);
}

var execCustomSave = function(e){
	/* var $form = e.element.$.form;
	if ( $form )
	{
		var cb = function(resp){
			if( resp )
				$form.submit();
			else
				alert(_COMP_SESS_EXPIRED_MSG);
		};
		CChat.checkSession( cb );
	} */
}

var execGreenStyle = function(e){
	/* CKEDITOR.instances.t_html.insertHtml("<div style='color:green;'>It is working great</div>");
	
	CKEDITOR.instances.t_html.htmlParser.cssStyle("color:red"); */
	//CKEDITOR.instances.t_html.style({element:'strong'});
	
	//console.dir(CKEDITOR.instances.t_html);
	
	/* CKEDITOR.instances.t_html.stylesSet.add('default', [
		{ name: 'Paragraph', element: 'p', styles: { 'font-size': '50px'} }
		]);
	 */
	//CKEDITOR.instances.t_html.insertHtml(_COMP_TW_SHARE);
	//CKEDITOR.instances.t_html.insertHtml("It is working great");
	
	var myStyle = new CKEDITOR.style( {
    element: 'span',
    attributes: {
        'data-foo': 'bar',
        'class': 'myClass'
    },
    styles: {
        color: 'red'
    }
} );
	
	/* editor.addCommand( 'bold', new CKEDITOR.dialogCommand( boldStyle ) );
	CKEDITOR.instances.t_html.dialogCommand( myStyle ); */
	
	//CKEDITOR.instances.t_html.styleCommand( myStyle );
	CKEDITOR.styleCommand( myStyle );
	
	//editor.addCommand( 'bold', new CKEDITOR.dialogCommand( boldStyle ) );
	/*
	CKEDITOR.style( {
    element: 'span',
    attributes: {
        'data-foo': 'bar',
        'class': 'myClass'
    },
    styles: {
        color: 'red'
    }
} )
	
	*/
}
//style.apply()