                        <ul id="myUL">
                            <!-- Title with underline-->
                            <div class="main-title-with-underline pb-4 mt-0">
                                <h4>categories</h4>
                            </div>
                            <!---  Furniture option-->
                            <li>
                                <div class="caret title">Product Categories</div>
                                <ul class="nested">
                                    @foreach($all_categories as $all_category)
                                    <li><a href="{{route('show_product_category',['id'=>$all_category->id])}}">{{$all_category->category_name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <!---  Color option End-->
                            <!---  Chairs & sofas-->
                            <!---  Chairs & sofas End-->

                            <!-- Title with underline-->
                            <div class="main-title-with-underline pb-4">
                                <h4>Shop by</h4>
                            </div>
                            <!---  color options-->
                            <li>
                                <div class="caret title">color options</div>
                                <ul class="nested">
                                    <li><a href="#">Black <span>(15)</span></a></li>
                                    <li><a href="#">White <span> (09)</span></a></li>
                                    <li><a href="#">Blue <span> (12)</span></a></li>
                                    <li><a href="#">Red<span> (4)</span></a></li>
                                    <li><a href="#">Screen<span> (05)</span></a></li>
                                </ul>
                            </li>
                            <!---  color options End-->
                            <!--- Size options-->
                            <li>
                                <div class="caret title">Size options</div>
                                <ul class="nested">
                                    <li><a href="#">l <span>(15)</span></a></li>
                                    <li><a href="#"> m <span> (09)</span></a></li>
                                    <li><a href="#">s <span> (12)</span></a></li>
                                    <li><a href="#">xl<span> (4)</span></a></li>
                                </ul>
                            </li>
                            <!---  Size options End-->
                            <li>
                                <div class="caret title">Beverages</div>
                                <ul class="nested">
                                    <li><a href="#">Chairs</a></li>
                                    <li><a href="#">Storage</a></li>
                                    <li>
                                        <div class="caret">Tea</div>
                                        <ul class="nested">
                                            <li><a href="#">Chairs</a></li>
                                            <li><a href="#">Storage</a></li>
                                            <li>
                                                <div class="caret">Green Tea</div>
                                                <ul class="nested">
                                                    <li><a href="#">Chairs</a></li>
                                                    <li><a href="#">Tables</a></li>
                                                    <li><a href="#">Office</a></li>
                                                    <li><a href="#">Storage</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <div class="main-title-with-underline pb-4">
                                <h4>Compare</h4>
                            </div>
                            <li>
                                <div class="caret title">Beverages</div>
                                <ul class="nested">
                                    <li><a href="#">l <span>(15)</span></a></li>
                                    <li><a href="#"> m <span> (09)</span></a></li>
                                    <li><a href="#">s <span> (12)</span></a></li>
                                    <li><a href="#">xl<span> (4)</span></a></li>
                                    <li>
                                        <div class="caret">Tea</div>
                                        <ul class="nested">
                                            <li><a href="#">l <span>(15)</span></a></li>
                                            <li><a href="#"> m <span> (09)</span></a></li>
                                            <li><a href="#">s <span> (12)</span></a></li>
                                            <li><a href="#">xl<span> (4)</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!---  Color option-->
                            <li>
                                <div class="caret title">color options</div>
                                <ul class="nested">
                                    <li><a href="#">Black <span>(15)</span></a></li>
                                    <li><a href="#">White <span> (09)</span></a></li>
                                    <li><a href="#">Blue <span> (12)</span></a></li>
                                    <li><a href="#">Red<span> (4)</span></a></li>
                                    <li><a href="#">Screen<span> (05)</span></a></li>

                                </ul>
                            </li>
                            <!---  Color option-->
                            <li>
                                <div class="caret title">color options</div>
                                <ul class="nested">
                                    <li><a href="#">Black <span>(15)</span></a></li>
                                    <li><a href="#">White <span> (09)</span></a></li>
                                    <li><a href="#">Blue <span> (12)</span></a></li>
                                    <li><a href="#">Red<span> (4)</span></a></li>
                                    <li><a href="#">Screen<span> (05)</span></a></li>

                                </ul>
                            </li>
                            <!---  Color option End-->
                        </ul>
                    </div>