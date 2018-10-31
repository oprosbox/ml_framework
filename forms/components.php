

<form enctype="multipart/form-data"  method="POST" autocomplete="on"  > <!--novalidate-->
    
    <input type="button" onclick="script_funct()" value="Click Me!"><!-- -->
    
    <input type="checkbox" name="vehicle1" value="Bike"><!-- -->
    
    <input type="file" name="myFile"> <!--multiple-->
    
    <input type="hidden"><!-- -->
    
    <input type="image" src="img_submit.gif" alt="Submit" width="48" height="48"><!-- -->
    
    <input type="radio" name="gender" value="male" checked> <!-- readonly,disabled,checked-->
    
    <input type="reset"><!-- -->
    
    <input type="submit" value="Отправка"><!--formaction="/action_page2.php" formenctype="multipart/form-data" formnovalidate-->
    
    <input type="text" name="firstname" value="Mickey" maxlength="10" size="40" pattern="[A-Za-z]{3}" > <!-- readonly, disabled, autofocusplaceholder="First name" required-->
    
    <input type="color" name="favcolor"><!-- -->
    
    <input type="date" name="bday" max="1979-12-31" min="2000-01-02"><!-- -->
    
    <input type="datetime"><!-- -->
    
    <input type="datetime-local" name="bdaytime"><!-- -->
    
    <input type="email" name="email"><!-- -->
    
    <input type="number" name="points" min="0" max="100" step="10" value="30"><!-- -->
    
    <input type="range" name="points" min="0" max="10"><!-- -->
    
    <input type="search" name="googlesearch"><!-- -->
    
    <input type="tel" name="usrtel"><!-- -->
    
    <input type="time" name="usr_time"><!-- -->
    
    <input type="url" name="homepage"><!-- -->
    
    <input type="month" name="bdaymonth"><!-- -->
    
    <input type="week" name="week_year"><!-- -->
    
<input list="browsers"><!-- -->
<datalist id="browsers"><!-- -->
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist>
    
<select name="cars" size="3" multiple><!--выпадающий список -->
  <optgroup label="German Cars"><!--выделение заголовка в списке-->  
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <optgroup/>
  <optgroup label="other">
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  <optgroup/>
</select>

 <label for="male">Male</label><!--метка для конкретного компонента -->
 <input type="radio" name="gender" id="male" value="male">
  
<textarea name="message" rows="10" cols="30"> <!-- style="width:200px; height:600px"-->
The cat was playing in the garden.
</textarea>

<button type="button" onclick="funct_js()">Click Me!</button><!-- -->

<output name="x" for="a b"></output> <!-- -->

   <fieldset><!--рамка. отправка файла-->
         <legend>добавьте картинку</legend>
         <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
         <input type='file' name='picture' multiple/>         
      </fieldset>
</form>
