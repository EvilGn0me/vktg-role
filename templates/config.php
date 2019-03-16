<?php
class Config
{
    private static $configs = [
        [
            //VK
            "vk" => "{{ vktg_config.vk_id }}",
            "vk_token" => "{{ vktg_config.vk_token}}",
            //Telegram
            "t_key" => "{{ vktg_config.tg_token }}",
            "t_name" => "{{ vktg_config.tg_name }}",
            "t_chat" => "{{ vktg_config.tg_chat }}",
            "messageSend" => [
                "disable_web_page_preview" => {{ vktg_config.web_page_preview }},
                "disable_notification" => {{ vktg_config.text_notification }}
            ],
            //Bot-manager settings
            //Bot-manager reposting params(modes)
            "extended" => [
                "active" => {{ vktg_config.active }},
                "needLinkToVKPost" => {{ vktg_config.linktovkpost }},
                "needFromText" => [
                    "withLink" => {{ vktg_config.textwithlink }},
                    "prepend" => {{ vktg_config.prepend }},
                    "customName" => "{{ vktg_config.name }}"
                ],
                "resendAttachments" => true,
            ],
            "needPostPreview" => true,
            //Bot-manager internal functions params
            "language" => "ru",
            "textManager" => [
                "aggressive" => false,
                "limit" => 3
            ],
            "vkLinks" => [
                "show" => false,
                "symbols" => [
                    "open" => "[",
                    "close" => "]"
                ]
            ]
        ],
    ];
    //Files
    private static $file_log = "log.txt";
    private static $file_last = "last.json";
    public static function getConfigs()
    {
        return self::$configs;
    }
    public static function getVkParams($vk_id, $vk_token)
    {
        return [
            "access_token" => $vk_token,
            "owner_id" => $vk_id,
            "count" => 5
        ];
    }
    //Functions files
    public static function getFileLog()
    {
        return dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR.self::$file_log;
    }
    public static function getFileLast()
    {
        return dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR.self::$file_last;
    }
}
