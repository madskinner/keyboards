
KeymanWeb.KR(new Keyboard_seb_srr_ajami_arab());

function Keyboard_seb_srr_ajami_arab()
{
  
  this.KI="Keyboard_seb_srr_ajami_arab";
  this.KN="seb_srr_ajami_arab";
  this.KMINVER="9.0";
  this.KV={F:' 1em "Harmattan"',K102:0};
  this.KV.KLS={
    "default": ["ز","1","2","3","4","5","6","7","8","9","0","-","=","","","","ض","ص","ث","ق","ف","غ","ع","ه","خ","ح","ج","د","\\","","","","ش","س","ي","ب","ل","ا","ت","ن","م","ک","ط","","","","","","","ݒ","ٴ","ݖ","ر","گ","ݧ","ࢠ","و","ز","ظ","","","","","",""],
    "shift": ["ـّ","!","@","#","$","٪","^","&","٭","(",")","_","+","","","","ـَ","ـً","ـُ","ـٌ","","","‘","÷","×","؛","<",">","|","","","","ـِ","ـٍ","[","]","۝","","ـ","،","/",":","\"","","","","","","","~","ـْ","﴾","﴿","لآ","آ","’",",",".","؟","","","","","",""],
    "ctrl-alt": ["؀","١","٢","٣","٤","٥","٦","٧","٨","٩","٠","","","","","","ـࣵ","ـࣴ","ـࣷ","ـٗ","","ݝ","“","","ࢢ","","ڃ","","¦","","","","ـࣶ","ـࣹ","ـࣺ","","","","–","—","","ك","","","","","","","","ݕ","","«","»","","","”","٬","٫","ࢣ","","","","","","NBSP"],
    "shift-ctrl-alt": ["","","","","","","•","·","¶","§","°","µ","±","","","","","","","®","¤","fcfa","¢","£","€","¥","","","","","","","","","ى","","","","","","","","\"","","","","","","","","℗","©","","","","","؍","؞","","","","","","","NNBSP"],
    "ctrl": ["","","","","","","","","","","","","","","","","","","","","","","","","","","ESC","GS","FS","","","","","","","","","","","","","","FS","","","","","","","","","","","","","","","","","","","","","",""],
    "shift-ctrl": ["","ZWJ","ZWNJ","LRM","RLM","PDF","LRE","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""]
  };
  this.KV.BK=(function(x){
    var
      empty=Array.apply(null, Array(65)).map(String.prototype.valueOf,""),
      result=[], v, i,
      modifiers=['default','shift','ctrl','shift-ctrl','alt','shift-alt','ctrl-alt','shift-ctrl-alt'];
    for(i=modifiers.length-1;i>=0;i--) {
      v = x[modifiers[i]];
      if(v || result.length > 0) {
        result=(v ? v : empty).slice().concat(result);
      }
    }
    return result;
  })(this.KV.KLS);
  this.KDU=1;
  this.KH='		<div class="container row"> 			<img src="welcome/splash.png" alt="SIL Senegal logo" title="" align="bottom"> 			<div class="container col"> 				<p>&#x00A0;Web help</p> 				<p>&#x00A0;<a href=welcome/welcome.htm#en rel=help target=_new>For help in English follow this link.</a></p> 				<p>&#x00A0;<a href=welcome/welcome.htm#fr rel=help target=_new>Pour obtenir de l\'aide en fran&#x00E7;ais, suivez ce lien.</a></p> 				<p>&#x00A0;<a href=welcome/welcome.htm#pt rel=help target=_new>Para ajuda em portugu&#x00EA;s siga este link.</a></p> 			</div> 		</div> ';
  this.KM=0;
  this.KBVER="0.3.3";
  this.KMBM=0x0070;
  this.KRTL=1;
  this.KVKL={
  "phone": {
    "font": "Harmattan",
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_BKQUOTE",
                "text": "ـّ",
                "layer": "shift"
              },
              {
                "id": "K_Z",
                "text": "ݒ",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_R",
                "text": "ق",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_T",
                "text": "ف",
                "layer": "default"
              },
              {
                "id": "K_Y",
                "text": "ݝ",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_I",
                "text": "ه",
                "layer": "default"
              },
              {
                "id": "K_O",
                "text": "خ",
                "layer": "default"
              },
              {
                "id": "K_LBRKT",
                "text": "ج",
                "layer": "default"
              },
              {
                "id": "K_R",
                "text": "د",
                "layer": "default"
              },
              {
                "id": "K_COLON",
                "text": "ك",
                "layer": "ctrl-alt"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_S",
                "text": "س",
                "pad": "70",
                "layer": "default"
              },
              {
                "id": "K_D",
                "text": "ي",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_F",
                "text": "ب",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_G",
                "text": "ل",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_H",
                "text": "ا",
                "layer": "default"
              },
              {
                "id": "K_J",
                "text": "ت",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_K",
                "text": "ن",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_L",
                "text": "م",
                "layer": "default"
              },
              {
                "id": "K_COLON",
                "text": "ک",
                "layer": "default"
              },
              {
                "id": "T_new_88",
                "text": "",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "sp": "1",
                "nextlayer": "shift",
                "layer": "default"
              },
              {
                "id": "K_X",
                "text": "ـْ",
                "layer": "shift"
              },
              {
                "id": "K_C",
                "text": "ݖ",
                "layer": "default"
              },
              {
                "id": "K_V",
                "text": "ر",
                "layer": "default"
              },
              {
                "id": "K_X",
                "text": "ٴ",
                "layer": "default"
              },
              {
                "id": "K_D",
                "text": "ى",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_N",
                "text": "ݧ",
                "layer": "default"
              },
              {
                "id": "K_COMMA",
                "text": "و",
                "layer": "default"
              },
              {
                "id": "K_B",
                "text": "گ",
                "layer": "default"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "100",
                "sp": "1",
                "layer": "default"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_NUMLOCK",
                "text": "*123*",
                "width": "150",
                "sp": "1",
                "nextlayer": "numeric",
                "layer": "default"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "120",
                "sp": "1",
                "layer": "default"
              },
              {
                "id": "K_SPACE",
                "text": " ",
                "width": "510",
                "sp": "0",
                "layer": "default",
                "sk": [
                  {
                    "text": "NBSP",
                    "id": "K_SPACE",
                    "layer": "ctrl-alt"
                  },
                  {
                    "text": "NNBSP",
                    "id": "K_SPACE",
                    "layer": "shift-ctrl-alt"
                  },
                  {
                    "text": "ZWJ",
                    "id": "K_3",
                    "layer": "shift-ctrl"
                  },
                  {
                    "text": "ZWNJ",
                    "id": "K_4",
                    "layer": "shift-ctrl"
                  }
                ]
              },
              {
                "id": "K_SYMBOLS",
                "text": "§",
                "width": "120",
                "sp": "1",
                "nextlayer": "symbol",
                "layer": "default"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "175",
                "sp": "1",
                "layer": "default"
              }
            ]
          }
        ]
      },
      {
        "id": "shift",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_Q",
                "text": "ـَ",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_W",
                "text": "ـً",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_E",
                "text": "ـُ",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "T_null",
                "text": "",
                "pad": "",
                "sp": "9",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_Q",
                "text": "ـࣵ",
                "nextlayer": "default",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_W",
                "text": "ـࣴ",
                "nextlayer": "default",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_E",
                "text": "ـࣷ",
                "nextlayer": "default",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_R",
                "text": "ـٗ",
                "nextlayer": "default",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_h",
                "text": "μ",
                "width": "100",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "T_null",
                "text": "",
                "sp": "9",
                "nextlayer": "default",
                "layer": "default"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_A",
                "text": "ـِ",
                "pad": "70",
                "layer": "shift"
              },
              {
                "id": "K_S",
                "text": "ـٍ",
                "layer": "shift"
              },
              {
                "id": "K_S",
                "text": "ـࣹ",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_D",
                "text": "ـࣺ",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_J",
                "text": "ـ",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_Y",
                "text": "fcfa",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_SLASH",
                "text": "؟",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_1",
                "text": "!",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "T_null",
                "text": "",
                "sp": "9",
                "layer": "default"
              },
              {
                "id": "T_new_124",
                "text": "",
                "width": "10",
                "sp": "10"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "sp": "2",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_4",
                "text": "$",
                "pad": "",
                "nextlayer": "numeric",
                "layer": "shift",
                "sk": [
                  {
                    "text": "¢",
                    "id": "K_U",
                    "nextlayer": "numeric",
                    "layer": "shift-ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_I",
                "text": "£",
                "nextlayer": "numeric",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_O",
                "text": "€",
                "nextlayer": "numeric",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_P",
                "text": "¥",
                "nextlayer": "numeric",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_N",
                "text": "آ",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_COMMA",
                "text": ",",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_COMMA",
                "text": "،",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_PERIOD",
                "text": ".",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "sp": "1",
                "layer": "default"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_NUMLOCK",
                "text": "*123*",
                "width": "150",
                "sp": "1",
                "nextlayer": "numeric",
                "layer": "default"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "120",
                "sp": "1",
                "layer": "default"
              },
              {
                "id": "K_SPACE",
                "text": " ",
                "width": "510",
                "sp": "0",
                "layer": "default",
                "sk": [
                  {
                    "text": "NBSP",
                    "id": "K_SPACE",
                    "layer": "ctrl-alt"
                  },
                  {
                    "text": "NNBSP",
                    "id": "K_SPACE",
                    "layer": "shift-ctrl-alt"
                  },
                  {
                    "text": "ZWJ",
                    "id": "K_1",
                    "layer": "shift-ctrl"
                  },
                  {
                    "text": "ZWNJ",
                    "id": "K_2",
                    "layer": "shift-ctrl"
                  }
                ]
              },
              {
                "id": "K_SYMBOLS",
                "text": "§",
                "width": "120",
                "sp": "1",
                "nextlayer": "symbol",
                "layer": "default"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "175",
                "sp": "1",
                "layer": "default"
              }
            ]
          }
        ]
      },
      {
        "id": "numeric",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_1",
                "text": "1",
                "layer": "default",
                "sk": [
                  {
                    "text": "١",
                    "id": "K_1",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_2",
                "text": "2",
                "layer": "default",
                "sk": [
                  {
                    "text": "٢",
                    "id": "K_2",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_3",
                "text": "3",
                "layer": "default",
                "sk": [
                  {
                    "text": "٣",
                    "id": "K_3",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_4",
                "text": "4",
                "layer": "default",
                "sk": [
                  {
                    "text": "٤",
                    "id": "K_4",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_5",
                "text": "5",
                "layer": "default",
                "sk": [
                  {
                    "text": "٥",
                    "id": "K_5",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_6",
                "text": "6",
                "layer": "default",
                "sk": [
                  {
                    "text": "٦",
                    "id": "K_6",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_7",
                "text": "7",
                "layer": "default",
                "sk": [
                  {
                    "text": "٧",
                    "id": "K_7",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_8",
                "text": "8",
                "layer": "default",
                "sk": [
                  {
                    "text": "٨",
                    "id": "K_8",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_9",
                "text": "9",
                "layer": "default",
                "sk": [
                  {
                    "text": "٩",
                    "id": "K_9",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_0",
                "text": "0",
                "layer": "default",
                "sk": [
                  {
                    "text": "٠",
                    "id": "K_0",
                    "layer": "ctrl-alt"
                  }
                ]
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_G",
                "text": "۝",
                "pad": "70",
                "nextlayer": "numeric",
                "layer": "shift"
              },
              {
                "id": "K_COMMA",
                "text": "؍",
                "nextlayer": "numeric",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_B",
                "text": "؀",
                "nextlayer": "numeric",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_5",
                "text": "٪",
                "layer": "shift"
              },
              {
                "id": "K_COMMA",
                "text": ",",
                "nextlayer": "numeric",
                "layer": "shift",
                "sk": [
                  {
                    "text": "٬",
                    "id": "K_COMMA",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_PERIOD",
                "text": ".",
                "nextlayer": "numeric",
                "layer": "shift",
                "sk": [
                  {
                    "text": "٫",
                    "id": "K_P",
                    "layer": "ctrl-alt"
                  }
                ]
              },
              {
                "id": "K_EQUAL",
                "text": "=",
                "layer": "default",
                "sk": [
                  {
                    "text": "~",
                    "id": "K_Z",
                    "layer": "shift"
                  }
                ]
              },
              {
                "id": "K_BKSLASH",
                "text": "|",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_BKSLASH",
                "text": "\\",
                "width": "100",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "T_null",
                "text": "",
                "width": "10",
                "sp": "10",
                "layer": "default"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "",
                "sp": "1",
                "nextlayer": "shift",
                "layer": "default"
              },
              {
                "id": "K_D",
                "text": "[",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_F",
                "text": "]",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_C",
                "text": "﴾",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_V",
                "text": "﴿",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_EQUAL",
                "text": "+",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_HYPHEN",
                "text": "-",
                "nextlayer": "default",
                "layer": "default",
                "sk": [
                  {
                    "text": "–",
                    "id": "T_en_dash",
                    "nextlayer": "default",
                    "layer": "default"
                  },
                  {
                    "text": "—",
                    "id": "T_em_dash",
                    "nextlayer": "default",
                    "layer": "default"
                  }
                ]
              },
              {
                "id": "K_8",
                "text": "٭",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_L",
                "text": "/",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "",
                "sp": "1",
                "layer": "default"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_LOWER",
                "text": "*abc*",
                "width": "150",
                "sp": "1",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "120",
                "sp": "1"
              },
              {
                "id": "K_SPACE",
                "text": " ",
                "width": "510",
                "sp": "0",
                "layer": "default",
                "sk": [
                  {
                    "text": "NBSP",
                    "id": "K_SPACE",
                    "layer": "ctrl-alt"
                  },
                  {
                    "text": "NNBSP",
                    "id": "K_SPACE",
                    "layer": "shift-ctrl-alt"
                  },
                  {
                    "text": "ZWJ",
                    "id": "K_1",
                    "layer": "shift-ctrl"
                  },
                  {
                    "text": "ZWNJ",
                    "id": "K_2",
                    "layer": "shift-ctrl"
                  }
                ]
              },
              {
                "id": "K_SYMBOLS",
                "text": "§",
                "width": "120",
                "sp": "1",
                "nextlayer": "symbol",
                "layer": "default"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "175",
                "sp": "1",
                "layer": "default"
              }
            ]
          }
        ]
      },
      {
        "id": "symbol",
        "row": [
          {
            "id": 1,
            "key": [
              {
                "id": "K_3",
                "text": "LRM",
                "pad": "",
                "nextlayer": "default",
                "layer": "shift-ctrl"
              },
              {
                "id": "K_3",
                "text": "LRE",
                "nextlayer": "default",
                "layer": "shift-ctrl"
              },
              {
                "id": "K_4",
                "text": "RLM",
                "nextlayer": "default",
                "layer": "shift-ctrl"
              },
              {
                "id": "K_R",
                "text": "®",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_6",
                "text": "•",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_7",
                "text": "·",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_4",
                "text": "PDF",
                "nextlayer": "default",
                "layer": "shift-ctrl"
              },
              {
                "id": "K_QUOTE",
                "text": "\"",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_LBRKT",
                "text": "<",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_RBRKT",
                "text": ">",
                "nextlayer": "default",
                "layer": "shift"
              }
            ]
          },
          {
            "id": 2,
            "key": [
              {
                "id": "K_C",
                "text": "«",
                "pad": "70",
                "nextlayer": "default",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_V",
                "text": "»",
                "pad": "",
                "nextlayer": "default",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_U",
                "text": "“",
                "nextlayer": "default",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_M",
                "text": "”",
                "nextlayer": "default",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_E",
                "text": "±",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_8",
                "text": "¶",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_9",
                "text": "§",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_BKSLASH",
                "text": "¦",
                "nextlayer": "default",
                "layer": "ctrl-alt"
              },
              {
                "id": "K_0",
                "text": "°",
                "width": "100",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "T_null",
                "text": "",
                "width": "10",
                "sp": "10",
                "layer": "default"
              }
            ]
          },
          {
            "id": 3,
            "key": [
              {
                "id": "K_SHIFT",
                "text": "*Shift*",
                "width": "",
                "sp": "1",
                "nextlayer": "shift",
                "layer": "default"
              },
              {
                "id": "K_U",
                "text": "‘",
                "pad": "",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_X",
                "text": "℗",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_C",
                "text": "©",
                "nextlayer": "default",
                "layer": "shift-ctrl-alt"
              },
              {
                "id": "K_M",
                "text": "’",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_O",
                "text": "×",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_I",
                "text": "÷",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_P",
                "text": "؛",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_COLON",
                "text": ":",
                "nextlayer": "default",
                "layer": "shift"
              },
              {
                "id": "K_BKSP",
                "text": "*BkSp*",
                "width": "",
                "sp": "1",
                "layer": "default"
              }
            ]
          },
          {
            "id": 4,
            "key": [
              {
                "id": "K_NUMLOCK",
                "text": "*123*",
                "width": "150",
                "sp": "1",
                "nextlayer": "numeric",
                "layer": "default"
              },
              {
                "id": "K_LOPT",
                "text": "*Menu*",
                "width": "120",
                "sp": "1",
                "layer": "default"
              },
              {
                "id": "K_SPACE",
                "text": " ",
                "width": "510",
                "sp": "0",
                "layer": "default",
                "sk": [
                  {
                    "text": "NBSP",
                    "id": "K_SPACE",
                    "nextlayer": "default",
                    "layer": "ctrl-alt"
                  },
                  {
                    "text": "NNBSP",
                    "id": "K_SPACE",
                    "nextlayer": "default",
                    "layer": "shift-ctrl-alt"
                  },
                  {
                    "text": "ZWJ",
                    "id": "K_1",
                    "nextlayer": "default",
                    "layer": "shift-ctrl"
                  },
                  {
                    "text": "ZWNJ",
                    "id": "K_2",
                    "nextlayer": "default",
                    "layer": "shift-ctrl"
                  }
                ]
              },
              {
                "id": "K_LOWER",
                "text": "*abc*",
                "width": "120",
                "sp": "1",
                "nextlayer": "default",
                "layer": "default"
              },
              {
                "id": "K_ENTER",
                "text": "*Enter*",
                "width": "175",
                "sp": "1",
                "layer": "default"
              }
            ]
          }
        ]
      }
    ],
    "fontsize": "1em",
    "displayUnderlying": false
  }
}
;
  this.s_isLRE=KeymanWeb.KLOAD(this.KI,"isLRE","0");
  this.s_LRE="‪";
  this.s_RLE="‫";
  this.s_PDF="‬";
  this.s_LRM="‎";
  this.s_RLM="‏";
  this.s28="touch";
  this.s29="web";
  this.s33="windows";
  this.s34="linux";
  this.s35="macos";
  this.s36="android";
  this.s40="0";
  this.s41="1";
  this.s42="0";
  this.s43="0";
  this.s44="1";
  this.s45="0";
  this.s46="0";
  this.s47="1";
  this.s48="1";
  this.s49="0";
  this.s50="1";
  this.s51="0";
  this.s52="1";
  this.s53="1";
  this.s54="0";
  this.s55="1";
  this.s56="0";
  this.s57="0";
  this.s58="1";
  this.s59="0";
  this.s60="0";
  this.s61="1";
  this.s62="1";
  this.s63="0";
  this.s64="1";
  this.s65="0";
  this.s66="1";
  this.s67="1";
  this.s68="0";
  this.s69="1";
  this.s70="0";
  this.s71="0";
  this.s72="1";
  this.s73="1";
  this.s74="0";
  this.s75="1";
  this.s76="0";
  this.s77="1";
  this.s78="1";
  this.s79="0";
  this.s80="1";
  this.s81="1";
  this.s82="0";
  this.s83="1";
  this.s84="0";
  this.s85="1";
  this.s86="1";
  this.s87="0";
  this.s88="1";
  this.s89="1";
  this.s90="0";
  this.s91="1";
  this.s92="0";
  this.s93="1";
  this.s94="1";
  this.s95="0";
  this.s96="1";
  this.s97="0";
  this.s98="1";
  this.s99="1";
  this.s100="0";
  this.s101="1";
  this.s102="0";
  this.s103="0";
  this.s104="1";
  this.s105="1";
  this.s106="0";
  this.s107="1";
  this.s108="0";
  this.s109="1";
  this.s110="1";
  this.s111="0";
  this.s112="1";
  this.s113="1";
  this.s114="0";
  this.s115="1";
  this.s116="1";
  this.s117="0";
  this.s118="1";
  this.s119="1";
  this.s120="0";
  this.s121="1";
  this.s122="1";
  this.s123="0";
  this.s124="1";
  this.s125="1";
  this.s126="0";
  this.s127="1";
  this.s128="1";
  this.s129="0";
  this.s130="1";
  this.s131="0";
  this.s132="0";
  this.s133="1";
  this.s134="1";
  this.s135="0";
  this.s136="1";
  this.s137="1";
  this.s138="1";
  this.s139="0";
  this.s140="1";
  this.s141="0";
  this.s142="0";
  this.s143="1";
  this.s144="1";
  this.s145="0";
  this.s146="1";
  this.s147="0";
  this.s148="0";
  this.s149="1";
  this.s150="0";
  this.s151="0";
  this.s152="1";
  this.s153="0";
  this.s154="0";
  this.s155="1";
  this.s156="0";
  this.s157="0";
  this.s158="1";
  this.s159="0";
  this.s160="0";
  this.s161="1";
  this.s162="0";
  this.s163="0";
  this.s164="1";
  this.s165="0";
  this.s166="0";
  this.s167="1";
  this.s168="0";
  this.s169="0";
  this.s170="1";
  this.s171="0";
  this.s172="0";
  this.s173="1";
  this.s174="0";
  this.s175="0";
  this.s176="1";
  this.s177="0";
  this.s178="0";
  this.s179="1";
  this.s180="0";
  this.s181="0";
  this.s182="1";
  this.s183="0";
  this.s184="0";
  this.s185="1";
  this.s186="0";
  this.s187="0";
  this.s188="1";
  this.s189="0";
  this.s190="0";
  this.s191="1";
  this.s192="1";
  this.s193="0";
  this.s194="1";
  this.s195="0";
  this.s196="0";
  this.s197="1";
  this.s198="0";
  this.s199="0";
  this.s200="1";
  this.s201="0";
  this.s202="0";
  this.s203="1";
  this.s204="0";
  this.s205="0";
  this.s206="1";
  this.s207="0";
  this.s208="0";
  this.s209="1";
  this.s210="0";
  this.s211="0";
  this.s212="1";
  this.s213="0";
  this.s214="0";
  this.s215="1";
  this.s216="0";
  this.s217="0";
  this.s218="1";
  this.s219="1";
  this.s220="0";
  this.s221="1";
  this.s222="0";
  this.s223="0";
  this.s224="1";
  this.s225="0";
  this.s226="0";
  this.s227="1";
  this.s228="1";
  this.s229="0";
  this.s230="0";
  this.s231="1";
  this.s232="0";
  this.s233="0";
  this.s234="1";
  this.s235="0";
  this.s236="0";
  this.s237="1";
  this.s238="0";
  this.s239="1";
  this.s240="0";
  this.s241="0";
  this.s242="1";
  this.s243="0";
  this.s244="1";
  this.s245="0";
  this.s246="0";
  this.s247="1";
  this.s248="0";
  this.s249="0";
  this.s250="1";
  this.s251="0";
  this.s252="1";
  this.s253="0";
  this.s254="0";
  this.s255="1";
  this.s256="0";
  this.s257="0";
  this.s258="1";
  this.s259="0";
  this.s260="0";
  this.s261="1";
  this.s262="0";
  this.s263="0";
  this.s264="1";
  this.s265="0";
  this.s266="0";
  this.s267="1";
  this.s268="0";
  this.s269="0";
  this.s270="1";
  this.s271="0";
  this.s272="0";
  this.s273="1";
  this.s274="0";
  this.s275="0";
  this.s276="1";
  this.s277="0";
  this.s278="0";
  this.s279="1";
  this.s280="0";
  this.s281="0";
  this.s282="1";
  this.s283="0";
  this.s284="0";
  this.s285="1";
  this.s286="0";
  this.s287="0";
  this.s288="1";
  this.s289="0";
  this.s290="0";
  this.s291="1";
  this.s292="1";
  this.s293="0";
  this.s294="1";
  this.s295="0";
  this.s296="0";
  this.s297="1";
  this.s298="0";
  this.s299="0";
  this.s300="1";
  this.s301="0";
  this.s302="0";
  this.s303="1";
  this.s304="0";
  this.s305="0";
  this.s306="1";
  this.s307="0";
  this.s308="0";
  this.s309="1";
  this.s310="0";
  this.s311="0";
  this.s312="1";
  this.s313="0";
  this.s314="0";
  this.s315="1";
  this.s316="0";
  this.s317="0";
  this.s318="0";
  this.s319="0";
  this.s320="0";
  this.s321="1";
  this.s322="0";
  this.s323="0";
  this.s324="1";
  this.s325="0";
  this.s326="0";
  this.s327="1";
  this.s328="0";
  this.s329="0";
  this.s330="1";
  this.s331="0";
  this.s332="0";
  this.s333="1";
  this.s334="0";
  this.s335="0";
  this.s336="1";
  this.s337="0";
  this.s338="0";
  this.s339="1";
  this.s340="0";
  this.s341="0";
  this.s342="1";
  this.s343="0";
  this.s344="0";
  this.s345="1";
  this.s346="0";
  this.s347="0";
  this.s348="1";
  this.s349="0";
  this.s350="0";
  this.s351="1";
  this.s352="0";
  this.s353="0";
  this.s354="1";
  this.s355="0";
  this.s356="0";
  this.s357="1";
  this.s358="0";
  this.s359="0";
  this.s360="1";
  this.s361="0";
  this.s362="0";
  this.s363="0";
  this.s364="0";
  this.s365="0";
  this.s366="1";
  this.s367="0";
  this.s368="0";
  this.s369="1";
  this.s370="0";
  this.s371="0";
  this.s372="1";
  this.s373="0";
  this.s374="0";
  this.s375="1";
  this.s376="0";
  this.s377="1";
  this.s378="0";
  this.s379="0";
  this.s380="1";
  this.s381="0";
  this.s382="0";
  this.s383="1";
  this.s384="0";
  this.s385="0";
  this.s386="1";
  this.s387="0";
  this.s388="0";
  this.s389="1";
  this.s390="0";
  this.s391="0";
  this.s392="1";
  this.s393="0";
  this.s394="0";
  this.s395="1";
  this.s396="0";
  this.s397="0";
  this.s398="1";
  this.s399="0";
  this.s400="0";
  this.s401="1";
  this.s402="0";
  this.s403="0";
  this.s404="1";
  this.s405="0";
  this.s406="0";
  this.s407="1";
  this.s408="0";
  this.s409="0";
  this.s410="1";
  this.s411="0";
  this.s412="1";
  this.s413="0";
  this.s414="0";
  this.s415="1";
  this.s416="0";
  this.s417="1";
  this.s418="0";
  this.s419="0";
  this.s420="1";
  this.s421="0";
  this.s422="1";
  this.s423="0";
  this.s424="0";
  this.s425="1";
  this.s426="0";
  this.s427="1";
  this.s428="0";
  this.s429="1";
  this.s430="0";
  this.s431="0";
  this.s432="1";
  this.s433="0";
  this.KVER="13.0.106.0";
  this.gs=function(t,e) {
    return this.g_main(t,e);
  };
  this.g_main=function(t,e) {
    var k=KeymanWeb,r=1,m=0;
      if(k.KIFS(31,this.s28,t)){
        m=1;   // Line 15
        r=this.g_touch(t,e);
      }
      else if(k.KIFS(31,this.s29,t)){
        m=1;   // Line 16
        r=this.g_web(t,e);
      }
    if(!m) {
    
      r=this.g_hardware(t,e);
    }
    return r;
  };
  this.g_web=function(t,e) {
    var k=KeymanWeb,r=1,m=0;
    if(!m) {
    
      r=this.g_SNARAB(t,e);
    }
    return r;
  };
  this.g_touch=function(t,e) {
    var k=KeymanWeb,r=1,m=0;
    if(!m) {
    
      r=this.g_SNARAB(t,e);
    }
    return r;
  };
  this.g_hardware=function(t,e) {
    var k=KeymanWeb,r=1,m=0;
      if(k.KIFS(31,this.s33,t)){
        m=1;   // Line 27
        r=this.g_SNARAB(t,e);
      }
      else if(k.KIFS(31,this.s34,t)){
        m=1;   // Line 28
        r=this.g_linux(t,e);
      }
      else if(k.KIFS(31,this.s35,t)){
        m=1;   // Line 29
        r=this.g_macos(t,e);
      }
      else if(k.KIFS(31,this.s36,t)){
        m=1;   // Line 30
        r=this.g_android(t,e);
      }
    return r;
  };
  this.g_linux=function(t,e) {
    var k=KeymanWeb,r=1,m=0;
    if(!m) {
    
      r=this.g_SNARAB(t,e);
    }
    return r;
  };
  this.g_macos=function(t,e) {
    var k=KeymanWeb,r=1,m=0;
    if(!m) {
    
      r=this.g_SNARAB(t,e);
    }
    return r;
  };
  this.g_android=function(t,e) {
    var k=KeymanWeb,r=1,m=0;
    if(!m) {
    
      r=this.g_SNARAB(t,e);
    }
    return r;
  };
  this.g_SNARAB=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0xE2)) {
      if(1){
        r=m=1;   // Line 327
        k.KO(0,t,"\\");
      }
    }
    else if(k.KKM(e, 0x4010, 0xE2)) {
      if(1){
        r=m=1;   // Line 328
        k.KO(0,t,"|");
      }
    }
    else if(k.KKM(e, 0x4000, 0x6E)) {
      if(1){
        r=m=1;   // Line 438
        k.KO(0,t,".");
      }
    }
    else if(k.KKM(e, 0x4010, 0x6E)) {
      if(1){
        r=m=1;   // Line 439
        k.KO(0,t,"٫");
      }
    }
    else if(k.KKM(e, 0x4000, 0x20)) {
      if(this.s_isLRE===this.s400&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 400
        k.KO(1,t,".‏ ");
      }
      else if(this.s_isLRE===this.s401&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 401
        k.KO(1,t,"‬‏. ");
        this.s_isLRE=this.s402;
      }
      else if(this.s_isLRE===this.s416&&k.KCM(1,t," ",1)){
        r=m=1;   // Line 417
        k.KO(1,t,"  ");
      }
      else if(this.s_isLRE===this.s417&&k.KCM(1,t," ",1)){
        r=m=1;   // Line 418
        k.KO(1,t,"‬‏ ");
        this.s_isLRE=this.s418;
      }
      else if(this.s_isLRE===this.s414){
        r=m=1;   // Line 415
        k.KO(0,t," ");
      }
      else if(this.s_isLRE===this.s415){
        r=m=1;   // Line 416
        k.KO(0,t," ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x20)) {
      if(this.s_isLRE===this.s403&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 403
        k.KO(1,t,".‏ ");
      }
      else if(this.s_isLRE===this.s404&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 404
        k.KO(1,t,"‬‏.‏ ");
        this.s_isLRE=this.s405;
      }
      else if(this.s_isLRE===this.s421&&k.KCM(1,t," ",1)){
        r=m=1;   // Line 422
        k.KO(1,t," ");
      }
      else if(this.s_isLRE===this.s422&&k.KCM(1,t," ",1)){
        r=m=1;   // Line 423
        k.KO(1,t,"‬‏ ");
        this.s_isLRE=this.s423;
      }
      else if(this.s_isLRE===this.s419){
        r=m=1;   // Line 420
        k.KO(0,t," ");
      }
      else if(this.s_isLRE===this.s420){
        r=m=1;   // Line 421
        k.KO(0,t," ");
      }
    }
    else if(k.KKM(e, 0x4020, 0x20)) {
      if(this.s_isLRE===this.s406&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 406
        k.KO(1,t,".‏ ");
      }
      else if(this.s_isLRE===this.s407&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 407
        k.KO(1,t,"‬‏.‏ ");
        this.s_isLRE=this.s408;
      }
      else if(this.s_isLRE===this.s424){
        r=m=1;   // Line 425
        k.KO(0,t," ");
      }
      else if(this.s_isLRE===this.s425){
        r=m=1;   // Line 426
        k.KO(0,t," ");
      }
    }
    else if(k.KKM(e, 0x4060, 0x20)) {
      if(this.s_isLRE===this.s409&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 409
        k.KO(1,t,".‏ ");
      }
      else if(this.s_isLRE===this.s410&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 410
        k.KO(1,t,"‬‏.‏ ");
      }
      else if(this.s_isLRE===this.s428){
        r=m=1;   // Line 431
        k.KO(0,t," ");
      }
      else if(this.s_isLRE===this.s429){
        r=m=1;   // Line 432
        k.KO(0,t,"‬‏ ");
        this.s_isLRE=this.s430;
      }
    }
    else if(k.KKM(e, 0x4070, 0x20)) {
      if(this.s_isLRE===this.s411&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 412
        k.KO(1,t,".‏ ");
      }
      else if(this.s_isLRE===this.s412&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 413
        k.KO(1,t,"‬‏.‏ ");
        this.s_isLRE=this.s413;
      }
      else if(this.s_isLRE===this.s431){
        r=m=1;   // Line 434
        k.KO(0,t," ");
      }
      else if(this.s_isLRE===this.s432){
        r=m=1;   // Line 435
        k.KO(0,t,"‬‏ ");
        this.s_isLRE=this.s433;
      }
    }
    else if(k.KKM(e, 0x4030, 0x20)) {
      if(this.s_isLRE===this.s426){
        r=m=1;   // Line 428
        k.KO(0,t," ");
      }
      else if(this.s_isLRE===this.s427){
        r=m=1;   // Line 429
        k.KO(0,t," ");
      }
    }
    else if(k.KKM(e, 0x4010, 0x31)) {
      if(this.s_isLRE===this.s54){
        r=m=1;   // Line 63
        k.KO(0,t,"!");
      }
      else if(this.s_isLRE===this.s55){
        r=m=1;   // Line 64
        k.KO(0,t,"‬‏!");
        this.s_isLRE=this.s56;
      }
    }
    else if(k.KKM(e, 0x4030, 0x31)) {
      if(this.s_isLRE===this.s57){
        r=m=1;   // Line 65
        k.KO(0,t,"‍");
      }
      else if(this.s_isLRE===this.s58){
        r=m=1;   // Line 66
        k.KO(0,t,"‬‏‍");
        this.s_isLRE=this.s59;
      }
    }
    else if(k.KKM(e, 0x4010, 0xDE)) {
      if(1){
        r=m=1;   // Line 325
        k.KO(0,t,"\"");
      }
    }
    else if(k.KKM(e, 0x4010, 0x33)) {
      if(1){
        r=m=1;   // Line 83
        k.KO(0,t,"#");
      }
    }
    else if(k.KKM(e, 0x4030, 0x33)) {
      if(1){
        r=m=1;   // Line 84
        k.KO(0,t,"‎");
      }
    }
    else if(k.KKM(e, 0x4010, 0x34)) {
      if(this.s_isLRE===this.s87){
        r=m=1;   // Line 92
        k.KO(0,t,"‪$");
        this.s_isLRE=this.s88;
      }
      else if(this.s_isLRE===this.s89){
        r=m=1;   // Line 93
        k.KO(0,t,"$‬‏");
        this.s_isLRE=this.s90;
      }
    }
    else if(k.KKM(e, 0x4030, 0x34)) {
      if(1){
        r=m=1;   // Line 94
        k.KO(0,t,"‏");
        this.s_isLRE=this.s91;
      }
    }
    else if(k.KKM(e, 0x4010, 0x35)) {
      if(this.s_isLRE===this.s100){
        r=m=1;   // Line 102
        k.KO(0,t,"٪");
      }
      else if(this.s_isLRE===this.s101){
        r=m=1;   // Line 103
        k.KO(0,t,"٪‬‏");
        this.s_isLRE=this.s102;
      }
    }
    else if(k.KKM(e, 0x4010, 0x37)) {
      if(1){
        r=m=1;   // Line 118
        k.KO(0,t,"&");
      }
    }
    else if(k.KKM(e, 0x4070, 0x37)) {
      if(1){
        r=m=1;   // Line 121
        k.KO(0,t,"·");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDE)) {
      if(this.s_isLRE===this.s317){
        r=m=1;   // Line 323
        k.KO(0,t,"ط");
      }
      else if(this.s_isLRE===this.s318){
        r=m=1;   // Line 324
        k.KO(0,t,"‬‏ط");
        this.s_isLRE=this.s319;
      }
    }
    else if(k.KKM(e, 0x4010, 0x39)) {
      if(this.s_isLRE===this.s129){
        r=m=1;   // Line 132
        k.KO(0,t,")");
      }
      else if(this.s_isLRE===this.s130){
        r=m=1;   // Line 133
        k.KO(0,t,"‬‏)");
        this.s_isLRE=this.s131;
      }
    }
    else if(k.KKM(e, 0x4070, 0x39)) {
      if(1){
        r=m=1;   // Line 136
        k.KO(0,t,"§");
      }
    }
    else if(k.KKM(e, 0x4010, 0x30)) {
      if(this.s_isLRE===this.s139){
        r=m=1;   // Line 142
        k.KO(0,t,"(");
      }
      else if(this.s_isLRE===this.s140){
        r=m=1;   // Line 143
        k.KO(0,t,"‬‏(");
        this.s_isLRE=this.s141;
      }
    }
    else if(k.KKM(e, 0x4070, 0x30)) {
      if(this.s_isLRE===this.s145){
        r=m=1;   // Line 147
        k.KO(0,t,"°‏");
      }
      else if(this.s_isLRE===this.s146){
        r=m=1;   // Line 148
        k.KO(0,t,"°‬‏");
        this.s_isLRE=this.s147;
      }
    }
    else if(k.KKM(e, 0x4010, 0x38)) {
      if(1){
        r=m=1;   // Line 125
        k.KO(0,t,"٭");
      }
    }
    else if(k.KKM(e, 0x4070, 0x38)) {
      if(1){
        r=m=1;   // Line 128
        k.KO(0,t,"¶");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBB)) {
      if(1){
        r=m=1;   // Line 158
        k.KO(0,t,"+");
      }
    }
    else if(k.KKM(e, 0x4070, 0xBB)) {
      if(1){
        r=m=1;   // Line 159
        k.KO(0,t,"±");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBC)) {
      if(this.s_isLRE===this.s371){
        r=m=1;   // Line 375
        k.KO(0,t,"و");
      }
      else if(this.s_isLRE===this.s372){
        r=m=1;   // Line 376
        k.KO(0,t,"‬‏و");
        this.s_isLRE=this.s373;
      }
    }
    else if(k.KKM(e, 0x4060, 0xBC)) {
      if(this.s_isLRE===this.s376){
        r=m=1;   // Line 379
        k.KO(0,t,"٬");
      }
      else if(this.s_isLRE===this.s377){
        r=m=1;   // Line 380
        k.KO(0,t,"‬‏٬");
        this.s_isLRE=this.s378;
      }
    }
    else if(k.KKM(e, 0x4000, 0xBD)) {
      if(1){
        r=m=1;   // Line 150
        k.KO(0,t,"-");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBE)) {
      if(this.s_isLRE===this.s382){
        r=m=1;   // Line 384
        k.KO(0,t,"ز");
      }
      else if(this.s_isLRE===this.s383){
        r=m=1;   // Line 385
        k.KO(0,t,"‬‏ز");
        this.s_isLRE=this.s384;
      }
    }
    else if(k.KKM(e, 0x4060, 0xBE)) {
      if(this.s_isLRE===this.s385){
        r=m=1;   // Line 387
        k.KO(0,t,"٫");
      }
      else if(this.s_isLRE===this.s386){
        r=m=1;   // Line 388
        k.KO(0,t,"‬‏٫");
        this.s_isLRE=this.s387;
      }
    }
    else if(k.KKM(e, 0x4000, 0xBF)) {
      if(this.s_isLRE===this.s391){
        r=m=1;   // Line 392
        k.KO(0,t,"ظ");
      }
      else if(this.s_isLRE===this.s392){
        r=m=1;   // Line 393
        k.KO(0,t,"‬‏ظ");
        this.s_isLRE=this.s393;
      }
    }
    else if(k.KKM(e, 0x4060, 0xBF)) {
      if(this.s_isLRE===this.s397){
        r=m=1;   // Line 396
        k.KO(0,t,"ࢣ");
      }
      else if(this.s_isLRE===this.s398){
        r=m=1;   // Line 397
        k.KO(0,t,"‬‏ࢣ");
        this.s_isLRE=this.s399;
      }
    }
    else if(k.KKM(e, 0x4000, 0x30)) {
      if(this.s_isLRE===this.s138&&k.KCM(1,t,".",1)){
        r=m=1;   // Line 140
        k.KO(1,t,".0");
      }
      else if(this.s_isLRE===this.s135){
        r=m=1;   // Line 138
        k.KO(0,t,"‪0");
        this.s_isLRE=this.s136;
      }
      else if(this.s_isLRE===this.s137){
        r=m=1;   // Line 139
        k.KO(0,t,"0");
      }
    }
    else if(k.KKM(e, 0x4060, 0x30)) {
      if(this.s_isLRE===this.s142){
        r=m=1;   // Line 144
        k.KO(0,t,"‪٠");
        this.s_isLRE=this.s143;
      }
      else if(this.s_isLRE===this.s144){
        r=m=1;   // Line 145
        k.KO(0,t,"٠");
      }
    }
    else if(k.KKM(e, 0x4000, 0x31)) {
      if(this.s_isLRE===this.s51&&k.KCM(1,t,"+",1)){
        r=m=1;   // Line 61
        k.KO(1,t,"‪+1");
        this.s_isLRE=this.s52;
      }
      else if(this.s_isLRE===this.s49){
        r=m=1;   // Line 60
        k.KO(0,t,"‪1");
        this.s_isLRE=this.s50;
      }
      else if(this.s_isLRE===this.s53){
        r=m=1;   // Line 62
        k.KO(0,t,"1");
      }
    }
    else if(k.KKM(e, 0x4060, 0x31)) {
      if(this.s_isLRE===this.s60){
        r=m=1;   // Line 67
        k.KO(0,t,"‪١");
        this.s_isLRE=this.s61;
      }
      else if(this.s_isLRE===this.s62){
        r=m=1;   // Line 68
        k.KO(0,t,"١");
      }
    }
    else if(k.KKM(e, 0x4000, 0x32)) {
      if(this.s_isLRE===this.s65&&k.KCM(1,t,"+",1)){
        r=m=1;   // Line 71
        k.KO(1,t,"‪+2");
        this.s_isLRE=this.s66;
      }
      else if(this.s_isLRE===this.s63){
        r=m=1;   // Line 70
        k.KO(0,t,"‪2");
        this.s_isLRE=this.s64;
      }
      else if(this.s_isLRE===this.s67){
        r=m=1;   // Line 72
        k.KO(0,t,"2");
      }
    }
    else if(k.KKM(e, 0x4060, 0x32)) {
      if(this.s_isLRE===this.s71){
        r=m=1;   // Line 76
        k.KO(0,t,"‪٢");
        this.s_isLRE=this.s72;
      }
      else if(this.s_isLRE===this.s73){
        r=m=1;   // Line 77
        k.KO(0,t,"٢");
      }
    }
    else if(k.KKM(e, 0x4000, 0x33)) {
      if(this.s_isLRE===this.s76&&k.KCM(1,t,"+",1)){
        r=m=1;   // Line 80
        k.KO(1,t,"‪+3");
        this.s_isLRE=this.s77;
      }
      else if(this.s_isLRE===this.s74){
        r=m=1;   // Line 79
        k.KO(0,t,"‪3");
        this.s_isLRE=this.s75;
      }
      else if(this.s_isLRE===this.s78){
        r=m=1;   // Line 81
        k.KO(0,t,"3");
      }
    }
    else if(k.KKM(e, 0x4060, 0x33)) {
      if(this.s_isLRE===this.s79){
        r=m=1;   // Line 85
        k.KO(0,t,"‪٣");
        this.s_isLRE=this.s80;
      }
      else if(this.s_isLRE===this.s81){
        r=m=1;   // Line 86
        k.KO(0,t,"٣");
      }
    }
    else if(k.KKM(e, 0x4000, 0x34)) {
      if(this.s_isLRE===this.s84&&k.KCM(1,t,"+",1)){
        r=m=1;   // Line 89
        k.KO(1,t,"‪+4");
        this.s_isLRE=this.s85;
      }
      else if(this.s_isLRE===this.s82){
        r=m=1;   // Line 88
        k.KO(0,t,"‪4");
        this.s_isLRE=this.s83;
      }
      else if(this.s_isLRE===this.s86){
        r=m=1;   // Line 90
        k.KO(0,t,"4");
      }
    }
    else if(k.KKM(e, 0x4060, 0x34)) {
      if(this.s_isLRE===this.s92){
        r=m=1;   // Line 96
        k.KO(0,t,"‪٤");
        this.s_isLRE=this.s93;
      }
      else if(this.s_isLRE===this.s94){
        r=m=1;   // Line 97
        k.KO(0,t,"٤");
      }
    }
    else if(k.KKM(e, 0x4000, 0x35)) {
      if(this.s_isLRE===this.s97&&k.KCM(1,t,"+",1)){
        r=m=1;   // Line 100
        k.KO(1,t,"‪+5");
        this.s_isLRE=this.s98;
      }
      else if(this.s_isLRE===this.s95){
        r=m=1;   // Line 99
        k.KO(0,t,"‪5");
        this.s_isLRE=this.s96;
      }
      else if(this.s_isLRE===this.s99){
        r=m=1;   // Line 101
        k.KO(0,t,"5");
      }
    }
    else if(k.KKM(e, 0x4060, 0x35)) {
      if(this.s_isLRE===this.s103){
        r=m=1;   // Line 104
        k.KO(0,t,"‪٥");
        this.s_isLRE=this.s104;
      }
      else if(this.s_isLRE===this.s105){
        r=m=1;   // Line 105
        k.KO(0,t,"٥");
      }
    }
    else if(k.KKM(e, 0x4000, 0x36)) {
      if(this.s_isLRE===this.s108&&k.KCM(1,t,"+",1)){
        r=m=1;   // Line 108
        k.KO(1,t,"‪+6");
        this.s_isLRE=this.s109;
      }
      else if(this.s_isLRE===this.s106){
        r=m=1;   // Line 107
        k.KO(0,t,"‪6");
        this.s_isLRE=this.s107;
      }
      else if(this.s_isLRE===this.s110){
        r=m=1;   // Line 109
        k.KO(0,t,"6");
      }
    }
    else if(k.KKM(e, 0x4060, 0x36)) {
      if(this.s_isLRE===this.s111){
        r=m=1;   // Line 112
        k.KO(0,t,"‪٦");
        this.s_isLRE=this.s112;
      }
      else if(this.s_isLRE===this.s113){
        r=m=1;   // Line 113
        k.KO(0,t,"٦");
      }
    }
    else if(k.KKM(e, 0x4000, 0x37)) {
      if(this.s_isLRE===this.s114){
        r=m=1;   // Line 116
        k.KO(0,t,"‪7");
        this.s_isLRE=this.s115;
      }
      else if(this.s_isLRE===this.s116){
        r=m=1;   // Line 117
        k.KO(0,t,"7");
      }
    }
    else if(k.KKM(e, 0x4060, 0x37)) {
      if(this.s_isLRE===this.s117){
        r=m=1;   // Line 119
        k.KO(0,t,"‪٧");
        this.s_isLRE=this.s118;
      }
      else if(this.s_isLRE===this.s119){
        r=m=1;   // Line 120
        k.KO(0,t,"٧");
      }
    }
    else if(k.KKM(e, 0x4000, 0x38)) {
      if(this.s_isLRE===this.s120){
        r=m=1;   // Line 123
        k.KO(0,t,"‪8");
        this.s_isLRE=this.s121;
      }
      else if(this.s_isLRE===this.s122){
        r=m=1;   // Line 124
        k.KO(0,t,"8");
      }
    }
    else if(k.KKM(e, 0x4060, 0x38)) {
      if(this.s_isLRE===this.s123){
        r=m=1;   // Line 126
        k.KO(0,t,"‪٨");
        this.s_isLRE=this.s124;
      }
      else if(this.s_isLRE===this.s125){
        r=m=1;   // Line 127
        k.KO(0,t,"٨");
      }
    }
    else if(k.KKM(e, 0x4000, 0x39)) {
      if(this.s_isLRE===this.s126){
        r=m=1;   // Line 130
        k.KO(0,t,"‪9");
        this.s_isLRE=this.s127;
      }
      else if(this.s_isLRE===this.s128){
        r=m=1;   // Line 131
        k.KO(0,t,"9");
      }
    }
    else if(k.KKM(e, 0x4060, 0x39)) {
      if(this.s_isLRE===this.s132){
        r=m=1;   // Line 134
        k.KO(0,t,"‪٩");
        this.s_isLRE=this.s133;
      }
      else if(this.s_isLRE===this.s134){
        r=m=1;   // Line 135
        k.KO(0,t,"٩");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBA)) {
      if(1){
        r=m=1;   // Line 319
        k.KO(0,t,":");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBA)) {
      if(this.s_isLRE===this.s311){
        r=m=1;   // Line 317
        k.KO(0,t,"ک");
      }
      else if(this.s_isLRE===this.s312){
        r=m=1;   // Line 318
        k.KO(0,t,"‬‏ک");
        this.s_isLRE=this.s313;
      }
    }
    else if(k.KKM(e, 0x4060, 0xBA)) {
      if(this.s_isLRE===this.s314){
        r=m=1;   // Line 320
        k.KO(0,t,"ك");
      }
      else if(this.s_isLRE===this.s315){
        r=m=1;   // Line 321
        k.KO(0,t,"‬‏ك");
        this.s_isLRE=this.s316;
      }
    }
    else if(k.KKM(e, 0x4010, 0xBC)) {
      if(this.s_isLRE===this.s374){
        r=m=1;   // Line 377
        k.KO(0,t,"،");
      }
      else if(this.s_isLRE===this.s375){
        r=m=1;   // Line 378
        k.KO(0,t,",");
      }
    }
    else if(k.KKM(e, 0x4070, 0xBC)) {
      if(this.s_isLRE===this.s379){
        r=m=1;   // Line 381
        k.KO(0,t,"؍");
      }
      else if(this.s_isLRE===this.s380){
        r=m=1;   // Line 382
        k.KO(0,t,"‬‏؍");
        this.s_isLRE=this.s381;
      }
    }
    else if(k.KKM(e, 0x4000, 0xBB)) {
      if(1){
        r=m=1;   // Line 156
        k.KO(0,t,"=");
      }
    }
    else if(k.KKM(e, 0x4070, 0xBE)) {
      if(this.s_isLRE===this.s388){
        r=m=1;   // Line 389
        k.KO(0,t,"؞");
      }
      else if(this.s_isLRE===this.s389){
        r=m=1;   // Line 390
        k.KO(0,t,"‬‏؞");
        this.s_isLRE=this.s390;
      }
    }
    else if(k.KKM(e, 0x4010, 0xBE)) {
      if(1){
        r=m=1;   // Line 386
        k.KO(0,t,".");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBF)) {
      if(this.s_isLRE===this.s394){
        r=m=1;   // Line 394
        k.KO(0,t,"؟");
      }
      else if(this.s_isLRE===this.s395){
        r=m=1;   // Line 395
        k.KO(0,t,"‬‏؟");
        this.s_isLRE=this.s396;
      }
    }
    else if(k.KKM(e, 0x4030, 0x32)) {
      if(this.s_isLRE===this.s68){
        r=m=1;   // Line 74
        k.KO(0,t,"‌");
      }
      else if(this.s_isLRE===this.s69){
        r=m=1;   // Line 75
        k.KO(0,t,"‬‏‌");
        this.s_isLRE=this.s70;
      }
    }
    else if(k.KKM(e, 0x4010, 0x32)) {
      if(1){
        r=m=1;   // Line 73
        k.KO(0,t,"@");
      }
    }
    else if(k.KKM(e, 0x4010, 0x41)) {
      if(this.s_isLRE===this.s254){
        r=m=1;   // Line 267
        k.KO(0,t,"ِ");
      }
      else if(this.s_isLRE===this.s255){
        r=m=1;   // Line 268
        k.KO(0,t,"‬‏ِ");
        this.s_isLRE=this.s256;
      }
    }
    else if(k.KKM(e, 0x4010, 0x42)) {
      if(this.s_isLRE===this.s353){
        r=m=1;   // Line 360
        k.KO(0,t,"لآ");
      }
      else if(this.s_isLRE===this.s354){
        r=m=1;   // Line 361
        k.KO(0,t,"‬‏لآ");
        this.s_isLRE=this.s355;
      }
    }
    else if(k.KKM(e, 0x4010, 0x43)) {
      if(this.s_isLRE===this.s335){
        r=m=1;   // Line 345
        k.KO(0,t,"﴾");
      }
      else if(this.s_isLRE===this.s336){
        r=m=1;   // Line 346
        k.KO(0,t,"‬‏﴾");
        this.s_isLRE=this.s337;
      }
    }
    else if(k.KKM(e, 0x4070, 0x43)) {
      if(1){
        r=m=1;   // Line 349
        k.KO(0,t,"©");
      }
    }
    else if(k.KKM(e, 0x4010, 0x44)) {
      if(this.s_isLRE===this.s272){
        r=m=1;   // Line 281
        k.KO(0,t,"]");
      }
      else if(this.s_isLRE===this.s273){
        r=m=1;   // Line 282
        k.KO(0,t,"‬‏]");
        this.s_isLRE=this.s274;
      }
    }
    else if(k.KKM(e, 0x4070, 0x44)) {
      if(this.s_isLRE===this.s278){
        r=m=1;   // Line 285
        k.KO(0,t,"ى");
      }
      else if(this.s_isLRE===this.s279){
        r=m=1;   // Line 286
        k.KO(0,t,"‬‏ى");
        this.s_isLRE=this.s280;
      }
    }
    else if(k.KKM(e, 0x4010, 0x45)) {
      if(this.s_isLRE===this.s172){
        r=m=1;   // Line 180
        k.KO(0,t,"ُ");
      }
      else if(this.s_isLRE===this.s173){
        r=m=1;   // Line 181
        k.KO(0,t,"‬‏ُ");
        this.s_isLRE=this.s174;
      }
    }
    else if(k.KKM(e, 0x4010, 0x46)) {
      if(this.s_isLRE===this.s284){
        r=m=1;   // Line 290
        k.KO(0,t,"[");
      }
      else if(this.s_isLRE===this.s285){
        r=m=1;   // Line 291
        k.KO(0,t,"‬‏[");
        this.s_isLRE=this.s286;
      }
    }
    else if(k.KKM(e, 0x4010, 0x47)) {
      if(this.s_isLRE===this.s290){
        r=m=1;   // Line 295
        k.KO(0,t,"‪۝");
        this.s_isLRE=this.s291;
      }
      else if(this.s_isLRE===this.s292){
        r=m=1;   // Line 296
        k.KO(0,t,"‬‏‪۝");
      }
    }
    else if(k.KKM(e, 0x4070, 0x49)) {
      if(this.s_isLRE===this.s217){
        r=m=1;   // Line 223
        k.KO(0,t,"‪£");
        this.s_isLRE=this.s218;
      }
      else if(this.s_isLRE===this.s219){
        r=m=1;   // Line 224
        k.KO(0,t,"‬‏‪£");
      }
    }
    else if(k.KKM(e, 0x4010, 0x49)) {
      if(1){
        r=m=1;   // Line 220
        k.KO(0,t,"÷");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4A)) {
      if(this.s_isLRE===this.s299){
        r=m=1;   // Line 303
        k.KO(0,t,"ـ");
      }
      else if(this.s_isLRE===this.s300){
        r=m=1;   // Line 304
        k.KO(0,t,"‬‏ـ");
        this.s_isLRE=this.s301;
      }
    }
    else if(k.KKM(e, 0x4010, 0x4B)) {
      if(this.s_isLRE===this.s305){
        r=m=1;   // Line 309
        k.KO(0,t,"،");
      }
      else if(this.s_isLRE===this.s306){
        r=m=1;   // Line 310
        k.KO(0,t,"‬‏،");
        this.s_isLRE=this.s307;
      }
    }
    else if(k.KKM(e, 0x4010, 0x4C)) {
      if(1){
        r=m=1;   // Line 315
        k.KO(0,t,"/");
      }
    }
    else if(k.KKM(e, 0x4010, 0x4D)) {
      if(this.s_isLRE===this.s365){
        r=m=1;   // Line 370
        k.KO(0,t,"’");
      }
      else if(this.s_isLRE===this.s366){
        r=m=1;   // Line 371
        k.KO(0,t,"‬‏’");
        this.s_isLRE=this.s367;
      }
    }
    else if(k.KKM(e, 0x4010, 0x4E)) {
      if(this.s_isLRE===this.s359){
        r=m=1;   // Line 365
        k.KO(0,t,"آ");
      }
      else if(this.s_isLRE===this.s360){
        r=m=1;   // Line 366
        k.KO(0,t,"‬‏آ");
        this.s_isLRE=this.s361;
      }
    }
    else if(k.KKM(e, 0x4070, 0x4F)) {
      if(this.s_isLRE===this.s226){
        r=m=1;   // Line 232
        k.KO(0,t,"‪€");
        this.s_isLRE=this.s227;
      }
      else if(this.s_isLRE===this.s228){
        r=m=1;   // Line 233
        k.KO(0,t," €‬‏");
        this.s_isLRE=this.s229;
      }
    }
    else if(k.KKM(e, 0x4010, 0x4F)) {
      if(1){
        r=m=1;   // Line 228
        k.KO(0,t,"×");
      }
    }
    else if(k.KKM(e, 0x4010, 0x50)) {
      if(this.s_isLRE===this.s233){
        r=m=1;   // Line 237
        k.KO(0,t,"؛");
      }
      else if(this.s_isLRE===this.s234){
        r=m=1;   // Line 238
        k.KO(0,t,"‬‏؛");
        this.s_isLRE=this.s235;
      }
    }
    else if(k.KKM(e, 0x4070, 0x50)) {
      if(this.s_isLRE===this.s236){
        r=m=1;   // Line 240
        k.KO(0,t,"‪¥");
      }
      else if(this.s_isLRE===this.s237){
        r=m=1;   // Line 241
        k.KO(0,t,"‬‏‪¥");
      }
    }
    else if(k.KKM(e, 0x4010, 0x51)) {
      if(this.s_isLRE===this.s154){
        r=m=1;   // Line 164
        k.KO(0,t,"َ");
      }
      else if(this.s_isLRE===this.s155){
        r=m=1;   // Line 165
        k.KO(0,t,"‬‏َ");
        this.s_isLRE=this.s156;
      }
    }
    else if(k.KKM(e, 0x4010, 0x52)) {
      if(this.s_isLRE===this.s181){
        r=m=1;   // Line 188
        k.KO(0,t,"ٌ");
      }
      else if(this.s_isLRE===this.s182){
        r=m=1;   // Line 189
        k.KO(0,t,"‬‏ٌ");
        this.s_isLRE=this.s183;
      }
    }
    else if(k.KKM(e, 0x4070, 0x52)) {
      if(1){
        r=m=1;   // Line 192
        k.KO(0,t,"®");
      }
    }
    else if(k.KKM(e, 0x4010, 0x53)) {
      if(this.s_isLRE===this.s263){
        r=m=1;   // Line 274
        k.KO(0,t,"ٍ");
      }
      else if(this.s_isLRE===this.s264){
        r=m=1;   // Line 275
        k.KO(0,t,"‬‏ٍ");
        this.s_isLRE=this.s265;
      }
    }
    else if(k.KKM(e, 0x4070, 0x54)) {
      if(this.s_isLRE===this.s190){
        r=m=1;   // Line 197
        k.KO(0,t,"‪¤");
        this.s_isLRE=this.s191;
      }
      else if(this.s_isLRE===this.s192){
        r=m=1;   // Line 198
        k.KO(0,t,"‬‏‪¤");
      }
    }
    else if(k.KKM(e, 0x4010, 0x55)) {
      if(this.s_isLRE===this.s205){
        r=m=1;   // Line 210
        k.KO(0,t,"‘");
      }
      else if(this.s_isLRE===this.s206){
        r=m=1;   // Line 211
        k.KO(0,t,"‬‏‘");
        this.s_isLRE=this.s207;
      }
    }
    else if(k.KKM(e, 0x4070, 0x55)) {
      if(this.s_isLRE===this.s211){
        r=m=1;   // Line 215
        k.KO(0,t,"‪¢");
      }
      else if(this.s_isLRE===this.s212){
        r=m=1;   // Line 216
        k.KO(0,t,"¢‬‏");
        this.s_isLRE=this.s213;
      }
    }
    else if(k.KKM(e, 0x4010, 0x56)) {
      if(this.s_isLRE===this.s344){
        r=m=1;   // Line 353
        k.KO(0,t,"﴿");
      }
      else if(this.s_isLRE===this.s345){
        r=m=1;   // Line 354
        k.KO(0,t,"‬‏﴿");
        this.s_isLRE=this.s346;
      }
    }
    else if(k.KKM(e, 0x4010, 0x57)) {
      if(this.s_isLRE===this.s163){
        r=m=1;   // Line 172
        k.KO(0,t,"ً");
      }
      else if(this.s_isLRE===this.s164){
        r=m=1;   // Line 173
        k.KO(0,t,"‬‏ً");
        this.s_isLRE=this.s165;
      }
    }
    else if(k.KKM(e, 0x4010, 0x58)) {
      if(this.s_isLRE===this.s329){
        r=m=1;   // Line 339
        k.KO(0,t,"ْ");
      }
      else if(this.s_isLRE===this.s330){
        r=m=1;   // Line 340
        k.KO(0,t,"‬‏ْ");
        this.s_isLRE=this.s331;
      }
    }
    else if(k.KKM(e, 0x4070, 0x58)) {
      if(1){
        r=m=1;   // Line 341
        k.KO(0,t,"℗");
      }
    }
    else if(k.KKM(e, 0x4070, 0x59)) {
      if(this.s_isLRE===this.s199){
        r=m=1;   // Line 205
        k.KO(0,t,"fcfa‏");
      }
      else if(this.s_isLRE===this.s200){
        r=m=1;   // Line 206
        k.KO(0,t,"fcfa‬‏");
        this.s_isLRE=this.s201;
      }
    }
    else if(k.KKM(e, 0x4010, 0x5A)) {
      if(1){
        r=m=1;   // Line 333
        k.KO(0,t,"~");
      }
    }
      if(m) {}
    else if(k.KKM(e, 0x4000, 0xDB)) {
      if(this.s_isLRE===this.s238){
        r=m=1;   // Line 243
        k.KO(0,t,"ج");
      }
      else if(this.s_isLRE===this.s239){
        r=m=1;   // Line 244
        k.KO(0,t,"‬‏ج");
        this.s_isLRE=this.s240;
      }
    }
    else if(k.KKM(e, 0x4060, 0xDB)) {
      if(this.s_isLRE===this.s243){
        r=m=1;   // Line 249
        k.KO(0,t,"ڃ");
      }
      else if(this.s_isLRE===this.s244){
        r=m=1;   // Line 250
        k.KO(0,t,"‬‏ڃ");
        this.s_isLRE=this.s245;
      }
    }
    else if(k.KKM(e, 0x4020, 0xDB)) {
      if(1){
        r=m=1;   // Line 248
        k.KO(0,t,"\x1B");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDC)) {
      if(1){
        r=m=1;   // Line 259
        k.KO(0,t,"\\");
      }
    }
    else if(k.KKM(e, 0x4020, 0xDC)) {
      if(1){
        r=m=1;   // Line 261
        k.KO(0,t,"\x1C");
      }
    }
    else if(k.KKM(e, 0x4060, 0xDC)) {
      if(1){
        r=m=1;   // Line 262
        k.KO(0,t,"¦");
      }
    }
    else if(k.KKM(e, 0x4000, 0xDD)) {
      if(this.s_isLRE===this.s246){
        r=m=1;   // Line 252
        k.KO(0,t,"د");
      }
      else if(this.s_isLRE===this.s247){
        r=m=1;   // Line 253
        k.KO(0,t,"‬‏د");
        this.s_isLRE=this.s248;
      }
    }
    else if(k.KKM(e, 0x4020, 0xDD)) {
      if(1){
        r=m=1;   // Line 257
        k.KO(0,t,"\x1D");
      }
    }
    else if(k.KKM(e, 0x4010, 0x36)) {
      if(1){
        r=m=1;   // Line 111
        k.KO(0,t,"^");
      }
    }
    else if(k.KKM(e, 0x4070, 0x36)) {
      if(1){
        r=m=1;   // Line 114
        k.KO(0,t,"•");
      }
    }
    else if(k.KKM(e, 0x4070, 0xBD)) {
      if(this.s_isLRE===this.s148){
        r=m=1;   // Line 153
        k.KO(0,t,"µ‏");
      }
      else if(this.s_isLRE===this.s149){
        r=m=1;   // Line 154
        k.KO(0,t,"µ‬‏");
        this.s_isLRE=this.s150;
      }
    }
    else if(k.KKM(e, 0x4010, 0xBD)) {
      if(1){
        r=m=1;   // Line 151
        k.KO(0,t,"_");
      }
    }
    else if(k.KKM(e, 0x4000, 0xC0)) {
      if(this.s_isLRE===this.s40){
        r=m=1;   // Line 53
        k.KO(0,t,"ز");
      }
      else if(this.s_isLRE===this.s41){
        r=m=1;   // Line 54
        k.KO(0,t,"‬‏ز");
        this.s_isLRE=this.s42;
      }
    }
    else if(k.KKM(e, 0x4060, 0xC0)) {
      if(this.s_isLRE===this.s46){
        r=m=1;   // Line 57
        k.KO(0,t,"‪؀");
        this.s_isLRE=this.s47;
      }
      else if(this.s_isLRE===this.s48){
        r=m=1;   // Line 58
        k.KO(0,t,"‬‏‪؀");
      }
    }
    else if(k.KKM(e, 0x4000, 0x41)) {
      if(this.s_isLRE===this.s251){
        r=m=1;   // Line 265
        k.KO(0,t,"ش");
      }
      else if(this.s_isLRE===this.s252){
        r=m=1;   // Line 266
        k.KO(0,t,"‬‏ش");
        this.s_isLRE=this.s253;
      }
    }
    else if(k.KKM(e, 0x4060, 0x41)) {
      if(this.s_isLRE===this.s257){
        r=m=1;   // Line 269
        k.KO(0,t,"ࣶ");
      }
      else if(this.s_isLRE===this.s258){
        r=m=1;   // Line 270
        k.KO(0,t,"‬‏ࣶ");
        this.s_isLRE=this.s259;
      }
    }
    else if(k.KKM(e, 0x4000, 0x42)) {
      if(this.s_isLRE===this.s350){
        r=m=1;   // Line 358
        k.KO(0,t,"گ");
      }
      else if(this.s_isLRE===this.s351){
        r=m=1;   // Line 359
        k.KO(0,t,"‬‏گ");
        this.s_isLRE=this.s352;
      }
    }
    else if(k.KKM(e, 0x4000, 0x43)) {
      if(this.s_isLRE===this.s332){
        r=m=1;   // Line 343
        k.KO(0,t,"ݖ");
      }
      else if(this.s_isLRE===this.s333){
        r=m=1;   // Line 344
        k.KO(0,t,"‬‏ݖ");
        this.s_isLRE=this.s334;
      }
    }
    else if(k.KKM(e, 0x4060, 0x43)) {
      if(this.s_isLRE===this.s338){
        r=m=1;   // Line 347
        k.KO(0,t,"»");
      }
      else if(this.s_isLRE===this.s339){
        r=m=1;   // Line 348
        k.KO(0,t,"‬‏»");
        this.s_isLRE=this.s340;
      }
    }
    else if(k.KKM(e, 0x4000, 0x44)) {
      if(this.s_isLRE===this.s269){
        r=m=1;   // Line 279
        k.KO(0,t,"ي");
      }
      else if(this.s_isLRE===this.s270){
        r=m=1;   // Line 280
        k.KO(0,t,"‬‏ي");
        this.s_isLRE=this.s271;
      }
    }
    else if(k.KKM(e, 0x4060, 0x44)) {
      if(this.s_isLRE===this.s275){
        r=m=1;   // Line 283
        k.KO(0,t,"ࣺ");
      }
      else if(this.s_isLRE===this.s276){
        r=m=1;   // Line 284
        k.KO(0,t,"‬‏ࣺ");
        this.s_isLRE=this.s277;
      }
    }
    else if(k.KKM(e, 0x4000, 0x45)) {
      if(this.s_isLRE===this.s169){
        r=m=1;   // Line 178
        k.KO(0,t,"ث");
      }
      else if(this.s_isLRE===this.s170){
        r=m=1;   // Line 179
        k.KO(0,t,"‬‏ث");
        this.s_isLRE=this.s171;
      }
    }
    else if(k.KKM(e, 0x4060, 0x45)) {
      if(this.s_isLRE===this.s175){
        r=m=1;   // Line 182
        k.KO(0,t,"ࣷ");
      }
      else if(this.s_isLRE===this.s176){
        r=m=1;   // Line 183
        k.KO(0,t,"‬‏ࣷ");
        this.s_isLRE=this.s177;
      }
    }
    else if(k.KKM(e, 0x4000, 0x46)) {
      if(this.s_isLRE===this.s281){
        r=m=1;   // Line 288
        k.KO(0,t,"ب");
      }
      else if(this.s_isLRE===this.s282){
        r=m=1;   // Line 289
        k.KO(0,t,"‬‏ب");
        this.s_isLRE=this.s283;
      }
    }
    else if(k.KKM(e, 0x4000, 0x47)) {
      if(this.s_isLRE===this.s287){
        r=m=1;   // Line 293
        k.KO(0,t,"ل");
      }
      else if(this.s_isLRE===this.s288){
        r=m=1;   // Line 294
        k.KO(0,t,"‬‏ل");
        this.s_isLRE=this.s289;
      }
    }
    else if(k.KKM(e, 0x4000, 0x48)) {
      if(this.s_isLRE===this.s293){
        r=m=1;   // Line 298
        k.KO(0,t,"ا");
      }
      else if(this.s_isLRE===this.s294){
        r=m=1;   // Line 299
        k.KO(0,t,"‬‏ا");
        this.s_isLRE=this.s295;
      }
    }
    else if(k.KKM(e, 0x4000, 0x49)) {
      if(this.s_isLRE===this.s214){
        r=m=1;   // Line 218
        k.KO(0,t,"ه");
      }
      else if(this.s_isLRE===this.s215){
        r=m=1;   // Line 219
        k.KO(0,t,"‬‏ه");
        this.s_isLRE=this.s216;
      }
    }
    else if(k.KKM(e, 0x4000, 0x4A)) {
      if(this.s_isLRE===this.s296){
        r=m=1;   // Line 301
        k.KO(0,t,"ت");
      }
      else if(this.s_isLRE===this.s297){
        r=m=1;   // Line 302
        k.KO(0,t,"‬‏ت");
        this.s_isLRE=this.s298;
      }
    }
    else if(k.KKM(e, 0x4060, 0x4A)) {
      if(1){
        r=m=1;   // Line 305
        k.KO(0,t,"–");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4B)) {
      if(this.s_isLRE===this.s302){
        r=m=1;   // Line 307
        k.KO(0,t,"ن");
      }
      else if(this.s_isLRE===this.s303){
        r=m=1;   // Line 308
        k.KO(0,t,"‬‏ن");
        this.s_isLRE=this.s304;
      }
    }
    else if(k.KKM(e, 0x4060, 0x4B)) {
      if(1){
        r=m=1;   // Line 311
        k.KO(0,t,"—");
      }
    }
    else if(k.KKM(e, 0x4000, 0x4C)) {
      if(this.s_isLRE===this.s308){
        r=m=1;   // Line 313
        k.KO(0,t,"م");
      }
      else if(this.s_isLRE===this.s309){
        r=m=1;   // Line 314
        k.KO(0,t,"‬‏م");
        this.s_isLRE=this.s310;
      }
    }
    else if(k.KKM(e, 0x4000, 0x4D)) {
      if(this.s_isLRE===this.s362){
        r=m=1;   // Line 368
        k.KO(0,t,"ࢠ");
      }
      else if(this.s_isLRE===this.s363){
        r=m=1;   // Line 369
        k.KO(0,t,"‬‏ࢠ");
        this.s_isLRE=this.s364;
      }
    }
    else if(k.KKM(e, 0x4060, 0x4D)) {
      if(this.s_isLRE===this.s368){
        r=m=1;   // Line 372
        k.KO(0,t,"”");
      }
      else if(this.s_isLRE===this.s369){
        r=m=1;   // Line 373
        k.KO(0,t,"‬‏”");
        this.s_isLRE=this.s370;
      }
    }
    else if(k.KKM(e, 0x4000, 0x4E)) {
      if(this.s_isLRE===this.s356){
        r=m=1;   // Line 363
        k.KO(0,t,"ݧ");
      }
      else if(this.s_isLRE===this.s357){
        r=m=1;   // Line 364
        k.KO(0,t,"‬‏ݧ");
        this.s_isLRE=this.s358;
      }
    }
    else if(k.KKM(e, 0x4000, 0x4F)) {
      if(this.s_isLRE===this.s220){
        r=m=1;   // Line 226
        k.KO(0,t,"خ");
      }
      else if(this.s_isLRE===this.s221){
        r=m=1;   // Line 227
        k.KO(0,t,"‬‏خ");
        this.s_isLRE=this.s222;
      }
    }
    else if(k.KKM(e, 0x4060, 0x4F)) {
      if(this.s_isLRE===this.s223){
        r=m=1;   // Line 229
        k.KO(0,t,"ࢢ");
      }
      else if(this.s_isLRE===this.s224){
        r=m=1;   // Line 230
        k.KO(0,t,"‬‏ࢢ");
        this.s_isLRE=this.s225;
      }
    }
    else if(k.KKM(e, 0x4000, 0x50)) {
      if(this.s_isLRE===this.s230){
        r=m=1;   // Line 235
        k.KO(0,t,"ح");
      }
      else if(this.s_isLRE===this.s231){
        r=m=1;   // Line 236
        k.KO(0,t,"‬‏ح");
        this.s_isLRE=this.s232;
      }
    }
    else if(k.KKM(e, 0x4000, 0x51)) {
      if(this.s_isLRE===this.s151){
        r=m=1;   // Line 162
        k.KO(0,t,"ض");
      }
      else if(this.s_isLRE===this.s152){
        r=m=1;   // Line 163
        k.KO(0,t,"‬‏ض");
        this.s_isLRE=this.s153;
      }
    }
    else if(k.KKM(e, 0x4060, 0x51)) {
      if(this.s_isLRE===this.s157){
        r=m=1;   // Line 166
        k.KO(0,t,"ࣵ");
      }
      else if(this.s_isLRE===this.s158){
        r=m=1;   // Line 167
        k.KO(0,t,"‬‏ࣵ");
        this.s_isLRE=this.s159;
      }
    }
    else if(k.KKM(e, 0x4000, 0x52)) {
      if(this.s_isLRE===this.s178){
        r=m=1;   // Line 186
        k.KO(0,t,"ق");
      }
      else if(this.s_isLRE===this.s179){
        r=m=1;   // Line 187
        k.KO(0,t,"‬‏ق");
        this.s_isLRE=this.s180;
      }
    }
    else if(k.KKM(e, 0x4060, 0x52)) {
      if(this.s_isLRE===this.s184){
        r=m=1;   // Line 190
        k.KO(0,t,"ٗ");
      }
      else if(this.s_isLRE===this.s185){
        r=m=1;   // Line 191
        k.KO(0,t,"‬‏ٗ");
        this.s_isLRE=this.s186;
      }
    }
    else if(k.KKM(e, 0x4000, 0x53)) {
      if(this.s_isLRE===this.s260){
        r=m=1;   // Line 272
        k.KO(0,t,"س");
      }
      else if(this.s_isLRE===this.s261){
        r=m=1;   // Line 273
        k.KO(0,t,"‬‏س");
        this.s_isLRE=this.s262;
      }
    }
    else if(k.KKM(e, 0x4060, 0x53)) {
      if(this.s_isLRE===this.s266){
        r=m=1;   // Line 276
        k.KO(0,t,"ࣹ");
      }
      else if(this.s_isLRE===this.s267){
        r=m=1;   // Line 277
        k.KO(0,t,"‬‏ࣹ");
        this.s_isLRE=this.s268;
      }
    }
    else if(k.KKM(e, 0x4000, 0x54)) {
      if(this.s_isLRE===this.s187){
        r=m=1;   // Line 194
        k.KO(0,t,"ف");
      }
      else if(this.s_isLRE===this.s188){
        r=m=1;   // Line 195
        k.KO(0,t,"‬‏ف");
        this.s_isLRE=this.s189;
      }
    }
    else if(k.KKM(e, 0x4000, 0x55)) {
      if(this.s_isLRE===this.s202){
        r=m=1;   // Line 208
        k.KO(0,t,"ع");
      }
      else if(this.s_isLRE===this.s203){
        r=m=1;   // Line 209
        k.KO(0,t,"‬‏ع");
        this.s_isLRE=this.s204;
      }
    }
    else if(k.KKM(e, 0x4060, 0x55)) {
      if(this.s_isLRE===this.s208){
        r=m=1;   // Line 212
        k.KO(0,t,"“");
      }
      else if(this.s_isLRE===this.s209){
        r=m=1;   // Line 213
        k.KO(0,t,"‬‏“");
        this.s_isLRE=this.s210;
      }
    }
    else if(k.KKM(e, 0x4000, 0x56)) {
      if(this.s_isLRE===this.s341){
        r=m=1;   // Line 351
        k.KO(0,t,"ر");
      }
      else if(this.s_isLRE===this.s342){
        r=m=1;   // Line 352
        k.KO(0,t,"‬‏ر");
        this.s_isLRE=this.s343;
      }
    }
    else if(k.KKM(e, 0x4060, 0x56)) {
      if(this.s_isLRE===this.s347){
        r=m=1;   // Line 355
        k.KO(0,t,"«");
      }
      else if(this.s_isLRE===this.s348){
        r=m=1;   // Line 356
        k.KO(0,t,"‬‏«");
        this.s_isLRE=this.s349;
      }
    }
    else if(k.KKM(e, 0x4000, 0x57)) {
      if(this.s_isLRE===this.s160){
        r=m=1;   // Line 170
        k.KO(0,t,"ص");
      }
      else if(this.s_isLRE===this.s161){
        r=m=1;   // Line 171
        k.KO(0,t,"‬‏ص");
        this.s_isLRE=this.s162;
      }
    }
    else if(k.KKM(e, 0x4060, 0x57)) {
      if(this.s_isLRE===this.s166){
        r=m=1;   // Line 174
        k.KO(0,t,"ࣴ");
      }
      else if(this.s_isLRE===this.s167){
        r=m=1;   // Line 175
        k.KO(0,t,"‬‏ࣴ");
        this.s_isLRE=this.s168;
      }
    }
    else if(k.KKM(e, 0x4000, 0x58)) {
      if(this.s_isLRE===this.s326){
        r=m=1;   // Line 337
        k.KO(0,t,"ٴ");
      }
      else if(this.s_isLRE===this.s327){
        r=m=1;   // Line 338
        k.KO(0,t,"‬‏ٴ");
        this.s_isLRE=this.s328;
      }
    }
    else if(k.KKM(e, 0x4000, 0x59)) {
      if(this.s_isLRE===this.s193){
        r=m=1;   // Line 200
        k.KO(0,t,"غ");
      }
      else if(this.s_isLRE===this.s194){
        r=m=1;   // Line 201
        k.KO(0,t,"‬‏غ");
        this.s_isLRE=this.s195;
      }
    }
    else if(k.KKM(e, 0x4060, 0x59)) {
      if(this.s_isLRE===this.s196){
        r=m=1;   // Line 202
        k.KO(0,t,"ݝ");
      }
      else if(this.s_isLRE===this.s197){
        r=m=1;   // Line 203
        k.KO(0,t,"‬‏ݝ");
        this.s_isLRE=this.s198;
      }
    }
    else if(k.KKM(e, 0x4000, 0x5A)) {
      if(this.s_isLRE===this.s320){
        r=m=1;   // Line 331
        k.KO(0,t,"ݒ");
      }
      else if(this.s_isLRE===this.s321){
        r=m=1;   // Line 332
        k.KO(0,t,"‬‏ݒ");
        this.s_isLRE=this.s322;
      }
    }
    else if(k.KKM(e, 0x4060, 0x5A)) {
      if(this.s_isLRE===this.s323){
        r=m=1;   // Line 334
        k.KO(0,t,"ݕ");
      }
      else if(this.s_isLRE===this.s324){
        r=m=1;   // Line 335
        k.KO(0,t,"‬‏ݕ");
        this.s_isLRE=this.s325;
      }
    }
    else if(k.KKM(e, 0x4010, 0xDB)) {
      if(this.s_isLRE===this.s241){
        r=m=1;   // Line 246
        k.KO(0,t,">");
      }
      else if(this.s_isLRE===this.s242){
        r=m=1;   // Line 247
        k.KO(0,t,"<");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDC)) {
      if(1){
        r=m=1;   // Line 260
        k.KO(0,t,"|");
      }
    }
    else if(k.KKM(e, 0x4010, 0xDD)) {
      if(this.s_isLRE===this.s249){
        r=m=1;   // Line 255
        k.KO(0,t,"<");
      }
      else if(this.s_isLRE===this.s250){
        r=m=1;   // Line 256
        k.KO(0,t,">");
      }
    }
    else if(k.KKM(e, 0x4010, 0xC0)) {
      if(this.s_isLRE===this.s43){
        r=m=1;   // Line 55
        k.KO(0,t,"ّ");
      }
      else if(this.s_isLRE===this.s44){
        r=m=1;   // Line 56
        k.KO(0,t,"‬‏ّ");
        this.s_isLRE=this.s45;
      }
    }
    if(!m&&k.KIK(e)) {
      r=1;
      k.KB(t);
    }
    return r;
  };
}
