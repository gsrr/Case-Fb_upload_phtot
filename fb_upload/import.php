<DOCTYPE html>
<html>
<body>

<script>
  

     function file_browse(dirtype)
     {
        var paras = [];
        paras['params'] = {'type' : dirtype}
        paras['url'] = "./fileManager/fileManager.html";
        paras['button'] = {};
        $dia = createDialog(paras);
        $dia.dialog("open");
     }
     function img_browse()
     {
        file_browse("img");
     }
     function csv_browse()
     {
        file_browse("csv");
     }
  $("document").ready(function(){
    $("#img_browse").click(img_browse);
    $("#csv_browse").click(csv_browse);
    $('#myform').prop("target", 'my_iframe');
  });
</script>

<form id="myform" action="upload.php" method="post" enctype="multipart/form-data">
    Select photo to upload:
    <input type="file" name="fileToUpload[]" id="fileToUpload" multiple></br></br>

    </br>  
    <input id="file_submit" type="submit" name="submit" value="Upload"/></br>  
    </br>
    <iframe id='my_iframe' name='my_iframe' src="" width="500">    
    
</form>


</body>
</html>