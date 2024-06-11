<div>
    @php
    use App\Enums\AppointmentType;
    use App\Enums\Specialty;
    use App\Enums\Status;
    use App\Enums\RoleEnum;

    // $time= \Carbon\Carbon::createFromFormat('H:i:s', $preferred_time);
    // $this->preferred_time= $time->format("H") .":". $time->format("s");

    // $perferH = \Carbon\Carbon::createFromFormat('H:i:s', $preferred_time)->format('H');
    // $perferM = \Carbon\Carbon::createFromFormat('H:i:s', $preferred_time)->format('i');




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
                          <h5 class="card-title text-primary">Nome</h5>
                          <p class="mb-4"><span class="fw-medium">{{$makeAppointment->user->name}}</span>
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
            <form wire:submit.prevent='updateAppointment'>
              <div class="card mt-5">
                <h5 class="card-header">Marcações</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Nome <br> Paciente</th>
                            <th>Numero de BI</th>
                            <th>Data <br>da Consulta</th>
                            <th>Horário <br> Preferencial</th>
                            <th>Tipo <br>de Consulta</th>
                            <th>Especialidade</th>
                            <th>Estado</th>
                            <th>Alocar <br>ao Médico</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>{{$makeAppointment->name}}</td>
                              <td>
                                <span class="fw-medium">{{$makeAppointment->bi_number}}</span>
                              </td>
                              <td>
                                <input type="date" class="form-control"
                                value="{{$makeAppointment->appointment_date}}" wire:model="date"
                                min="{{ date('Y-m-d') }}"
                                max="{{ date('Y') }}-12-31"
                                oninvalid="this.setCustomValidity(this.validity.rangeUnderflow ? 'A data deve ser a partir de ' + this.min + '.' : this.validity.rangeOverflow ? 'A data deve ser até ' + this.max + '.' : this.validity.valueMissing ? 'Por favor, preencha este campo.' : 'Data inválida.')"
                                oninput="this.setCustomValidity('')"
                                >
                              </td>
                                <td>
                                    <select wire:model="preferred_time" id="preferred_time" class="form-select">
                                        @for ($h = 0; $h < 24; $h++)
                                            @for ($m = 0; $m < 60; $m++)
                                                {{-- Generate options for each hour and minute --}}
                                                @php
                                                    $hour = str_pad($h, 2, '0', STR_PAD_LEFT);
                                                    $minute = str_pad($m, 2, '0', STR_PAD_LEFT);

                                                    $hourMinute =$hour . ':' . $minute;
                                                @endphp
                                                <option value="{{$hourMinute}}"
                                                {{-- @if ($perferH == $hour && $perferM==$minute) selected @endif --}}

                                                >{{ $hour . ':' . $minute }}</option>
                                            @endfor
                                        @endfor
                                    </select>
                                </td>
                              <td><span class="me-1">{{AppointmentType::getPortugueseLabel($makeAppointment->appointment_type)}}</span></td>
                              <td><span class="me-1">{{Specialty::getPortugueseLabel($makeAppointment->specialty)}}</span></td>

                              <td>
                                    <select id="bloodType" class="form-control form-select" wire:model='status'>
                                        <option >Selecione o Estado </option>
                                        @foreach (Status::getKeys() as $key)
                                        <option
                                        value="{{$key}}"
                                        @if ($key == $status) selected @endif
                                        >{{Status::getPortugueseLabel($key)}}</option>
                                        @endforeach
                                    </select>
                              </td>
                              @if ($user->role !=RoleEnum::DOCTOR)
                              <td>
                                    <select id="bloodType" class="form-control form-select" wire:model='assignToDoctor'>
                                        <option >Selecione o Medico </option>
                                        @foreach ($doctors as $doc)
                                        <option
                                        value="{{$doc->id}}"
                                        >{{$doc->name}}</option>
                                        @endforeach
                                    </select>
                              </td>
                              @else
                              <td>
                                <select disabled ="bloodType" class="form-control form-select" wire:model='assignToDoctor'>
                                    <option >Selecione o Medico </option>
                                    @foreach ($doctors as $doc)
                                    <option
                                    value="{{$doc->id}}"
                                    >{{$doc->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                              @endif

                            </tr>
                        </tbody>
                    </table>
                </div>
                    </div>
                <!--/ Contextual Classes -->
                </div>
                </div>
            <button class="btn btn-danger btn-buy-now">Actualizar</button>
        </form>
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
      <a
        href="/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Pagina Inicial</a
      >
    </div>
</div>
