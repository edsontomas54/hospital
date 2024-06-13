<div>
    <style>
        .mrg{
            margin-top: 8rem;
        }
    </style>
    <section id="appointment" class="appointment section-bg mrg">
        <div class="container">

          <div class="section-title">
            <h2>Editar Formulário de Marcação de consulta </h2>

          </div>

          <form wire:submit.prevent="update" class="php-email-form">
            <h3>Formulário de Requisitar consulta:</h3>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" wire:model="name" class="form-control" id="name" placeholder="Ex: Alberto Joaquim">
                    {{-- @error('name') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <label for="bi_number">Número de BI</label>
                    <input type="text" wire:model="bi_number" class="form-control" id="bi_number" placeholder="EX: 11xxxxxxx954A">
                    @error('bi_number') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <label for="appointment_date">Data da Consulta</label>
                    <input type="date" wire:model="appointment_date" class="form-control" id="appointment_date"
                    min="{{ date('Y-m-d') }}"
                    max="{{ date('Y') }}-12-31"
                    oninvalid="this.setCustomValidity(this.validity.rangeUnderflow ? 'A data deve ser a partir de ' + this.min + '.' : this.validity.rangeOverflow ? 'A data deve ser até ' + this.max + '.' : this.validity.valueMissing ? 'Por favor, preencha este campo.' : 'Data inválida.')"
                    oninput="this.setCustomValidity('')"
                    >
                </div>
            </div>

            <div class="row">
                {{-- start time perferece --}}
                {{-- <div class="col-md-4 form-group mt-3">
                    <label for="preferred_time">Horário Preferencial</label>
                    <input type="time" wire:model="preferred_time" class="form-control" id="preferred_time"
                    >
                </div> --}}
                <div class="col-md-4 form-group mt-3">
                    <label for="preferred_time">Horário Preferencial</label>
                    <select wire:model="preferred_time" id="preferred_time" class="form-select">
                        @for ($h = 0; $h < 24; $h++)
                            @for ($m = 0; $m < 60; $m+=30)
                                @php
                                    $hour = str_pad($h, 2, '0', STR_PAD_LEFT);
                                    $minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                                @endphp
                                <option value="{{ $hour . ':' . $minute }}">{{ $hour . ':' . $minute }}</option>
                            @endfor
                        @endfor
                    </select>
                </div>
                {{-- end time perferece --}}
                <div class="col-md-4 form-group mt-3">
                    <label for="appointment_type">Tipo de Consulta</label>
                    <select wire:model="appointment_type" id="appointment_type" class="form-select">
                        <option value="">Tipo de Consulta</option>
                        <option value="urgent">Urgente</option>
                        <option value="scheduled">Marcação por horário</option>
                        <option value="walk_in">Espontânea</option>
                    </select>
                    {{-- @error('appointment_type') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
                <div class="col-md-4 form-group mt-3">
                    <label for="specialty">Especialidade</label>
                    <select wire:model="specialty" id="specialty" class="form-select">
                        <option value="">Especialidade</option>
                        <option value="Pediatrician">Pediatra</option>
                        <option value="Dentist">Dentista</option>
                        <option value="Psychologist">Psicólogo</option>
                        <option value="GeneralPractitioner">Clínico Geral</option>
                        <option value="Obstetrician" class="female-only" disabled>Obstetra</option>
                        <option value="Prenatal" class="female-only" disabled>Consulta pré-natal</option>
                    </select>
                    {{-- @error('specialty') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <label for="gender">Gênero</label>
                    <select wire:model="gender" id="gender" class="form-select">
                        <option value="">Selecionar Gênero</option>
                        <option value="male">Masculino</option>
                        <option value="female">Feminino</option>
                    </select>
                    {{-- @error('gender') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
            </div>

            <div class="form-group mt-3">
                <label for="message">Descrição do Motivo da Consulta</label>
                <textarea wire:model="message" class="form-control" id="message" rows="5" placeholder="Ex: dor nas costas"></textarea>
                {{-- @error('message') <span class="error">{{ $message }}</span> @enderror --}}
            </div>

            <div class="mb-3">
                @if (session()->has('message'))
                    <div class="sent-message">{{ session('message') }}</div>
                @endif
            </div>

            <div class="text-center"><button type="submit">Actualizar Consulta</button></div>
        </form>
        </div>
      </section>
</div>
