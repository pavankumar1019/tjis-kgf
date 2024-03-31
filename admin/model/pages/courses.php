<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="btn-wrapper">


                            <a class="btn btn-primary text-white me-0 mb-2" href="<?=base()?>addcourses/add-courses/">
                                <i class="mdi mdi-server-plus"></i> New Product</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-sm-12">
            <div class="home-tab">

                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card zoomIn">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash">
                                                            Products
                                                        </h4>
                                                        <p class="card-subtitle card-subtitle-dash">
                                                            You have <?= $resultproduct->num_rows ?> Products
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="table-responsive mt-1">
                                                    <table class="select-table" id="employee_data">
                                                        <thead>
                                                            <tr>
                                                                <th class="p-4">Info</th>
                                                                <th class="p-4">Image</th>


                                                                <th class="text-center p-4">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                             $sqlresultcountcourses = "SELECT items.*, category.name AS category_name 
                                                             FROM items 
                                                             LEFT JOIN category ON items.category_id = category.id ";
                                                             $resultcountcourses = $conn->query($sqlresultcountcourses);
                                                             foreach($resultcountcourses as $row){
                                                              
                    
?>
                                                            <tr>

                                                                <td style="min-width: 500px !important;" class="p-4">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <h4><?=$row['title']?></h6>
                                                                                <h6><?=$row['category_name']?></h6>
                                                                                <h4 class="text-primary">Short Description</h6>
                                                                                    <p><?=$row['short_description']?></p>
                                                                                    <h4 class="text-primary">Long Description
                                                                                        </h6>
                                                                                        <p><?=$row['long_description']?></p>
                                                                                     
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <img src="<?=$row['image_1']?>" width="50px" alt="">
                                                                    <img src="<?=$row['image_2']?>" width="50px" alt="">
                                                                    <img src="<?=$row['image_3']?>" width="50px" alt="">

                                                                </td>



                                                                <td class="text-center p-4">
                                                                    <a class="btn btn-inverse-danger btn-sm btn-fw  delete_course"
                                                                        id="<?=$row['id']?>">
                                                                        Delete
                                                                    </a>

                                                                    <a class="btn btn-inverse-warning btn-sm btn-fw  "
                                                                        href="<?=base()?>addcourses/edit-course/<?=$row['id']?>">
                                                                        Edit
                                                                    </a>
                                                                 
                                                                </td>

                                                            </tr>
                                                            <?php
                                                             }
                                                            ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>