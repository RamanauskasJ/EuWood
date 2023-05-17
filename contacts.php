<?php require_once('common/html-head.php');?>

<?php require_once('common/navbar.php');?>

<span class="position-absolute trigger">
<!-- hidden trigger to apply 'stuck' styles -->
</span>

<!-- Write us form start-->
<section class="py-5">
      <div class="container">
          <div class="row single-form g-0">
              <div class="col-md-12 col-lg-6">
                  <div class="right position-relative p-5">
                      <h2><span>Klauskite mūsų</span></h2>
                      <i class="fa fa-caret-right"></i>
                      <form>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Jūsų vardas</label>
                              <input type="text" class="form-control border border-dark" id="exampleInputName1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Elektroninis paštas</label>
                              <input type="email" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Žinutė</label>
                              <textarea type="password" class="form-control border border-dark" id="exampleInputPassword1"></textarea>
                          </div>
                          <button type="submit" class="btn btn-secondary mt-3 p-3">Siūsti</button>
                      </form>
                  </div>
              </div>
              <div class="col-md-12 col-lg-6">
                  <div class="left text-white font-weight-bold text-capitalize bg-dark h-100 d-flex align-items-center justify-content-center">
<!--                          <h2><span>Write us a message</span></h2>-->
                  </div>
              </div>
          </div>
      </div>
</section>
<!-- Write us form end-->

<?php require_once('common/footer.php');?>