<div>
    @php
    use App\Enums\RoleEnum;
    use App\Enums\BloodTypeEnum;
    use App\Enums\Specialty;
    use App\Enums\NurseSpecialtyEnum;
    @endphp
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                  <a href="index.html" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                        <svg
                        width="150"
                        height="150"
                        viewBox="0 0 200 200"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <image href="https://upload.wikimedia.org/wikipedia/commons/1/14/Emblem_of_Mozambique.svg" width="200" height="200" preserveAspectRatio="xMidYMid meet" />
                      </svg>
                    </span>
                    {{-- <span class="app-brand-text demo text-body fw-bold">Sneat</span> --}}
                  </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2 text-center">Centro de Saúde São Dâmaso</h4>

                <p class="mb-4  text-center">Bem-vindo ao sistema de marcação de consultas</p>

                <form id="formAuthentication" class="mb-3" wire:submit.prevent='register'>
                    {{-- General Inputs  --}}
                <div class="mb-3">
                  <label class="form-label" for="roleType">Tipo de Perfil</label>
                  <select id="roleType" class="form-control form-select" wire:model='role' onchange="handleRoleChange()">
                      <option value="">Selecione o Tipo</option>
                      @foreach ($roles as $role)
                      <option value="{{ RoleEnum::getKey($role) }}">{{RoleEnum::getPortugueseLabel($role)}}</option>
                      @endforeach
                  </select>
                </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="name"
                      placeholder="digite o seu nome"
                      autofocus
                      wire:model='name'
                      />
                  </div>
                  <div class="mb-3">
                    <label for="birthDay" class="form-label">Data de nascimento</label>
                    <input
                      type="date"
                      class="form-control"
                      id="birthDay"
                      name="birthDay"
                      autofocus
                      wire:model='birthDay'
                      />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="gender">Gênero</label>
                    <select id="gender" class="form-control form-select" wire:model='gender'>
                        <option value="">Selecione o Genero</option>
                        <option >Male</option>
                        <option >Female</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="bI" class="form-label">Número de BI</label>
                    <input wire:model='bI' type="text" class="form-control" id="bI" name="bI" placeholder="Ex: 112XXXXXXXXXA" />
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Endereço</label>
                    <input wire:model='address' type="text" class="form-control" id="address" name="address" placeholder="Enter your address" />
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Telefone</label>
                    <input wire:model='phone' type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone" />
                  </div>
                  <div class="mb-3">
                    <label for="emergencyContact" class="form-label">Contacto de Emergencia</label>
                    <input wire:model='emergencyContact' type="text" class="form-control" id="emergencyContact" name="emergencyContact" placeholder="Enter your emergencyContact" />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input wire:model='email' type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                  </div>

                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Senha</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        wire:model='password'
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>

                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="confirm_password">Confirmar a Senha</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="confirm_password"
                        class="form-control"
                        name="confirm_password"
                        wire:model='confirm_password'
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
                {{-- General Inputs  --}}

                {{-- PATIENT --}}
                <div id="patientFields">
                    <div class="mb-3">
                        <label for="allergies" class="form-label">Alergias</label>
                        <input wire:model='allergies' type="text" class="form-control" id="allergies" name="allergies" placeholder="Enter your allergies" />
                    </div>
                    <div class="mb-3">
                        <label for="medicines" class="form-label">Medicamentos</label>
                        <input wire:model='medicines' type="text" class="form-control" id="medicines" name="medicines" placeholder="Enter your medicines" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="bloodType">Tipo Sanguinio</label>
                        <select id="bloodType" class="form-control form-select" wire:model='bloodType'>
                            <option value="">Selecione o Tipo</option>
                            @foreach ($bloodTypes as $bType)
                            <option value="{{ BloodTypeEnum::getKey($bType) }}">{{$bType}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- PATIENT --}}
                {{-- DOCTOR --}}
                <div id="doctorFields" style="display: none;">
                    <div class="mb-3">
                        <label class="form-label" for="specialty">Especialidade medica</label>
                        <select id="specialty" class="form-control form-select" wire:model='specialty'>
                            <option value="">Selecione o Tipo</option>
                            @foreach ($specialties as $spec)
                            <option value="{{Specialty::getKey($spec)}}">{{Specialty::getPortugueseLabel($spec)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- DOCTOR --}}
                {{-- NURSE --}}
                <div id="nurseFields" style="display: none;">
                    <div class="mb-3">
                        <label class="form-label" for="nurse">Especialidade do Enfermeiro</label>
                        <select id="nurse" class="form-control form-select" wire:model='nurse'>
                            <option value="">Selecione o Tipo</option>
                            @foreach($nurseSpecialties as $specialty)
                            <option value="{{ NurseSpecialtyEnum::getKey($specialty) }}">{{ NurseSpecialtyEnum::getPortugueseLabel($specialty) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- NURSE --}}
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign up</button>
                </form>

                <p class="text-center">
                  <span>Já tem uma conta?</span>
                  <a href="{{route('admin.login')}}">
                    <span>faça login</span>
                  </a>
                </p>
              </div>
            </div>
            <!-- Register Card -->
          </div>
        </div>
      </div>
      <script>
        function handleRoleChange() {
        const selectedRole = document.getElementById('roleType').value;

        const patientFields = document.getElementById('patientFields');
        const doctorFields = document.getElementById('doctorFields');
        const nurseFields = document.getElementById('nurseFields');

        patientFields.style.display = 'none';
        doctorFields.style.display = 'none';
        nurseFields.style.display = 'none';

        if (selectedRole === 'PATIENT') {
            patientFields.style.display = 'block';
        } else if (selectedRole === 'DOCTOR') {
            doctorFields.style.display = 'block';
        } else if (selectedRole === 'NURSE') {
            nurseFields.style.display = 'block';
        }else{
            patientFields.style.display = 'none';
            doctorFields.style.display = 'none';
            nurseFields.style.display = 'none';
        }
        }

        // Call the function initially to set the display state based on pre-selected role (if any)
        handleRoleChange();
      </script>
</div>
