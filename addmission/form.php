
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tiny.cloud/1/API_KEY/tinymce/6/tinymce.min.js"></script>

</head>
<body>
    <form action="save.php" method="post"  enctype="multipart/form-data">
        <label for="username"> User Name </label>
        <input type="text" name="username" id=""> <br><br>
        <label for="email">User Email</label>
        <input type="email" name="email" id=""> <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id=""> <br><br>
        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>  <br><br>
        <label for="gender"> Gender</label>
        <input type="radio" name="gender" value="male" id=""> male
        <input type="radio" name="gender" value="female" id=""> Female
        <input type="radio" name="gender" value ="other" id=""> other  <br><br>


        <label for="course">Course Name</label>
        <input type="checkbox" name="course[]" value="html" id=""> html
        <input type="checkbox" name="course[]" value="php" id=""> PHP
        <input type="checkbox" name="course[]" value="javascript" id="">javascript  <br><br>
        <label for="coursefee"> Course Fee</label>
        <input type="number" name="coursefee" id=""> <br><br>
        <label for="cell"> Phone Number</label>
        <input type="tel" name="cell" id=""> <br><br>


        <label for="color">Colors</label>
        <input type="color" name="color" id=""> <br><br>
        <label for="bithDate">Your Birth Date</label>
        <input type="date" name="birthDate" id=""> <br><br>
        <label for="classTime">Your Class Time</label>
        <input type="time" name="classTime" id=""> <br><br>
        <label for="fburl">Facebook Url</label>
        <input type="url" name="fburl" id=""> <br><br>



        <label for="month"> Select Your month</label>
        <input type="month" name="selectMonth" id=""> <br><br>
        <label for="imagefile">select Your file</label>
        <input type="file" name="imagefile[]" id=""><br><br>
        <input type="hidden" name="userip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>"> <br><br>


        <label for="price_range">Product Price</label>
        <input type="range" name="price_range" min="1" max="100" id=""> <br><br>
        <label for="selectweek"> Select Your week</label> 
        <input type="week" name="selectweek" id=""> <br><br>
        <label for="localTime"> select Your local time</label>
        <input type="datetime-local" name="localTime" id=""> <br><br>


        <select name="Web_course[]" id="" multiple="2">
            <option value="0" selected>Select Your course</option>
            <option value="WordPress">WordPress</option>
            <option value="Larave"> Larave </option>
            <option value="php_development">PHP Development</option>
        </select>  <br><br>


        <label for="editor">description box for edit</label>
        <textarea id="myTextarea"></textarea> <br><br>




        <button type="submit">Save</button>
        <input type="reset" value="Reset">
    </form>




    <script>
        tinymce.init({
        selector: '#myTextarea'
        });
    </script>
</body>
</html>