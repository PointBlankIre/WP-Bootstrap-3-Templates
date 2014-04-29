<?php
/*
Template Name: Form with Validation
*/
?>

<?php get_header(); ?>

<div class="row">
  <div class="col-md-12">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1 class="page-title"><?php the_title(); ?></h1>
		 
		<?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "img-responsive")); ?>
	  	<?php the_content(); ?>
	  	<?php //edit_post_link('edit', '<p>', '</p>'); ?>
	  	
	  	<form class="form-horizontal" action="https://select.worldpay.com/wcc/purchase" method="POST" data-toggle="validator" role="form">
			<fieldset><!-- Form Name -->

			<legend>ENTRY FORM</legend><input type="hidden" name="instId" value="65448" />
			<input id="cartId" type="hidden" name="cartId" />
			<input id="name" type="hidden" name="name" />
			<input type="hidden" name="amount" value="45.00" />
			<input type="hidden" name="currency" value="EUR" />
			<input type="hidden" name="desc" value="2014 Wicklow 200/100 Entry Fee" />

			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="MC_FirstName">First Name * </label>
			<div class="col-md-4"><input class="form-control input-md" id="MC_FirstName" type="text" name="MC_FirstName" placeholder="First Name " required /></div>
			</div>
			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="MC_LastName">Last Name *</label>
			<div class="col-md-4"><input class="form-control input-md" id="MC_LastName" type="text" name="MC_LastName" placeholder="Last Name" required="" /></div>
			</div>
			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="address1">Address 1 *</label>
			<div class="col-md-4"><input class="form-control input-md" id="address1" type="text" name="address1" placeholder="Address 1" required="" /></div>
			</div>
			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="address2">Address 2 </label>
			<div class="col-md-4"><input class="form-control input-md" id="address2" type="text" name="address2" placeholder="Address 2 " /></div>
			</div>
			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="town">City / Town *</label>
			<div class="col-md-4"><input class="form-control input-md" id="town" type="text" name="town" placeholder="City / Town" required="" /></div>
			</div>
			<!-- Select Basic -->
			<div class="form-group">

			<label class="col-md-4 control-label" for="region">County / Dublin area postcode *</label>
			<div class="col-md-4"><select class="form-control" id="region" name="region" required=""><option value="">Select ...</option><option value="Co Antrim">Co Antrim</option><option value="Co Armagh">Co Armagh</option><option value="Co Carlow">Co Carlow</option><option value="Co Cavan">Co Cavan</option><option value="Co Clare">Co Clare</option><option value="Co Cork">Co Cork</option><option value="Co Derry">Co Derry</option><option value="Co Donegal">Co Donegal</option><option value="Co Down">Co Down</option><option value="Co Dublin">Co Dublin</option><option value="Dublin 1">Dublin 1</option><option value="Dublin 2">Dublin 2</option><option value="Dublin 3">Dublin 3</option><option value="Dublin 4">Dublin 4</option><option value="Dublin 5">Dublin 5</option><option value="Dublin 6">Dublin 6</option><option value="Dublin 6w">Dublin 6w</option><option value="Dublin 7">Dublin 7</option><option value="Dublin 8">Dublin 8</option><option value="Dublin 9">Dublin 9</option><option value="Dublin 10">Dublin 10</option><option value="Dublin 11">Dublin 11</option><option value="Dublin 12">Dublin 12</option><option value="Dublin 13">Dublin 13</option><option value="Dublin 14">Dublin 14</option><option value="Dublin 15">Dublin 15</option><option value="Dublin 16">Dublin 16</option><option value="Dublin 17">Dublin 17</option><option value="Dublin 18">Dublin 18</option><option value="Dublin 20">Dublin 20</option><option value="Dublin 22">Dublin 22</option><option value="Dublin 24">Dublin 24</option><option value="Co Fermanagh">Co Fermanagh</option><option value="Co Galway">Co Galway</option><option value="Co Kerry">Co Kerry</option><option value="Co Kildare">Co Kildare</option><option value="Co Kilkenny">Co Kilkenny</option><option value="Co Laois">Co Laois</option><option value="Co Leitrim">Co Leitrim</option><option value="Co Limerick">Co Limerick</option><option value="Co Longford">Co Longford</option><option value="Co Louth">Co Louth</option><option value="Co Mayo">Co Mayo</option><option value="Co Meath">Co Meath</option><option value="Co Monaghan">Co Monaghan</option><option value="Co Offaly">Co Offaly</option><option value="Co Roscommon">Co Roscommon</option><option value="Co Sligo">Co Sligo</option><option value="Co Tipperary">Co Tipperary</option><option value="Co Tyrone">Co Tyrone</option><option value="Co Waterford">Co Waterford</option><option value="Co Westmeath">Co Westmeath</option><option value="Co Wexford">Co Wexford</option><option value="Co Wicklow">Co Wicklow</option></select></div>
			</div>
			<!-- Select Basic -->
			<div class="form-group">

			<label class="col-md-4 control-label" for="country">Country *</label>
			<div class="col-md-4"><select class="form-control" id="country" name="country" required=""><option value="">---</option><option value="">Choose your country.</option><option value="AF">Afghanistan</option><option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="CI">Côte d'Ivoire</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="FX">France Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KS">Kosovo</option><option value="KW">Kuwait</option><option value="KG">Kyrgystan</option><option value="LA">Lao</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MK">Macedonia (FYR)</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="CD">The Democratic Republic of the Congo</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (U.S.)</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZR">Zaire</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select></div>
			</div>
			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="postcode">International Post Code</label>
			<div class="col-md-4"><input class="form-control input-md" id="postcode" type="text" name="postcode" placeholder="International Post Code" /></div>
			</div>
			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="email">Your Email *</label>
			<div class="col-md-4"><input class="form-control input-md" id="email" type="email" name="email" placeholder="Your Email" required="email" /></div>
			</div>
			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="M_Nationality">Nationality *</label>
			<div class="col-md-4"><input class="form-control input-md" id="M_Nationality" type="text" name="M_Nationality" placeholder="Nationality" required="" /></div>
			</div>
			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="tel">Telephone</label>
			<div class="col-md-4"><input class="form-control input-md" id="tel" type="text" name="tel" placeholder="Telephone" /></div>
			</div>
			
			<!-- Text input-->
			<div class="form-group">

			<label class="col-md-4 control-label" for="M_Guardian">Name &amp; Consent of Parent or Guardian (if under 18)</label>
			<div class="col-md-4"><input class="form-control input-md" id="M_Guardian" type="text" name="M_Guardian" placeholder="Name &amp; Consent of Parent or Guardian (if under 18)" /></div>
			</div>
			<!-- Multiple Radios -->
			<div class="form-group">

			<label class="col-md-4 control-label" for="MC_Course">Course you intend to ride:</label>
			<div class="col-md-4">
			<div class="radio"><label for="MC_Course-0">
			<input id="MC_Course-0" type="radio" checked="checked" name="MC_Course" value="Wicklow 200" />
			Wicklow 200 Classic
			</label></div>
			<div class="radio"><label for="MC_Course-1">
			<input id="MC_Course-1" type="radio" name="MC_Course" value="Wicklow 100" />
			Shorter Wicklow 100
			</label></div>
			</div>
			</div>
			
			<!-- Multiple Checkboxes (inline) -->
			<div class="form-group">
			<label class="col-md-4 control-label" for="EntryConditions-0"></label>
			<div class="col-md-6"><label class="checkbox-inline" for="EntryConditions-0">
			<input id="EntryConditions-0" type="checkbox" name="EntryConditions" required="" value="1" />
			I have read and agree with the Conditions of Entry *

			<br /><span id="go-to">(Go to Term & Conditions link in the footer for Conditions of Entry.)</span>
			</label></div>
			</div>
			<!-- Button -->
			<div class="form-group">

			<label class="col-md-4 control-label" for="singlebutton"></label>
			<div class="col-md-4"><button class="btn btn-primary" id="singlebutton"  name="singlebutton" type="submit">Submit</button></div>
			</div></fieldset>
		</form>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
 </div>
<script>
jQuery('#myForm').validator();
</script>
<?php get_footer(); ?>
