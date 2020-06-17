<table border="1" cellspacing="0" id="tableMain">
    <thead>
    <tr>
        <td>titulo 1</td>
        <td>titulo 2</td>
        <td>titulo 3</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td onclick="myclick(this)">1</td>
        <td onclick="myclick(this)">2</td>
        <td onclick="myclick(this)">3</td>
    </tr>
    <tr>
        <td onclick="myclick(this)">4</td>
        <td onclick="myclick(this)">5</td>
        <td onclick="myclick(this)">6</td>
    </tr>
    </tbody>
</table>
<p id="tag"></p>
<script>
    let tableMain = document.getElementById("tableMain").getElementsByTagName("tbody")[0];
   /* for(var i = 0; i < tableMain.rows.length; i++){
        tableMain.rows[i].onclick = function () {
            getCellValue(this)
        }
    }

    function getCellValue(tableRow){
        for(var i = 0; i < tableRow.cells.length; i++){
            document.write(tableRow.cells[i].innerHTML);
        }
    }*/
    tableMain.onclick = function () {
       // alert("clicked cell at: " + this.getElementsByTagName("td").cellIndex + ", " + this.rowIndex);
    }
    function myclick(obj){
        //alert("clicked cell at: " + obj.cellIndex + ", " + obj.parentNode.rowIndex);
              obj.style.backgroundColor = "Yellow";
    }
</script>