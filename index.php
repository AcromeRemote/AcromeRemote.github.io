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
			var editor = CKEDITOR.replace( 'editor1' );
			CKFinder.setupCKEditor( editor );
                </script>
        </body>
</html>
