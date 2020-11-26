<form action="" method="POST">
<div class="form-group">
    <label for="cat-title"> Update Category</label>

            <?php
            if(isset($_GET['edit'])){
                $cat_id= $_GET['edit'];

            $query = "SELECT * from categories where cat_id=$cat_id";
            $select_categories_id = mysqli_query($connection, $query);



            while($row =mysqli_fetch_assoc($select_categories_id)) {
            $cat_id=$row['cat_id'];
            $cat_title=$row['cat_title'];    

            ?>    
           <input value="<?php if(isset($cat_title)){echo $cat_title;} ?>" class="form-control" type="text" name="cat_title">     

            <?php }  } ?>
                            
                            
                            
            <?php //update query
            if(isset($_POST['update'])){
                    $the_cat_title= $_POST['update'];
                    $query ="Update categories set cat_title='{$the_cat_title}' where cat_id={$cat_id}";
                    $update_query=mysqli_query($connection, $query);
                    if($update_query){
                        die("query failed". mysqli_error($connection));
                    }
                    
                }
                      
                            
                            
            ?>    
                          </div>
                        <div class="form-group">
                            <input class= "btn btn-primary" type="submit" name="update" value="Update Category">
                        </div>
                    </form>
                    
               