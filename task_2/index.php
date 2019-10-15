
<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta  name="viewport"  content="initial-scale=1.0, width=device-width">
<link rel="stylesheet" href="css/style.css">
<title>Test js</title>
</head>
<body>
<header>
	
</header>

	<div class="container">
        <div class="row">
            
            <form action="upload.php" method="POST" enctype="multipart/form-data" id="upload" class="upload">
                <div id="dropZone">
                    <label for="input-file-max-fs"></label>
                    <input type="file" id="input-file-to-destroy" class="dropify" data-max-file-size="10M" />
                </div>
            </form>
                
        </div>
    </div>
    

      
    <table id="table" align = "center" border="1px"></table> 


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="xlsx.full.min.js"></script>
    <script>
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Перетащите сюда файл или нажмите чтобы выбрать',
                    replace: 'Перетащите сюда файл или нажмите чтобы повторить',
                    remove:  'Удалить',
                    error:   'Упс, что-то пошло не так.'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>

</body>
</html>