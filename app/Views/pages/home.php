<div class="container-fluid back_ground">   
    <div class="topnav">
        <a href="#"><h2> <i class="fas fa-skull bg-secondary"></i> E<span class="ice">C</span>OMMER<span class="ice">C</span>E</h2></a>
        <a class="active" href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="<?php echo base_url('panier/banier');?>"><i class="fas fa-shopping-cart text-info"></i></a>
        <a href=""><i class="fas fa-search"></i></a>
        <!-- <a href=""><i class="fas text-danger fa-power-off"></i></a> -->
        <a href="<?php echo base_url('home/register') ;?>">register</a>
        <a href="<?php echo base_url('admin/index') ?>" class="bg-secondary">admin</a>

    
    <div>
            <!--  -->
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        <div id="id01" class="modal">
                    
            <form class="modal-content animate" action="<?php echo base_url('home/check') ;?>" method="post">
            <?= csrf_field() ?>
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="http://localhost/Commerce/public/images/cta06.jpg" alt="Avatar" class="avatar">
                </div>
                <div class="container">
                    <form action="<?php echo base_url('home/check') ;?>" method="post">
                    <?= csrf_field() ?>
                       <label for="email"><b>pseudo</b></label>
                        <input type="text" placeholder="your email" name="email" required>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '';?></span>

                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '';?></span>
                            
                        <button type="submit" name="login1">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </form>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#" class="text-success">password?</a></span>
                </div>
            </form>
        </div>
            <!--  -->
        </div>
    </div>
    <div class="row ml-2 hello">
        <div class="col-md-8 celo">
            <div class="grandTitre" id="steeven">
                <header >
                    <h1 class="ecommerce">eCOMMERCE</h1>
                </header>
                <div class="tsipika mb-5">
                    <p class="text-white paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est</p>
                    <p class="text-white paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est sicing elit. Est</p>
                    <p class="text-white paragraphe ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Estsicing elit</p>
                </div>
                <div class="tsipika2"></div>
                <div class="row m-5">
                    <!-- <div class="col-md-4"><span class="produit1">Notre produit</span></div>
                    <div class="col-md-4"><span class="produit1">Notre produit</span></div>
                    <div class="col-md-4"><span class="produit1">Notre produit</span></div> -->
                    <div class="col-4 produit1"><a href="<?php echo base_url('auth/index') ?>">PRODUIT</a></div>
                    <div class="col-4 produit1"><a href="#">VENTE</a></div>
                    <div class="col-4 produit1"><a href="#">ACHAT</a></div>
                </div>
            </div>
        </div>
        <!--  -->
        <!-- <div class="col-md-4 col-md-offset-4 shadow login" id="login">
                <h4 class="h4" style="text-align:center; color:red ; font-family:gras">Sign up</h4>
                <form>
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name" placeholder="enter username">
                    </div>
                    <div class="form-group">
                        <label for="">pseudo</label>
                        <input type="text" class="form-control" name="pseudo" placeholder="enter your pseudo">
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="text" class="form-control" name="email" placeholder="enter your email">
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" >
                    </div>
                    <div class="form-group">
                        <label for="">confirm password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="confirm password" >
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary form-control mt-3 btn-block" id="btn-register" name="btn-register" type="submit">Register</button>
                    </div>
                </form>
            </div>         -->
        <!--  -->
        <div class="col-md-4 col-md-offset-4 mt-5">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 shadow  mt-5" style="border:1px solid;border-raduis:10px;color:white" id="login">
                    <header>
                        <h4>lorem upsem</h4>
                        <p>lorem lorem lorem</p>
                        <p>lorem lorem lorem</p>
                    </header>
                    <section>
                        <img src="http://localhost/Commerce/public/images/cta03.jpg" alt="" srcset="" style="width:100%;height:100px;border-raduis:20px">
                    </section>
                    <footer>
                        <p>lorem lorem lorem</p>
                        <p>lorem lorem lorem</p>
                    </footer>
                </div>
                <div class="col-4"></div>
            </div>
        </div>              


    </div>              
