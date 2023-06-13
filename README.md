## Plugin de Blockwords para PocketMine

Este es un plugin simple para PocketMine que bloquea ciertas palabras en el chat del servidor

### Instalación

1. Clona este repositorio en tu entorno de desarrollo de PocketMine.
2. Asegúrate de tener la API de PocketMine instalada y actualizada.
3. Copia la carpeta `BlockWordsPlugin` en la carpeta `plugins` de tu servidor PocketMine.

### Configuración

El plugin utiliza un archivo de configuración `config.yml` para especificar las palabras bloqueadas. Puedes editar este archivo para agregar o quitar palabras según tus necesidades. Aquí tienes un ejemplo de `config.yml`:

```yaml
blocked-words:
  - badword1
  - badword2
  - badword3
```

### Uso

Una vez instalado y configurado el plugin, bloqueará cualquier mensaje que contenga una de las palabras especificadas en el archivo config.yml. Cuando un jugador intente enviar un mensaje con una palabra bloqueada, se cancelará el evento PlayerChatEvent y se enviará un mensaje de advertencia al jugador.

**¡Gracias por utilizar el plugin de Blockwords para PocketMine!**
