
<?php
session_start();
require 'conn.php';

if(!isset($_SESSION['uname']))
{
    header('Location: index.php');
}

if(!($_SESSION['role'] == 'freelancer'))
{
    header('Location: index.php');
}

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jobs-Recruitment-Job Search</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link
      rel="shortcut icon"
      href="https://th.bing.com/th/id/OIP.EFHLSBWnwHKJdDxCI913vAAAAA?w=143&h=150&c=7&r=0&o=5&dpr=1.3&pid=1.7"
      type="image/x-icon"
    />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
    <link rel="stylesheet" href="/Naya tropical/Landing Page by Nandlal/homep.css" />
    <link rel="stylesheet" href="/Naya tropical/navbar/t_navbar.css">
  </head>
  <body>
<!-- <a href="/servieces.html/servieces.html"></a> -->
<div id="navibarr">
    <!-- Navbar to be appended here  -->
</div>


    <div id="mainhi">
      <h1>Find your dream job now</h1>
      <p class="jaab">5 lakh+jobs for you to explore</p>
    </div>

    <div id="suggestionhaiya">
      <img
        src="https://static.naukimg.com/s/7/103/i/search.9ec0e1ac.svg"
        class="searchIc"
      />

      <div id="pehla">
        <input
          class="suggestor-input"
          type="text"
          placeholder="Enter skills / designations / companies"
          tabindex="0"
          value=""
          id="skills"
        />
      </div>
      <div class="pipehi"></div>
      <div id="dusrah">
        <select id="Experie">
          <option value="" placeholder="select Experience">
            Select Experience
          </option>
          <option value="">Fresher(less than 1 year)</option>
          <option value="1 year">1 year</option>
          <option value="2 year">2 year</option>
          <option value="3 year">3 year</option>
          <option value="4 year">4 year</option>
          <option value="5 year">5 year</option>
          <option value="6 year">6 year</option>
          <option value="7 year">7 year</option>
          <option value="8 year">8 year</option>
          <option value="9 year">9 year</option>
          <option value="10 year">10 year</option>
          <option value="11 year">11 year</option>
          <option value="12 year">12 year</option>
          <option value="13 year">13 year</option>
          <option value="14 year">14 year</option>
          <option value="15 year">15 year</option>
        </select>
      </div>
      <div class="pipehi"></div>
      <div id="teesta">
        <input
          class="suggestokr-input"
          type="text"
          placeholder="Enter location"
          tabindex="0"
          value=""
          id="locat"
        />
      </div>
      <div class="fourthh">
        <button id="qsbSubmit">Search</button>
      </div>
    </div>
<!-- <a href="../java.html"></a> -->
    <div id="conta">
        <img src="/Naya tropical/Landing Page by Nandlal/webcap.jpeg" alt="">
    </div>
<h2>Trending on Naukri Today</h2>
<!------------------ first slider is here ------------------->
<div class="Firsuuiut slider">
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/remote.svg" alt="">
        <p>Remote ></p>
        <p>5.4K+ jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/mnc.svg" alt="">
        <p>MNC ></p>
        <p>60.4K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/finance.svg" alt="">
        <p>Banking & Fin... ></p>
        <p>4.5K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/analytics.svg" alt="">
        <p>Analytics ></p>
        <p>9.5K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/marketing.svg" alt="">
        <p>Marketing ></p>
        <p>2.3K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/fortune-500.svg" alt="">
        <p>Fortune 500 ></p>
        <p>16K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/engineering.svg" alt="">
        <p>Engineering ></p>
        <p>2.2K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/data-science.svg" alt="">
        <p>Data Science ></p>
        <p>2.2K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/temporary-wfh.svg" alt="">
        <p>Temp WFH</p>
        <p>9.3K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/startup.svg" alt="">
        <p>Startup ></p>
        <p>6.3K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/supplychain.svg" alt="">
        <p>Supply Chain ></p>
        <p>1.2K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/software.svg" alt="">
        <p>Software & IT ></p>
        <p>24.3K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/hr.svg" alt="">
        <p>HR ></p>
        <p>3.8K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/project-management.svg" alt="">
        <p>Project-Mgmt ></p>
        <p>1.2K+jobs</p>
    </div>
    <div class="ROkau">
        <img src="https://static.naukimg.com/s/0/0/i/trending-naukri/freshers.svg" alt="">
        <p>Fresher ></p>
        <p>54.4K+jobs</p>
    </div>
