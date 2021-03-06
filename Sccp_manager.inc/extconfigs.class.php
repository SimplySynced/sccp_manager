<?php
/**
 * 
 */
namespace FreePBX\modules\Sccp_manager;
class extconfigs {
        public function __construct() {

        }

        public function info() {
           return Array('Ver' =>'Default Setings and Enums');
        }
        
        public function getextConfig($id = '', $index = '') {
            switch ($id) {
                case 'keyset':
                    $result =  $this->keysetdefault;
                    break;
                case 'sccp_lang':
                    $result =  $this->cisco_language;
                    break;
                case 'sccpDefaults':
                    $result =  $this->sccpDefaults;
                    break;

                default:
                    return array('noId');
                    break;
            }
            if (empty($index)) {
                return $result;
            } else {
                if (isset($result[$index])) {
                    return $result[$index];
                } else {
                    return array('');
                }
            }
        }

        private $sccpDefaults = array(
            "servername" => 'VPBXSCCP',
            "bindaddr" => '0.0.0.0', "port" => '2000',			# chan_sccp also supports ipv6
                                                                        # bindaddr = "::" will support ipv6 and ipv4 at the same time
            "deny" => '0.0.0.0/0.0.0.0',
            "permit" => '0.0.0.0/0.0.0.0',					# defaults to 'internal' which means:
                                                                        # permit:127.0.0.0/255.0.0.0,permit:10.0.0.0/255.0.0.0,permit:172.0.0.0/255.224.0.0,permit:192.168.0.0/255.255.0.0"
            "dateformat" => 'D.M.Y',					# This is the german default format. Should be "D/M/Y" or "D/M/YA" instead
            "disallow" => 'all', "allow" => 'alaw;ulaw',
            "devicetable" => 'sccpdevice',
            "hotline_enabled" => 'no',
            "hotline_context" => 'default',
            "hotline_extension" => '*60',
            "hotline_label" => 'hotline',
            "linetable" => 'sccpline',
            "tftp_path" => '/tftpboot'
        );
                
        private $keysetdefault = array('onhook' => 'redial,newcall,cfwdall,dnd,pickup,gpickup,private',
            'connected' => 'hold,endcall,park,vidmode,select,cfwdall,cfwdbusy,idivert',
            'onhold' => 'resume,newcall,endcall,transfer,conflist,select,dirtrfr,idivert,meetme',
            'ringin' => 'answer,endcall,transvm,idivert',
            'offhook' => 'redial,endcall,private,cfwdall,cfwdbusy,pickup,gpickup,meetme,barge',
            'conntrans' => 'hold,endcall,transfer,conf,park,select,dirtrfr,vidmode,meetme,cfwdall,cfwdbusy',
            'digitsfoll' => 'back,endcall,dial',
            'connconf' => 'conflist,newcall,endcall,hold,vidmode',
            'ringout' => 'empty,endcall,transfer,cfwdall,idivert',
            'offhookfeat' => 'redial,endcall',
            'onhint' => 'redial,newcall,pickup,gpickup,barge',
            'onstealable' => 'redial,newcall,cfwdall,pickup,gpickup,dnd,intrcpt',
            'holdconf' => 'resume,newcall,endcall,join',
            'uriaction' => 'default');
//   Cisco  Language Code / Directory  
        
