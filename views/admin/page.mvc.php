<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><button data-type='section' class="add-button btn btn-primary"><i class="ri-add-large-line"></i> Dodaj</button></div>
              </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Sekcije Stranice `<?= $page_name['title'] ?>`</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="/admin/index">Home</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href='/admin/pages'>Stranice</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sekcije za "<?= $page_name['title'] ?>"</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-0">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Sekcije:</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Ime Sekcije</th>
                          <th>Pozicija</th>
                          <th >Datum Kreiranja</th>
                          <th style="width: 40px">?</th>
                        </tr>
                      </thead>
                <tbody>
                        <?php foreach ($sections as $index => $section): ?>
                        <tr class="align-middle">
                          <td><?= $index ?>.</td>
                          <td><?= $section['section_title'] ?> </td>
                          <td><?= $section['position'] ?></td>
                          <td><?= $section['created_at'] ?> </td>
                          <td><button class="btn btn-primary action-button" data-type='edit' data-id='<?= $section['id'] ?>'><i class="ri-edit-line"></i></button><button data-type='delete' class='action-button btn btn-danger'data-id='<?= $section['id'] ?>'><i class="ri-close-large-line"></i></button></td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <!-- <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul> -->
                  </div>
                </div>
                <!-- /.card -->
                </div>
              <!-- /.col -->
            <!--end::Row-->
          <!--end::Container-->
        <!--end::App Content-->

            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

