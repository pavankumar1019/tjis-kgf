<?php
if($URL[1]=='edit-cat'){
    $sql = 'SELECT * FROM category WHERE id = "'.$URL[2].'"';
	$result1 = $conn->query($sql);
    foreach($result1 as $row){
$extended_title=$row['name'];
$id=$row['id'];
$type='update-category';
}
}else{
$extended_title='';
$id='';
    $type='add-cat';
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
                        <form id="addcat" method="post" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-12 grid-margin  zoomIn ">
                                    <div class="card">

                                        <div class="card-body">
                                            <h4 class="card-title">Categories</h4>

                                    

                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input name="extended_title" class="form-control form-control-lg"
                                                    id="extendedtitle" type="text" value="<?=$extended_title?>">
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