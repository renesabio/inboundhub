<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participe do Inbound Hub | Comunidade Exclusiva</title>
    <link rel="icon" type="image/png" href="favicon.png">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
    <style>
        @font-face { font-display: block; font-family: Roboto; src: url(https://assets.brevo.com/font/Roboto/Latin/normal/normal/7529907e9eaf8ebb5220c5f9850e3811.woff2) format("woff2") }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col justify-between">

    <?php include 'header.php'; ?>

    <main class="flex-grow flex items-center justify-center py-20 px-4">
        <div class="max-w-md w-full">
            
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-slate-900 mb-4 font-serif">Bem-vindo ao Hub</h1>
                <p class="text-slate-600">Preencha seus dados abaixo para acessar materiais exclusivos e receber novidades.</p>
            </div>

            <div class="bg-white p-2 rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
                
                <style>
                  #sib-container input:-ms-input-placeholder { text-align: left; color: #c0ccda; }
                  #sib-container input::placeholder { text-align: left; color: #c0ccda; }
                </style>
                <div class="sib-form" style="text-align: center; background-color: #ffffff;">
                  <div id="sib-form-container" class="sib-form-container">
                    <div id="error-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px;">
                      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                        <span class="sib-form-message-panel__inner-text">Tente novamente.</span>
                      </div>
                    </div>
                    <div id="success-message" class="sib-form-message-panel" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#085229; background-color:#e7faf0; border-radius:3px; border-color:#13ce66;max-width:540px;">
                      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                        <span class="sib-form-message-panel__inner-text">Cadastro realizado com sucesso!</span>
                      </div>
                    </div>
                    <div id="sib-container" class="sib-container--large sib-container--vertical" style="text-align:center; background-color:rgba(255,255,255,1); max-width:540px; border-radius:3px; border-width:0px; direction:ltr">
                      <form id="sib-form" method="POST" action="https://84eb807c.sibforms.com/serve/MUIFANVwsz4F8USqjUIl5hcoZa-q9OjDzV8DJeZXur5ZyZXSRCCRLT9nxbsClV7KKNofEI7tHlWyRQCNV1IKVhYlyF5FH-Sktf8kZRybqD8yAL0Dc27iBqqwYHa3uiSLu4ykV9jClDVqF9osmxJej5eU4hw67DDg0myA1qOLgdHkamNX3xjeH0iIbE7-wEJ6XUoiDo2kOg6tDUfP" data-type="subscription">
                        <div style="padding: 8px 0;">
                          <div class="sib-input sib-form-block">
                            <div class="form__entry entry_block">
                              <div class="form__label-row ">
                                <label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3c4858;" for="NOME" data-required="*">Nome</label>
                                <div class="entry__field">
                                  <input class="input " maxlength="200" type="text" id="NOME" name="NOME" autocomplete="off" data-required="true" required />
                                </div>
                              </div>
                              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;"></label>
                            </div>
                          </div>
                        </div>
                        <div style="padding: 8px 0;">
                          <div class="sib-input sib-form-block">
                            <div class="form__entry entry_block">
                              <div class="form__label-row ">
                                <label class="entry__label" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#3c4858;" for="EMAIL" data-required="*">E-mail</label>
                                <div class="entry__field">
                                  <input class="input " type="text" id="EMAIL" name="EMAIL" autocomplete="off" data-required="true" required />
                                </div>
                              </div>
                              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;"></label>
                            </div>
                          </div>
                        </div>
                        <div style="padding: 8px 0;">
                          <div class="sib-optin sib-form-block" data-required="true">
                            <div class="form__entry entry_mcq">
                              <div class="form__label-row ">
                                <div class="entry__choice">
                                  <label>
                                    <input type="checkbox" class="input_replaced" value="1" id="OPT_IN" name="OPT_IN" required />
                                    <span class="checkbox checkbox_tick_positive"></span>
                                    <span style="font-size:14px; text-align:left; font-family:Helvetica, sans-serif; color:#3C4858; background-color:transparent;"><p>Aceito receber materiais</p></span>
                                  </label>
                                </div>
                              </div>
                              <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Helvetica, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;"></label>
                            </div>
                          </div>
                        </div>
                        <div style="padding: 8px 0;">
                          <div class="sib-form-block" style="text-align: left">
                            <button class="sib-form-block__button sib-form-block__button-with-loader" style="font-size:16px; text-align:left; font-weight:700; font-family:Helvetica, sans-serif; color:#FFFFFF; background-color:#2152a2; border-radius:3px; border-width:0px;" form="sib-form" type="submit">
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
            
            <p class="text-center text-slate-400 text-sm mt-6">
                Respeitamos sua privacidade. Zero spam.
            </p>

        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
      window.REQUIRED_CODE_ERROR_MESSAGE = 'Campo obrigatório';
      window.LOCALE = 'pt';
    </script>
    <script defer src="https://sibforms.com/forms/end-form/build/main.js"></script>

</body>
</html>
