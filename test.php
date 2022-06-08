
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
var time = 30;
var min = "";
var sec= "";

var x = setInterval(function(){
       
        sec= time%60;
    document.getElementById("test").innerHTML = sec + "초후확인가능";
 
    time--;

if(time < 0){
 clearInterval(x);
 document.querySelector("#test").innerHTML = "<a href='https://www.naver.com/'>naver</a>";
}
} , 100);
</script>
<div id="test"></div>
