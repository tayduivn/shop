<div id="categorymenu">
    <nav class="subnav">
        <ul class="nav-pills categorymenu">
            <li><a class="active"  href="home">Trang chủ</a></li>
            <?php 
                $menu_lvl1 = DB::table('category')->where('parent_id',0)->get();
            ?>
            @foreach($menu_lvl1 as $m1)
            <li>
                 <?php 
                    $menu_lvl2 = DB::table('category')->where('parent_id',$m1->id)->get();  
                ?>
                <a href="category/{{$m1->id}}/{{$m1->slug}}">{{$m1->name}}</a>
                @if(count($menu_lvl2) > 0)
                <div>
                    <ul>
                        @foreach($menu_lvl2 as $m2)
                        <li>
                            <a href="category/{{$m2->id}}/{{$m2->slug}}">{{$m2->name}}</a>
                        </li>
                        @endforeach 
                    </ul>
                </div>
                @endif
            </li>
            @endforeach
            <li>
                <a href="intro">Giới thiệu</a>
            </li>
            <li>
                <a href="contact">Liên hệ</a>
            </li>
        </ul>
    </nav>
</div>