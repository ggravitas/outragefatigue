<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jerrybrahm/repos/outrage/user/plugins/login/languages/es.yaml',
    'modified' => 1533580478,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Nombre de usuario',
            'EMAIL' => 'Email',
            'USERNAME_EMAIL' => 'Nombre de usuario/Email',
            'PASSWORD' => 'Contraseña',
            'ACCESS_DENIED' => 'Acceso denegado...',
            'LOGIN_FAILED' => 'El acceso ha fallado...',
            'LOGIN_SUCCESSFUL' => 'Ha accedido correctamente.',
            'BTN_LOGIN' => 'Acceder',
            'BTN_LOGOUT' => 'Salir',
            'BTN_FORGOT' => 'Olvidado',
            'BTN_REGISTER' => 'Registro',
            'BTN_RESET' => 'Restaurar contraseña',
            'BTN_SEND_INSTRUCTIONS' => 'Enviar instrucciones para restauración',
            'RESET_LINK_EXPIRED' => 'El enlace para la restauración ha caducado, inténtelo de nuevo.',
            'RESET_PASSWORD_RESET' => 'La contraseña ha sido restaurada',
            'RESET_INVALID_LINK' => 'Ha utilizado un enlace de restauración inválido, inténtelo de nuevo.',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Instructions to reset your password have been sent via email',
            'FORGOT_FAILED_TO_EMAIL' => 'No se ha podido enviar el email con instrucciones, inténtelo de nuevo.',
            'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'No se puede restaurar la contraseña para %s, no hay dirección de email.',
            'FORGOT_USERNAME_DOES_NOT_EXIST' => 'No existe ningún usuario con el nombre <b>%s</b>.',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'No se puede restaurar la contraseña. Este sitio no está configurado para enviar emails.',
            'FORGOT_EMAIL_SUBJECT' => '%s solicitud de restauración de contraseña',
            'FORGOT_EMAIL_BODY' => '<h1>Restauración de contraseña</h1><p>Estimado/a %1$s,</p><p>Se ha realizado una petición de restauración de contraseña en <b>%4$s</b>.</p><p><br /><a href="%2$s" class="btn-primary">Pulse aquí para restaurar su contraseña</a><br /><br /></p><p>Como alternativa puede copiar la siguiente URL en la barra de direcciones de su navegador:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Saludos cordiales,<br /><br />%3$s</p>',
            'SESSION' => '&ldquo;Recuérdame&rdquo;-Sesión',
            'REMEMBER_ME' => 'Recuérdame',
            'REMEMBER_ME_HELP' => 'Fija una cookie persistente en su navegador para permitir autenticación persistente entre sesiones.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Alguien ha usado su información de acceso para acceder a este sitio. Se han cerrado todas las sesiones. Vuelva a acceder con sus credenciales y compruebe sus datos.',
            'BUILTIN_CSS' => 'Usar CSS incorporado',
            'BUILTIN_CSS_HELP' => 'Incluir CSS proporcionado por el plugin de administración',
            'ROUTE' => 'Ruta de acceso',
            'ROUTE_HELP' => 'Ruta de acceso personalizada que proporciona su tema',
            'ROUTE_REGISTER' => 'Ruta de registro',
            'ROUTE_REGISTER_HELP' => 'Ruta a la página de registro. Ajuste esto si desea utilizar la página de registro incorporada. Déjelo vacío so tiene su propio formulario de registro.',
            'USERNAME_NOT_VALID' => 'El nombre de usuario deberá contener entre 3 y 16 caracteresEl nombre de usuario deberá contener entre 3 y 16 caracteres y puede incluir minúsculas, números, guiones bajos y normales. No se permiten letras mayúsculas, espacios ni caracteres especiales.',
            'USERNAME_NOT_AVAILABLE' => 'El nombre de usuario %s ya existe, elija otro.',
            'EMAIL_NOT_AVAILABLE' => 'El email %s ya existe, elija otro.',
            'PASSWORD_NOT_VALID' => 'La contraseña debe contener por lo menois un número y una letra mayúscula y minúscula, y debe ser de al menos 8 caracteres.',
            'PASSWORDS_DO_NOT_MATCH' => 'Las contraseñas no coinciden. Compruebe que ha introducido la misma contrasenna dos veces.',
            'USER_NEEDS_EMAIL_FIELD' => 'El usuario necesita un campo de email.',
            'EMAIL_SENDING_FAILURE' => 'Ha ocurrido un error al enviar el email.',
            'ACTIVATION_EMAIL_SUBJECT' => 'Active su cuenta en %s',
            'ACTIVATION_EMAIL_BODY' => '<h1>%Activación de cuenta</h1><p>Hola %1$s, </p><p>Su cuenta en <b>%3$s</b> ha sido creada con éxito, pero no podrá acceder hasta que se active..</p><p><br/><a href="%2$s" class="btn-primary">Active su cuenta ahora</a><br/><br/></p><p>Como alternativa puede copiar la siguiente URL en la barra de direcciones de su navegador:</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Saludos cordiales,<br/><br/>%4$s</p>',
            'ACTIVATION_NOTICE_MSG' => 'Hola %s, su cuenta ha sido creada, compruebe su correo electrónico para acivarla completamente.',
            'WELCOME_EMAIL_SUBJECT' => 'Bienvenido/a a %s',
            'WELCOME_EMAIL_BODY' => '<h1>Cuenta creada</h1><p>Hola %1$s, </p><p>Su cuenta en <b>%3$s</b> ha sido creada con éxito.</p><p><br/><a href="%2$s" class="btn-primary">Acceda ahora</a><br/><br/></p><p>Como alternativa puede copiar la siguiente URL en la barra de direcciones de su navegador:</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Saludos cordiales,<br/><br/>%4$s</p>',
            'WELCOME_NOTICE_MSG' => 'Hola %s, su cuenta ha sido creada con éxito.',
            'NOTIFICATION_EMAIL_SUBJECT' => 'Usuario nuevo en %s',
            'NOTIFICATION_EMAIL_BODY' => '<h1>Usuario nuevo</h1><p>Hola, se ha registrado un usuario nuevo en %1$s.</p><p><ul><li>Nombre de usuario: <b>%2$s</b></li><li>Email: <b>%3$s</b></ul><p><p><br/><a href="%4$s" class="btn-primary">Visite %1$s</a><br/><br/></p>',
            'EMAIL_FOOTER' => 'GetGrav.org',
            'ACTIVATION_LINK_EXPIRED' => 'Enlace de activación caducado',
            'USER_ACTIVATED_SUCCESSFULLY' => 'Usiario activado con éxito',
            'INVALID_REQUEST' => 'Solicitud inválida',
            'USER_REGISTRATION' => 'Registro de usuarios',
            'USER_REGISTRATION_ENABLED_HELP' => 'Activar el registro de usuarios',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validar contraseñas',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validar y comparar dos campos diferentes para las contraseñas, llamados `password1` y `password2`. Active esto si tiene dos cambpos de contraseña en el formulario de registro.',
            'SET_USER_DISABLED' => 'Crear usuario inactivo',
            'SET_USER_DISABLED_HELP' => 'Utilizado en combinación con `Enviar email de activación`. Añade el usuario a Grav, pero lo marca inactivo.',
            'LOGIN_AFTER_REGISTRATION' => 'Acceder con el usuario después del registro.',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Hacer que el usuario acceda inmediatamente después del registro. Si se requiere activación mediante email, al usuario se le permitirá entrada justo después de activar la cuenta.',
            'SEND_ACTIVATION_EMAIL' => 'Enviar email de activación',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Envía un email al usuario para activar su cuenta. Active la opción `Crear usuario inactivo` si usa esta característica de modo que el usuario se creará en modo inactivo y se enviará un email para activar la cuenta.',
            'SEND_NOTIFICATION_EMAIL' => 'Enviar email de notificación',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Notifica al administrador del sitio de que se ha registrado un usuario nuevo. El email se enviará a la dirección del campo `Para` en la configuración del Plugin Email.',
            'SEND_WELCOME_EMAIL' => 'Enviar email de bienvenida',
            'SEND_WELCOME_EMAIL_HELP' => 'Envía un email al usuario recién creado',
            'DEFAULT_VALUES' => 'Valores predeterminados',
            'DEFAULT_VALUES_HELP' => 'Lista de nombres de campo y sus valores asociados que se añadirán al perfil de usuario (archivo yaml) de forma predeterminada, sin ser configurables por el usuario. Separe los valores con coma, sin espacios entre los valores.',
            'ADDITIONAL_PARAM_KEY' => 'Parámetro',
            'ADDITIONAL_PARAM_VALUE' => 'Valor',
            'REGISTRATION_FIELDS' => 'Campos de registro',
            'REGISTRATION_FIELDS_HELP' => 'Añada los campos que se incluirán en el archivo Yaml del usuario. Los campos que no se muestren aquí no estarán presentes en el formulario de registro.',
            'REGISTRATION_FIELD_KEY' => 'Nombre del campo',
            'REDIRECT_AFTER_LOGIN' => 'Redireccionar después del acceso',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Ruta personalizada para redireccionar al acceder',
            'REDIRECT_AFTER_REGISTRATION' => 'Redireccionar después del registro',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Ruta personalizada para redireccionar después del registro',
            'OPTIONS' => 'Opciones',
            'EMAIL_VALIDATION_MESSAGE' => 'Debe ser un email válido',
            'PASSWORD_VALIDATION_MESSAGE' => 'La contraseña debe contener al menos un número, una mayúscula y una minúscula, y debe ser de al menos 8 caracteres.',
            'TIMEOUT_HELP' => 'Fija el tiempo de caducidad de la sesión en segundos cuando `Recuérdame` está activado y marcadopor el usuario. El mínimo es 604800, que es una semana.',
            'GROUPS_HELP' => 'Lista de grupos del que formará parte el usuario reci´n registrado.',
            'SITE_ACCESS_HELP' => 'Lista de niveles de acceso al sitio que tendrá el usuario nuevo. Por ejemplo: `login` -> `true` ',
            'WELCOME' => 'Bienvenido/a',
            'REDIRECT_AFTER_ACTIVATION' => 'Redireccionar después de activación de usuario',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Se usará si el usuario debe activar la cuenta vía email. Una vez activado, se mostrará esta ruta',
            'REGISTRATION_DISABLED' => 'Registro desactivado',
            'USE_PARENT_ACL_LABEL' => 'Usar reglas de acceso del padre',
            'USE_PARENT_ACL_HELP' => 'Comprobar reglas de acceso superiores si no hay reglas de acceso definidas.',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Proteger medios de una página protegida por acceso',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Si está activo, los medios (imágenes, etc.) de una página protegido por acceso también estarán protegidos y solo serán visibles para usuarios que hayan accedido (login)',
            'SECURITY_TAB' => 'Seguridad',
            'MAX_RESETS_COUNT' => 'Cantidad máxima de restauraciones de contraseña',
            'MAX_RESETS_COUNT_HELP' => 'Protección de avalancha de restauración de contraseña (0 - ilimitado)',
            'MAX_RESETS_INTERVAL' => 'Intervalo máximo de restauración de contraseña',
            'MAX_RESETS_INTERVAL_HELP' => 'El intervalo máximo de tiempo para el valor máximo de restauración',
            'FORGOT_CANNOT_RESET_IT_IS_BLOCKED' => 'No se puede restaurar la contraseña de %s, la funcionalidad de restauración ha sido bloqueada temporalmente. Inténtelo de nuevo más tarde (máximo %s minutos)',
            'MAX_LOGINS_COUNT' => 'Número máximo de accesos',
            'MAX_LOGINS_COUNT_HELP' => 'Protección de avalancha (0 - ilimitado)',
            'MAX_LOGINS_INTERVAL' => 'Intervalo máximo de acceso',
            'MAX_LOGINS_INTERVAL_HELP' => 'El intervalo de tiempo para el número máximo de accesos',
            'TOO_MANY_LOGIN_ATTEMPTS' => 'Ha habido demasiados intentos fallidos de acceso en el tiempo permitido (%s minutos)',
            'SECONDS' => 'segundos',
            'RESETS' => 'reinicios',
            'ATTEMPTS' => 'intentos',
            'ROUTES' => 'Rutas',
            'ROUTE_FORGOT' => 'Ruta de contraseña olvidada',
            'ROUTE_RESET' => 'Ruta de restauración de contraseña',
            'ROUTE_PROFILE' => 'Ruta del perfil de usuario',
            'ROUTE_ACTIVATE' => 'Ruta de activación de usuario',
            'LOGGED_OUT' => 'Su sesión ha finalizado correctamente...',
            'PAGE_RESTRICTED' => 'Acceso restringido, acceda con sus credenciales...',
            'DYNAMIC_VISIBILITY' => 'Visibilidad de páginas dinámicas',
            'DYNAMIC_VISIBILITY_HELP' => 'Permite el procesamiento de la visibilidad de páginas basada en reglas de acceso si login.visibility_requires_access es true en un página'
        ]
    ]
];
