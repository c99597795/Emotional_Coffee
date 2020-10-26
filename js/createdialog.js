function createdialog(width,height,bodycontent,title,removeable){
    if(document.getElementById("qrcode")==null){
        /*建立視窗的組成元素*/
        var dialog = document.createElement("div");
        var dialogtitlebar= document.createElement("div");
        var dialogbody = document.createElement("div");
        var dialogtitleimg = document.createElement("span");
        var dialogtitle = document.createElement("span");
        var dialogclose = document.createElement("span");
        var closeaction = document.createElement("button");
        /*為視窗設定一個id，id如此怪異是為了儘量避免與其他使用者取的id相同而出錯*/
        dialog.id = "qrcode";
        /*組裝對話方塊標題欄,按從裡到外的順序組裝*/
        dialogclose.appendChild(closeaction);
        /*組裝對話方塊主體內容*/
    if(bodycontent!=null){
        bodycontent.style.display ="block";
        dialogbody.appendChild(bodycontent);
    }
    /*組裝成完整的對話方塊*/
    dialog.appendChild(dialogbody);
    /*設定視窗組成元素的樣式*/
    var templeft,temptop,tempheight//視窗的位置（將視窗放在頁面中間的輔助變數）
    var dialogcssText,dialogbodycssText;//拼出dialog和dialogbody的樣式字串
    templeft = (document.body.clientWidth-width)/2;
    temptop = (document.body.clientHeight-height)/2;
    tempheight= height-30;
    dialogcssText= "position:absolute;top:"+temptop+"px;left:"+templeft+"px;height:"+height+"px;width:"+width+"px;";
    dialogbodycssText = "background:#ffffff;";
    dialog.style.cssText = dialogcssText;
    dialogbody.style.cssText  = dialogbodycssText;
    dialogclose.style.cssText  = "float:right;display:block;margin:4px;line-height:20px;";
    closeaction.style.cssText = "height:20px;width:24px;border-width:1px;"+"cursor:pointer;";
    /*為視窗元素註冊事件*/
    var dialogleft = parseInt(dialog.style.left);
    var dialogtop = parseInt(dialog.style.top);
    var ismousedown = false;//標誌滑鼠是否按下
    /*關閉按鈕的事件*/       
    closeaction.onclick = function(){
    dialog.parentNode.removeChild(dialog);
    }
    /*實現視窗的移動，這段程式碼很典型，網上很多類似的程式碼*/
    if(removeable == true){
        var ismousedown = false;
        var dialogleft,dialogtop;
        var downX,downY;
        dialogleft = parseInt(dialog.style.left);
        dialogtop = parseInt(dialog.style.top);
        dialogtitlebar.onmousedown = function(e){
        ismousedown = true;
        downX = e.clientX;
        downY = e.clientY;
    }
    document.onmousemove = function(e){
    if(ismousedown){
        dialog.style.top = e.clientY - downY+dialogtop+"px";
        dialog.style.left = e.clientX - downX+dialogleft+"px";
    }
    }
    /*鬆開滑鼠時要重新計算當前視窗的位置*/
    document.onmouseup = function(){
    dialogleft = parseInt(dialog.style.left);
    dialogtop = parseInt(dialog.style.top);
    ismousedown = false;
    }
    }
        return dialog; 
    }//end if(if的結束)

}