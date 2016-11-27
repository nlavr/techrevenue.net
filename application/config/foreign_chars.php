<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| Foreign Characters
| -------------------------------------------------------------------
| This file contains an array of foreign characters for transliteration
| conversion used by the Text helper
|
*/
$foreign_characters = array(
	'/ä|æ|ǽ/' => 'ae',
	'/ö|œ/' => 'oe',
	'/ü/' => 'ue',
	'/Ä/' => 'Ae',
	'/Ü/' => 'Ue',
	'/Ö/' => 'Oe',
	'/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ/' => 'A',
	'/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª/' => 'a',
	'/Ç|Ć|Ĉ|Ċ|Č/' => 'C',
	'/ç|ć|ĉ|ċ|č/' => 'c',
	'/Ð|Ď|Đ/' => 'D',
	'/ð|ď|đ/' => 'd',
	'/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě/' => 'E',
	'/è|é|ê|ë|ē|ĕ|ė|ę|ě/' => 'e',
	'/Ĝ|Ğ|Ġ|Ģ/' => 'G',
	'/ĝ|ğ|ġ|ģ/' => 'g',
	'/Ĥ|Ħ/' => 'H',
	'/ĥ|ħ/' => 'h',
	'/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ/' => 'I',
	'/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı/' => 'i',
	'/Ĵ/' => 'J',
	'/ĵ/' => 'j',
	'/Ķ/' => 'K',
	'/ķ/' => 'k',
	'/Ĺ|Ļ|Ľ|Ŀ|Ł/' => 'L',
	'/ĺ|ļ|ľ|ŀ|ł/' => 'l',
	'/Ñ|Ń|Ņ|Ň/' => 'N',
	'/ñ|ń|ņ|ň|ŉ/' => 'n',
	'/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ/' => 'O',
	'/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º/' => 'o',
	'/Ŕ|Ŗ|Ř/' => 'R',
	'/ŕ|ŗ|ř/' => 'r',
	'/Ś|Ŝ|Ş|Š/' => 'S',
	'/ś|ŝ|ş|š|ſ/' => 's',
	'/Ţ|Ť|Ŧ/' => 'T',
	'/ţ|ť|ŧ/' => 't',
	'/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ/' => 'U',
	'/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ/' => 'u',
	'/Ý|Ÿ|Ŷ/' => 'Y',
	'/ý|ÿ|ŷ/' => 'y',
	'/Ŵ/' => 'W',
	'/ŵ/' => 'w',
	'/Ź|Ż|Ž/' => 'Z',
	'/ź|ż|ž/' => 'z',
	'/Æ|Ǽ/' => 'AE',
	'/ß/'=> 'ss',
	'/Ĳ/' => 'IJ',
	'/ĳ/' => 'ij',
	'/Œ/' => 'OE',
	'/ƒ/' => 'f',

	'/ж/' => 'zh',
	'/ч/' => 'ch',
	'/щ/' => 'sht',
	'/ш/' => 'sh',
	'/ю/' => 'yu',
	'/а/' => 'a',
	'/б/' => 'b',
	'/в/' => 'v',
	'/г/' => 'g',
	'/д/' => 'd',
	'/e/' => 'e',
	'/з/' => 'z',
	'/и/' => 'i',
	'/й/' => 'j',
	'/к/' => 'k',
	'/л/' => 'l',
	'/м/' => 'm',
	'/н/' => 'n',
	'/о/' => 'o',
	'/п/' => 'p',
	'/р/' => 'r',
	'/с/' => 's',
	'/т/' => 't',
	'/у/' => 'u',
	'/ф/' => 'f',
	'/х/' => 'h',
	'/ц/' => 'c',
	'/ъ/' => 'y',
	'/ь/' => 'h',
	'/я/' => 'q',
	'/Ж/' => 'Zh',
	'/Ч/' => 'Ch',
	'/Щ/' => 'Sht',
	'/Ш/' => 'Sh',
	'/Ю/' => 'Yu',
	'/А/' => 'A',
	'/Б/' => 'B',
	'/В/' => 'V',
	'/Г/' => 'G',
	'/Д/' => 'D',
	'/Е/' => 'E',
	'/З/' => 'Z',
	'/И/' => 'I',
	'/Й/' => 'J',
	'/К/' => 'K',
	'/Л/' => 'L',
	'/М/' => 'M',
	'/Н/' => 'N',
	'/О/' => 'O',
	'/П/' => 'P',
	'/Р/' => 'R',
	'/С/' => 'S',
	'/Т/' => 'T',
	'/У/' => 'U',
	'/Ф/' => 'F',
	'/Х/' => 'H',
	'/Ц/' => 'c',
	'/Ъ/' => 'Y',
	'/Ь/' => 'X',
	'/Я/' => 'Q',
	
	'/ё/' => 'e',
	'/э/' => 'e',
	'/ы/' => 'y',
	'/Э/' => 'E',
	'/Ы/' => 'Y',
	'/Ё/' => 'E'
	
);

/* End of file foreign_chars.php */
/* Location: ./application/config/foreign_chars.php */