</div>

<h2>Explore top companies hiring now</h2>



<!------------------------------- copied curousel ---------------------- -->

    <div class="items_hai">
    <div class="Rokau2">
        <p>MNCs ></p>
        <p>1.2K+ are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/36136.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/2114.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1186200.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/521230.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Fortune 500 ></p>
        <p>82 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/29798.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/20302.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/8886.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/228864.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Unicorns ></p>
        <p>84 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1205138.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/2519816.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/509622.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/555816.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Startups ></p>
        <p>197 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1285014.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1302864.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/2444130.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1194340.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>B2C ></p>
        <p>893 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/276124.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/2519816.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/869714.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1422.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Internet ></p>
        <p>126 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1194340.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1605088.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1205138.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/558162.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Product ></p>
        <p>600 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/4614807.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/44664.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/36136.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/4611495.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Edtech ></p>
        <p>143 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/960842.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/4614807.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/4638851.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/3204490.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Fintech ></p>
        <p>95 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/4618569.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/3714874.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/4576817.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/148890.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Banking and Finance ></p>
        <p>144 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/3411776.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/132460.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/747152.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/2049866.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Healthcare ></p>
        <p>115 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/241236.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1253476.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/3248522.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/434716.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>Manufacturing ></p>
        <p>163 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/2500.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/7982.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/20302.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/395896.gif" alt="">
            </div>
        </div>
    </div>
    <div class="Rokau2">
        <p>FMCG & Retail ></p>
        <p>31 are actively hiring</p>
        <div class="image_wlah">
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/1293920.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/289380.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/3867866.gif" alt="">
            </div>
            <div>
                <img src="https://img.naukimg.com/logo_images/groups/v1/297496.gif" alt="">
            </div>
        </div>
    </div>
</div>

</div>

<h2>Featured companies actively hiring</h2>






<div class="thirdhai slider">
    <div class="ROkau3rdhhai">
       <div class="photohia">
        <img src="https://img.naukimg.com/logo_images/groups/v2/4264.gif" alt="">
       </div>
        <p>WNS Global Services</p>      
        <p>3.7|6.7K+reviews</p>      
        <p>Leading business process
