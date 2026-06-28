        <?php include ('include/header.php'); ?>
<?php
                $paramResult = checkId('id');
                $resume= "SELECT * FROM resume WHERE id = '4' LIMIT 1" ;
                $results = $conn->query($resume);
                $resumevalue = $results->fetch_assoc();
                ?>
 <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                            </div>
                            <?php
                                $resume = Getdata("resume", $id, "Experience");
                                if (mysqli_num_rows($resume) > 0) {
                                    foreach ($resume as $resumeList) {
                                ?>
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2 "><?php echo $resumeList['year'];?></div>
                                                <div class="small fw-bolder text-dark-mode"><?php echo $resumeList['title'];?></div>
                                                <div class="small text-muted"><?php echo $resumeList['name'];?></div>
                                                <div class="small text-muted"><?php echo $resumeList['address'];?></div>
                                      </div>
                                        </div>
                                        <div class="col-lg-8 text-dark-mode">
                                            <div><?php echo $resumeList['description'];?></div></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <h2 class="text-dark-mode">No Experience Record!</h2>
                                    <?php
                                        }
                                    ?>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card 1-->
                            <?php
                                $resume = Getdata("resume", $id, "Education");
                                if (mysqli_num_rows($resume) > 0) {
                                    foreach ($resume as $resumeList) {
                                ?>
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2 "><?php echo $resumeList['year'];?></div>
                                                <div class="small fw-bolder text-dark-mode"><?php echo $resumeList['title'];?></div>
                                                <div class="small text-muted"><?php echo $resumeList['name'];?></div>
                                                <div class="small text-muted"><?php echo $resumeList['address'];?></div>
                                      </div>
                                        </div>
                                        <div class="col-lg-8 text-dark-mode">
                                            <div><?php echo $resumeList['description'];?></div></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <h2 class="text-dark-mode">No Education Record!</h2>
                                    <?php
                                        }
                                    ?>
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline ">Professional Skills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-3">
                                        <?php 
                                            $professionalSkills = Getdata("skills", $id, "SKILL");

                                            if (mysqli_num_rows($professionalSkills) > 0) {
                                            foreach ($professionalSkills as $skill): ?>
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-dark-mode"><?php echo $skill['name']; ?></div></div>
                                        <?php endforeach; ?>
                                        </div>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                                <h2 class="text-dark-mode">No Professional Skills Record!</h2>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-3">
                                            <?php 
                                            $languages = Getdata("skills", $id, "LANGUAGE");

                                            if (mysqli_num_rows($languages) > 0) {
                                            foreach ($languages as $language): ?>
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100 text-dark-mode"><?php echo $language['name']; ?></div></div>
                                            <?php endforeach; ?>
                                                <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                        <h2 class="text-dark-mode">No Language Record!</h2>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
                    <?php include ('include/footer.php'); ?>
