@extends('layouts.app')
<form method="post" enctype="multipart/form-data" action="/upload_file">
    <input type="file" name="file" />
    <input type="submit" name="submit" value="upload" />
</form>
