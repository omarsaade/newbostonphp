<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
        function insert() { //1
           
  if( window.XMLHttpRequest) {
   xmlhttp = new XMLHttpRequest();

} else {
    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP'); // ta2akod men el; browser
} // sar ma3na xmlhttpppppp 2


xmlhttp.onreadystatechange = function() {
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById('message').innerHTML = xmlhttp.responseText;// jib el shi li bi element
    }
}
parameters = 'text='+document.getElementById('text').value;// jeb li ana ketbo w hato hon
xmlhttp.open('POST' , 'update.inc.php', true); // 3a a3mul post 3a update.inc.php
xmlhttp.setRequestHeader('Content-type' , 'application/x-www-form-urlencoded');
xmlhttp.send(parameters);// 3
}


        
    </script>
</head>
<body>
    Insert : <input type="text" id="text" ><input type="button" value="submit" onclick="insert();"> 
    
    <div id="message"></div>
</body>
</html>