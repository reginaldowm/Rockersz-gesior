<?php
if(!defined('INITIALIZED'))
	exit;

if($action == "downloadagreement"){
	$main_content .= '
		<p>Before you can download the client program please read the Tibia Service Agreement and state if you agree to it by clicking on the appropriate button below.</p>
		<div class="TableContainer" >
			<table class="Table1" cellpadding="0" cellspacing="0" >
				<div class="CaptionContainer" >
					<div class="CaptionInnerContainer" > <span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
						<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
						<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span> 
						<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>					
						<div class="Text" >Tibia Service Agreement</div>
						<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>
						<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span> 
						<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
						<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
					</div>
				</div>
				<tr>
					<td>
						<div class="InnerTableContainer" >
							<table style="width:100%;" >
								<p>This agreement describes the terms on which CipSoft GmbH offers you access to an account for being able to play the online role playing game "Tibia". By creating an account or downloading the client software you accept the terms and conditions below and state that you are of full legal age in your country or have the permission of your parents to play this game.</p>
								<p>You agree that the use of the software is at your sole risk. We provide the software, the game, and all other services "as is". We disclaim all warranties or conditions of any kind, expressed, implied or statutory, including without limitation the implied warranties of title, non-infringement, merchantability and fitness for a particular purpose. We do not ensure continuous, error-free, secure or virus-free operation of the software, the game, or your account.</p>
								<p>We are not liable for any lost profits or special, incidental or consequential damages arising out of or in connection with the game, including, but not limited to, loss of data, items, accounts, or characters from errors, system downtime, or adjustments of the gameplay.</p>
								<p>While you are playing "Tibia", you must abide by some rules ("Tibia Rules") that are stated on this homepage. If you break any of these rules, your account may be removed and all other services terminated immediately.</p>
							</table>
						</div>
					</table>
				</div>
			</td>
		</tr><br/>
		<center>
			<form action="?subtopic=download" method="post" style="padding:0px;margin:0px;" >
				<input type="hidden" name="step" value="downloadclient" >
				<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" >
					<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" >
						<div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div>
						<input class="ButtonText" type="image" name="I agree" alt="I agree" src="'.$layout_name.'/images/buttons/_sbutton_iagree.gif" >
					</div>
				</div>
			</form>
		</center>';
}
	if($action == "")
	{
		$main_content .= '
			<script type=\'text/javascript\'>ActivateWebsiteFrame();</script>
			<div class="TableContainer" >
				<table class="Table4" cellpadding="0" cellspacing="0" >
					<div class="CaptionContainer" >
						<div class="CaptionInnerContainer" > <span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
							<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
							<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span> 
							<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>							
							<div class="Text" >Download Client</div>
							<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>
							<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span> 
							<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
							<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>
						</div>
					</div>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<table style="width: 100%;" cellpadding=0 cellspacing=0 >
												<tr>
													<td style="vertical-align:top;width: 225px;;" >
														<div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr>
																		<td style="height: 290px; width: 220px; vertical-align: top;" ><img style="top: 0px; left: 0px; border: 0px; width: 208px; height: 26px; margin-top: 5px;" src="'.$layout_name.'/images/account/stand-alone-client.gif" />
																			<table style="margin-top: 15px; text-align: center;" >
																				<tr>
																					<td>
																						<a onMouseDown="javascript:pageTracker._trackPageview(\'/account/downloadclient/windowsclient\');NoteDownload(\'windowsclient\');" href="https://docs.google.com/uc?id=0B9awV7xFKSDfZm9QZkpjR2xNY00&export=download'.$config['site']['server_version'].'.exe" type="application/octet-stream" target="_top" >
																							<img style="width: 90; height: 90px; border: 0px;" src="'.$layout_name.'/images/account/download_windows.gif" />
																						</a><br/>
																						<a onMouseDown="javascript:pageTracker._trackPageview(\'/account/downloadclient/windowsclient\');NoteDownload(\'windowsclient\');" href="https://docs.google.com/uc?id=0B9awV7xFKSDfZm9QZkpjR2xNY00&export=download'.$config['site']['server_version'].'.exe" type="application/octet-stream" target="_top" >Eternus 10.99<br/>
																						'.$config['site']['server_version_2'].'</a></td>
																					<td><a onMouseDown="javascript:pageTracker._trackPageview(\'/account/downloadclient/linuxclient\');NoteDownload(\'linuxclient\');" href="https://docs.google.com/uc?id=0B9awV7xFKSDfOWhmQ1haSVNnQ3M&export=download" type="application/octet-stream" target="_top" >
																						<img style="width: 90; height: 90px; border: 0px;" src="'.$layout_name.'/images/account/download_windows.gif" />
																					</a><br/>
																						<a onMouseDown="javascript:pageTracker._trackPageview(\'/account/downloadclient/linuxclient\');NoteDownload(\'linuxclient\');" href="https://docs.google.com/uc?id=0B9awV7xFKSDfOWhmQ1haSVNnQ3M&export=download" type="application/octet-stream" target="_top" >Eternus 11
																					</a></td>
																				</tr>
																				<tr>
																					<td colspan="2" >[<span class="HelpLink" style="width: 18px; height: 18px;" >
																						<a href="" target="_blank" >
																							<span class="HelperDivIndicator" onMouseOver="ActivateHelperDiv($(this), \'Requirements:\', \'<p><b>Windows:</b><ul><li>Windows XP (Service Pack 2 or higher)/Vista/7</li><li>DirectX version 5.0 or later, or OpenGL</li><li>91 MB free space on your hard disk</li><li>A connection to the internet</li></ul><b>Linux:</b><ul><li>Linux with libc version 6 or later</li><li>X-Window system installed</li><li>Hardware accelerated graphics driver</li><li>92 MB free hard disk space</li><li>A connection to the internet</li><ul></ul>\');" onMouseOut="$(\'#HelperDivContainer\').hide();" >system requirements</span>
																						</a></span>]
																					</td>
																				</tr>
																			</table></td>
																	</tr>
																</table>
															</div>
														</div>
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-br.gif);" ></div>
															</div>
														</div></td>
													<td><div class="TableShadowContainerRightTop" >
															<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/content/table-shadow-rt.gif);" ></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-rm.gif);" >
															<div class="TableContentContainer" >
																<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
																	<tr>
																		<td style="height: 290px; vertical-align: top;" ><a href="https://secure.tibia.com/account/?subtopic=accountmanagement&page=overview" ><img style="position: absolute; float: right; right: 0px; border: 0px; width: 161px; height: 209px;" src="images/downloads/flash-client-character-list.png" /></a><img style="left: 0px; border: 0px; width: 208px; height: 26px; margin-top: 5px;" src="images/downloads/flash-client.gif" /><br/>
																			<img style="left: 0px; border: 0px; width: 208px; height: 26px; margin-top: 15px;" src="images/downloads/flash-text-1.gif" /><br/>
																			<div style="left: 3px;" >Just log in to your account and start<br/>
																				playing Tibia by a click on the <a href="https://secure.tibia.com/account/?subtopic=accountmanagement&page=overview" >play</a><br/>
																				button in your <a href="https://secure.tibia.com/account/?subtopic=accountmanagement&page=overview" >character list</a>!</div>
																			<img style="left: 0px; border: 0px; width: 208px; height: 26px; margin-top: 15px;" src="images/downloads/flash-text-2.gif" /><br/>
																			<div style="left: 3px;" >Play without downloading!<br/>
																				Play without installing!<br/>
																				Enjoy a more user-friendly interface!<br/>
																				Enjoy your Client settings on every computer!<br/>
																				Run Tibia in every supported web browser!<br/>
																			</div>
																			<div style="min-width: 390px; text-align: center; margin-top: 15px;" >[<span class="HelpLink" style="width: 18px; height: 18px;" ><a href="https://secure.tibia.com/common/help.php?subtopic=flashplayer" target="_blank" ><span class="HelperDivIndicator" onMouseOver="ActivateHelperDiv($(this), \'Adobe Flash Player:\', \'<p>You need the <b>Adobe Flash Player</b> (version 11.2.0 or higher) installed to use the Flash client!</p><p><b>Note:</b> If you have JavaScript deactivated, we cannot detect your Adobe Flash Player version!</p>\');" onMouseOut="$(\'#HelperDivContainer\').hide();" >system requirements</span></a></span>]</div></td>
																	</tr>
																</table>
															</div>
														</div>
														<div class="TableShadowContainer" >
															<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bm.gif);" >
																<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bl.gif);" ></div>
																<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-br.gif);" ></div>
															</div>
														</div></td>
												</tr>
											</table></td>
									</tr>
									<tr>
										<td><div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%"  style="border:1px solid #faf0d7;" >
														<tr>
															<td class="LabelV" >Disclaimer</td>
														</tr>
														<tr>
															<td>The software and any related documentation is provided "as is" without warranty of any kind. The entire risk arising out of use of the software remains with you. In no event shall CipSoft GmbH be liable for any damages to your computer or loss of data.</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/content/table-shadow-br.gif);" ></div>
												</div>
											</div></td>
									</tr>
								</table>
							</div>
				</table>
			</div>
			</td>
			</tr>
			<iframe src="" name="confirmclient" style="height:0px;width:0px;visibility:hidden;" >NO FRAMES</iframe>

		';
	}