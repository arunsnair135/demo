<!DOCTYPE html>
<html>
    <head>
        <title>calculator</title>
        <script>
                 function add(){
                     q=document.getElementById("n1").value;
                     w=document.getElementById("n1").value;
                     var sum=q+w;
                     window.alert("hi");
                     document.getElementById("ans")=sum;
                 }
             </script>
    </head>

    <body>
        <h2 style="color:blue; text-align:center">CALCULATOR</h2>

        <form class="f" action="">
            <br> &nbsp;<label>Enter First Number:</label> <input type="text" id="n1"><br><br>
            <br> &nbsp;<label>Enter Second Number: </label><input type="text" id="n2"><br><br>
            <textarea rows="4" cols="10" id="ans"></textarea><br><br>
            <br> &nbsp;<button onclick="add()">ADD</button>
             &nbsp;<button onclick="">SUBSTRACT</button>
             &nbsp;
             &nbsp;
            
    </body>