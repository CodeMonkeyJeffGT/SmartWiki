<li>
    <a href="{{route('document.show',array('id'=>$project_id))}}" class="box" title="{{$project_name}}" target="_blank">
        <div class="pull-left imgbox">
            <i class="fa fa-desktop"></i>
        </div>
        <h4>{{$project_name}}</h4>
        <span>共{{$doc_count}}个文档</span>
    </a>
</li>