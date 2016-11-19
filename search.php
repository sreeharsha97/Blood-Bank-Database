<?php
include_once 'HeadPage.php';
$page = '2';
?>
<link href="css/w3.css" rel="stylesheet" type="text/css"/>
<body>
 <?php
include_once 'HeaderPage.php';

?>   


<script type="text/javascript">
function DB_Search()
{
	
	var bgroup=document.getElementById("rldrop").value;
        var city=document.getElementById("inputField").value;

if (bgroup=="null")
{
	alert("Please select a blood group");
	return false;
	
}else
{
	$.ajax({
       type: "POST",
       async:false,
       url: 'Q_Search.php',
      
       data: {
            Q_bgroup: bgroup,
            Q_city: city
       },
       error: function(x, e) {
           
       },
       success: function (response) {
         //alert(response)
        
        if (response=="No Records")
        {
            document.getElementById("SearchTable_div").style.display="none";
            document.getElementById("Nodocuments").style.display="";
        }else
        {
           document.getElementById("Nodocuments").style.display="none";
           document.getElementById("SearchTable_div").style.display=""  ; 
           document.getElementById("SearchTable_div").innerHTML=response;
        }
        
        
        
        
	   }
	   });
	
	


}
}


</script>

    <div class="w3-container w3-center w3-padding-128">
        
        <form class="w3-container w3-card-4 w3-padding-16" action="#" method="post" name="searchform" id="searchform">
            <div class="w3-row-padding">
                <div class="w3-third">
                    <select class="w3-select w3-padding-16 w3-large w3-border-0 w3-text-lod" title="Select a Blood Group" name="rldrop" id="rldrop">
                        <option selected="selected" value="null">select a blood group</option>
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

                </div>
                <div class="w3-third">
                    <select class="w3-select w3-padding-16 w3-large w3-border-0 w3-text-lod" title="Select a City name" name="inputField" id="inputField">
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
                </div>
                <div class="w3-third">
                    <input type="button" onclick="DB_Search()" title="Click to search for donors of your selected blood group in the city requested" value="search for a donor" class="w3-btn w3-padding-16 w3-round w3-green" name="rlsearch" id="rlsearch">
                </div>
      




      </div>
			
			
			
			
        </form>

<br/><br/>		

<div id="Nodocuments" style="display: none">No records were found for the given search criteria</div>  
<div id= "SearchTable_div" style="display: none"></div>

                    
        
    </div>
	
	
	
	
	
	
     
  </div>
</div>
   
    
<?php
include_once 'FooterPage.php';

?>    
</body>

</html>