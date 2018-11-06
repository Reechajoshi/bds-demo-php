

       
        <title>BDS - Admin Control Panel - Digit9 </title>
        
        <!-- CSSs -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/960.css" />
        <link rel="stylesheet" href="css/icons.css">
        <link rel="stylesheet" href="css/tipsy.css">
        <link rel="stylesheet" href="css/formalize.css">
        <link rel="stylesheet" href="css/prettyPhoto.css">
        <link rel="stylesheet" href="css/jquery-ui-1.8.18.custom.css">
        <link rel="stylesheet" href="css/chosen.css">
        <link rel="stylesheet" href="css/ui.spinner.css">
        <link rel="stylesheet" href="css/jquery.jqplot.min.css" />
        <link rel="stylesheet" href="css/fullcalendar.css" />
        <link rel="stylesheet" href="css/jquery.miniColors.css" />
        <link rel="stylesheet" href="css/elrte.min.css" />
        <link rel="stylesheet" href="css/elfinder.min.css" />
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/theme.css" />

        <!-- JAVASCRIPTs -->
        <!--[if lt IE 9]>
            <script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script>
            <script language="javascript" type="text/javascript" src="js/html5shiv.js"></script>
        <![endif]-->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui-1.8.18.custom.min.js"></script>
        <script src="js/jquery.tipsy.js"></script>
        <script src="js/jquery.formalize.min.js"></script>
        <script src="js/jquery.modal.js"></script>
        <script src="js/prefixfree.min.js"></script>
        <script src="js/datables/js/jquery.dataTables.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.autogrowtextarea.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.fileinput.js"></script>
        <script src="js/chosen.jquery.min.js"></script>
        <script src="js/ui.checkBox.js"></script>
        <script src="js/ui.spinner.min.js"></script>
        <script src="js/jquery.loading.js"></script>
        <script src="js/jquery.path.js"></script>
        <script src="js/jqPlot/jquery.jqplot.min.js"></script>
        <script src="js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
        <script src="js/jqPlot/plugins/jqplot.cursor.min.js"></script>
        <!-- # -->
        <script src="js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
        <script src="js/jqPlot/plugins/jqplot.dragable.min.js"></script>
        <script src="js/jqPlot/plugins/jqplot.dateAxisRenderer.min.js"></script>
        <script src="js/jqPlot/plugins/jqplot.ohlcRenderer.min.js"></script>
        <script src="js/jqPlot/plugins/jqplot.trendline.min.js"></script>
        <script src="js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
        <script src="js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
        <script src="js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
        <!-- /# -->
        <script src="js/fullcalendar.min.js"></script>
        <script src="js/jquery.miniColors.min.js"></script>
        <script src="js/jquery.maskedinput-1.3.min.js"></script>
        <script src="js/jquery-ui-timepicker-addon.js"></script>
        <script src="js/elrte.min.js"></script>
        <script src="js/elfinder.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.metadata.js"></script>
        <script src="js/main.js"></script>
        <script src="js/demo.js"></script>
        <script>
$(document).ready(
function() {
$("#sortme").sortable({
update : function () {
serial = $('#sortme').sortable('serialize');
$.ajax({
url: "sort_menu.php",
type: "post",
data: serial,
error: function(){
alert("theres an error with AJAX");
}
});
}
});
}
);
</script>
<script>
$(document).ready(
function() {
$("#sortsponsor").sortable({
update : function () {
serial = $('#sortsponsor').sortable('serialize');
$.ajax({
url: "sort_page.php",
type: "post",
data: serial,
error: function(){
alert("theres an error with AJAX");
}
});
}
});
}
);
</script>
 <script>
$(document).ready(
function() {
$("#sortspeaker").sortable({
update : function () {
serial = $('#sortspeaker').sortable('serialize');
$.ajax({
url: "sort_menu_speaker.php",
type: "post",
data: serial,
error: function(){
alert("theres an error with AJAX");
}
});
}
});
}
);
</script>
<script>
$(document).ready(
function() {
$("#sortjury").sortable({
update : function () {
serial = $('#sortjury').sortable('serialize');
$.ajax({
url: "sort_menu_jury.php",
type: "post",
data: serial,
error: function(){
alert("theres an error with AJAX");
}
});
}
});
}
);
</script>

<script>
$(document).ready(
function() {
$("#sortmainmenu").sortable({
update : function () {
serial = $('#sortmainmenu').sortable('serialize');
$.ajax({
url: "sort_mainmenu.php",
type: "post",
data: serial,
error: function(){
alert("theres an error with AJAX");
}
});
}
});
}
);
</script>
