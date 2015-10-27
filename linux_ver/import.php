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
    //document.getElementById('my_form').target = 'my_iframe';
  });
</script>

<br/>
<table>
    <tr>
        <td><label>Image Location</label></td>
        <td><input id="img_path" value="/home/jerryc/public_html/image2/" type="text" size="40"></br> </td>
        <td><button id="img_browse">Browse</button></td>
    </tr>
</table>


</body>
</html>
