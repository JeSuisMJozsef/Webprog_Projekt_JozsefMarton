
function closemodal(id){
    $("#"+id).fadeOut(150);
}
function testmodal(type,message){

    setTimeout(function () {
        $("#customModal").fadeIn(100);
        $("#CMAlert").addClass(type);
        $("#CMAlertMessage").text(message);
    }, 100)
    setTimeout(function () {
        $("#customModal").fadeOut(1500);
    }, 5000)


}