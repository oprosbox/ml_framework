
<form enctype="multipart/form-data"  method="POST" id="form_send">
    <label for="name_text_file">Имя текстового файла</label>
    <input type="text" name="name_text" value="file_text_name.txt" size="40" autofocusplaceholder="имя файла.txt" id="name_text_file"/>
    <textarea name="textarea" style="min-width:300px; height:200px"> 
    Беги Форест, беги!
    </textarea>
    <label for="name_file">Имя файла</label>
    <input type="text" name="name_file" value="file1" size="40" autofocusplaceholder="имя файла.format" id="name_file"/>
    <fieldset>
        <legend>добавьте файл</legend>
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
        <input type='file' name='file' multiple/>         
    </fieldset>
    <input type="button" value="Отправка" id="btn_post">
</form>