<!-- Header -->
<?php require_once "includes/header.inc.php";
?>





<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">



        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Create an Account</h3>



               <?php
              //ERROR HANDLERS
               //EMPTY FIELDS
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="alert alert-primary"> Fill in all fields</p><hr>';
                    }

              //INVALID EMAIL
              elseif ($_GET['error'] == "invalidmail") {
                  echo '<p class="alert-primary"> Invalid Email</p><hr>';
              }

              //EMAIL TAKEN
              elseif ($_GET['error'] == "emailtaken") {
                  echo '<p class="alert-primary"> Email is Taken</p><hr>';
              }

              //PASSWORDS DONT MATCH
              elseif ($_GET['error'] == "passwordcheck") {
                  echo '<p class="alert-primary"> Passwords do not match</p><hr>';
              }  
                }
              ?>


              <form action="includes/signup.inc.php" method="post">
                  <!-- First Name -->
                
              <div class="form-row">
                <div class="col form-label-group">
                  <input name="first-name" type="text" id="inputFirst" class="form-control" placeholder="First Name" required>
                  <label for="inputFirst">First Name</label>
                </div>

                  <!-- Last Name -->
                <div class="col form-label-group">
                  <input name="last-name" type="text" id="inputLast" class="form-control" placeholder="Last Name" required>
                  <label for="inputLast">Last Name</label>
                </div>
                </div>

                 <!-- Email -->
                 <div class="form-label-group">
                  <input name="mail" type="text" id="inputEmail" class="form-control" placeholder="Email Address" required>
                  <label for="inputEmail">Email Address</label>
                </div>

                  <!-- Password -->
                <div class="form-label-group">
                  <input name="pwd" type="password" id="inputPwd" class="form-control" placeholder="Password" required>
                  <label for="inputPwd">Password</label>
                </div>

                   <!-- Password Repeat -->
                <div class="form-label-group">
                  <input name="pwd-repeat" type="password" id="inputPwdRpt" class="form-control" placeholder="Repeat Password" required>
                  <label for="inputPwdRpt">Repeat Password</label>
                </div>
                <br>
                <p>Date of Birth</p>
                <div class="form-row">
                <div class="form-group col">
                  <select class="form-control" id="Form-Control-date" placeholder="DD"><option selected="selected" value="0">DD</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>

                </div>


                <div class="form-group col-6">
                  <select class="form-control" id="form-control-mouth"><option selected="selected" value="0">Month</option>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                  </select>
                </div>



                <div class="form-group col">
                  <select class="form-control" id="Form-Control-year"><option selected="selected" value="0">YYYY</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                    <option value="1959">1959</option>
                    <option value="1958">1958</option>
                    <option value="1957">1957</option>
                    <option value="1956">1956</option>
                    <option value="1955">1955</option>
                    <option value="1954">1954</option>
                    <option value="1953">1953</option>
                    <option value="1952">1952</option>
                    <option value="1951">1951</option>
                    <option value="1950">1950</option>
                    <option value="1949">1949</option>
                    <option value="1948">1948</option>
                    <option value="1947">1947</option>
                    <option value="1946">1946</option>
                    <option value="1945">1945</option>
                    <option value="1944">1944</option>
                    <option value="1943">1943</option>
                    <option value="1942">1942</option>
                    <option value="1941">1941</option>
                    <option value="1940">1940</option>
                    <option value="1939">1939</option>
                    <option value="1938">1938</option>
                    <option value="1937">1937</option>
                    <option value="1936">1936</option>
                    <option value="1935">1935</option>
                    <option value="1934">1934</option>
                    <option value="1933">1933</option>
                    <option value="1932">1932</option>
                    <option value="1931">1931</option>
                    <option value="1930">1930</option>
                    <option value="1929">1929</option>
                    <option value="1928">1928</option>
                    <option value="1927">1927</option>
                    <option value="1926">1926</option>
                    <option value="1925">1925</option>
                    <option value="1924">1924</option>
                    <option value="1923">1923</option>
                    <option value="1922">1922</option>
                    <option value="1921">1921</option>
                    <option value="1920">1920</option>
                    <option value="1919">1919</option>
                    <option value="1918">1918</option>
                    <option value="1917">1917</option>
                    <option value="1916">1916</option>
                    <option value="1915">1915</option>
                    <option value="1914">1914</option>
                    <option value="1913">1913</option>
                    <option value="1912">1912</option>
                    <option value="1911">1911</option>
                    <option value="1910">1910</option>
                    <option value="1909">1909</option>
                    <option value="1908">1908</option>
                    <option value="1907">1907</option>
                    <option value="1906">1906</option>
                    <option value="1905">1905</option>
                    <option value="1904">1904</option>
                    <option value="1903">1903</option>
                    <option value="1902">1902</option>
                    <option value="1901">1901</option>
                    <option value="1900">1900</option>
              </select>

                  </div>
                  </div>

                
                <button name="signup-submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register Account</button>
                <div class="text-center">

                <a class="small" href="login.php">Already have an account? Log In</a></div>
               
                

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Footer -->
<?php require_once "includes/footer.inc.php";
?>
