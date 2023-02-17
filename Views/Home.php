<?php include 'header/header.php' ?>
        <!--Start rev slider wrapper-->
<?= $contenu ?>
<?php include 'header/footer.php' ?>
       
       
        <!-- jQuery -->
        <script src="<?= URLROOT ?>assets/js/jquery.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/bootstrap.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/menu.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/owl.carousel.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/jquery.mixitup.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/jquery.fancybox.pack.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/imagezoom.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/jquery.magnific-popup.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/jquery.polyglot.language.switcher.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/SmoothScroll.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/jquery.appear.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/jquery.countTo.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/validation.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/wow.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/jquery.fitvids.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/nouislider.js">
        </script> <!-- revolution slider js -->
         
        <script src="<?= URLROOT ?>assets/js/rev-slider/jquery.themepunch.tools.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/jquery.themepunch.revolution.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/revolution.extension.actions.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/revolution.extension.carousel.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/revolution.extension.kenburn.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/revolution.extension.layeranimation.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/revolution.extension.migration.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/revolution.extension.navigation.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/revolution.extension.parallax.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/revolution.extension.slideanims.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/rev-slider/revolution.extension.video.min.js">
        </script> 
        <script src="<?= URLROOT ?>assets/js/custom.js">
        </script>




<script src="<?= URLROOT ?>assets/js/jquery.min.js"></script>
    <!-- JQUERY MIN JS -->
    <script src="<?= URLROOT ?>assets/vendor/wow/wow.min.js"></script>
    <!-- WOW JS -->
    <script src="<?= URLROOT ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- BOOTSTRAP MIN JS -->
    <script src="<?= URLROOT ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- BOOTSTRAP SELECT MIN JS -->
    <script src="<?= URLROOT ?>assets/vendor/counter/waypoints-min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="<?= URLROOT ?>assets/vendor/counter/counterup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="<?= URLROOT ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- SWIPER JS -->
    <script src="<?= URLROOT ?>assets/js/dz.carousel.js"></script>
    <!-- DZ CAROUSEL JS -->
    <script src="<?= URLROOT ?>assets/js/dz.ajax.js"></script>
    <!-- AJAX -->
    <script src="<?= URLROOT ?>assets/js/custom.js"></script>

    <script src="<?= URLROOT ?>assets/vendor/jquery.dataTables.min.js"></script>
    </div>


       <script> 


 $('#other-amount').on('keyup', (e)=>{
   
     if($('#other-amount').val!==""){
      $('#donate-amount-1').attr('checked', false);
      $('#donate-amount-2').attr('checked', false);
      $('#donate-amount-3').attr('checked', false);
      $('#donate-amount-4').attr('checked', false);
      $('#donate-amount-5').attr('checked', false);
     }
 })

 $('.selection-amout').each(function(){
  

  $(this).on('click', ()=>{
    $(this).checked;
     document.getElementById('other-amount').value=''
  })

 })


 function savedont(){
  let value=0;

  $('.selection-amout').each(function () {
           if (this.checked) {
               console.log($(this).val()); 
               value=$(this).data('amount')
           }
});
     

if(value==0){
  value=$('#other-amount').val();
}

if(value==0){
 $('#resultx').html(`<div class='text-center text-danger'>Vous devez au moins choisire une offre svp</div>`)
}else{

  $.ajax({
    url: '<?= URLROOT ?>main/valuer',
    type: 'POST',
    data: {value:  value},
    dataType:'json',
    success:(data)=>{
      if(data.error){
        $('#resultx').html(data.message)
      }else{
        $('#resultx').html(data.message);
      }

       }
   })
}





 }

function send(string){

  $.ajax({
    url: '<?= URLROOT ?>main/readpermition',
    type: 'POST',
    data: {slug: string},
    dataType:'json',
    success:(data)=>{
      if(data.error){
        $('#error-send').html(`<span class='text-danger'>${data.message}</span>`)
      }else if(data.url){
        window.location= data.url;
      }
    }

  })

}



//Form authetification

   $(document).ready(()=>{

    $('#myTable').DataTable();


    $('#formAuthentication').on('submit', (e)=>{
          e.preventDefault();
        
          var email=$('#email').val();
          var pass= $('#password').val();

         let url_send=$('#formAuthentication').data('url');
         $('#btn-connect').add(Attr, 'disabled')
         $('#btn-connect').text('loading please...')
          $.ajax({
              url :url_send,
              type: 'POST',
              data : {email:email, pass:pass},
              dataType:'JSON'
            })
            .done(function(response){ 
              $('#btn-connect').removeAttr('disabled')
              $('#btn-connect').text('Se connecter')

                  if(response.error){
                    $('#result-login').html(`<div class="alert alert-danger alert-dismissible" role="alert">
                    `+response.message+`
                    
                  </div>`)
                  
                  }else{
                    window.location=response.url;
                  }
              });

        
         });
     

   })
</script>








<script> 
//Form add  
   $(document).ready(()=>{
    $('#form-submit').on('submit', (e)=>{
       e.preventDefault();
      let  form= e.target;

      $.ajax({
          url:$('#form-submit').data('url'),
          type:'POST',
          enctype: 'multipart/form-data',
                      data:new FormData(form),
                      processData: false,
                      contentType: false,
                     cache: false,
                     timeout: 600000,
         dataType:'json',
         beforeSend:function(){
              $('#btn-save').text($('#btn-save').data('before'))
         },success:function(response){
          $('#btn-save').text($('#btn-save').data('text'))
          if(response.error){
            $('#result').html('<strong class="text-danger text-center">'+response.message+'</strong>')
          }else if(response.url){
            window.location=response.url;
          }
          else{
            $('#form-submit')[0].reset();
            $('#result').html('<strong class="text-success text-center">'+response.message+'</div> ')
          }
          
         }
        
      })



    })
     

   })
</script>


</body>
</html>