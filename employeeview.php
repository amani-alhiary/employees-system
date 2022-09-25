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
body {
  background: #fff;
  font-family: 'Open Sans', sans-serif;
  margin: 0;
  padding: 0;
}

a {
  color: inherit;
  text-decoration: none;
}

a:hover {
  color: rgba(0, 0, 0, .65);
}

a:hover {
  color: rgba(0, 0, 0, .45);
}

.window,
.box,
ul,
li {
  margin: 0;
  overflow: hidden;
  padding: 0;
  position: relative;
}

ul {
  font-family: 'Fjalla One', sans-serif;
  list-style-type: none;
  text-transform: uppercase;
}

li {
  display: inline-block;
}

img {
  display: block;
  width: 100%;
}



.overlay {
  /* background: #158 url(https://goo.gl/DM5s4f) center no-repeat;
  background-size: cover; */
  height: calc(100% + 40px);
  margin: -20px;
  position: relative;
  width: calc(100% + 40px);
  -webkit-filter: blur(30px);
  -moz-filter: blur(30px);
  filter: blur(30px);
}

.window {
  box-shadow: 0 0 100px  rgba(0,0,0,0.25);
  height: 450px;
  margin: 2em auto 0;
  width: 320px;
}

.header {
  background: rgba(0, 97, 145, 0.45);
  color: #FFF;
  height: 450px;
  left: 0;
  position: absolute;
  text-align: center;
  top: 0;
  width: inherit;
}

.header:before {
  border: 2px solid rgba(161, 220, 255, 0.34);
  border-radius: 100%;
  content: "";
  height: 140px;
  left: 0;
  margin: 67px auto;
  padding: 0;
  position: absolute;
  right: 0;
  top: 0;
  width: 140px;
  z-index: 2;
  -webkit-transform: scale(1.24, 1.24);
  -moz-transform: scale(1.24, 1.24);
  transform: scale(1.24, 1.24);
}

.header img {
  border: 5px solid #A1DCFF;
  border-radius: 100%;
  height: 140px;
  margin: 4em auto 2.5em;
  object-fit: cover;
  width: 140px;
}

.header h2 {
  display: inline-block;
  font-family: 'Quicksand', sans-serif;
  font-size: 28px;
  font-weight: 400;
  letter-spacing: -2px;
  margin: 0 auto;
  padding: 0;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
}

.header h4 {
  color: rgba(255, 255, 255, 0.75);
  display: block;
  font-size: 15px;
  margin: 0 auto;
  padding: 5px 0 0;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
  text-transform: uppercase;
}

.footer {
  background: rgba(0, 97, 145, 0.75);
  bottom: 0;
  color: #FFF;
  left: 0;
  position: absolute;
  text-align: center;
  top: 380px;
  width: inherit;
}

.footer ul {
  display: flex;
  font-size: 16px;
  font-weight: 400;
  height: 40px;
  line-height: 40px;
  padding: 20px 20px;
}

.footer li:first-child {
  border: 0;
}

.footer li {
  border-left: 2px solid rgba(255, 255, 255, .15);
  font-family: 'Quicksand', sans-serif;
  padding: 0 4px 0 6px;
  width: 100%;
}

.footer a span {
  color: #9CDFF5;
  display: inline-block;
  font-size: 26px;
  padding: 0 4px 0 0;
  vertical-align: middle;
}

</style>

<body>
    <header>
        <h1>Employee's profile</h1>
    </header>
    <main>
    <?php
// -----------------------------------------------Draw The table-----------------------------------
$con = mysqli_connect("localhost","root","","employees");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
if(isset($_GET['id']))
{
    $user_id = mysqli_real_escape_string($con, $_GET['id']);
    $query = "SELECT * FROM amployeestable WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $user = mysqli_fetch_array($query_run);
        ?>


    
    <div class="window">
  <div class="overlay"></div>
  <div class="box header">
    <img src='image/<?= $user["imageOfEmployee"]  ?>' alt="" />
    <h2><?= $user["nameOfemployee"] ?></h2>
    <h4><?= $user["AddressOfEmployee"] ?></h4>
    <h4><?= $user["Salary"] ?>  JOD/ month</h4>
    <a href="landing.php"><input type="submit" name="submit" value="Go Back" class="submit_class" ></a> 

  </div>
  <?php
    }}
?>

    </main>
    <footer>
        <p>Designed by <a href="#">Amani Al-Hiary&trade;</a></p>
    </footer>

    <script src="java.js"></script>
</body>
