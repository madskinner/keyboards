<?php
$pagename = sil_krx_latn_azerty;
$pagetitle = sil_krx_latn_azerty;
require_once('header.php');
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=2.0, minimum-scale=0.5" name="viewport"/>
	<title>sil_krx_latn_azerty</title>
	<link rel="stylesheet" href="kb.css"/>
	<link rel="stylesheet" href="latin.css"/>
	<link rel="icon" href="icon.ico"/>
</head>
<body>
	<div class="tab-folder">
		<!--Starting English-->
		<div id="en" class="tab-content" lang="en">
			<p><a class="buttonlang" href="#fr">Voir cette page en fran&#x00E7;ais...</a>, <a class="buttonlang" href="#pt">Ver esta página em portugu&#x00EA;s...</a></p>
			<div class="container col">
				<table class="compact">
					<tr class="compact">
						<td class="compact"><img src="splash.png" width="70" height="101"/></td>
						<td class="compact">&nbsp;&nbsp;&nbsp;</td>
						<td class="compact">
							<h1t style="text-align: center"> <strong>sil_krx_latn_azerty:</strong> A keyboard for Karon (Latin) generating fully composed characters and based on an azerty layout.</h1t><br>
							<p0>Created by SIL Senegal. &#x00A9;2020&nbsp;SIL&nbsp;International.</p0>
						</td>
						<td class="compact">&nbsp;&nbsp;</td>
						<td class="compact"style="text-align: center"><img src="icon.png" width="75" height="101"/></td>
					</tr>
				</table>
				<div class="wrap-collabsible">
					<input id="collapsible-touch-en" class="toggle" type="checkbox">
					<label for="collapsible-touch-en" class="lbl-toggle indent">Touch keyboard (Android, iOS).</label>
					<div class="collapsible-content">
						<div class="content-inner">
							<div class="container col">
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Default layer 'abc'</header>
									<div class="container col" id="default">
										<img src="layer_default.png" alt="image for layer default" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Shift layer</header>
									<div class="container col" id="shift">
										<img src="layer_shift.png" alt="image for layer shift" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Numeric layer</header>
									<div class="container col" id="numeric">
										<img src="layer_numeric.png" alt="image for layer numeric" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>others</header>
									<div class="container col" id="other">
										<img src="layer_other.png" alt="image for layer other" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Others</header>
									<div class="container col" id="others">
										<img src="layer_others.png" alt="image for layer others" width="510" height="204">
									</div>
								</div>
								<p>A short tap on a key with a gray dot will produce it's character. But a long press will open a context menu, allowing you to drag your finger to the desired character and release.</p>
								<div class='container col'>
									<p><strong>On every layer:</strong> A long press on the space bar will yield the following context menu. ('NBSP' is a non-breaking space, 'NNBSP' is a narrow non-breaking space.)</p>
									<img src='lp_K_SPACE.png' alt='space longpress' />
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'><br><strong>On the default 'abc' layer:</strong></header>
									<img src='lp_default_0x2e.png' alt='lp_default_0x2e.png' />
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'><br><strong>On the '123' numeric layer:</strong></header>
									<img src='lp_numeric_0x24.png' alt='lp_numeric_0x24.png' />
									<img src='lp_numeric_0x2d.png' alt='lp_numeric_0x2d.png' />
									<img src='lp_numeric_0x5b.png' alt='lp_numeric_0x5b.png' />
									<img src='lp_numeric_0x5d.png' alt='lp_numeric_0x5d.png' />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wrap-collabsible">
					<input id="collapsible-web-en" class="toggle" type="checkbox">
					<label for="collapsible-web-en" class="lbl-toggle indent">Layout for the Web keyboard and the physical keyboards for Windows, Mac, Linux, Android and iOS.</label>
					<div class="collapsible-content">
						<div class="content-inner">
							<div class="container col">
								<div class="wrap-collabsible">
									<input id="en-sil_krx_latn_azerty-Layouts" class="toggle" type="checkbox">
									<label for="en-sil_krx_latn_azerty-Layouts" class="lbl-toggle indent">sil_krx_latn_azerty-Keyboard Layouts</label>
									<div class="collapsible-content">
										<div class="content-inner">
											<div class="container col">
												<p>A non-breaking space is indicated by 'NBSP' or 'NNBSP' for the narrow version.</p>
												<table class="compact" style="text-align: left;">
													<tr class="compact" style="text-align: left;">
														<td class="compact" style="text-align: left;">
														<p>default</p>
															<img src="state_0.png" alt="default" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>shift</p>
															<img src="state_1.png" alt="shift" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>ctrl</p>
															<img src="state_2.png" alt="ctrl" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>ctrl-alt</p>
															<img src="state_6.png" alt="ctrl-alt" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>shift-ctrl-alt</p>
															<img src="state_7.png" alt="shift-ctrl-alt" width="638" height="210">
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="wrap-collabsible">
									<input id="en-sil_krx_latn_azerty-Character" class="toggle" type="checkbox">
									<label for="en-sil_krx_latn_azerty-Character" class="lbl-toggle indent">sil_krx_latn_azerty-Character tables</label>
									<div class="collapsible-content">
										<div class="content-inner">
											<div class="container col">
												<div class="wrap-collabsible">
													<input id="en-US-Ll-Character" class="toggle" type="checkbox">
													<label for="en-US-Ll-Character" class="lbl-toggle indent">Lowercase letters</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Character</th>
																		<th>NFC</th><th>Unicode Name</th>
																		<th>NFD</th><th>Unicode Name</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0061;</td>
																		<td>U+0061</td>
																		<td>LATIN SMALL LETTER A</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00e0;</td>
																		<td>U+00E0</td>
																		<td>LATIN SMALL LETTER A WITH GRAVE</td>
																		<td>U+0061 U+0300</td>
																		<td>&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0020;&#x0053;&#x004d;&#x0041;&#x004c;&#x004c;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0045;&#x0052;&#x0020;&#x0041;&#x0020;&#x0057;&#x0049;&#x0054;&#x0048;&#x0020;&#x0047;&#x0052;&#x0041;&#x0056;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00e1;</td>
																		<td>U+00E1</td>
																		<td>LATIN SMALL LETTER A WITH ACUTE</td>
																		<td>U+0061 U+0301</td>
																		<td>&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0020;&#x0053;&#x004d;&#x0041;&#x004c;&#x004c;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0045;&#x0052;&#x0020;&#x0041;&#x0020;&#x0057;&#x0049;&#x0054;&#x0048;&#x0020;&#x0041;&#x0043;&#x0055;&#x0054;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0062;</td>
																		<td>U+0062</td>
																		<td>LATIN SMALL LETTER B</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0063;</td>
																		<td>U+0063</td>
																		<td>LATIN SMALL LETTER C</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0064;</td>
																		<td>U+0064</td>
																		<td>LATIN SMALL LETTER D</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0065;</td>
																		<td>U+0065</td>
																		<td>LATIN SMALL LETTER E</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00e9;</td>
																		<td>U+00E9</td>
																		<td>LATIN SMALL LETTER E WITH ACUTE</td>
																		<td>U+0065 U+0301</td>
																		<td>&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0020;&#x0053;&#x004d;&#x0041;&#x004c;&#x004c;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0045;&#x0052;&#x0020;&#x0045;&#x0020;&#x0057;&#x0049;&#x0054;&#x0048;&#x0020;&#x0041;&#x0043;&#x0055;&#x0054;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0066;</td>
																		<td>U+0066</td>
																		<td>LATIN SMALL LETTER F</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0067;</td>
																		<td>U+0067</td>
																		<td>LATIN SMALL LETTER G</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0068;</td>
																		<td>U+0068</td>
																		<td>LATIN SMALL LETTER H</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0069;</td>
																		<td>U+0069</td>
																		<td>LATIN SMALL LETTER I</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00ed;</td>
																		<td>U+00ED</td>
																		<td>LATIN SMALL LETTER I WITH ACUTE</td>
																		<td>U+0069 U+0301</td>
																		<td>&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0020;&#x0053;&#x004d;&#x0041;&#x004c;&#x004c;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0045;&#x0052;&#x0020;&#x0049;&#x0020;&#x0057;&#x0049;&#x0054;&#x0048;&#x0020;&#x0041;&#x0043;&#x0055;&#x0054;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006a;</td>
																		<td>U+006A</td>
																		<td>LATIN SMALL LETTER J</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006b;</td>
																		<td>U+006B</td>
																		<td>LATIN SMALL LETTER K</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006c;</td>
																		<td>U+006C</td>
																		<td>LATIN SMALL LETTER L</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006d;</td>
																		<td>U+006D</td>
																		<td>LATIN SMALL LETTER M</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006e;</td>
																		<td>U+006E</td>
																		<td>LATIN SMALL LETTER N</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00f1;</td>
																		<td>U+00F1</td>
																		<td>LATIN SMALL LETTER N WITH TILDE</td>
																		<td>U+006E U+0303</td>
																		<td>&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0020;&#x0053;&#x004d;&#x0041;&#x004c;&#x004c;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0045;&#x0052;&#x0020;&#x004e;&#x0020;&#x0057;&#x0049;&#x0054;&#x0048;&#x0020;&#x0054;&#x0049;&#x004c;&#x0044;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x014b;</td>
																		<td>U+014B</td>
																		<td>LATIN SMALL LETTER ENG</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006f;</td>
																		<td>U+006F</td>
																		<td>LATIN SMALL LETTER O</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00f3;</td>
																		<td>U+00F3</td>
																		<td>LATIN SMALL LETTER O WITH ACUTE</td>
																		<td>U+006F U+0301</td>
																		<td>&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0020;&#x0053;&#x004d;&#x0041;&#x004c;&#x004c;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0045;&#x0052;&#x0020;&#x004f;&#x0020;&#x0057;&#x0049;&#x0054;&#x0048;&#x0020;&#x0041;&#x0043;&#x0055;&#x0054;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0070;</td>
																		<td>U+0070</td>
																		<td>LATIN SMALL LETTER P</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0071;</td>
																		<td>U+0071</td>
																		<td>LATIN SMALL LETTER Q</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0072;</td>
																		<td>U+0072</td>
																		<td>LATIN SMALL LETTER R</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0073;</td>
																		<td>U+0073</td>
																		<td>LATIN SMALL LETTER S</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0074;</td>
																		<td>U+0074</td>
																		<td>LATIN SMALL LETTER T</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0075;</td>
																		<td>U+0075</td>
																		<td>LATIN SMALL LETTER U</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00fa;</td>
																		<td>U+00FA</td>
																		<td>LATIN SMALL LETTER U WITH ACUTE</td>
																		<td>U+0075 U+0301</td>
																		<td>&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0020;&#x0053;&#x004d;&#x0041;&#x004c;&#x004c;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0045;&#x0052;&#x0020;&#x0055;&#x0020;&#x0057;&#x0049;&#x0054;&#x0048;&#x0020;&#x0041;&#x0043;&#x0055;&#x0054;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0076;</td>
																		<td>U+0076</td>
																		<td>LATIN SMALL LETTER V</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0077;</td>
																		<td>U+0077</td>
																		<td>LATIN SMALL LETTER W</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0078;</td>
																		<td>U+0078</td>
																		<td>LATIN SMALL LETTER X</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0079;</td>
																		<td>U+0079</td>
																		<td>LATIN SMALL LETTER Y</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007a;</td>
																		<td>U+007A</td>
																		<td>LATIN SMALL LETTER Z</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b5;</td>
																		<td>U+00B5</td>
																		<td>MICRO SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="en-US-Lu-Character" class="toggle" type="checkbox">
													<label for="en-US-Lu-Character" class="lbl-toggle indent">Uppercase letters</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Character</th>
																		<th>NFC</th><th>Unicode Name</th>
																		<th>NFD</th><th>Unicode Name</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0041;</td>
																		<td>U+0041</td>
																		<td>LATIN CAPITAL LETTER A</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0042;</td>
																		<td>U+0042</td>
																		<td>LATIN CAPITAL LETTER B</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0043;</td>
																		<td>U+0043</td>
																		<td>LATIN CAPITAL LETTER C</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0044;</td>
																		<td>U+0044</td>
																		<td>LATIN CAPITAL LETTER D</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0045;</td>
																		<td>U+0045</td>
																		<td>LATIN CAPITAL LETTER E</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0046;</td>
																		<td>U+0046</td>
																		<td>LATIN CAPITAL LETTER F</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0047;</td>
																		<td>U+0047</td>
																		<td>LATIN CAPITAL LETTER G</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0048;</td>
																		<td>U+0048</td>
																		<td>LATIN CAPITAL LETTER H</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0049;</td>
																		<td>U+0049</td>
																		<td>LATIN CAPITAL LETTER I</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004a;</td>
																		<td>U+004A</td>
																		<td>LATIN CAPITAL LETTER J</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004b;</td>
																		<td>U+004B</td>
																		<td>LATIN CAPITAL LETTER K</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004c;</td>
																		<td>U+004C</td>
																		<td>LATIN CAPITAL LETTER L</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004d;</td>
																		<td>U+004D</td>
																		<td>LATIN CAPITAL LETTER M</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004e;</td>
																		<td>U+004E</td>
																		<td>LATIN CAPITAL LETTER N</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00d1;</td>
																		<td>U+00D1</td>
																		<td>LATIN CAPITAL LETTER N WITH TILDE</td>
																		<td>U+004E U+0303</td>
																		<td>&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0020;&#x0043;&#x0041;&#x0050;&#x0049;&#x0054;&#x0041;&#x004c;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0045;&#x0052;&#x0020;&#x004e;&#x0020;&#x0057;&#x0049;&#x0054;&#x0048;&#x0020;&#x0054;&#x0049;&#x004c;&#x0044;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x014a;</td>
																		<td>U+014A</td>
																		<td>LATIN CAPITAL LETTER ENG</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004f;</td>
																		<td>U+004F</td>
																		<td>LATIN CAPITAL LETTER O</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0050;</td>
																		<td>U+0050</td>
																		<td>LATIN CAPITAL LETTER P</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0051;</td>
																		<td>U+0051</td>
																		<td>LATIN CAPITAL LETTER Q</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0052;</td>
																		<td>U+0052</td>
																		<td>LATIN CAPITAL LETTER R</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0053;</td>
																		<td>U+0053</td>
																		<td>LATIN CAPITAL LETTER S</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0054;</td>
																		<td>U+0054</td>
																		<td>LATIN CAPITAL LETTER T</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0055;</td>
																		<td>U+0055</td>
																		<td>LATIN CAPITAL LETTER U</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0056;</td>
																		<td>U+0056</td>
																		<td>LATIN CAPITAL LETTER V</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0057;</td>
																		<td>U+0057</td>
																		<td>LATIN CAPITAL LETTER W</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0058;</td>
																		<td>U+0058</td>
																		<td>LATIN CAPITAL LETTER X</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0059;</td>
																		<td>U+0059</td>
																		<td>LATIN CAPITAL LETTER Y</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005a;</td>
																		<td>U+005A</td>
																		<td>LATIN CAPITAL LETTER Z</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="en-US-Pi-Pf-Character" class="toggle" type="checkbox">
													<label for="en-US-Pi-Pf-Character" class="lbl-toggle indent">Quotation marks</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Character</th>
																		<th>NFC</th><th>Unicode Name</th>
																		<th>NFD</th><th>Unicode Name</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00ab;</td>
																		<td>U+00AB</td>
																		<td>LEFT-POINTING DOUBLE ANGLE QUOTATION MARK</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00bb;</td>
																		<td>U+00BB</td>
																		<td>RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2018;</td>
																		<td>U+2018</td>
																		<td>LEFT SINGLE QUOTATION MARK</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2019;</td>
																		<td>U+2019</td>
																		<td>RIGHT SINGLE QUOTATION MARK</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x201c;</td>
																		<td>U+201C</td>
																		<td>LEFT DOUBLE QUOTATION MARK</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x201d;</td>
																		<td>U+201D</td>
																		<td>RIGHT DOUBLE QUOTATION MARK</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="en-US-Ps-Pe-Character" class="toggle" type="checkbox">
													<label for="en-US-Ps-Pe-Character" class="lbl-toggle indent">Enclosing punctuation</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Character</th>
																		<th>NFC</th><th>Unicode Name</th>
																		<th>NFD</th><th>Unicode Name</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0028;</td>
																		<td>U+0028</td>
																		<td>LEFT PARENTHESIS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0029;</td>
																		<td>U+0029</td>
																		<td>RIGHT PARENTHESIS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005b;</td>
																		<td>U+005B</td>
																		<td>LEFT SQUARE BRACKET</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005d;</td>
																		<td>U+005D</td>
																		<td>RIGHT SQUARE BRACKET</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007b;</td>
																		<td>U+007B</td>
																		<td>LEFT CURLY BRACKET</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007d;</td>
																		<td>U+007D</td>
																		<td>RIGHT CURLY BRACKET</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="en-US-Sc-Sm-So-Pd-Pc-Character" class="toggle" type="checkbox">
													<label for="en-US-Sc-Sm-So-Pd-Pc-Character" class="lbl-toggle indent">Signs</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Character</th>
																		<th>NFC</th><th>Unicode Name</th>
																		<th>NFD</th><th>Unicode Name</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0024;</td>
																		<td>U+0024</td>
																		<td>DOLLAR SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002b;</td>
																		<td>U+002B</td>
																		<td>PLUS SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002d;</td>
																		<td>U+002D</td>
																		<td>HYPHEN-MINUS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003c;</td>
																		<td>U+003C</td>
																		<td>LESS-THAN SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003d;</td>
																		<td>U+003D</td>
																		<td>EQUALS SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003e;</td>
																		<td>U+003E</td>
																		<td>GREATER-THAN SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005f;</td>
																		<td>U+005F</td>
																		<td>LOW LINE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007c;</td>
																		<td>U+007C</td>
																		<td>VERTICAL LINE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007e;</td>
																		<td>U+007E</td>
																		<td>TILDE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a2;</td>
																		<td>U+00A2</td>
																		<td>CENT SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a3;</td>
																		<td>U+00A3</td>
																		<td>POUND SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a4;</td>
																		<td>U+00A4</td>
																		<td>CURRENCY SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a5;</td>
																		<td>U+00A5</td>
																		<td>YEN SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a6;</td>
																		<td>U+00A6</td>
																		<td>BROKEN BAR</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a9;</td>
																		<td>U+00A9</td>
																		<td>COPYRIGHT SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00ae;</td>
																		<td>U+00AE</td>
																		<td>REGISTERED SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b0;</td>
																		<td>U+00B0</td>
																		<td>DEGREE SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b1;</td>
																		<td>U+00B1</td>
																		<td>PLUS-MINUS SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00d7;</td>
																		<td>U+00D7</td>
																		<td>MULTIPLICATION SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00f7;</td>
																		<td>U+00F7</td>
																		<td>DIVISION SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2013;</td>
																		<td>U+2013</td>
																		<td>EN DASH</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2014;</td>
																		<td>U+2014</td>
																		<td>EM DASH</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x20ac;</td>
																		<td>U+20AC</td>
																		<td>EURO SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2117;</td>
																		<td>U+2117</td>
																		<td>SOUND RECORDING COPYRIGHT</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="en-US-Sk-Lm-Character" class="toggle" type="checkbox">
													<label for="en-US-Sk-Lm-Character" class="lbl-toggle indent">Modifiers</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Character</th>
																		<th>NFC</th><th>Unicode Name</th>
																		<th>NFD</th><th>Unicode Name</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005e;</td>
																		<td>U+005E</td>
																		<td>CIRCUMFLEX ACCENT</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a8;</td>
																		<td>U+00A8</td>
																		<td>DIAERESIS</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="en-US-ZzOther-Character" class="toggle" type="checkbox">
													<label for="en-US-ZzOther-Character" class="lbl-toggle indent">Other</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Character</th>
																		<th>NFC</th><th>Unicode Name</th>
																		<th>NFD</th><th>Unicode Name</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0045;&#x0053;&#x0043;</td>
																		<td>U+001B</td>
																		<td>ESCAPE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0046;&#x0053;</td>
																		<td>U+001C</td>
																		<td>INFORMATION SEPARATOR FOUR</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0047;&#x0053;</td>
																		<td>U+001D</td>
																		<td>GROUP SEPARATOR</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0021;</td>
																		<td>U+0021</td>
																		<td>EXCLAMATION MARK</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0022;</td>
																		<td>U+0022</td>
																		<td>QUOTATION MARK</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0023;</td>
																		<td>U+0023</td>
																		<td>NUMBER SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0025;</td>
																		<td>U+0025</td>
																		<td>PERCENT SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0026;</td>
																		<td>U+0026</td>
																		<td>AMPERSAND</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0027;</td>
																		<td>U+0027</td>
																		<td>APOSTROPHE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002a;</td>
																		<td>U+002A</td>
																		<td>ASTERISK</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002c;</td>
																		<td>U+002C</td>
																		<td>COMMA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002e;</td>
																		<td>U+002E</td>
																		<td>FULL STOP</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002f;</td>
																		<td>U+002F</td>
																		<td>SOLIDUS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0030;</td>
																		<td>U+0030</td>
																		<td>DIGIT ZERO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0031;</td>
																		<td>U+0031</td>
																		<td>DIGIT ONE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0032;</td>
																		<td>U+0032</td>
																		<td>DIGIT TWO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0033;</td>
																		<td>U+0033</td>
																		<td>DIGIT THREE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0034;</td>
																		<td>U+0034</td>
																		<td>DIGIT FOUR</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0035;</td>
																		<td>U+0035</td>
																		<td>DIGIT FIVE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0036;</td>
																		<td>U+0036</td>
																		<td>DIGIT SIX</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0037;</td>
																		<td>U+0037</td>
																		<td>DIGIT SEVEN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0038;</td>
																		<td>U+0038</td>
																		<td>DIGIT EIGHT</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0039;</td>
																		<td>U+0039</td>
																		<td>DIGIT NINE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003a;</td>
																		<td>U+003A</td>
																		<td>COLON</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003b;</td>
																		<td>U+003B</td>
																		<td>SEMICOLON</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003f;</td>
																		<td>U+003F</td>
																		<td>QUESTION MARK</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0040;</td>
																		<td>U+0040</td>
																		<td>COMMERCIAL AT</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005c;</td>
																		<td>U+005C</td>
																		<td>REVERSE SOLIDUS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004e;&#x0042;&#x0053;&#x0050;</td>
																		<td>U+00A0</td>
																		<td>NO-BREAK SPACE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a7;</td>
																		<td>U+00A7</td>
																		<td>SECTION SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b6;</td>
																		<td>U+00B6</td>
																		<td>PILCROW SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b7;</td>
																		<td>U+00B7</td>
																		<td>MIDDLE DOT</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2022;</td>
																		<td>U+2022</td>
																		<td>BULLET</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2026;</td>
																		<td>U+2026</td>
																		<td>HORIZONTAL ELLIPSIS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004e;&#x004e;&#x0042;&#x0053;&#x0050;</td>
																		<td>U+202F</td>
																		<td>NARROW NO-BREAK SPACE</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Ending English-->
		<!--Starting Portuguese-->
		<div id="pt" class="tab-content" lang="pt">
			<p><a class="buttonlang" href="#en"> see this page in English...</a>, <a class="buttonlang" href="#fr"> Voir cette page en fran&#x00E7;ais...</a></p>
			<div class="container col">
				<table class="compact">
					<tr class="compact">
						<td class="compact"><img src="splash.png" width="70" height="101"/></td>
						<td class="compact">&nbsp;&nbsp;&nbsp;</td>
						<td class="compact">
							<h1t style="text-align: center"> <strong>sil_krx_latn_azerty:</strong> Um teclado para Karon (Latin) gerando caracteres totalmente compostos e baseado em um layout azerty.</h1t><br>
							<p0>Criado por SIL Senegal. &#x00A9;2020&nbsp;SIL&nbsp;International.</p0>
						</td>
						<td class="compact">&nbsp;&nbsp;</td>
						<td class="compact"style="text-align: center"><img src="icon.png" width="75" height="101"/></td>
					</tr>
				</table>
				<div class="wrap-collabsible">
					<input id="collapsible-touch-pt" class="toggle" type="checkbox">
					<label for="collapsible-touch-pt" class="lbl-toggle indent">Teclado de toque (Android, iOS)</label>
					<div class="collapsible-content">
						<div class="content-inner">
							<div class="container col">
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Camada padr&#x00E3;o 'abc'</header>
									<div class="container col" id="default">
										<img src="layer_default.png" alt="image for layer default" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Camada mai&#x00fA;scula.</header>
									<div class="container col" id="shift">
										<img src="layer_shift.png" alt="image for layer shift" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Camada num&#x00E9;rica</header>
									<div class="container col" id="numeric">
										<img src="layer_numeric.png" alt="image for layer numeric" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>os outros</header>
									<div class="container col" id="other">
										<img src="layer_other.png" alt="image for layer other" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Os Outros</header>
									<div class="container col" id="others">
										<img src="layer_others.png" alt="image for layer others" width="510" height="204">
									</div>
								</div>
								<p>Um toque curto em uma tecla com um ponto cinza produzir&#x00E1; seu car&#x00E1;ter. Mas uma press&#x00E3;o longa abrir&#x00E1; um menu de contexto, permitindo que voc&#x00EA; arraste o dedo para o personagem desejado e solte.</p>
								<div class='container col'>
									<p><strong>Em cada camada:</strong> Uma pressão longa na barra de espaço produzirá o seguinte menu de contexto. ('NBSP' é um espaço sem quebra, 'NNBSP' é um espaço sem quebra estreito.)</p>
									<img src='lp_K_SPACE.png' alt='space longpress' />
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'><br><strong>Na camada padr&#x00E3;o &#x00AB; abc &#x00BB;:</strong></header>
									<img src='lp_default_0x2e.png' alt='lp_default_0x2e.png' />
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'><br><strong>Na camada num&#x00E9;rica &#x00AB; 123 &#x00BB;:</strong></header>
									<img src='lp_numeric_0x24.png' alt='lp_numeric_0x24.png' />
									<img src='lp_numeric_0x2d.png' alt='lp_numeric_0x2d.png' />
									<img src='lp_numeric_0x5b.png' alt='lp_numeric_0x5b.png' />
									<img src='lp_numeric_0x5d.png' alt='lp_numeric_0x5d.png' />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wrap-collabsible">
					<input id="collapsible-web-pt" class="toggle" type="checkbox">
					<label for="collapsible-web-pt" class="lbl-toggle indent">Layout para o teclado Web e os teclados e&#x00ED;sicos para Windows, Mac, Linux, Android e iOS.</label>
					<div class="collapsible-content">
						<div class="content-inner">
							<div class="container col">
								<div class="wrap-collabsible">
									<input id="pt-sil_krx_latn_azerty-Layouts" class="toggle" type="checkbox">
									<label for="pt-sil_krx_latn_azerty-Layouts" class="lbl-toggle indent">sil_krx_latn_azerty-Layouts de teclado</label>
									<div class="collapsible-content">
										<div class="content-inner">
											<div class="container col">
												<p>Um espa&#x00E7;o sem quebra &#x00E9; indicado por 'NBSP' ou 'NNBSP' para a vers&#x00E4;o restrita..</p>
												<table class="compact" style="text-align: left;">
													<tr class="compact" style="text-align: left;">
														<td class="compact" style="text-align: left;">
														<p>default</p>
															<img src="state_0.png" alt="default" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>shift</p>
															<img src="state_1.png" alt="shift" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>ctrl</p>
															<img src="state_2.png" alt="ctrl" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>ctrl-alt</p>
															<img src="state_6.png" alt="ctrl-alt" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>shift-ctrl-alt</p>
															<img src="state_7.png" alt="shift-ctrl-alt" width="638" height="210">
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="wrap-collabsible">
									<input id="pt-sil_krx_latn_azerty-Character" class="toggle" type="checkbox">
									<label for="pt-sil_krx_latn_azerty-Character" class="lbl-toggle indent">sil_krx_latn_azerty-Tabelas de caracteres</label>
									<div class="collapsible-content">
										<div class="content-inner">
											<div class="container col">
												<div class="wrap-collabsible">
													<input id="pt-PT-Ll-Character" class="toggle" type="checkbox">
													<label for="pt-PT-Ll-Character" class="lbl-toggle indent">Letras min&#x00FA;sculas</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caractere</th>
																		<th>NFC</th><th>Nome Unicode</th>
																		<th>NFD</th><th>Nome Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0061;</td>
																		<td>U+0061</td>
																		<td>LETRA MINÚSCULA LATINA A</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0062;</td>
																		<td>U+0062</td>
																		<td>LETRA MINÚSCULA LATINA B</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0063;</td>
																		<td>U+0063</td>
																		<td>LETRA MINÚSCULA LATINA C</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0064;</td>
																		<td>U+0064</td>
																		<td>LETRA MINÚSCULA LATINA D</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0065;</td>
																		<td>U+0065</td>
																		<td>LETRA MINÚSCULA LATINA E</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0066;</td>
																		<td>U+0066</td>
																		<td>LETRA MINÚSCULA LATINA F</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0067;</td>
																		<td>U+0067</td>
																		<td>LETRA MINÚSCULA LATINA G</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0068;</td>
																		<td>U+0068</td>
																		<td>LETRA MINÚSCULA LATINA H</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0069;</td>
																		<td>U+0069</td>
																		<td>LETRA MINÚSCULA LATINA I</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006a;</td>
																		<td>U+006A</td>
																		<td>LETRA MINÚSCULA LATINA J</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006b;</td>
																		<td>U+006B</td>
																		<td>LETRA MINÚSCULA LATINA K</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006c;</td>
																		<td>U+006C</td>
																		<td>LETRA MINÚSCULA LATINA L</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006d;</td>
																		<td>U+006D</td>
																		<td>LETRA MINÚSCULA LATINA M</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006e;</td>
																		<td>U+006E</td>
																		<td>LETRA MINÚSCULA LATINA N</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006f;</td>
																		<td>U+006F</td>
																		<td>LETRA MINÚSCULA LATINA O</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0070;</td>
																		<td>U+0070</td>
																		<td>LETRA MINÚSCULA LATINA P</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0071;</td>
																		<td>U+0071</td>
																		<td>LETRA MINÚSCULA LATINA Q</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0072;</td>
																		<td>U+0072</td>
																		<td>LETRA MINÚSCULA LATINA R</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0073;</td>
																		<td>U+0073</td>
																		<td>LETRA MINÚSCULA LATINA S</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0074;</td>
																		<td>U+0074</td>
																		<td>LETRA MINÚSCULA LATINA T</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0075;</td>
																		<td>U+0075</td>
																		<td>LETRA MINÚSCULA LATINA U</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0076;</td>
																		<td>U+0076</td>
																		<td>LETRA MINÚSCULA LATINA V</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0077;</td>
																		<td>U+0077</td>
																		<td>LETRA MINÚSCULA LATINA W</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0078;</td>
																		<td>U+0078</td>
																		<td>LETRA MINÚSCULA LATINA X</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0079;</td>
																		<td>U+0079</td>
																		<td>LETRA MINÚSCULA LATINA Y</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007a;</td>
																		<td>U+007A</td>
																		<td>LETRA MINÚSCULA LATINA Z</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b5;</td>
																		<td>U+00B5</td>
																		<td>MICRO SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00e0;</td>
																		<td>U+00E0</td>
																		<td>LETRA MINÚSCULA LATINA A COM TÚMULO</td>
																		<td>U+0061 U+0300</td>
																		<td>&#x004c;&#x0045;&#x0054;&#x0052;&#x0041;&#x0020;&#x004d;&#x0049;&#x004e;&#x00da;&#x0053;&#x0043;&#x0055;&#x004c;&#x0041;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0041;&#x0020;&#x0041;&#x0020;&#x0043;&#x004f;&#x004d;&#x0020;&#x0054;&#x00da;&#x004d;&#x0055;&#x004c;&#x004f;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00e1;</td>
																		<td>U+00E1</td>
																		<td>LETRA MINÚSCULA LATINA A COM AGUDA</td>
																		<td>U+0061 U+0301</td>
																		<td>&#x004c;&#x0045;&#x0054;&#x0052;&#x0041;&#x0020;&#x004d;&#x0049;&#x004e;&#x00da;&#x0053;&#x0043;&#x0055;&#x004c;&#x0041;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0041;&#x0020;&#x0041;&#x0020;&#x0043;&#x004f;&#x004d;&#x0020;&#x0041;&#x0047;&#x0055;&#x0044;&#x0041;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00e9;</td>
																		<td>U+00E9</td>
																		<td>LETRA MINÚSCULA LATINA E COM AGUDA</td>
																		<td>U+0065 U+0301</td>
																		<td>&#x004c;&#x0045;&#x0054;&#x0052;&#x0041;&#x0020;&#x004d;&#x0049;&#x004e;&#x00da;&#x0053;&#x0043;&#x0055;&#x004c;&#x0041;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0041;&#x0020;&#x0045;&#x0020;&#x0043;&#x004f;&#x004d;&#x0020;&#x0041;&#x0047;&#x0055;&#x0044;&#x0041;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00ed;</td>
																		<td>U+00ED</td>
																		<td>LETRA MINÚSCULA LATINA I COM AGUDA</td>
																		<td>U+0069 U+0301</td>
																		<td>&#x004c;&#x0045;&#x0054;&#x0052;&#x0041;&#x0020;&#x004d;&#x0049;&#x004e;&#x00da;&#x0053;&#x0043;&#x0055;&#x004c;&#x0041;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0041;&#x0020;&#x0049;&#x0020;&#x0043;&#x004f;&#x004d;&#x0020;&#x0041;&#x0047;&#x0055;&#x0044;&#x0041;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00f1;</td>
																		<td>U+00F1</td>
																		<td>LETRA MINÚSCULA LATINA N COM TILDE</td>
																		<td>U+006E U+0303</td>
																		<td>&#x004c;&#x0045;&#x0054;&#x0052;&#x0041;&#x0020;&#x004d;&#x0049;&#x004e;&#x00da;&#x0053;&#x0043;&#x0055;&#x004c;&#x0041;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0041;&#x0020;&#x004e;&#x0020;&#x0043;&#x004f;&#x004d;&#x0020;&#x0054;&#x0049;&#x004c;&#x0044;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00f3;</td>
																		<td>U+00F3</td>
																		<td>LETRA MINÚSCULA LATINA COM AGUDA</td>
																		<td>U+006F U+0301</td>
																		<td>&#x004c;&#x0045;&#x0054;&#x0052;&#x0041;&#x0020;&#x004d;&#x0049;&#x004e;&#x00da;&#x0053;&#x0043;&#x0055;&#x004c;&#x0041;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0041;&#x0020;&#x0043;&#x004f;&#x004d;&#x0020;&#x0041;&#x0047;&#x0055;&#x0044;&#x0041;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00fa;</td>
																		<td>U+00FA</td>
																		<td>LETRA MINÚSCULA LATINA U COM AGUDA</td>
																		<td>U+0075 U+0301</td>
																		<td>&#x004c;&#x0045;&#x0054;&#x0052;&#x0041;&#x0020;&#x004d;&#x0049;&#x004e;&#x00da;&#x0053;&#x0043;&#x0055;&#x004c;&#x0041;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0041;&#x0020;&#x0055;&#x0020;&#x0043;&#x004f;&#x004d;&#x0020;&#x0041;&#x0047;&#x0055;&#x0044;&#x0041;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x014b;</td>
																		<td>U+014B</td>
																		<td>LETRA MINÚSCULA LATINA ENG</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="pt-PT-Lu-Character" class="toggle" type="checkbox">
													<label for="pt-PT-Lu-Character" class="lbl-toggle indent">Letras mai&#x00FA;sculas</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caractere</th>
																		<th>NFC</th><th>Nome Unicode</th>
																		<th>NFD</th><th>Nome Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0041;</td>
																		<td>U+0041</td>
																		<td>LETRA MAIÚSCULA LATINA A</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0042;</td>
																		<td>U+0042</td>
																		<td>LETRA MAIÚSCULA LATINA B</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0043;</td>
																		<td>U+0043</td>
																		<td>LETRA MAIÚSCULA LATINA C</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0044;</td>
																		<td>U+0044</td>
																		<td>LETRA MAIÚSCULA LATINA D</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0045;</td>
																		<td>U+0045</td>
																		<td>LETRA MAIÚSCULA LATINA E</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0046;</td>
																		<td>U+0046</td>
																		<td>LETRA MAIÚSCULA LATINA F</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0047;</td>
																		<td>U+0047</td>
																		<td>LETRA MAIÚSCULA LATINA G</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0048;</td>
																		<td>U+0048</td>
																		<td>LETRA MAIÚSCULA LATINA H</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0049;</td>
																		<td>U+0049</td>
																		<td>LETRA MAIÚSCULA LATINA I</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004a;</td>
																		<td>U+004A</td>
																		<td>LETRA MAIÚSCULA LATINA J</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004b;</td>
																		<td>U+004B</td>
																		<td>LETRA MAIÚSCULA LATINA K</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004c;</td>
																		<td>U+004C</td>
																		<td>LETRA MAIÚSCULA LATINA L</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004d;</td>
																		<td>U+004D</td>
																		<td>LETRA MAIÚSCULA LATINA M</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004e;</td>
																		<td>U+004E</td>
																		<td>LETRA MAIÚSCULA LATINA N</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004f;</td>
																		<td>U+004F</td>
																		<td>LETRA MAIÚSCULA LATINA O</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0050;</td>
																		<td>U+0050</td>
																		<td>LETRA MAIÚSCULA LATINA P</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0051;</td>
																		<td>U+0051</td>
																		<td>LETRA MAIÚSCULA LATINA Q</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0052;</td>
																		<td>U+0052</td>
																		<td>LETRA MAIÚSCULA LATINA R</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0053;</td>
																		<td>U+0053</td>
																		<td>LETRA MAIÚSCULA LATINA S</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0054;</td>
																		<td>U+0054</td>
																		<td>LETRA MAIÚSCULA LATINA T</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0055;</td>
																		<td>U+0055</td>
																		<td>LETRA MAIÚSCULA LATINA U</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0056;</td>
																		<td>U+0056</td>
																		<td>LETRA MAIÚSCULA LATINA V</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0057;</td>
																		<td>U+0057</td>
																		<td>LETRA MAIÚSCULA LATINA W</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0058;</td>
																		<td>U+0058</td>
																		<td>LETRA MAIÚSCULA LATINA X</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0059;</td>
																		<td>U+0059</td>
																		<td>LETRA MAIÚSCULA LATINA Y</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005a;</td>
																		<td>U+005A</td>
																		<td>LETRA MAIÚSCULA LATINA Z</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00d1;</td>
																		<td>U+00D1</td>
																		<td>LETRA MAIÚSCULA LATINA N COM TILDE</td>
																		<td>U+004E U+0303</td>
																		<td>&#x004c;&#x0045;&#x0054;&#x0052;&#x0041;&#x0020;&#x004d;&#x0041;&#x0049;&#x00da;&#x0053;&#x0043;&#x0055;&#x004c;&#x0041;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0041;&#x0020;&#x004e;&#x0020;&#x0043;&#x004f;&#x004d;&#x0020;&#x0054;&#x0049;&#x004c;&#x0044;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x014a;</td>
																		<td>U+014A</td>
																		<td>LETRA MAIÚSCULA LATINA ENG</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="pt-PT-Pi-Pf-Character" class="toggle" type="checkbox">
													<label for="pt-PT-Pi-Pf-Character" class="lbl-toggle indent">Marcas de aspas</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caractere</th>
																		<th>NFC</th><th>Nome Unicode</th>
																		<th>NFD</th><th>Nome Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00ab;</td>
																		<td>U+00AB</td>
																		<td>MARCA DE ASPAS DE ÂNGULO DUPLO A APONTAR PARA A ESQUERDA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00bb;</td>
																		<td>U+00BB</td>
																		<td>APONTANDO PARA A DIREITA COM ASPAS DE ÂNGULO DUPLO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2018;</td>
																		<td>U+2018</td>
																		<td>MARCA DE CITAÇÃO SIMPLES ESQUERDA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2019;</td>
																		<td>U+2019</td>
																		<td>ASPAS SIMPLES RECTAS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x201c;</td>
																		<td>U+201C</td>
																		<td>MARCA DE DUPLA CITAÇÃO ESQUERDA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x201d;</td>
																		<td>U+201D</td>
																		<td>MARCA DE DUPLA CITAÇÃO DIREITA</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="pt-PT-Ps-Pe-Character" class="toggle" type="checkbox">
													<label for="pt-PT-Ps-Pe-Character" class="lbl-toggle indent">Pontua&#x00E7;&#x00E3;o de fechamento</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caractere</th>
																		<th>NFC</th><th>Nome Unicode</th>
																		<th>NFD</th><th>Nome Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0028;</td>
																		<td>U+0028</td>
																		<td>PARÊNTESES ESQUERDOS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0029;</td>
																		<td>U+0029</td>
																		<td>PARÊNTESES DIREITOS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005b;</td>
																		<td>U+005B</td>
																		<td>COLCHETE QUADRADO ESQUERDO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005d;</td>
																		<td>U+005D</td>
																		<td>COLCHETE QUADRADO DIREITO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007b;</td>
																		<td>U+007B</td>
																		<td>BRAÇADEIRA ENCARACOLADA ESQUERDA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007d;</td>
																		<td>U+007D</td>
																		<td>BRACELETE ENCARACOLADO DIREITO</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="pt-PT-Sc-Sm-So-Pd-Pc-Character" class="toggle" type="checkbox">
													<label for="pt-PT-Sc-Sm-So-Pd-Pc-Character" class="lbl-toggle indent">Sinais</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caractere</th>
																		<th>NFC</th><th>Nome Unicode</th>
																		<th>NFD</th><th>Nome Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0024;</td>
																		<td>U+0024</td>
																		<td>SINAL DE DÓLAR</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002b;</td>
																		<td>U+002B</td>
																		<td>SINAL DE MAIS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002d;</td>
																		<td>U+002D</td>
																		<td>HÍFEN MENOS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003c;</td>
																		<td>U+003C</td>
																		<td>SINAL MENOR QUE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003d;</td>
																		<td>U+003D</td>
																		<td>IGUAL AO SINAL</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003e;</td>
																		<td>U+003E</td>
																		<td>MAIOR QUE O SINAL</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005f;</td>
																		<td>U+005F</td>
																		<td>LINHA BAIXA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007c;</td>
																		<td>U+007C</td>
																		<td>LINHA VERTICAL</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007e;</td>
																		<td>U+007E</td>
																		<td>TILDE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a2;</td>
																		<td>U+00A2</td>
																		<td>CENT SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a3;</td>
																		<td>U+00A3</td>
																		<td>SINAL DE GBP</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a4;</td>
																		<td>U+00A4</td>
																		<td>SINAL DE CURRÊNCIA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a5;</td>
																		<td>U+00A5</td>
																		<td>YEN SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a6;</td>
																		<td>U+00A6</td>
																		<td>BAR QUEBRADO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a9;</td>
																		<td>U+00A9</td>
																		<td>SINAL DE DIREITO DE CÓPIA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00ae;</td>
																		<td>U+00AE</td>
																		<td>SINAL REGISTADO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b0;</td>
																		<td>U+00B0</td>
																		<td>SINAL DE GRAU</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b1;</td>
																		<td>U+00B1</td>
																		<td>SINAL DE MAIS MENOS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00d7;</td>
																		<td>U+00D7</td>
																		<td>SINAL DE MULTIPLICAÇÃO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00f7;</td>
																		<td>U+00F7</td>
																		<td>SINAL DE DIVISÃO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2013;</td>
																		<td>U+2013</td>
																		<td>EN DASH</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2014;</td>
																		<td>U+2014</td>
																		<td>EM DASH</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x20ac;</td>
																		<td>U+20AC</td>
																		<td>SINAL EURO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2117;</td>
																		<td>U+2117</td>
																		<td>SOUND RECORDING COPYRIGHT</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="pt-PT-Sk-Lm-Character" class="toggle" type="checkbox">
													<label for="pt-PT-Sk-Lm-Character" class="lbl-toggle indent">Modificadores</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caractere</th>
																		<th>NFC</th><th>Nome Unicode</th>
																		<th>NFD</th><th>Nome Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005e;</td>
																		<td>U+005E</td>
																		<td>ACENTO CIRCUNFLEXO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a8;</td>
																		<td>U+00A8</td>
																		<td>DIAERESIS</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="pt-PT-ZzOther-Character" class="toggle" type="checkbox">
													<label for="pt-PT-ZzOther-Character" class="lbl-toggle indent">Outros</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caractere</th>
																		<th>NFC</th><th>Nome Unicode</th>
																		<th>NFD</th><th>Nome Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0045;&#x0053;&#x0043;</td>
																		<td>U+001B</td>
																		<td>FUGA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0046;&#x0053;</td>
																		<td>U+001C</td>
																		<td>SEPARADOR DE INFORMAÇÃO QUATRO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0047;&#x0053;</td>
																		<td>U+001D</td>
																		<td>SEPARADOR DE GRUPO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0021;</td>
																		<td>U+0021</td>
																		<td>PONTO DE EXCLAMAÇÃO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0022;</td>
																		<td>U+0022</td>
																		<td>ASPAS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0023;</td>
																		<td>U+0023</td>
																		<td>SINAL DE NÚMERO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0025;</td>
																		<td>U+0025</td>
																		<td>SINAL PERCENTUAL</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0026;</td>
																		<td>U+0026</td>
																		<td>AMPERSAND</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0027;</td>
																		<td>U+0027</td>
																		<td>APÓSTROFO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002a;</td>
																		<td>U+002A</td>
																		<td>ASTERISCO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002c;</td>
																		<td>U+002C</td>
																		<td>VÍRGULA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002e;</td>
																		<td>U+002E</td>
																		<td>PONTO FINAL</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002f;</td>
																		<td>U+002F</td>
																		<td>SOLIDUS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0030;</td>
																		<td>U+0030</td>
																		<td>DÍGITO ZERO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0031;</td>
																		<td>U+0031</td>
																		<td>DÍGITO UM</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0032;</td>
																		<td>U+0032</td>
																		<td>DÍGITO DOIS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0033;</td>
																		<td>U+0033</td>
																		<td>DÍGITO TRÊS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0034;</td>
																		<td>U+0034</td>
																		<td>DÍGITO QUATRO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0035;</td>
																		<td>U+0035</td>
																		<td>DÍGITO CINCO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0036;</td>
																		<td>U+0036</td>
																		<td>DÍGITO SEIS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0037;</td>
																		<td>U+0037</td>
																		<td>DÍGITO SETE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0038;</td>
																		<td>U+0038</td>
																		<td>DÍGITO OITO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0039;</td>
																		<td>U+0039</td>
																		<td>DÍGITO NOVE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003a;</td>
																		<td>U+003A</td>
																		<td>CÓLON</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003b;</td>
																		<td>U+003B</td>
																		<td>PONTO-E-VÍRGULA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003f;</td>
																		<td>U+003F</td>
																		<td>PONTO DE INTERROGAÇÃO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0040;</td>
																		<td>U+0040</td>
																		<td>AROBAS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005c;</td>
																		<td>U+005C</td>
																		<td>SOLIDUS REVERSO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004e;&#x0042;&#x0053;&#x0050;</td>
																		<td>U+00A0</td>
																		<td>ESPAÇO SEM FUGA</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a7;</td>
																		<td>U+00A7</td>
																		<td>SINAL DA SECÇÃO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b6;</td>
																		<td>U+00B6</td>
																		<td>SINAL PILCROW</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b7;</td>
																		<td>U+00B7</td>
																		<td>PONTO MÉDIO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2022;</td>
																		<td>U+2022</td>
																		<td>BULLET</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2026;</td>
																		<td>U+2026</td>
																		<td>ELIPSE HORIZONTAL</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004e;&#x004e;&#x0042;&#x0053;&#x0050;</td>
																		<td>U+202F</td>
																		<td>ESPAÇO ESTREITO E SEM RUPTURAS</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Ending Portuguese-->
		<!--Starting French-->
		<div id="fr" class="tab-content" lang="fr">
			<p><a class="buttonlang" href="#en">View this page in English...</a>, <a class="buttonlang" href="#pt">Ver esta página em portugu&#x00EA;s...</a></p>
			<div class="container col">
				<table class="compact">
					<tr class="compact">
						<td class="compact" style="text-align: top"><img src="splash.png" width="70" height="101"/></td>
						<td class="compact">&nbsp;&nbsp;</td>
						<td class="compact">
							<h1t style="text-align: center"> <strong>sil_krx_latn_azerty:</strong> Un clavier pour Karon (Latin) g&#x00E9;n&#x00E9;rant des caract&#x00E8;res enti&#x00E8;rement compos&#x00E9;s et bas&#x00E9; sur une disposition azerty.</h1t><br>
							<p0>Cr&#x00E9;&#x00E9; par SIL S&#x00E9;n&#x00E9;gal. &#x00A9;2020&nbsp;SIL&nbsp;International.</p0>
						</td>
						<td class="compact">&nbsp;&nbsp;</td>
						<td class="compact"style="text-align: center"><img src="icon.png" width="75" height="101"/></td>
					</tr>
				</table>
				<div class="wrap-collabsible">
					<input id="collapsible-touch-fr" class="toggle" type="checkbox">
					<label for="collapsible-touch-fr" class="lbl-toggle indent">Clavier tactile (Android, iOS).</label>
					<div class="collapsible-content">
						<div class="content-inner">
							<div class="container col">
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Couche par d&#x00E9;faut 'abc'</header>
									<div class="container col" id="default">
										<img src="layer_default.png" alt="image for layer default" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Couche maj.</header>
									<div class="container col" id="shift">
										<img src="layer_shift.png" alt="image for layer shift" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Couche num&#x00E9;rique</header>
									<div class="container col" id="numeric">
										<img src="layer_numeric.png" alt="image for layer numeric" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>les autres</header>
									<div class="container col" id="other">
										<img src="layer_other.png" alt="image for layer other" width="510" height="204">
									</div>
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'>Les Autres</header>
									<div class="container col" id="others">
										<img src="layer_others.png" alt="image for layer others" width="510" height="204">
									</div>
								</div>
								<p>Un appui bref sur une touche avec un point gris produira son caract&#x00E8;re. Mais un appui long ouvrira un menu contextuel, vous permettant de faire glisser votre doigt sur le caract&#x00E8;re souhait&#x00E9; et de le rel&#x00E2;cher.</p>
								<div class='container col'>
									<p><strong>Sur chaque couche:</strong> Un appui long sur la barre d'espace donnera le menu contextuel suivant. ('NBSP' est un espace insécable, 'NNBSP' est un espace insécable étroit.)</p>
									<img src='lp_K_SPACE.png' alt='space longpress' />
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'><br><strong>Sur la couche 'abc' par d&#x00E9;faut:</strong></header>
									<img src='lp_default_0x2e.png' alt='lp_default_0x2e.png' />
								</div>
								<div class='container col'>
									<header style='font-family: "Andika Afr", andika, geneva, arial, helvetica, sans-serif;'><br><strong>Sur la couche num&#x00E9;rique &#x00AB; 123 &#x00BB;:</strong></header>
									<img src='lp_numeric_0x24.png' alt='lp_numeric_0x24.png' />
									<img src='lp_numeric_0x2d.png' alt='lp_numeric_0x2d.png' />
									<img src='lp_numeric_0x5b.png' alt='lp_numeric_0x5b.png' />
									<img src='lp_numeric_0x5d.png' alt='lp_numeric_0x5d.png' />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wrap-collabsible">
					<input id="collapsible-web-fr" class="toggle" type="checkbox">
					<label for="collapsible-web-fr" class="lbl-toggle indent">Disposition du clavier Web et des claviers physiques pour Windows, Mac, Linux, Android et iOS.</label>
					<div class="collapsible-content">
						<div class="content-inner">
							<div class="container col">
								<div class="wrap-collabsible">
									<input id="fr-sil_krx_latn_azerty-Layouts" class="toggle" type="checkbox">
									<label for="fr-sil_krx_latn_azerty-Layouts" class="lbl-toggle indent">sil_krx_latn_azerty-Disposition des claviers</label>
									<div class="collapsible-content">
										<div class="content-inner">
											<div class="container col">
												<p>Un espace incassable est indiqu&#x00E9; par &#x00AB;NBSP&#x00BB; ou &#x00AB;NNBSP&#x00BB; pour la version &#x00E9;troite.</p>
												<table class="compact" style="text-align: left;">
													<tr class="compact" style="text-align: left;">
														<td class="compact" style="text-align: left;">
														<p>default</p>
															<img src="state_0.png" alt="default" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>shift</p>
															<img src="state_1.png" alt="shift" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>ctrl</p>
															<img src="state_2.png" alt="ctrl" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>ctrl-alt</p>
															<img src="state_6.png" alt="ctrl-alt" width="638" height="210">
														</td>
													</tr>
														<td class="compact" style="text-align: left;">
														<p>shift-ctrl-alt</p>
															<img src="state_7.png" alt="shift-ctrl-alt" width="638" height="210">
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="wrap-collabsible">
									<input id="fr-sil_krx_latn_azerty-Character" class="toggle" type="checkbox">
									<label for="fr-sil_krx_latn_azerty-Character" class="lbl-toggle indent">sil_krx_latn_azerty-Tables des caract&#x00E8;res</label>
									<div class="collapsible-content">
										<div class="content-inner">
											<div class="container col">
												<div class="wrap-collabsible">
													<input id="fr-FR-Ll-Character" class="toggle" type="checkbox">
													<label for="fr-FR-Ll-Character" class="lbl-toggle indent">Lettres minuscules</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caract&#x00E8;re</th>
																		<th>NFC</th><th>Nom Unicode</th>
																		<th>NFD</th><th>Nom Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0061;</td>
																		<td>U+0061</td>
																		<td>MINUSCULE LETTRE LATINE A</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0062;</td>
																		<td>U+0062</td>
																		<td>MINUSCULE LETTRE LATINE B</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0063;</td>
																		<td>U+0063</td>
																		<td>MINUSCULE LETTRE LATINE C</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0064;</td>
																		<td>U+0064</td>
																		<td>MINUSCULE LETTRE LATINE D</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0065;</td>
																		<td>U+0065</td>
																		<td>MINUSCULE LETTRE LATINE E</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0066;</td>
																		<td>U+0066</td>
																		<td>MINUSCULE LETTRE LATINE F</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0067;</td>
																		<td>U+0067</td>
																		<td>MINUSCULE LETTRE LATINE G</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0068;</td>
																		<td>U+0068</td>
																		<td>MINUSCULE LETTRE LATINE H</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0069;</td>
																		<td>U+0069</td>
																		<td>MINUSCULE LETTRE LATINE I</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006a;</td>
																		<td>U+006A</td>
																		<td>MINUSCULE LETTRE LATINE J</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006b;</td>
																		<td>U+006B</td>
																		<td>MINUSCULE LETTRE LATINE K</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006c;</td>
																		<td>U+006C</td>
																		<td>MINUSCULE LETTRE LATINE L</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006d;</td>
																		<td>U+006D</td>
																		<td>MINUSCULE LETTRE LATINE M</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006e;</td>
																		<td>U+006E</td>
																		<td>MINUSCULE LETTRE LATINE N</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x006f;</td>
																		<td>U+006F</td>
																		<td>MINUSCULE LETTRE LATINE O</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0070;</td>
																		<td>U+0070</td>
																		<td>MINUSCULE LETTRE LATINE P</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0071;</td>
																		<td>U+0071</td>
																		<td>MINUSCULE LETTRE LATINE Q</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0072;</td>
																		<td>U+0072</td>
																		<td>MINUSCULE LETTRE LATINE R</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0073;</td>
																		<td>U+0073</td>
																		<td>MINUSCULE LETTRE LATINE S</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0074;</td>
																		<td>U+0074</td>
																		<td>MINUSCULE LETTRE LATINE T</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0075;</td>
																		<td>U+0075</td>
																		<td>MINUSCULE LETTRE LATINE U</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0076;</td>
																		<td>U+0076</td>
																		<td>MINUSCULE LETTRE LATINE V</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0077;</td>
																		<td>U+0077</td>
																		<td>MINUSCULE LETTRE LATINE W</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0078;</td>
																		<td>U+0078</td>
																		<td>MINUSCULE LETTRE LATINE X</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0079;</td>
																		<td>U+0079</td>
																		<td>MINUSCULE LETTRE LATINE Y</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007a;</td>
																		<td>U+007A</td>
																		<td>MINUSCULE LETTRE LATINE Z</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b5;</td>
																		<td>U+00B5</td>
																		<td>MICRO SIGN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00e0;</td>
																		<td>U+00E0</td>
																		<td>MINUSCULE LETTRE LATINE A AVEC GRAVE</td>
																		<td>U+0061 U+0300</td>
																		<td>&#x004d;&#x0049;&#x004e;&#x0055;&#x0053;&#x0043;&#x0055;&#x004c;&#x0045;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0052;&#x0045;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0045;&#x0020;&#x0041;&#x0020;&#x0041;&#x0056;&#x0045;&#x0043;&#x0020;&#x0047;&#x0052;&#x0041;&#x0056;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00e1;</td>
																		<td>U+00E1</td>
																		<td>MINUSCULE LETTRE LATINE A AVEC AIGU</td>
																		<td>U+0061 U+0301</td>
																		<td>&#x004d;&#x0049;&#x004e;&#x0055;&#x0053;&#x0043;&#x0055;&#x004c;&#x0045;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0052;&#x0045;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0045;&#x0020;&#x0041;&#x0020;&#x0041;&#x0056;&#x0045;&#x0043;&#x0020;&#x0041;&#x0049;&#x0047;&#x0055;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00e9;</td>
																		<td>U+00E9</td>
																		<td>MINUSCULE LETTRE LATINE E AVEC AIGUË</td>
																		<td>U+0065 U+0301</td>
																		<td>&#x004d;&#x0049;&#x004e;&#x0055;&#x0053;&#x0043;&#x0055;&#x004c;&#x0045;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0052;&#x0045;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0045;&#x0020;&#x0045;&#x0020;&#x0041;&#x0056;&#x0045;&#x0043;&#x0020;&#x0041;&#x0049;&#x0047;&#x0055;&#x00cb;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00ed;</td>
																		<td>U+00ED</td>
																		<td>MINUSCULE LETTRE LATINE I AVEC AIGU</td>
																		<td>U+0069 U+0301</td>
																		<td>&#x004d;&#x0049;&#x004e;&#x0055;&#x0053;&#x0043;&#x0055;&#x004c;&#x0045;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0052;&#x0045;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0045;&#x0020;&#x0049;&#x0020;&#x0041;&#x0056;&#x0045;&#x0043;&#x0020;&#x0041;&#x0049;&#x0047;&#x0055;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00f1;</td>
																		<td>U+00F1</td>
																		<td>MINUSCULE LETTRE LATINE N AVEC TILDE</td>
																		<td>U+006E U+0303</td>
																		<td>&#x004d;&#x0049;&#x004e;&#x0055;&#x0053;&#x0043;&#x0055;&#x004c;&#x0045;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0052;&#x0045;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0045;&#x0020;&#x004e;&#x0020;&#x0041;&#x0056;&#x0045;&#x0043;&#x0020;&#x0054;&#x0049;&#x004c;&#x0044;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00f3;</td>
																		<td>U+00F3</td>
																		<td>MINUSCULE LETTRE LATINE O AVEC AIGU</td>
																		<td>U+006F U+0301</td>
																		<td>&#x004d;&#x0049;&#x004e;&#x0055;&#x0053;&#x0043;&#x0055;&#x004c;&#x0045;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0052;&#x0045;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0045;&#x0020;&#x004f;&#x0020;&#x0041;&#x0056;&#x0045;&#x0043;&#x0020;&#x0041;&#x0049;&#x0047;&#x0055;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00fa;</td>
																		<td>U+00FA</td>
																		<td>MINUSCULE LETTRE LATINE U AVEC AIGU</td>
																		<td>U+0075 U+0301</td>
																		<td>&#x004d;&#x0049;&#x004e;&#x0055;&#x0053;&#x0043;&#x0055;&#x004c;&#x0045;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0052;&#x0045;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0045;&#x0020;&#x0055;&#x0020;&#x0041;&#x0056;&#x0045;&#x0043;&#x0020;&#x0041;&#x0049;&#x0047;&#x0055;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x014b;</td>
																		<td>U+014B</td>
																		<td>MINUSCULE LETTRE LATINE ENG</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="fr-FR-Lu-Character" class="toggle" type="checkbox">
													<label for="fr-FR-Lu-Character" class="lbl-toggle indent">Lettres majuscules</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caract&#x00E8;re</th>
																		<th>NFC</th><th>Nom Unicode</th>
																		<th>NFD</th><th>Nom Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0041;</td>
																		<td>U+0041</td>
																		<td>MAJUSCULE LETTRE LATINE A</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0042;</td>
																		<td>U+0042</td>
																		<td>MAJUSCULE LETTRE LATINE B</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0043;</td>
																		<td>U+0043</td>
																		<td>MAJUSCULE LETTRE LATINE C</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0044;</td>
																		<td>U+0044</td>
																		<td>MAJUSCULE LETTRE LATINE D</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0045;</td>
																		<td>U+0045</td>
																		<td>MAJUSCULE LETTRE LATINE E</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0046;</td>
																		<td>U+0046</td>
																		<td>MAJUSCULE LETTRE LATINE F</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0047;</td>
																		<td>U+0047</td>
																		<td>MAJUSCULE LETTRE LATINE G</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0048;</td>
																		<td>U+0048</td>
																		<td>MAJUSCULE LETTRE LATINE H</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0049;</td>
																		<td>U+0049</td>
																		<td>MAJUSCULE LETTRE LATINE I</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004a;</td>
																		<td>U+004A</td>
																		<td>MAJUSCULE LETTRE LATINE J</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004b;</td>
																		<td>U+004B</td>
																		<td>MAJUSCULE LETTRE LATINE K</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004c;</td>
																		<td>U+004C</td>
																		<td>MAJUSCULE LETTRE LATINE L</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004d;</td>
																		<td>U+004D</td>
																		<td>MAJUSCULE LETTRE LATINE M</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004e;</td>
																		<td>U+004E</td>
																		<td>MAJUSCULE LETTRE LATINE N</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004f;</td>
																		<td>U+004F</td>
																		<td>MAJUSCULE LETTRE LATINE O</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0050;</td>
																		<td>U+0050</td>
																		<td>MAJUSCULE LETTRE LATINE P</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0051;</td>
																		<td>U+0051</td>
																		<td>MAJUSCULE LETTRE LATINE Q</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0052;</td>
																		<td>U+0052</td>
																		<td>MAJUSCULE LETTRE LATINE R</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0053;</td>
																		<td>U+0053</td>
																		<td>MAJUSCULE LETTRE LATINE S</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0054;</td>
																		<td>U+0054</td>
																		<td>MAJUSCULE LETTRE LATINE T</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0055;</td>
																		<td>U+0055</td>
																		<td>MAJUSCULE LETTRE LATINE U</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0056;</td>
																		<td>U+0056</td>
																		<td>MAJUSCULE LETTRE LATINE V</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0057;</td>
																		<td>U+0057</td>
																		<td>MAJUSCULE LETTRE LATINE W</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0058;</td>
																		<td>U+0058</td>
																		<td>MAJUSCULE LETTRE LATINE X</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0059;</td>
																		<td>U+0059</td>
																		<td>MAJUSCULE LETTRE LATINE Y</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005a;</td>
																		<td>U+005A</td>
																		<td>MAJUSCULE LETTRE LATINE Z</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00d1;</td>
																		<td>U+00D1</td>
																		<td>MAJUSCULE LETTRE LATINE N AVEC TILDE</td>
																		<td>U+004E U+0303</td>
																		<td>&#x004d;&#x0041;&#x004a;&#x0055;&#x0053;&#x0043;&#x0055;&#x004c;&#x0045;&#x0020;&#x004c;&#x0045;&#x0054;&#x0054;&#x0052;&#x0045;&#x0020;&#x004c;&#x0041;&#x0054;&#x0049;&#x004e;&#x0045;&#x0020;&#x004e;&#x0020;&#x0041;&#x0056;&#x0045;&#x0043;&#x0020;&#x0054;&#x0049;&#x004c;&#x0044;&#x0045;</td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x014a;</td>
																		<td>U+014A</td>
																		<td>MAJUSCULE LETTRE LATINE ENG</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="fr-FR-Pi-Pf-Character" class="toggle" type="checkbox">
													<label for="fr-FR-Pi-Pf-Character" class="lbl-toggle indent">Guillemets</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caract&#x00E8;re</th>
																		<th>NFC</th><th>Nom Unicode</th>
																		<th>NFD</th><th>Nom Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00ab;</td>
																		<td>U+00AB</td>
																		<td>GUILLEMETS DOUBLE ANGLE POINTANT À GAUCHE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00bb;</td>
																		<td>U+00BB</td>
																		<td>GUILLEMETS DOUBLE ANGLE POINTANT À DROITE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2018;</td>
																		<td>U+2018</td>
																		<td>ENTRE GUILLEMETS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2019;</td>
																		<td>U+2019</td>
																		<td>GUILLEMETS SIMPLES DE DROITE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x201c;</td>
																		<td>U+201C</td>
																		<td>A LAISSÉ DES GUILLEMETS DOUBLES</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x201d;</td>
																		<td>U+201D</td>
																		<td>GUILLEMETS DOUBLES DROITS</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="fr-FR-Ps-Pe-Character" class="toggle" type="checkbox">
													<label for="fr-FR-Ps-Pe-Character" class="lbl-toggle indent">Envelopper la ponctuation</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caract&#x00E8;re</th>
																		<th>NFC</th><th>Nom Unicode</th>
																		<th>NFD</th><th>Nom Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0028;</td>
																		<td>U+0028</td>
																		<td>PARENTHÈSE GAUCHE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0029;</td>
																		<td>U+0029</td>
																		<td>PARENTHÈSE DROITE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005b;</td>
																		<td>U+005B</td>
																		<td>CROCHET GAUCHE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005d;</td>
																		<td>U+005D</td>
																		<td>CROCHET DROIT</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007b;</td>
																		<td>U+007B</td>
																		<td>PARENTHÈSE BOUCLÉE GAUCHE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007d;</td>
																		<td>U+007D</td>
																		<td>PARENTHÈSE BOUCLÉE DROITE</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="fr-FR-Sc-Sm-So-Pd-Pc-Character" class="toggle" type="checkbox">
													<label for="fr-FR-Sc-Sm-So-Pd-Pc-Character" class="lbl-toggle indent">Signes</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caract&#x00E8;re</th>
																		<th>NFC</th><th>Nom Unicode</th>
																		<th>NFD</th><th>Nom Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0024;</td>
																		<td>U+0024</td>
																		<td>SIGNE DU DOLLAR</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002b;</td>
																		<td>U+002B</td>
																		<td>SIGNE PLUS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002d;</td>
																		<td>U+002D</td>
																		<td>TIRET MOINS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003c;</td>
																		<td>U+003C</td>
																		<td>MOINS QUE SIGNE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003d;</td>
																		<td>U+003D</td>
																		<td>ÉGALE SIGNE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003e;</td>
																		<td>U+003E</td>
																		<td>PLUS GRAND QUE LE SIGNE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005f;</td>
																		<td>U+005F</td>
																		<td>LIGNE BASSE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007c;</td>
																		<td>U+007C</td>
																		<td>LIGNE VERTICALE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x007e;</td>
																		<td>U+007E</td>
																		<td>TILDE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a2;</td>
																		<td>U+00A2</td>
																		<td>SIGNE CENT</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a3;</td>
																		<td>U+00A3</td>
																		<td>SIGNE DE GBP</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a4;</td>
																		<td>U+00A4</td>
																		<td>SIGNE DE LA MONNAIE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a5;</td>
																		<td>U+00A5</td>
																		<td>SIGNE YEN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a6;</td>
																		<td>U+00A6</td>
																		<td>BARRE CASSÉE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a9;</td>
																		<td>U+00A9</td>
																		<td>SIGNE DU DROIT D'AUTEUR</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00ae;</td>
																		<td>U+00AE</td>
																		<td>SIGNE ENREGISTRÉ</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b0;</td>
																		<td>U+00B0</td>
																		<td>SIGNE DU DEGRÉ</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b1;</td>
																		<td>U+00B1</td>
																		<td>SIGNE POSITIF-MOINS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00d7;</td>
																		<td>U+00D7</td>
																		<td>SIGNE DE MULTIPLICATION</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00f7;</td>
																		<td>U+00F7</td>
																		<td>SIGNE DE DIVISION</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2013;</td>
																		<td>U+2013</td>
																		<td>EN DASH</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2014;</td>
																		<td>U+2014</td>
																		<td>EM DASH</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x20ac;</td>
																		<td>U+20AC</td>
																		<td>SIGNE EURO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2117;</td>
																		<td>U+2117</td>
																		<td>SOUND RECORDING COPYRIGHT</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="fr-FR-Sk-Lm-Character" class="toggle" type="checkbox">
													<label for="fr-FR-Sk-Lm-Character" class="lbl-toggle indent">Modificateurs</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caract&#x00E8;re</th>
																		<th>NFC</th><th>Nom Unicode</th>
																		<th>NFD</th><th>Nom Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005e;</td>
																		<td>U+005E</td>
																		<td>ACCENT CIRCONFLEXE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a8;</td>
																		<td>U+00A8</td>
																		<td>DIAÉRÈSE</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="wrap-collabsible">
													<input id="fr-FR-ZzOther-Character" class="toggle" type="checkbox">
													<label for="fr-FR-ZzOther-Character" class="lbl-toggle indent">Autres</label>
													<div class="collapsible-content">
														<div class="content-inner">
															<div class="container col">
																<table>
																	<tr>
																		<th>Caract&#x00E8;re</th>
																		<th>NFC</th><th>Nom Unicode</th>
																		<th>NFD</th><th>Nom Unicode</th>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0045;&#x0053;&#x0043;</td>
																		<td>U+001B</td>
																		<td>ÉCHAPPER</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0046;&#x0053;</td>
																		<td>U+001C</td>
																		<td>SÉPARATEUR D'INFORMATIONS QUATRE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0047;&#x0053;</td>
																		<td>U+001D</td>
																		<td>SÉPARATEUR DE GROUPE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0021;</td>
																		<td>U+0021</td>
																		<td>POINT D'EXCLAMATION</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0022;</td>
																		<td>U+0022</td>
																		<td>GUILLEMETS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0023;</td>
																		<td>U+0023</td>
																		<td>SIGNE NUMÉRIQUE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0025;</td>
																		<td>U+0025</td>
																		<td>SIGNE DU POURCENTAGE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0026;</td>
																		<td>U+0026</td>
																		<td>AMPERSAND</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0027;</td>
																		<td>U+0027</td>
																		<td>APOSTROPHE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002a;</td>
																		<td>U+002A</td>
																		<td>ASTÉRISQUE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002c;</td>
																		<td>U+002C</td>
																		<td>VIRGULE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002e;</td>
																		<td>U+002E</td>
																		<td>POINT FINAL</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x002f;</td>
																		<td>U+002F</td>
																		<td>SOLIDUS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0030;</td>
																		<td>U+0030</td>
																		<td>CHIFFRE ZÉRO</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0031;</td>
																		<td>U+0031</td>
																		<td>CHIFFRE UN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0032;</td>
																		<td>U+0032</td>
																		<td>CHIFFRE DEUX</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0033;</td>
																		<td>U+0033</td>
																		<td>CHIFFRE TROIS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0034;</td>
																		<td>U+0034</td>
																		<td>CHIFFRE QUATRE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0035;</td>
																		<td>U+0035</td>
																		<td>CHIFFRE CINQ</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0036;</td>
																		<td>U+0036</td>
																		<td>CHIFFRE SIX</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0037;</td>
																		<td>U+0037</td>
																		<td>CHIFFRE SEPT</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0038;</td>
																		<td>U+0038</td>
																		<td>CHIFFRE HUIT</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0039;</td>
																		<td>U+0039</td>
																		<td>CHIFFRE NEUF</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003a;</td>
																		<td>U+003A</td>
																		<td>CÔLON</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003b;</td>
																		<td>U+003B</td>
																		<td>POINT-VIRGULE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x003f;</td>
																		<td>U+003F</td>
																		<td>POINT D'INTERROGATION</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x0040;</td>
																		<td>U+0040</td>
																		<td>AROBAS</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x005c;</td>
																		<td>U+005C</td>
																		<td>SOLIDUS INVERSE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004e;&#x0042;&#x0053;&#x0050;</td>
																		<td>U+00A0</td>
																		<td>ESPACE SANS RUPTURE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00a7;</td>
																		<td>U+00A7</td>
																		<td>SIGNE DE SECTION</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b6;</td>
																		<td>U+00B6</td>
																		<td>SIGNE PILCROW</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x00b7;</td>
																		<td>U+00B7</td>
																		<td>POINT MOYEN</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2022;</td>
																		<td>U+2022</td>
																		<td>BULLET</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x2026;</td>
																		<td>U+2026</td>
																		<td>ELLIPSE HORIZONTALE</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td style="font-size: 120%;">&#x004e;&#x004e;&#x0042;&#x0053;&#x0050;</td>
																		<td>U+202F</td>
																		<td>UN ESPACE ÉTROIT SANS RUPTURE</td>
																		<td></td>
																		<td></td>
																	</tr>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Ending French-->
	</div>
</body>
