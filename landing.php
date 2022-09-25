

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
height: 20vh;
box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
padding-top:20px;
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
.table {
width: 500px;
padding: 40px;
border-radius: 8px;
background-color: white;
font-family: 'system-ui';
box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
width: 70%;
}
.table {
text-transform: uppercase;
}
.table > label {
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
.employeesTable{
    width:70%;
    margin-left:15%;
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
color:black;
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
.table i{
    width: 15%;
    color: black;
    background-color:#FFE6D4;
    padding-left:5%;
    height:25px;
    padding-top:1.5%;
}
.images{
    width : 50px;
    height:50px;
    margin-right:-1500px;
    border-radius:50px;
}
</style>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>

</head>
<body>
<header>
    <h1>Employees Table</h1>
    <a href="add.php"><input type="submit" name="submit" value="Add New One" class="submit_class" href="add.php"></a>

</header>
<main>
<div class="employeesTable">
<table class="table">
<?php
// -----------------------------------------------Draw The table-----------------------------------
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

$sql = "SELECT *
from amployeestable
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class=table><tr>
    <th>ID</th>
    <th>Image</th>
    <th>Name</th>
    <th>Address</th>
    <th>Salary</th>
    <th>view,edit or delete</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><img src='image/<?= $row["imageOfEmployee"]  ?>'class="images"></td>
            <td><?= $row["nameOfemployee"] ?></td>
            <td><?= $row["AddressOfEmployee"] ?></td>
            <td><?= $row["Salary"] ?></td>
            <td>
            <a href="employeeview.php?id=<?=$row["id"]?> "><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href="employeeedit.php?id=<?=$row["id"]?> "><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="employeedelete.php?id=<?=$row["id"]?> " onclick="return checkDelete()"><i class="fa fa-trash" aria-hidden="true"></i></a>

            </td>
        </tr>
       <?php
       };
    };
       ?>



</table>
  </div>

</main>
<footer>
    <p>Designed by <a href="#">Amani Al-Hiary&trade;</a></p>
</footer>


</body>


