<!DOCTYPE html>
<html lang="en">
<head>
 <script type="text/javascript">
  
function findmatch() {
  
  if( window.XMLHttpRequest) {
   xmlhttp = new XMLHttpRequest();

} else {
    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP'); 
}


xmlhttp.onreadystatechange = function() {
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById('results').innerHTML = xmlhttp.responseText;
    }
}
xmlhttp.open('Get' , 'search.inc.php?search_text='+document.search.search_text.value, true);
xmlhttp.send();
}










 </script>
</head>
<body>
    <form id="search" name="search" action="anotherpage.php">
        Type a name : <br>
        <input type="text" name="search_text" onkeyup="findmatch();">

    </form>
    <div id="results"></div>
</body>
</html>