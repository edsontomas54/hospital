<div>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @php
            use App\Enums\RoleEnum;
        @endphp

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @livewire('nav-bar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">{{"Todos"}}</h5>
                          <p class="mb-4"><span class="fw-medium">{{$users->count()}}</span>
                          </p>

                          {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> --}}
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="{{asset('../assets/img/illustrations/man-with-laptop-light.png')}}"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                      </div>
                    </div>
                  </div>


            <!-- Contextual Classes -->

              <div class="card mt-5">
                <h5 class="card-header">Usuários</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Nome do Funcionario</th>
                            <th>Numero de BI</th>
                            <th>Email</th>
                            <th>Funcionario Especialidade</th>
                            <th>Acções</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                              <td>
                                <span class="fw-medium">{{$user->bI}}</span>
                              </td>
                              <td>
                                {{$user->email}}
                              <td>{{RoleEnum::getPortugueseLabel($user->role)}}</td>

                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    {{-- <a class="dropdown-item" href="{{route('admin.view.appointment.edit',['app_id'=> $user->id])}}"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    > --}}
                                    {{-- <a class="dropdown-item" href="{{route('admin.view.user.delete',['userID'=> $user->id])}}"
                                      ><i class="bx bx-trash me-1"></i> Delete</a
                                    > --}}
                                    <button class="dropdown-item" href="#"
                                     onclick="deleteConfirmation({{$user->id}})"
                                      >
                                      <i class="bx bx-trash me-1"></i> Delete</button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
              <!--/ Contextual Classes -->
                </div>
              </div>
            </div>

            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                {{-- @livewire('admin.footer') --}}
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

          <!-- Modal -->
    {{-- <div class="modal fade" id="deleteConfirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="pb-3 text-danger text-md-center">Tens a certeza que deseja excluir esse usuário?</h4>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" onclick="deleteProduct()">Deletar</button>
            </div>
        </div>
        </div>
    </div> --}}

    <!-- / Modal -->
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Pagina Inicial</a
      >
    </div>

    <script>

        // function deleteConfirmation(id)
        // {
        //     // Set the Livewire property 'category_id' with the provided 'id'
        //     @this.set('userID', id);

        //     // Show the delete confirmation modal
        //     $('#deleteConfirmation').modal('show');
        // }

        // function deleteProduct()
        // {
        //     // Call the 'deleteCategory' method in the Livewire component
        //     @this.call('deleteProduct');

        //     // Hide the delete confirmation modal
        //     $('#deleteConfirmation').modal('hide');
        // }

        function deleteConfirmation(id) {
            // Set the Livewire property 'userID' with the provided 'id'
            @this.set('userID', id);

            // Show the delete confirmation alert
            if (confirm('Tens a certeza que deseja excluir esse usuário?')) {
                // If the user confirms, call the deleteProduct function
                deleteProduct();
            }
        }

        function deleteProduct() {
            // Call the 'deleteProduct' method in the Livewire component
            @this.call('deleteProduct');
        }


    </script>
</div>
