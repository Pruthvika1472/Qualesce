<?php
require_once('common_files/header.php');
?>

<form action="mailto:balaji.s@qualesce.com" enctype="text/plain">
<!-- <fieldset>
    <legend>REGISTRATION FORM </legend> -->
            <label for="fname">FirstName:</label>
            <input type="text" id="fname" name="fname">
            <label for="lname">LastName:</label>
            <input type="text" id="lname" name="lname"><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="18" max="60" value="21"><br>
            <label for="dob">DOB:</label>
            <input type="date" id="dob" name="dob"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" pattern="[1-9]{1}[0-9]{9}" required>
            <br>
            Gender:  <input type="radio" id="male" name="gen" value="male">Male
            <input type="radio" id="female" name="gen" value="female">Female
            <input type="radio" id="others" name="gen" value="others">Others<br>
            Known Languages:<br>
            <input type="checkbox" id="eng" name="lan" value="eng">English<br>
            <input type="checkbox" id="kan" name="lan" value="kan">Kannada<br>
            <input type="checkbox" id="hindi" name="lan" value="hindi">Hindi<br>
            <input type="checkbox" id="telgue" name="lan" value="telgue">Telgue<br>
            Address:<br>
            <textarea id="addr" rows="5" cols="10" >...</textarea><br>

            <input type="submit" value="SUBMIT">
     
<!-- </fieldset> -->
    
</form>


<?php
require_once('common_files/header.php');
?>