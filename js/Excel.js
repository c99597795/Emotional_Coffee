function ToExcel(content){
    $.ajax({
        type: "POST",
        url: "py/WriteToExcel.py",
        data: { param:content}
        }).done(function(o) {
            console.log(data);
            console.log(content);
        });


}
function FindRecord(content){

}