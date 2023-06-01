<?php require_once('common/html-head.php'); ?>

<?php require_once('common/navbar.php'); ?>

<!-- Email form start -->
<section class="py-5">
    <div class="container">
        <div class="row single-form g-0">
            <div class="col-md-12 col-lg-6">
                <div class="right position-relative p-5">
                    <h2><span>Klauskite mūsų</span></h2>
                    <i class="fa fa-caret-right"></i>
                    <form id="emailForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="mb-3">
                            <label for="userName" class="form-label">Jūsų vardas</label>
                            <input type="text" class="form-control border border-dark" name="name" id="userName"
                                   aria-describedby="emailHelp" required="true">
                        </div>
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Elektroninis paštas</label>
                            <input type="email" class="form-control border border-dark" name="email" id="userEmail"
                                   aria-describedby="emailHelp" required="true">
                        </div>
                        <div class="mb-3">
                            <label for="userMessage" class="form-label">Žinutė</label>
                            <textarea class="form-control border border-dark" name="message" id="userMessage"
                                      required="true"></textarea>
                        </div>
                        <button type="submit" id="submitButton" class="btn btn-secondary mt-3 p-3">Siūsti</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div id="map" class="left"></div>
                <!--                  <div class="left text-white font-weight-bold text-capitalize bg-dark h-100 d-flex align-items-center justify-content-center"></div>-->
            </div>
        </div>
    </div>
</section>
<!-- Email form end -->

<?php require_once('common/footer.php'); ?>

<script type="text/javascript" src="javascript/contacts-form-validation.js"></script>