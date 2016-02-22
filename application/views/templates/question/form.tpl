{include file="common/header.tpl"}
{assign var="base" value="http://localhost/manavi/"}

{literal}
    <script type="text/javascript">

        var stMarker;
        var edMarker;
        var stP;
        var edP;
        var map_canvas;
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
    {/literal}
        $(function () {
            /* レンダーDatePicker UI */
            //$.datepicker.setDefaults($.extend($.datepicker.regional['ja']));
            //$('.datepicker').datepicker({ showAnim:'slideDown', dateFormat:'yy-mm-dd' });
            var initPos = new google.maps.LatLng(42.804882, 140.687429);
            var myOptions = {
                noClear: true,
                center: initPos,
                zoom: 10,
                //mapTypeId: google.maps.MapTypeId.TERRAIN, // 地図の種別
                scaleControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map_canvas = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            directionsDisplay.setMap(map_canvas);
            var kmlOptions = {
                preserveViewport: true
            }
            var kmlUrl = 'http://www.snowwhite.hokkaido.jp/minavicms/material/place.kml';
            var kmlLayer = new google.maps.KmlLayer({
                url: kmlUrl,
                map: map_canvas
            });
            //地図クリックイベントの登録
            google.maps.event.addListener(map_canvas, 'click',
                    function (event) {
                        clickMapObject(event, 0);
                    })

            google.maps.event.addListener(kmlLayer, 'click', function (event) {
                clickMapObject(event, 1)
            });
        });
        function clickMapObject(event, layerFlg) {
            if (stMarker && edMarker) {
                stMarker.setMap(null);
                edMarker.setMap(null);
                stMarker = null;
                edMarker = null;
            } else if (!stMarker) {
                stP = event.latLng;
                stMarker = new google.maps.Marker({
                    position: event.latLng,
                    draggable: true,
                    map: map_canvas
                });
            } else if (!edMarker) {
                if (layerFlg == 0) {
                    alert('避難所を選択してください');
                } else {
                    edP = event.latLng;
                    edMarker = new google.maps.Marker({
                        position: event.latLng,
                        draggable: true,
                        map: map_canvas
                    });
                    infotable(stMarker.getPosition().lat(),
                            edMarker.getPosition().lng());
                    var request = {
                        origin: stP, /* 出発地点 */
                        destination: edP, /* 到着地点 */
                        travelMode: google.maps.DirectionsTravelMode.WALKING	/* トラベルモード */
                    };
                    directionsService.route(request, function (response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                        }
                    });
                }
            }

        }

