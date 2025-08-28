<?php include "include/header.php" ?>

<body>
  <br><br>
  <div class="container text-white">
    <div class="row align-items-center">
      <div class="col-auto">
        <img src="img/ml.png" class="img-fluid rounded" alt="Mobile Legend" style="max-width: 70px;">
      </div>
      <div class="col">
        <h3>Mobile Legend</h3>
      </div>
    </div>

    <br><br>

    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center border-bottom">
          <i class="bi bi-box fs-2 me-3"></i>
          <h5 class="mb-0">Product</h5>
        </div>
      </div>
    </div>

    <div class="row lg-5 mt-5">
      <div class="col-12">
        <div class="d-flex flex-wrap gap-2">
          <button type="button" class="btn btn-outline-primary flex-grow-1 flex-md-grow-0" data-bs-toggle="modal" data-bs-target="#myModal">
            Diamond
          </button>

          <button type="button" class="btn btn-outline-primary flex-grow-1 flex-md-grow-0" data-bs-toggle="modal" data-bs-target="#myModal">
            Starlight Pass
          </button>

          <button type="button" class="btn btn-outline-primary flex-grow-1 flex-md-grow-0" data-bs-toggle="modal" data-bs-target="#myModal">
            Twilight Pass
          </button>

          <button type="button" class="btn btn-outline-primary flex-grow-1 flex-md-grow-0" data-bs-toggle="modal" data-bs-target="#myModal">
            Skin
          </button>

          <button type="button" class="btn btn-outline-primary flex-grow-1 flex-md-grow-0" data-bs-toggle="modal" data-bs-target="#myModal">
            Account
          </button>
        </div>
      </div>
    </div>

    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <i class="bi bi-cart3 fs-3 me-2"></i>
            <h4 class="modal-title">Purchase</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body text-center p-4">
            <h4>Buy Only Via Whatsapp</h4>
            <div class="my-4 py-2"></div>
            <a href="https://wa.me/62819555831" class="btn btn-success btn-lg px-5">BUY</a>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5 my-lg-5"></div>
  </div>

  <?php include "include/footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>