<div>
    <style>
        .make-appointment{
            margin-top: 20px;
            padding-top: 50px;
        }
        .title-h1{
            padding: 8px;
            margin-top: 50px;
        }
    </style>
    @php
        use App\Enums\AppointmentType;
        use App\Enums\Status;
    @endphp
    <main id="main">
            <div class="container make-appointment">
                <h1 class="title-h1">Minhas  marcações</h1>

              <div class="row make-appointment">
                <div class="card ">
                    <h5 class="card-header">Marcacoes</h5>
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cliente</th>
                            <th>Numero de BI</th>
                            <th>Data de Perferencia</th>
                            <th>Hora</th>
                            <th>Stado</th>
                            <th>Tipo de Consulta</th>
                            {{-- <th>Actions</th> --}}
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($makeAppointments as $makeAppointment)
                            <tr>
                                <td>{{$makeAppointment->name}}</td>
                              <td>
                                <span class="fw-medium">{{$makeAppointment->bi_number}}</span>
                              </td>
                              <td>
                                {{$makeAppointment->appointment_date}}
                              </td>
                              <td>{{$makeAppointment->preferred_time}}</td>
                              <td><span class="badge bg-label-danger me-1">{{Status::getPortugueseLabel($makeAppointment->status)}}</span></td>
                              <td><span class="badge bg-label-danger me-1">{{AppointmentType::getPortugueseLabel($makeAppointment->appointment_type)}}</span></td>
                              {{-- <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                      ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                  </div>
                                </div>
                              </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>

            </div>
    </main>
</div>
