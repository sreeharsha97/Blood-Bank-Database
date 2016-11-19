<?php
include_once 'HeadPage.php';
$page = '2';
?>
<link href="css/w3.css" rel="stylesheet" type="text/css"/>
<body>
 <?php
include_once 'HeaderPage.php';

?>   

    <div class="w3-row-padding w3-padding-64">
            <div class="w3-content">
                <div class="w3-twothird">
                    <h3 class="w3-text-lod">Become a blood Donor - Register now !</h3>

                    <form class="w3-form w3-container w3-card-4" action="" id="regform" name="regform" method="post">         
                        
                        <div name="errbox" id="errbox" class="w3-container w3-section w3-round">
                            <span class="w3-text-red">     </span>
                        </div>
                                                    
                        <label class="w3-label w3-left-align w3-text-black" for="Name">Name:* </label>
                        <input required type="text" class="w3-input w3-text-lod" title="Please enter your name" placeholder="Please enter your name" id="Name" name="Name">
                        
                        <label class="w3-label w3-left-align w3-text-black" for="bloodgroup1">Blood group:*</label>
                        <select class="w3-select w3-text-lod" title="Select a Blood Group" name="bloodgroup1" id="bloodgroup1">
                            <option selected="selected" value="null">Select a blood group</option>
                            <option value="A+">A+ Blood Group</option>
                            <option value="O+">O+ Blood Group </option>
                            <option value="B+">B+ Blood Group</option>
                            <option value="AB+">AB+ Blood Group</option>
                            <option value="A-">A- Blood Group </option>
                            <option value="O-">O- Blood Group</option>
                            <option value="B-">B- Blood Group</option>
                            <option value="AB-">AB- Blood Group</option>
                            <option value="Oh">Oh Blood Group</option>
                        </select>
                        <label class="w3-label w3-left-align w3-text-black" for="street">
                            Street/Town:*
                        </label>
                        <input required type="text" class="w3-input w3-text-lod" title="Please enter your town name" placeholder="eg., M G Road" id="street" name="street">
                        <label class="w3-label w3-left-align w3-text-black" for="City">
                            State:*
                        </label>
                        
                        <select class="w3-select w3-text-lod" title="Select a City name" name="City" id="City">
                        <option value="andhrapradesh">Andhra Pradesh</option>
                        <option value="arunachalpradesh">Arunachal Pradesh</option>
                        <option value="assam">Assam</option>
                        <option value="bihar">Bihar</option>
                        <option value="chhattisgarh">Chhattisgarh</option>
                        <option value="goa">Goa</option>
                        <option value="gujarat">Gujarat</option>
                        <option value="haryana">Haryana</option>
                        <option value="himachalpradesh">Himachal Pradesh</option>
                        <option value="jammuandkashmir">Jammu and Kashmir</option>
                        <option value="jharkhand">Jharkhand</option>
                        <option value="karnataka">Karnataka</option>
                        <option value="kerala">Kerala</option>
                        <option value="madhyapradesh">Madhya Pradesh</option>
                        <option value="maharashtra">Maharashtra</option>
                        <option value="manipur">Manipur</option>
                        <option value="meghalaya">Meghalaya</option>
                        <option value="mizoram">Mizoram</option>
                        <option value="nagaland">Nagaland</option>
                        <option value="odisha">Odisha</option>
                        <option value="punjab">Punjab</option>
                        <option value="rajasthan">Rajasthan</option>
                        <option value="sikkim">Sikkim</option>
                        <option value="tamilnadu">TamilNadu</option>
                        <option value="telangana">Telangana</option>
                        <option value="tripura">Tripura</option>
                        <option value="uttarpradesh">Uttar Pradesh</option>
                        <option value="uttarakhand">Uttarakhand</option>
                        <option value="westbengal">West Bengal</option>
                        <option value="andamanandnicobarislands">Andaman and Nicobar Islands</option>
                        <option value="chandigarh">Chandigarh</option>
                        <option value="dadraandnagarhaveli">Dadra and Nagar Haveli</option>
                        <option value="damananddiu">Daman and Diu</option>
                        <option value="delhi">Delhi</option>
                        <option value="lakshadweep">Lakshadweep</option>
                        <option value="puducherry">Puducherry</option>
                        
                    </select>
<!--       
                        
<!--                        <input type="text" required class="w3-input w3-text-lod" title="Please enter your State name for eg., Tamilnadu" placeholder="eg., TamilNadu" id="City" name="City">-->
                        <label class="w3-label w3-left-align w3-text-black" for="hcontact">
                            Phone contact:*
                        </label>
                        <input type="text" required class="w3-input w3-text-lod" title="Please enter your Phone contact" placeholder="eg., 9900112345" id="hcontact" name="hcontact">
                        <label class="w3-label w3-left-align w3-text-black" for="Email">
                            Email:
                        </label>
                        <input type="text" class="w3-input w3-text-lod" title="Please enter a valid email id" placeholder="eg., name@example.com" id="Email" name="Email">
                        
                        
                        <label class="w3-label w3-left-align w3-text-black" for="lastdonated">
                            Last Donation:
                        </label>
                        <select class="w3-select w3-text-lod" title="Select when you gave your last blood donation date" name="lastdonated" id="lastdonated">
                            <option selected="selected" value="never">Never Donated</option>
                            <option value="morethan3m">More than 3 months</option>
                            <option value="lessthan3m">Less than 3 months</option>
                        </select>
                        
                        <input type="hidden" visible="false" value="notfb" id="forfb" name="forfb">
                        <br/><br/>
                        <input type="button" class="w3-btn w3-padding-16 w3-round w3-green" onclick="validate_listbox()" value="register" name="submit">
                    </form>
                    

                </div>

                <div class="w3-third w3-center">
                    <i class="fa fa-registered w3-padding-64 w3-text-red"></i>
                </div>
            </div>
        </div>
     
  </div>
</div>
   
    
<?php
include_once 'FooterPage.php';

?>    
</body>

</html>

