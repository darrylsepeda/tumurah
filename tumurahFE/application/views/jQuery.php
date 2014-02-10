
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.easing.1.3.js"></script>

the jScrollPane script 
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.contentcarousel.js"></script>-->

<!--  JQUERY FOR ACCORDION PAYMENT -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
	var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
      heightStyle: "content",
	  icons: icons,
	  collapsible: true
    });
    $( "#toggle" ).button().click(function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });
</script>
<!--  END JQUERY FOR ACCORDION PAYMENT -->
