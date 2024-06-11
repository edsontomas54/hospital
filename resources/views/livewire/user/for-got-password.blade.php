<div>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                  <a href="index.html" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                    <svg
                      width="200"
                      height="200"
                      viewBox="0 0 200 200"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <image href="https://upload.wikimedia.org/wikipedia/commons/1/14/Emblem_of_Mozambique.svg" width="200" height="200" preserveAspectRatio="xMidYMid meet" />
                    </svg>
                    </span>
                    <span class="app-brand-text demo text-body fw-bold"></span>
                  </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2 text-center">Centro de Saúde São Dâmaso</h4>

                <p class="mb-4  text-center">Recuperar a senha</p>

                <form id="formAuthentication" class="mb-3" action="index.html" wire:submit.prevent="resetPassword">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="Introduza o seu email"
                      wire:model="email"
                      autofocus />
                  </div>
                  <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                      <label class="form-label" for="password">Nova Senha</label>
                    </div>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        wire:model="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>

                  </div>

                  <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                      <label class="form-label" for="password">confirmar Senha</label>
                    </div>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        wire:model="confirmPassword"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  <div class="mb-3 mt-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Entrar</button>
                  </div>
                </form>

                <p class="text-center">
                  <span>Não tem uma conta?</span>
                  <a href="{{route('admin.register')}}">
                    <span>criar uma conta</span>
                  </a>
                </p>
              </div>
            </div>
            <!-- /Register -->
          </div>
        </div>
      </div>
</div>