management company</p>      
       <button class="jobsbtn">View jobs</button>     
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/2436002.gif" alt="">
           </div>
            
            <p>Xoriant</p>      
            <p>4.4|936reviews</p>      
            <p>Software development & technologu services firm.</p>      
            <button class="jobsbtn">View jobs</button>    
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/1288.gif" alt="">
           </div>
            
            <p>Capgemini</p>      
            <p>3.9|22.7K+reviews</p>      
            <p>Global leader in technology services</p>      
            <button class="jobsbtn">View jobs</button>  
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/21746.gif" alt="">
           </div>
            
            <p>FIS</p>      
            <p>4.1|3.4K+reviews</p>      
            <p>FIS is hiring 3 to 10yrs exp.in C++ & Mumps developer</p>      
            <button class="jobsbtn">View jobs</button>   
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/3835862.gif" alt="">
           </div>
            
            <p>Persistent</p>      
            <p>4.2|1.5LK+reviews</p>      
            <p>Trusted global solutions company</p>      
            <button class="jobsbtn">View jobs</button>    
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/44512.gif" alt="">
           </div>
            
            <p>ICICI Bank</p>      
            <p>4.0|33.4K+reviews</p>      
            <p>Leading private sector bank in India</p>      
            <button class="jobsbtn">View jobs</button>    
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/4582763.gif" alt="">
           </div>
            
            <p>Biz2Credit</p>      
            <p>4.3|165 reviews</p>      
            <p>Leading the #FinTech Revolution</p>      
            <button class="jobsbtn">View jobs</button>   
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/2483944.gif" alt="">
           </div>
            
            <p>R1 RCM</p>      
            <p>4.0|1.5K+reviews</p>      
            <p>Leading provider of tech driven solutions</p>      
            <button class="jobsbtn">View jobs</button>    
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/1574056.gif" alt="">
           </div>
            
            <p>Applied Materials</p>      
            <p>4.3|198 reviews</p>      
            <p>Leading in materials engineering solutions</p>      
            <button class="jobsbtn">View jobs</button>   
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/42932.gif" alt="">
           </div>
            
            <p>Genpact</p>      
            <p>4.0|20K+reviews</p>      
            <p>Global professional services firm</p>      
            <button class="jobsbtn">View jobs</button>  
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/4577755.gif" alt="">
           </div>
            
            <p>Accolite Digital</p>      
            <p>4.0|280 reviews</p>      
            <p>Digital transformation services provider</p>      
            <button class="jobsbtn">View jobs</button>    
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/1574056.gif" alt="">
           </div>
            
           <p>Applied Materials</p>      
           <p>4.3|198 reviews</p>      
           <p>Leading in materials engineering solutions</p>       
            <button class="jobsbtn">View jobs</button>  
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/2483944.gif" alt="">
           </div>
            
           <p>R1 RCM</p>      
            <p>4.0|1.5K+reviews</p>      
            <p>Leading provider of tech driven solutions</p>    
            <button class="jobsbtn">View jobs</button>  
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/42932.gif" alt="">
           </div>
            
           <p>Genpact</p>      
           <p>4.0|20K+reviews</p>      
           <p>Global professional services firm</p>       
            <button class="jobsbtn">View jobs</button>  
    </div>
    <div class="ROkau3rdhhai">
        <div class="photohia">
            <img src="https://img.naukimg.com/logo_images/groups/v2/4654342.gif" alt="">
           </div>
            
            <p>Cbts</p>      
            <p>4.4| 30 reviews</p>      
            <p>Leading technology provider</p>      
            <button class="jobsbtn">View jobs</button>  
    </div>
</div>

<button class="seeaya"><a href="https://www.naukri.com/allcompanies?searchType=premiumLogo&title=Featured+companies+actively+hiring&branding=%257B%2522pagename%2522%253A%2522ni-desktop-premium-viewAll%2522%257D&pageNo=1&qcount=47">View all companies</a></button>



<div id="Discovryy">
<div id="pinkyyy">
    <img src="https://static.naukimg.com/s/0/0/i/role-collection.png" alt="">
    <p>Discover jobs across popular roles</p>
    <p>Select a role and we'll show you relevant jobs for it</p>
</div>





