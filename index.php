<!DOCTYPE html>
<html lang="EN">

<head>
    <title>SHOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/59558f9cd7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/59558f9cd7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="site-blocks-cover overlay backgroundshop">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="mb-5 shop_title">SHOP</h2>
                <p>Scroll down</p>
            </div>
        </div>
    </div>
</div>
<!-- Body -->
<div class="backgroundcolor">
    <section class="container content-section">
        <section class="container content-section">
            <div>
                <nav class="navbar">
                    <input id="myInput" class="form-control" type="text" placeholder="Search..">
                    <select onclick="sortBySelectedOption()" id="myInput-sort" class="rounded">
                        <option value="empty"> Sort by...</option>
                        <option value="Price"> Price</option>
                        <option value="Data"> Album date</option>
                    </select>
                </nav>
            </div>
            <div class="shop-items" id="products">
                <!-- Shop items grid 1 -->
                <div class="shop-item" data-date="1994-04-19" data-price="12">
                    <span class="shop-item-title">ILLMATIC</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/27/IllmaticNas.jpg/280px-IllmaticNas.jpg"
                             alt="Imagge" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <pre class="mb-2 text-uppercase moveill">Halftime <br>One Love<br>Represent<br>Genesis <br> Life's a Bitch<br>It Ain't Hard to Tell<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€12</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 2 -->
                <div class="shop-item" data-date="1996-07-02" data-price="18">
                    <span class="shop-item-title">IT WAS WRITTEN</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/cc/Nas-it-was-written-music-album.jpg/280px-Nas-it-was-written-music-album.jpg"
                             alt="Imagge" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <div class="d-none">IT WAS WRITTEN</div>
                            <pre class="mb-4 text-uppercase">The Message <br>Street Dreams <br>I Gave You Power <br>Watch Dem Niggas<br>Take It in Blood<br>Nas Is Coming<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€18</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <!-- Shop items grid 3 -->
                <div class="shop-item" data-date="1999-04-06" data-price="16">
                    <span class="shop-item-title">I Am...</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0f/Nas_-_I_Am....jpg/280px-Nas_-_I_Am....jpg"
                             alt="Imagee" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <div class="d-none">I Am...</div>
                            <pre class="mb-4 text-uppercase moveIam">Album Intro<br>Hate Me Now<br>Small World<br>Dr. Knockboot<br>Favor for a Favor<br>We Will Survive<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€16</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 4 -->
                <div class="shop-item" data-date="1999-11-23" data-price="25">
                    <span class="shop-item-title">Nastradamus</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1f/Nas-NastradamusAlbumCover.jpg/280px-Nas-NastradamusAlbumCover.jpg"
                             alt="Imaage" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <div class="d-none">Nastradamus</div>
                            <pre class="mb-4 text-uppercase moveNastradamus">Come Get Me<br>Shoot 'Em Up<br>The Prediction <br>Life We Chose <br>Nastradamus <br>Project Windows<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€25</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 5 -->
                <div class="shop-item" data-date="2001" data-price="20">
                    <span class="shop-item-title">Stillmatic</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Nas-stillmatic-music-album.jpg/280px-Nas-stillmatic-music-album.jpg"
                             alt="Imaage" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <pre class="mb-4 text25 text-uppercase">Rule<br>Ether<br>Smokin<br>Rewind <br>One Mic<br>You're da Man<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€20</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 6 -->
                <div class="shop-item" data-date="2002" data-price="23">
                    <span class="shop-item-title">The Lost Tapes</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5a/Nas-the-lost-tapes-lp.jpg/280px-Nas-the-lost-tapes-lp.jpg"
                             alt="Imaage" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <pre class="mb-4 text-uppercase moveTheLost">My Way<br>Purple<br>Blaze a 50<br>Doo Rags<br>No Idea's Original<br>Drunk by Myself<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€23</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 7 -->
                <div class="shop-item" data-date="2002-12-13" data-price="24">
                    <span class="shop-item-title">God's Son</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b5/Nas-gods-son-music-album.jpg/280px-Nas-gods-son-music-album.jpg"
                             alt="Imaage" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <div class="d-none">God's Son</div>
                            <pre class="mb-4 text-uppercase moveNastradamus">I Can<br>Get Down<br>The Cross<br>Made You Look<br>Zone Out<br>Hey Nas<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€24</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 8 -->
                <div class="shop-item" data-date="2004-11-30" data-price="11">
                    <span class="shop-item-title">Street's Disciple</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/57/StreetsDisciple.jpg/280px-StreetsDisciple.jpg"
                             alt="Imaage" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <pre class="mb-4 text-uppercase moveStreetDisciple">Getting Married<br>Bridging the Gap<br>Suicide Bounce<br>Street's Disciple<br>Remember the Times<br>No One Else in the Room<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€11</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 9 -->
                <div class="shop-item" data-date="2007-01-23" data-price="19">
                    <span class="shop-item-title">Hip Hop Is Dead</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/22/Hiphopisdead1.jpg/280px-Hiphopisdead1.jpg"
                             alt="Imaage" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <pre class="mb-4 text-uppercase moveHHisD">Hip Hop Is Dead<br>Who Killed It?<br>You Can't Kill Me <br>Carry on Tradition <br>Where Are They Now <br>Money Over Bullshit <br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€19</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 10 -->
                <div class="shop-item" data-date="2008-01-01" data-price="28">
                    <span class="shop-item-title">NAS</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/21/Nas_-_Untitled.jpg/280px-Nas_-_Untitled.jpg"
                             alt="Imaage" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <pre class="mb-4 text-uppercase moveNas">America<br>Sly Fox<br>Testify<br>Untitled<br>Fried Chicken<br>Queens Get the Money<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€28</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 11 -->
                <div class="shop-item" data-date="2018-06-15" data-price="10">
                    <span class="shop-item-title">NASIR</span>
                    <div class="team-member ">
                        <img src=" ../IMG/album3.jpg" alt="Imaage" class="img-fluid shop-item-image"
                             height="280" alt="Imaage">
                        <div class="text d-block font-weight-light">
                            <pre class="mb-4 text-uppercase moveNASIR">Bonjour<br>White Label<br>Simple Things<br>Adam and Eve<br>Not For Radio<br>Cops Shot the Kid<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€10</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- Shop items grid 12 -->
                <div class="shop-item" data-date="2019-07-19" data-price="29">
                    <span class="shop-item-title">THE LOST TAPES 2</span>
                    <div class="team-member">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/58/The_Lost_Tapes_II_by_Nas.jpg/280px-The_Lost_Tapes_II_by_Nas.jpg"
                             alt="Imaage" class="img-fluid shop-item-image">
                        <div class="text d-block font-weight-light">
                            <pre class="mb-4 text-uppercase text35">Tanasia<br>Royalty<br> Who Are You<br>No Bad Energy<br>Vernon Family<br>Lost Freestyle<br></pre>
                        </div>
                    </div>
                    <br>
                    <span class="shop-item-price">€29</span>
                    <div class="shop-item-details">
                        <pre>  </pre>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart -->
        <section class="container content-section">
            <h2 class="section-header mb-5 h2center">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>

            </div>

            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">€0</span>
            </div>
            <button class="btn btn-checkout btn-purchase"
                    onclick="location.href = 'https://justasmonkev.github.io/Web/WEB%20Project/PAGES/CHECKOUT.html';"
                    type="button">PROCEED TO CHECKOUT
            </button>

        </section>
        <!-- Footer -->
</div>
<footer>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="./js/shop.js"></script>
</body>
</html>