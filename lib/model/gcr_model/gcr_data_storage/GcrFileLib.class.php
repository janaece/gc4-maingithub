<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GcrFileLib:
 * 
 *
 * @author Ron Stewart
 */
class GcrFileLib 
{
    public static function getVideoEmbedHtml($fullurl, $width = '100%', $height = '100%', $mimetype = false)
    {
        global $CFG;
        if (!$mimetype)
        {
            $mimetype = self::mimeinfo($fullurl);
        }
        $code = '<video style="width:' . $width . ';height:' . $height . '" width="'. 
                $width . '" height="' . $height . '" id="mediaelementjs" controls="controls" preload="none">';
        $code .= '<source src="'. $fullurl .'" type="' . $mimetype . '">';
        $code .= '</video>';
        return $code;
    }
    public static function getAudioEmbedHtml($fullurl, $mimetype = false)
    {
        global $CFG;
        if (!$mimetype)
        {
            $mimetype = self::mimeinfo($fullurl);
        }
        $code = '<audio src="'. $fullurl .'" type="' . $mimetype . '"></audio>';
        return $code;
    }
    public static function mimeinfo($filename)
    {
        $mimeinfo = self::getMimetypesArray();
        $s3_url = GcrUserStorageS3Table::parseS3Url($filename);
        if ($s3_url)
        {
            $filename = $s3_url;
        }
        if (preg_match('/\.([a-z0-9]+)$/i', $filename, $match)) 
        {
            if (isset($mimeinfo[strtolower($match[1])]['type'])) 
            {
                return $mimeinfo[strtolower($match[1])]['type'];
            }
        }
        return false;
    }
    public static function getMimetypesArray() 
    {
        static $mimearray = array (
        'xxx'  => array ('type'=>'document/unknown', 'icon'=>'unknown'),
        '3gp'  => array ('type'=>'video/quicktime', 'icon'=>'quicktime', 'groups'=>array('video'), 'string'=>'video'),
        'aac'  => array ('type'=>'audio/aac', 'icon'=>'audio', 'groups'=>array('audio'), 'string'=>'audio'),
        'accdb'  => array ('type'=>'application/msaccess', 'icon'=>'base'),
        'ai'   => array ('type'=>'application/postscript', 'icon'=>'eps', 'groups'=>array('image'), 'string'=>'image'),
        'aif'  => array ('type'=>'audio/x-aiff', 'icon'=>'audio', 'groups'=>array('audio'), 'string'=>'audio'),
        'aiff' => array ('type'=>'audio/x-aiff', 'icon'=>'audio', 'groups'=>array('audio'), 'string'=>'audio'),
        'aifc' => array ('type'=>'audio/x-aiff', 'icon'=>'audio', 'groups'=>array('audio'), 'string'=>'audio'),
        'applescript'  => array ('type'=>'text/plain', 'icon'=>'text'),
        'asc'  => array ('type'=>'text/plain', 'icon'=>'sourcecode'),
        'asm'  => array ('type'=>'text/plain', 'icon'=>'sourcecode'),
        'au'   => array ('type'=>'audio/au', 'icon'=>'audio', 'groups'=>array('audio'), 'string'=>'audio'),
        'avi'  => array ('type'=>'video/x-ms-wm', 'icon'=>'avi', 'groups'=>array('video','web_video'), 'string'=>'video'),
        'bmp'  => array ('type'=>'image/bmp', 'icon'=>'bmp', 'groups'=>array('image'), 'string'=>'image'),
        'c'    => array ('type'=>'text/plain', 'icon'=>'sourcecode'),
        'cct'  => array ('type'=>'shockwave/director', 'icon'=>'flash'),
        'cpp'  => array ('type'=>'text/plain', 'icon'=>'sourcecode'),
        'cs'   => array ('type'=>'application/x-csh', 'icon'=>'sourcecode'),
        'css'  => array ('type'=>'text/css', 'icon'=>'text', 'groups'=>array('web_file')),
        'csv'  => array ('type'=>'text/csv', 'icon'=>'spreadsheet', 'groups'=>array('spreadsheet')),
        'dv'   => array ('type'=>'video/x-dv', 'icon'=>'quicktime', 'groups'=>array('video'), 'string'=>'video'),
        'dmg'  => array ('type'=>'application/octet-stream', 'icon'=>'unknown'),

        'doc'  => array ('type'=>'application/msword', 'icon'=>'document', 'groups'=>array('document')),
        'docx' => array ('type'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'icon'=>'document', 'groups'=>array('document')),
        'docm' => array ('type'=>'application/vnd.ms-word.document.macroEnabled.12', 'icon'=>'document'),
        'dotx' => array ('type'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.template', 'icon'=>'document'),
        'dotm' => array ('type'=>'application/vnd.ms-word.template.macroEnabled.12', 'icon'=>'document'),

        'dcr'  => array ('type'=>'application/x-director', 'icon'=>'flash'),
        'dif'  => array ('type'=>'video/x-dv', 'icon'=>'quicktime', 'groups'=>array('video'), 'string'=>'video'),
        'dir'  => array ('type'=>'application/x-director', 'icon'=>'flash'),
        'dxr'  => array ('type'=>'application/x-director', 'icon'=>'flash'),
        'eps'  => array ('type'=>'application/postscript', 'icon'=>'eps'),
        'epub' => array ('type'=>'application/epub+zip', 'icon'=>'epub', 'groups'=>array('document')),
        'fdf'  => array ('type'=>'application/pdf', 'icon'=>'pdf'),
        'flv'  => array ('type'=>'video/x-flv', 'icon'=>'flash', 'groups'=>array('video','web_video'), 'string'=>'video'),
        'f4v'  => array ('type'=>'video/mp4', 'icon'=>'flash', 'groups'=>array('video','web_video'), 'string'=>'video'),

        'gallery'           => array ('type'=>'application/x-smarttech-notebook', 'icon'=>'archive'),
        'galleryitem'       => array ('type'=>'application/x-smarttech-notebook', 'icon'=>'archive'),
        'gallerycollection' => array ('type'=>'application/x-smarttech-notebook', 'icon'=>'archive'),
        'gif'  => array ('type'=>'image/gif', 'icon'=>'gif', 'groups'=>array('image', 'web_image'), 'string'=>'image'),
        'gtar' => array ('type'=>'application/x-gtar', 'icon'=>'archive', 'groups'=>array('archive'), 'string'=>'archive'),
        'tgz'  => array ('type'=>'application/g-zip', 'icon'=>'archive', 'groups'=>array('archive'), 'string'=>'archive'),
        'gz'   => array ('type'=>'application/g-zip', 'icon'=>'archive', 'groups'=>array('archive'), 'string'=>'archive'),
        'gzip' => array ('type'=>'application/g-zip', 'icon'=>'archive', 'groups'=>array('archive'), 'string'=>'archive'),
        'h'    => array ('type'=>'text/plain', 'icon'=>'sourcecode'),
        'hpp'  => array ('type'=>'text/plain', 'icon'=>'sourcecode'),
        'hqx'  => array ('type'=>'application/mac-binhex40', 'icon'=>'archive', 'groups'=>array('archive'), 'string'=>'archive'),
        'htc'  => array ('type'=>'text/x-component', 'icon'=>'markup'),
        'html' => array ('type'=>'text/html', 'icon'=>'html', 'groups'=>array('web_file')),
        'xhtml'=> array ('type'=>'application/xhtml+xml', 'icon'=>'html', 'groups'=>array('web_file')),
        'htm'  => array ('type'=>'text/html', 'icon'=>'html', 'groups'=>array('web_file')),
        'ico'  => array ('type'=>'image/vnd.microsoft.icon', 'icon'=>'image', 'groups'=>array('image'), 'string'=>'image'),
        'ics'  => array ('type'=>'text/calendar', 'icon'=>'text'),
        'isf'  => array ('type'=>'application/inspiration', 'icon'=>'isf'),
        'ist'  => array ('type'=>'application/inspiration.template', 'icon'=>'isf'),
        'java' => array ('type'=>'text/plain', 'icon'=>'sourcecode'),
        'jar'  => array ('type'=>'application/java-archive', 'icon' => 'archive'),
        'jcb'  => array ('type'=>'text/xml', 'icon'=>'markup'),
        'jcl'  => array ('type'=>'text/xml', 'icon'=>'markup'),
        'jcw'  => array ('type'=>'text/xml', 'icon'=>'markup'),
        'jmt'  => array ('type'=>'text/xml', 'icon'=>'markup'),
        'jmx'  => array ('type'=>'text/xml', 'icon'=>'markup'),
        'jpe'  => array ('type'=>'image/jpeg', 'icon'=>'jpeg', 'groups'=>array('image', 'web_image'), 'string'=>'image'),
        'jpeg' => array ('type'=>'image/jpeg', 'icon'=>'jpeg', 'groups'=>array('image', 'web_image'), 'string'=>'image'),
        'jpg'  => array ('type'=>'image/jpeg', 'icon'=>'jpeg', 'groups'=>array('image', 'web_image'), 'string'=>'image'),
        'jqz'  => array ('type'=>'text/xml', 'icon'=>'markup'),
        'js'   => array ('type'=>'application/x-javascript', 'icon'=>'text', 'groups'=>array('web_file')),
        'latex'=> array ('type'=>'application/x-latex', 'icon'=>'text'),
        'm'    => array ('type'=>'text/plain', 'icon'=>'sourcecode'),
        'mbz'  => array ('type'=>'application/vnd.moodle.backup', 'icon'=>'moodle'),
        'mdb'  => array ('type'=>'application/x-msaccess', 'icon'=>'base'),
        'mht'  => array ('type'=>'message/rfc822', 'icon'=>'archive'),
        'mhtml'=> array ('type'=>'message/rfc822', 'icon'=>'archive'),
        'mov'  => array ('type'=>'video/quicktime', 'icon'=>'quicktime', 'groups'=>array('video','web_video'), 'string'=>'video'),
        'movie'=> array ('type'=>'video/x-sgi-movie', 'icon'=>'quicktime', 'groups'=>array('video'), 'string'=>'video'),
        'm3u'  => array ('type'=>'audio/x-mpegurl', 'icon'=>'mp3', 'groups'=>array('audio'), 'string'=>'audio'),
        'mp3'  => array ('type'=>'audio/mp3', 'icon'=>'mp3', 'groups'=>array('audio','web_audio'), 'string'=>'audio'),
        'mp4'  => array ('type'=>'video/mp4', 'icon'=>'mpeg', 'groups'=>array('video','web_video'), 'string'=>'video'),
        'm4v'  => array ('type'=>'video/mp4', 'icon'=>'mpeg', 'groups'=>array('video','web_video'), 'string'=>'video'),
        'm4a'  => array ('type'=>'audio/mp4', 'icon'=>'mp3', 'groups'=>array('audio'), 'string'=>'audio'),
        'mpeg' => array ('type'=>'video/mpeg', 'icon'=>'mpeg', 'groups'=>array('video','web_video'), 'string'=>'video'),
        'mpe'  => array ('type'=>'video/mpeg', 'icon'=>'mpeg', 'groups'=>array('video','web_video'), 'string'=>'video'),
        'mpg'  => array ('type'=>'video/mpeg', 'icon'=>'mpeg', 'groups'=>array('video','web_video'), 'string'=>'video'),

        'nbk'       => array ('type'=>'application/x-smarttech-notebook', 'icon'=>'archive'),
        'notebook'  => array ('type'=>'application/x-smarttech-notebook', 'icon'=>'archive'),

        'odt'  => array ('type'=>'application/vnd.oasis.opendocument.text', 'icon'=>'writer', 'groups'=>array('document')),
        'ott'  => array ('type'=>'application/vnd.oasis.opendocument.text-template', 'icon'=>'writer', 'groups'=>array('document')),
        'oth'  => array ('type'=>'application/vnd.oasis.opendocument.text-web', 'icon'=>'oth', 'groups'=>array('document')),
        'odm'  => array ('type'=>'application/vnd.oasis.opendocument.text-master', 'icon'=>'writer'),
        'odg'  => array ('type'=>'application/vnd.oasis.opendocument.graphics', 'icon'=>'draw'),
        'otg'  => array ('type'=>'application/vnd.oasis.opendocument.graphics-template', 'icon'=>'draw'),
        'odp'  => array ('type'=>'application/vnd.oasis.opendocument.presentation', 'icon'=>'impress'),
        'otp'  => array ('type'=>'application/vnd.oasis.opendocument.presentation-template', 'icon'=>'impress'),
        'ods'  => array ('type'=>'application/vnd.oasis.opendocument.spreadsheet', 'icon'=>'calc', 'groups'=>array('spreadsheet')),
        'ots'  => array ('type'=>'application/vnd.oasis.opendocument.spreadsheet-template', 'icon'=>'calc', 'groups'=>array('spreadsheet')),
        'odc'  => array ('type'=>'application/vnd.oasis.opendocument.chart', 'icon'=>'chart'),
        'odf'  => array ('type'=>'application/vnd.oasis.opendocument.formula', 'icon'=>'math'),
        'odb'  => array ('type'=>'application/vnd.oasis.opendocument.database', 'icon'=>'base'),
        'odi'  => array ('type'=>'application/vnd.oasis.opendocument.image', 'icon'=>'draw'),
        'oga'  => array ('type'=>'audio/ogg', 'icon'=>'audio', 'groups'=>array('audio'), 'string'=>'audio'),
        'ogg'  => array ('type'=>'audio/ogg', 'icon'=>'audio', 'groups'=>array('audio'), 'string'=>'audio'),
        'ogv'  => array ('type'=>'video/ogg', 'icon'=>'video', 'groups'=>array('video'), 'string'=>'video'),

        'pct'  => array ('type'=>'image/pict', 'icon'=>'image', 'groups'=>array('image'), 'string'=>'image'),
        'pdf'  => array ('type'=>'application/pdf', 'icon'=>'pdf'),
        'php'  => array ('type'=>'text/plain', 'icon'=>'sourcecode'),
        'pic'  => array ('type'=>'image/pict', 'icon'=>'image', 'groups'=>array('image'), 'string'=>'image'),
        'pict' => array ('type'=>'image/pict', 'icon'=>'image', 'groups'=>array('image'), 'string'=>'image'),
        'png'  => array ('type'=>'image/png', 'icon'=>'png', 'groups'=>array('image', 'web_image'), 'string'=>'image'),

        'pps'  => array ('type'=>'application/vnd.ms-powerpoint', 'icon'=>'powerpoint', 'groups'=>array('presentation')),
        'ppt'  => array ('type'=>'application/vnd.ms-powerpoint', 'icon'=>'powerpoint', 'groups'=>array('presentation')),
        'pptx' => array ('type'=>'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'icon'=>'powerpoint'),
        'pptm' => array ('type'=>'application/vnd.ms-powerpoint.presentation.macroEnabled.12', 'icon'=>'powerpoint'),
        'potx' => array ('type'=>'application/vnd.openxmlformats-officedocument.presentationml.template', 'icon'=>'powerpoint'),
        'potm' => array ('type'=>'application/vnd.ms-powerpoint.template.macroEnabled.12', 'icon'=>'powerpoint'),
        'ppam' => array ('type'=>'application/vnd.ms-powerpoint.addin.macroEnabled.12', 'icon'=>'powerpoint'),
        'ppsx' => array ('type'=>'application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'icon'=>'powerpoint'),
        'ppsm' => array ('type'=>'application/vnd.ms-powerpoint.slideshow.macroEnabled.12', 'icon'=>'powerpoint'),

        'ps'   => array ('type'=>'application/postscript', 'icon'=>'pdf'),
        'qt'   => array ('type'=>'video/quicktime', 'icon'=>'quicktime', 'groups'=>array('video','web_video'), 'string'=>'video'),
        'ra'   => array ('type'=>'audio/x-realaudio-plugin', 'icon'=>'audio', 'groups'=>array('audio','web_audio'), 'string'=>'audio'),
        'ram'  => array ('type'=>'audio/x-pn-realaudio-plugin', 'icon'=>'audio', 'groups'=>array('audio'), 'string'=>'audio'),
        'rhb'  => array ('type'=>'text/xml', 'icon'=>'markup'),
        'rm'   => array ('type'=>'audio/x-pn-realaudio-plugin', 'icon'=>'audio', 'groups'=>array('audio'), 'string'=>'audio'),
        'rmvb' => array ('type'=>'application/vnd.rn-realmedia-vbr', 'icon'=>'video', 'groups'=>array('video'), 'string'=>'video'),
        'rtf'  => array ('type'=>'text/rtf', 'icon'=>'text', 'groups'=>array('document')),
        'rtx'  => array ('type'=>'text/richtext', 'icon'=>'text'),
        'rv'   => array ('type'=>'audio/x-pn-realaudio-plugin', 'icon'=>'audio', 'groups'=>array('video'), 'string'=>'video'),
        'sh'   => array ('type'=>'application/x-sh', 'icon'=>'sourcecode'),
        'sit'  => array ('type'=>'application/x-stuffit', 'icon'=>'archive', 'groups'=>array('archive'), 'string'=>'archive'),
        'smi'  => array ('type'=>'application/smil', 'icon'=>'text'),
        'smil' => array ('type'=>'application/smil', 'icon'=>'text'),
        'sqt'  => array ('type'=>'text/xml', 'icon'=>'markup'),
        'svg'  => array ('type'=>'image/svg+xml', 'icon'=>'image', 'groups'=>array('image','web_image'), 'string'=>'image'),
        'svgz' => array ('type'=>'image/svg+xml', 'icon'=>'image', 'groups'=>array('image','web_image'), 'string'=>'image'),
        'swa'  => array ('type'=>'application/x-director', 'icon'=>'flash'),
        'swf'  => array ('type'=>'application/x-shockwave-flash', 'icon'=>'flash', 'groups'=>array('video','web_video')),
        'swfl' => array ('type'=>'application/x-shockwave-flash', 'icon'=>'flash', 'groups'=>array('video','web_video')),

        'sxw'  => array ('type'=>'application/vnd.sun.xml.writer', 'icon'=>'writer'),
        'stw'  => array ('type'=>'application/vnd.sun.xml.writer.template', 'icon'=>'writer'),
        'sxc'  => array ('type'=>'application/vnd.sun.xml.calc', 'icon'=>'calc'),
        'stc'  => array ('type'=>'application/vnd.sun.xml.calc.template', 'icon'=>'calc'),
        'sxd'  => array ('type'=>'application/vnd.sun.xml.draw', 'icon'=>'draw'),
        'std'  => array ('type'=>'application/vnd.sun.xml.draw.template', 'icon'=>'draw'),
        'sxi'  => array ('type'=>'application/vnd.sun.xml.impress', 'icon'=>'impress'),
        'sti'  => array ('type'=>'application/vnd.sun.xml.impress.template', 'icon'=>'impress'),
        'sxg'  => array ('type'=>'application/vnd.sun.xml.writer.global', 'icon'=>'writer'),
        'sxm'  => array ('type'=>'application/vnd.sun.xml.math', 'icon'=>'math'),

        'tar'  => array ('type'=>'application/x-tar', 'icon'=>'archive', 'groups'=>array('archive'), 'string'=>'archive'),
        'tif'  => array ('type'=>'image/tiff', 'icon'=>'tiff', 'groups'=>array('image'), 'string'=>'image'),
        'tiff' => array ('type'=>'image/tiff', 'icon'=>'tiff', 'groups'=>array('image'), 'string'=>'image'),
        'tex'  => array ('type'=>'application/x-tex', 'icon'=>'text'),
        'texi' => array ('type'=>'application/x-texinfo', 'icon'=>'text'),
        'texinfo'  => array ('type'=>'application/x-texinfo', 'icon'=>'text'),
        'tsv'  => array ('type'=>'text/tab-separated-values', 'icon'=>'text'),
        'txt'  => array ('type'=>'text/plain', 'icon'=>'text', 'defaulticon'=>true),
        'wav'  => array ('type'=>'audio/wav', 'icon'=>'wav', 'groups'=>array('audio'), 'string'=>'audio'),
        'webm'  => array ('type'=>'video/webm', 'icon'=>'video', 'groups'=>array('video'), 'string'=>'video'),
        'wmv'  => array ('type'=>'video/x-ms-wmv', 'icon'=>'wmv', 'groups'=>array('video'), 'string'=>'video'),
        'asf'  => array ('type'=>'video/x-ms-asf', 'icon'=>'wmv', 'groups'=>array('video'), 'string'=>'video'),

        'xbk'  => array ('type'=>'application/x-smarttech-notebook', 'icon'=>'archive'),
        'xdp'  => array ('type'=>'application/pdf', 'icon'=>'pdf'),
        'xfd'  => array ('type'=>'application/pdf', 'icon'=>'pdf'),
        'xfdf' => array ('type'=>'application/pdf', 'icon'=>'pdf'),

        'xls'  => array ('type'=>'application/vnd.ms-excel', 'icon'=>'spreadsheet', 'groups'=>array('spreadsheet')),
        'xlsx' => array ('type'=>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'icon'=>'spreadsheet'),
        'xlsm' => array ('type'=>'application/vnd.ms-excel.sheet.macroEnabled.12', 'icon'=>'spreadsheet', 'groups'=>array('spreadsheet')),
        'xltx' => array ('type'=>'application/vnd.openxmlformats-officedocument.spreadsheetml.template', 'icon'=>'spreadsheet'),
        'xltm' => array ('type'=>'application/vnd.ms-excel.template.macroEnabled.12', 'icon'=>'spreadsheet'),
        'xlsb' => array ('type'=>'application/vnd.ms-excel.sheet.binary.macroEnabled.12', 'icon'=>'spreadsheet'),
        'xlam' => array ('type'=>'application/vnd.ms-excel.addin.macroEnabled.12', 'icon'=>'spreadsheet'),

        'xml'  => array ('type'=>'application/xml', 'icon'=>'markup'),
        'xsl'  => array ('type'=>'text/xml', 'icon'=>'markup'),

        'zip'  => array ('type'=>'application/zip', 'icon'=>'archive', 'groups'=>array('archive'), 'string'=>'archive')
        );
        return $mimearray;
    }
    
}

?>
