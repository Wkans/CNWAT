<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CKEditor 5 Test</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
</head>
<body>
    <h2>CKEditor 5 Demo</h2>
    <textarea id="Description" name="Description"></textarea>

    <script>
        ClassicEditor
            .create(document.querySelector('#Description'))
            .then(editor => {
                console.log("CKEditor 5 loaded!");
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>
