        <?php include ('include/header.php'); ?>


            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
        <?php 
        
        
            $Data = Getdata("project", $paramResult );

            if (mysqli_num_rows($Data) > 0) {
                        foreach ($Data as $DataList) {
                ?>

                            <!-- Project Card -->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder text-dark-mode"><?= htmlspecialchars($DataList['title']); ?></h2>
                                            <p class="text-dark-mode"><?= htmlspecialchars($DataList['description']); ?></p>
                                        </div>
                                        <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                                    </div>
                                </div>
                            </div>

                    <?php 
                     }
                    }
                    else
                    {
                        ?>
                        <h2>No Project Found <span class="badge text-bg-secondary"><a href="../Portfolio_Dashboard/project.php">Add</a></span></h2>
                    <?php

                    }?>
`
                            
                        </div>
                    </div>
                </div>
            </section>
        
        </main>
        <!-- Footer-->
                      <?php include ('include/footer.php'); ?>

