<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php include 'header.php'; ?>

<body>
<div id="service_mn">
<header><img src="image/logo.png" id="sss"/></header>

<div id="main">
<?php include 'menus.php'; ?>
</div> <!-- end of main -->

  <div id="even_headings">
	<div id="event_service">
    <h2>Book Tour Here</h2>
    </div>
    
    <div id="text_service">
  
    </div>
          <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="t_title_bg t_title_text">Tour Booking <span class="red_dark"> Information </span> </td>
          </tr>
          <tr>
            <td align="center" valign="top" class="t_table_bg"> 
            <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" class="t_text"> <p> <span class="red_dark">Plan Tour Holidays with AAPNO Rajasthan holidays </span>  <br />
       Kindly take a few moments to fill up the form below enabling us to give you a detailed feedback on your request.  <br />
       Any information, even if tentative, will help us a lot in proper planning of your tour. Book A Cab Taxi | Book A Tour Package | Book Rent A Car </p></td>
  </tr>
  <form action="tour_action.php"  method="POST" name='registration'>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="t_text">
      <tr>
        <td width="21%" align="left" valign="middle">Date of Arrival : </td>
        <td width="31%" align="left" valign="middle">
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="middle">
    <input name="Arrival" type="text" id="Arrival" class="f_select_text">
     </td>
    <td align="left" valign="middle">
   </td>
    <td align="left" valign="middle">
   </td>
  </tr>
