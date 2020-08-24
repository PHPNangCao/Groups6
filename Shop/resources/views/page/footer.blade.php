<div id="footer" class="color-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    
                </div>
            </div>
            <div class="col-sm-2">
                <div class="widget">
                    <h4 class="widget-title">Danh Mục</h4>
                    <div>
                        <ul>
                            @foreach ($category as $cat)
                        <li><a href="{{route('loai-san-pham',$cat->id)}}"><i class="fa fa-chevron-right"></i>{{$cat->name}}</a></li>                         
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
             <div class="col-sm-10">
                <div class="widget">
                    <h4 class="widget-title">LIÊN HỆ</h4>
                    <div>
                        <div class="contact-info">
                            <i class="fa fa-map-marker"></i>
                            <p>Công viên phần mềm Quang Trung, Điện thoại: 0349.394.368</p>
                            <p>Trường Cao Đẳng Viễn Đông - Đồ án tốt nghiệp Laravel năm 2020.</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Facebooks</h4>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fviendong.edu&tabs&width=340&height=214&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer -->