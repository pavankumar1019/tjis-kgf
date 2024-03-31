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
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Applicant's Full Name" required>
        </div>
        <div class="col-md-6 form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
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
            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Nationality" required>
        </div>
        <div class="col-md-6 form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
        </div>
        <div class="col-md-6 form-group">
            <label for="phone_number">Phone Number</label>
            <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" required>
        </div>
        <div class="col-md-6 form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
        </div>
        <div class="col-md-6 form-group">
            <label for="parent_name">Parent/Guardian Name</label>
            <input type="text" name="parent_name" id="parent_name" class="form-control" placeholder="Parent/Guardian Name" required>
        </div>
        <div class="col-md-6 form-group">
            <label for="parent_phone_number">Parent/Guardian Phone Number</label>
            <input type="tel" name="parent_phone_number" id="parent_phone_number" class="form-control" placeholder="Parent/Guardian Phone Number" required>
        </div>
    </div>
    <!-- Add other sections with labels as needed -->
    <!-- Submission Confirmation -->
    <div class="form-check mt-3">
        <input class="form-check-input" type="checkbox" value="" id="consent_checkbox" required>
        <label class="form-check-label" for="consent_checkbox">
            I consent to the data processing and privacy policy.
        </label>
    </div>
    <!-- Submission Button -->
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">Submit Application</button>
    </div>
</form>


                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->