<div class="gridwlaslider">

    <div class="rokau4">
        <div class="rokau4andr">
            <p>Product Manager</p>
            <p>2.8K+Jobs ></p>
        </div>
        <div class="rokau4andr">
            <p>Research Analyst</p>
            <p>286 Jobs ></p>
        </div>
        <div class="rokau4andr">
            <p>Functional Consultant</p>
            <p>3.7K+Jobs ></p>
        </div>
       
    </div>
    <div class="rokau4">
        <div class="rokau4andr">
            <p>UI/ UX Designer</p>
            <p>867 Jobs ></p>
        </div>
        <div class="rokau4andr">
            <p>Branch Manager</p>
            <p>858 Jobs ></p>
        </div>
        <div class="rokau4andr">
            <p>Chartered Accoun..</p>
            <p>1.5K+Jobs ></p>
        </div>
        
    </div> 
     <div class="rokau4">
        <div class="rokau4andr">
            <p>Full Stack Developer</p>
            <p>24.2K+Jobs ></p>
        </div>
        <div class="rokau4andr">
            <p>Front End Developer</p>
            <p>3K+Jobs ></p>
        </div>
        <div class="rokau4andr">
            <p>Engineering Manager</p>
            <p>1.5K+Jobs ></p>
        </div>
      
    </div>


    <div class="rokau4">
        <div class="rokau4andr">
            <p>App Developer</p>
            <p>2.2K+Jobs</p>
        </div>
        <div class="rokau4andr">
            <p>DevOps Engineer</p>
            <p>1.7K+Jobs ></p>
        </div>
        <div class="rokau4andr">
            <p>Technical Lead</p>
            <p>14.4K+Jobs</p>
        </div>
       
    </div>
    <div class="rokau4">
        <div class="rokau4andr">
            <p>Automa.Test Engi..</p>
            <p>2.1K+Jobs</p>
        </div>
        <div class="rokau4andr">
            <p>Technical Architect</p>
            <p>8.4K+Jobs</p>
        </div>
        <div class="rokau4andr">
            <p>Data Scientist</p>
            <p>794 Jobs</p>
        </div>
       
    </div>
    <div class="rokau4">
        <div class="rokau4andr">
            <p>Cyber Security</p>
            <p>430 Jobs</p>
        </div>
        <div class="rokau4andr">
            <p>Business Analyst</p>
            <p>5.6K+Jobs</p>
        </div>
        <div class="rokau4andr">
            <p>Program Manager -T..</p>
            <p>881Jobs></p>
        </div>
       
    </div>

</div>





<div id="righpinkk"></div>
</div>

<h2>Sponsored Company</h2>
<div id="sponsered">
    <button class="saare">All</button>
    <button class="sponserdbtn">IT Services</button>
    <button class="sponserdbtn">Technology</button>
    <button class="sponserdbtn">Manufacturing & Production</button>
    <button class="sponserdbtn">Healthcare & Life Sciences</button>
    <button class="sponserdbtn">BFSI</button><p>+3more</p>
</div>



<!------------F----------------- grid slider to be done here ------------------------ -->

