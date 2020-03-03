<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button>Submit</button>
</form>

<?php
require_once __DIR__ . '/classes/Uploader.php';

$file_upload = new Uploader();
$file_upload->upload();