<?php

header('Content-Type: application/xml');

if ($xml = ot_get_option('home_3_xml')) {
	die($xml);
}

echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<Piecemaker>
  <Contents>
  	<?php
  	$slides = ot_get_option('home_3_slides');
  	if ($slides) {
			foreach ($slides as $slide) {
				echo '<Image Source="' . esc_html(construct_thumbnail($slide['image'], 960, 360)) . '" Title="' . esc_html($slide['title']) . '"></Image>' . "\n";
			}
		}
  	?>
  </Contents>
  <Settings ImageWidth="960" ImageHeight="360" LoaderColor="0x333333" InnerSideColor="0x222222" SideShadowAlpha="0.8" DropShadowAlpha="0.7" DropShadowDistance="25" DropShadowScale="0.95" DropShadowBlurX="40" DropShadowBlurY="4" MenuDistanceX="20" MenuDistanceY="50" MenuColor1="0x999999" MenuColor2="0x333333" MenuColor3="0xFFFFFF" ControlSize="100" ControlDistance="20" ControlColor1="0x222222" ControlColor2="0xFFFFFF" ControlAlpha="0.8" ControlAlphaOver="0.95" ControlsX="450" ControlsY="280&#xD;&#xA;" ControlsAlign="center" TooltipHeight="30" TooltipColor="0x222222" TooltipTextY="5" TooltipTextStyle="P-Italic" TooltipTextColor="0xFFFFFF" TooltipMarginLeft="5" TooltipMarginRight="7" TooltipTextSharpness="50" TooltipTextThickness="-100" InfoWidth="400" InfoBackground="0xFFFFFF" InfoBackgroundAlpha="0.95" InfoMargin="15" InfoSharpness="0" InfoThickness="0" Autoplay="10" FieldOfView="45"></Settings>
  <Transitions>
    <Transition Pieces="10" Time="1" Transition="easeInOutBack" Delay="0.1" DepthOffset="250" CubeDistance="10"></Transition>
  </Transitions>
</Piecemaker>
