<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="btn-wrapper">


                            <a class="btn btn-primary text-white me-0 mb-2" href="<?=base()?>addcat/add-cat/">
                                <i class="mdi mdi-server-plus"></i> New Categories</a>
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
                                                            Categories
                                                        </h4>
                                                        <p class="card-subtitle card-subtitle-dash">
                                                            You have <?= $resultcat->num_rows ?> Products
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="table-responsive mt-1">
                                                    <table class="select-table" id="employee_data">
                                                        <thead>
                                                            <tr>
                                                                <th class="p-4">id</th>
                                                                <th class="p-4">Image</th>


                                                                <th class="text-center p-4">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                             $sqlresultcountcourses = "SELECT * FROM category";
                                                             $resultcountcourses = $conn->query($sqlresultcountcourses);
                                                             foreach($resultcountcourses as $row){
                                                              
                    
?>
                                                            <tr>

                                                                <td >
                                                                
                                                                
                                                                <h4><?=$row['id']?></h6>
                                                                </td>

                                                                <td>
                                                                <h4><?=$row['name']?></h6>
                                                                </td>



                                                                <td class="text-center p-4">
                                                                    <a class="btn btn-inverse-danger btn-sm btn-fw  delete_cat"
                                                                        id="<?=$row['id']?>">
                                                                        Delete
                                                                    </a>

                                                                    <a class="btn btn-inverse-warning btn-sm btn-fw  "
                                                                        href="<?=base()?>addcat/edit-cat/<?=$row['id']?>">
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