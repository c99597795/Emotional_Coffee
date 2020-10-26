function ToSQL_SaveNewCode(QRcode){
    $.ajax({
        url:'php/InsertNewcode.php',
        type:'GET',
        data:{code:QRcode},
        success: function(data) {
            console.log('Success_SaveNewCode')
        }
      });   
}
function ToSQL_IncreaseTime(QRcode){
    $.ajax({
        url:'php/costumerTimerecorder.php',
        type:'GET',
        data:{code:QRcode},
        success: function(data){
            console.log(QRcode)
        }
      });
}
function ToSQL_getTime(QRcode){
    var time=0
    {$.ajax({
        url:'php/getCoustumertime.php',
        type:'GET',
        data:{code:QRcode},
        async : false,
        success: function(data) {
            time=data
            console.log(data)
        }
      });}
      return time;
}