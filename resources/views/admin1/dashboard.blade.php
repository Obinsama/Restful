@extends('admin.layout')

@section('dashboard')

        <!-- Body start -->
            <div class="span10 body-container">

                <div class="row-fluid">

                    <!--Chart Icons -->
                    <div class="span3">
                        <div class="utopia-chart-legend">
                            <div class="utopia-chart-icon">
                                <img src="img/icons2/access_point.png">
                            </div>
                            <div class="utopia-chart-heading">191</div>
                            <div class="utopia-chart-desc">USERS CONNECTED</div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="utopia-chart-legend">
                            <div class="utopia-chart-icon">
                                <img src="img/icons2/clock.png">
                            </div>
                            <div class="utopia-chart-heading">2191</div>
                            <div class="utopia-chart-desc">HOURS SPENT</div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="utopia-chart-legend">
                            <div class="utopia-chart-icon">
                                <img src="img/icons2/download2.png">
                            </div>
                            <div class="utopia-chart-heading">33214</div>
                            <div class="utopia-chart-desc">Downloads</div>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="utopia-chart-legend">
                            <div class="utopia-chart-icon">
                                <img src="img/icons2/coin.png">
                            </div>
                            <div class="utopia-chart-heading">10894</div>
                            <div class="utopia-chart-desc">SAVED</div>
                        </div>
                    </div>
                    <!--Chart Icons End -->
                </div>


                <div class="row-fluid">

                    <div class="span12">

                        <div class="row-fluid">

                            <div class="span9">
                                <div class="row-fluid">

                                    <div class="span12">

                                        <section class="utopia-widget">
                                            <div class="utopia-widget-title">
                                                <img src="img/icons/paragraph_justify.png" class="utopia-widget-icon">
                                                <span>static table</span>
                                            </div>

                                            <div class="utopia-widget-content">

                                                <table class="table table-bordered">

                                                    <colgroup>
                                                        <col class="utopia-col-0">
                                                        <col class="utopia-col-1">
                                                        <col class="utopia-col-0">
                                                        <col class="utopia-col-1">
                                                        <col class="utopia-col-0">
                                                    </colgroup>

                                                    <thead>
                                                    <tr>
                                                        <th><input class="utopia-check-all" type="checkbox"></th>
                                                        <th>Rendering engine</th>
                                                        <th>Browser</th>
                                                        <th>Platform(s)</th>
                                                        <th>CSS grade</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Other browsers</td>
                                                        <td>All others</td>
                                                        <td>-</td>
                                                        <td>U</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Trident</td>
                                                        <td>AOL browser (AOL desktop)</td>
                                                        <td>Win XP</td>
                                                        <td>A</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Gecko</td>
                                                        <td>Camino 1.0</td>
                                                        <td>OSX.2+</td>
                                                        <td>A</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Gecko</td>
                                                        <td>Camino 1.5</td>
                                                        <td>OSX.3+</td>
                                                        <td>A</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Misc</td>
                                                        <td>Dillo 0.8</td>
                                                        <td>Embedded devices</td>
                                                        <td>X</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Gecko</td>
                                                        <td>Epiphany 2.20</td>
                                                        <td>Gnome</td>
                                                        <td>A</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>A</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Gecko</td>
                                                        <td>Firefox 1.5</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>A</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Gecko</td>
                                                        <td>Firefox 2.0</td>
                                                        <td>Win 98+ / OSX.2+</td>
                                                        <td>A</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input class="chkbox" type="checkbox" name="checkbox[]"></td>
                                                        <td>Gecko</td>
                                                        <td>Firefox 3.0</td>
                                                        <td>Win 2k+ / OSX.3+</td>
                                                        <td>A</td>
                                                    </tr>

                                                    </tbody>
                                                </table>

                                                <div class="utopia-table-action">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn"><i class="icon-cog"></i> Actions</a>
                                                        <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#"><i class="icon-eye-open"></i> View</a></li>
                                                            <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </section>

                                    </div>

                                </div>

                                <div class="row-fluid">
                                    <div class="span12">

                                        <section class="utopia-widget">
                                            <div class="utopia-widget-title">
                                                <img src="img/icons/satellite.png" class="utopia-widget-icon">
                                                <span>maps with route directions</span>
                                            </div>

                                            <div class="utopia-widget-content">
                                                <div class="utopia-map-wrapper">
                                                    <div id="utopia-google-map-5" class="utopia-map"></div>
                                                    <div class="utopia-map-details">
                                                        <div class="utopia-map-description">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et tempus elit.
                                                                Duis pharetra blandit risus, a condimentum ipsum ultricies nec. Integer accumsan
                                                                neque nec augue dictum sit amet dignissim tortor scelerisque.
                                                            </p>
                                                        </div>
                                                        <div class="utopia-map-action">
                                                            <img src="img/icons2/sun.png"/>
                                                            <img src="img/icons2/world.png"/>
                                                            <img src="img/icons2/cloud.png"/>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>


                                <!-- image gallery  Starts-->

                                <div class="row-fluid">
                                    <div class="span12">
                                            <section class="utopia-widget">
                                                <div class="utopia-widget-title">
                                                    <img src="img/icons/photo_album.png" class="utopia-widget-icon">
                                                    <span>image gallery</span>
                                                </div>

                                                <div class="utopia-widget-content">
                                                    <!-- modal-gallery is the modal dialog used for the image gallery -->
                                                    <div id="modal-gallery" class="modal modal-gallery hide fade">
                                                        <div class="modal-header">
                                                            <a class="close" data-dismiss="modal">&times;</a>

                                                            <h3 class="modal-title">Image Gallery</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="modal-image"></div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a class="btn modal-download" target="_blank">
                                                                <i class="icon-download"></i>
                                                                <span>Download</span>
                                                            </a>
                                                            <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000">
                                                                <i class="icon-play icon-white"></i>
                                                                <span>Slideshow</span>
                                                            </a>
                                                            <a class="btn btn-info modal-prev">
                                                                <i class="icon-arrow-left icon-white"></i>
                                                                <span>Previous</span>
                                                            </a>
                                                            <a class="btn btn-primary modal-next">
                                                                <span>Next</span>
                                                                <i class="icon-arrow-right icon-white"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
                                                        <a href="img/fullsize/01.jpg" rel="gallery"><img src="img/thumbnails/100x67/01.jpg"></a>
                                                        <a href="img/fullsize/02.jpg" rel="gallery"><img src="img/thumbnails/100x67/02.jpg"></a>
                                                        <a href="img/fullsize/03.jpg" rel="gallery"><img src="img/thumbnails/100x67/03.jpg"></a>
                                                        <a href="img/fullsize/04.jpg" rel="gallery"><img src="img/thumbnails/100x67/04.jpg"></a>
                                                        <a href="img/fullsize/05.jpg" rel="gallery"><img src="img/thumbnails/100x67/05.jpg"></a>
                                                        <a href="img/fullsize/06.jpg" rel="gallery"><img src="img/thumbnails/100x67/06.jpg"></a>
                                                        <a href="img/fullsize/07.jpg" rel="gallery"><img src="img/thumbnails/100x67/07.jpg"></a>
                                                        <a href="img/fullsize/08.jpg" rel="gallery"><img src="img/thumbnails/100x67/08.jpg"></a>
                                                        <a href="img/fullsize/09.jpg" rel="gallery"><img src="img/thumbnails/100x67/09.jpg"></a>
                                                        <a href="img/fullsize/10.jpg" rel="gallery"><img src="img/thumbnails/100x67/10.jpg"></a>
                                                        <a href="img/fullsize/11.jpg" rel="gallery"><img src="img/thumbnails/100x67/11.jpg"></a>
                                                        <a href="img/fullsize/12.jpg" rel="gallery"><img src="img/thumbnails/100x67/12.jpg"></a>
                                                        <a href="img/fullsize/14.jpg" rel="gallery"><img src="img/thumbnails/100x67/14.jpg"></a>
                                                        <a href="img/fullsize/18.jpg" rel="gallery"><img src="img/thumbnails/100x67/18.jpg"></a>
                                                        <a href="img/fullsize/01.jpg" rel="gallery"><img src="img/thumbnails/100x67/01.jpg"></a>
                                                        <a href="img/fullsize/02.jpg" rel="gallery"><img src="img/thumbnails/100x67/02.jpg"></a>
                                                        <a href="img/fullsize/03.jpg" rel="gallery"><img src="img/thumbnails/100x67/03.jpg"></a>
                                                        <a href="img/fullsize/04.jpg" rel="gallery"><img src="img/thumbnails/100x67/04.jpg"></a>
                                                        <a href="img/fullsize/05.jpg" rel="gallery"><img src="img/thumbnails/100x67/05.jpg"></a>
                                                        <a href="img/fullsize/06.jpg" rel="gallery"><img src="img/thumbnails/100x67/06.jpg"></a>
                                                        <a href="img/fullsize/07.jpg" rel="gallery"><img src="img/thumbnails/100x67/07.jpg"></a>
                                                        <a href="img/fullsize/08.jpg" rel="gallery"><img src="img/thumbnails/100x67/08.jpg"></a>
                                                        <a href="img/fullsize/09.jpg" rel="gallery"><img src="img/thumbnails/100x67/09.jpg"></a>
                                                        <a href="img/fullsize/10.jpg" rel="gallery"><img src="img/thumbnails/100x67/10.jpg"></a>
                                                        <a href="img/fullsize/11.jpg" rel="gallery"><img src="img/thumbnails/100x67/11.jpg"></a>
                                                        <a href="img/fullsize/12.jpg" rel="gallery"><img src="img/thumbnails/100x67/12.jpg"></a>
                                                        <a href="img/fullsize/18.jpg" rel="gallery"><img src="img/thumbnails/100x67/18.jpg"></a>
                                                    </div>
                                                </div>
                                            </section>
                                     </div>
                                </div>
                                <!-- image gallery  ends-->


                            </div><!-- Mid panel -->

                            <div class="span3">

                                <div class="row-fluid">

                                    <div class="span12">

                                        <div class="utopia-chart-legend">
                                            <div class="utopia-chart-sparkline" id="utopia-sparkline-type1">
                                            </div>
                                            <div class="utopia-chart-heading">LINE</div>
                                            <div class="utopia-chart-desc">SPARKLINE</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row-fluid">
                                    <div class="span12">
                                        <div id="utopia-dashboard-weather">

                                        </div>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="span12">

                                        <div id="utopia-dashboard-datepicker">

                                        </div>

                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="span12">

                                        <div class="alert alert-success">
                                            <a class="close" data-dismiss="alert" href="#">×</a>
                                            You <strong>successfully</strong> read this important alert message.
                                        </div>
                                        <div class="alert alert-info">
                                            <a class="close" data-dismiss="alert" href="#">×</a>
                                            This alert needs your <strong>attention</strong>.
                                        </div>
                                        <div class="alert alert-block">
                                            <a class="close" data-dismiss="alert" href="#">×</a>
                                            This a <strong>Warning!</strong> message.
                                        </div>

                                        <div class="alert alert-error">
                                            <a class="close" data-dismiss="alert" href="#">×</a>
                                            It's an <strong>Error!</strong> message.
                                        </div>

                                    </div>
                                </div>

                            </div><!-- Right panel -->

                        </div>

                    </div>

                </div>


                <div class="row-fluid">

                    <div class="span6">

                        <section class="utopia-widget">
                            <div class="utopia-widget-title">
                                <img src="img/icons/font_size.png" class="utopia-widget-icon">
                                <span>contact form</span>
                            </div>

                            <div class="utopia-widget-content utopia-chosen-form">
                                <form id="validation" action="javascript:void(0)" class="utopia-form-freeSpace form-horizontal">
                                    <fieldset>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Title*:</label>

                                            <div class="controls">
                                                <input id="input01" class="input-fluid validate[required]" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputError"> Contact email*:</label>

                                            <div class="controls">
                                                <input id="inputError" class="input-fluid validate[required,custom[email]]" type="text" value="jon.com"><br>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="phone">Contact phone*:</label>

                                            <div class="controls">
                                                <input id="phone" class="input-fluid  validate[required, custom[phone]]" type="text" value=""><br/>
                                                <span class="help-inline">Must be (xxx) xxxxxxxxxx</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="select02">Category:</label>

                                            <div class="controls sample-form-chosen">
                                                <select id="select02" data-placeholder="Select your category" style="width:82.5%;" class="chzn-select-deselect" tabindex="7">
                                                    <option value=""></option>
                                                    <option value="Zimbabwe">Mac</option>
                                                    <option value="Zimbabwe">Linux</option>
                                                    <option value="Zimbabwe">Debian</option>
                                                    <option value="Zimbabwe">Ubuntu</option>
                                                    <option value="Zimbabwe">Gnome 3</option>
                                                    <option value="Zimbabwe">Windows</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input" >Message:</label>

                                            <div class="controls utopia-dashbord-cleditor">
                                                <textarea id="input" class="input-fluid" name="input"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </section>

                    </div>


                    <div class="span6">
                        <section class="utopia-widget">
                            <div class="utopia-widget-title">
                                <img src="img/icons/pyramid.png" class="utopia-widget-icon">
                                <span>activity</span>
                            </div>

                            <div class="utopia-widget-content">

                                <div class="utopia-activity-feeds">
                                    <ul>
                                        <li>
                                            <div class="text">
                                                <p><span class="label label-success">smronju</span> Posted on tumblr blog.</p>
                                            </div>

                                            <div class="info">
                                                <span>Type:</span> <a class="tooltipA" href="#" data-original-title="visit smronju's blog" rel="tooltip">blog</a>
                                                <span>Status:</span> <a class="tooltipA" href="#" data-original-title="anyone can view" rel="tooltip">open</a>
                                                <span class="date">May, 25 2012 2:00pm</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="text">
                                                <p><span class="label">hasinhayder</span> Commented on smronju's blog post.</p>
                                            </div>

                                            <div class="info">
                                                <span>Type:</span> <a class="tooltipA" href="#" data-original-title="visit smronju's blog" rel="tooltip">blog</a>
                                                <span>Status:</span> <a class="tooltipA" href="#" data-original-title="anyone can view" rel="tooltip">open</a>
                                                <span class="date">May, 25 2012 2:00pm</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="text">
                                                <p><span class="label label-info">smronju</span> Updated his blog post.</p>
                                            </div>

                                            <div class="info">
                                                <span>Type:</span> <a class="tooltipA" href="#" data-original-title="visit smronju's blog" rel="tooltip">blog</a>
                                                <span>Status:</span> <a class="tooltipA" href="#" data-original-title="anyone can view" rel="tooltip">open</a>
                                                <span class="date">May, 25 2012 2:00pm</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="text">
                                                <p><span class="label">hasinhayder</span> Replied on smronju's blog post comment.</p>
                                            </div>

                                            <div class="info">
                                                <span>Type:</span> <a class="tooltipA" href="#" data-original-title="visit smronju's blog" rel="tooltip">blog</a>
                                                <span>Status:</span> <a class="tooltipA" href="#" data-original-title="anyone can view" rel="tooltip">open</a>
                                                <span class="date">May, 25 2012 2:00pm</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        <!-- Body end -->

@endsection
