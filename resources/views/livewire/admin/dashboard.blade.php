<div>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @livewire('nav-bar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            @if (Auth::user()->role != "DOCTOR")
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-6 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Total de Consultas Feitas, 🎉</h5>
                          <p class="mb-4" style="font-size: 1rem">
                            O numero total de consultas feitas é de <span class="fw-bold">{{$appointments->count()}}</span>.
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary"> Desde de 2024-06-01</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 mb-4 order-0">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img
                            src="../assets/img/icons/unicons/chart-success.png"
                            alt="Credit Card"
                            class="rounded" />
                        </div>
                      </div>
                      <span>Consultas feitas Urgentes</span>
                      <h3 class="card-title text-nowrap mb-1">{{ $appointmentTypeTotals['urgent'] }}</h3>
                      {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 order-1">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img
                            src="../assets/img/icons/unicons/chart-success.png"
                            alt="chart success"
                            class="rounded" />
                        </div>
                      </div>
                      <span class="fw-medium d-block mb-1">Consultas feitas Espontânea</span>
                      <h3 class="card-title mb-2">{{ $appointmentTypeTotals['walk_in'] }}</h3>
                      {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 order-1">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img
                            src="../assets/img/icons/unicons/chart-success.png"
                            alt="Credit Card"
                            class="rounded" />
                        </div>
                      </div>
                      <span>Consultas feitas por Pré Marcação</span>
                      <h3 class="card-title text-nowrap mb-1">{{ $appointmentTypeTotals['scheduled'] }}</h3>
                      {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                  </div>
                </div>
                <!-- Add more columns as needed -->
              </div>

              <div class="row">
                <div class="col-lg-4 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Total de Medicos</h5>
                          <p class="">
                            O numero total de Médicos Activos no Sistema <span class="fw-bold">{{$totalDoctorCount }}</span>.
                          </p>

                          {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary"> Desde de 2024-06-01</a> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 mb-4 order-0">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img
                            src="../assets/img/icons/unicons/wallet-info.png"
                            alt="Credit Card"
                            class="rounded" />
                        </div>
                      </div>
                      <span>Consultas feitas em Pediatra</span>
                      <h3 class="card-title text-nowrap mb-1">{{ $specialtyTotals['Pediatrician'] }}</h3>
                      {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                  </div>
                </div>

                <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/wallet-info.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Consultas feitas em Obstetra</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $specialtyTotals['Obstetrician'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/wallet-info.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Consultas feitas no Dentista</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $specialtyTotals['Dentist'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/wallet-info.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Consultas feitas no Psicólogo</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $specialtyTotals['Psychologist'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/wallet-info.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Consultas feitas no Clínico Geral</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $specialtyTotals['GeneralPractitioner'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/wallet-info.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Consultas feitas em Prenatal</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $specialtyTotals['Prenatal'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>


                {{-- Total doctors --}}
                <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/cc-primary.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Total de Médicos Prenatal</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $doctorsTotals['PrenatalDoc'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/cc-primary.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Total de Médicos Pediatra</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $doctorsTotals['PediatricianDoc'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/cc-primary.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Total de Médicos Obstetra</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $doctorsTotals['ObstetricianDoc'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/cc-primary.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Total de Médicos Dentista</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $doctorsTotals['DentistDoc'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/cc-primary.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Total de Médicos Removidos</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $deletedDoctorCount}}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/cc-primary.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Total de Médicos Psicólogo</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $doctorsTotals['PsychologistDoc'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/cc-primary.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Total de Médicos Clínico Geral</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $doctorsTotals['GeneralPractitionerDoc'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>

                {{--/ Total doctors --}}
              </div>
            </div>
            @else
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                  <div class="col-lg-6 mb-4 order-0">
                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Total de Consultas Feitas por Si</h5>
                            <p class="mb-4" style="font-size: 1rem">
                              O numero total de consultas feitas é de <span class="fw-bold">{{$totalsAuthDoctor['totalConcludedDoc']}}</span>.
                            </p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary"> Desde de 2024-06-01</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/chart-success.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Consultas feitas Urgentes</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $totalsAuthDoctor['urgentDoc'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 order-1">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/chart-success.png"
                              alt="chart success"
                              class="rounded" />
                          </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Consultas feitas Espontânea</span>
                        <h3 class="card-title mb-2">{{ $totalsAuthDoctor['walk_inDoc'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4 order-1">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/chart-success.png"
                              alt="Credit Card"
                              class="rounded" />
                          </div>
                        </div>
                        <span>Consultas feitas por Pré Marcação</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $totalsAuthDoctor['scheduledDoc'] }}</h3>
                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                      </div>
                    </div>
                  </div>
                  <!-- Add more columns as needed -->
                </div>
              </div>
            @endif

            <!-- / Content -->

            <!-- Footer -->

            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
        <a href="/" target="_blank" class="btn btn-danger btn-buy-now">Pagina Inicial</a>
    </div>
  </div>