</div>
<div class="container-fluid">
    <div class="container">
       <div class="row" id="service2">
        <div class="service">
            <h2 class="text-center mt-3 p-3">Our Service</h2>
            <div class="regle mb-5"></div>
        </div>
            <div class="col-md-4">
                <h3>Fade in Overlay</h3>
                    <p>Hover over the image to see the effect.</p>
                     <div class="container">
                        <img src="http://localhost/Commerce/public/images/cta03.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <!-- <div class="text">steeve</div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Fade in Overlay</h3>
                    <p>Hover over the image to see the effect.</p>
                     <div class="container">
                        <img src="http://localhost/Commerce/public/images/cta03.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <!-- <div class="text">steeve</div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Fade in Overlay</h3>
                    <p>Hover over the image to see the effect.</p>
                     <div class="container">
                        <img src="http://localhost/Commerce/public/images/cta03.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <!-- <div class="text">steeve</div> -->
                    </div>
                </div>
            </div>
       </div>
    </div>

    <div class="container">
       <div class="row">
        <div class="service">
        </div>
            <div class="col-md-4">
                <h3>Fade in Overlay</h3>
                    <p>Hover over the image to see the effect.</p>
                     <div class="container">
                        <img src="http://localhost/Commerce/public/images/cta03.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">steeve</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Fade in Overlay</h3>
                    <p>Hover over the image to see the effect.</p>
                     <div class="container">
                        <img src="http://localhost/Commerce/public/images/cta03.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">teeve</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Fade in Overlay</h3>
                    <p>Hover over the image to see the effect.</p>
                     <div class="container">
                        <img src="http://localhost/Commerce/public/images/cta03.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">steeve</div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
