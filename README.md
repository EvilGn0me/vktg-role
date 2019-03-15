VKTG
=========

This role installs https://github.com/lgg/vk-to-telegram-bot reposting bot. This bot reposts feed from vk to telegram channel or chat.

It supports only Centos 7 for now. Also remi php repo will be installed.


How to use:
=========
You need to change vktg_config array for variables needed for bot to work.
Variables are self explanatory.

```
vktg_config:
  vk_id: 'user or group id goes here'
  vk_token: 'service access key here'
  tg_token: 'your bot access token here'
  tg_name: 'your bot name here'
  tg_chat: 'your telegram chat or channel'
  name: 'bot name for text messages'
```

TO DO
=========
* Add more config Variables.
* Add ability use php already installed on server.
* Add debian or ubuntu support.

License
-------

BSD

Author Information
------------------

An optional section for the role authors to include contact information, or a website (HTML is not allowed).
