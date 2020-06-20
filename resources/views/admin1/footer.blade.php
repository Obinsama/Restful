
<!-- javascript placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{asset('js/utopia.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.hoverIntent.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.datatable.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tables.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.sparkline.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.vticker-min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ui/datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/upload/load-image.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/upload/image-gallery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.simpleWeather.js')}}"></script>
<script src="{{asset('js/jquery.validationEngine.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.validationEngine-en.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/maskedinput.js')}}"></script>
<script type="text/javascript" src="{{asset('js/chosen.jquery.js')}}"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAeTbCOpuPIKT4i9n8iUQsBHNUt_MWjtog&sensor=false"></script>
<script type="text/javascript" src="{{asset('js/gmap3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/header.js?v1')}}"></script>
<script type="text/javascript" src="{{asset('js/sidebar.js')}}"></script>

<script type="text/javascript">

    $(function() {

        $( "#utopia-dashboard-datepicker" ).datepicker().css({marginBottom:'20px'});

        jQuery("#validation").validationEngine();
        $("#phone").mask("(999) 9999999999");
        $(".chzn-select").chosen(); $(".chzn-select-deselect").chosen({allow_single_deselect:true});

        $.simpleWeather({
            zipcode: '10001',
            unit: 'f',
            success: function(weather) {
                html = '<h2>'+weather.city+', '+weather.region+'</h2>';
                html += '<img style="float:left" width="125px " src="'+weather.image+'">';
                html += '<p>'+weather.temp+'&deg; '+weather.units.temp+'<br /><span>'+weather.currently+'</span></p>';
                html += '<a href="'+weather.link+'">View Forecast &raquo;</a>';

                $("#utopia-dashboard-weather").css({marginBottom:'20px'}).html(html);
            },
            error: function(error) {
                $("#utopia-dashboard-weather").html('<p>'+error+'</p>');
            }
        });


        /* maps with route directions */
        $("#utopia-google-map-5").gmap3(
            { action:'getRoute',
                options:{
                    origin:'48 Pirrama Road, Pyrmont NSW',
                    destination:'Bondi Beach, NSW',
                    travelMode:google.maps.DirectionsTravelMode.DRIVING
                },
                callback:function (results) {
                    if (!results) return;
                    $(this).gmap3(
                        { action:'init',
                            zoom:13,
                            mapTypeId:google.maps.MapTypeId.ROADMAP,
                            streetViewControl:true,
                            center:[-33.879, 151.235]
                        },
                        { action:'addDirectionsRenderer',
                            options:{
                                preserveViewport:true,
                                draggable:false,
                                directions:results
                            }
                        }
                    );
                }
            }
        );
        /* maps with route directions end */

    });


    $("#utopia-sparkline-type1").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 9], {type:"line", height:48, width:140});

    $('.utopia-activity-feeds').vTicker({
        speed: 500,
        pause: 3000,
        animation: 'fade',
        height: 335,
        mousePause: true,
        showItems: 4
    });



</script>
</body>
</html>
