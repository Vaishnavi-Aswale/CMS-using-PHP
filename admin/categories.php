<?php 
include "includes/admin_header.php"
    
?>
  
    <div id="wrapper">
     
     
        
        
        

        <!-- Navigation -->
            
<?php 
include "includes/admin_navigation.php"
?>       

           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                   <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li>
                                <a href="./posts.php">View all posts</a>
                            </li>
                            <li>
                                <a href="#">Add post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="categories.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>

                    <li class="active">
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i>Comments</a>
                    </li>
            
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="users.php">View all users</a>
                            </li>
                            <li>
                                <a href="users.php?source=add_user">Add User</a>
                            </li>
                        </ul>
                    </li>
                            <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small><?php echo $_SESSION['username'];?></small>
                        </h1>
       
                    </div>
                </div>
                
                <div class="col-xs-6">
                    
        <?php insert_categories(); ?>          
                    
                    
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="cat-title"> Add Category</label>
                            <input class="form-control" type="text" name="cat_title">
                        </div>
                        <div class="form-group">
                            <input class= "btn btn-primary" type="submit" name="submit" value="Add Category">
                        </div>
                    </form>
                    
                    <?php 
                    if(isset($_GET['edit'])){
                        $cat_id= $_GET['edit'];
                        include "includes/update_categories.php";
                    }
                    ?>
                    
                    

                    </div> <!--Add category -->
                <div class="col-xs-6">
 
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category title</th>
                                <tbody>
                  <?php //find all categories
                    find_all_categories();                                  
                  ?>
                                    
                <?php //delete query
                    delete_categories();
                                    
                                    ?>
                                    
                                    
                                    </tbody>
                            </tr>
                        
                        </thead>
                    </table>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php" ?>