$(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(".img-thumbnail").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    };

    $(".file-upload").on("change", function() {
        readURL(this);
    });

    $(".upload-button").on("click", function() {
        $(".file-upload").click();
    }); 


    $("#profil-form").submit(function(e) {
        e.preventDefault();

        var formData = new FormData();

        $.ajaxSetup({
            headers :{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btn1').hide(); 
        $('#btn2').html('<span class="spinner-border spinner-border-sm" id="btn2" role="status" aria-hidden="true"></span>');
        
        $.ajax({
            type:'POST',
            url:this.action,
            data:formData,
            cache:false,
            contentType:false,
            processData:false,

            success:(response)=>{
                if(response.status ==400){
                    let error = response.msg;
                    $("res").html(error);
                    
                    $('#btn1').attr("disabled",false); 
                    $('#btn1').html('"save');
                
                
            }else if(response.status ==200){
                let success = response.msg;
                $("res").html(success);
                
                $('#btn1').attr("disabled",false); 
                $('#btn1').html('"save');
            
            }
        }});
    })
});