</table>        </td>
        <td width="19%" align="left" valign="middle">Date of Departure : </td>
        <td width="29%" align="left" valign="middle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="middle">
            <input name="Departure" type="text" id="Departure" class="f_select_text">
                
              &nbsp;&nbsp;</td>
            <td align="left" valign="middle">
              &nbsp;&nbsp;</td>
            <td align="left" valign="middle">
           </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td> 
      </tr>
      <tr>
        <td align="left" valign="middle">Adults: </td>
        <td align="left" valign="middle">
        <input size="10"  type="text" name="Adults" id="Adults" class="f_textfiled" /> 
        </td>
        <td align="left" valign="middle">Children: </td>
        <td align="left" valign="middle">
        <input size="10" type="text" name="Children" id="Children" class="f_textfiled" />
        </td>
      </tr>
       <tr>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td> 
      </tr>
      <tr>
        <td align="left" valign="middle">Budget Per Day Per Person:</td>
        <td align="left" valign="middle">
        <select name="Budget" id="Budget" class="f_select_text">
          <option value="Budget per person" selected="selected">Budget per person</option>
          <option value="50 $">50 $</option>
          <option value="100 $">100 $</option>
          <option value="150 $">150 $</option>
          <option value="200 $">200 $</option>
          <option value="250 $">250 $</option>
          <option value="300 $">300 $</option>
          <option value="350 $">350 $</option>
          <option value="400 $">400 $</option>
          <option value="450 $">450 $</option>
          <option value="500 $">500 $</option>
          <option value="550 $">500 $+</option>
        </select></td>
        <td align="left" valign="middle">Hotel Category:</td>
        <td align="left" valign="middle">
        
        <select class="f_select_text" id="Hotel" size="1" name="Hotel">
          <option value="" selected="selected">Select Category</option>
          <option value="budget">Budget</option>
          <option value="luxury">Luxury</option>
          <option value="5-star">5-Star</option>
          <option value="4-star">4-Star</option>
        </select></td>
      </tr>
       <tr>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td> 
      </tr>
      <tr>
      
       
      </tr>
       <tr>
        <td height="5" align="left" valign="middle"> </td>
        <td height="5" align="left" valign="middle"> </td>
        <td height="5" align="left" valign="middle"> </td>
        <td height="5" align="left" valign="middle"> </td> 
      </tr>
      <tr>
        <td align="left" valign="middle">Occupancy:</td>
        <td align="left" valign="middle">
            <select class="f_select_text" id="Occupancy" name="Occupancy">
                  <option value="NA" selected="selected">Occupancy</option>
                  <option value="Single">Single</option>
                  <option value="Double">Double</option>
                  <option value="Triple">Triple</option>
            </select>
        </td>
      
      </tr>
      <tr>
        <td height="25" align="left" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="t_title_text"> Personal<span class="red_dark"> Details </span> </td>
  </tr>
  
  <tr>
    <td height="10" align="left" valign="top"> </td>
  </tr>
  <tr>
    <td height="10" align="left" valign="top" class="t_line"> </td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="t_text">
      <tr>
        <td width="21%" align="left" valign="middle">Name:
      
        <input name="Name" type="text" id="Name" class="f_textfiled"/>
        E-mail:
        <input name="Email" id="useremail" type="text" class="f_textfiled"/></td>
      </tr>
      <tr>
        <td height="10" align="left" valign="middle"></td>
        <td height="10" align="left" valign="middle"></td>
        <td height="10" align="left" valign="middle"></td>
        <td height="10" align="left" valign="middle"></td>
      </tr>
      <tr>
        <td align="left" valign="middle">Phone:
   <input name="Phone" id="Phone" type="text" class="f_textfiled"/></td>
      </tr>
      <tr>
        <td height="10" align="left" valign="middle"></td>
        <td height="10" align="left" valign="middle"></td>
        <td height="10" align="left" valign="middle"></td>
        <td height="10" align="left" valign="middle"></td>
      </tr>
      <tr>
        <td align="left" valign="middle">Address:
        <input name="Address" id="Address" type="text" class="f_textfiled"/>
        City:
        <input name="City" id="City" class="f_textfiled"/></td>
      </tr>
      <tr>
        <td height="10" align="left" valign="middle"></td>
        <td height="10" align="left" valign="middle"></td>
        <td height="10" align="left" valign="middle"></td>
        <td height="10" align="left" valign="middle"></td>
      </tr>
      <tr>
        <td height="25" align="left" valign="middle">Country:
        <td height="25" align="left" valign="middle">
        <select style="WIDTH:177px" size="1" class="f_select_text" name="Country" id="Country">
          <option value="" selected="selected">Select a Country</option>
          <option value="USA">United States of America</option>
          <option value="CAN">Canada</option>
          <option value="DEU">Germany</option>
          <option value="FRA">France</option>
          <option value="GBR">United Kingdom</option>
          <option value="IND">India</option>
          <option value="AFG">Afghanistan</option>
          <option value="ALB">Albania</option>
          <option value="DZA">Algeria</option>
          <option value="ASM">American Samoa</option>
          <option value="AND">Andorra</option>
          <option value="AGO">Angola</option>
          <option value="AIA">Anguilla</option>
          <option value="ATA">Antarctica</option>
          <option value="ATG">Antigua and Barbuda</option>
          <option value="ARG">Argentina</option>
          <option value="ARM">Armenia</option>
          <option value="ABW">Aruba</option>
          <option value="AUS">Australia</option>
          <option value="AUT">Austria</option>
          <option value="AZE">Azerbaijan</option>
          <option value="BHS">Bahamas</option>
          <option value="BHR">Bahrain</option>
          <option value="BGD">Bangladesh</option>
          <option value="BRB">Barbados</option>
          <option value="BLR">Belarus</option>
          <option value="BEL">Belgium</option>
          <option value="BLZ">Belize</option>
          <option value="BEN">Benin</option>
          <option value="BMU">Bermuda</option>
          <option value="BTN">Bhutan</option>
          <option value="BOL">Bolivia</option>
          <option value="BIH">Bosnia and Herzegowina</option>
          <option value="BWA">Botswana</option>
          <option value="BVT">Bouvet Island</option>
          <option value="BRA">Brazil</option>
          <option value="IOT">British Indian Ocean Territory</option>
          <option value="BRN">Brunei Darussalam</option>
          <option value="BGR">Bulgaria</option>
          <option value="BFA">Burkina Faso</option>
          <option value="BDI">Burundi</option>
          <option value="KHM">Cambodia</option>
          <option value="CMR">Cameroon</option>
          <option value="CPV">Cape Verde</option>
          <option value="CYM">Cayman Islands</option>
          <option value="CAF">Central African Republic</option>
          <option value="TCD">Chad</option>
          <option value="CHL">Chile</option>
          <option value="CHN">China</option>
          <option value="CXR">Christmas Island</option>
          <option value="CCK">Cocoa (Keeling) Islands</option>
          <option value="COL">Colombia</option>
          <option value="COM">Comoros</option>
          <option value="COG">Congo</option>
          <option value="COK">Cook Islands</option>
          <option value="CRI">Costa Rica</option>
          <option value="CIV">Cote Divoire</option>
          <option value="HRV">Croatia(local name: Hrvatska)</option>
          <option value="CUB">Cuba</option>
          <option value="CYP">Cyprus</option>
          <option value="CZE">Czech Republic</option>
          <option value="DNK">Denmark</option>
          <option value="DJI">Djibouti</option>
          <option value="DMA">Dominica</option>
          <option value="DOM">Dominican Republic</option>
          <option value="TMP">East Timor</option>
          <option value="ECU">Ecuador</option>
          <option value="EGY">Egypt</option>
          <option value="SLV">El Salvador</option>
          <option value="GNQ">Equatorial Guinea</option>
          <option value="ERI">Eritrea</option>
          <option value="EST">Estonia</option>
          <option value="ETH">Ethiopia</option>
          <option value="FLK">Falkland Islands (Malvinas)</option>
          <option value="FRO">Faroe Islands</option>
          <option value="FJI">Fiji</option>
          <option value="FIN">Finland</option>
          <option value="FXX">France, Metropolitan</option>
          <option value="GUF">French Guiana</option>
          <option value="PYF">French Polynesia</option>
          <option value="ATF">French Southern Territories</option>
          <option value="GAB">Gabon</option>
          <option value="GMB">Gambia</option>
          <option value="GEO">Georgia</option>
          <option value="GHA">Ghana</option>
          <option value="GIB">Gibraltar</option>
          <option value="GRC">Greece</option>
          <option value="GRL">Greenland</option>
          <option value="GRD">Grenada</option>
          <option value="GLP">&gt;Guadeloupe</option>
          <option value="GUM">Guam</option>
          <option value="GTM">Guatemala</option>
          <option value="GIN">Guinea</option>
          <option value="GNB">Guinea-Bissau</option>
          <option value="GUY">Guyana</option>
          <option value="HTI">Haiti</option>
          <option value="HMD">Heard and Mc Donald Islands</option>
          <option value="HND">Honduras</option>
          <option value="HKG">Hong Kong</option>
          <option value="HUN">Hungary</option>
          <option value="ISL">Iceland</option>
          <option value="IDN">Indonesia</option>
          <option value="IRN">Iran (Islamic Republic of)</option>
          <option value="IRQ">Iraq</option>
          <option value="IRL">Ireland</option>
          <option value="ISR">Israel</option>
          <option value="ITA">Italy</option>
          <option value="JAM">Jamaica</option>
          <option value="JPN">Japan</option>
          <option value="JOR">Jordan</option>
          <option value="KAZ">Kazakhstan</option>
          <option value="KEN">Kenya</option>
          <option value="KIR">Kiribati</option>
          <option value="PRK">Korea, Democratic Peoples Republic of</option>
          <option value="KOR">Korea, Republic of</option>
          <option value="KWT">Kuwait</option>
          <option value="KGZ">Kyrgyzstan</option>
          <option value="LAO">Lao Peoples Democratic Republic</option>
          <option value="LVA">Latvia</option>
          <option value="LBN">Lebanon</option>
          <option value="LSO">Lesotho</option>
          <option value="LBR">Liberia</option>
          <option value="LBY">Libyan Arab Jamahiriya</option>
          <option value="LIE">Liechtenstein</option>
          <option value="LTU">Lithuania</option>
          <option value="LUX">Luxembourg</option>
          <option value="MAC">Macau</option>
          <option value="MKD">Macedonia, The Former Yugoslav Republic of</option>
          <option value="MDG">Madagascar</option>
          <option value="MWI">Malawi</option>
          <option value="MYS">Malaysia</option>
          <option value="MDV">Maldives</option>
          <option value="MLI">Mali</option>
          <option value="MLT">Malta</option>
          <option value="MHL">Marshall Islands</option>
          <option value="MTQ">Martinique</option>
          <option value="MRT">Mauritania</option>
          <option value="MVS">Mauritius</option>
          <option value="MYT">Mayotte</option>
          <option value="MEX">Mexico</option>
          <option value="FSM">Micronesia, Federated States of</option>
          <option value="MDA">Moldova, Republic of</option>
          <option value="MCO">Monaco</option>
          <option value="MNG">Mongolia</option>
          <option value="MSR">Montserrat</option>
          <option value="MAR">Morocco</option>
          <option value="MOZ">Mozambique</option>
          <option value="MMR">Myanmar</option>
          <option value="NAM">Namibia</option>
          <option value="NRU">Nauru</option>
          <option value="NPL">Nepal</option>
          <option value="NLD">Netherlands</option>
          <option value="ANT">Netherlands Antilles</option>
          <option value="NCL">New Caledonia</option>
          <option value="NZL">New Zealand</option>
          <option value="NIC">Nicaragua</option>
          <option value="NER">Niger</option>
          <option value="NGA">Nigeria</option>
          <option value="NIU">Niue</option>
          <option value="NFK">Norfolk Island</option>
          <option value="MNP">Northern Mariana Islands</option>
          <option value="MOR">Norway</option>
          <option value="OMN">Oman</option>
          <option value="PAK">Pakistan</option>
          <option value="PLW">Palau</option>
          <option value="PAN">Panama</option>
          <option value="PNG">Papua New Guinea</option>
          <option value="PRY">Paraguay</option>
          <option value="PER">Peru</option>
          <option value="PHL">Philippines</option>
          <option value="PCN">Pitcairn</option>
          <option value="POL">Poland</option>
          <option value="PRT">Portugal</option>
          <option value="PRI">Puerto Rico</option>
          <option value="QAT">Qatar</option>
          <option value="REU">Reunion</option>
          <option value="ROM">Romania</option>
          <option value="RUS">Russian Federation</option>
          <option value="RWA">Rwanda</option>
          <option value="KNA">Saint Kitts and Nevis</option>
          <option value="LCA">Saint Lucia</option>
          <option value="VCT">Saint Vincent and the Grenadines</option>
          <option value="WSM">Samoa</option>
          <option value="SMR">San Marino</option>
          <option value="STP">Sao Tome and Principe</option>
          <option value="SAU">Saudi Arabia</option>
          <option  value="SEN">Senegal</option>
          <option value="SYC">Seychelles</option>
          <option value="SLE">Sierra Leone</option>
          <option value="SGP">Singapore</option>
          <option value="SVK">Slovakia (Slovak Republic)</option>
          <option value="SVN">Slovenia</option>
          <option value="SLB">Solomon Islands</option>
          <option value="SOM">Somalia</option>
          <option value="ZAF">South Africa</option>
          <option value="SGS">South Georgia and the South Sandwich Islands</option>
          <option value="ESP">Spain</option>
          <option value="LKA">Sri Lanka</option>
          <option value="SHN">St.Helena</option>
          <option value="SPM">St. Pierre and Miquelon</option>
          <option value="SDN">Sudan</option>
          <option value="SUR">Suriname</option>
          <option value="SJM">Svalbard and Jan Mayen Islands</option>
          <option value="SWZ">Swaziland</option>
          <option value="SWE">Sweden</option>
          <option value="CHE">Switzerland</option>
          <option value="SYR">Syrian Arab Republic</option>
          <option value="TWN">Taiwan</option>
          <option value="TJK">Tajikistan</option>
          <option  value="TZA">Tanzania, United Republic of</option>
          <option value="THA">Thailand</option>
          <option value="TGO">Togo</option>
          <option value="TKL">Tokelau</option>
          <option value="TON">Tonga</option>
          <option value="TTO">Trinidad and Tobago</option>
          <option value="TUN">Tunisia</option>
          <option value="TUR">Turkey</option>
          <option value="TKM">Turkmenistan</option>
          <option value="TCA">Turks and Caicos Islands</option>
          <option value="TUV">Tuvalu</option>
          <option value="UGA">Uganda</option>
          <option value="UKR">Ukraine</option>
          <option value="ARE">United Arab Emirates</option>
          <option value="UMI">United States Minor Outlying Islands</option>
          <option value="URY">Uruguay</option>
          <option value="UZB">Uzbekistan</option>
          <option value="VUT">Vanuatu</option>
          <option value="VAT">Vatican City State (Holy See)</option>
          <option value="VEN">Venezuela</option>
          <option value="VNM">Viet Nam</option>
          <option value="VGB">Virgin Islands (British)</option>
          <option value="VIR">Virgin Islands (U.S.)</option>
          <option value="WLF">Wallisw and Futuna Islands</option>
          <option value="ESH">Western Sahara</option>
          <option value="YEM">Yeman</option>
          <option value="YUG">Yugoslavia</option>
          <option value="ZAR">Zaire</option>
          <option value="ZMB">Zambia</option>
          <option value="ZWE">Zimbabwe</option>
          <option value="UNK">Not Listed</option>
        </select></td>
        </tr>

      <tr>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td>
        <td height="10" align="left" valign="middle"> </td>
      </tr>
      <tr>
        <td height="35" align="left" valign="middle">&nbsp;</td>
        <td height="35" colspan="2" align="left" valign="top"> 
        <table width="250" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top" width="120"> <table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td  height="25" align="left" valign="top">
    
     <input id="fc_reset" class="btn_b" type="reset" name="fc_reset" tabindex="5" value="Reset Form" />
     </td>
     
  </tr>
</table> </td>
     
	 
    <td align="left" valign="top" width="120"> <table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    
    <td  height="25" align="left" valign="top"> <input type="submit" id="sub" name="submit" value="Submit"/> </td>
  </tr>
</table></td>
  </tr>
  </form>
</table>
</div>

  <?php include "footer.php"; ?>
<!--end of service_mn-->
</body>
</html>