<div>
    <style>
        .bg-info {
            --bs-bg-opacity: 1;
            color: #fefefefe !important;
            background-color: rgb(128 217 236) !important;
        }
    </style>
    @php
        use App\Enums\AppointmentType;
        use App\Enums\Specialty;
        use App\Enums\Status;
    @endphp
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
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">{{$text}}</h5>
                                                <p class="mb-4">
                                                    <span class="fw-medium">{{$appointments->total()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="{{asset('../assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contextual Classes -->
                                <div class="card mt-5">
                                    <h5 class="card-header">Marcações</h5>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nome do Paciente</th>
                                                    <th>Número de BI</th>
                                                    <th>Data da Consulta</th>
                                                    <th>Horário Preferencial</th>
                                                    <th>Tipo de Consulta</th>
                                                    <th>Especialidade</th>
                                                    <th>Estado</th>
                                                    <th>Acções</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @foreach ($appointments as $appointment)
                                                    <tr class="{{ $appointment->status == Status::concluded ? 'bg-info' : '' }}">
                                                        <td>{{$appointment->name}}</td>
                                                        <td><span class="fw-medium">{{$appointment->user->bI}}</span></td>
                                                        <td>{{$appointment->appointment_date}}</td>
                                                        <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $appointment->preferred_time)->format('H') }}h:{{ \Carbon\Carbon::createFromFormat('H:i:s', $appointment->preferred_time)->format('i') }}</td>
                                                        <td><span class="me-1">{{AppointmentType::getPortugueseLabel($appointment->appointment_type)}}</span></td>
                                                        <td><span class="me-1">{{Specialty::getPortugueseLabel($appointment->specialty)}}</span></td>
                                                        <td><span class="me-1 {{ $appointment->status == Status::concluded ? 'text-danger' : '' }}">{{Status::getPortugueseLabel($appointment->status)}}</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="{{route('admin.view.appointment.edit',['app_id'=> $appointment->id])}}">
                                                                        <i class="bx bx-edit-alt me-1"></i> Editar
                                                                    </a>
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

                                <!-- Pagination Links -->
                                <div class="mt-3">
                                    {{ $appointments->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
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
