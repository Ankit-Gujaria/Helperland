<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Homepage</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>



/* login model start*/



/* login model end*/

</style>
</head>

<body>
      

<?php
  include('ServiceproviderReg.php');
?>

<?php 
  
  include('login.php');

?>

  

    <section class="home">
        <nav class="navbar navbar-expand-xl navbar-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="brnd-img" src="../assets/img/nav-brand.png" alt=""></a>
                <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-auto text-center">
                        <li class="nav-item" id="i1">
                            <a class=" sp-btn" href="#">Book a Cleaner</a>
                        </li>
                        <li class="nav-item">
                            <a class=" header-nav" href="Prices.php">Prices</a>
                        </li>
                        <li class="nav-item">
                            <a class=" header-nav" href="#">Our Guarantee</a>
                        </li>
                        <li class="nav-item">
                            <a class=" header-nav" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class=" header-nav" href="ContectUs.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class=" sp-btn" data-toggle="modal" data-target="#exampleModal" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class=" sp-btn" data-toggle="modal" data-target="#exampleModalCenter" href="#">Become a
                                Helper</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="container-fluid  heading" >
            <div class="row ms-md-5 ms-sm-2 " >
                <div class="col-lg-3 col-md-6 col-sm-12 ps-1 ml-sm-2" >
                    <div>
                        <h1 class="mb-3 heading-txt">Do not feel like housework?</h1>
                    </div>
                    <div class="head-text">
                        <p class="mb-2">Great Book now for Helperland and enjoy the benifits</p>
                    </div>
                    <div class="head-txt">
                        <p class="mb-1"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13" height="10">
                                <path fill-rule="evenodd" fill="#FFF"
                                    d="m11.279.1 1.719 1.662-8.041 8.234L0 4.919l1.719-1.76 3.238 3.316L11.279.1z" />
                            </svg>
                            certified & insured helper.</p>
                    </div>
                    <div class="head-txt">
                        <p class="mb-1"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13" height="10">
                                <path fill-rule="evenodd" fill="#FFF"
                                    d="m11.279.1 1.719 1.662-8.041 8.234L0 4.919l1.719-1.76 3.238 3.316L11.279.1z" />
                            </svg>
                            easy booking procedure.</p>
                    </div>
                    <div class="head-txt">
                        <p class="mb-1"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13" height="10">
                                <path fill-rule="evenodd" fill="#FFF"
                                    d="m11.279.1 1.719 1.662-8.041 8.234L0 4.919l1.719-1.76 3.238 3.316L11.279.1z" />
                            </svg>
                            freindly customer services.</p>
                    </div>
                    <div class="head-txt">
                        <p class="mb-1"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="13" height="10">
                                <path fill-rule="evenodd" fill="#FFF"
                                    d="m11.279.1 1.719 1.662-8.041 8.234L0 4.919l1.719-1.76 3.238 3.316L11.279.1z" />
                            </svg>
                            secure online payment method.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center" >
                    <button class="booking-btn"><a href="">Book a helper</a></button>
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-center flex-wrap align-items-baseline mt-5">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="55">
                    <path fill-rule="evenodd" fill="#FFF"
                        d="M51.18 37.703 36.892 52.232l-7.221 2.002-.483.491c.512.185-.419.475-.656.475-.235 0 .098-.29-.649-.47l-.018.005.005-.019a.954.954 0 0 1 .005-1.327l.482-.489 1.969-7.344L44.615 31.27c1.047-1.307 2.873-1.307 3.92 0l2.645 2.447a2.855 2.855 0 0 1 0 3.986zM30.511 52.44l4.111-1.536-2.989-3.04-1.122 4.576zm1.959-5.98 3.939 4.06 9.51-10.138-3.94-4.005L32.47 46.46zm17.397-10.94-2.646-3.158c-.345-.262-.948-.262-1.293 0l-2.636 3.058 3.939 4.05 2.636-3.103c.357.133.357-.953 0-.847zm-10.873-6.262c-.513 0-.344-.422-.344-.944V7.546h-7.083v1.888a.936.936 0 0 1-.929.944H9.285a.936.936 0 0 1-.928-.944V7.546H1.858v45.312h21.353c.513 0 .929.422.929.944a.936.936 0 0 1-.929.944H.93c-.513 0-.83-.422-.83-.944v-47.2c0 .198.317-.944.83-.944h7.427V3.77c0-.522.416-.944.928-.944h5.571V.938c0-.522.416-.438.928-.438h8.356c.512 0 1.54-.084 1.54.438v1.888h4.958c.513 0 .929.422.929.944v1.888h7.427c.512 0 .928 1.142.928.944v21.712a.936.936 0 0 1-.928.944zM23.211 3.77V1.882h-6.499v3.776h6.499V3.77zm6.499 2.832V4.714h-4.03v1.888c0 .522-1.028.944-1.54.944h-8.356a.936.936 0 0 1-.928-.944V4.714h-4.642V8.49H29.71V6.602zM6.5 43.418h12.069c1.251 0 .929.422.929.944s.322.944-.929.944H6.5a.936.936 0 0 1-.928-.944c0-.522.416-.944.928-.944zm24.138-9.44H6.5c-.512 0-.928-.422-.928-.638 0-.828.416-.44.928-.44h24.138c.513 0 .929-.388.929.44 0 .216-.416.638-.929.638zm2.785-5.664h-6.498a.936.936 0 0 1-.929-.944c0-.522.416-.944.929-.944h6.498c.513 0 .929.422.929.944a.936.936 0 0 1-.929.944zm-9.553-1.615c.5.179.27.424.27.67 0 .245.23.492-.27 1.021-.175-.18-.418-.077-.659-.077-.241 0-.483-.103-.659.077-.167-.529-.269-.765-.269-1.021a1 1 0 0 1 .269-.67c.343-.349.965-.349 1.318 0zM6.5 26.426h12.998c.602 0 .928.422.928.944s-.326.944-.928.944H6.5a.936.936 0 0 1-.928-.944c0-.522.416-.944.928-.944zm0-9.44c-.512 0-.928-.422-.928-.566 0-.9.416-.44.928-.44h12.069c1.251 0 .929-.46.929.44 0 .144.322.566-.929.566H6.5zm27.852 4.72a.936.936 0 0 1-.929.944H6.5a.936.936 0 0 1-.928-.944c0-.522.416-.944.928-.944h26.923c.514 0 .929.422.929.944zM5.572 38.698c0-.522.416-.944.928-.944h20.425c.513 0 .928.422.928.944a.936.936 0 0 1-.928.944H6.5a.936.936 0 0 1-.928-.944z" />
                </svg>
                <p class="mt-4 proc-txt">Enter postal code</p>
            </div>
            <div class="arrow py-4">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="85"
                    height="23">
                    <image width="85" height="23"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFUAAAAXCAQAAADQbMu2AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflCxgKKSljQ+yhAAACk0lEQVRIx83Xy09UVxwH8M8dBpiKOCAvW2WgikpLXdg02LS0m8bYxJVJVyaYmqp7V279G4wb48Y0jTFx4YLWxEe7aG3ThERiq1NftRQfFAVBOiADw1wXZHgkVp0pMH6X55577+f8zu/k5gahglMuJqZalTeUKxMRygqljUkZlTJhQqbwFyxMtIB7Kq2zRoM6MREZkyZNSZtWIhAoF1OmVGBayrAh992Tkv1/1CCvqr6pRYtaoREPDRg0bNy0rKy5BwVKRJWo0KBWtVo1Sv2rzx19hpaaWq3Ne1Yb0eu2AaPyWWNcjWYJDQKDbrrtYf6N8SrUtT7UJu2Kax6YLrQqWGGdFm9bZVjSVY8Xk5rQYb1+3ZKLdkAi1nhHm5Xu6/bHq+7Pi6i1dtjolp/1LhJyfqKafaDVI5ckTRVOLfWxDo+dXRLmXOq122LUT35/WXWfT220S8xFPXkdnkIT95Ft+p11N1/qJ7ZL+lZqGZi51Nlhg24/mJg3WiXu7/+irvCFZl16lpGZS6udok67MztS4aAzkjN7W3J4/uR6X4o54c8iQBl0RZXPma1kxqdW5co2n9psnz7feFIUKIGM6x7ZKeGWKQSitrosDZHZiZvtddmpBb2yvAmFAtccFXdAPUK/SVg/czlH3WS3X3Qty4l/MTcw5LgRX1mLETe9K5ijNtnjknNFZuawobSv3XBAo4wffTZHXa3Try4U27iAm3VGj7026japXUBEhU73fFds3XNy3l86tUpqFxLRaNzpovdoLlEJBCqFxp301H6hhDhBGBMxXmzhbJpst833qo3p1S9wSNRKx5zP7y9g6fOWBjW2GFMn5X1XVdqKi468btSZlCJhyhMd/tGkzJiu15O6MOUzX6tnHaHKDvXA3/wAAAAASUVORK5CYII=" />
                </svg>
            </div>
            <div class="text-center">
                <img src="../assets/img/group-22.png" class="arw"alt="#">
                <p class="mt-4 proc-txt">Select desired date</p>
            </div>
            <div class="arrow py-4">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="85"
                    height="23">
                    <image width="85" height="23"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFUAAAAXCAQAAADQbMu2AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflCxgKKSeE+8GmAAACjElEQVRIx83Wy29UVRwH8M+5nWmHsdrWthShlFeVasWk+CjB4g66IC5YmBgW7kg0Ya0Ll/4XJaTBJvgHaLoCH1E3dGGMOMgjpEytwAgtbWdISx+XxUxNayp9CFy+u3t/5ySf87vn5J4Qe+ZTYwZSSTtWTBptZk3occsO1Uq+ftaoW7VotE9Js6L9LurWhXNCSkbkftLCf5L2pm7nNRgxbFDwmTG1LolD3OGQs0pJGytJ2SovqDWFKp/a5rIdvjARGZH1gZC0sZI5ecSmBFnHbXJKkDdBpGRAq6NJG1fIEbsM+MNrLghEGDPggMNJy5YkiBzTpd9Vb6t2QVymcsOXevQmLawwgxof2avPiJT3nBezSOWKsw56P/E9G8QanVDvtFHUe0VuOZXL+u33oUyCzCDW6aQJfQoI3pB3vVJe9mPd7LjYVwoJYbOO6PKdH8p9FHxuVH+5GC0bWtBn3Me6EoF2+MReZ3xvsX9Zyqeff3e1nEMOy/lG8Skym/XaY8i3ppe8rVfnxuJDWPFmtd0xGef84mlcvOoc1O2mQSOPGhb+w5L2rh5jBg0/UeZm79hn0o9+W60t4RH1Jr1edtXPT4SbstNbOvztJzmzq08IqyylTY/dbhqSM/eYkJEtXtWp1qghl9a6yVajwjYHdJrxq9/9Zf5/ILNatdvlBeNyLhpbz+S1UKFBp9e96J5h19w2ua4DV6fRTm1aBHdccU1h/d9ordRyXtKuXZPYPQW33THuvnkLFpbQgyopVZ7TokmDJo3SpuRdl3d3vcSNUct5XqstWjTLiMx54IFZM+ZVVS4bGdXSgnlF4+4a9aeihY0iN05dTI2MjAb1NqlRLRJbEJtRUjSpaNr0YzuMHgKYdb21MA/BqwAAAABJRU5ErkJggg==" />
                </svg>
            </div>
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54">
                    <path fill-rule="evenodd" fill="#FFF"
                        d="M49.645 48.773H36.58v3.483h4.06v1.742H12.193v-1.742h3.484v-3.483H4.354A4.36 4.36 0 0 1 0 44.417v-2.612h53.999v2.612c0 2.402-1.539 4.356-4.354 4.356zm-32.226 3.483h17.419v-3.483H17.419v3.483zm34.838-8.709H1.741v.87c0 1.441 1.173 2.893 2.613 2.893h45.291c2.205 0 2.612-1.452 2.612-2.893v-.87zm0-31.355c0-1.44-.407-2.613-2.612-2.613V7.837c2.815 0 4.354 1.954 4.354 4.355V40.63h-1.742V12.192zM36.58 22.643c-6.243 0-11.322-5.079-11.322-11.322C25.258 5.78 30.337.1 36.58.1c6.243 0 11.323 5.68 11.323 11.221 0 6.243-5.08 11.322-11.323 11.322zm0-20.903c-5.282 0-9.581 4.64-9.581 9.581 0 5.282 4.299 9.581 9.581 9.581 5.283 0 9.581-4.299 9.581-9.581 0-4.941-4.298-9.581-9.581-9.581zm3.622 5.797c-.718-.784-1.638-1.216-2.589-1.216-.793 0-2.859 1.097-3.508 2.809h4.294c.376 0 1.391.199 1.391.589 0 .39-1.015.706-1.391.706h-4.665a6.1 6.1 0 0 0-.011 1.501h4.676c.376 0 1.391.316 1.391.706 0 .588-1.015.706-1.391.706H34.68c.024 1.643 1.86 2.78 2.933 2.78.951 0 1.871-.432 2.589-1.216a.661.661 0 0 1 .961-.025.725.725 0 0 1 .024.998c-.977 1.067-2.246 1.655-3.574 1.655-2.295 0-4.252-1.751-4.984-4.192h-1.795c-.376 0-.68-.118-.68-.706 0-.39.304-.706.68-.706h1.521a7.468 7.468 0 0 1 .01-1.501h-1.531a.693.693 0 0 1-.68-.706c0-.389.304-.589.68-.589h1.822c.752-2.511 2.69-4.221 4.957-4.221 1.328 0 2.597.588 3.575 1.655a.726.726 0 0 1-.025.998.661.661 0 0 1-.961-.025zM14.806 33.633a3.46 3.46 0 0 1-2.613 1.204 3.487 3.487 0 0 1-3.484-3.484 3.488 3.488 0 0 1 3.484-3.484c1.046 0 1.974.472 2.613 1.861.639-1.389 1.567-1.861 2.613-1.861a3.488 3.488 0 0 1 3.484 3.484 3.487 3.487 0 0 1-3.484 3.484 3.46 3.46 0 0 1-2.613-1.204zm-2.613-4.022c-.961 0-1.742.782-1.742 1.742 0 .961.781 2.597 1.742 2.597s1.742-1.636 1.742-2.597c0-.96-.781-1.742-1.742-1.742zm6.968 1.742c0-.96-.782-1.742-1.742-1.742-.961 0-1.742.782-1.742 1.742 0 .961.781 2.597 1.742 2.597.96 0 1.742-1.636 1.742-2.597zM6.967 18.289v.871h19.161v1.742H6.967v1.741h24.387v1.743H6.967v11.322c0 .481.39.871.871.871h27.871c.481 0 .871-.39.871-.871V24.386h1.742v11.322a2.616 2.616 0 0 1-2.613 2.613H7.838a2.616 2.616 0 0 1-2.613-2.613V18.289a2.617 2.617 0 0 1 2.613-2.613h16.548v1.741H7.838a.872.872 0 0 0-.871.872zm-5.226-6.097V40.63H0V12.192a4.36 4.36 0 0 1 4.354-4.355h19.162v1.742H4.354a2.617 2.617 0 0 0-2.613 2.613z" />
                </svg>
                <p class="mt-4 proc-txt">Pay securely online</p>
            </div>
            <div class="arrow py-4">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="85"
                    height="23">
                    <image width="85" height="23"
                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFUAAAAXCAQAAADQbMu2AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflCxgKKSljQ+yhAAACk0lEQVRIx83Xy09UVxwH8M8dBpiKOCAvW2WgikpLXdg02LS0m8bYxJVJVyaYmqp7V279G4wb48Y0jTFx4YLWxEe7aG3ThERiq1NftRQfFAVBOiADw1wXZHgkVp0pMH6X55577+f8zu/k5gahglMuJqZalTeUKxMRygqljUkZlTJhQqbwFyxMtIB7Kq2zRoM6MREZkyZNSZtWIhAoF1OmVGBayrAh992Tkv1/1CCvqr6pRYtaoREPDRg0bNy0rKy5BwVKRJWo0KBWtVo1Sv2rzx19hpaaWq3Ne1Yb0eu2AaPyWWNcjWYJDQKDbrrtYf6N8SrUtT7UJu2Kax6YLrQqWGGdFm9bZVjSVY8Xk5rQYb1+3ZKLdkAi1nhHm5Xu6/bHq+7Pi6i1dtjolp/1LhJyfqKafaDVI5ckTRVOLfWxDo+dXRLmXOq122LUT35/WXWfT220S8xFPXkdnkIT95Ft+p11N1/qJ7ZL+lZqGZi51Nlhg24/mJg3WiXu7/+irvCFZl16lpGZS6udok67MztS4aAzkjN7W3J4/uR6X4o54c8iQBl0RZXPma1kxqdW5co2n9psnz7feFIUKIGM6x7ZKeGWKQSitrosDZHZiZvtddmpBb2yvAmFAtccFXdAPUK/SVg/czlH3WS3X3Qty4l/MTcw5LgRX1mLETe9K5ijNtnjknNFZuawobSv3XBAo4wffTZHXa3Try4U27iAm3VGj7026japXUBEhU73fFds3XNy3l86tUpqFxLRaNzpovdoLlEJBCqFxp301H6hhDhBGBMxXmzhbJpst833qo3p1S9wSNRKx5zP7y9g6fOWBjW2GFMn5X1XVdqKi468btSZlCJhyhMd/tGkzJiu15O6MOUzX6tnHaHKDvXA3/wAAAAASUVORK5CYII=" />
                </svg>
            </div>
            <div class="text-center">
                <img src="../assets/img/step-4.png" class="arw" alt="#">
                <p class="mt-4 proc-txt">Feel at home</p>
            </div>
        </div>
        <div class="row text-center pb-3">
            <div class="col-lg-12">
                <a href="#about" ><img src="../assets/img/group-18@3x.png" alt=""></a>
            </div>
        </div>
    
    </section>

     <!-- About Page Start-->
     <section class="about py-4 mt-5" id="about">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center ">
                        <h2 class="mb-5">Convince yourself!</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-baseline">
                <div class="col-md-6 col-lg-4 ">
                    <div class="grp-img text-center">
                        <img src="../assets/img/group-21.png" style="width:300px; height:300px;" alt="">
                    </div>
                    <div class="grp-text text-center mt-5">
                        <div class="title mb-5">
                            <h2 class="mb-2">Experience & Vetted Professionals</h2>
                        </div>
                        <div class="m-4">
                            <p>dominate the industry in scale and scope with an adaptable, extensive network that
                                consistently delivers exceptional results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="grp-img text-center">
                        <img src="../assets/img/group-23.png" style="width:300px; height:300px;"  alt="">
                    </div>
                    <div class="grp-text text-center mt-5 ">
                        <div class="title mb-5">
                            <h2 class="mb-2">Secure Online Payment</h2>
                        </div>
                        <div class="m-4">
                            <p>Payment is processed securely online. Customers pay safely online and
                                manage the booking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="grp-img text-center">
                        <img src="../assets/img/group-24.png" style="width:300px; height:300px;"  alt="">
                    </div>
                    <div class="grp-text text-center mt-5 ">
                        <div class="title mb-5">
                            <h2 class="mb-2">Dedicated Customer
                                Service</h2>
                        </div>
                        <div class="m-4">
                            <p>to our customers and are guided in all we do by their needs. The team is always happy to
                                support you and offer all the information.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Page End -->

    <!-- Blog Page Start -->
    <section class="blog">
        <div class="container-lg">
            <div class="row p-5 mt-5">
                <div class="col-lg-7 blog-first">
                    <h3 class="">We do not know what makes you happy, but ...</h3>
                    <p class="mt-3">If it's not dusting off, our friendly helpers will free you from this burden - 
                        do not worry anymore about spending valuable time doing housework, but savor life, 
                        you're well worth your time with beautiful experiences. Free yourself and enjoy the 
                        gained time: Go celebrate, relax, play with your children, meet friends or dare to jump
                         on the bungee.Other leisure ideas and exclusive events can be found in our blog - guaranteed
                          free from dust and cleaning tips!</p>
                   
                </div>
                <div class="col-lg-5">
                    <div class="text-center">
                        <img src="../assets/img/group-36.png" style="width:400px; height:330px;"  alt="">
                    </div>
                </div>
            </div>
           
           
        </div>
    </section>
    <!-- Blog Page End -->

    <!-- Testimonial Page Start -->
    <section class="testimonial mt-5">
        <div class="container-lg position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center ">
                        <h2 class="m-5">What Our Customers Say</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow prof-card">
                        <div class="card-body">
                            <div align="right">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36">
                                        <path fill-rule="evenodd" fill="#DAE5EC"
                                            d="M10.545 10.962h13.217c.485 0 .878.379.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847 0-.468.933-.847.878-.847zm13.217 9.713c.485 0 .878.865.878.847 0 .468-.393.847-.878.847h-7.556c-.484 0-.877-.379-.877-.847 0 .018.393-.847.877-.847h7.556zM9.667 16.666c0-.469.933-.847.878-.847h13.217c.485 0 .878.378.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847zm19.506 10.531c-3.601 3.475-8.714 5.152-13.763 4.536l-5.7 4.061c-.19.136-.419.406-.12.406-.629 0-.726-.211-.822-.237-.325-.085-.59-.31-.298-.61l-2.048-3.732c-.235.199.027-1.16 1.378-1.387-.233.566.41.027.645.566l1.084 2.491 4.938-3.519a1.12 1.12 0 0 1 .82-.194c4.509.675 9.117-.774 12.334-3.879 5.582-5.385 5.582-14.149 0-19.535C22.4.778 12.959.778 7.377 6.164 3.83 9.587 2.411 14.446 3.58 19.162l.008.035c.165.652.379 1.296.631 2.773l2.563 5.013c.388.539-.028 1.16-.586 1.386-.559.227-1.202-.026-1.437-.565L2.19 21.903c-.3-.717-.548-1.464-.726-2.178a.982.982 0 0 1-.038-.151C.114 14.162 1.755 8.595 5.825 4.666c6.437-6.211 16.911-6.21 23.348 0 6.437 6.212 6.437 16.319 0 22.531z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="profile d-flex ms-4">
                                <div class="prof-img">
                                    <img src="../assets/img/group-31.png" alt="">
                                </div>
                                <div class="prof-details">
                                    <p class="prof-name">Lary Watson</p>
                                    <p class="prof-city">Manchester</p>
                                </div>
                            </div>
                            <p class="prof-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum
                                metus pulvinar aliquet consequat. Praesent nec malesuada nibh.</p>
                            <p class="prof-txt">
                                Nullam et metus congue,
                                auctor augue sit amet, consectetur tortor.
                            </p>
                            <p class="read-more mb-4 mt-4">Read More <a href="#"><svg class="read-arrow"
                                        xmlns="http://www.w3.org/2000/svg" width="29" height="10">
                                        <path fill-rule="evenodd" fill="#4F4F4F"
                                            d="M.1 3.725h21.392C20.456 2.263 19.94 1.31 19.887.1c2.357 2.151 5.421 3.318 9.213 4.414-3.792 1.051-6.721 2.334-9.213 4.696.573-1.602.589-2.454 1.637-4.009H.1V3.725z" />
                                    </svg></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow prof-card">
                        <div class="card-body">
                            <div align="right">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36">
                                        <path fill-rule="evenodd" fill="#DAE5EC"
                                            d="M10.545 10.962h13.217c.485 0 .878.379.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847 0-.468.933-.847.878-.847zm13.217 9.713c.485 0 .878.865.878.847 0 .468-.393.847-.878.847h-7.556c-.484 0-.877-.379-.877-.847 0 .018.393-.847.877-.847h7.556zM9.667 16.666c0-.469.933-.847.878-.847h13.217c.485 0 .878.378.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847zm19.506 10.531c-3.601 3.475-8.714 5.152-13.763 4.536l-5.7 4.061c-.19.136-.419.406-.12.406-.629 0-.726-.211-.822-.237-.325-.085-.59-.31-.298-.61l-2.048-3.732c-.235.199.027-1.16 1.378-1.387-.233.566.41.027.645.566l1.084 2.491 4.938-3.519a1.12 1.12 0 0 1 .82-.194c4.509.675 9.117-.774 12.334-3.879 5.582-5.385 5.582-14.149 0-19.535C22.4.778 12.959.778 7.377 6.164 3.83 9.587 2.411 14.446 3.58 19.162l.008.035c.165.652.379 1.296.631 2.773l2.563 5.013c.388.539-.028 1.16-.586 1.386-.559.227-1.202-.026-1.437-.565L2.19 21.903c-.3-.717-.548-1.464-.726-2.178a.982.982 0 0 1-.038-.151C.114 14.162 1.755 8.595 5.825 4.666c6.437-6.211 16.911-6.21 23.348 0 6.437 6.212 6.437 16.319 0 22.531z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="profile d-flex ms-4">
                                <div class="prof-img">
                                    <img src="../assets/img/group-32.png" alt="">
                                </div>
                                <div class="prof-details">
                                    <p class="prof-name">John Smith</p>
                                    <p class="prof-city">Manchester</p>
                                </div>
                            </div>
                            <p class="prof-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum
                                metus pulvinar aliquet consequat. Praesent nec malesuada nibh.</p>
                            <p class="prof-txt">
                                Nullam et metus congue,
                                auctor augue sit amet, consectetur tortor.
                            </p>
                            <p class="read-more mb-4 mt-4">Read More <a href="#"><svg class="read-arrow"
                                        xmlns="http://www.w3.org/2000/svg" width="29" height="10">
                                        <path fill-rule="evenodd" fill="#4F4F4F"
                                            d="M.1 3.725h21.392C20.456 2.263 19.94 1.31 19.887.1c2.357 2.151 5.421 3.318 9.213 4.414-3.792 1.051-6.721 2.334-9.213 4.696.573-1.602.589-2.454 1.637-4.009H.1V3.725z" />
                                    </svg></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow prof-card">
                        <div class="card-body">
                            <div align="right">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36">
                                        <path fill-rule="evenodd" fill="#DAE5EC"
                                            d="M10.545 10.962h13.217c.485 0 .878.379.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847 0-.468.933-.847.878-.847zm13.217 9.713c.485 0 .878.865.878.847 0 .468-.393.847-.878.847h-7.556c-.484 0-.877-.379-.877-.847 0 .018.393-.847.877-.847h7.556zM9.667 16.666c0-.469.933-.847.878-.847h13.217c.485 0 .878.378.878.847 0 .468-.393.847-.878.847H10.545c.055 0-.878-.379-.878-.847zm19.506 10.531c-3.601 3.475-8.714 5.152-13.763 4.536l-5.7 4.061c-.19.136-.419.406-.12.406-.629 0-.726-.211-.822-.237-.325-.085-.59-.31-.298-.61l-2.048-3.732c-.235.199.027-1.16 1.378-1.387-.233.566.41.027.645.566l1.084 2.491 4.938-3.519a1.12 1.12 0 0 1 .82-.194c4.509.675 9.117-.774 12.334-3.879 5.582-5.385 5.582-14.149 0-19.535C22.4.778 12.959.778 7.377 6.164 3.83 9.587 2.411 14.446 3.58 19.162l.008.035c.165.652.379 1.296.631 2.773l2.563 5.013c.388.539-.028 1.16-.586 1.386-.559.227-1.202-.026-1.437-.565L2.19 21.903c-.3-.717-.548-1.464-.726-2.178a.982.982 0 0 1-.038-.151C.114 14.162 1.755 8.595 5.825 4.666c6.437-6.211 16.911-6.21 23.348 0 6.437 6.212 6.437 16.319 0 22.531z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="profile d-flex ms-4">
                                <div class="prof-img">
                                    <img src="../assets/img/group-33.png" alt="">
                                </div>
                                <div class="prof-details">
                                    <p class="prof-name">Lars Johnson</p>
                                    <p class="prof-city">Manchester</p>
                                </div>
                            </div>
                            <p class="prof-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum
                                metus pulvinar aliquet consequat. Praesent nec malesuada nibh.</p>
                            <p class="prof-txt">
                                Nullam et metus congue,
                                auctor augue sit amet, consectetur tortor.
                            </p>
                            <p class="read-more mb-4 mt-4">Read More <a href="#"><svg class="read-arrow"
                                        xmlns="http://www.w3.org/2000/svg" width="29" height="10">
                                        <path fill-rule="evenodd" fill="#4F4F4F"
                                            d="M.1 3.725h21.392C20.456 2.263 19.94 1.31 19.887.1c2.357 2.151 5.421 3.318 9.213 4.414-3.792 1.051-6.721 2.334-9.213 4.696.573-1.602.589-2.454 1.637-4.009H.1V3.725z" />
                                    </svg></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            include("Get_news.php");
            ?>
        </div>
    </section>
    <!-- Testimonial Page End -->
   <!--  Home Button  Start-->
   <div class="home-btn">
        <a href="#">
            <div class="up-arrow">
                <svg class="up-pos" xmlns="http://www.w3.org/2000/svg" width="20" height="10">
                    <path fill-rule="evenodd" fill="#F4F5F8"
                        d="M19.802 8.855c.132.129.197.29.197.466a.633.633 0 0 1-.197.466c-.262.653-.689.653-.951 0l-8.365-8.195L2.12 9.787c-.262.653-.689.653-.951 0a.65.65 0 0 1 0-.932L10.1.195c.172.425.599.425.861 0l8.841 8.66z" />
                </svg>
            </div>
        </a>
    </div>
    <!--  Home Button  End-->


   <?php 
   include("footer.php");
   ?>
   
   <script src="../assets/js/index.js"></script>
</body>

</html>