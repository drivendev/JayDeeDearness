function saveCall(e,a){"undefined"==a&&(saveName=""),valueArray=getValues(),$.ajax({type:"POST",url:"/wp-content/themes/patternBank/editor/app/save.php",data:{doAction:e,saveID:a,fieldData:valueArray},success:function(a){"save"==e&&($(".save_message").html(a).fadeIn(),$(".save_field").find("input").val(""),saveCall("get_save_list","false")),"save_over"==e&&"saved"==a&&$(".save_message").html("Saved over").fadeIn(),"get_save_list"==e&&""!==a&&$(".save_over_list").html(a).promise().done(function(){$(".save_over").slideDown()})}})}function getValues(){var e=[];return $(".edit_field").each(function(){var a=$(this).find("input").val();e.push(a)}),e}$(document).ready(function(){$(".save").click(function(){$(".save_field").hasClass("active")?($(".save_field").removeClass("active").slideUp(),$(".save_message").fadeOut(function(){$(this).html("")})):($(".collapse").slideUp(),$(".edit_section_title").removeClass("active"),$(".save_field").addClass("active").slideDown(),$(".load_container.active").removeClass("active").slideUp(),saveCall("get_save_list","false"))}),$(".save_go").click(function(){var e=$(".save_field").find("input").val();""!==e?saveCall("save",e):$(".save_message").html("Please enter a name").fadeIn()}),$(".save_over_list").on("click",".save_over_name",function(){var e=$(this).attr("data-savedname");saveCall("save_over",e)})});