<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <div>
                        <div class="btn-wrapper mt-2">
<!-- back -->
                            <a onclick="history.back(1)" class="btn btn-otline-dark  zoomIn">
                                <-Back</a>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                        <div class="row">


                            <div class="col-md-12 grid-margin zoomIn ">
                                <div class="card">
                                    <form class="forms-sample" id="mail-user">

                                        <div class="card-body">
                                            <h4 class="card-title">Email</h4>


                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">To</label>
                                                        <input name="email"
                                                            class="form-control form-control-sm text-muted"
                                                            id="formFileLg" type="text"
                                                            value="<?= base64_decode($URL[1]) ?>"
                                                            placeholder="<?= base64_decode($URL[1]) ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Subject</label>
                                                        <input 
                                                            class="form-control form-control-sm text-muted"
                                                            id="formFileLg" type="text" name="subject" value="" placeholder=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Compose message</label>
                                                        <input type="hidden" name="message" id="questionedit" required>
                                                        <div id="question">

                                                        </div>
                                                    </div>
                                                </div>





                                            </div>










                                        </div>
                                        <div class="card-footer" style="background:white;">
                                            <input type="hidden" name="type" value="mail-user" required>
                                            <button type="submit" class="btn btn-primary text-white me-2" id="butsave">
                                                <i class="ti-location-arrow"></i> Send</button>
                                            <button class="btn btn-light text-dark"
                                                onclick="history.back(1)">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>