        private $cisco_language = array('ar_SA' => array('code' => 'ar', 'language' => 'Arabic', 'locale' => 'Arabic_Saudi_Arabia'),
            'bg_BG' => array('code' => 'bg', 'language' => 'Bulgarian', 'locale' => 'Bulgarian_Bulgaria'),
            'cz_CZ' => array('code' => 'cz', 'language' => 'Czech', 'locale' => 'Czech_Czech_Republic'),
            'da_DK' => array('code' => 'da', 'language' => 'Danish', 'locale' => 'Danish_Denmark'),
            'de_DE' => array('code' => 'de', 'language' => 'German', 'locale' => 'German_Germany'),
            'el_GR' => array('code' => 'el', 'language' => 'Greek', 'locale' => 'Greek_Greece'),
            'en_AU' => array('code' => 'en', 'language' => 'English', 'locale' => 'AU_English_United_States'),
            'en_GB' => array('code' => 'en', 'language' => 'English', 'locale' => 'English_United_Kingdom'),
            'en_US' => array('code' => 'en', 'language' => 'English', 'locale' => 'English_United_States'),
            'es_ES' => array('code' => 'es', 'language' => 'Spanish', 'locale' => 'Spanish_Spain'),
            'et_EE' => array('code' => 'et', 'language' => 'Estonian', 'locale' => 'Estonian_Estonia'),
            'fi_FI' => array('code' => 'fi', 'language' => 'Finnish', 'locale' => 'Finnish_Finland'),
            'fr_CA' => array('code' => 'fr', 'language' => 'French', 'locale' => 'French_Canada'),
            'fr_FR' => array('code' => 'fr', 'language' => 'French', 'locale' => 'French_France'),
            'he_IL' => array('code' => 'he', 'language' => 'Hebrew', 'locale' => 'Hebrew_Israel'),
            'hr_HR' => array('code' => 'hr', 'language' => 'Croatian', 'locale' => 'Croatian_Croatia'),
            'hu_HU' => array('code' => 'hu', 'language' => 'Hungarian', 'locale' => 'Hungarian_Hungary'),
            'it_IT' => array('code' => 'it', 'language' => 'Italian', 'locale' => 'Italian_Italy'),
            'ja_JP' => array('code' => 'ja', 'language' => 'Japanese', 'locale' => 'Japanese_Japan'),
            'ko_KO' => array('code' => 'ko', 'language' => 'Korean', 'locale' => 'Korean_Korea_Republic'),
            'lt_LT' => array('code' => 'lt', 'language' => 'Lithuanian', 'locale' => 'Lithuanian_Lithuania'),
            'lv_LV' => array('code' => 'lv', 'language' => 'Latvian', 'locale' => 'Latvian_Latvia'),
            'nl_NL' => array('code' => 'nl', 'language' => 'Dutch', 'locale' => 'Dutch_Netherlands'),
            'no_NO' => array('code' => 'no', 'language' => 'Norwegian', 'locale' => 'Norwegian_Norway'),
            'pl_PL' => array('code' => 'pl', 'language' => 'Polish', 'locale' => 'Polish_Poland'),
            'pt_BR' => array('code' => 'pt', 'language' => 'Portuguese', 'locale' => 'Portuguese_Brazil'),
            'pt_PT' => array('code' => 'pt', 'language' => 'Portuguese', 'locale' => 'Portuguese_Portugal'),
            'ro_RO' => array('code' => 'ro', 'language' => 'Romanian', 'locale' => 'Romanian_Romania'),
            'ru_RU' => array('code' => 'ru', 'language' => 'Russian', 'locale' => 'Russian_Russian_Federation'),
            'sk_SK' => array('code' => 'sk', 'language' => 'Slovakian', 'locale' => 'Slovak_Slovakia'),
            'sl_SL' => array('code' => 'sl', 'language' => 'Slovenian', 'locale' => 'Slovenian_Slovenia'),
            'sr_ME' => array('code' => 'sr', 'language' => 'Serbian', 'locale' => 'Serbian_Republic_of_Montenegro'),
            'sr_RS' => array('code' => 'rs', 'language' => 'Serbian', 'locale' => 'Serbian_Republic_of_Serbia'),
            'sv_SE' => array('code' => 'sv', 'language' => 'Swedish', 'locale' => 'Swedish_Sweden'),
            'th_TH' => array('code' => 'th', 'language' => 'Thailand', 'locale' => 'Thai_Thailand'),
            'tr_TR' => array('code' => 'tr', 'language' => 'Turkish', 'locale' => 'Turkish_Turkey'),
            'zh_CN' => array('code' => 'cn', 'language' => 'Chinese', 'locale' => 'Chinese_China'),
            'zh_TW' => array('code' => 'zh', 'language' => 'Chinese', 'locale' => 'Chinese_Taiwan')
        );

