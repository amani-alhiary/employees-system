<?php
session_start();
$con = mysqli_connect("localhost","root","","employees");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
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


    <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM amployeestable WHERE id='$user_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST" id="add_employee" class="form_class">
                                    <input  class="field_class"  type="hidden" name="user_id" value="<?= $user['id']; ?>">

                                    <div class="mb-3">
                                        <label>name:</label><br>
                                        <input  class="field_class"  type="text" name="email" value="<?=$user['nameOfemployee'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address:</label><br>
                                        <input  class="field_class"  type="text" name="phoneNum" value="<?=$user['AddressOfEmployee'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Salary:</label><br>
                                        <input  class="field_class"  type="text" name="fullName" value="<?=$user['Salary'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_user" class="submit_class">
                                            Update Employee
                                        </button>
                                    </div>

                                </form>
                                <?php


 
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }





                        

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </main>
    <footer>
        <p>Designed by <a href="#">Amani Al-Hiary&trade;</a></p>
    </footer>

    <script src="java.js"></script>
</body>
