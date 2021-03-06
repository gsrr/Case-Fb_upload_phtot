<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Facebook - Upload Photo</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.10.8/js/dataTables.jqueryui.min.js"></script>
    <script src="./js/dialog.js"></script>

    <script>
        function showInfo()
        {
            var $dia;
            alert("showImage");
            var paras = [];
            paras['url'] = "./show.html";
            paras['button'] = {};
            $dia = createDialog(paras);
            $dia.dialog("open");
        }
        
        function deleteAllPhotos()
         {
            var data = {
                "prog": "fileManager",
                "op": "deleteAllPhotos",
                "path" : "./image" 
            };
            callPython(data, function(ret){
                alert(ret);
            });
         }
        function importDialog() {
            var $dia;
            var paras = [];
            paras['url'] = "./import.php";
            paras['button'] = {
                "deletePhotos" : deleteAllPhotos,
                "Show" : showInfo,  
            };
            $dia = createDialog(paras);
            $dia.dialog("open");
        }

        $(function() {
            $("button").button(); 
            $("#import").click(function() {
                importDialog();
            });
            $("#phpinfo").click(function() {
                window.location.href = "./phpinfo.php"
            });
        });
    </script>
</head>

<body>
    <button id="import">Import</button>
    <button id="phpinfo">phpinfo</button>
</body>

</html>