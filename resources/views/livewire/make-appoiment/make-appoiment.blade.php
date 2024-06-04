<div>
    <section id="appointment" class="appointment section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Formulário de Marcação de consulta </h2>

          </div>

          <form wire:submit.prevent="submit" class="php-email-form">
            <h3>Formulário de Requisitar consulta:</h3>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" wire:model="name" class="form-control" id="name" placeholder="Ex: Alberto Joaquim">
                    {{-- @error('name') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <label for="bi_number">Número de BI</label>
                    <input type="text" wire:model="bi_number" class="form-control" id="bi_number" placeholder="EX: 84xxxxxxx9">
                    @error('bi_number') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <label for="appointment_date">Data da Consulta</label>
                    <input type="date" wire:model="appointment_date" class="form-control" id="appointment_date">
                    {{-- @error('appointment_date') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <label for="preferred_time">Horário Preferencial</label>
                    <input type="time" wire:model="preferred_time" class="form-control" id="preferred_time"
                    {{-- max="00:30" --}}
                    >
                    {{-- @error('preferred_time') <span class="error">{{ $message }}</span> @enderror --}}
                </div>
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
                        <option value="pediatrician">Pediatra</option>
                        <option value="dentist">Dentista</option>
                        <option value="psychologist">Psicólogo</option>
                        <option value="general_practitioner">Clínico Geral</option>
                        <option value="obstetrician" class="female-only" disabled>Obstetra</option>
                        <option value="prenatal" class="female-only" disabled>Consulta pré-natal</option>
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

            <div class="text-center"><button type="submit">Marcar Consulta</button></div>
        </form>
        </div>
      </section>
</div>
