<?php
// error_reporting(0);
 
// $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];


    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employees";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{
    $stmt= $conn->prepare( "INSERT INTO amployeestable (imageOfEmployee,nameOfemployee,AddressOfEmployee,salary)
    VALUES ( ?, ?,  ?,  ?)");
    
    $stmt->bind_param("sssi", $filename, $name ,$address,$salary);
    $stmt->execute();
    echo '<script>alert("regestration successfully")</script>';

    //     // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo '<script>alert("<h3>  Image uploaded successfully!</h3>")</script>';
     
    } else {
        echo '<script>alert("<h3>  Failed to upload image!</h3>")</script>';

    }

    
    $stmt->close();
    $conn->close();
    $_SESSION['message'] = "user Not Updated";
    header("Location: landing.php");
    exit(0);
    }
    }

    



 ?>





<style>
    * {
    padding: 0px;
    margin: 0px;
}
body {
    background-color: lightgreen;
}
header {
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 15vh;
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
h1 {
    letter-spacing: 1.5vw;
    font-family: 'system-ui';
    text-transform: uppercase;
    text-align: center;
}
main {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 75vh;
    width: 100%;
    background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Mountains-1412683.svg/1280px-Mountains-1412683.svg.png) no-repeat center center;
    background-size: cover;
}
.form_class {
    width: 500px;
    padding: 40px;
    border-radius: 8px;
    background-color: white;
    font-family: 'system-ui';
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
}
.form_div {
    text-transform: uppercase;
}
.form_div > label {
    letter-spacing: 3px;
    font-size: 1rem;
}
.info_div {
    text-align: center;
    margin-top: 20px;
}
.info_div {
    letter-spacing: 1px;
}
.field_class {
    width: 100%;
    border-radius: 6px;
    border-style: solid;
    border-width: 1px;
    padding: 5px 0px;
    text-indent: 6px;
    margin-top: 10px;
    margin-bottom: 20px;
    font-family: 'system-ui';
    font-size: 0.9rem;
    letter-spacing: 2px;
}
.submit_class {
    border-style: none;
    border-radius: 5px;
    background-color: #FFE6D4;
    padding: 8px 20px;
    font-family: 'system-ui';
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin: auto;
    margin-top: 10px;
    box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
    cursor: pointer;
}
footer {
    height: 10vh;
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: -5px -5px 10px rgb(0,0,0,0.3);
}
footer > p {
    text-align: center;
    font-family: 'system-ui';
    letter-spacing: 3px;
}
footer > p > a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}
</style>

<body>
    <header>
        <h1>Add new employee</h1>
    </header>
    <main>
        <form id="add_employee" class="form_class" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
            <div class="form_div">

                 <div class="form-group">
                <label>Employee's name:</label>
                <input class="field_class" name="name" type="text" placeholder="name" id="name" autofocus>
                <div id="nameerror" style="color: red;"></div>
                </div> 

                <div class="form-group">
                <label>Address:</label>
                <input class="field_class" name="address" type="text" placeholder="address" id="address" autofocus>
                <div id="addresserror" style="color: red;"></div>
                </div> 


                <div class="form-group">
                <label>Salary:</label>
                <input class="field_class" name="salary" type="number" placeholder="salary" id="salary" autofocus>
                <div id="salaryerror" style="color: red;"></div>
                </div> 


                <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
                 </div>
                 <div id="emailerror" style="color: red;"></div>
                </div> 


                 <div class="form-group">
                <!-- <input class="submit_class" type="submit" form="addEmployee" name="submit" onclick="return IsEmpty();"> -->
                <input type="submit" name="submit" value="Add" class="submit_class" onclick="return IsEmpty();"> 


                 </div>
            </div>
          
            <div class="info_div">
                <p>If you don't want to add a new employee <a href="register/reg-form.php">view employees</a></p>
            </div>
        </form>
    </main>
    <footer>
        <p>Designed by <a href="landing.php">Amani Al-Hiary&trade;</a></p>
    </footer>

    <script src="java.js"></script>
</body>