//HTMLtagを更新
        function infotable(lat, lon) {
            $("#lat").val(lat);
            $("#lon").val(lon);
        }
        ;
        function reloadMaker() {

            var initPos = new google.maps.LatLng(42.804704, 140.687493);
            var myOptions = {
                noClear: true,
                center: initPos,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.TERRAIN, // 地図の種別
                scaleControl: true
            };
            var map_canvas = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            /* ロード時に初期化 */
            var initPos = new google.maps.LatLng(42.804295, 140.679425);
            var marker = new google.maps.Marker({
                position: initPos, /* マーカーを立てる場所の緯度・経度 */
                map: map_canvas, /*マーカーを配置する地図オブジェクト */
                title: 'ニセコ'
            });
            // To add the marker to the map, call setMap();
            marker.setMap(map_canvas);
        }
    {literal}
    </script>
{/literal}

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">Sidebar</li>
                    <li><a href="#">Link</a></li>
                </ul>
            </div><!--well -->
        </div><!--/span-->

        <form action="{$base}Pointaccept/index" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">

            <div class="span9">
                <?php echo validation_errors('title'); ?>
                {*
                <div class="naviko">
                <img class="img-circle" src="{$base}common/images/naviko/01.png">
                </div><!--nabiko-->
                *}
                <h3 class="page-title">
                    場所 <small>場所を選択</small>
                    <table class="form">
                        <tr>
                            <th>タイトル</th>
                        </tr>
                        <tr>
                            <th>場所</th>
                        </tr>
                        <tr>
                            <td>
                                <div id="map_canvas" style="width:70%; height:800px;padding-left: 50px;"></div>
                                緯度：<input type="text" id="lon" name="lon">
                                経度：<input type="text" id="lat" name="lat">
                            </td>
                        </tr>
                    </table>
                </h3>

                {*
                <div class="file">
                <input type="file">
                </div><!--file-->
                <p><a href="confirm.html" class="btn btn-primary btn-large">確認画面に進む！</a></p>
                <hr>
                <h3 class="page-title">
                イラスト選択 <small>クリックしてイラストを選択！</small>
                <br />
                <select>
                <option selected>表情の種類を選択</option>
                <option>笑顔</option>
                <option>怒り</option>
                <option>喜怒哀楽無退二</option>
                </select>
                <div class="block-change"><i class="icon-th"></i></div>
                </h3>
                *}
                <p><input type="submit" value="決定！" class="btn btn-primary btn-large"></p>
                    {*
                    <div class="row-fluid shop-items">
                    <div class="span3">
                    <dl class="blue active">
                    <dt class="item-img">
                    <img class="img-circle" src="{$base}common/images/naviko/01.png">
                    <ul>
                    <li class="heading"><h2>笑顔</h2></li>
                    <li class="take-look">選択</li>
                    </ul>
                    </dt>
                    <dt class="price">選択中</dt>
                    </dl>
                    </div><!--span3 -->
                    <div class="span3">
                    <dl class="green">
                    <dt class="item-img">
                    <img class="img-circle" src="{$base}common/images/naviko/02.png">
                    <ul>
                    <li class="heading"><h2>ほげ</h2></li>
                    <li class="take-look">選択</li>
                    </ul>
                    </dt>
                    <dt class="price">選択中</dt>
                    </dl>
                    </div><!--span3 -->
                    <div class="span3">
                    <dl class="purple">
                    <dt class="item-img">
                    <img class="img-circle" src="{$base}common/images/naviko/03.png">
                    <ul>
                    <li class="heading"><h2>ほげ</h2></li>
                    <li class="take-look">選択</li>
                    </ul>
                    </dt>
                    <dt class="price">選択中</dt>
                    </dl>
                    </div><!--span3 -->
                    <div class="span3">
                    <dl class="yellow">
                    <dt class="item-img">
                    <img class="img-circle" src="{$base}common/images/naviko/04.png">
                    <ul>
                    <li class="heading"><h2>ほげ</h2></li>
                    <li class="take-look">選択</li>
                    </ul>
                    </dt>
                    <dt class="price">選択中</dt>
                    </dl>
                    </div><!--span3 -->
                    <div class="span3" style="margin-left:0;">
                    <dl class="green">
                    <dt class="item-img">
                    <img class="img-circle" src="{$base}common/images/naviko/05.png">
                    <ul>
                    <li class="heading"><h2>ほげ</h2></li>
                    <li class="take-look">選択</li>
                    </ul>
                    </dt>
                    <dt class="price">選択中</dt>
                    </dl>
                    </div><!--span3 -->
                    <div class="span3">
                    <dl class="purple">
                    <dt class="item-img">
                    <img class="img-circle" src="{$base}common/images/naviko/06.png">
                    <ul>
                    <li class="heading"><h2>ほげ</h2></li>
                    <li class="take-look">選択</li>
                    </ul>
                    </dt>
                    <dt class="price">選択中</dt>
                    </dl>
                    </div><!--span3 -->
                    <div class="span3">
                    <dl class="purple">
                    <dt class="item-img">
                    <img class="img-circle" src="{$base}common/images/naviko/07.png">
                    <ul>
                    <li class="heading"><h2>ほげ</h2></li>
                    <li class="take-look">選択</li>
                    </ul>
                    </dt>
                    <dt class="price">選択中</dt>
                    </dl>
                    </div><!--span3 -->
            
                    <div class="span3">
                    <dl class="purple">
                    <dt class="item-img">
                    <img class="img-circle" src="{$base}common/images/naviko/08.png">
                    <ul>
                    <li class="heading"><h2>ほげ</h2></li>
                    <li class="take-look">選択</li>
                    </ul>
                    </dt>
                    <dt class="price">選択中</dt>
                    </dl>
                    </div><!--span3 -->
                    </div><!--/row-->
                    *}
            </div><!--/span-->

        </form>

    </div><!--/row-->
    <hr>
</div><!--/.fluid-container-->

{include file="common/footer.tpl"}