<div class="slidergridwala">
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/6403387.gif" alt="">
            </div>
            <h4>NIELSENIQ INDIA ></h4>
            <p>4.1| 155 reviews</p></p>
            <div class="chotapara">
                IT Services & Consulting
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/993452.gif" alt="">
            </div>
            <h4>Brillio ></h4>
            <p>3.7| 391 reviews</p>
            <div class="chotapara">
                Foreign MNC
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/1402790.gif" alt="">
            </div>
            <h4>CGI ></h4>
            <p>4.2| 1.9K+reviews</p>
            <div class="chotapara">
                Forbes Global 2000
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/36368.gif" alt="">
            </div>
            <h4>Merino Group ></h4>
            <p>3.8| 573 reviews</p>
            <div class="chotapara">
               Furniture & Furnishing 
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/3889408.gif" alt="">
            </div>
            <h4>Chemplast Sanmar ></h4>
            <p>3.9|254 reviews</p>
            <div class="chotapara">
                Manufacturing
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/4597455.gif" alt="">
            </div>
            <h4>Gadgeon Smart S..></h4>
            <p>4.4| 22 reviews</p>
            <div class="chotapara">
               Foreign MNC 
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/4770599.gif" alt="">
            </div>
            <h4>Whirlpool ></h4>
            <p>4.3| 1.2K+reviews</p>
            <div class="chotapara">
              Consumer Electronics & Appl..  
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/27458.gif" alt="">
            </div>
            <h4>Bureau Veritas ></h4>
            <p>4.0| 1.1K+reviews</p>
            <div class="chotapara">
                Consumer goods
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/246024.gif" alt="">
            </div>
            <h4>Tata Technologies ></h4>
            <p>3.5| 1.3K+reviews</p>
            <div class="chotapara">
                IT Services & Consulting
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/4622367.gif" alt="">
            </div>
            <h4>Rain Industries</h4>
            <p>4.0| 48 reviews</p>
            <div class="chotapara">
                Chemicals
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/4682615.gif" alt="">
            </div>
            <h4>P H Diagonistic Ce..</h4>
            <p>3.4| 27 reviews</p>
            <div class="chotapara">
               Medical Services/Hospital 
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/4622367.gif" alt="">
            </div>
            <h4>Rain Industries</h4>
            <p>4.0| 48 reviews</p>
            <div class="chotapara">
                Corporate
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/4682615.gif" alt="">
            </div>
            <h4>P H Diagonistic Ce..</h4>
            <p>3.4| 27 reviews</p>
            <div class="chotapara">
              Private
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/6640601.gif" alt="">
            </div>
            <h4>Maknet ></h4>
            <div class="chotapara">
                Internet
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/347394.gif" alt="">
            </div>
            <h4>Apco Infratech</h4>
            <p>3.9| 599 reviews</p>
            <div class="chotapara">
              Engineering & Construction  
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/4656921.gif" alt="">
            </div>
            <h4>NICE ></h4>
            <p>4.0| 255 reviews</p>
            <div class="chotapara">
               Software Product 
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/134834.gif" alt="">
            </div>
            <h4>Synchrony</h4>
            <p>4.4|727 reviews</p>
            
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/49980.gif" alt="">
            </div>
            <h4>Encora ></h4>
            <p>4.1|143 reviews</p>
            <div class="chotapara">
               B2B 
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/315118.gif" alt="">
            </div>
            <h4>Datamatics Global..></h4>
            <p>3.6|1.6K+reviews</p>
            <div class="chotapara">
                IT Services & Consulting
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/233334.gif" alt="">
            </div>
            <h4>Coforge ></h4>
            <p>3.8| 871 reviews</p>
            <div class="chotapara">
               Indian MNC 
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/1699912.gif" alt="">
            </div>
            <h4>SS&C ></h4>
            <p>3.8|1K+reviews</p>
            <div class="chotapara">
                FinTech/Payments
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/49980.gif" alt="">
            </div>
            <h4>Encora ></h4>
            <p>4.1|143 reviews</p>
            <div class="chotapara">
               B2B 
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/315118.gif" alt="">
            </div>
            <h4>Datamatics Global..></h4>
            <p>3.6|1.6K+reviews</p>
            <div class="chotapara">
                IT Services & Consulting
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/233334.gif" alt="">
            </div>
            <h4>Coforge ></h4>
            <p>3.8| 871 reviews</p>
            <div class="chotapara">
               Indian MNC 
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/1699912.gif" alt="">
            </div>
            <h4>SS&C ></h4>
            <p>3.8|1K+reviews</p>
            <div class="chotapara">
                FinTech/Payments
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/4314258.gif" alt="">
            </div>
            <h4>Edelman Financial..></h4>
            <p></p>
            <div class="chotapara">
                NBFC
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/949664.gif" alt="">
            </div>
            <h4>KPIT ></h4>
            <p>3.5|1.7K+reviews</p>
            <div class="chotapara">
               Software Product 
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/5405750.gif" alt="">
            </div>
            <h4>EC Council ></h4>
            <p>4.1| 22 reviews</p>
            <div class="chotapara">
               IT Services & Consulting 
            </div>
        </div>
    </div>
    <div class="Rokaugridwala">
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/548100.gif" alt="">
            </div>
            <h4>Broadridge</h4>
            <p>4.0|737 reviews</p>
            <div class="chotapara">
               Financial Services 
            </div>
        </div>
        <div class="twoboxes">
            <div class="chotaimage">
                <img src="https://img.naukimg.com/logo_images/groups/v1/4612691.gif" alt="">
            </div>
            <h4>MOURI Tech ></h4>
            <p>4.0|240 reviews</p>
            <div class="chotapara">
               Services 
            </div>
        </div>
    </div>

