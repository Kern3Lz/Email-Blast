<!DOCTYPE html>
<html lang="en">

<?php include "../header.php"; ?>


<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i>&nbsp;Tambah</button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Kontak</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">ContactID</label>
                        <input type="text" id="" class="form-control" placeholder="Disabled input">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="">
                    </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Tambah</button>
        </div>
      </div>
    </div>
  </div>

  <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
                <button type="button" class="btn btn-warning">edit</button>
                <button type="button" class="btn btn-danger">delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>
                <button type="button" class="btn btn-warning">edit</button>
                <button type="button" class="btn btn-danger">delete</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>
                <button type="button" class="btn btn-warning">edit</button>
                <button type="button" class="btn btn-danger">delete</button>
            </td>
          </tr>
        </tbody>
      </table>
      

      <script src="bootstrap/js/bootstrap.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>