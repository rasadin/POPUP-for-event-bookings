function get_terms_fun()
{

$terms = get_terms('category');
echo '<ul>';
foreach ($terms as $term) {
    echo '<li><a href="'.get_term_link($term->slug, 'category').'">'.$term->name.'</a></li>';
}
echo '</ul>';
}


function eb_newsletter(){ ?>
	<div class="newsletter-block">
                    <h4>Newsletter Signup</h4>
                    <!--Zoho Campaigns Web-Optin Form's Header Code Starts Here-->

<meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<script type="text/javascript" src="https://publ.maillist-manage.com/js/optin.min.js" onload="setupSF('sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b','ZCFORMVIEW',false,'light')"></script>
<script type="text/javascript">
	function runOnFormSubmit_sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b(th){
		/*Before submit, if you want to trigger your event, "include your code here"*/
	};
</script>

<style>
#sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b #customForm *{
-webkit-box-sizing: border-box !important;
-moz-box-sizing: border-box !important;
box-sizing: border-box !important;
word-break:break-word;
overflow-wrap: break-word;
}
/*** RESPONSIVE START */
@media only screen and (max-width: 200px){
#sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b [name='SIGNUP_BODY']{
width:100% !important;
min-width:100% !important;
margin: 0px auto !important;
padding:0px !important	
}
}
/*Major Mobiles*/
@media screen and (min-width: 320px) and (max-width: 580px) and (orientation : portrait){
#sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b [name='SIGNUP_BODY']{
max-width:300px !important;
margin: 0px auto !important;
padding:0px !important;
}
}
/* iPads*/
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px){
#sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b [name='SIGNUP_BODY']{
max-width:500px !important;
margin: 0px auto !important;
}
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape){
#sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b [name='SIGNUP_BODY']{
max-width:700px !important;
margin: 0px auto !important;
}
}
@media screen and (min-width: 475px) and (max-width: 980px) and (orientation : landscape){
#sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b [name='SIGNUP_BODY']{
max-width:400px !important;
margin: 0px auto !important;
padding:0px !important;
}
}
/*** RESPONSIVE END */
.quick_form_29_css form{text-align:left;}.quick_form_29_css [changeitem='SIGNUP_ICON_1'],.quick_form_29_css [changeitem='SIGNUP_ICON_2']{vertical-align: middle; border-image: initial; display: inline-block; float: left; border-top: 1px solid rgb(225, 225, 225); border-left: 1px solid rgb(225, 225, 225); border-right: none; width: 20%; background-size: 25px; background-position: center center; border-bottom: 1px solid rgb(225, 225, 225); background-repeat: no-repeat; height: 43px;}.quick_form_29_css [changeitem='SIGNUP_FORM_FIELD']{width:79% !important; display:inline-block !important;}
</style>

<!--Zoho Campaigns Web-Optin Form's Header Code Ends Here--><!--Zoho Campaigns Web-Optin Form Starts Here-->