</div>









<button class="seeyagridka"><a href="https://www.naukri.com/allcompanies?searchType=premiumLogo&title=Featured+companies+actively+hiring&branding=%257B%2522pagename%2522%253A%2522ni-desktop-premium-viewAll%2522%257D&pageNo=1&qcount=47">View all companies</a></button>


<div id="appendhaiimageprep">
    <img src="/Naya tropical/Landing Page by Nandlal/Prepartion image.jpeg" alt="">
</div>

<div id="appendhaiimagepremiumki">
    <img src="/Naya tropical/Landing Page by Nandlal/Premium.jpeg" alt="">
</div>


<div id="growcarrier">
    <!-- grow carrier div to be appended her -->
<div class="carrerstartimage">
    <div class="byline">by Naukri Learning</div>
<h4 class="headinghai">
    Grow your career through learning
</h4>
    <div class="imagehaicarrerwala">
        <img src="https://static.naukimg.com/s/0/0/i/learn-icon.svg" alt="">
    </div>
</div>
<div class="carrerslider">
    <div class="rokaucareerwala">
        <p>Data Science</p>
        <p>Artificial Intelligence</p>
        <p>Learn in demamd AI skills like Deep learning,NLP,Computer vision and more for career growth across different roles </p>
        <div class="twoboxwaladiv">
            <div>600 courses</div>
            <div>28 providers</div>
        </div>
    </div>
    <div class="rokaucareerwala">
        <p>Cloud Technologies</p>
        <p>AWS</p>
        <p>Get certified for high demand cloud computing skills for Cloud Practitioner,Architect,Developer,and Operations roles</p>
        <div class="twoboxwaladiv">
            <div>800 courses</div>
            <div>16 providers</div>
        </div>
    </div>
    <div class="rokaucareerwala">
        <p>Programming</p>
        <p>Data Structures & Algorithms</p>
        <p>Master DS and Algorithms for entry level engineering roles in product companies and for programming</p>
        <div class="twoboxwaladiv">
            <div>800 courses</div>
            <div>13 providers</div>
        </div>
    </div>
    <div class="rokaucareerwala">
        <p>Programming</p>
        <p>Data Structures & Algorithms</p>
        <p>Master DS and Algorithms for entry level engineering roles in product companies and for programming                                                                  </p>
        <div class="twoboxwaladiv">
            <div>800 courses</div>
            <div>13 providers</div>
        </div>
    </div>
    <div class="rokaucareerwala">
        <p>Management</p>
        <p>Strategy and Leadership</p>
        <p>Learn to lead and thrive in a world of increasing uncertainity and volatility- get certified from top universities</p>
        <div class="twoboxwaladiv">
            <div>500 courses</div>
            <div>70 providers</div>
        </div>
    </div>
    <div class="rokaucareerwala">
        <p>Management</p>
        <p>Digital Marketing</p>
        <p>A fast growing field with opportunities in PPC, SEO,Email marketing,Marketing analytics,Content marketing and more</p>
        <div class="twoboxwaladiv">
            <div>700 courses</div>
            <div>25 providers</div>
        </div>
    </div>
    <div class="rokaucareerwala">
        <p>Management</p>
        <p>Business Analytics</p>
        <p>Improve your business decision making with dashboards,real-time analytics,scenario analysis,and reporting skills</p>
        <div class="twoboxwaladiv">
            <div>500 courses</div>
            <div>42 providers</div>
        </div>
    </div>
</div>







</div>

<div id="standOut">
    <img src="/Naya tropical/Landing Page by Nandlal/Users.jpeg" alt="">
</div>




