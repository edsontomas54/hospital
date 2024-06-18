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

        .page-link.active, .active > .page-link {
            z-index: 3;
            color: #f02121;
            background-color: var(--bs-pagination-active-bg);
            border-color: var(--bs-pagination-active-border-color);
        }
    </style>
    @php
        use App\Enums\AppointmentType;
        use App\Enums\Status;
        use App\Enums\Specialty;
    @endphp
    <main id="main">
            <div class="container make-appointment">
                <h1 class="title-h1">Minhas  marcações</h1>

              <div class="row make-appointment">
                <div class="card ">
                    <h5 class="card-header">Total Marcações  {{$makeAppointments->total()}}</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped">
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
                                @foreach ($makeAppointments as $makeAppointment)
                                <tr>
                                    <td>{{$makeAppointment->name}}</td>
                                  <td>
                                    <span class="fw-medium">{{$makeAppointment->user->bI}}</span>
                                  </td>
                                  <td>
                                    {{$makeAppointment->appointment_date}}
                                  </td>
                                  <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $makeAppointment->preferred_time)->format('H:i') }}</td>
                                  <td><span class="me-1">{{AppointmentType::getPortugueseLabel($makeAppointment->appointment_type)}}</span></td>
                                  <td><span class="me-1">{{Specialty::getPortugueseLabel($makeAppointment->specialty)}}</span></td>
                                  <td><span class="me-1">{{Status::getPortugueseLabel($makeAppointment->status)}}</span></td>

                                  <td>
                                      @if ($makeAppointment->status ==Status::marked)
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('user.appointment.download.service.password',['Oid'=> $makeAppointment->id])}}"
                                                >
                                                {{-- <i class="bx bx-edit-alt me-1"></i> --}}
                                                Baixar senha de atendimento</a
                                                >
                                                </div>
                                            </div>
                                    @elseif ($makeAppointment->status !=Status::concluded)
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item text-danger"  href="#"
                                        >so pode baixar a senha de atendimento no estado Marcada</a
                                        >
                                        <a class="dropdown-item" href="{{route('user.appointment.edit',['appointment_OID'=> $makeAppointment->id])}}"
                                            ><i class="bx bx-trash me-1"></i> Editar</a
                                            >
                                            <button type="button" class="btn" wire:click.prevent='changeStatus({{ $makeAppointment->id }})'>Cancelar</button>
                                        </div>
                                    </div>
                                    @endif
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                  </div>
              </div>
              <div class=" mt-5">
                {{$makeAppointments->links()}}
              </div>
            </div>
    </main>
</div>
