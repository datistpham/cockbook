<style>
    .ppp {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.4
    }
    @media screen and (max-width: 500px) {
        .sub-signup-1 {
        width: 100% !important;
    }    
    }
    
    .sub-signup-1 {
        width: 432px;
    }    
    #send-singup {
        transform: scale(1.1);
    }
    input[type="text"]:focus {
        border-color: #2f69e7
    }
</style>
<div class="sub-signup-1" style="position:relative;border-radius:8px;background-color:#fff;box-shadow: 0 2px 4px rgba(0,0,0,0.1), 0 8px 16px rgba(0,0,0,0.1)">
    <div style="padding-bottom:20px;padding-top:16px;padding-left:16px;padding-right:16px" class="sub-signup-1-1">
        <p style="font-size:32px;font-weight:900;position:relative;display:flex;flex-direction:row;justify-content:space-between;align-items:center"><span style="font-size:32px;font-weight:900;">Sign up</span> <img title="close" class="_8idr_img" src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/Q0G2UVjVQ4_.png" width="24px" height="24px" id="u_5_9_4e">
        </p>
        <p>It's quick and easy</p>

    </div>
    <hr style="border-top: 1px solid #cccccc">
    <div class="contain-form" style="padding:16px">
        <form action='info_user.php' method="post" style="display:flex;flex-direction:column;justify-content:center;align-items:center;gap:10px">
            <div style="width:100%;display:flex;flex-direction:row;gap:10px;justify-content:space-between;align-items:center" class="form-1">
                <div style="width: 50%" class="form-1-1">
                    <input name="firstname" id="firstname" style="background-color:#f5f6f7;color:#0A0909;font-size:15px;padding:11px;border:1px solid #ccd0d5;border-radius:5px;font-weight:900;width:100%" type="text" placeholder="First name">
                </div>
                <div class="form-1-2" style="width: 50%">
                    <input name="surname" id="surname" style="background-color:#f5f6f7;color:#0A0909;font-size:15px;padding:11px;border:1px solid #ccd0d5;border-radius:5px;font-weight:900;width:100%" type="text" placeholder="Surname">
                </div>
            </div>
            <div class="lost-1" style="width:100%">
                <p class="first-name-1 ppp"></p>
                <p class="second-name-1 ppp"></p>
            </div>
            <div class="form-1-3" style="width:100%">
                <input name="account" id="account" style="background-color:#f5f6f7;color:#0A0909;font-size:15px;padding:11px;border:1px solid #ccd0d5;border-radius:5px;font-weight:900;width:100%" type="text" placeholder="Mobile number or email address">
            </div>
            <div class="lost-account" style="width:100%">
                <p class="lost-account-1 ppp"></p>
            </div>
            <div class="form-1-4" style="width:100%">
                <input name="password" id="password" style="background-color:#f5f6f7;color:#0A0909;font-size:15px;padding:11px;border:1px solid #ccd0d5;border-radius:5px;font-weight:900;width:100%" type="password" placeholder="New password">
            </div>
            <div class="lost-password" style="width:100%">
                <p class="lost-password-1 ppp"></p>
            </div>
            <div class="form-1-5" style="width:100%">
                <p style="font-size:11px;color:#777777">Date of birth</p>
                <div class="form-1-5-1">

                    <select id="date" style="font-weight:600" aria-label="Day" name="birthday_date" title="Day" class="_7_spl">
                        <option style="background-color:#cccccc;color:#0A0909" value="default" selected="1" disabled>Day</option>
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
                    <select id="month" style="font-weight:600" aria-label="Month" name="birthday_month" title="Month" class="_8_spl">
                        <option style="background-color:#cccccc;color:#0A0909" value="default" selected="1" disabled>Month</option>
                        <option value="jan">Jan</option>
                        <option value="feb">Feb</option>
                        <option value="mar">Mar</option>
                        <option value="apr">Apr</option>
                        <option value="may">May</option>
                        <option value="jun">Jun</option>
                        <option value="jul">Jul</option>
                        <option value="aug">Aug</option>
                        <option value="sep">Sep</option>
                        <option value="oct">Oct</option>
                        <option value="nov">Nov</option>
                        <option value="dec">Dec</option>

                    </select>

                    </select>
                    <select id="year" style="font-weight:600;border:1px solid ;" aria-label="Year" name="birthday_year" title="Year" class="_9_spl">
                        <option style="background-color:#cccccc;color:#0A0909" value="default" selected="1" disabled>Year</option>

                        <option value="1915">1915</option>
                        <option value="1916">1916</option>
                        <option value="1917">1917</option>
                        <option value="1918">1918</option>
                        <option value="1919">1919</option>
                        <option value="1920">1920</option>
                        <option value="1921">1921</option>
                        <option value="1922">1922</option>
                        <option value="1923">1923</option>
                        <option value="1924">1924</option>
                        <option value="1925">1925</option>
                        <option value="1926">1926</option>
                        <option value="1927">1927</option>
                        <option value="1928">1928</option>
                        <option value="1929">1929</option>
                        <option value="1930">1930</option>
                        <option value="1931">1931</option>
                        <option value="1932">1932</option>
                        <option value="1933">1933</option>
                        <option value="1934">1934</option>
                        <option value="1935">1935</option>
                        <option value="1936">1936</option>
                        <option value="1937">1937</option>
                        <option value="1938">1938</option>
                        <option value="1939">1939</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
            </div>
            <div class="_9_spl" style="width:100%">
                <p class="ppp lost-day"></p>
                <p class="ppp lost-month"></p>
                <p class="ppp lost-year"></p>

            </div>
            <div class="form-1-6" style="width:100%">
                <p style="font-size:11px;color:#777777">Gender</p>
                <div class="form-1-6-1" style="width:100%;display:flex;flex-direction:row;align-items:center;justify-content:space-between;gap:15px">
                    <div class="form-1-6-1-1" style="border:1px solid #ccd0d5;width:calc(100%/3);padding:11px;border-radius:5px;display:flex;flex-direction:row-reverse;justify-content: space-between;align-items:center;font-weight:600">
                        <input type="radio" checked class="male sex" name="gender" value="Male">
                        <span>Male</span>
                    </div>
                    <div class="form-1-6-1-2" style="border:1px solid #ccd0d5;width:calc(100%/3);padding:11px;border-radius:5px;display:flex;flex-direction:row-reverse;justify-content: space-between;align-items:center;font-weight:600">
                        <input type="radio" class="female sex" name="gender" value="Female">
                        <span>Female</span>
                    </div>
                    <div class="form-1-6-1-3" style="border:1px solid #ccd0d5;width:calc(100%/3);padding:11px;border-radius:5px;display:flex;flex-direction:row-reverse;justify-content: space-between;align-items:center;font-weight:600">
                        <input type="radio" class="custom sex" name="gender" value="Custom">
                        <span>Custom</span>
                    </div>
                </div>
            </div>
            <div class="lost-gender" style="width:100%">
                <p class="lost-gender-1 ppp"></p>
            </div>
            <div class="_17_eps">
                <p style="color:#777777;font-size:11px">By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>
            </div>
            <div class="_12pe_ew" style="padding-top:20px;padding-bottom:20px;width:100%;display:flex;justify-content:center;align-items:center">
                <input type="submit" value="Sign up" id="send-singup" style="padding:8px 70px;font-size:17px;font-weight:900;color:#fff;background-color:#00a400;border-radius:5px;border:none;outline:none" onclick="return sent_signup();">

            </div>
        </form>
    </div>
    <script>
        function validateEmail(emailAdress) {
            let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (emailAdress.match(regexEmail)) {
                return true;
            } else {
                return false;
            }
        }

        function validatePassword(password) {
            let regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/
            if (password.match(regexPassword)) {
                return true;

            } else {
                return false
            }
        }

        function validatePhone(phoneNumber) {
            let regexPhone = /^(\+91-|\+91|0)?\d{10}$/
            if (phoneNumber.match(regexPhone)) {
                return true
            } else {
                return false
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#account").on("keyup", function() {
                var account = $(this).val()
                $.ajax({
                    url: "check_account.php",
                    method: "POST",
                    data: {
                        account: account
                    },
                    success: function(data) {
                        $(".lost-account-1").html(data).css({
                            "color": "red",
                            "font-size": "14px"
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    }
                })
            })

            $("#account").on("focusout", function() {
                var account = $(this).val()
                if (account !== "" && validateEmail($(this).val()) === true && validatePhone($(this).val()) === true) {

                    $.ajax({
                        url: "check_account.php",
                        method: "POST",
                        data: {
                            account: account
                        },
                        success: function(data) {
                            $(".lost-account-1").html(data).css({
                                "color": "red",
                                "font-size": "14px"
                            });
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                        }
                    })
                }
            })

        })
    </script>
    <script>
        $(document).ready(function() {
            $("#firstname").on("focusout", function() {
                if ($(this).val() === "") {
                    $(".first-name-1").html("x Enter your firstname.").css({
                        "color": "red"
                    })
                } else {
                    $(".first-name-1").html("")
                }
            })
            $("#surname").on("focusout", function() {
                if ($(this).val() === "") {
                    $(".second-name-1").html("x Enter your surname.").css({
                        "color": "red"
                    })
                } else {
                    $(".second-name-1").html("")
                }
            })
            $("#password").on("focusout", function() {
                if ($(this).val() === "") {
                    $(".lost-password-1").html("x Enter your password.").css({
                        "color": "red"
                    })
                } else if (validatePassword($(this).val()) === false) {
                    $(".lost-password-1").html("x Password must be have at least 8 charaters, 1 number, 1 uppercase and 1 lowercase. Please try again .").css({
                        "color": "red"
                    })
                } else {
                    $(".lost-password-1").html("")
                }
            })
            $("#account").on("focusout", function() {
                if ($(this).val() === "") {
                    $(".lost-account-1").html("x Enter your email or phone number.").css({
                        "color": "red"
                    })
                } else if (((validateEmail($(this).val()) === false && validatePhone($(this).val()) === true) && $(".lost-account-1").html()!="x Account is exist ! Please enter another account.") || ((validateEmail($(this).val()) === true && validatePhone($(this).val()) === false) && $(".lost-account-1").html()!="x Account is exist ! Please enter another account.")) {
                    $(".lost-account-1").html("")
                } else if($(".lost-account-1").html()!="x Account is exist ! Please enter another account.") {
                    $(".lost-account-1").html("x Email or Phone number is invalid. Please try again .").css({
                        "color": "red"
                    })
                }
            })
            $("#date").on("focusout", function() {

                if ($("#date option:selected").text() == "Day") {
                    $(".lost-day").html("x Enter your birth date.").css({
                        "color": "red"
                    })

                } else {
                    $(".lost-day").html("")
                }

            })
            $("#month").on("focusout", function() {

                if ($("#month option:selected").text() == "Month") {
                    $(".lost-month").html("x Enter your birth month.").css({
                        "color": "red"
                    })

                } else {
                    $(".lost-month").html("")
                }

            })
            $("#year").on("focusout", function() {

                if ($("#year option:selected").text() == "Year") {
                    $(".lost-year").html("x Enter your birth year.").css({
                        "color": "red"
                    })

                } else {
                    $(".lost-year").html("")
                }

            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $(".sub-signup-1 input").on("focusout", function() {
                if ($(this).val() === "") {
                    $(this).css({
                        "border-color": "#ff0000",
                        "outline": "none"
                    })
                } else {
                    $(this).css({
                        "border-color": "#ccd0d5"
                    })
                }
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $("#u_5_9_4e").on("click", function() {
                $(".sub-signup").css({
                    "display": "none"
                })
            })
            $("#signup").on("click", function() {
                $(".sub-signup").css({
                    "display": "flex"
                })
            })
        })
    </script>
    <script>
        function sent_signup(e) {
            if ($(".lost-password-1").html() == "" && $(".first-name-1").html() == "" && $(".second-name-1").html() == "" && $(".lost-account-1").html() == "" && $("#account").val() != "") {
                return true
            } else {
                if ($("#firstname"))
                    return false
            }
        }
    </script>

</div>