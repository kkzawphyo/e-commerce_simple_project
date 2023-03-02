<?php 
        $category = $productCategory;
        $currentPageNumber=$currentPage;
     
        $PageNumber=0;
        $totalRows=0;
        $limit=12;
        require_once("dbstuff.inc");
        $searchQuery="";
        $cnx = mysqli_connect($host,$user,$password,$dbname) or die("Couldn't connect to server");
        //check if category is value=All
        if($category==0){
            if(trim($keyWord) == ""){
            $searchQuery = "SELECT * FROM product WHERE pendingStatus='True' and typeId=3";
        }
        else{
            trim($keyWord);
            //take total rows for pagination
            $searchQuery = "SELECT * FROM product WHERE pendingStatus='True' and typeId=3 and productName LIKE '%$keyWord%' ";
            
         }
        }
        //check if cateogry is value!=All
        else {
            if(trim($keyWord)== ""){
                
            $searchQuery = "SELECT * FROM product WHERE pendingStatus='True' and typeId=3 and mainId=$category ";
        }
        else{
            trim($keyWord);
            //take total rows for pagination
            $searchQuery = "SELECT * FROM product WHERE pendingStatus='True' and typeId=3 and mainId=$category and productName LIKE '%$keyWord%' ";
            
         }
        }
        


        
        $totalRowsResult = mysqli_query($cnx,$searchQuery) or die("Query not successful!");
        $totalRows = mysqli_num_rows($totalRowsResult);

        if($totalRows !=0 ){
        //take total number of possible pages
        $PageNumber = ceil($totalRows/$limit);
        $start  = ($currentPageNumber-1) *$limit;
        $currentPageQuery="";
        if(trim($keyWord)!= ""){
               if($category==0){
            $currentPageQuery = "SELECT * FROM product WHERE pendingStatus='True' and typeId=3 and productName LIKE '%$keyWord%' limit $start,$limit";
        }
        else{
              $currentPageQuery = "SELECT * FROM product WHERE pendingStatus='True' and typeId=3 and mainId=$category and productName LIKE '%$keyWord%' limit $start,$limit";
        }
        }
        else{
            if($category==0){
            $currentPageQuery = "SELECT * FROM product WHERE pendingStatus='True' and typeId=3 limit $start,$limit";
        }
        else{
              $currentPageQuery = "SELECT * FROM product WHERE pendingStatus='True' and typeId=3 and mainId=$category limit $start,$limit";
        }
        }
     
        $currentPageResult = mysqli_query($cnx,$currentPageQuery) or die ("currentPageQuery not successful!");





        $count=1;
        echo "
        <div class='content_top'>
            <div class='heading'>
            <h3>Rent Products</h3>
            </div>
            <div class='clear'></div>
        </div>
        <div class='section group'>";
        while($row=mysqli_fetch_assoc($currentPageResult)){

            extract($row);
            $url = $photo;
            $formatPrice = number_format($productPrice,0);
            echo "<div class='grid_1_of_4 images_1_of_4'>
                    <div id='myDiv'>
                     <a href='ProductDetails_RentService.php?cid=$cId&pid=$productId'>
                        <img src='$url' alt='$productName' /></a></div>
                    
                    <div class='price-details'>
                       <div class='price-number'>
                             <h2>$productName </h2>
                            <p><span class='rupees'>MMK $formatPrice</span></p>
                            
                        </div>
                                
                             <div class='clear'></div>
                    </div>
                     
                </div>";
                if($count%4==0){
                echo "</div><div class='section group'>";
            }
        
            $count++;
        }
        echo "</div>";
    // START OF PAGINATION! 
        echo "<center><ul class='pagination'>";
        //implementation of preivous 
        if($currentPageNumber>1){
            $temp = $currentPageNumber-1;
            echo "<li><a href=\"Rent Service.php?currentPage=$temp&keyWord=$keyWord&category=$category\"> << Previous </a></li>";

        }
        //end of implementation of previous

        //start of page number implementation
        $flag=1;
       
        while($flag<=$PageNumber){
            if($flag==$currentPageNumber){
                
                echo "<li class=\"active\" ><a href=\"Rent Service.php?currentPage=$flag&keyWord=$keyWord&category=$category\"><font color='red'>$flag</font></a></li>";
            }
            else{
                
                echo "<li><a href=\"Rent Service.php?currentPage=$flag&keyWord=$keyWord&category=$category\"> $flag </a></li>";
            }
        $flag++;
        }
        //end of page number implementation

        //start of implementation of next
        if($currentPageNumber<$PageNumber){
            $temp=$currentPageNumber+1;
            echo "<li><a href=\"Rent Service.php?currentPage=$temp&keyWord=$keyWord&category=$category\">Next >></a></li>";

        }
        //end of implementation of next




        echo "</ul></center>";

        echo"   
            <div class='clear'></div>
        ";
    //END OF PAGINATION
    }
    else{

            echo "
        <div class='content_top'>
            <div class='heading'>
            <h3>Rent Products</h3>
            </div>
            
            <div class='clear'></div>
        </div>

        <div class='content_top' id='no_result'>
            <div class='no_result' id='no_result_heading'>
                <center><img src='images/no_result.jpg'/></center>
            </div>
            
                
            </div>
            <div class='clear'></div>
        </div>
        ";

    }
 ?>