    <div id="home" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#home" data-slide-to="0" class="active"></li>
            <li data-target="#home" data-slide-to="1"></li>
            <li data-target="#home" data-slide-to="2"></li>
            <li data-target="#home" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img style="width:100%; height:100%;" src="images/img1.jpg" alt="Landscape 1">
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <img style="width:100%; height:100%;" src="images/img2.jpg" alt="Landscape 2">
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <img style="width:100%; height:100%;" src="images/img3.jpg" alt="Landscape 2">
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <img style="width:100%; height:100%;" src="images/img4.jpg" alt="Landscape 2">
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#home" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="text-center">
                <h2>About</h2>
                <hr/>
                <img src="images/img2.jpg" class="img-circle" width="140" height="140"/>
                <p class="text-justify" style="letter-spacing:1px;">
                    Lorem ipsum dolor sit amet, meis lorem vim ad, lorem sententiae definiebas sit ei. Ea summo erroribus nec, an quot consulatu nec, an duo novum quodsi vivendo. Et usu eleifend prodesset, id nisl appareat adipiscing cum. Amet malorum assueverit sed at, ut quod regione gubergren duo. Mei ad epicuri efficiantur, omnes nostro te per.
                    At choro comprehensam eam. Ancillae moderatius ad per. Ex pri dolor fastidii epicurei, error dolor pro te. Vel ex dicant deterruisset, nam ex nemore dissentias consectetuer. Ad diam clita conceptam vis.

                    Mei ut iusto epicurei interpretaris, ex vide inani appetere vel. An option forensibus usu, ex sit illum debitis appetere. Eros soluta sensibus cu usu, tamquam offendit similique eu duo. Sed ex eius solum, sale convenire neglegentur usu no. Ubique persius ut vix, ad vim assum ornatus. No quot semper mentitum nam, cum legendos torquatos in. Cibo feugait sea ex, rebum everti tractatos ne his.
                </p>
            </div>
        </div>
    </div>
    
    <div id="gallery" class="gallery">
        <div class="container">
            <div class="text-center">
                <h2>Gallery</h2>
                <hr/>

                <!-- Single button -->
                <div class="category">
                    <ul class="list-inline">
                        <li><label class="btn btn-default">Category: </label></li>
                        <li>
                            <select class="form-control" id="selection">
                                <option rel="panel-landscape">Landscape</option>
                                <option rel="panel-culture">Culture</option>
                                <option rel="panel-event">Event</option>
                                <option rel="panel-others">Others</option>
                            </select>
                        </li>
                    </ul>
                </div>
                
                <div id="panel-landscape" class="thumbnails active">
                    <div class="row images">
                        <div class="col-md-6" ng-repeat="image in images | filter:{category:'landscape', isActive:'true'}">
                            <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                                <img style="width:100%; height:100%;" ng-src="images/{{image.img_name}}" class="img-responsive" />
                            </a>
                            <div class="caption">
                                <h4>{{image.title}}</h4>
                                <p>{{image.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="panel-culture" class="thumbnails">
                    <div class="row images">
                        <div class="col-md-6" ng-repeat="image in images | filter:{category:'culture', isActive:'true'}">
                            <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                                <img ng-src="images/{{image.img_name}}" class="img-responsive" />
                            </a>
                            <div class="caption">
                                <h4>{{image.title}}</h4>
                                <p>{{image.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="panel-event" class="thumbnails">
                    <div class="row images">
                        <div class="col-md-6" ng-repeat="image in images | filter:{category:'landscape', isActive:'true'}">
                            <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                                <img ng-src="images/{{image.img_name}}" class="img-responsive" />
                            </a>
                            <div class="caption">
                                <h4>{{image.title}}</h4>
                                <p>{{image.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="panel-others" class="thumbnails">
                    <div class="row images">
                        <div class="col-md-6" ng-repeat="image in images | filter:{category:'culture', isActive:'true'}">
                            <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                                <img ng-src="images/{{image.img_name}}" class="img-responsive" />
                            </a>
                            <div class="caption">
                                <h4>{{image.title}}</h4>
                                <p>{{image.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-info" href="#" role="button">View More <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>

    <div id="contact" class="contact">
        <div class="container">   
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact</h2>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="email" class="form-control" id="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Your Phone Number">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Viewer Modal -->
    <div class="modal fade" id="imgMod" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="divs">
            <div class="cells">
                <div class="slide">
                    <img ng-src="" class="img-responsive" alt="Image 1"/>
                </div>
            </div>
        </div>
        <div class="top-bar">
            <p class="left"><span class="order">0</span>/<span class="total">0</span></p>
            <div class="right exit">
                <button class="btn btn-default">
                    Close <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="right autoSlide">
                <button class="btn btn-default">
                    Auto Slide <i class="fa fa-refresh"></i>
                </button>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="caption">
                <span>Caption</span>
            </div>
        </div>
        <div class="arrow-left">
            <div class="arrow"><i class="previous fa fa-arrow-left"></i></div>
        </div>
        <div class="arrow-right">
            <div class="arrow"><i class="next fa fa-arrow-right"></i></div>
        </div>
    </div>