/* 
 * Added by Fahad
 * fields must match the database  * 
 */
//var industries=[];
function removeBy(id){
    var chkId="#"+id;
    $("#browse-keywords li#"+id).remove();
    $(chkId).prop("checked", 0);
    /*
    //remove from array
    if($(chkId).attr("class")=="industry"){
        var index = industries.indexOf($(chkId).val());
        if (index > -1) {
          industries.splice(index, 1);
        }
    }*/
}

function filterResult(){
      $.ajax({
        url: "Dashboard/getResult",
        data:$("#search-frm").serialize() ,
       // cache: false,
       // processData: false,
       // contentType: false,
        type: 'POST',
        success: function (pro) {
            // do something with the result
           $("#project-row").empty();
           $("#project-row").append(pro);
        }
    });
}
$(document).ready(function(){
    
    $(':checkbox').change(function() {
        if ($(this).is(':checked')) {
            $(".no-filters").hide();
            var liNew;
            liNew="<li class='browse-keywords-item' id='"+$(this).attr("id")+"'>";
            liNew+="<span class='browse-keyword-label'>"+$(this).attr("title")+"</span>";
            liNew+="<a class='delete js-keyword-delete clickable'>";
            liNew+="<i class='fa fa-times'></i>";
            liNew+="</a>";
            liNew+="</li>";
            
            $("#browse-keywords").append(liNew);
            /*
            if($(this).attr("class")=="industry"){
                industries.push($(this).val());
            }*/
            
        }else{
            removeBy($(this).attr("id"));
            
        }
        
      // filterResult();
    });
  
    $('#browse-keywords ').on('click', 'li', function() {
        removeBy($(this).attr("id"));
        //filterResult();
    });
  
});


