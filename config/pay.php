<?php

return [
    'alipay' => [
        'app_id'         => '2016093000635096',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAl7MdIWRAHJxkSiSE6L2YM8s6fpaLlqP7lYTzHWSPrStb0kdfcPY5nYBqAgyEfvgFa2cRUAgQHDffKXbgHap04h00dsCxlO1EOvTchToaVk1g8rYNG1OmYDKWp7+ptCCmctnlXVZ1Ct9dG45QguCEFr94N6FDUVvP8Cz0oD35ij6Ekkv3v5aUvhjdX87kFW0wJCFUHWWB5suttS18GslxlZIcKwMmNbCaVLTFWXjf3ND3OtMMT9k00RvhBQjAnkfkqT2WJ13KivSdDoJifgmX/sWuCPWvrNB3iQvmYTEQkhPJBgGfIi/fOKr5cZyZSW4mrafrJVPk5RKocFmAhWyUyQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAjOYiAGGj8ZYN/r8FQbcU3C2C9cjlQu3P280pHITyxlw9u4MG1mCyCbmwiJwiGP1CQ8LwojFbhirWFVewVmI8pzSa+zfQHGGT/ngI34EztkHKZcFAuIOQDJlakhlPNtpbjI5vWpdD2HWou/mDYwBqEqqU298HQZgaySWCHMm35RUnkbdyP1icibSqC/AL3tcp22u+fyUiPX/sL/BNiuyQjFx2PUEggwR7zl4sqtyrOjmYlYmiNkwaUUPRwOW3JsQX8cQgOmgBlBTLSDULEQT3NeofRfxAPeyA9uf6tDTu4V5gjeUYQTSRRTRrHcVY5ixLs+jq3NoJ2ilcwJ0fsA4qswIDAQABAoIBAEt7OfnkVPSmQ4cWhFVpJDaz9vV/Ezrgtbr11LFfk8OqRLQAhJgyIw7MuILmyemDO42bkFgDgxmENz4lxOTyKbYVm3U7uDSMHcF0QqShzbc01Z3fgrGWYYQuX3PnNSWYovTQlVz9ri33ElbpW3adETZAxhBoEbYVKzxY6LRNaEPDWE4vkC9fA6vQNBweSW27IqLdAqvWC1NxeaYE5mGTMOjgCeDR+hx9llLPfyXzu8H73XEkl8oDeISntrDCXSriox6a3Lcab7YJ+oHpGBJxVeSK3CV3FynB+1l+CCbdFFDn2u1gyhoYlYkkRGK4zvsr/xe7+HigOmQFkPixn8+9VVECgYEA9THCnQ4V4HLvfKfc88nItrerRl45nWE6hkGCirUoaIaNw60nYljon1F9ao3e2/7gKTG+mWnoXlErsjbFYORqOQUTODeNAPR/7PEIhbEDvJlnEWe4OqOEahugBixG1f0Jk25ga54j4iSS43rogzjEPoQSCygTRJjuM14ydgjZ9XsCgYEAkxu65CXeqjB7MpDKewWDlDi3uuQyo81l0NvWqX5K1AfQHwTTP5RMW+IjLXMEseKiruY/GEu+DSAjlyAR5nDm487j94VFgwl8lWV5wOZIlPZS9+7LQvDl8svXjuE+L8XjPlK6pKOSEYs8OzwwQoEaXXgXVHRdZlplB6qR28mRbikCgYB20vaNRhYz/38v2emp+0/ZvIi0QVWKf2PtTDIHJmO+w/ZPrco4Tv3st4Ef8kDePFZFoGXN0xVZH90dMI3WttsDZwI5bDJZFCQqn2SR5Yb6Dx1zwd/2CuhQw7J5S1vIuCe72vG/NZQOM8s7koS7kvcHlNlprrInvDUzj6LEsOVvoQKBgBYIBiJbBZDpd9nn01s/RShyohmMSYU8oq337pstvdkpXmL23whblmAAaxJIcoCNl52n//UMiub+VDYy6Ftht0KQ3pVYUUPBrPXW37gjBOXCSkS1b52T5GxLWPoeA6k18sWHsEot8RdNifS5G+Up3p/2909/qelFSnIuem+3LV+ZAoGBANOqKaT+lfL9DbCVAyohBlA1V73ymPhg1HAYs0Q4dU4tDyEXWZxXn888YoCH6pkIHIt1qWyRpiZB63ka3klwpTDgEylEfn2sOZcvHmT4KhGLAS5Jlo9y2FIlud7Ahp789i3xHknovJlLFAm29ZergUcJkwkENrbEPNQFIESFn9nC',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '', // 公众号 app id
        'mch_id'      => '', // 第一步获取到的商户号
        'key'         => '', // 刚刚设置的 API 密钥
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
