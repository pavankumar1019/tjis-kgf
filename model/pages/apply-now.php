<!-- apply-now -->

<main id="main">







    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ADMISSIONS OPEN (2024-25)</h2>
                <p>Apply Here !</p>
            </div>

            <div class="row mt-1">


                <div class="col-lg-12 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <!-- Basic Information -->
                        <fieldset>
                            <legend>Basic Information</legend>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control"
                                        placeholder="Applicant's Full Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-select" required>
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="nationality">Nationality</label>
                                    <input type="text" name="nationality" id="nationality" class="form-control"
                                        placeholder="Nationality" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Address" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="tel" name="phone_number" id="phone_number" class="form-control"
                                        placeholder="Phone Number" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="parent_name">Parent/Guardian Name</label>
                                    <input type="text" name="parent_name" id="parent_name" class="form-control"
                                        placeholder="Parent/Guardian Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="parent_phone_number">Parent/Guardian Phone Number</label>
                                    <input type="tel" name="parent_phone_number" id="parent_phone_number"
                                        class="form-control" placeholder="Parent/Guardian Phone Number" required>
                                </div>
                            </div>
                        </fieldset>


                        <fieldset>
                            <legend>Previous School Information </legend>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="full_name">Name of previous school</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control"
                                        placeholder="Name of previous school" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="full_name">School address</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control"
                                        placeholder="School address" required>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="gender">Grades attended</label>
                                    <select name="gender" id="gender" class="form-select" required>
                                        <option value="">Select Grade</option>
                                        <option value="male">Nursery </option>
                                        <option value="male">LKG </option>
                                        <option value="male">UKG </option>
                                        <option value="male">Grade - 1 </option>
                                        <option value="female">Grade - 2</option>
                                        <option value="other">Grade - 3</option>
                                        <option value="other">Grade - 4</option>
                                        <option value="other">Grade - 5</option>
                                        <option value="other">Grade - 6</option>
                                        <option value="other">Grade - 7</option>
                                        <option value="other">Grade - 8</option>
                                        <option value="other">Grade - 9</option>
                                        <option value="other">Grade - 10</option>
                                    </select>
                                </div>

                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Program and Grade Applying For </legend>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="gender">Grade applying for</label>
                                    <select name="gender" id="gender" class="form-select" required>
                                        <option value="">Select Grade</option>
                                        <option value="male">Nursery </option>
                                        <option value="male">LKG </option>
                                        <option value="male">UKG </option>
                                        <option value="male">Grade - 1 </option>
                                        <option value="female">Grade - 2</option>
                                        <option value="other">Grade - 3</option>
                                        <option value="other">Grade - 4</option>
                                        <option value="other">Grade - 5</option>
                                        <option value="other">Grade - 6</option>
                                        <option value="other">Grade - 7</option>
                                        <option value="other">Grade - 8</option>
                                        <option value="other">Grade - 9</option>
                                        <option value="other">Grade - 10</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <!-- Add other fieldsets with labels as needed -->
                        <!-- Submission Confirmation -->
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="consent_checkbox" required>
                            <label class="form-check-label" for="consent_checkbox">
                                I consent to the <a href="<?=base()?>data-processing-and-privacy-policy">data processing
                                    and privacy policy</a>.
                                <span class="text-muted">(By checking this box, I acknowledge that the information
                                    provided is true and accurate to the best of my knowledge.)</span>
                            </label>
                        </div>

                        <!-- Submission Button -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit Application</button>
                        </div>
                    </form>



                </div>

            </div>
            <br>
            <br>
            <div class="section-title">
            <p>Contact Information for Inquiries:</p>

<p>
    "For any questions or concerns, feel free to reach out to our admissions office."<br>
    "Need assistance? Contact us at   <a href="tel:+919845498660" class="phone">+919845498660</a>."
</p>

            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->