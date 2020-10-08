<?php
include_once 'Config/db_conn.php';
include 'includes/header.php';
?>
<style type="text/css">
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        text-decoration: none;
        color: white;
    }
    h2{
        text-align: center;
        padding-top: 18px;
        padding-bottom: 12px;
    }
    h3 {
        text-align: center;
    }
    .blogs button{
        margin-bottom: 4%;
    }
</style>
<div class="container">
    <h3 style="text-align: center;">This is the <mark>body</mark> section of web page and here lies the main content.</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-4">
<h3><a href="addblog.php"><button class="btn btn-lg btn-outline-danger">Create New Blog</a></button></h3>
    </div>
        <div class="col-4">
<h3><a href="#"><button class="btn btn-lg btn-outline-dark">Edit ExistingBlog</a></button></h3>
    </div>
    <div class="col-4">
<h3><a href="#"><button class="btn btn-lg btn-outline-info">Update A Blog</a></button></h3>
</div>
</div>
  <h2>List of my blogs</h2>
  <div class="blogs">
<?php
$sqlquery = "SELECT * FROM blog;";
$data = mysqli_query($conn, $sqlquery);

foreach ($data as $unitdata): ?>
    <h5>Blog Id:
        <?php
        echo $unitdata['id']; ?>
    </h5>
    <h1>
        <?php
        echo $unitdata['title']; ?>
    </h1>
    <p>
        <?php
        echo $unitdata['details']; ?>
    </p>
    <a href="#"><button class="btn btn-lg btn-outline-success">Read More</a></button>
<?php endforeach ;

?>
</div>
</div>
<?php
include 'includes/footer.php'
?>