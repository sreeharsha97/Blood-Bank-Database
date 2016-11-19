<?php
include_once 'HeadPage.php';
$page = '2';
?>
<link href="css/w3.css" rel="stylesheet" type="text/css"/>
<body>
 <?php
include_once 'HeaderPage.php';

?>   

    <div class="w3-twothird">
                    <h3 class="w3-text-lod">Send Us Your Feedback</h3>                    
                        <form class="w3-form w3-container w3-card-4" action="/fb" name="fbform" id="fbform" method="post">
                            <div name="errbox" id="errbox" class="w3-container w3-section w3-round">
                                <span class="w3-text-red"></span>
                            </div>
                            
                            <label class="w3-label w3-left-align w3-text-black" for="Name">Name:* </label>
                            <input type="text" class="w3-input w3-text-lod" title="Please enter your name" placeholder="Enter your name" id="Name" name="Name">

                            <label class="w3-label w3-left-align w3-text-black" for="City">City:</label>
                            <input type="text" class="w3-input w3-text-lod" title="Please enter your city name" placeholder="eg., Bangalore" id="City" name="City">

                            <label class="w3-label w3-left-align w3-text-black" for="Email">Email:</label>
                            <input type="text" class="w3-input w3-text-lod" title="Please enter a valid email id" placeholder="eg., name@example.com" id="Email" name="Email">

                            <label class="w3-label w3-left-align w3-text-black" for="Message">Message:</label>
                            <textarea class="w3-text-lod w3-input" title="Please enter the message you wish to convey" id="Message" cols="20" rows="20" name="Message"></textarea>
                            <br/><br/>
                            <input type="submit" class="w3-btn w3-padding-16 w3-round w3-green" value="send your feedback" name="submit">

                        </form>                   

                </div>
     
  </div>
</div>
   
    
<?php
include_once 'FooterPage.php';

?>    
</body>

</html>

