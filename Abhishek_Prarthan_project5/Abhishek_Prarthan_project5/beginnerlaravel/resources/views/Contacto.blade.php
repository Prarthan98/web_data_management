<body>
	@include('./layouts/header')
  <div class="container-fluid" style="padding:0 !important;">
    <div class="row no-gutters">
      <div class="col-sm-12">
	<div class="class_banner txt-cntr fit-width">
        <h1>Contact US</h1>
        <p>
          <span>HOME</span> &#62;
          <span>CONTACT US</span>
        </p>
      </div>
    </div>
  </div>
</div>
      <!-- **************  Body  ****************** -->
  <body>
    <br>
    <br>
    <br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6">
        <h1>
          <span class="flt-left">NUESTRAS </span>
          <span class="span-contact-link">&nbsp;REDES</span>
          <br>
          <span  class="span-contact-link"
             style="padding: 1% 0px 0 0%;">SOCIALES</span>
          <br>
        </h1>
        <hr class= "hr-left">
      <div class="w-100"></div>
      <br>
      <br>
      <br>
      <div class="row" style="opacity: 0.5;">
        <div class="col-sm-4">
           <img class="smedia-width ml-4" src="../images/Images/instagram.png" title="Instagram">
              <br>
              <span>@genteyciud</span>
        </div>
        <div class="col-sm-4">
          <img class="smedia-width ml-4" src="../images/Images/twitter.png" title="Twitter">
              <br>
              <span>@genteyciud</span>
              <br>
              <br>
        </div>
        <br>
      </div>
      <div class="row" style="opacity: 0.5;">
        <div class="col-sm-4">
<img src="../images/Images/phone.png" class="smedia-width ml-4" title="Phone">
              <br>
                
              <span>001 346 714 </span>
              <br>
              <span>058 414 82251</span>
              <br>
              <span>056 9339487</span>
              <br>
              <br>
        </div>
        <div class="col-sm-4">
        <img src="../images/Images/mail.png" class="smedia-width ml-4" title="Mail">
              <br>
              <span>info@genteyciu</span>
              <br>
              <br>
            </div>
      </div>
    </div>
    <div class="col-sm-6">
       <h1>
          <span class="flt-left">FORMULARIO DE</span>
          <br>    
          <span style="font-family:montserratItalic;color: #e65c00;float: left !important;
            ">CONTACTO</span>
          <br>    
        </h1>
        <hr class= "hr-right">
        <div class="w-100"></div>
        <br>
        <div class="row">
          <div class="col-sm-12 flt-left">
             <form name="contact_form" method="GET">
          <fieldset class="contact-info">
            <label>Tu Nombre(requerido)</label>
            <br>
            <input type="number" id="fname" name="fname" maxlength="10" placeholder="Tu Nombre" required>
            <br>
            <br>
            <br>
            <label>Tu Correo(requerido)</label>
            <br>
            <input type="text" id="fname" name="fname" maxlength="20" placeholder="Tu Correo" required>
            <br>
            <br>
            <br>
            <label>Asunto</label>
            <br>
            <input type="text" id="fname" name="fname" placeholder="Asunto">
            <br>
            <br>
            <br>
            <label>Asunto</label>
            <br>
            <textarea cols="37" rows="11" id="fname" name="fname"  placeholder=""></textarea>
            <br>
            <br>
          </fieldset>
          <button id="btn" type="submit" class="button-Envar" onclick="submitFunc()">ENVAR</button>
        </form>
          </div>
        </div>
    </div>
  </div>


  <script>
     function submitFunc(){
      
$('#modelWindow').modal('show');
    }
  </script>
</div>
<!-- modal popup -->
<div class="modal fade" id="modelWindow" role="dialog">
            <div class="modal-dialog modal-sm vertical-align-center">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Thanks</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                </div>
                <div class="modal-body">
                    Will contact you shortly!
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                </div>
              </div>
            </div>
        </div>
  </body>
  <!-- *************** Body Ends ****************** -->
	@include('./layouts/footer')
</body>