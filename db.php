<?php

define("DBHOST","localhost"); 
define("DBNAME","dbpricing"); 
define("DBUSER","root"); 
define("DBPASS",""); 

$conn=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME) or die(mysqli_connect_error());


 $q="SELECT * FROM tblcode LIMIT 1";
 $res=mysqli_query($conn,$q);

 if(mysqli_num_rows($res)>0){
    while($rw=mysqli_fetch_assoc($res)){
        $getint=$rw['interest'];
        $getdp=$rw['dp'];
        $getmarkup=$rw['markup'];
        $getcode=$rw['codes'];

        $getInputCodes=strtoupper($_POST['newcode']);

    if(isset($_POST['newcode'])){

        //split the codes from database and split each letter and make equivalent number value, 
        //example: in database stored codes "HIWAYSTORE" -> this is equivalent to "1234567890"
        $dbcodes = str_split($getcode);
        
        
        $getNewSrp=0;
        if(!empty(trim($getInputCodes)) && (int)strlen($getInputCodes)>=2){
           
            $getinputThenSplitToArray=str_split($getInputCodes);
            
            $getSrp="";
            foreach($getinputThenSplitToArray as $splitcode){
                // echo $output."<br>";
                $a=$dbcodes;
                //search in array
                $new_a=array_search($splitcode,$a);
                $getSrp .=$new_a;
            }
            //echo $getSrp." ----";
            
            //get SRP
            $newSRP=(int)$getSrp * ((int)$getmarkup/100);
            $newSRP=$newSRP+ (int)$getSrp;
            $getNewSrp=$newSRP;

            //get Downpayment
            $dp=(int)$newSRP * ((int)$getdp/100);
            
            //get monthly, 3mos
            $threemos=ceil((((($newSRP - (float)$dp) * ((int)$getint/100)) * 3) + ($newSRP - (float)$dp)) / 3);
            
            //get monthly, 6mos
            $sixmos=ceil((((($newSRP - (float)$dp) * ((int)$getint/100)) * 6) + ($newSRP - (float)$dp)) / 6);
            
            //get monthly, 10
            $tenmos=ceil((((($newSRP - (float)$dp) * ((int)$getint/100)) * 10) + ($newSRP - (float)$dp)) / 10);
            
           //get monthly, 12
           $oneyear=ceil((((($newSRP - (float)$dp) * ((int)$getint/100)) * 12) + ($newSRP - (float)$dp)) / 12);
            
        
        
?> 
    
    <div>
        <label class="lbltitle" for="">SRP</label>
        <label for="" class="lblvalue" id="srp"><?= number_format($getNewSrp, 0, '.', ' '); ?></label>
       
    </div>
    <div>
        <label class="lbltitle" for="">Down payment</label>
        <label for="" class="lblvalue"><?= number_format($dp, 0, '.', ' '); ?></label>
    </div>
    <div>
        <label class="lbltitle" for="">3 months</label>
        <label for="" class="lblvalue"><?= number_format($threemos, 0, '.', ' ').'<span class="permos">/mo</span>'; ?></label>
    </div>
    <div>
        <label class="lbltitle" for="">6 months</label>
        <label for="" class="lblvalue"><?= number_format($sixmos, 0, '.', ' ').'<span class="permos">/mo</span>'; ?></label>
    </div>
    <div>
        <label class="lbltitle" for="">10 months</label>
        <label for="" class="lblvalue"><?= number_format($tenmos, 0, '.', ' ').'<span class="permos">/mo</span>'; ?></label>
    </div>
    <div>
        <label class="lbltitle" for="">1 year</label>
        <label  for="" class="lblvalue"><?= number_format($oneyear, 0, '.', ' ').'<span class="permos">/mo</span>'; ?></label>
    </div>    
<?php
        }else{
?>
                <div>
                    <label class="lbltitle" for="">SRP</label>
                    <label for="" class="lblvalue" id="srp">0</label>
                </div>
                <div>
                    <label class="lbltitle" for="">Down payment</label>
                    <label for="" class="lblvalue">0</label>
                </div>
                <div>
                    <label class="lbltitle" for="">3 months</label>
                    <label for="" class="lblvalue">0</label>
                </div>
                <div>
                    <label class="lbltitle" for="">6 months</label>
                    <label for="" class="lblvalue">0</label>
                </div>
                <div>
                    <label class="lbltitle" for="">10 months</label>
                    <label for="" class="lblvalue">0</label>
                </div>
                <div>
                    <label class="lbltitle" for="">1 year</label>
                    <label  for="" class="lblvalue">0</label>
                </div>   
<?php
        }
    }
 }
}