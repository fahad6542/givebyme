/* 
 * Added by Fahad
 * fields must match the database  * 
 */
function addRow(){
    var fileRow="<div class='row file-row'>";
        fileRow+="<div class='form-group'>";
        fileRow+="  <label class='col-md-1 col-xs-12 control-label' >Title</label>";
        fileRow+="  <div class='col-md-3 col-xs-12'>";
        fileRow+="      <input type='text' class='form-control' name='title[]' title='Will be displayed on download link' required/>";
        fileRow+="      <span class='help-block' ><?= form_error('title') ?></span>";
        fileRow+="</div>";
        fileRow+="<label class='col-md-1 col-xs-12 control-label' >Upload File</label>";
        fileRow+="<div class='col-md-3 col-xs-12'>";
        fileRow+="                        <div class='panel panel-default'>";
        fileRow+="                            <div class='panel-body'>";
        fileRow+="<input type='file' class='form-control' name='file_name[]' required accept='application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document'/>";
        fileRow+="            <span class='help-block' ><?= form_error('file_name') ?></span>";
        fileRow+="                            </div>";
        fileRow+="                        </div>";
        fileRow+="</div>";
        fileRow+="<a href='#' class='del-row' >Delete</a>";
    fileRow+="</div>";
    fileRow+="</div>";
            $(fileRow).appendTo( ".file-row-container" );
}
$( "body" ).delegate( "a.del-row", "click", function() {
    $(this).closest('div.form-group').remove();
});
///Add team
     $("#saveTeambtn").on('click', function(e){
         alert("save clicked"+$('#teamForm').attr("action"));
         e.preventDefault();
        if ($('form')[0].checkValidity()) {
           var formData = new FormData();
formData.append('file', $('input[type=file]')[0].files[0]);

        $.ajax({
            type: 'POST',
            url: $('#teamForm').attr("action"),
            //data: new FormData('#teamForm'),
           // data:  formData,
           data:$("#teamForm").serialize(),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#teamForm').css("opacity",".5");
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg == 'ok'){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form data submitted successfully.</span>');
                }else{
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
                }
                $('#teamForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
        }else{
            $("form")[0].reportValidity();
            $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Please fill the required fields.</span>');
                
        }
    });
    
    //file type validation
    $("#photo").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#file").val('');
            return false;
        }
    });
    