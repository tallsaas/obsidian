# Obsidian Opinionated Templating System for Laravel

## Colors
To get the color red by name:
`
use Obsidian\Style\Web\Color;

$red = (new Color)->red;
$red = new Color('red'); 
$red = new Color(name: 'red');
$red = Color::red();

// Above will output an array -> ['name' => 'red', 'hex' => '#ff0000', 'rgb' => '255,0,0'];

$red = Color::red; 

// Above constant will output an array -> ['name' => 'red', 'hex' => '#ff0000', 'rgb' => '255,0,0'];

`