<div id="footka">
<div id="footkakaiandr">
<div class="websitewla">
    <img src="https://static.naukimg.com/s/4/100/i/naukri_Logo.png" alt="">
    <p>Connect with us</p>
    <div class="chotiimags">
        <div>
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/facebook.svg" alt="">
        </div>
        <div>
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/instagram.svg" alt="">
        </div>
        <div>
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/twitter.svg" alt="">
        </div>
        <div>
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/linkedin.svg" alt="">
        </div>
    </div>
</div>
<div class="aboutwala">
    <p>About us</p>
    <p>Careers</p>
    <p>Employer home</p>
    <p>Sitemap</p>
</div>
<div class="aboutwala">
    <p>Help center</p>
    <p>Summons/Notices</p>
    <p>Grievances</p>
    <p>Report issue</p>
</div>
<div class="aboutwala">
    <p>Privacy policy</p>
    <p>Terms & conditions</p>
    <p>Fraud alert</p>
    <p>Trust & safety</p>
</div>
<div class="get_on_google">
    <p>Apply on the go</p>
<p>Get real time job updates on our App</p>
<div class="imagesog_getit">
    <div>
        <img src="https://static.naukimg.com/s/0/0/i/new-homepage/android-app.png" alt="">
    </div>
    <div>
        <img src="https://static.naukimg.com/s/0/0/i/new-homepage/ios-app.png" alt="">
    </div>
    
   
</div>
</div>
</div>
</div>





<div id="end_ka_div">
    <div class="picchipka">
        <img src="/Naya tropical/Landing Page by Nandlal/Last wli pic.jpeg" alt="">
    </div>
    
    <div class="autowla">
        <div class="rokaulast">
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/footer-logos/shiksha.png" alt="">
        </div>
        <div class="rokaulast">
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/footer-logos/iimjobs.png" alt="">
        </div>
        <div class="rokaulast">
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/footer-logos/hirist.png" alt="">
        </div>
        <div class="rokaulast">
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/footer-logos/jobhai.png" alt="">
        </div>
        <div class="rokaulast">
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/footer-logos/nnacres.png" alt="">
        </div>

        <div class="rokaulast">
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/footer-logos/firstNaukri.png" alt="">
        </div>
        <div class="rokaulast">
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/footer-logos/jeevansathi.png" alt="">
        </div>
        <div class="rokaulast">
            <img src="https://static.naukimg.com/s/0/0/i/new-homepage/footer-logos/ng.png" alt="">
        </div>
    </div>
</div>





</body>
  </html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
  integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/Naya tropical/Landing Page by Nandlal/index.js" type="module"></script>
<script type="text/javascript">

$('.slider').slick({


infinite: false,
speed: 600,
slidesToShow: 5,
slidesToScroll: 5,
responsive: [
{
  breakpoint: 768,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    dots: true
  }
},
{
  breakpoint: 768,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}

]
});




            

          
            $('.items_hai').slick({
   infinite: false,
   lazyLoad: 'ondemand',
   slidesToShow: 4,
   slidesToScroll: 4
 });
 
 

 $('.gridwlaslider').slick({


  dots:true,
    infinite: false,
   lazyLoad: 'ondemand',
   slidesToShow: 2,
   slidesToScroll: 2,
 });

 

 $('.autowla').slick({
    
                
    loop:true,
   
    autoplay:true,
   autoplayTimeout:1000,
    infinite: true,
    nav:false,
    
//    lazyLoad: 'ondemand',
   slidesToShow: 4,
   slidesToScroll:4,
 });


 
 $('.carrerslider').slick({
   infinite: false,
   lazyLoad: 'ondemand',
   slidesToShow: 3,
   slidesToScroll: 3
 });

 $('.slidergridwala').slick({
   infinite: false,
   lazyLoad: 'ondemand',
   slidesToShow: 5,
   slidesToScroll: 5,
 });


//  slide2box
</script>
