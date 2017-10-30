 <script lang="javascript">
        function show(str) {
    if (str.length == 0) { 
        document.getElementById("a").innerHTML = "";
     
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("a").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "search_form-1.php?id="+str, true);
        xmlhttp.send();
    }
}
</script>

        <input type="text" onKeyUp="show(this.value)"  class="form-control"/>
        
        <div id="a"></div>
