<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(

	'title' => array(
		'caption' => 'Title (opt)',
		'type' => 'text'
	),
	'video' => array(
		'caption' => 'YouTube video ID',
		'type' => 'text'
	),
    'showthumb' => array(
        'caption' => 'Video or Thumbnail',
        'type' => 'dropdown',
          'width' => '180',
        'elements' => 'video==0||thumb==1'
    ),
    'ratio' => array(
        'caption' => 'Ratio (video)',
        'type' => 'dropdown',
          'width' => '180',
        'elements' => '16/9==16by9||4/3==4by3'
    )
);
$settings['templates'] = array(
	'outerTpl' => '[+wrapper+]',
	'rowTpl' => '[+title:ne=``:then=`<h3>[+title+]</h3>`:else=`<p></p>`+]
    [+showthumb:is=`1`:then=`<a class="zoomthumbnail" rel="gallerysw" title="[+title+]" href="https://www.youtube.com/watch?v=[+video+]"><img class="img-responsive img-thumbnail" src="https://img.youtube.com/vi/[+video+]/maxresdefault.jpg" alt="[+title+]" title="[+title+]" /></a>`:else=`<div class="embed-responsive embed-responsive-[+ratio+]"> <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/[+video+]"></iframe>
</div>`+]'
		)
?>