<div id="sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b" data-type="signupform_0">
	<div id="customForm">
		<input type="hidden" id="signupFormType" value="QuickForm_Vertical">
		<div>
			<table width="" class="quick_form_29_css" border="0" cellspacing="0" cellpadding="0" align="center" name="SIGNUP_BODY" id="SIGNUP_BODY" style="background-color: rgb(255, 255, 255); color: rgb(255, 255, 255);  padding: 0px; margin: 0px auto; font-family: Arial; font-size: 11px; text-align: center; opacity: 1;">
				<tbody>
					<tr style="border: none;">
						<td align="center" valign="top" style="">
							<!-- <div style="color: rgb(1, 176, 255); border-bottom: 1px none rgb(242, 41, 96); border-left-style: none; padding: 15px 20px; font-family: Arial; letter-spacing: 1px; font-size: 22px; font-weight: 100; text-align: left;" id="SIGNUP_HEADING" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER">Join Our Newsletter</div> -->
							<div>
								<div style="position:relative;">
									<div id="Zc_SignupSuccess" style="z-index:1;display:none;position:absolute;margin-left:4%;width:90%;background-color: #fff!important; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all;">
										<table width="100%" cellpadding="0" cellspacing="0" border="0">
											<tbody>
												<tr>
													<td width="10%">
														<img class="successicon" src="https://publ.maillist-manage.com/images/challangeiconenable.jpg" align="absmiddle">
													</td>
													<td>
														<span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://publ.maillist-manage.com/weboptin.zc" target="_zcSignup">
									<div style="display:none;background-color:#FFEBE8;padding:10px 10px;color: rgb(210, 0, 0);font-size: 12px;margin: 0px;border: 0px;opacity: 1;position: absolute;bottom: -28px;    line-height: 13px;" id="errorMsgDiv">Please correct the marked field(s) below.</div>
                                    <div style="padding-left:15px;word-break: break-all;word-wrap: break-word;padding-right:15px;padding-bottom:15px; padding-top:15px;position: relative;">
										<input type="submit" name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" onclick="saveOptin(this,false,function runOnFormSubmit_sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b(th){
		/*Before submit, if you want to trigger your event, &quot;include your code here&quot;*/
	},'#sf0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b[data-type=&quot;signupform_0&quot;] ',event);return false;" signupform_0"]="" ',event);return="" false;"="" changeitem="SIGNUP_ICON_1" style="display: inline-block; width: 21%; vertical-align: middle; border-image: initial; float: right; border-top: 1px solid #686c77; border-right: 1px solid #686c77; border-left: none; background-size: 20px; background-position: center center; border-bottom: 1px solid #686c77; background-repeat: no-repeat; height: 43px; text-align: center; line-height: 44px;right: 1px;top: 0;">
										<!-- <button name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" title="Click and Edit" style="background-color: rgb(72, 134, 255); color: rgb(255, 255, 255); border: none; padding: 6px 10px; outline: 0px; font-family: Arial; border-radius: 5px; width: 50%; font-size: 20px; height: 43px; text-align: center;" value="Join Now">
											<span class="zceditcnt" savetype="SIGNUP_SUBMIT_BUTTON_TEXT">Join Now</span>
										</button> -->
                                        <input name="CONTACT_EMAIL" changetype="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="email" autocomplete="" required="true" id="CONTACT_EMAIL" style="color: rgb(113, 106, 106); background-color: rgb(255, 255, 255); width: 79%; display: inline-block; padding: 4px; vertical-align: middle; box-sizing: border-box; text-indent: 15px; outline: 0px; font-family: Arial; border-radius: 0px; font-size: 17px; height: 43px;" placeholder="Email">
										
										<div style="clear:both"></div>
										<span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,Contact Email,2</span>
									</div><!-- check to mark emailid field as type email, and other mandatory fields as type required --><!-- check to mark emailid field as type email, and other mandatory fields as type required -->
									
									<input type="hidden" id="fieldBorder" value="">
									<input type="hidden" id="submitType" name="submitType" value="optinCustomView">
									<input type="hidden" id="lD" name="lD" value="149c3aaff9a75545">
									<input type="hidden" name="emailReportId" id="emailReportId" value="">
									<input type="hidden" id="formType" name="formType" value="QuickForm">
									<input type="hidden" name="zx" id="cmpZuid" value="126c85d47">
									<input type="hidden" name="zcvers" value="3.0">
									<input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
									<input type="hidden" id="mode" name="mode" value="OptinCreateView">
									<input type="hidden" id="zcld" name="zcld" value="149c3aaff9a75545">
									<input type="hidden" id="document_domain" value="campaigns.zoho.com">
									<input type="hidden" id="zc_Url" value="publ.maillist-manage.com">
									<input type="hidden" id="new_optin_response_in" value="2">
									<input type="hidden" id="duplicate_optin_response_in" value="2">
									<input type="hidden" name="zc_trackCode" id="zc_trackCode" value="ZCFORMVIEW" onload="">
									<input type="hidden" id="zc_formIx" name="zc_formIx" value="0fb887947733bb63980c50cc995b7e80c98e811ca5f0889b"><!-- End of the campaigns hidden tags --><input type="text" style="display:none !important;" name="qs" class="ih"><input type="text" style="display:none !important;" name="lf" class="ih" value="1573915066588"><input type="hidden" name="di" value="114918221031228627471573915066591"></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<img src="https://publ.maillist-manage.com/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
	</div>
</div>
<div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
<div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
	<span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
		<img src="https://publ.maillist-manage.com/images/videoclose.png">
	</span>
	<div id="zcOptinSuccessPanel"></div>
</div>



<!--Zoho Campaigns Web-Optin Form Ends Here-->
                </div>
<?php } ?>
