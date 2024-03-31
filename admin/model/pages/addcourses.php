<?php
if($URL[1]=='edit-course'){
    $sql = 'SELECT items.*, category.name AS category_name, category.id AS category_id
	FROM items 
	LEFT JOIN category ON items.category_id = category.id 
	WHERE items.id = "'.$URL[2].'"';
	$result1 = $conn->query($sql);
    foreach($result1 as $row){
$categories_id='<option value='.$row['category_id'].' selected>'.$row['category_name'].'</option>';
$extended_title=$row['title'];
$overview=$row['short_description'];
$description=$row['long_description'];
$og_image=$row['og_image'];
$image=$row['image_1'];
$badge_icon=$row['image_2'];
$imgcertificate=$row['image_3'];
$id=$row['id'];
$type='edit-course';
}
}else{
    $imgcertificate='';
    $badge_icon='';
$extended_title='';
$overview='';
$description='';
$image='';
$id='';
    $type='insert-course';
   
}

?>



<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="btn-wrapper">


                            <a class="btn btn-inverse-dark btn-fw mb-2" onclick="history.back(1)">
                                &lt;- back</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-sm-12">
            <div class="home-tab">

                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <form id="addcourseform" method="post" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-12 grid-margin  zoomIn ">
                                    <div class="card">

                                        <div class="card-body">
                                            <h4 class="card-title">New Product</h4>

                                            <div class="form-group">
                                                <label for="title">Categories</label>

                                                <select name="categories_id" id="categoriesidedit"
                                                    class="form-control form-control-lg" style="background:none;"
                                                    required>
                                                    <option value="" selected>select categories</option>
                                                    <?php
                                                foreach($resultcat as $categoriesrow ){
                                                    ?>
                                                    <option value="<?=$categoriesrow['id']?>">
                                                        <?=$categoriesrow['name']?></option>

                                                    <?php
                                                }
                                                echo $categories_id;
                                                ?>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input name="extended_title" class="form-control form-control-lg"
                                                    id="extendedtitle" type="text" value="<?=$extended_title?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Short Description</label>
                                                <textarea name="overview" id="overviewtextvalue" class="form-control resizable-textarea" rows="100"><?=$overview?></textarea>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Long Description</label>
                                             
                                                <textarea  name="description" id="description" class="form-control resizable-textarea" rows="100"><?=$description?></textarea>

                                            </div>
                                        
                                            <div class="form-group">
                                                <label for="exampleInputPassword1" for="file">Og Image</label>
                                                <input onchange="loadFilloadOg(event)" name="og"
                                                    class="form-control form-control-lg" id="formFileLg" type="file" >
                                            </div>
                                            <div class="form-group">
                                                <img id="og" src="<?=$og_image?>" width="200px" alt="" srcset="">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1" for="file">Image - 1</label>
                                                <input onchange="loadFilebadge(event)" name="badge_icon"
                                                    class="form-control form-control-lg" id="formFileLg" type="file" >
                                            </div>
                                            <div class="form-group">
                                                <img id="imgbadge" src="<?=$badge_icon?>" width="200px" alt="" srcset="">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1" for="file">Image - 2</label>
                                                <input onchange="loadFilecertificate(event)" name="certificate"
                                                    class="form-control form-control-lg" id="formFileLg" type="file" >
                                            </div>
                                            <div class="form-group">
                                                <img id="imgcertificate" src="<?=$imgcertificate?>" width="200px" alt="" srcset="">

                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="exampleInputPassword1" for="file">Image - 3</label>
                                                <input onchange="loadFile(event)" name="image"
                                                    class="form-control form-control-lg" id="formFileLg" type="file" >
                                            </div>
                                            <div class="form-group">
                                                <img id="img" src="<?=$image?>" width="200px" alt="" srcset="">

                                            </div>



                                        </div>
                                  
                                     


                                    </div>





                                </div>



                                <div class="col-md-12 grid-margin  zoomIn ">
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="hidden" name="type" value="<?=$type?>">
                                            <input type="hidden" name="id" value="<?=$id?>">
                                            <button type="submit" class="btn btn-primary text-white me-2"
                                                id="butsave">ADD</button>
                                           
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>