<div class="container-fluid m-5 p-3 bg-dark">
    <div class="container">
        <div class="service">
            <h2 class="text-center mt-3 p-3 text-white">Our Product</h2>
            <div class="regle mb-5"></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h2 style="text-align:center text-white">Product</h2>
                <div class="card">
                    <img src="http://localhost/Commerce/public/images/port01.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p> -->
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
            <div class="col-md-3">
                <h2 style="text-align:center">Product</h2>
                <div class="card">
                    <img src="http://localhost/Commerce/public/images/port02.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p> -->
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
            <div class="col-md-3">
                <h2 style="text-align:center">Product</h2>
                <div class="card">
                    <img src="http://localhost/Commerce/public/images/port03.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p> -->
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
            <div class="col-md-3">
                <h2 style="text-align:center">Product</h2>
                <div class="card">
                    <img src="http://localhost/Commerce/public/images/port04.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p> -->
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row m-3">
            <div class="col-md-3">
                <h2 style="text-align:center">Product</h2>
                <div class="card">
                    <img src="http://localhost/Commerce/public/images/port05.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
            <div class="col-md-3">
                <h2 style="text-align:center">Product</h2>
                <div class="card">
                    <img src="http://localhost/Commerce/public/images/port06.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
            <div class="col-md-3">
                <h2 style="text-align:center">Product</h2>
                <div class="card">
                    <img src="http://localhost/Commerce/public/images/port01.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
            <div class="col-md-3">
                <h2 style="text-align:center">Product</h2>
                <div class="card">
                    <img src="http://localhost/Commerce/public/images/port03.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                    <p><button>Add to Cart</button></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluig" style="widht: 100px;height:600px;">
    <h2 class="text-center mt-3 p-3 text-black">choose our plan</h2>
    <p class="text-center text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident facilis temp.</p>
    <div class="container">
       <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row mt-3  shadow ">
                        <div class="col-md-3">
                            <aside class="aside">01</aside>
                            <div class="" style="margin-right:53px">
                                <h4 class="m-2 text-center">economie</h4>
                                    <hr>
                                    <p class="m-1 text-center">blzblzblzblz</p>
                                    <hr>
                                    <p class="m-3 text-center">blzblzblzblzbbhhg</p>
                                    <hr>
                                    <p class="mt-1 text-center">blzblzblzblzbbbjj</p>
                                    <hr>
                                    <p class="mt-1 text-center">blzblzblzblzbbbhyuuj</p>
                            </div>
                            <div class="text-center mt-4" style="margin-right:30px">$99.999</div>
                        </div>
                        <div class="col-md-3  shadow">
                            <aside class="aside">02</aside>
                            <div class="" style="margin-right:53px">
                                <h4 class="m-2 text-center">economie</h4>
                                    <hr>
                                    <p class="m-1 text-center">blzblzblzblz</p>
                                    <hr>
                                    <p class="m-3 text-center">blzblzblzblzbbhhg</p>
                                    <hr>
                                    <p class="mt-1 text-center">blzblzblzblzbbbjj</p>
                                    <hr>
                                    <p class="mt-1 text-center">blzblzblzblzbbbhyuuj</p>
                            </div>
                            <div class="text-center mt-4" style="margin-right:30px">$99.999</div>
                        </div>
                        <div class="col-md-3 shadow">
                            <aside class="aside">03</aside>
                            <div class="" style="margin-right:53px">
                                <h4 class="m-2 text-center">economie</h4>
                                    <hr>
                                    <p class="m-1 text-center">blzblzblzblz</p>
                                    <hr>
                                    <p class="m-3 text-center">blzblzblzblzbbhhg</p>
                                    <hr>
                                    <p class="mt-1 text-center">blzblzblzblzbbbjj</p>
                                    <hr>
                                    <p class="mt-1 text-center">blzblzblzblzbbbhyuuj</p>
                            </div>
                            <div class="text-center mt-4" style="margin-right:30px">$99.999</div>
                        </div>
                        <div class="col-md-3 ">
                            <aside class="aside">04</aside>
                            <div class="" style="margin-right:53px">
                                <h4 class="m-2 text-center">economie</h4>
                                    <hr>
                                    <p class="m-1 text-center">blzblzblzblz</p>
                                    <hr>
                                    <p class="m-3 text-center">blzblzblzblzbbhhg</p>
                                    <hr>
                                    <p class="mt-1 text-center">blzblzblzblzbbbjj</p>
                                    <hr>
                                    <p class="mt-1 text-center">blzblzblzblzbbbhyuuj</p>
                            </div>
                            <div class="text-center mt-4" style="margin-right:30px">$99.999</div>
                        </div>
                    </div>
                </div>
            <div class="col-md-1"></div>
       </div>
    </div>
</div>
<div class="container-fluid bg-info" style="widht: 100px;height:500px;">
    <div class="container">
        <div class="row ">
            <div class="service">
                <h2 class="text-center mt-3 p-3 text-white">Us Contacts</h2>
                <div class="regle mb-5"></div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4 m-3">
                <div class="mt-3">
                    <span class="m-2 p-1"><i class="fas fa-warehouse"></i> Madagascar city</span>
                </div>
                <div class="m-3">
                     <span class="m-2 p-1"><i class="fas fa-phone"></i> (+261)34 25 025 25</span>
                </div>
                <div class="m-3">
                    <span class="m-2 p-1"><i class="fas fa-facebook-f"></i> Ste ven</span>
                </div>
                <div class="m-3">
                    <span class="m-2 p-1"><i class="fas fa-envelope"></i> steven@gmail.com</span>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <form action="" method="post">
                        <input type="text" placeholder="your name">
                        <input type="text" placeholder="E-mail">
                        <input type="text" placeholder="objet">
                        <input type="textarea" placeholder="messae">
                        <hr>
                        <input class="btn btn-block btn-outline-primary" type="button" value="send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    // include "produit.php";

?>