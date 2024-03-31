<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="btn-wrapper">


                            <a class="btn btn-primary text-white me-0 mb-2" href="<?=base()?>addcourses/add-courses/">
                                <i class="mdi mdi-server-plus"></i> New Admission</a>
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
                                                            Admissions - 2023-25
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
                                                                <th class="p-4">ID</th>
                                                                <th class="p-4">Image</th>
                                                                <th class="p-4">Basic Information</th>
                                                                <th class="p-4">Parent Details</th>
                                                                <th class="p-4">Previous School Information</th>
                                                                <th class="p-4">Program and Grade Applying For</th>


                                                                <th class="text-center p-4">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                             $sqlresultcountcourses = "SELECT * FROM newapplications ";
                                                             $resultcountcourses = $conn->query($sqlresultcountcourses);
                                                             foreach($resultcountcourses as $row){
                                                              
                    
?>
                                                            <tr>

                                                                <td  class="p-4">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <h4><?=$row['id']?></h4>      
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td  class="p-4">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                        <img src="<?=$row['photo']?>" width="50px" alt="">    
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                   
                                                                    <h4>Name: <b><?=$row['full_name']?></b></h4>
                                                                    <h4>DOB: <b><?=$row['dob']?></b></h4>
                                                                    <h4>Gender: <b><?=$row['gender']?></b></h4>
                                                                    <h4><b><?=$row['nationality']?></b>, <b><?=$row['religion']?></b>, <b><?=$row['city_town']?></b></h4>
                                                                    <h4>Adress: <b><?=$row['address']?></b></h4>
                                                                </td>
                                                                <td>
                                                                   
                                                                    <h4>father_name: <b><?=$row['father_name']?></b></h4>
                                                                    <h4>mother_name: <b><?=$row['mother_name']?></b></h4>
                                                                    <h4>Gaurdian name: <b><?=$row['p_g_name']?></b></h4>
                                                                    <h4>contact: <b><?=$row['contact']?></b></h4>
                                                                    <h4>Alternate Contact: <b><?=$row['alt_contact']?></b></h4>
                                                                  
                                                                </td>
                                                                <td>
                                                                   
                                                                    <h4><b><?=$row['pre_sch_name']?></b></h4>
                                                                    <h4><b><?=$row['pre_sch_address']?></b></h4>
                                                                    <h4><b><?=$row['class_last_attended']?></b></h4>
                                                               
                                                                  
                                                                </td>
                                                                <td>
                                                                   
                                                                    <h4><b><?=$row['grade_for_apply']?></b></h4>
                                                                  
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