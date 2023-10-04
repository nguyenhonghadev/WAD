<!DOCTYPE html>
<html>
 <head>
    <tile>1st JavaScript</tile>
    <script>
    


        function hello() {
        document.querySelector('h1').innerHTML ='2nd JavaScript !';
            
        }
        

    </script>
    <tile>1st JavaScript</tile>
 </head> 
 <body>
    <h1>1st JavaScript</h1>
    <button onclick="hello()">Click Here !</button>
</body>  
</html>

//*QUERYSELECTOR

querySelector: chỉ trả lại giá trị duy nhất 1 selector
đâu tiên trong trang web
• document.querySelector(“tên
thẻ”)
• document.querySelector(“#ID”)
• document.querySelector(“.class”) *//