@if($allpages->count()>0)
    <div class="uk-width-1-4@m uk-visible@m ">
        <div uk-sticky="offset: 120; bottom: !.uk-trips">
            <div class="uk-card uk-card-default uk-margin-medium-bottom  clearfix"  role="complementary" >
                <div class="uk-card-body " style="    border-top: 8px solid var(--primary);padding-top: 15px; !important" >
                    <ul class="uk-list uk-list-divider ">
                        <li><a href="{{url('info/'.$pages->uri)}}" >{{$pages->page_type}}</a></li>   
                        @foreach($allpages as $row)
                            @if(!($row->uri == $pages->uri))
                                <li><a href="{{url('info/'.$row->uri)}}" >{{$row->page_type}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif