<html>
<head>
    <link rel="stylesheet" type="text/css" href="view/css.css">
</head>
<body>
    <div class="main">
        <div class="header"></div>
        <div class="center">
            <form action='controller/controller.php' method='POST' enctype="multipart/form-data">
                <p><?echo $_REQUEST['message'];?></p>
                <p>выберите фаил который нужно выровнять:</p>
                <div class="open_file"><input type='file' name='file'></div>
                <p>дайте имя новому фаилу или оставьте дефолт:</p>
                <div class="name_new_file"><input type='text' name='name_file' value='default_file'></div>
                <div class="button"><input type='submit'></div>
            </form>
        </div>
        <div class="bottom"></div>
    </div>
</body>
</html>