<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade Inbound Hub | WhatsApp</title>
    <link rel="icon" type="image/png" href="favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
    <style>
      @font-face {
        font-display: block;
        font-family: Roboto;
        src: url(https://assets.brevo.com/font/Roboto/Latin/normal/normal/7529907e9eaf8ebb5220c5f9850e3811.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/normal/normal/25c678feafdc175a70922a116c9be3e7.woff) format("woff")
      }
      @font-face {
        font-display: fallback;
        font-family: Roboto;
        font-weight: 600;
        src: url(https://assets.brevo.com/font/Roboto/Latin/medium/normal/6e9caeeafb1f3491be3e32744bc30440.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/medium/normal/71501f0d8d5aa95960f6475d5487d4c2.woff) format("woff")
      }
      @font-face {
        font-display: fallback;
        font-family: Roboto;
        font-weight: 700;
        src: url(https://assets.brevo.com/font/Roboto/Latin/bold/normal/3ef7cf158f310cf752d5ad08cd0e7e60.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/bold/normal/ece3a1d82f18b60bcce0211725c476aa.woff) format("woff")
      }
      #sib-container input:-ms-input-placeholder {
        text-align: left;
        font-family: Helvetica, sans-serif;
        color: #c0ccda;
      }
      #sib-container input::placeholder {
        text-align: left;
        font-family: Helvetica, sans-serif;
        color: #c0ccda;
      }
      #sib-container textarea::placeholder {
        text-align: left;
        font-family: Helvetica, sans-serif;
        color: #c0ccda;
      }
      #sib-container a {
        text-decoration: underline;
        color: #2BB2FC;
      }
      
      /* Ajuste fino para o container do formulário */
      .form-container-custom {
          box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
          border-radius: 1rem;
          overflow: hidden;
          background: white;
      }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">

    <?php include 'header.php'; ?>

    <main class="flex-grow flex items-center justify-center py-12 px-4">
        <div class="max-w-6xl w-full grid md:grid-cols-2 gap-12 items-center">
            
            <div class="text-center md:text-left order-2 md:order-1">
                <div class="inline-flex items-center gap-2 bg-green-100 text-green-800 px-4 py-1 rounded-full text-sm font-bold mb-6">
                    <span class="w-2 h-2 bg-green-600 rounded-full animate-pulse"></span>
                    Grupo Ativo no WhatsApp
                </div>
                
                <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6 font-serif leading-tight">
                    Troque experiências reais sobre <span class="text-green-600">Inbound</span>.
                </h1>
                
                <p class="text-slate-600 text-lg mb-8 leading-relaxed">
                    Chega de grupos parados ou cheios de spam. No Inbound Hub, focamos em:
                </p>

                <ul class="space-y-4 text-slate-700 font-medium mb-8 inline-block text-left">
                    <li class="flex items-center gap-3">
                        <div class="bg-green-100 p-1 rounded-full text-green-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        Tira-dúvidas técnico (CRM, SEO, Automação)
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="bg-green-100 p-1 rounded-full text-green-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        Estudos de caso e erros reais
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="bg-green-100 p-1 rounded-full text-green-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        Networking com quem está no campo de batalha
                    </li>
                </ul>

                <p class="text-sm text-slate-400 italic">
                    * Após o cadastro, você receberá o link de acesso por e-mail.
                </p>
            </div>

            <div class="order-1 md:order-2 w-full max-w-md mx-auto form-container-custom border border-slate-200">
                
                <div class="sib-form" style="text-align: center; background-color: #EFF2F7;">
                  <div id="sib-form-container" class="sib-form-container">
                    <div id="error-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px;">
                      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                          <path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
                        </svg>
                        <span class="sib-form-message-panel__inner-text">
                          Sua assinatura não pôde ser validada.
                        </span>
                      </div>
                    </div>
                    <div></div>
                    <div id="success-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#085229; background-color:#e7faf0; border-radius:3px; border-color:#13ce66;max-width:540px;">
                      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                          <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
                        </svg>
                        <span class="sib-form-message-panel__inner-text">
                          Você fez sua assinatura com sucesso.
                        </span>
                      </div>
                    </div>
                    <div></div>
                    <div id="sib-container" class="sib-container--large sib-container--vertical" style="text-align:center; background-color:rgba(255,255,255,1); max-width:540px; border-radius:3px; border-width:1px; border-color:#C0CCD9; border-style:solid; direction:ltr">
                      <form id="sib-form" method="POST" action="https://64b05874.sibforms.com/serve/MUIFAEe_YCE9kYPUpfVkKUSTS8_8oUZLmcRsWZvxNxu-T_V5FyjeMEke1EsC0ekwWCWhX9KC_gVWvrTVOhCtGoYcj63yAp3M1D4x_ANkZr3QELRooB94pxJM_m-87xXRXiDhJ5NJwagjE-hjHq_4o_wnGhavxlywZmucT7z0bGasvpiNe9sutVkR8nAvkH0gDuelWUpsAXHz9uhgNA==" data-type="subscription">
                        <div style="padding: 8px 0;">
                          <div class="sib-form-block" style="font-size:32px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3C4858; background-color:transparent; text-align:left">
                            <p>Entrar no Hub</p>
                          </div>
                        </div>
                        <div style="padding: 8px 0;">
                          <div class="sib-form-block" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#3C4858; background-color:transparent; text-align:left">
                            <div class="sib-text-form-block">
                              <p>Inscreva-se para receber o link do grupo.</p>
                            </div>
                          </div>
                        </div>
                        <div style="padding: 8px 0;">
                          <div class="sib-input sib-form-block">
                            <div class="form__entry entry_block">
                              <div class="form__label-row ">
                                <label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3c4858;" for="EMAIL" data-required="*">Seu melhor e-mail</label>
                                <div class="entry__field">
                                  <input class="input " type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="exemplo@email.com" data-required="true" required />
                                </div>
                              </div>
                              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                              </label>
                            </div>
                          </div>
                        </div>
                        <div style="padding: 8px 0;">
                          <div class="sib-form-block" style="text-align: left">
                            <button class="sib-form-block__button sib-form-block__button-with-loader" style="font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#FFFFFF; background-color:#16a34a; border-radius:3px; border-width:0px;" form="sib-form" type="submit">
                              <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512" style="">
                                <path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
                              </svg>
                              QUERO ENTRAR
                            </button>
                          </div>
                        </div>
                        <input type="text" name="email_address_check" value="" class="input--hidden">
                        <input type="hidden" name="locale" value="pt">
                      </form>
                    </div>
                  </div>
                </div>
                </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
      window.REQUIRED_CODE_ERROR_MESSAGE = 'Escolha um código de país';
      window.LOCALE = 'pt';
      window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "A informação fornecida não é valida. Verifique o formato do campo e tente novamente.";
      window.REQUIRED_ERROR_MESSAGE = "Este campo não pode ser deixado em branco. ";
      window.GENERIC_INVALID_MESSAGE = "A informação fornecida não é valida. Verifique o formato do campo e tente novamente.";
      window.translation = {
        common: {
          selectedList: '{quantity} lista selecionada',
          selectedLists: '{quantity} listas selecionadas',
          selectedOption: '{quantity} selecionado',
          selectedOptions: '{quantity} selecionados',
        }
      };
      var AUTOHIDE = Boolean(0);
    </script>
    <script defer src="https://sibforms.com/forms/end-form/build/main.js"></script>

</body>
</html>
