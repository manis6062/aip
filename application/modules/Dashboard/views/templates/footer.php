<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; AIP Admin. Brought to you by <a href="http://itgamut.net">It Gamut</a> </div>
</div>

<!--end-Footer-part-->
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/excanvas.min.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.ui.custom.js"></script> 

<script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.flot.min.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.peity.min.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/fullcalendar.min.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/matrix.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/matrix.dashboard.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.gritter.min.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/matrix.interface.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/matrix.chat.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.validate.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/matrix.form_validation.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.wizard.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.uniform.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/matrix.popover.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.dataTables.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.js"></script> 
<script src="<?php echo PUBLIC_SITE_URL ; ?>js/matrix.tables.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script> 



<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}


  $('select').select2();

</script>
</body>
</html>
