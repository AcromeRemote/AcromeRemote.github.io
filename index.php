<html>
        <head>
                <meta charset="utf-8">
                <title>CKEditor</title>
                <script src="ckeditor/ckeditor.js"></script>
		<script src="ckfinder/ckfinder.js"></script>
        </head>
        <body>
                <textarea name="editor1"></textarea>
                <script>
			CKEDITOR.replace( 'editor1',
			{
				filebrowserBrowseUrl		: '/ckfinder/ckfinder.html',
			     	filebrowserImageBrowseUrl	: '/ckfinder/ckfinder.html?type=Images',
			     	filebrowserUploadUrl		: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			     	filebrowserImageUploadUrl	: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
			});
                </script>
        </body>
</html>
