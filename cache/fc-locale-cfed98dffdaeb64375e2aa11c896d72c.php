<?php return array (
  'plugins.importexport.crossref.displayName' => 'Módulo de exportación CrossRef XML',
  'plugins.importexport.crossref.description' => 'Exportar los metadatos del artículo en formato CrossRef XML.',
  'plugins.importexport.crossref.requirements' => 'Requerimientos',
  'plugins.importexport.crossref.requirements.satisfied' => 'Se satisfacen todas las dependencias de módulos.',
  'plugins.importexport.crossref.error.publisherNotConfigured' => 'No se ha definido la editorial de la revista! Debe añadir la institución editora en la pàgina de <a href="{$journalSettingsUrl}" target="_blank">Preferencias de la Revista</a>.',
  'plugins.importexport.crossref.error.issnNotConfigured' => 'No se ha definido un ISSN para la revista! Debe añadir un ISSN en la página de <a href="{$journalSettingsUrl}" target="_blank">Preferencias de la Revista</a>.',
  'plugins.importexport.crossref.error.noDOIContentObjects' => 'No se han seleccionado artículos a los que asignar un idenficador público DOI, por lo tanto, el módulo no puede depositar o exportar nada.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'Para un correcto depósito en CrossRef, se requieren los siguientes ítems.',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Nombre del depositario',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'Email del depositario',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Introduzca el nombre del depositario.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Introduzca el email del depositario.',
  'plugins.importexport.crossref.registrationIntro' => 'Si quiere usar este módulo para registrar Identificadores Digitales de Objeto (Digital Object Identifiers - DOI, en inglés) directamente con CrossRef, necesita un usuario y contraseña (disponible en <a href="http://www.crossref.org" target="_blank">CrossRef</a>). Si no dispone de su propio usuario y contraseña, todavía puede exportar en formato XML de CrossRef, pero no podrá registrar sus DOIs en CrossRef directamente desde OJS.',
  'plugins.importexport.crossref.settings.form.username' => 'Usuario',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Introduzca el usuario que ha obtenido de CrossRef.',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'OJS depositará los DOIs asignados en CrossRef de forma automática. Esto puede tomar un poco de tiempo de proceso tras la publicación. Puede comprobar todos los DOIs no registrados.',
  'plugins.importexport.crossref.settings.form.testMode.description' => 'Usar la API de pruebas de CrossRef (entorno de testing) para depositar los DOIs. No olvide desactivar esta opción cuando pase a producción.',
  'plugins.importexport.crossref.issues.description' => 'Nota: Solo los números (y no sus artículos) se toman en consideración para la exportación/registro.',
  'plugins.importexport.crossref.status.submitted' => 'Enviados',
  'plugins.importexport.crossref.status.completed' => 'Dipositados',
  'plugins.importexport.crossref.status.failed' => 'Fallos',
  'plugins.importexport.crossref.status.registered' => 'Activos',
  'plugins.importexport.crossref.status.markedRegistered' => 'Marcados activo',
  'plugins.importexport.crossref.statusLegend' => '<p>Estados de depósito:</p>
		<p>
		- No depositado: no se ha hecho ningún intento de deposito para este DOI.<br />
		- Enviado: este DOI se ha enviado para despositar.<br />
		- Depositado: este DOI se ha depositado en Crossref, pero podría no estar activo todavía.<br />
		- Activo: el DOI se ha depositado y se resuelve correctamente.<br />
		- Fallo: el deposito del DOI ha fallado.<br />
		- Marcado activo: el DOI fué marcado manualmente como activo.
		</p>
		<p>Solo se muestran los estados de los últimos intentos de depósito.</p>
		<p>Si un deposito fallase, resuelva el problema e intente registrar el DOI de nuevo.</p>',
  'plugins.importexport.crossref.action.export' => 'Descargar XML',
  'plugins.importexport.crossref.action.markRegistered' => 'Marcar activo',
  'plugins.importexport.crossref.action.register' => 'Enviar',
  'plugins.importexport.crossref.action.checkStatus' => 'Comprobar estado',
  'plugins.importexport.crossref.senderTask.name' => 'Tarea automática de registro en CrossRef',
  'plugins.importexport.crossref.notification.failed' => 'Un DOI no se ha podido registrar. Visite Herramientas > Importar/Exportar > Módulo de Exportación CrossRef XML para ver los depósitos que han fallado.',
  'plugins.importexport.crossref.cliUsage' => 'Uso:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] articles objectId1 [objectId2] ...',
  'plugins.importexport.crossref.register.error.mdsError' => 'Envío con errores! El servidor de registro de DOIS ha devuelto el error: \'{$param}\'.',
  'plugins.importexport.crossref.register.success' => 'Envio con éxito!',
  'plugins.importexport.crossref.export.error.issueNotFound' => 'No existe ningún número con el ID "{$issueId}".',
  'plugins.importexport.crossref.export.error.articleNotFound' => 'No existe ningún artículo con el ID "{$articleId}".',
); ?>