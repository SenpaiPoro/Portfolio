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

        <div class="row g- align-items-center">

            <!-- Text Content -->
            <div class="col-lg-6 col-md-12">

                <div class="p-1 p-lg-5">

                    <h2 class="text-gradient d-inline">
                         <?= htmlspecialchars($DataList['title']); ?>
                    </h2>

                    <p class="text-dark-mode mb-0">
                        <?= htmlspecialchars($DataList['description']); ?>
                    </p>
                    <br>
                    <a href="viewproject.php?id=<?= urlencode($DataList['id']); ?>" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                      See More...
                    </a>
                </div>
            </div>

        <!-- Image -->
            <!-- Image -->
            <div class="col-lg-6 col-md-12 p-0">
                <img 
                    src="assets/projects/<?= htmlspecialchars($DataList['photo']); ?>" 
                    alt="Project"
                    class="project-img"
                >
            </div>

        </div>

    </div>

</div>

                    <?php 
                     }
                    }
                    else
                    {
                        ?>
                        <h2 class="text-dark-mode" >No Project Found </h2>
                    <?php

                    }?>

                            
                        </div>
                    </div>
                </div>
            </section>
        
        </main>
        <!-- Footer-->
                      <?php include ('include/footer.php'); ?>

