<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_multiupload.php" method="post" enctype="multipart/form-data">
    <!--digunakan untuk uplaod file ekstensi dokumen-->
    <!-- <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx"> -->
    <input type="file" name="files[]" multiple="multiple" accept=".jpeg, .jpg, .gif, .png">
        <input type="submit" value="Unggah">
    </form>
</body>
</html>