        private $cisco_timezone = array(
            'Dateline'             => array('offset' => '-12', 'time' => 'Standard Time'),
            'Samoa'                => array('offset' => '-12', 'time' => 'Standard Time'),
            'Hawaiian'             => array('offset' => '-12', 'time' => 'Standard Time'),
            'Alaskan'              => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Pacific'              => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Mountain'             => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'US Mountain'          => array('offset' => '-12', 'time' => 'Standard Time'),
            'Central'              => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Mexico'               => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Canada Central'       => array('offset' => '-12', 'time' => 'Standard Time'),
            'SA Pacific'           => array('offset' => '-12', 'time' => 'Standard Time'),
            'Eastern'              => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'US Eastern'           => array('offset' => '-12', 'time' => 'Standard Time'),
            'Atlantic'             => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'SA Western'           => array('offset' => '-12', 'time' => 'Standard Time'),
            'Newfoundland'         => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'South America'        => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'SA Eastern'           => array('offset' => '-12', 'time' => 'Standard Time'),
            'Mid-Atlantic'         => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Azores'               => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'GMT'                  => array('offset' => '00', 'time' => 'Standard/Daylight Time'),
            'Greenwich'            => array('offset' => '00', 'time' => 'Standard Time'),
            'W. Europe'            => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'GTB'                  => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Egypt'                => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'E. Europe'            => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Romance'              => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Central Europe'       => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'South Africa'         => array('offset' => '-12', 'time' => 'Standard Time'),
            'Jerusalem'            => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Saudi Arabia'         => array('offset' => '-12', 'time' => 'Standard Time'),
/*              Russion  Regions                                                                 */            
            'Russian/Kaliningrad'  => array('offset' => '02', 'time' => 'Standard/Daylight Time'),
            'Russian/Moscow'       => array('offset' => '03', 'time' => 'Standard/Daylight Time'),
            'Russian/St.Peterburg' => array('offset' => '03', 'time' => 'Standard/Daylight Time'),
            'Russian/Samara'       => array('offset' => '04', 'time' => 'Standard/Daylight Time'),
            'Russian/Novosibirsk'  => array('offset' => '07', 'time' => 'Standard/Daylight Time'),
            'Russian/Ekaterinburg' => array('offset' => '07', 'time' => 'Standard/Daylight Time'),
            'Russian/Irkutsk'      => array('offset' => '08', 'time' => 'Standard/Daylight Time'),
            'Russian/Yakutsk'      => array('offset' => '09', 'time' => 'Standard/Daylight Time'),
            'Russian/Khabarovsk'   => array('offset' => '10', 'time' => 'Standard/Daylight Time'),
            'Russian/Vladivostok'  => array('offset' => '10', 'time' => 'Standard/Daylight Time'),
            'Russian/Sakhalin'     => array('offset' => '11', 'time' => 'Standard/Daylight Time'),
            'Russian/Magadan'      => array('offset' => '11', 'time' => 'Standard/Daylight Time'),
            'Russian/Kamchatka'    => array('offset' => '12', 'time' => 'Standard/Daylight Time'),
/*              EnD - Russion  Regions                                                             */            
            
            'Iran'                 => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Caucasus'             => array('offset' => '-12', 'time' => 'Standard/Daylight Time'),
            'Arabian'              => array('offset' => '-12', 'time' => 'Standard Time'),
            'Afghanistan'          => array('offset' => '-12', 'time' => 'Standard Time'),
            'West Asia'            => array('offset' => '-12', 'time' => 'Standard Time'),
            'Central Asia'         => array('offset' => '-12', 'time' => 'Standard Time'),
            'SE Asia'              => array('offset' => '-12', 'time' => 'Standard Time'),
            'China'                => array('offset' => '-12', 'time' => 'Standard Time'),
            'Taipei'               => array('offset' => '-12', 'time' => 'Standard Time'),
            'Tokyo'                => array('offset' => '-12', 'time' => 'Standard Time'),
            'Cen. Australia'       => array('offset' => '10', 'time' => 'Standard/Daylight Time'),
            'AUS Central'          => array('offset' => '-12', 'time' => 'Standard Time'),
            'E. Australia'         => array('offset' => '-12', 'time' => 'Standard Time'),
            'AUS Eastern'          => array('offset' => '10', 'time' => 'Standard/Daylight Time'),
            'West Pacific'         => array('offset' => '-12', 'time' => 'Standard Time'),
            'Tasmania'             => array('offset' => '10', 'time' => 'Standard/Daylight Time'),
            'Central Pacific'      => array('offset' => '-12', 'time' => 'Standard Time'),
            'Fiji'                 => array('offset' => '-12', 'time' => 'Standard Time'),
            'New Zealand'          => array('offset' => '10', 'time' => 'Standard/Daylight Time')
            );
        
}