<?php

namespace Obsidian\Components\Web\Attributes\Style\Properties;

use Obsidian\Exceptions\Web\Attributes\Style\Properties\ObsidianColorException;

class Color
{
  public string $name;
  public string $rgb;
  public string $hex;

  public function __construct(string $name = null)
  {
    if ($name) :
      $this->colorLookup($name);
    endif;
  }

  public function __get(string $name)
  {
    return $this->colorLookup($name);
  }

  private function colorLookup(string $name): Color
  {
    if (!$color = $this->colors[$name]) :
      throw new ObsidianColorException("{$name} is not a valid CSS color name");
    endif;

    $this->name = $name;
    $this->hex  = $color['hex'];
    $this->rgb  = $color['rgb'];

    return $this;
  }

  private array $colors = [
    'aliceblue' => [
      'hex' => '#f0f8ff',
      'rgb' => '240,248,255',
    ],
    'antiquewhite' => [
      'hex' => '#faebd7',
      'rgb' => '250,235,215',
    ],
    'aqua' => [
      'hex' => '#00ffff',
      'rgb' => '0,255,255',
    ],
    'aquamarine' => [
      'hex' => '#7fffd4',
      'rgb' => '127,255,212',
    ],
    'azure' => [
      'hex' => '#f0ffff',
      'rgb' => '240,255,255',
    ],
    'beige' => [
      'hex' => '#f5f5dc',
      'rgb' => '245,245,220',
    ],
    'bisque' => [
      'hex' => '#ffe4c4',
      'rgb' => '255,228,196',
    ],
    'black' => [
      'hex' => '#000000',
      'rgb' => '0,0,0',
    ],
    'blanchedalmond' => [
      'hex' => '#ffebcd',
      'rgb' => '255,235,205',
    ],
    'blue' => [
      'hex' => '#0000ff',
      'rgb' => '0,0,255',
    ],
    'blueviolet' => [
      'hex' => '#8a2be2',
      'rgb' => '138,43,226',
    ],
    'brown' => [
      'hex' => '#a52a2a',
      'rgb' => '165,42,42',
    ],
    'burlywood' => [
      'hex' => '#deb887',
      'rgb' => '222,184,135',
    ],
    'cadetblue' => [
      'hex' => '#5f9ea0',
      'rgb' => '95,158,160',
    ],
    'chartreuse' => [
      'hex' => '#7fff00',
      'rgb' => '127,255,0',
    ],
    'chocolate' => [
      'hex' => '#d2691e',
      'rgb' => '210,105,30',
    ],
    'coral' => [
      'hex' => '#ff7f50',
      'rgb' => '255,127,80',
    ],
    'cornflowerblue' => [
      'hex' => '#6495ed',
      'rgb' => '100,149,237',
    ],
    'cornsilk' => [
      'hex' => '#fff8dc',
      'rgb' => '255,248,220',
    ],
    'crimson' => [
      'hex' => '#dc143c',
      'rgb' => '220,20,60',
    ],
    'cyan' => [
      'hex' => '#00ffff',
      'rgb' => '0,255,255',
    ],
    'darkblue' => [
      'hex' => '#00008b',
      'rgb' => '0,0,139',
    ],
    'darkcyan' => [
      'hex' => '#008b8b',
      'rgb' => '0,139,139',
    ],
    'darkgoldenrod' => [
      'hex' => '#b8860b',
      'rgb' => '184,134,11',
    ],
    'darkgray' => [
      'hex' => '#a9a9a9',
      'rgb' => '169,169,169',
    ],
    'darkgreen' => [
      'hex' => '#006400',
      'rgb' => '0,100,0',
    ],
    'darkgrey' => [
      'hex' => '#a9a9a9',
      'rgb' => '169,169,169',
    ],
    'darkkhaki' => [
      'hex' => '#bdb76b',
      'rgb' => '189,183,107',
    ],
    'darkmagenta' => [
      'hex' => '#8b008b',
      'rgb' => '139,0,139',
    ],
    'darkolivegreen' => [
      'hex' => '#556b2f',
      'rgb' => '85,107,47',
    ],
    'darkorange' => [
      'hex' => '#ff8c00',
      'rgb' => '255,140,0',
    ],
    'darkorchid' => [
      'hex' => '#9932cc',
      'rgb' => '153,50,204',
    ],
    'darkred' => [
      'hex' => '#8b0000',
      'rgb' => '139,0,0',
    ],
    'darksalmon' => [
      'hex' => '#e9967a',
      'rgb' => '233,150,122',
    ],
    'darkseagreen' => [
      'hex' => '#8fbc8f',
      'rgb' => '143,188,143',
    ],
    'darkslateblue' => [
      'hex' => '#483d8b',
      'rgb' => '72,61,139',
    ],
    'darkslategray' => [
      'hex' => '#2f4f4f',
      'rgb' => '47,79,79',
    ],
    'darkslategrey' => [
      'hex' => '#2f4f4f',
      'rgb' => '47,79,79',
    ],
    'darkturquoise' => [
      'hex' => '#00ced1',
      'rgb' => '0,206,209',
    ],
    'darkviolet' => [
      'hex' => '#9400d3',
      'rgb' => '148,0,211',
    ],
    'deeppink' => [
      'hex' => '#ff1493',
      'rgb' => '255,20,147',
    ],
    'deepskyblue' => [
      'hex' => '#00bfff',
      'rgb' => '0,191,255',
    ],
    'dimgray' => [
      'hex' => '#696969',
      'rgb' => '105,105,105',
    ],
    'dimgrey' => [
      'hex' => '#696969',
      'rgb' => '105,105,105',
    ],
    'dodgerblue' => [
      'hex' => '#1e90ff',
      'rgb' => '30,144,255',
    ],
    'firebrick' => [
      'hex' => '#b22222',
      'rgb' => '178,34,34',
    ],
    'floralwhite' => [
      'hex' => '#fffaf0',
      'rgb' => '255,250,240',
    ],
    'forestgreen' => [
      'hex' => '#228b22',
      'rgb' => '34,139,34',
    ],
    'fuchsia' => [
      'hex' => '#ff00ff',
      'rgb' => '255,0,255',
    ],
    'gainsboro' => [
      'hex' => '#dcdcdc',
      'rgb' => '220,220,220',
    ],
    'ghostwhite' => [
      'hex' => '#f8f8ff',
      'rgb' => '248,248,255',
    ],
    'gold' => [
      'hex' => '#ffd700',
      'rgb' => '255,215,0',
    ],
    'goldenrod' => [
      'hex' => '#daa520',
      'rgb' => '218,165,32',
    ],
    'gray' => [
      'hex' => '#808080',
      'rgb' => '128,128,128',
    ],
    'green' => [
      'hex' => '#008000',
      'rgb' => '0,128,0',
    ],
    'greenyellow' => [
      'hex' => '#adff2f',
      'rgb' => '173,255,47',
    ],
    'grey' => [
      'hex' => '#808080',
      'rgb' => '128,128,128',
    ],
    'honeydew' => [
      'hex' => '#f0fff0',
      'rgb' => '240,255,240',
    ],
    'hotpink' => [
      'hex' => '#ff69b4',
      'rgb' => '255,105,180',
    ],
    'indianred' => [
      'hex' => '#cd5c5c',
      'rgb' => '205,92,92',
    ],
    'indigo' => [
      'hex' => '#4b0082',
      'rgb' => '75,0,130',
    ],
    'ivory' => [
      'hex' => '#fffff0',
      'rgb' => '255,255,240',
    ],
    'khaki' => [
      'hex' => '#f0e68c',
      'rgb' => '240,230,140',
    ],
    'lavender' => [
      'hex' => '#e6e6fa',
      'rgb' => '230,230,250',
    ],
    'lavenderblush' => [
      'hex' => '#fff0f5',
      'rgb' => '255,240,245',
    ],
    'lawngreen' => [
      'hex' => '#7cfc00',
      'rgb' => '124,252,0',
    ],
    'lemonchiffon' => [
      'hex' => '#fffacd',
      'rgb' => '255,250,205',
    ],
    'lightblue' => [
      'hex' => '#add8e6',
      'rgb' => '173,216,230',
    ],
    'lightcoral' => [
      'hex' => '#f08080',
      'rgb' => '240,128,128',
    ],
    'lightcyan' => [
      'hex' => '#e0ffff',
      'rgb' => '224,255,255',
    ],
    'lightgoldenrodyellow' => [
      'hex' => '#fafad2',
      'rgb' => '250,250,210',
    ],
    'lightgray' => [
      'hex' => '#d3d3d3',
      'rgb' => '211,211,211',
    ],
    'lightgreen' => [
      'hex' => '#90ee90',
      'rgb' => '144,238,144',
    ],
    'lightgrey' => [
      'hex' => '#d3d3d3',
      'rgb' => '211,211,211',
    ],
    'lightpink' => [
      'hex' => '#ffb6c1',
      'rgb' => '255,182,193',
    ],
    'lightsalmon' => [
      'hex' => '#ffa07a',
      'rgb' => '255,160,122',
    ],
    'lightseagreen' => [
      'hex' => '#20b2aa',
      'rgb' => '32,178,170',
    ],
    'lightskyblue' => [
      'hex' => '#87cefa',
      'rgb' => '135,206,250',
    ],
    'lightslategray' => [
      'hex' => '#778899',
      'rgb' => '119,136,153',
    ],
    'lightslategrey' => [
      'hex' => '#778899',
      'rgb' => '119,136,153',
    ],
    'lightsteelblue' => [
      'hex' => '#b0c4de',
      'rgb' => '176,196,222',
    ],
    'lightyellow' => [
      'hex' => '#ffffe0',
      'rgb' => '255,255,224',
    ],
    'lime' => [
      'hex' => '#00ff00',
      'rgb' => '0,255,0',
    ],
    'limegreen' => [
      'hex' => '#32cd32',
      'rgb' => '50,205,50',
    ],
    'linen' => [
      'hex' => '#faf0e6',
      'rgb' => '250,240,230',
    ],
    'magenta' => [
      'hex' => '#ff00ff',
      'rgb' => '255,0,255',
    ],
    'maroon' => [
      'hex' => '#800000',
      'rgb' => '128,0,0',
    ],
    'mediumaquamarine' => [
      'hex' => '#66cdaa',
      'rgb' => '102,205,170',
    ],
    'mediumblue' => [
      'hex' => '#0000cd',
      'rgb' => '0,0,205',
    ],
    'mediumorchid' => [
      'hex' => '#ba55d3',
      'rgb' => '186,85,211',
    ],
    'mediumpurple' => [
      'hex' => '#9370db',
      'rgb' => '147,112,219',
    ],
    'mediumseagreen' => [
      'hex' => '#3cb371',
      'rgb' => '60,179,113',
    ],
    'mediumslateblue' => [
      'hex' => '#7b68ee',
      'rgb' => '123,104,238',
    ],
    'mediumspringgreen' => [
      'hex' => '#00fa9a',
      'rgb' => '0,250,154',
    ],
    'mediumturquoise' => [
      'hex' => '#48d1cc',
      'rgb' => '72,209,204',
    ],
    'mediumvioletred' => [
      'hex' => '#c71585',
      'rgb' => '199,21,133',
    ],
    'midnightblue' => [
      'hex' => '#191970',
      'rgb' => '25,25,112',
    ],
    'mintcream' => [
      'hex' => '#f5fffa',
      'rgb' => '245,255,250',
    ],
    'mistyrose' => [
      'hex' => '#ffe4e1',
      'rgb' => '255,228,225',
    ],
    'moccasin' => [
      'hex' => '#ffe4b5',
      'rgb' => '255,228,181',
    ],
    'navajowhite' => [
      'hex' => '#ffdead',
      'rgb' => '255,222,173',
    ],
    'navy' => [
      'hex' => '#000080',
      'rgb' => '0,0,128',
    ],
    'oldlace' => [
      'hex' => '#fdf5e6',
      'rgb' => '253,245,230',
    ],
    'olive' => [
      'hex' => '#808000',
      'rgb' => '128,128,0',
    ],
    'olivedrab' => [
      'hex' => '#6b8e23',
      'rgb' => '107,142,35',
    ],
    'orange' => [
      'hex' => '#ffa500',
      'rgb' => '255,165,0',
    ],
    'orangered' => [
      'hex' => '#ff4500',
      'rgb' => '255,69,0',
    ],
    'orchid' => [
      'hex' => '#da70d6',
      'rgb' => '218,112,214',
    ],
    'palegoldenrod' => [
      'hex' => '#eee8aa',
      'rgb' => '238,232,170',
    ],
    'palegreen' => [
      'hex' => '#98fb98',
      'rgb' => '152,251,152',
    ],
    'paleturquoise' => [
      'hex' => '#afeeee',
      'rgb' => '175,238,238',
    ],
    'palevioletred' => [
      'hex' => '#db7093',
      'rgb' => '219,112,147',
    ],
    'papayawhip' => [
      'hex' => '#ffefd5',
      'rgb' => '255,239,213',
    ],
    'peachpuff' => [
      'hex' => '#ffdab9',
      'rgb' => '255,218,185',
    ],
    'peru' => [
      'hex' => '#cd853f',
      'rgb' => '205,133,63',
    ],
    'pink' => [
      'hex' => '#ffc0cb',
      'rgb' => '255,192,203',
    ],
    'plum' => [
      'hex' => '#dda0dd',
      'rgb' => '221,160,221',
    ],
    'powderblue' => [
      'hex' => '#b0e0e6',
      'rgb' => '176,224,230',
    ],
    'purple' => [
      'hex' => '#800080',
      'rgb' => '128,0,128',
    ],
    'red' => [
      'hex' => '#ff0000',
      'rgb' => '255,0,0',
    ],
    'rosybrown' => [
      'hex' => '#bc8f8f',
      'rgb' => '188,143,143',
    ],
    'royalblue' => [
      'hex' => '#4169e1',
      'rgb' => '65,105,225',
    ],
    'saddlebrown' => [
      'hex' => '#8b4513',
      'rgb' => '139,69,19',
    ],
    'salmon' => [
      'hex' => '#fa8072',
      'rgb' => '250,128,114',
    ],
    'sandybrown' => [
      'hex' => '#f4a460',
      'rgb' => '244,164,96',
    ],
    'seagreen' => [
      'hex' => '#2e8b57',
      'rgb' => '46,139,87',
    ],
    'seashell' => [
      'hex' => '#fff5ee',
      'rgb' => '255,245,238',
    ],
    'sienna' => [
      'hex' => '#a0522d',
      'rgb' => '160,82,45',
    ],
    'silver' => [
      'hex' => '#c0c0c0',
      'rgb' => '192,192,192',
    ],
    'skyblue' => [
      'hex' => '#87ceeb',
      'rgb' => '135,206,235',
    ],
    'slateblue' => [
      'hex' => '#6a5acd',
      'rgb' => '106,90,205',
    ],
    'slategray' => [
      'hex' => '#708090',
      'rgb' => '112,128,144',
    ],
    'slategrey' => [
      'hex' => '#708090',
      'rgb' => '112,128,144',
    ],
    'snow' => [
      'hex' => '#fffafa',
      'rgb' => '255,250,250',
    ],
    'springgreen' => [
      'hex' => '#00ff7f',
      'rgb' => '0,255,127',
    ],
    'steelblue' => [
      'hex' => '#4682b4',
      'rgb' => '70,130,180',
    ],
    'tan' => [
      'hex' => '#d2b48c',
      'rgb' => '210,180,140',
    ],
    'teal' => [
      'hex' => '#008080',
      'rgb' => '0,128,128',
    ],
    'thistle' => [
      'hex' => '#d8bfd8',
      'rgb' => '216,191,216',
    ],
    'tomato' => [
      'hex' => '#ff6347',
      'rgb' => '255,99,71',
    ],
    'turquoise' => [
      'hex' => '#40e0d0',
      'rgb' => '64,224,208',
    ],
    'violet' => [
      'hex' => '#ee82ee',
      'rgb' => '238,130,238',
    ],
    'wheat' => [
      'hex' => '#f5deb3',
      'rgb' => '245,222,179',
    ],
    'white' => [
      'hex' => '#ffffff',
      'rgb' => '255,255,255',
    ],
    'whitesmoke' => [
      'hex' => '#f5f5f5',
      'rgb' => '245,245,245',
    ],
    'yellow' => [
      'hex' => '#ffff00',
      'rgb' => '255,255,0',
    ],
    'yellowgreen' => [
      'hex' => '#9acd32',
      'rgb' => '154,205,50',
    ]
  ];

