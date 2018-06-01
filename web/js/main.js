$(document).ready(function(){
    $("#datetimepicker1").change(function(){
        $("#datetimeinput2").val($("#datetimepicker1").val());        
    });
});
