<?php

$con=mysqli_connect('localhost','root','','armys');


function popular_product(){
  
  
global $con;
 $get_news="Select * from product where cat='extra' limit 0,3";
        $run_news=mysqli_query($con,$get_news);
        
        while($row_pro=mysqli_fetch_array($run_news)){
      $p_name=$row_pro['name'];
      $p_image=$row_pro['images'];
$p_price=$row_pro['price'];
$p_dealer=$row_pro['dealer'];


    
echo " <div class='col-md-3 m-wthree'>
                <div class='col-m'>
              
                    <img style='height:200px;width:250px;' src='images/$p_image' class='img-responsive' alt=''>
                   
                  </a>
                  <div class='mid-1'>
                    <div class='women'>
                      <h6><a href='single.html'>$p_name</a>(500 g)</h6>             
                    </div>
                    <div class='mid-2'>
                      <p ><em class='item_price'>$p_price INR</em></p><br>
                      <p ><em class='item_price'>Near By Dealer:- $p_dealer</em></p>
                        <div class='block'>
                        <div class='starbox small ghosting'> </div>
                      </div>
                      <div class='clearfix'></div>
                    </div>
                      <div class='add'>
                     

                       <a href='add  .php?id=$p_name'><button class='btn btn-danger my-  -btn my-  -b' data-id='13' data-name='Honey' data-summary='summary 13' data-price='6.00' data-quantity='1' data-image='images/of12.png'>   </button></a>
                       
                    </div>
                  </div>
                </div>
              </div>
              
        ";

    }
  }
    function popular_food(){
  
  
global $con;
 $get_news="Select * from product where cat='food' limit 0,3";
        $run_news=mysqli_query($con,$get_news);
        
        while($row_pro=mysqli_fetch_array($run_news)){
      $p_name=$row_pro['name'];
      $p_image=$row_pro['images'];
$p_price=$row_pro['price'];
$p_dealer=$row_pro['dealer'];


    
echo " <div class='col-md-3 m-wthree'>
                <div class='col-m'>
              
                    <img src='images/$p_image' class='img-responsive' alt=''>
                   
                  </a>
                  <div class='mid-1'>
                    <div class='women'>
                      <h6><a href='single.html'>$p_name</a>(500 g)</h6>             
                    </div>
                    <div class='mid-2'>
                      <p ><em class='item_price'>$p_price INR</em></p><br>
                      <p ><em class='item_price'>Near By Dealer:- $p_dealer</em></p>
                        <div class='block'>
                        <div class='starbox small ghosting'> </div>
                      </div>
                      <div class='clearfix'></div>
                    </div>
                      <div class='add'>
                     

                       <a href='add  .php?id=$p_name'><button class='btn btn-danger my-  -btn my-  -b' data-id='13' data-name='Honey' data-summary='summary 13' data-price='6.00' data-quantity='1' data-image='images/of12.png'>   </button></a>
                       
                    </div>
                  </div>
                </div>
              </div>
              
        ";

    }
  }

    function popular_medicine(){
  
  
global $con;
 $get_news="Select * from product where cat='medicine' limit 0,3";
        $run_news=mysqli_query($con,$get_news);
        
        while($row_pro=mysqli_fetch_array($run_news)){
      $p_name=$row_pro['name'];
      $p_image=$row_pro['images'];
$p_price=$row_pro['price'];
$p_dealer=$row_pro['dealer'];


    
echo " <div class='col-md-3 m-wthree'>
                <div class='col-m'>
              
                    <img src='images/$p_image' class='img-responsive' alt=''>
                   
                  </a>
                  <div class='mid-1'>
                    <div class='women'>
                      <h6><a href='single.html'>$p_name</a>(500 g)</h6>             
                    </div>
                    <div class='mid-2'>
                      <p ><em class='item_price'>$p_price INR</em></p><br>
                      <p ><em class='item_price'>Near By Dealer:- $p_dealer</em></p>
                        <div class='block'>
                        <div class='starbox small ghosting'> </div>
                      </div>
                      <div class='clearfix'></div>
                    </div>
                      <div class='add'>
                     

                       <a href='add  .php?id=$p_name'><button class='btn btn-danger my-  -btn my-  -b' data-id='13' data-name='Honey' data-summary='summary 13' data-price='6.00' data-quantity='1' data-image='images/of12.png'>   </button></a>
                       
                    </div>
                  </div>
                </div>
              </div>
              
        ";

    }
  }
function all_product(){
  
  
global $con;
 $get_news="Select * from product ";
        $run_news=mysqli_query($con,$get_news);
        
        while($row_pro=mysqli_fetch_array($run_news)){
      $p_name=$row_pro['name'];
      $p_image=$row_pro['images'];
$p_price=$row_pro['price'];
$p_dealer=$row_pro['dealer'];


    
echo " <div class='col-md-3 m-wthree'>
                <div class='col-m'>
              
                    <img src='images/$p_image' class='img-responsive' alt=''>
                   
                  </a>
                  <div class='mid-1'>
                    <div class='women'>
                      <h6><a href='single.html'>$p_name</a>(500 g)</h6>             
                    </div>
                    <div class='mid-2'>
                      <p ><em class='item_price'>$p_price INR</em></p><br>
                      <p ><em class='item_price'>Near By Dealer:- $p_dealer</em></p>
                        <div class='block'>
                        <div class='starbox small ghosting'> </div>
                      </div>
                      <div class='clearfix'></div>
                    </div>
                      <div class='add'>
                     

                       <a href='add  .php?id=$p_name'><button class='btn btn-danger my-  -btn my-  -b' data-id='13' data-name='Honey' data-summary='summary 13' data-price='6.00' data-quantity='1' data-image='images/of12.png'>   </button></a>
                       
                    </div>
                  </div>
                </div>
              </div>
              
        ";

    }
  }
  function search_product($sr){
  
  
global $con;
 $get_news="SELECT * FROM product
WHERE name LIKE '%$sr%';";
        $run_news=mysqli_query($con,$get_news);
        
        while($row_pro=mysqli_fetch_array($run_news)){
      $p_name=$row_pro['name'];
      $p_image=$row_pro['images'];
$p_price=$row_pro['price'];
$p_dealer=$row_pro['dealer'];


    
echo " <div class='col-md-3 m-wthree'>
                <div class='col-m'>
              
                    <img src='images/$p_image' class='img-responsive' alt=''>
                   
                  </a>
                  <div class='mid-1'>
                    <div class='women'>
                      <h6><a href='single.html'>$p_name</a>(500 g)</h6>             
                    </div>
                    <div class='mid-2'>
                      <p ><em class='item_price'>$p_price INR</em></p><br>
                      <p ><em class='item_price'>Near By Dealer:- $p_dealer</em></p>
                        <div class='block'>
                        <div class='starbox small ghosting'> </div>
                      </div>
                      <div class='clearfix'></div>
                    </div>
                      <div class='add'>
                     

                       <a href='add  .php?id=$p_name'><button class='btn btn-danger my-  -btn my-  -b' data-id='13' data-name='Honey' data-summary='summary 13' data-price='6.00' data-quantity='1' data-image='images/of12.png'>   </button></a>
                       
                    </div>
                  </div>
                </div>
              </div>
              
        ";

    }
  }
  function   _product(){
  
  
global $con;
 $get_news="SELECT * FROM account
WHERE   ='dal' ";
        $run_news=mysqli_query($con,$get_news);
        
        while($row_pro=mysqli_fetch_array($run_news)){
 

    
echo " 
              
        ";

    }
  }
?>