  /*
  public const aliceblue = '#f0f8ff';	// RGB: 240,248,255',
  public const antiquewhite = '#faebd7';	// RGB: 250,235,215',
  public const aqua = '#00ffff';	// RGB: 0,255,255',
  public const aquamarine = '#7fffd4';	// RGB: 127,255,212',
  public const azure = '#f0ffff';	// RGB: 240,255,255',
  public const beige = '#f5f5dc';	// RGB: 245,245,220',
  public const bisque = '#ffe4c4';	// RGB: 255,228,196',
  public const black = '#000000';	// RGB: 0,0,0',
  public const blanchedalmond = '#ffebcd';	// RGB: 255,235,205',
  public const blue = '#0000ff';	// RGB: 0,0,255',
  public const blueviolet = '#8a2be2';	// RGB: 138,43,226',
  public const brown = '#a52a2a';	// RGB: 165,42,42',
  public const burlywood = '#deb887';	// RGB: 222,184,135',
  public const cadetblue = '#5f9ea0';	// RGB: 95,158,160',
  public const chartreuse = '#7fff00';	// RGB: 127,255,0',
  public const chocolate = '#d2691e';	// RGB: 210,105,30',
  public const coral = '#ff7f50';	// RGB: 255,127,80',
  public const cornflowerblue = '#6495ed';	// RGB: 100,149,237',
  public const cornsilk = '#fff8dc';	// RGB: 255,248,220',
  public const crimson = '#dc143c';	// RGB: 220,20,60',
  public const cyan = '#00ffff';	// RGB: 0,255,255',
  public const darkblue = '#00008b';	// RGB: 0,0,139',
  public const darkcyan = '#008b8b';	// RGB: 0,139,139',
  public const darkgoldenrod = '#b8860b';	// RGB: 184,134,11',
  public const darkgray = '#a9a9a9';	// RGB: 169,169,169',
  public const darkgreen = '#006400';	// RGB: 0,100,0',
  public const darkgrey = '#a9a9a9';	// RGB: 169,169,169',
  public const darkkhaki = '#bdb76b';	// RGB: 189,183,107',
  public const darkmagenta = '#8b008b';	// RGB: 139,0,139',
  public const darkolivegreen = '#556b2f';	// RGB: 85,107,47',
  public const darkorange = '#ff8c00';	// RGB: 255,140,0',
  public const darkorchid = '#9932cc';	// RGB: 153,50,204',
  public const darkred = '#8b0000';	// RGB: 139,0,0',
  public const darksalmon = '#e9967a';	// RGB: 233,150,122',
  public const darkseagreen = '#8fbc8f';	// RGB: 143,188,143',
  public const darkslateblue = '#483d8b';	// RGB: 72,61,139',
  public const darkslategray = '#2f4f4f';	// RGB: 47,79,79',
  public const darkslategrey = '#2f4f4f';	// RGB: 47,79,79',
  public const darkturquoise = '#00ced1';	// RGB: 0,206,209',
  public const darkviolet = '#9400d3';	// RGB: 148,0,211',
  public const deeppink = '#ff1493';	// RGB: 255,20,147',
  public const deepskyblue = '#00bfff';	// RGB: 0,191,255',
  public const dimgray = '#696969';	// RGB: 105,105,105',
  public const dimgrey = '#696969';	// RGB: 105,105,105',
  public const dodgerblue = '#1e90ff';	// RGB: 30,144,255',
  public const firebrick = '#b22222';	// RGB: 178,34,34',
  public const floralwhite = '#fffaf0';	// RGB: 255,250,240',
  public const forestgreen = '#228b22';	// RGB: 34,139,34',
  public const fuchsia = '#ff00ff';	// RGB: 255,0,255',
  public const gainsboro = '#dcdcdc';	// RGB: 220,220,220',
  public const ghostwhite = '#f8f8ff';	// RGB: 248,248,255',
  public const gold = '#ffd700';	// RGB: 255,215,0',
  public const goldenrod = '#daa520';	// RGB: 218,165,32',
  public const gray = '#808080';	// RGB: 128,128,128',
  public const green = '#008000';	// RGB: 0,128,0',
  public const greenyellow = '#adff2f';	// RGB: 173,255,47',
  public const grey = '#808080';	// RGB: 128,128,128',
  public const honeydew = '#f0fff0';	// RGB: 240,255,240',
  public const hotpink = '#ff69b4';	// RGB: 255,105,180',
  public const indianred = '#cd5c5c';	// RGB: 205,92,92',
  public const indigo = '#4b0082';	// RGB: 75,0,130',
  public const ivory = '#fffff0';	// RGB: 255,255,240',
  public const khaki = '#f0e68c';	// RGB: 240,230,140',
  public const lavender = '#e6e6fa';	// RGB: 230,230,250',
  public const lavenderblush = '#fff0f5';	// RGB: 255,240,245',
  public const lawngreen = '#7cfc00';	// RGB: 124,252,0',
  public const lemonchiffon = '#fffacd';	// RGB: 255,250,205',
  public const lightblue = '#add8e6';	// RGB: 173,216,230',
  public const lightcoral = '#f08080';	// RGB: 240,128,128',
  public const lightcyan = '#e0ffff';	// RGB: 224,255,255',
  public const lightgoldenrodyellow = '#fafad2';	// RGB: 250,250,210',
  public const lightgray = '#d3d3d3';	// RGB: 211,211,211',
  public const lightgreen = '#90ee90';	// RGB: 144,238,144',
  public const lightgrey = '#d3d3d3';	// RGB: 211,211,211',
  public const lightpink = '#ffb6c1';	// RGB: 255,182,193',
  public const lightsalmon = '#ffa07a';	// RGB: 255,160,122',
  public const lightseagreen = '#20b2aa';	// RGB: 32,178,170',
  public const lightskyblue = '#87cefa';	// RGB: 135,206,250',
  public const lightslategray = '#778899';	// RGB: 119,136,153',
  public const lightslategrey = '#778899';	// RGB: 119,136,153',
  public const lightsteelblue = '#b0c4de';	// RGB: 176,196,222',
  public const lightyellow = '#ffffe0';	// RGB: 255,255,224',
  public const lime = '#00ff00';	// RGB: 0,255,0',
  public const limegreen = '#32cd32';	// RGB: 50,205,50',
  public const linen = '#faf0e6';	// RGB: 250,240,230',
  public const magenta = '#ff00ff';	// RGB: 255,0,255',
  public const maroon = '#800000';	// RGB: 128,0,0',
  public const mediumaquamarine = '#66cdaa';	// RGB: 102,205,170',
  public const mediumblue = '#0000cd';	// RGB: 0,0,205',
  public const mediumorchid = '#ba55d3';	// RGB: 186,85,211',
  public const mediumpurple = '#9370db';	// RGB: 147,112,219',
  public const mediumseagreen = '#3cb371';	// RGB: 60,179,113',
  public const mediumslateblue = '#7b68ee';	// RGB: 123,104,238',
  public const mediumspringgreen = '#00fa9a';	// RGB: 0,250,154',
  public const mediumturquoise = '#48d1cc';	// RGB: 72,209,204',
  public const mediumvioletred = '#c71585';	// RGB: 199,21,133',
  public const midnightblue = '#191970';	// RGB: 25,25,112',
  public const mintcream = '#f5fffa';	// RGB: 245,255,250',
  public const mistyrose = '#ffe4e1';	// RGB: 255,228,225',
  public const moccasin = '#ffe4b5';	// RGB: 255,228,181',
  public const navajowhite = '#ffdead';	// RGB: 255,222,173',
  public const navy = '#000080';	// RGB: 0,0,128',
  public const oldlace = '#fdf5e6';	// RGB: 253,245,230',
  public const olive = '#808000';	// RGB: 128,128,0',
  public const olivedrab = '#6b8e23';	// RGB: 107,142,35',
  public const orange = '#ffa500';	// RGB: 255,165,0',
  public const orangered = '#ff4500';	// RGB: 255,69,0',
  public const orchid = '#da70d6';	// RGB: 218,112,214',
  public const palegoldenrod = '#eee8aa';	// RGB: 238,232,170',
  public const palegreen = '#98fb98';	// RGB: 152,251,152',
  public const paleturquoise = '#afeeee';	// RGB: 175,238,238',
  public const palevioletred = '#db7093';	// RGB: 219,112,147',
  public const papayawhip = '#ffefd5';	// RGB: 255,239,213',
  public const peachpuff = '#ffdab9';	// RGB: 255,218,185',
  public const peru = '#cd853f';	// RGB: 205,133,63',
  public const pink = '#ffc0cb';	// RGB: 255,192,203',
  public const plum = '#dda0dd';	// RGB: 221,160,221',
  public const powderblue = '#b0e0e6';	// RGB: 176,224,230',
  public const purple = '#800080';	// RGB: 128,0,128',
  public const red = '#ff0000';	// RGB: 255,0,0',
  public const rosybrown = '#bc8f8f';	// RGB: 188,143,143',
  public const royalblue = '#4169e1';	// RGB: 65,105,225',
  public const saddlebrown = '#8b4513';	// RGB: 139,69,19',
  public const salmon = '#fa8072';	// RGB: 250,128,114',
  public const sandybrown = '#f4a460';	// RGB: 244,164,96',
  public const seagreen = '#2e8b57';	// RGB: 46,139,87',
  public const seashell = '#fff5ee';	// RGB: 255,245,238',
  public const sienna = '#a0522d';	// RGB: 160,82,45',
  public const silver = '#c0c0c0';	// RGB: 192,192,192',
  public const skyblue = '#87ceeb';	// RGB: 135,206,235',
  public const slateblue = '#6a5acd';	// RGB: 106,90,205',
  public const slategray = '#708090';	// RGB: 112,128,144',
  public const slategrey = '#708090';	// RGB: 112,128,144',
  public const snow = '#fffafa';	// RGB: 255,250,250',
  public const springgreen = '#00ff7f';	// RGB: 0,255,127',
  public const steelblue = '#4682b4';	// RGB: 70,130,180',
  public const tan = '#d2b48c';	// RGB: 210,180,140',
  public const teal = '#008080';	// RGB: 0,128,128',
  public const thistle = '#d8bfd8';	// RGB: 216,191,216',
  public const tomato = '#ff6347';	// RGB: 255,99,71',
  public const turquoise = '#40e0d0';	// RGB: 64,224,208',
  public const violet = '#ee82ee';	// RGB: 238,130,238',
  public const wheat = '#f5deb3';	// RGB: 245,222,179',
  public const white = '#ffffff';	// RGB: 255,255,255',
  public const whitesmoke = '#f5f5f5';	// RGB: 245,245,245',
  public const yellow = '#ffff00';	// RGB: 255,255,0',
  public const yellowgreen = '#9acd32';	// RGB: 154,205,50',
  */
}