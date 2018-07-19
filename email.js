<script type="text/javascript">
        
        $("form").submit(function(e){
            e.preventDefault();
            
            var errorMessage="";
            
            if($("#remail").val()=="")
            {
                errorMessage+="Reciever's Email is missing<br>";
            }
            
            if($("#semail").val()=="")
            {
                errorMessage+="Your email is missing<br>"    
            }
           
            if($("#subject").val()=="")
            {
                errorMessage+="subject is missing<br>";
            }
            
            if($("#message").val()=="")
            {
                errorMessage+="message is missing<br>";
            }
            
            if(errorMessage!="")
            {
                $("#displayError").html('<div class="alert alert-danger" role="alert"><b>There are error(s) in form</b>:<br>'+errorMessage+'</div>');
            }
            else
            {
                $("form").unbind("submit").submit();
            }
            
            
        });
        
    </script>
  
